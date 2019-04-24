<style>
	 .tox-progress-content img{
		/* width:70%; */
		max-width:85%;
		/* height:90px; */
		border-radius: 80%;
		text-align: center;
		margin: auto;
		justify-content: center;
		margin-top: 12px;
		 
		
 	}
	.usernavdash li {
		text-align:center;
	 }
	  
</style>
<div class="col-md-3 col-sm-4">

	<div class="switchbox">

		<div class="txtlbl">{{__('Immediate Available')}} <i class="fa fa-info-circle" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="{{__('Are you immediate available')}}?" data-original-title="{{__('Are you immediate available')}}?" title="{{__('Are you immediate available')}}?"></i>
		</div>

		<div class="pull-right">

			<label class="switch switch-green"> @php

        $checked = ((bool)Auth::user()->is_immediate_available)? 'checked="checked"':'';

        @endphp

        <input type="checkbox" name="is_immediate_available" id="is_immediate_available" class="switch-input" {{$checked}} onchange="changeImmediateAvailableStatus({{Auth::user()->id}}, {{Auth::user()->is_immediate_available}});">

        <span class="switch-label" data-on="On" data-off="Off"></span> <span class="switch-handle"></span> </label>

		</div>

		<div class="clearfix"></div>

	</div>

	<ul class="usernavdash">
		<li class="active"><a href="{{ route('view.public.profile', Auth::user()->id) }}"> 
		<h2 style="text-align:center;  ">{{Auth::user()->getName()}}</h2>
		 
		 
		</a>
		</li>
		 
		<?php
			$i = 0 ;
			if(!empty($user->phone)){
				$i = $i + 15;}
				if(!empty($user->email)){
					$i = $i +15;}
					if(!empty($user->first_name)){
						$i = $i +15;}
						if(!empty($user->last_name)){
							$i = $i +15;}
							if(!empty($user->street_address)){
								$i = $i +15;}
								if(!empty($user->image)){
									$i = $i +10;}
									if(isset( $profileCv)){
										$i = $i +15;
									}
								 
									
		?>
		<div class="col-md-25 col-sm-50 "  >
            <div style="margin: auto" class="tox-progress" data-size="180" data-thickness="12" data-color="#229922"
                 data-background="#ffffff" data-progress="{{$i}}" data-speed="2000">
                <div class="tox-progress-content" data-vcenter="true">
				{{Auth::user()->printUserImage()}}
                </div>
            </div>
 			<div style="text-align:center">
			<button id="reset-button" style="font-family:'Josefin Sans', sans-serif;font-size: 1.4em;margin-top:10px;font-weight:700; " class="btn btn-success" style="padding: 5px 20px"> Your Profile {{$i}}% </button>
			</div>
		</div>
				 
 

		<li>
			<a class="" href="{{url('my-profile#cvs')}}">
			<p style="text-align:center; color:red"> Current CSV Counts</p>
			<h1 style="text-align:center;color:red">{{ Auth::user()->countProfileCvs() }}</h1></a>
		</li>
	
		
		</li>

		 <li>
		<p sytle="    padding: 0 10px">To access the requests for proposals, you must fill the following information in your company's profile:</p> 
		<p>- description of the proposed services<br>
		- city<br>
		- skills (5 minimum)<br>
		- on site / remote work <br>
		- average daily rate <br>
		- fields of expertise <br></p>
		 </li>

		<li><a class="btn btn-success btn-lg" style="background-color:#4bdda7;" href="{{ route('my.profile') }}"><i class="fa fa-user" aria-hidden="true"></i> {{__('My Profile')}}</a>
		</li>

	 
 



		<li><a class="btn btn-success btn-lg" style="background-color:#4bdda7;" href="{{ route('my.favourite.jobs') }}"><i class="fa fa-heart" aria-hidden="true"></i> {{__('My Favourite Jobs')}}</a>
		</li>



		 
		<li ><a class="btn btn-success btn-lg" style="background-color:#4bdda7;"   href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out" aria-hidden="true"></i> {{__('Logout')}}</a>

			<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">

				{{ csrf_field() }}

			</form>

		</li>

	</ul>
 

</div>