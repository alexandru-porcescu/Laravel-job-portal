<style>
	 .tox-progress-content img{
		/* width:70%; */
		max-width:152px;
		height:154px;
    width:152px;
		border-radius: 80%;
		text-align: center;
		margin: auto;
		justify-content: center;
		margin-top: 12px;
		 
		
 	}
	.usernavdash li {
		text-align:center;
	 }
	.percentage:hover{
    cursor:pointer;
  }
</style>
<div class="col-md-3 col-sm-4">
    <ul class="usernavdash">
      <li><a href="{{ route('company.detail', Auth::guard('company')->user()->slug) }}">
       
      
      <?php
			$i = 0 ;
			if(!empty($company->phone)){
				$i = $i + 20;}
				if(!empty($company->email)){
					$i = $i +15;}
					if(!empty($company->name)){
						$i = $i +15;}
						if(!empty($company->verified)){
							$i = $i +15;}
							if(!empty($company->location)){
								$i = $i +15;}
								if(isset($company->logo)){
									$i = $i +20;
								 
									}
								 
									
		?>
      <div class="col-md-25 col-sm-50 "  >
            <div style="margin: auto" class="tox-progress" data-size="180" data-thickness="12" data-color="#229922"
                 data-background="#ffffff" data-progress="{{$i}}" data-speed="2000">
                <div class="tox-progress-content" data-vcenter="true">
                @if(isset($company))
                {{$company->printCompanyImage()}}
                @endif
                </div>
            </div>
        
		  </div>
      </a></li>
      <h2 style="text-align:center; color:black">
        @if(isset($company))
        {{$company->name}}</h2>
        @endif
      <div style="text-align:center">
        <strong id="reset-button" style="font-family:'Josefin Sans', sans-serif;font-size: 1.4em; margin-top:10px;font-weight:700; " class="percentage" style="padding: 5px 20px">   {{$i}}% </strong>
        </div>
      <li><a class="btn btn-info" href="{{ route('company.profile') }}"><i class="fa fa-user" aria-hidden="true"></i> {{__('Company Profile')}}</a></li>
       <li><a href="{{ route('post.job') }}" class="btn btn-info"><i class="fa fa-desktop"  aria-hidden="true"></i> {{__('Post Job')}}</a></li>
       
        <li><a href="{{ route('company.logout') }}" class="btn btn-info" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out" aria-hidden="true"></i> {{__('Logout')}}</a>
      <form id="logout-form" action="{{ route('company.logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
      </li>
    </ul>
    <div class="row">
    </div>
  </div>