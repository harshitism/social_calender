<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" >
    <link href="assets/css/custom.css" rel="stylesheet" >
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <script src="assets/js/jquery-1.10.2.js" ></script>
	<script src="assets/js/bootstrap.js" ></script>
    <script src="assets/js/jquery.js" ></script>
    
    <script>
		$(document).ready(function(){
			$("#name_overimage").hide();
			$(".header_block").animate({height:'30px'},10);
		  $("#header").mouseenter(function(){
				$("#header").animate({height:'200px'});
				$("#header_img").animate({height:'190px',width:'190px'});
				$("#header_name").hide(200);
				$("#name_overimage").show(200);
				$(".header_block").animate({height:'180px'});
		  });
		  $("#header").mouseleave(function(){
				$("#header").animate({height:'50px'});
				$("#header_img").animate({height:'40px',width:'40px'});
				$("#header_name").show(500);
				$("#name_overimage").hide(100);
				$(".header_block").animate({height:'30px'});
		  });
		});
</script>
    <!-- Add custom CSS here -->
    


</head>

<body style="font-family:'Comic Sans MS', cursive">
	<div style="height:50px;background-color:#72175a;overflow:hidden" id="header">
      <div style="width:1000px;margin-left:auto;margin-right:auto">
                <div class="pull-left header_block">
                	<img src="images/me.png" width="40" height="40" alt="profile_pic" style="margin-top:5px;" id="header_img">
                    <div style="background-color:#181818;opacity:0.7;color:#FFF;margin-top:-30px;text-align:center;height:30px;padding-top:5px;" id="name_overimage">Harshit Gupta</div>
                	
                </div>
                <div class="pull-left white font14 text-center header_block" style="margin:10px;padding:5px;margin-right:0px;margin-left:0px;" id="header_name">Harshit Gupta</div>
                <div class="pull-right white font14 text-center header_block" style="border-left:solid 1px #828282;margin:10px;padding:5px;margin-left:0px;margin-right:0px;width:150px;">
                	<span>Settings</span><br><br>
					<span class="font12 pull-left" style="color:#D5D5D5">Account Settings</span><br>

                    <span class="font12 pull-left" style="color:#D5D5D5">Help Center</span><br>

                    <span class="font12 pull-left" style="color:#D5D5D5">Activity Logs</span><br>

                    <span class="font12 pull-left" style="color:#D5D5D5">Privacy Settings</span><br>

                    <span class="font12 pull-left" style="color:#D5D5D5">Logout</span><br>

                    
                
                </div>
                <div class="pull-right white font14 text-center header_block" style="border-left:solid 1px #828282;margin:10px;padding:5px;margin-left:0px;margin-right:0px;width:150px;">
                	<span>Following &nbsp;&nbsp;<span class="font10 " style="color:#ABABAB"><strong>43</strong></span></span>
                	<div style="height:135px;margin-top:20px;">
                    	<span class="font12 pull-left" style="color:#D5D5D5">Nimish Agarwal</span><br>
                        <span class="font12 pull-left" style="color:#D5D5D5">Sumit Awasthi</span><br>
                        <span class="font12 pull-left" style="color:#D5D5D5">Navendu Saxena</span><br>
                        <span class="font12 pull-left" style="color:#D5D5D5">Rohit Kumar</span><br>
                        <span class="font12 pull-left" style="color:#D5D5D5">Sahil Mukteja</span><br>
                    </div>
                </div>
                <div class="pull-right white font14 text-center header_block" style="margin:10px;padding:5px;margin-left:0px;margin-right:0px;width:150px;">
                	<span>Followers &nbsp;&nbsp;<span class="font10" style="color:#ABABAB"><strong>43</strong></span></span>
					<div style="height:135px;margin-top:20px;">
                    	<span class="font12 pull-left" style="color:#D5D5D5">Nimish Agarwal</span><br>
                        <span class="font12 pull-left" style="color:#D5D5D5">Sumit Awasthi</span><br>
                        <span class="font12 pull-left" style="color:#D5D5D5">Navendu Saxena</span><br>
                        <span class="font12 pull-left" style="color:#D5D5D5">Rohit Kumar</span><br>
                        <span class="font12 pull-left" style="color:#D5D5D5">Sahil Mukteja</span><br>
                    </div>
                </div>
                <div class="pull-right header_block">
                	<input type="text" style="width:300px;margin-top:10px;border:solid 1px #FFF;height:30px;" placeholder="Search"/><br/>
                    <input type="text" style="width:300px;margin-top:10px;border:solid 1px #FFF;height:30px;" placeholder="City"/><br>

                    <input type="text" style="width:300px;margin-top:10px;border:solid 1px #FFF;height:30px;" placeholder="Profession"/><br><br>
					<input type="button" class="btn btn-default btn-sm" value="Search"/>

                </div> 
                <div class="pull-right header_block"><i class="fa fa-calendar white font24" style="margin:12px;"></i> </div>
                
        </div>
        
    	
    </div>
    
    <div style="width:1200px;margin-left:auto;margin-right:auto;height:200px">
    	<div style="height:150px;width:150px;border:solid 1px #72175a;margin:10px;" class="pull-left">
        	<div class="font14 text-center purple"><strong>Event 1</strong></div>
			<div class="font12 text-center purple">2-JUL-2014</div>
            <div class="font12 text-center purple">11:00 PM</div>
            <div class="font12 text-center purple">@ Sahara Mall,Delhi</div>
            
        </div>
        <div style="height:150px;width:150px;border:solid 1px #72175a;margin:10px;" class="pull-left"></div>
        <div style="height:150px;width:150px;border:solid 1px #72175a;margin:10px;" class="pull-left"></div>
        <div style="height:150px;width:150px;border:solid 1px #72175a;margin:10px;" class="pull-left"></div>
        <div style="height:150px;width:150px;border:solid 1px #72175a;margin:10px;" class="pull-left"></div>
        <div style="height:150px;width:150px;border:solid 1px #72175a;margin:10px;" class="pull-left"></div>
        <div style="height:150px;width:150px;border:solid 1px #72175a;margin:10px;" class="pull-left"></div>
    	
    </div>
    
    <div style="width:1200px;margin-left:auto;margin-right:auto;height:200px">
    
    	<div style="width:250px;height:600px;border-right:solid 1px #ABABAB" class="pull-left text-center">
        	<span>Other tiles</span>
        </div>
        <div style="width:250px;height:600px;border-left:solid 1px #ABABAB" class="pull-right text-center">
        	<span>Other tiles</span>
        </div>
    	<div style="height:150px;width:300px;border:solid 1px #72175a;margin:25px;" class="pull-left">
        	<div class="font14 text-center purple"><strong>Other Events</strong></div>
			<div class="font12 text-center purple">2-JUL-2014</div>
            <div class="font12 text-center purple">11:00 PM</div>
            <div class="font12 text-center purple">@ Sahara Mall,Delhi</div>
            Background is according to event theme.
        </div>
        <div style="height:150px;width:300px;border:solid 1px #72175a;margin:25px;" class="pull-left"></div>
        <div style="height:150px;width:300px;border:solid 1px #72175a;margin:25px;" class="pull-left"></div>
        <div style="height:150px;width:300px;border:solid 1px #72175a;margin:25px;" class="pull-left"></div>
        
    	
    </div>
    
</body>
</html>
