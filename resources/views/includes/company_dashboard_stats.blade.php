<style>
  h6{
    border-radius: 50%;
    /* width:70%; */
    margin:auto;
    padding:29%;

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
    margin-left:29%;
    }
    .dash2{
      padding-top:5px!important;
      padding-bottom:5px!important;
      text-align:center!important;
      margin:auto!important;
    }
    
    .dash4{
      padding-bottom:5px!important;
      text-align:center!important;

      
    }
  }
  
</style>
<ul class="row profilestat">
    <li class="col-md-2 col-sm-1 col-xs-1"></li>
    <li class="col-md-2 col-sm-4 col-xs-5">
      <div class="inbox">
        <h6 style="font-size:22px; color:black"><a href="{{route('posted.jobs')}}">{{Auth::guard('company')->user()->countOpenJobs()}}</a></h6>
        <strong style="font-weight:800;font-size:12px"> {{__('Open Jobs')}}</strong> </div>
    </li>

   

    <li class="col-md-2 col-sm-4 col-xs-5">
      <div class="inbox"> 
        <h6 style="font-size:22px; color:black"><a href="{{route('company.followers')}}">{{Auth::guard('company')->user()->countFollowers()}}</a></h6>
        <strong>{{__('Followers')}}</strong> </div>
    </li>
    <li class="col-md-2 col-sm-4 col-xs-5 dash3">
      <div class="inbox">  
        <h6 style="font-size:22px; color:black"><a href="{{route('company.messages')}}">{{Auth::guard('company')->user()->countCompanyMessages()}}</a></h6>
        <strong style="font-weight:800;font-size:12px">{{__('Messages')}}</strong> </div>
    </li>
  </ul>

  