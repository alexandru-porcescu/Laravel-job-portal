<style>
@media screen and (max-width: 600px) {
 .my-button {

    /* margin-top:20px; */
    padding-top: 10px;
    padding-bottom: 10px;
    background-image: url(images/one1.png)!important; 
    background-color: transparent;
    border: none;
    background-repeat: no-repeat;
    width: 300px!important;
    font-size: 30px;
    min-height: 83px!important;
    max-height: 83px;
    font-weight: 500;
    letter-spacing: 0px;
 	}
 
	.my-button:hover{
		 opacity:0.6;
		 color:black;
	}
    a .my-button{
    text-align:center;
    font-size:30px;
    text-decoration: none;
    color: #fff;
    background-color:transparent;

 }
 .fc{
     /* margin-top:0px; */
 }
 .banner-btn{
    justify-content: center;
    display: flex;
 }
}
.my-button {
    margin-top:20px;
    padding-top: 10px;
    padding-bottom: 10px;
    background-image: url(images/one.png);
    background-color: transparent;
    border: none;
    background-repeat: no-repeat;
    width: 350px;
    font-size: 35px;
    min-height: 97px;
    font-weight: 700;
    letter-spacing: 0px;

}
 
.my-button:hover {
    background-image: url("images/two.png");
}

.container {
    /* width: 700px; */
    margin: 0px auto;
}
 

</style>
<div class="bannerwrap">

  <div class="container">

 
    
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="text-center">
                 <a href="{{route('job.list', ['is_featured'=>1])}}">
                    <button class="my-button" type="button">{{__('Mission')}}</button>    
                 </a>
                <!-- <button class="my-button" type="button"><a href="{{route('job.list', ['is_featured'=>1])}}">{{__('Mission')}}</a></button> -->
            </div>
 
        </div>
        <div class="col-md-12 col-sm-12  ">
            <div class="col-md-6 col-sm-6 text-right banner-btn" >
                 
                    <!-- <button class="my-button  " type="button"><a href="{{route('register')}}">{{__('Freelancer')}}
                    <h6 class="fc">{{__('Freelancer count')}} :  {{number_format(DB::table('users')->count())}}</h6>
                    </a></button> -->
                <a  href="{{route('register')}}"> 
                     <button class="my-button  " type="button"> {{__('Freelancer')}}
                    <h6 class="fc">{{__('Freelancer count')}} :  {{number_format(DB::table('users')->count())}}</h6>
                    </button>
                </a>

            </div>
            <div class="col-md-6 col-sm-6 banner-btn">
                 
                   <!-- <button class="my-button  " type="button"><a href="{{route('recruiterregister')}}">{{__('Recruiter')}}
                    <h6 class="fc">{{__('Counter projects online')}} :  {{number_format(DB::table('jobs')->where('is_active','=', "1")->count())}}</h6>
                   </a></button> -->
                   <a   href="{{route('recruiterregister')}}">
                       <button class="my-button  " type="button"> {{__('Recruiter')}}
                    <h6 class="fc">{{__('Counter projects online')}} :  {{number_format(DB::table('jobs')->where('is_active','=', "1")->count())}}</h6>
                        </button>
                   </a>

            </div>
        </div>
    </div>


    

    <!-- button start 

    <div class="getstarted"><a href="{{url('/')}}"><i class="fa fa-user" aria-hidden="true"></i> {{__('Get Started Now')}}</a></div>

    button end --> 

    

  </div>
  <div class="row freelancer_count" >
       <div class="container" style="margin:0%">
        </div>
    </div>

</div>