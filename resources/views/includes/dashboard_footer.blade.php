 <?php ?>

<style>
 .copyright{
position:absolute;
   bottom:0;
   width:100%;
   height:60px;
   background-color: #ededed; 
 },

  
</style>

<!--Copyright-->

<div class="copyright">

  <div class="container">
	<div class="row">
		<div class="col-md-8">
			<div class="bttxt">{{__('Copyright')}} &copy; {{date('Y')}} {{ $siteSetting->site_name }}. {{__('All Rights Reserved')}}.</div>
		</div>
		<div class="col-md-4">
			<!-- <div class="paylogos"><img src="{{asset('/')}}images/payment-icons.png" alt="" /></div>	 -->
		</div>
	</div>
    

  </div>

</div>

