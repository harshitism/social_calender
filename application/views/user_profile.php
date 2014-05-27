
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $title; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo $this->config->base_url();?>assets/css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <style type="text/css">
    	.footer{
			position: relative;
			margin-top: -150px; /* negative value of footer height */
			height: 150px;
			clear:both;
			padding-top:20px;
		}
		
		body{
  			padding-top: 10px;
		}

		.main_section{
			margin-top: 10px;
		}

		.status_list ul > li{
			display: inline-block;   /* You can also add some margins here to make it look prettier */
    		zoom:1;
		}

		li{
			display: inline;

		}

		.events_navigation ul li a{

			padding-left: 40px;
			padding-right: 55px;
			padding-top: 0px;
		}

		.events_navigation ul li{

			padding-left: 10px;
			padding-right: 10px;
		}



    </style>


</head>

<body>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- You'll want to use a responsive image option so this logo looks good on devices - I recommend using something like retina.js (do a quick Google search for it and you'll find it) -->
                <a class="navbar-brand" href="#">Sahil Mutneja</a>            
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Home</a>
                    </li>
                    <li><a href="">Events</a>
                    </li>
                    <li><a href="">Contacts</a>
                    </li>
                    <li><a href="#">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

   

    <div class="container">

    	<!--
    	Horizontal Navigation Menu Bar for Showing Events on the Top of the Page. Used for reminding the user of all his pending events
    	-->
    	<nav class="navbar navbar-default" role="navigation" style="margin-top:55px; height:50px;">
			<div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			     	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			        	<span class="sr-only">Toggle navigation</span>
			        	<span class="icon-bar"></span>
			        	<span class="icon-bar"></span>
			        	<span class="icon-bar"></span>
			      	</button>
			    </div>

			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse events_navigation" id="bs-example-navbar-collapse-1 scrollpane">
			    	<ul class="nav navbar-nav group" id="example-one" style="margin-left:60px;">
			        	<li>
			        		<a href="#event_details" data-toggle="modal" role="button" style="margin-top:5px;"><b>26August</b></a>
			        		<ul class="list-inline" style="margin-top:-12px; color:black;">
			        			<li>12:00AM</li>
			        			<li>10:00PM</li>
			        		</ul>
			        	</li>
			        	<li>
			        		<a href="#event_details" data-toggle="modal" role="button" style="margin-top:5px;"><b>21May</b></a>
			        		<ul class="list-inline" style="margin-top:-12px; color:black;">
			        			<li>09:00AM</li>
			        			<li>10:00AM</li>
			        		</ul>
			        	</li>
			        	<li>
			        		<a href="#event_details" data-toggle="modal" role="button" style="margin-top:5px;"><b>28May</b></a>
			        		<ul class="list-inline" style="margin-top:-12px; color:black;">
			        			<li>08:00AM</li>
			        			<li>11:00AM</li>
			        		</ul>
			        	</li>
			        	<li>
			        		<a href="#event_details" data-toggle="modal" role="button" style="margin-top:5px;"><b>21September</b></a>
			        		<ul class="list-inline" style="margin-top:-12px; color:black;">
			        			<li>02:00PM</li>
			        			<li>05:30PM</li>
			        		</ul>
			        	</li>
			        	<li>
			        		<a href="#event_details" data-toggle="modal" role="button" style="margin-top:5px;"><b>3May</b></a>
			        		<ul class="list-inline" style="margin-top:-12px; color:black;">
			        			<li>07:37PM</li>
			        			<li>06:31AM</li>
			        		</ul>
			        	</li>
			  
			      	</ul>
		   		</div><!-- /.navbar-collapse -->
		  	</div><!-- /.container-fluid -->
		</nav>

		

    	<!--Start of the three sections of the row-->
		<div class="row main_section">
			
			<!-- Start of the left section of the page, will show features like profile pic, ability to edit it
			and the list of all the followers and the persons followed by the person-->	
			<div class="col-md-3">
				<p>
					<img src="<?php echo base_url('images/pp.png'); ?>" width="262px" height="207px" alt="Status Owner"  />
				</p>
				
				<div class="btn-group btn-group-justified">
  					<div class="btn-group">
    					<button type="button" class="btn btn-default">+Edit My Profile</button>
  					</div>
  				</div>
  				<br />
				
				<div class="panel panel-default" style="margin-top:-12px;">	
                    <div class="panel-heading">
                    	Follows
                    </div>
                </div>
                
                <div class="thumbnail" style="height:150px;width:262px;margin-top:-14px;">
					
                </div>
			

				<div class="panel panel-default">	
                    <div class="panel-heading">
                    	Show All Friends
                    </div>
                </div>

                <div class="thumbnail" style="height:150px;width:262px;margin-top:-14px;">
					
                </div>

			</div>

			<!--Start of the second section of the page, will deal with all the imprtant stuff
			like adding event , show events and updates of all the following and the person himself-->
			
			<div class="col-md-6">

				<form action="#" method="post" role="form" enctype="multipart/form-data" class="facebook-share-box">
            		
                	<div class="panel panel-default">
                    	
                      	<div class="panel-body">
                        	<div class="">
                            	<textarea name="message" cols="40" rows="10" id="status_message" class="form-control message" style="height: 62px; overflow: hidden;" placeholder="What's on your mind ?"></textarea> 
                        	</div>
                      	</div>
                      
                        <div class="panel-footer">
                      	    <div class="row">
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <button type="button" class="btn btn-default"><i class="icon icon-map-marker"></i>Set Time</button>                                    	
                                        <button type="button" class="btn btn-default"><i class="icon icon-map-marker"></i>Invite</button>
                                        <button type="button" class="btn btn-default"><i class="icon icon-picture"></i> Photo</button>
                                        <button type="button" class="btn btn-default"><i class="icon icon-picture"></i>Video</button>
                                        <button type="button" class="btn btn-default"><i class="icon icon-picture"></i>HowToReach</button>                              
                                    </div>
                                </div>
                                    	
                            	<div class="col-md-2">
                                    <div class="form-group">                                                               
                                        <input type="submit" name="submit" value="Publish" class="btn btn-primary">                                                             
                                    </div>
                                </div>
                            </div>
                       	</div>
                    </div>
            
        		</form>

        		<!--All the posts and events will be fetched from the model and shown here in the form of panel-->
        		<!--The panel elements we will be considering are panel-body to show the event details 
        		and panel footer for commenting on the event
        		Every event will be shown with a different panel with each having its components-->

        		<div style="height:600px;overflow-y:scroll">
        		<!--First Post-->
	        		<div class="panel panel-default">

	        			<div class="panel-body">
	                        <div class="row">
	                        	<div class="col-md-2">
	                        		<!--Will show the image of the event putter-->
									<p>
										<img src="<?php echo base_url('images/pp.png'); ?>" width="70" height="65" alt="Status Owner"  />
									</p> 

	                        	</div>

	                        	<div class="col-md-10">
	                        		<!--Will show the description of the event in the panel-->
	                        		This is the sample first event created for the location A and the number of people who got invited are as follows
	                        		and the rest i.e. photos and videos are attached herewith.
	                        		<div class="status_list">
	                        			<ul style="padding-left:1px;">
									    	<li>
									        	<a href="#">Invite</a>
									    	</li>
									    	<li>
									        	<a href="#">Promote</a>
									    	</li>
										</ul>
									</div>
	                        	</div>
	                        </div>
	                    </div>


	                    <div class="panel-footer">
	                      	<div class="">
	                            <textarea name="comment" cols="5" rows="5" id="comment_message" class="form-control message" style="height: 34px; overflow: hidden;" placeholder="Write a Comment "></textarea> 
	                        </div>
	                    </div>

	                </div>
	        		<!--Second Post-->

	                <div class="panel panel-default">

	        			<div class="panel-body">
	                        <div class="row">
	                        	<div class="col-md-2">
	                        		<!--Will show the image of the event putter-->
									<p>
										<img src="<?php echo base_url('images/pp.png'); ?>" width="70" height="65" alt="Status Owner"  />
									</p> 

	                        	</div>

	                        	<div class="col-md-10">
	                        		<!--Will show the description of the event in the panel-->
	                        		This is the sample first event created for the location A and the number of people who got invited are as follows
	                        		and the rest i.e. photos and videos are attached herewith.
	                        		<div class="status_list">
	                        			<ul style="padding-left:1px;">
									    	<li>
									        	<a href="#">Invite</a>
									    	</li>
									    	<li>
									        	<a href="#">Promote</a>
									    	</li>
										</ul>
									</div>
	                        	</div>
	                        </div>
	                    </div>
	                    

	                    <div class="panel-footer">
	                      	<div class="">
	                            <textarea name="comment" cols="5" rows="5" id="comment_message" class="form-control message" style="height: 34px; overflow: hidden;" placeholder="Write a Comment "></textarea> 
	                        </div>
	                    </div>

	                </div>
	        		<!--Third Post-->

	                <div class="panel panel-default">

	        			<div class="panel-body">
	                        <div class="row">
	                        	<div class="col-md-2">
	                        		<!--Will show the image of the event putter-->
									<p>
										<img src="<?php echo base_url('images/pp.png'); ?>" width="70" height="65" alt="Status Owner"  />
									</p> 

	                        	</div>

	                        	<div class="col-md-10">
	                        		<!--Will show the description of the event in the panel-->
	                        		This is the sample first event created for the location A and the number of people who got invited are as follows
	                        		and the rest i.e. photos and videos are attached herewith.
	                        		<div class="status_list">
	                        			<ul style="padding-left:1px;">
									    	<li>
									        	<a href="#">Invite</a>
									    	</li>
									    	<li>
									        	<a href="#">Promote</a>
									    	</li>
										</ul>
									</div>
	                        	</div>
	                        </div>
	                    </div>
	                    

	                    <div class="panel-footer">
	                      	<div class="">
	                            <textarea name="comment" cols="5" rows="5" id="comment_message" class="form-control message" style="height: 34px; overflow: hidden;" placeholder="Write a Comment "></textarea> 
	                        </div>
	                    </div>

	                </div>
	        		<!--Fourth Post-->

	                <div class="panel panel-default">

	        			<div class="panel-body">
	                        <div class="row">
	                        	<div class="col-md-2">
	                        		<!--Will show the image of the event putter-->
									<p>
										<img src="<?php echo base_url('images/pp.png'); ?>" width="70" height="65" alt="Status Owner"  />
									</p> 

	                        	</div>

	                        	<div class="col-md-10">
	                        		<!--Will show the description of the event in the panel-->
	                        		This is the sample first event created for the location A and the number of people who got invited are as follows
	                        		and the rest i.e. photos and videos are attached herewith.
	                        		<div class="status_list">
	                        			<ul style="padding-left:1px;">
									    	<li>
									        	<a href="#">Invite</a>
									    	</li>
									    	<li>
									        	<a href="#">Promote</a>
									    	</li>
										</ul>
									</div>
	                        	</div>
	                        </div>
	                    </div>
	                    

	                    <div class="panel-footer">
	                      	<div class="">
	                            <textarea name="comment" cols="5" rows="5" id="comment_message" class="form-control message" style="height: 34px; overflow: hidden;" placeholder="Write a Comment "></textarea> 
	                        </div>
	                    </div>

	                </div>
            	


	                <div class="panel panel-default">

	        			<div class="panel-body">
	                        <div class="row">
	                        	<div class="col-md-2">
	                        		<!--Will show the image of the event putter-->
									<p>
										<img src="<?php echo base_url('images/pp.png'); ?>" width="70" height="65" alt="Status Owner"  />
									</p> 

	                        	</div>

	                        	<div class="col-md-10">
	                        		<!--Will show the description of the event in the panel-->
	                        		This is the sample first event created for the location A and the number of people who got invited are as follows
	                        		and the rest i.e. photos and videos are attached herewith.
	                        		<div class="status_list">
	                        			<ul style="padding-left:1px;">
									    	<li>
									        	<a href="#">Invite</a>
									    	</li>
									    	<li>
									        	<a href="#">Promote</a>
									    	</li>
										</ul>
									</div>
	                        	</div>
	                        </div>
	                    </div>
	                    

	                    <div class="panel-footer">
	                      	<div class="">
	                            <textarea name="comment" cols="5" rows="5" id="comment_message" class="form-control message" style="height: 34px; overflow: hidden;" placeholder="Write a Comment "></textarea> 
	                        </div>
	                    </div>

	                </div>
	            </div>

        	</div>

        	<!--The third compartment will be used for writing recent activity contents to the page-->
			<div class="col-md-3">
				<div class="panel panel-default">	
                    <div class="panel-heading">
                    	+Recent Activity
                    </div>
                </div>
                
                <div class="thumbnail" style="height:150px;width:262px;margin-top:-14px;">
					
                </div>
			

				<div class="panel panel-default">	
                    <div class="panel-heading">
                    	+Recent Activity
                    </div>
                </div>

                <div class="thumbnail" style="height:310px;width:262px;margin-top:-14px;">
					
                </div>
			</div>

		</div>
			
		
	
	</div>

	<div id="event_details" class="modal fade" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">   
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <i class="icon-remove"></i></button>
                    <h3 id="myModalLabel">End Semester Examination of Big Data and Map Reduce</h3><!--Name of the company will be shown here-->
                </div>

                <form action="#" method="post" class="form-horizontal" role="form" id="calling" name="calling">

	                <div class="modal-body">
	                        
	                     
	                    <div class="form-group">
	                        <label for="date" class="col-sm-4 control-label">Date of Event</label>
	                        <div class="col-sm-8">
	                            <input type="text" class="form-control" id="date" name="date"  placeholder="28May 3to4PM" readonly>
	                        </div>
	                    </div>

	                    <div class="form-group">
	                        <label for="location" class="col-sm-4 control-label">Location Of Event</label>
	                        <div class="col-sm-8">
	                            <input type="text" class="form-control" id="location" name="location"  placeholder="Stable Complex" readonly>
	                        </div>
	                    </div>

	                    <div class="form-group">
	                        <label for="description" class="col-sm-4 control-label">Description of Event</label>
	                        <div class="col-sm-8">
	                            <input type="text" class="form-control" id="description" name="description"  placeholder="Exam worth 50 credits" readonly>
	                        </div>
	                    </div>
	                    
	                </div>
	        
	                <div class="modal-footer" style="height:300px;overflow-y:scroll;text-align:left;paddin-top:0px;">
	                    	
	                   	<h3>Comments</h3><br />
	                                         
	                    <div class="well well-sm">
	                    	This is a sample comment number1
	                    </div>
	                    
	                    <div class="well well-sm">
	                    	This is a sample comment number2
	                    </div>

	                    <div class="panel panel-default">
		                    <div class="panel-footer">
			                    <div class="">
			                        <textarea name="comment" cols="7" rows="7" id="comment_message" class="form-control message" style="height: 34px; overflow: hidden;" placeholder="Write a Comment "></textarea> 
			                    </div>
			                </div>
			            </div>
	         
	                </div>

            	</form>

            </div>
        </div>
    </div>

    
    <div id="footer" class="container" style="margin-top:50px;">
    	<nav class="navbar navbar-default navbar-fixed-bottom">
        	<div class="navbar-inner navbar-content-center">
            	<p class="text-muted credit" align="center">Copyright &copy; Phoenix Partners</p>
        	</div>
    	</nav>
	</div>
    

    <!-- JavaScript -->
    <script src="<?php echo base_url('bootstrap/js/jquery-1.10.2.js'); ?>" ></script>
    <script src="<?php echo base_url('bootstrap/js/bootstrap.js'); ?>" ></script>
    <script src="<?php echo base_url('bootstrap/js/jquery.js'); ?>" ></script>

</body>

</html>

