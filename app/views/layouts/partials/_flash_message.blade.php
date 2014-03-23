@if ( Session::has('flash_message') )
	@if ( Session::has('flash_type') )
		<div class="flash-message flash-alert">
	@else
		<div class='flash-message flash-info'>
	@endif
	   <p>{{ Session::get('flash_message') }}</p>
   </div>
@endif
