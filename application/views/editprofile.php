<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Edit Profile</title>

    <!-- Bootstrap core CSS -->
    <link href="./assets/css/bootstrap.css" rel="stylesheet" >
     <link href="./assets/css/custom.css" rel="stylesheet" >
    
    
    <link href="<?php echo $this->config->base_url();?>assets/css/bootstrap.css" rel="stylesheet" >
    <link href="<?php echo $this->config->base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" >

    <style type="text/css">
    
    a:hover,a:focus,a:active{
        text-decoration: none;

    }
    li.active>span{
      color: white;
    }
    li>span{
      color:#00A8EC;
    }
    label>a{
      color: #484848;
    }
    li{
      margin-left:15px;
    }
    h3{
        border-bottom:1px solid rgba(225, 225, 225, 1);
        padding-bottom:10px;
        margin-bottom:30px;
        margin-top:30px;
    }
    

    </style>
</head>
  <script type="text/javascript">
  function change_password()
  {
    document.getElementById("change-password").style.display = "none";
    document.getElementById("showchangepassword").style.display = "initial";
  }
  function show_change_password()
  {
    document.getElementById("showchangepassword").style.display = "none";
    document.getElementById("change-password").style.display = "initial";
  }
  </script>
<body onload="change_password()">
     <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><?php echo $full_name;?></a>            
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Home</a>
                    </li>
                    <li><a href="#">Events</a>
                    </li>
                    <li><a href="#">Contacts</a>
                    </li>
                    <li><a href="#">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    
    <div class="col-md-offset-1 container" style="margin-top:70px">
       <div class="panel panel-default">
          <div class="panel-heading" style="height:80px;">
            
            <ul class="nav nav-pills">
                <li class="active">
                    <a href="#basicinfo" data-toggle="pill">
                    <div>
                    <span class="glyphicon glyphicon-user" style="margin-left:25px;"></span>
                    <br/>
                    Basic Info
                    </div>
                    </a>
                </li>
                <li class="">
                    <a href="#work" data-toggle="pill">
                    <div>
                    <span class="glyphicon glyphicon-briefcase" style="margin-left:50px;"></span>
                    <br/>
                    Work & Education
                    </div>
                    </a>
                </li>
                <li class="">
                    <a href="#profile" data-toggle="pill">
                    <div>
                    <span class="glyphicon glyphicon-picture" style="margin-left:35px;"></span>
                    <br/>
                    Profile Photo
                    </div>
                    </a>
                </li>
                <li class="">
                <a href="#location" data-toggle="pill">
                <div>
                <span class="glyphicon glyphicon-map-marker" style="margin-left:20px;"></span>
                <br/>
                Location
                </div>
                </a>
                </li>
            </ul>         
          </div>
          <!-- End of Nav Pills -->
          <div class="panel-body">
           <div class="tab-content panel-body">
              
              <div class="tab-pane active in" id="basicinfo">
                    <div class="col-md-8 ">
                     <h3>Basic Information</h3>
                     <?php if(isset($error))
					echo $error."<br><br>";?>
                    <form class="form-horizontal" action="<?php echo $this->config->base_url();?>index.php/update_userdetails/basicinfo" method="post" role="form" >
                          
                          <div class="form-group">
                            <label for="firstname" class="col-sm-3 control-label">First Name:</label>
                            <div class="col-sm-6">
                              <input type="text" class="form-control" name="first_name" placeholder="First Name" value="<?php echo $first_name;?>">
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="middlename" class="col-sm-3 control-label" >Middle Name:</label>
                            <div class="col-sm-6">
                              <input type="text" class="form-control" name="middle_name" placeholder="Middle Name" value="<?php echo $middle_name;?>">
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="lastname" class="col-sm-3 control-label">Last Name:</label>
                            <div class="col-sm-6">
                              <input type="text" class="form-control" name="last_name" placeholder="Last Name" value="<?php echo $last_name;?>">
                            </div>
                          </div>


                          <div class="form-group">
                            <label for="useremail" class="col-sm-3 control-label">Email:</label>
                            <div class="col-sm-6">
                              <input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo $email;?>">
                            </div>
                          </div>
                          
                          <div class="form-group">
                            <label for="contactno" class="col-sm-3 control-label">Contact No:</label>
                            <div class="col-sm-6">
                              <input type="text" class="form-control" name="contact" placeholder="Contact No." value="<?php echo $contact?>">
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="birthdate" class="col-sm-3 control-label">Birthday:</label>
                            <div class="col-sm-6">
                              <input type="text" class="form-control" name="dob" placeholder="Birthday" value="<?php echo $dob;?>">
                            </div>
                          </div>
                        
                            <div class="form-group">
                              <label for="gender" class="col-sm-3 control-label">Gender:</label>
                              <div class="col-sm-5">
                               <div class="input-group">
                                  <span class="input-group-addon">I'm</span>
                                    <select name="gender" class="form-control ">
                                    <?php if($gender=="Male")
									{
                                       echo "<option value='Male'>Male</option>";
                                       echo "<option value='Female'>Female</option>";
									}
									   else
									   {
									   echo "<option value='Female'>Female</option>";
                                       echo "<option value='Male'>Male</option>";
									   }
									   ?>
                                    </select>
                              </div>
                             </div>
                            </div>

                           
                            <h3 >Account Password</h3>
                             <div class="well">
                                   <div class="form-group " id="showchangepassword">
                                    <label class="col-sm-3 control-label" style="margin-top:-8px;">Change Password</label>
                                    <div class="col-sm-6">
                                    <a href="#change-password" style="color:#a1a1a1;" onclick="show_change_password()">Click here to change Password</a>
                                    </div>
                                   </div>
                                   
                                   <div id="change-password">
                                   <div class="form-group">
                                         <label for="changepassword" class="col-sm-3 ">Change Password:</label>
                                         <div class="col-sm-6">
                                         <input type="password" class="form-control" name="new_password" placeholder="Enter a new Password">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                       <label for="retypepassword" class="col-sm-3 ">Retype Password:</label>
                                       <div class="col-sm-6">
                                       <input type="password" class="form-control" name="confirm_new_password" placeholder="Retype Password">
                                    </div>
                                    </div>
                                  </div>
                                </div>
                                <br />
                                <hr />

                          <div class="pull-right">
                              <div class="form-group">
                                  <button type="submit" class="btn btn-primary" style="margin-right:15px">Save</button>      
                              </div>
                          </div>

                        </form>
                    </div>
              </div>
              
              <!-- End of Basic Info -->

              <div class="tab-pane fade panel-body" id="work">
                    
                    <div class="col-md-8 ">
                       <h3>Education</h3>
                        <form class="form-horizontal" action="<?php echo $this->config->base_url();?>index.php/update_userdetails/education_work" method="post" role="form">
                          
                          <div class="form-group">
                            <label for="school" class="col-sm-3 control-label">School:</label>
                            <div class="col-sm-6">
                              <input type="text" class="form-control" name="school" placeholder="School Name" value="<?php echo $school;?>">
                            </div>
                          </div>

                           <div class="form-group">
                            <label for="college" class="col-sm-3 control-label">College:</label>
                            <div class="col-sm-6">
                              <input type="text" class="form-control" name="college" placeholder="College Name" value="<?php echo $college;?>">
                            </div>
                          </div> 

                          <div class="form-group">
                            <label for="university" class="col-sm-3 control-label">University:</label>
                            <div class="col-sm-6">
                              <input type="text" class="form-control" name="university" placeholder="University Name" value="<?php echo $university;?>">
                            </div>
                          </div>

                          <h3>Work</h3>
                            <div class="form-group">
                            <label for="occupation" class="col-sm-3 control-label">Occupation:</label>
                            <div class="col-sm-6">
                              <input type="text" class="form-control" name="occupation" placeholder="Occupation" value="<?php echo $occupation;?>">
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="company" class="col-sm-3 control-label">Company:</label>
                            <div class="col-sm-6">
                              <input type="text" class="form-control" name="company" placeholder="Company Name" value="<?php echo $company;?>">
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="designation" class="col-sm-3 control-label">Job Designation:</label>
                            <div class="col-sm-6">
                              <input type="text" class="form-control" name="job_designation" placeholder="Job Designation" value="<?php echo $job_designation;?>">
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="workemail" class="col-sm-3 control-label">Work Email:</label>
                            <div class="col-sm-6">
                              <input type="email" class="form-control" name="work_email" placeholder="Work Email" value="<?php echo $work_email;?>">
                            </div>
                          </div>
                          <br />
                          <hr />

                           <div class="pull-right">
                              <div class="form-group">
                                  <button type="submit" class="btn btn-primary" style="margin-right:15px">Save</button>      
                              </div>
                          </div>

                        </form>
                    </div>
                </div>

              <!-- End of Work & Education -->
              <div class="tab-pane fade panel-body" id="profile" style="height:400px">
			<?php $this->load->helper('form');
             echo form_open_multipart(''.$this->config->base_url().'index.php/update_userdetails/profilepic');
                  
                echo "<div class='col-md-4' style='margin-top:40px;margin-left:100px'>";
                  echo "<div>
                        <p><strong>File Formats</strong> : jpeg, jpg, gif, png, bmp</p>
                        <p>Select an image file on your computer <strong>(20 MB Max)</strong></p>
                    </div>";

                        echo "<div class='form-group' style='margin-top:30px'>
                            <input type='file' name='pic'>
                        </div>

                         <div class='form-group'>
                           <button type='submit' class='btn btn-warning' style='margin-left:45px;margin-top:10px;'>Upload</button>      
                        </div>
                    </div>
                    <div class='col-md-5 pull-right' style='margin-top:30px;'>
                    <img src='../assets/uploads/profilepics/".$profilepic."' alt=''>
                    </div>";
			  ?>
              </div>
              <!-- End of Profile Photo Change -->

              <div class="tab-pane fade panel-body" id="location">
                  <div class="col-md-8 ">
                       <h3>Home Town</h3>
                        <form class="form-horizontal" action="<?php echo $this->config->base_url();?>index.php/update_userdetails/address" method="post" role="form">
                          
                          <div class="form-group">
                            <label for="homestate" class="col-sm-3 control-label">State:</label>
                            <div class="col-sm-6">
                              <input type="text" class="form-control" name="home_state" placeholder="State" value="<?php echo $home_state;?>">
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="homecity" class="col-sm-3 control-label">City:</label>
                            <div class="col-sm-6">
                              <input type="text" class="form-control" name="home_city" placeholder="City" value="<?php echo $home_city;?>">
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="homepincode" class="col-sm-3 control-label">Pin Code:</label>
                            <div class="col-sm-6">
                              <input type="text" class="form-control" name="home_pincode" placeholder="Pin Code" value="<?php echo $home_pincode;?>">
                            </div>
                          </div>

                          <h3>Current City</h3>
                        <form class="form-horizontal" role="form">
                          
                          <div class="form-group">
                            <label for="currentstate" class="col-sm-3 control-label">Current State:</label>
                            <div class="col-sm-6">
                              <input type="text" class="form-control" name="cur_state" placeholder="State" value="<?php echo $cur_state;?>">
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="currentcity" class="col-sm-3 control-label">Current City:</label>
                            <div class="col-sm-6">
                              <input type="text" class="form-control" name="cur_city" placeholder="City" value="<?php echo $cur_city;?>">
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="currentpincode" class="col-sm-3 control-label">Pin Code:</label>
                            <div class="col-sm-6">
                              <input type="text" class="form-control" name="cur_pincode" placeholder="Pin Code" value="<?php echo $cur_pincode;?>">
                            </div>
                          </div>

                            <br />
                            <hr />

                           <div class="pull-right">
                              <div class="form-group">
                                  <button type="submit" class="btn btn-primary" style="margin-right:15px">Save</button>      
                              </div>
                          </div>

                       </form>
                    </div>
                </div>
               </div>
            </div>
          </div>
          </div>
          
          <div  class="containerfluid" style="margin-top:40px;">
              <p style="text-indent:500px;border-top:1px solid rgba(225, 225, 225, 1);padding-top:10px;">Copyright &copy; Phoenix Partners</p>
          </div>
</body>
<script type="text/javascript" src="./assets/js/bootstrap.js" ></script>
<script type="text/javascript" src="./assets/js/jquery-1.9.0.min.js" ></script>
<script type="text/javascript" src="./assets/js/jquery-1.10.2.js" ></script>
</html>