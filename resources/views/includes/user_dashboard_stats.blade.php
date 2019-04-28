<style>
  h6{
    border-radius: 50%;
    width:70%;
    margin:auto;
    padding:12px;

    border: 5px solid #c1bfbf!important;
   }

  .dash{
    background-color:#ffffff00!important;
    padding: 20px 30px 30px 20px!important;
    /* border-right: 2px solid gray; */
  }
  .dash1{
    background-color:white;
    padding:20px 30px 10px 30px;
    margin-left:20px
  }
  .inbox{
    background: #fbfbfb2e!important;
    /* border-radius: 20%; */
    /* border: 1px solid #202c8624!important; */
  }
  .profilestat{
    padding-top:10px;
  }
  @media screen and (max-width: 764px){
    .dash3{
    margin-left:9%;
  }
  }
  
  
</style>
<ul class="row">
  <li class="dash col-md-6 col-sm-6 col-xs-6"><h3 style="color:black">Your Messages</h3></li>
    <li class="dash text-right col-md-5 col-sm-6 col-xs-6"><a href="{{route('my.messages')}}" style="font-weight:800; background-color:#4bdda7;" class="btn btn-success">SEE ALL THE MESSAGES</a></li>
</ul>
<ul class="row">
  <li class="dash1 col-md-11 col-sm-6 col-xs-10" style="box-shadow: 3px 2px 8px 5px #bfbfbf">
    @if(Auth::user()->countApplicantMessages())
     <h5 style="font-size:15px; font-weight:500; opacity:0.5">Please check your messages</h5>
    @else
     <h5 style="font-size:15px; font-weight:500; opacity:0.5">You have no message for now</h5>
    @endif
  </li>
</ul>
<ul class="row profilestat">
          <li class="col-md-1 col-sm-1 col-xs-1"></li>
          <li class="dash col-md-2 col-sm-3 col-xs-5">
            <div class="inbox">  
              <h6 style="font-size:22px; color:black">{{Auth::user()->num_profile_views}}</h6>
              <strong  style="font-weight:800;font-size:12px">{{__('Profile Views')}}</strong> </div>
          </li>
          <li class="dash col-md-2 col-sm-3 col-xs-5">
            <div class="inbox">  
              <h6 style="font-size:22px; color:black"><a href="{{route('my.followings')}}">{{Auth::user()->countFollowings()}}</a></h6>
              <strong  style="font-weight:800;font-size:12px">{{__('Followings')}}</strong> </div>
          </li>

          <li class="dash col-md-2 col-sm-3 col-xs-5 dash3" >
            <div class="inbox"> 
              <h6 style="font-size:22px; color:black"> <a href="{{url('my-profile#cvs')}}">{{Auth::user()->countProfileCvs()}}</a></h6>
              <strong  style="font-weight:800;font-size:12px">{{__('My CV List')}}</strong> </div>
          </li>
        
          <li  class="dash col-md-2 col-sm-3 col-xs-5">
            <div class="inbox">  
              <h6 style="font-size:22px; color:black"><a href="{{route('my.messages')}}">{{Auth::user()->countApplicantMessages()}}</a></h6>
              <strong  style="font-weight:800;font-size:12px">{{__('Messages')}}</strong> </div>
          </li>
          
</ul>