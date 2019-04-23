<style>
  h6{
    border-radius: 50%;
    width:50%;
    margin:auto;
    padding:10px;

    border: 5px solid #c1bfbf!important;
  
  }

  .dash{
    background-color:#ffffff00!important;
    padding: 35px!important;
    /* border-right: 2px solid gray; */
  }
  .inbox{
    background: #fbfbfb2e!important;
    border-radius: 1.8em;
    border: 1px solid #202c8624!important;
  }
  
</style>
<ul class="row profilestat">
          <li class="dash col-md-3 col-sm-4 col-xs-6">
            <div class="inbox"> <i class="fa fa-eye"  style="color:black" aria-hidden="true"></i>
              <h6>{{Auth::user()->num_profile_views}}</h6>
              <strong>{{__('Profile Views')}}</strong> </div>
          </li>
          <li class="dash col-md-3 col-sm-4 col-xs-6">
            <div class="inbox"> <i class="fa fa-user-o"  style="color:blue" aria-hidden="true"></i>
              <h6><a href="{{route('my.followings')}}">{{Auth::user()->countFollowings()}}</a></h6>
              <strong>{{__('Followings')}}</strong> </div>
          </li>
          <!-- <li class="dash col-md-3 col-sm-4 col-xs-6">
            <div class="inbox"> <i class="fa fa-briefcase" aria-hidden="true"></i>
              <h6><a href="{{url('my-profile#cvs')}}">{{Auth::user()->countProfileCvs()}}</a></h6>
              <strong>{{__('My CV List')}}</strong> </div>
          </li> -->
          <li class="dash col-md-3 col-sm-4 col-xs-6">
            <div class="inbox"> <i class="fa fa-heart" style="color:red" aria-hidden="true"></i>
              <h6><a href="{{ route('my.favourite.jobs') }}"> 2</a></h6>
              <strong> {{__('My Favourite Jobs')}}</strong> </div>
          </li>

 
          <li class="dash col-md-3 col-sm-4 col-xs-6">
            <div class="inbox"> <i class="fa fa-envelope-o"  style="color:green" aria-hidden="true"></i>
              <h6><a href="{{route('my.messages')}}">{{Auth::user()->countApplicantMessages()}}</a></h6>
              <strong>{{__('Messages')}}</strong> </div>
          </li>
</ul>