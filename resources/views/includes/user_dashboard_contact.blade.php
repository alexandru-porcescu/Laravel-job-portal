<style>
	 .top_headline {
        font-size: 12px;
        padding: 0 5px 0 5px;
        font-weight: 900;
        opacity: 0.4;
     }
     .middle_title{
        font-weight: 800;
        font-size: 16px;
     }
     .phone_number{
         font-weight:600;
     }
     .send_mail{
            color: #4bdda7;
     }
     .send_mail:hover{
         background-color:none!important;
     }
     .notification_title{
    
         font-size:12px;
         font-family: cursive;
        line-height:25px;
        color:black;
     }
</style>
<div class="col-md-2 col-sm-2" style="background:white; padding:13px ;box-shadow:5px 4px 10px 5px #888888;">  

 

	<ul class="usernavdash">
		<li style="background-color:none ">
            <p class="top_headline"> ANY QUESTION? CONTACT US!</p>  
            <p class="middle_title">Support Team</p>
            <p class="phone_number">+33 (0)1 23 45 67 89</p>
            <a class="send_mail" href="mailto::chooseyour@freelance.com">support@choosefreelance.com</a>
		</li>
        <hr>
        <?php 
            $d1 = strtotime(Auth::user()->created_at);
             
            $now = time();
            $d2 = $now-$d1;
            $days = round($d2/(60*60*24));
        ?>
        <li style=" ">
            <p class="top_headline">YOUR NOTIFICATION</p>
            <a style=" " href="{{url('/')}}" class="logo"><img src="{{asset('/')}}images/logoen.png" style="max-width:50%" alt="" />  <br><span  class="notification_title">Welcome <strong style="font-weight:900">{{Auth::user()->getName()}}</strong> to <strong style="font-weight:900">chooseyourfreelance</strong>! 
            Start by completing your profile to access the lastest requests for proposals from our clients. <strong style="opacity:0.5"> <?php echo $days ?> days ago</strong> </span></a>
        </li>
        
	</ul>
 

</div>