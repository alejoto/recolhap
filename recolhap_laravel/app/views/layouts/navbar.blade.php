<div class="navbar navbar-fixed-top navbar-inverse"  >
	<div class="navbar-inner"  >
		<div class="container">
			<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			{{link_to('../../modules/myaccount/myaccount.php?page=patients','RECOLHAP',$attributes = array('class'=>'brand'))}}
			<div class="nav-collapse collapse">
				<ul class="nav">
					<li  class=""  >
						{{link_to('../../modules/includes/instructions.php','Ayuda')}}
					</li>
					{{--unchecked users--}}
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div>
</div>