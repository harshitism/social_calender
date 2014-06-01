

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>User Profile</title>

    <!-- Bootstrap core CSS -->
   <link href="./assets/css/bootstrap.css" rel="stylesheet" >
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet" >

    <link href="<?php echo $this->config->base_url();?>assets/css/bootstrap.css" rel="stylesheet" >
    <link href="<?php echo $this->config->base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" >

    <!-- Add custom CSS here -->
     <style type="text/css">
    
    	a:hover, a:active,a:focus{
    	  	text-decoration: none;
    	 }

    	h4{
		    color: white;
		    padding-top:60px; 
		    margin-bottom: 10px;
		    border:hidden;
		    font-size: 30px;
		    font-family: "trebuchet ms", sans-serif;    
		}
		
		.carousel-caption{
			padding-bottom:0px; 
		}
		.item{
			
		    background: #333333;   
		    text-align: center;
		    height: 130px !important;
		}

    </style>

</head>

<body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- You'll want to use a responsive image option so this logo looks good on devices - I recommend using something like retina.js (do a quick Google search for it and you'll find it) -->
                <a class="navbar-brand" href="#"><?php echo $name?></a>            
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
    </div>

   

   <div class="container-fluid" style="margin:51px 0 18px;">
						<!--.navbar-collapse --> 
				   		<div class="bs-example">
						    <div id="myCarousel" class="carousel slide " data-interval="3000" data-ride="carousel">
						    
						        <!-- Carousel items -->
                                <?php
								$no = count($events);
								if($no!=0)
								{
						        echo "<div class='carousel-inner '>";
						         echo "<div class='active item'>";
						            echo  "<div class='carousel-caption'>";
						                echo "<a href='#event_details' data-toggle='modal' role='button'>";
						                 echo " <div>";
						                  echo "<h4>".$events[0]['event_name']."</h4>";
						                  echo "<p>".$events[0]['start_date']."</p>";
						                  echo "</div>";
						             	 echo "</a>";
						                echo "</div>";
						            echo "</div>";
						            for($i=1;$i<$no;$i++)
									{
						            echo "<div class='item '>";
						               echo "<div class='carousel-caption'>";
						                echo "<a href='#event_details' data-toggle='modal' role='button'>";
						                 echo " <div>";
						                  echo "<h4>".$events[$i]['event_name']."</h4>";
						                  echo "<p>".$events[$i]['start_date']."</p>";
						                  echo "</div>";
						             	 echo "</a>";
						                echo "</div>";
						            echo "</div>";}
						        echo "</div>";}?>
						        <!-- Carousel nav -->
						        <a class="carousel-control left" href="#myCarousel" data-slide="prev">
						            <span class="glyphicon glyphicon-chevron-left"></span>
						        </a>
						        <a class="carousel-control right" href="#myCarousel" data-slide="next">
						            <span class="glyphicon glyphicon-chevron-right"></span>
						        </a>
						    </div>
						</div>
					</div>
		

		

    	<!--Start of the three sections of the row-->
		<div class="row main_section">
			
			<!-- Start of the left section of the page, will show features like profile pic, ability to edit it
			and the list of all the followers and the persons followed by the person-->	
			<div class="col-md-3">
				<p>
					<img src="../assets/uploads/profilepics/<?php echo $profilepic?>" width="262px" height="207px" alt="Status Owner"  />
				</p>
				
				<div class="btn-group btn-group-justified">
  					<div class="btn-group">
    					<button type="button" class="btn btn-default" style="width:265px">Edit My Profile</button>
  					</div>
  				</div>
  				<br />
				
				  <!--  <div class="thumbnail" style="height:150px;width:262px;margin-top:-14px;">-->

				<div class="panel panel-default" style="margin-top:12px;width:265px;">	
                    <div class="panel-heading" >
                    	<a href="<?php echo $this->config->base_url();?>index.php/follower/extract_follower/<?php echo $user_id;?>">Followers<span class="badge pull-right"><?php echo $followers;?></span></a>
                    </div>
                    <div class="panel-heading" >
                    	<a href="<?php echo $this->config->base_url();?>index.php/following/extract_following/<?php echo $user_id;?>">Followings<span class="badge pull-right"><?php echo $followings;?></span></a>
                    </div>
                    <div class="panel-heading" >
                    	<a href="<?php echo $this->config->base_url();?>index.php/profilepic">Change profile Picture<span class="badge pull-right"></span></a>
                    </div>
                  </div>
               <!-- </div>-->
			
				<div class="panel panel-default" style="margin-top:-8px;width:265px;">	
                    <div class="panel-heading">
                    	<a href="<?php echo $this->config->base_url();?>index.php/friend/extract_friend/<?php echo $user_id;?>">Show All Friends<span class="badge pull-right"><?php echo $friends;?></span></a>
                    </div>
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

        		
        		<!--First Post-->
                <?php if($events[0]['event_name']=="".$user_id." don't have any event!!!")
						echo "no events";
						else
						{
							echo "<div style='height:600px;overflow-y:scroll'>";
							$no = count($events);
							for($j=0;$j<$no;$j++)
							{
	        		echo "<div class='panel panel-default'>";

	        		echo "<div class='panel-body'>";
	                  echo "<div class='row' style='float:left;'>";
	                        	echo "<div style='width:325px;'>";
	                        		//<!--Will show the image of the event putter-->
									echo "<div style='float:left;'>";
										echo "<img src='sahilmutneja.com/calendar/images/pp.png' width='40' height='35' alt='Status Owner' />";
                                        echo "</div>";
                                        echo "<div style='float:right;'>";
										echo "<img src='safdsa.png' width='270' height='250' alt='event pic' />";
									echo "</div> ";
	                        	echo "</div>";
                                echo "</div>";
	                        	echo "<div style='margin-left:335px;'>";
	                        		//<!--Will show the description of the event in the panel-->
	                        		echo "Event Name : ".$events[$j]['event_name']."<br>";
									echo "How To Reach : <br>";
                                    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Latitude : ".$events[$j]['latitude']."<br>";
                                    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Longitude : ".$events[$j]['longitude']."<br>";
                                    echo "People Invited : ".$events[$j]['no_invited']."<br>";
                                    echo "Start Date : ".$events[$j]['start_date']."<br>";
                                    echo "End Date : ".$events[$j]['end_date']."<br>";
                                    echo "Description : ".$events[$j]['event_desc']."";
	                        		echo "<div class='status_list'>";
	                        		echo "<ul style='padding-left:1px;'>";
									    	echo "<li>";
									        echo "<a href='#'>Invite</a>";
									    	echo "</li>";
									    	echo "<li>";
									        	echo "<a href='#'>Promote</a>";
									    	echo "</li>";
										echo "</ul>";
									echo "</div>";
	                        	echo "</div>";
	                        echo "</div>";
	                    echo "</div>";


	                    echo "<div class='panel-footer'>";
	                      	echo "<div class=''>";
	                           echo "<textarea name='comment' cols='5' rows='5' id='comment_message' class='form-control message' style='height: 34px; overflow: hidden;' placeholder='Write a Comment '></textarea> ";
	                        echo "</div>";
	                    echo "</div>";

	                
							}echo "</div>";}?>
                        
                  
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
    <script src="http://sahilmutneja.com/calendar/bootstrap/js/jquery-1.10.2.js" ></script>
    <script src="http://sahilmutneja.com/calendar/bootstrap/js/bootstrap.js" ></script>
    <script src="http://sahilmutneja.com/calendar/bootstrap/js/jquery.js" ></script>

</body>

</html>

