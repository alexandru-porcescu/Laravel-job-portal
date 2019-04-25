<style>
  .form-control{
    border-radius: 10px!important;
  }
  .searchwrap{
    background-color: #1ec2dc59;
    padding: 1px 0;
    border-radius: 0.5em;
  }
</style>
<div class="searchwrap">

  <div class="container">

    <!-- <h3>{{__('One million success stories')}}. <span>{{__('Start yours today')}}.</span></h3> -->

    

    @if(Auth::guard('company')->check())

    <form action="{{route('job.seeker.list')}}" method="get">

    <div class="searchbar row">

      <div class="col-md-6" style="padding:0 10px">

        <input type="text"  name="search" value="{{Request::get('search', '')}}" class="form-control" placeholder="{{__('Freelancer Details')}}" />

      </div>
 

      

      

      
      <!-- <div class="col-md-2">

      <span id="city_dd">

      {!! Form::select('city_id[]', ['' => __('Select City')], Request::get('city_id', null), array('class'=>'form-control', 'id'=>'city_id')) !!}

      </span>

      </div> -->

      <div class="col-md-2" style="padding:0 10px">

        <input type="submit" style="border-radius:0.5em" class="btn" value="{{__('Search')}}">

      </div>

    </div>

    </form>

    @else

    <form action="{{route('job.list')}}" method="get">

    <div class="searchbar row">

      <div class="col-md-4" style="padding:0 10px">

        <input type="text"  name="search" value="{{Request::get('search', '')}}" class="form-control" placeholder="{{__('Enter Skills or job title')}}" />

      </div>


      

      @if((bool)$siteSetting->country_specific_site)

      {!! Form::hidden('country_id[]', Request::get('country_id[]', $siteSetting->default_country_id), array('id'=>'country_id')) !!}

      @else

      <div class="col-md-3" style="padding:0 10px">

      {!! Form::select('country_id[]', ['' => __('Select Country')]+$countries, Request::get('country_id', $siteSetting->default_country_id), array('class'=>'form-control', 'id'=>'country_id')) !!}

      </div>

      @endif

      

      <div class="col-md-3" style="padding:0 10px">

      <span id="state_dd">

      {!! Form::select('state_id[]', ['' => __('Select State')], Request::get('state_id', null), array('class'=>'form-control', 'id'=>'state_id')) !!}

      </span>

      </div>

      <!-- <div class="col-md-3">

      <span id="city_dd">

      {!! Form::select('city_id[]', ['' => __('Select City')], Request::get('city_id', null), array('class'=>'form-control', 'id'=>'city_id')) !!}

      </span>

      </div> -->

      <div class="col-md-2" style="padding:0 10px">

        <input type="submit" class="btn" style="border-radius:10px" value="{{__('Search Job')}}">

      </div>

    </div>

    </form>

    @endif

    

    <!-- button start 

    <div class="getstarted"><a href="{{url('/')}}"><i class="fa fa-user" aria-hidden="true"></i> {{__('Get Started Now')}}</a></div>

    button end --> 

    

  </div>

</div>