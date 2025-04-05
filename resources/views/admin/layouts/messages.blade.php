@if(session()->has('error'))
   <div class="alert alert-danger">
        {{ session()->get('error') }}
    </div>
@endif

@if (session()->has('message'))
	<p class="alert alert-success" id="success-message">{{ session('message') }}</p>
@endif