<!--Error Section-->
@if (count($errors) > 0)
	<div class="container animated shake" id="errorNotification" >
	<div class="row">
	  <div class="col s12 m8 l6 offset-m1 offset-l3 red white-text" style="margin-top: 20px;">
	  <ul>
	      @foreach($errors->all() as $error)
					<li title="Click to hide"><i class="fa fa-times"></i> {{ $error }}</li>
		 @endforeach
	  </ul>
	    
	  </div>
	</div>
	</div>		
@endif


@if (session('error'))
	<div class="container" id="errorNotification">
	<div class="row">
	  <div class="col s12 m8 l6 offset-m1 offset-l3 red white-text" style="margin-top: 20px;">
	  <ul>
		<li title="Click to hide"><i class="fa fa-times"></i> {{ session('error') }}</li>
	  </ul>
	    
	  </div>
	</div>
	</div>		
@endif
