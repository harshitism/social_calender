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
			
		  $("#header").mouseenter(function(){
				$("#header").animate({height:'200px'});
				$("#header_img").animate({height:'190px',width:'190px'});
				$("#header_name").hide(200);
				$("#name_overimage").show(200);
		  });
		  $("#header").mouseleave(function(){
				$("#header").animate({height:'50px'});
				$("#header_img").animate({height:'40px',width:'40px'});
				$("#header_name").show(500);
				$("#name_overimage").hide(100);
		  });
		});
</script>
    <!-- Add custom CSS here -->
    


</head>

<body style="font-family:'Comic Sans MS', cursive">
	<div style="height:50px;background-color:#72175a;overflow:hidden" id="header">
      <div style="width:1000px;margin-left:auto;margin-right:auto">
                <div class="pull-left">
                	<img src="images/me.png" width="40" height="40" alt="profile_pic" style="margin-top:5px;" id="header_img">
                    <div style="background-color:#181818;opacity:0.7;color:#FFF;margin-top:-30px;text-align:center;height:30px;padding-top:5px;" id="name_overimage">Harshit Gupta</div>
                	
                </div>
                <div class="pull-left white font14 text-center" style="margin:10px;padding:5px;margin-right:0px;margin-left:0px;" id="header_name">Harshit Gupta</div>
                <div class="pull-right white font14 text-center" style="border-left:solid 1px #828282;margin:10px;padding:5px;margin-left:0px;margin-right:0px;width:150px;">Settings</div>
                <div class="pull-right white font14 text-center" style="border-left:solid 1px #828282;margin:10px;padding:5px;margin-left:0px;margin-right:0px;width:150px;">Following &nbsp;&nbsp;<span class="font10 " style="color:#ABABAB"><strong>43</strong></span></div>
                <div class="pull-right white font14 text-center" style="border-left:solid 1px #828282;margin:10px;padding:5px;margin-left:0px;margin-right:0px;width:150px;">Followers &nbsp;&nbsp;<span class="font10" style="color:#ABABAB"><strong>43</strong></span></div>
                <div class="pull-right">
                	<input type="text" style="width:300px;margin-top:10px;border:solid 1px #FFF;height:30px;" placeholder="Search"/><br/>
                    <input type="text" style="width:300px;margin-top:10px;border:solid 1px #FFF;height:30px;" placeholder="City"/><br>

                    <input type="text" style="width:300px;margin-top:10px;border:solid 1px #FFF;height:30px;" placeholder="Profession"/><br><br>
					<input type="button" class="btn btn-default btn-sm" value="Search"/>

                    
                </div> 
                <div class="pull-right"><i class="fa fa-calendar white font24" style="margin:12px;"></i> </div>
                
        </div>
        
    	
    </div>
    
</body>
</html>
