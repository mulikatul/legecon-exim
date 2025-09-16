<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ClientLogoFormRequest;
use App\Models\ClientLogo;
use Illuminate\Http\Request;
use JsValidator;

class ClientLogoController extends AdminBaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientLogos = ClientLogo::position('desc')->get();
        return view('admin.client_logos.index',compact('clientLogos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clientLogoValidator = JsValidator::formRequest(ClientLogoFormRequest::class);
        return view('admin.client_logos.create',compact('clientLogoValidator'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ClientLogoFormRequest $request)
    {
        $position = ClientLogo::max('position');
        $request->request->add(['position' => $position+1]);
        $this->storeClientLogo(new ClientLogo(),$request);
        return $this->redirectToIndex('admin.client-logo', $this->constants->get('constants.message.save'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        try 
        {
            $clientLogoValidator = JsValidator::formRequest(ClientLogoFormRequest::class);
            $clientLogo = ClientLogo::findorFail($id);
            return view('admin.client_logos.edit',compact('clientLogoValidator','clientLogo'));
        } 
        catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) 
        {
            return $this->redirectToIndexError('admin.client-logo', 'Client logo not found.');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ClientLogoFormRequest $request, string $id)
    {
        try 
        {
            $clientLogo = ClientLogo::findorFail($id);
            $request->request->add(['position' => $clientLogo->position]);
            $this->storeClientLogo($clientLogo,$request);
            return $this->redirectToIndex('admin.client-logo', $this->constants->get('constants.message.update'));
        } 
        catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) 
        {
            return $this->redirectToIndexError('admin.client-logo', 'Client Logo not found.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try 
        {
            $clientLogo = ClientLogo::findorFail($id);
            $this->mediaService->deleteFile($clientLogo->logo_image);
            $clientLogo->delete();
            return $this->redirectToIndex('admin.client-logo', $this->constants->get('constants.message.delete'));
        } 
        catch (\Exception $e) 
        {
            return $this->redirectToIndexError('admin.client-logo', 'An error occurred while deleting the client logo.');            
        }
    }

    public function storeClientLogo($clientLogo,$data)
    {
        $clientLogo->client_name   = $data->client_name;
        $clientLogo->alt_text    = $data->alt_text;
        $clientLogo->position    = $data->position;
        $clientLogo->status      = $data->status ? 1 : 0;
        if ($data->hasFile('logo_image')){            
            $this->mediaService->deleteFile($clientLogo->logo_image);
            $clientLogo->logo_image = $this->mediaService->uploadAndCompress($data->file('logo_image'), config('constants.uploads.client_logo'));
        }
        $clientLogo->save();
    }

    public function updateOrder(Request $request)
    {
        foreach ($request->order as $row) {
            ClientLogo::whereId($row['id'])->update([
                'position' => $row['position']
            ]);
        }

        return $this->responseToJson('order updated successfully');
    }
}