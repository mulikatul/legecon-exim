<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TestimonialFormRequest;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use JsValidator;

class TestimonialController extends AdminBaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = Testimonial::position('desc')->get();
        return view('admin.testimonials.index',compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $testimonialValidator = JsValidator::formRequest(TestimonialFormRequest::class);
        return view('admin.testimonials.create',compact('testimonialValidator'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TestimonialFormRequest $request)
    {
        $position = Testimonial::max('position');
        $request->request->add(['position' => $position+1]);
        $this->storeTestimonial(new Testimonial(),$request);
        return $this->redirectToIndex('admin.testimonials', $this->constants->get('constants.message.save'));
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
            $testimonialValidator = JsValidator::formRequest(TestimonialFormRequest::class);
            $testimonial = Testimonial::findorFail($id);
            return view('admin.testimonials.edit',compact('testimonialValidator','testimonial'));
        } 
        catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) 
        {
            return $this->redirectToIndexError('admin.testimonials', 'Testimonial not found.');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TestimonialFormRequest $request, string $id)
    {
        try 
        {
            $testimonial = Testimonial::findorFail($id);
            $request->request->add(['position' => $testimonial->position]);
            $this->storeTestimonial($testimonial,$request);
            return $this->redirectToIndex('admin.testimonials', $this->constants->get('constants.message.update'));
        } 
        catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) 
        {
            return $this->redirectToIndexError('admin.testimonials', 'Testimonial not found.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try 
        {
            $testimonial = Testimonial::findorFail($id);
            // $this->mediaService->deleteFile($testimonial->image);
            $testimonial->delete();
            return $this->redirectToIndex('admin.testimonials', $this->constants->get('constants.message.delete'));
        } 
        catch (\Exception $e) 
        {
            return $this->redirectToIndexError('admin.testimonials', 'An error occurred while deleting the testimonials.');            
        }
    }


    public function storeTestimonial($testimonial,$data)
    {
        $testimonial->client_name   = $data->client_name;
        $testimonial->company_name  = $data->company_name;
        $testimonial->description   = $data->description;
        // $testimonial->alt_text    = $data->alt_text;
        $testimonial->position    = $data->position;
        $testimonial->status      = $data->status ? 1 : 0;
        // if ($data->hasFile('image')){            
        //     $this->mediaService->deleteFile($testimonial->image);
        //     $testimonial->image = $this->mediaService->uploadAndCompress($data->file('image'), config('constants.uploads.testimonial'));
        // }
        $testimonial->save();
        return;
    }

    public function updateOrder(Request $request)
    {
        foreach ($request->order as $row) {
            Testimonial::whereId($row['id'])->update([
                'position' => $row['position']
            ]);
        }

        return $this->responseToJson('order updated successfully');
    }
}
