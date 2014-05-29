<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Forgot Password</title>
<link href="<?php echo $this->config->base_url();?>assets/css/custom.css" rel="stylesheet">
<link href="<?php echo $this->config->base_url();?>assets/css/bootstrap.css" rel="stylesheet">
</head>
 
<body  style="background-image:url('./img/2.jpg');">
<div class="container row">
  <!--Header-->
  <div class="page-header">
    <p class=" font16 col-xs-offset-1" >SOCIAL CALENDAR</p>
  </div>
 
  
    
    <div class="col-md-4 ">
    </div>
  
    <div class="col-md-6" style="margin-top:20px">
      
      <form class="form-horizontal panel panel-default" action = "<?php echo $this->config->base_url();?>index.php/login/" method='post'>
          
          <div class="panel-body">
          <fieldset>
            <legend>Password changed, you may login now!</legend>
			
          
            
        <!--Submit button for Reset Password-->
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10" style="margin-top:-16px">
                <button type="submit" class=" btn btn-primary ">Login</button>
              </div>
            </div>
            </fieldset>
        </div>
            
        <div class="panel-footer"><a href="#" class="a">Need Help?</a></div>

      </form>
    </div>
  
  
  <div class="pull-left col-xs-12 " style="margin-top:270px"><hr>
    <ul class="list-inline"><br>
      <li>About Us</li> |
      <li>Contact Us</li> |
      <li>Terms</li> |
      <li>Privacy</li> 
    </ul>
  </div>
</div>
</body>
<script src="./assets/js/validations.js"></script>
</html>