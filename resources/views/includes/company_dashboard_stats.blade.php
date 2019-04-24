<style>
  h6{
    border-radius: 50%;
    width:37%;
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
    border-radius: 50%;
    border: 1px solid #202c8624!important;
  }
  
</style>
<ul class="row profilestat">
    <li class="col-md-3 col-sm-4 col-xs-6">
      <div class="inbox"> <i class="fa fa-clock-o" aria-hidden="true" style="color:black"></i>
        <h6><a href="{{route('posted.jobs')}}">{{Auth::guard('company')->user()->countOpenJobs()}}</a></h6>
        <strong>{{__('Open Jobs')}}</strong> </div>
    </li>
    <li class="col-md-3 col-sm-4 col-xs-6">
      <div class="inbox"> <i class="fa fa-user-o" aria-hidden="true" style="color:blue"></i>
        <h6><a href="{{route('company.followers')}}">{{Auth::guard('company')->user()->countFollowers()}}</a></h6>
        <strong>{{__('Followers')}}</strong> </div>
    </li>
    <li class="col-md-3 col-sm-4 col-xs-6">
      <div class="inbox"> <i class="fa fa-envelope-o" aria-hidden="true" style="color:green"></i>
        <h6><a href="{{route('company.messages')}}">{{Auth::guard('company')->user()->countCompanyMessages()}}</a></h6>
        <strong>{{__('Messages')}}</strong> </div>
    </li>
  </ul>