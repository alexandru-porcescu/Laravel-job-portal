<div class="section greybg">

  <div class="container"> 

    <!-- title start -->

    <div class="titleTop">

      <!-- <div class="subtitle">{{__('Here You Can See')}}</div> -->

      <h3>{{__('Latest')}} <span>{{__('Jobs')}}</span></h3>

    </div>

    <!-- title end -->

    

    <ul class="jobslist row">

      @if(isset($latestJobs) && count($latestJobs))

      @foreach($latestJobs as $latestJob)

      <?php $company = $latestJob->getCompany();?>

      @if(null !== $company)

      <!--Job start-->

      <li class="col-md-12  ">

        <div class="jobint">

          <div class="row">

            <div class="col-md-1 col-sm-1">

            <a href="{{route('job.detail', [$latestJob->slug])}}" title="{{$latestJob->title}}">

            {{$company->printCompanyImage()}}

            </a>


            </div>

            <div class="col-md-8 col-sm-8">
                <h4><a href="{{route('job.detail', [$latestJob->slug])}}" title="{{$latestJob->title}}">{{$latestJob->title}}</a></h4>
              <div class="col-md-4 col-sm-4">
                
              <div class="company"><a href="{{route('company.detail', $company->slug)}}" title="{{$company->name}}">{{$company->name}}</a></div>

              <div class="jobloc">

              <label class="fulltime" title="{{$latestJob->getJobType('job_type')}}">{{$latestJob->getJobType('job_type')}}</label> - <span>{{$latestJob->getCity('city')}}</span></div>

              </div>
              <div class="col-md-8 col-sm-8">
                <div class="company">
                  <a>{{__('TJM')}}: {{$latestJob->salary_currency}} {{$latestJob->salary_from}}-{{$latestJob->salary_to}}</a>
                </div>
                <div class="jobloc">
                  <label class="fulltime" title="{{__('Duration')}}"> {{__('Duration')}} : {{ date_format($latestJob->expiry_date,'Y-m-d')}}</label>
                </div>
              </div>

            </div>

            <div class="col-md-2 col-sm-2"><a href="{{route('job.detail', [$latestJob->slug])}}" class="applybtn">{{__('View Detail')}}</a></div>

          </div>

        </div>

      </li>

      <!--Job end--> 

      @endif

      @endforeach

      @endif

    </ul>

    <!--view button-->

    <div class="viewallbtn"><a href="{{route('job.list')}}">{{__('View All Latest Jobs')}}</a></div>

    <!--view button end--> 

  </div>

</div>