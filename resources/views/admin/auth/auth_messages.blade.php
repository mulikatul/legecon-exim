
 @if(session()->has('error'))
   <div class="alert alert-danger msg mx-2">
        {{ session()->get('error') }}
    </div>
@endif

@if (session()->has('message'))
	<p class="alert alert-success msg mx-2" id="success-message">{{ session('message') }}</p>
@endif