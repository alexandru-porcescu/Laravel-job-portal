<div class="header">
  <div class="container">
    <div class="row">
    @if(App::getLocale() == 'en')
      <div class="col-md-2 col-sm-3 col-xs-12"> <a href="{{url('/')}}" class="logo"><img src="{{asset('/')}}images/logoen.png" style="max-width:130%" alt="" /></a>
    @else
      <div class="col-md-2 col-sm-3 col-xs-12"> <a href="{{url('/')}}" class="logo"><img src="{{asset('/')}}images/logofr.png" style="max-width:130%" alt="" /></a> 
    @endif        
      <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
        <div class="clearfix"></div>
      </div>
      <div class="col-md-10 col-sm-12 col-xs-12"> 
        
        <!-- Nav start -->
        
        <div class="navbar navbar-default" role="navigation">
          <div class="navbar-collapse collapse" id="nav-main">
            @if(Auth::check())
            <ul class="nav navbar-nav">
              <li>
                <a href="{{ route('my.job.applications') }}" style=" ">{{__('My Job Applications')}}</a>

              </li>
            </ul>
            <ul class="nav navbar-nav">
              <li class=" ">
                <a href="{{ route('view.public.profile', Auth::user()->id) }}" style=" ">{{__('My Profile')}}</a>
              </li>
            </ul>
             
            <!-- <ul class="nav navbar-nav">
              <li class=" ">
                <a href="" style=" ">Application</a>
              </li>
            </ul> -->
            @endif
            <ul class="nav navbar-nav">
              <!-- <li class="{{ Request::url() == route('index') ? 'active' : '' }}"><a href="{{url('/')}}">{{__('Home')}}</a> </li>
              @foreach($show_in_top_menu as $top_menu) @php $cmsContent = App\CmsContent::getContentBySlug($top_menu->page_slug); @endphp
              <li class="{{ Request::url() == route('cms', $top_menu->page_slug) ? 'active' : '' }}"><a href="{{ route('cms', $top_menu->page_slug) }}">{{ $cmsContent->page_title }}</a> </li>
              @endforeach -->
              <!-- <li class="{{ Request::url() == route('contact.us') ? 'active' : '' }}"><a href="{{ route('contact.us') }}">{{__('Contact us')}}</a> </li> -->
              @if(Auth::check())
              <li class="dropdown userbtn"><a href="">{{Auth::user()->printUserImage()}}</a>
                <ul class="dropdown-menu">
                  <li><a href="{{route('home')}}"><i class="fa fa-tachometer" aria-hidden="true"></i> {{__('Dashboard')}}</a> </li>
                  <li><a href="{{ route('my.profile') }}"><i class="fa fa-user" aria-hidden="true"></i> {{__('My Profile')}}</a> </li>
                  <li><a href="{{ route('view.public.profile', Auth::user()->id) }}"><i class="fa fa-eye" aria-hidden="true"></i> {{__('View Public Profile')}}</a> </li>
                  <li><a href="{{ route('my.job.applications') }}"><i class="fa fa-desktop" aria-hidden="true"></i> {{__('My Job Applications')}}</a> </li>
                  <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form-header').submit();"><i class="fa fa-sign-out" aria-hidden="true"></i> {{__('Logout')}}</a> </li>
                  <form id="logout-form-header" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                  </form>
                </ul>
              </li>
              @endif @if(Auth::guard('company')->check())
       
             <li><a href="{{route('company.messages')}}"><i  style="font-size:100%"  class="fa fa-envelope-o" aria-hidden="true"></i> {{__('Company Messages')}} </a></li>
              <li><a href="{{route('company.followers')}}"> <i style="font-size:100%" class="fa fa-user-circle-o" aria-hidden="true"></i>  {{__('Company Followers')}}</a></li>
              <li><a   href="{{ route('post.job') }}"><i  class="fa fa-desktop" aria-hidden="true"></i> {{__('Post Job')}}</a></li>
               <li class="dropdown userbtn"><a href="">{{Auth::guard('company')->user()->printCompanyImage()}}</a>
                <ul class="dropdown-menu">
                  <li><a href="{{route('company.home')}}"><i class="fa fa-tachometer" aria-hidden="true"></i> {{__('Dashboard')}}</a> </li>
                  <li><a href="{{ route('company.profile') }}"><i class="fa fa-user" aria-hidden="true"></i> {{__('Company Profile')}}</a></li>
                  <li><a href="{{ route('company.detail', Auth::guard('company')->user()->slug) }}"><i class="fa fa-user" aria-hidden="true"></i> {{__('Company Public Profile')}}</a></li>
                  <li><a href="{{ route('post.job') }}"><i class="fa fa-desktop" aria-hidden="true"></i> {{__('Post Job')}}</a></li>
                  <li><a href="{{route('company.messages')}}"><i class="fa fa-envelope-o" aria-hidden="true"></i> {{__('Company Messages')}}</a></li>
                  <li><a href="{{ route('company.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form-header1').submit();">{{__('Logout')}}</a> </li>
                  <form id="logout-form-header1" action="{{ route('company.logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                  </form>
                </ul>
              </li>


              @endif 
              @if(!Auth::user() && !Auth::guard('company')->user())
			<li class="dropdown"><a>{{__('Sign in')}} <span class="caret"></span> </a> 
			                <ul class="dropdown-menu">
			                  <li><a href="{{route('login')}}">{{__('Freelancer')}}</a></li>
			                  <li><a href="{{route('recruiterlogin')}}">{{__('Recruiter')}}</a></li>
			                </ul>
			                <!-- dropdown start -->
			                
			                 
			                
			                <!-- dropdown end --> 

              </li>
              @endif
              @if(!Auth::user() && !Auth::guard('company')->user())
              <li class="dropdown"><a>{{__('Join Choose')}} <span class="caret"></span></a> 
                
                <!-- dropdown start -->
                
                <ul class="dropdown-menu">
                  <li><a href="">{{__('CV')}}</a></li>
                  <li><a href="">{{__('Missions')}}</a></li>
                  <li><a href="">{{__('Forum')}}</a></li>
                  <li><a href="">{{__('Recruiter')}}</a></li>
                  <li class="dropdown subdrop"><a>{{__('Resources')}} <span class="caret"></a>
                    <ul class="dropdown-menu subdropdown" style="display:none">
                      <li><a href="">{{__('Freelance rates')}}</a></li>
                      <li><a href="">{{__('Revenue simulation')}}</a></li>
                      <li><a href="">{{__('Directory')}}</a></li>
                      <li><a href="">{{__('IT Barometer')}}</a></li>
                      <li><a href="">{{__('Articles')}}</a></li>
                    </ul>
                  </li>
                  
                  <!-- <li><a href="{{route('login')}}">{{__('Sign in')}}</a> </li>
                  <li><a href="{{route('register')}}">{{__('Join Choose')}}</a> </li> -->
                  <!-- <li><a href="{{route('password.request')}}">{{__('Forgot Password')}}?</a> </li> -->
                </ul>
                
                <!-- dropdown end --> 
                
              </li>
              @endif
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

            <script>
              $(".subdrop").hover(function(){
                $(".subdropdown").css("display","block");
              })
              $(".subdrop").mouseleave(function(){
                $(".subdropdown").css("display", "none");
               })

            </script>

              <li class="dropdown userbtn"><a><img src="{{asset('/')}}images/lang.png" alt="" class="userimg" /></a>
                <ul class="dropdown-menu">
                  @foreach($siteLanguages as $siteLang)
                  <li><a href="javascript:;" onclick="event.preventDefault(); document.getElementById('locale-form-{{$siteLang->iso_code}}').submit();">{{$siteLang->native}}</a>
                    <form id="locale-form-{{$siteLang->iso_code}}" action="{{ route('set.locale') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                      <input type="hidden" name="locale" value="{{$siteLang->iso_code}}"/>
                      <input type="hidden" name="return_url" value="{{url()->full()}}"/>
                      <input type="hidden" name="is_rtl" value="{{$siteLang->is_rtl}}"/>
                    </form>
                  </li>
                  @endforeach
                </ul>
              </li>
            </ul>
            
            <!-- Nav collapes end --> 
            
          </div>
          <div class="clearfix"></div>
        </div>
        
        <!-- Nav end --> 
        
      </div>
    </div>
    
    <!-- row end --> 
    
  </div>
  
  <!-- Header container end --> 
  
</div>
