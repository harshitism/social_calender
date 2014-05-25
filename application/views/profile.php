
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
                <a class="navbar-brand" href="#">Profile Person</a>            
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

   

    <div class="container-fluid" style="margin:51px 0 18px;">
						<!--.navbar-collapse --> 
				   		<div class="bs-example">
						    <div id="myCarousel" class="carousel slide " data-interval="3000" data-ride="carousel">
						    
						        <!-- Carousel items -->
						        <div class="carousel-inner ">
						            <div class="active item ">
						                <div class="carousel-caption ">
						                  <a href="#event_details" data-toggle="modal" role="button" >
						                  <div>
						                  <h4>Semester Examination Preparation</h4>
						                  <p>12-03-2015 12:09pm</p>
						                  </div>
						             	  </a>
						                </div>
						            </div>
						            
						            <div class="item ">
						                <div class="carousel-caption ">
						                  <a href="#event_details" data-toggle="modal" role="button">
						                  <div >
						                  <h4>Semester Examination</h4>
						                  <p>13-03-2015 12:09pm</p>
						                  </div>
						             	  </a>
						                </div>
						            </div>
						            <div class=" item ">
						                <div class="carousel-caption">
						                  <a href="#event_details" data-toggle="modal" role="button" >
						                  <div>
						                  <h4>Semester Examination Result</h4>
						                  <p>12-04-2015 12:09pm</p>
						                  </div>
						             	  </a>
						                </div>
						            </div>
						        </div>
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
		<div class="main_section container">
			
			<!-- Start of the left section of the page, will show features like profile pic, ability to edit it
			and the list of all the followers and the persons followed by the person-->	
			<div class="col-md-3">
					<p>
					<img src="./img/pp.png"  height="207" alt="Status Owner"   />
					</p>
					
  					<div class="btn-group">
    					<button type="button" class="btn btn-default" style="width:255px">Edit My Profile</button>
  					</div>
  				
  				<br />

				<div class="panel panel-default" style="margin-top:12px;">	
                    <div class="panel-heading" >
                    	Follows
                    </div>
                </div>
                
                <div class="thumbnail" style="height:150px;width:262px;margin-top:-14px;">
					
                </div>
			

				<div class="panel panel-default" style="margin-top:-8px">	
                    <div class="panel-heading">
                    	Show All Friends
                    </div>
                </div>

                <div class="thumbnail" style="height:150px;width:262px;margin-top:-14px;">
					
                </div>

			</div>

			<!--Start of the second section of the page, will deal with all the imprtant stuff
			like adding event , show events and updates of all the following and the person himself-->
			
			<div class="col-md-6" >

				<form action="#" method="post">
            		
                	<div class="panel panel-default">
                    	
                      	<div class="panel-body">
                    
                            	<textarea name="message" cols="40" rows="10" id="status_message" class="form-control message" style="height: 62px; overflow: hidden;" placeholder="What's on your mind ?"></textarea> 
                    
                      	</div>
                      
                        <div class="panel-footer">
                      	    <div class="row">
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <button type="button" class="btn btn-default" title="Set Time">
                                        <span class="glyphicon glyphicon-time"></span></button>                                    	
                                        <button type="button" class="btn btn-default" title="Invite">
                                        <span class="glyphicon glyphicon-user"></span>	</button>
                                        <button type="button" class="btn btn-default" title="Photo">
                                        <span class="glyphicon glyphicon-picture"></span></button>
                                        <button type="button" class="btn btn-default" title="Video">
                                        <span class="glyphicon glyphicon-facetime-video"></span></button>
                                        <button type="button" class="btn btn-default" title="How To Reach">
                                        <span class="glyphicon glyphicon-map-marker"></span></button>                              
                                    </div>
                                </div>
                                    	
                            	
                                    <div class="form-group">                                                               
                                        <input type="submit" name="submit" value="Publish" class="btn btn-primary">                                                             
                                    </div>
                                
                            </div>
                       	</div>
                    </div>
            
        		</form>

        		<!--Every event will be shown with a different panel with each having its components-->

        		
        		<!--First Post-->
	        		<div class="panel panel-default">
						<div class="panel-body">
	                        <div class="row">
	                        	<div class="col-md-2">
	                        		
									<p>
										<img src="./img/pp.png" width="70" height="65" alt="Status Owner"  />
									</p> 
	                        	</div>
							<div class="col-md-10">
	                        		
	                        		This is the sample first event created for the location A and the number of people who got invited are as follows
	                        		and the rest i.e. photos and videos are attached herewith.
	                        		
	                        			<ul class="list-inline">
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
						
						<div class="panel-footer">
                           <textarea name="comment1" cols="5" rows="5" id="comment_message1" class="form-control message" style="height: 34px; overflow: hidden;" placeholder="Write a Comment "></textarea> 
           	           </div>
           	       </div>

	        		<!--Second Post-->
	        			<div class="panel panel-default">
						  <div class="panel-body">
	                        <div class="row">
	                        	<div class="col-md-2">
	                        		
									<p>
										<img src="./img/pp.png" width="70" height="65" alt="Status Owner"  />
									</p> 
	                        	</div>
							<div class="col-md-10">
	                        		
	                        		This is the sample first event created for the location A and the number of people who got invited are as follows
	                        		and the rest i.e. photos and videos are attached herewith.
	                        		
	                        			<ul class="list-inline">
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
						
						<div class="panel-footer">
                           <textarea name="comment2" cols="5" rows="5" id="comment_message2" class="form-control message" style="height: 34px; overflow: hidden;" placeholder="Write a Comment "></textarea> 
           	           </div>
           	       </div>
	        		
	        		<!--Third Post-->

	        		<div class="panel panel-default">
						<div class="panel-body">
	                        <div class="row">
	                        	<div class="col-md-2">
	                        		
									<p>
										<img src="./img/pp.png" width="70" height="65" alt="Status Owner"  />
									</p> 
	                        	</div>
							<div class="col-md-10">
	                        		
	                        		This is the sample first event created for the location A and the number of people who got invited are as follows
	                        		and the rest i.e. photos and videos are attached herewith.
	                        		
	                        			<ul class="list-inline">
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
						
						<div class="panel-footer">
                           <textarea name="comment3" cols="5" rows="5" id="comment_message3" class="form-control message" style="height: 34px; overflow: hidden;" placeholder="Write a Comment "></textarea> 
           	           </div>
           	       </div>	
	                
	        		<!--Fourth Post-->

	                <div class="panel panel-default">
						<div class="panel-body">
	                        <div class="row">
	                        	<div class="col-md-2">
	                        		
									<p>
										<img src="./img/pp.png" width="70" height="65" alt="Status Owner"  />
									</p> 
	                        	</div>
							<div class="col-md-10">
	                        		
	                        		This is the sample first event created for the location A and the number of people who got invited are as follows
	                        		and the rest i.e. photos and videos are attached herewith.
	                        		
	                        			<ul class="list-inline">
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
						
						<div class="panel-footer">
                           <textarea name="comment4" cols="5" rows="5" id="comment_message4" class="form-control message" style="height: 34px; overflow: hidden;" placeholder="Write a Comment "></textarea> 
           	           </div>
           	       </div>
	           

        	</div>

        	<!--The third compartment will be used for writing recent activity contents to the page-->
			<div class="col-md-3">
				<div class="panel panel-default">	
                    <div class="panel-heading">
                    	Recent Activity
                    </div>
                </div>
                
                <div class="thumbnail" style="height:150px;width:262px;margin-top:-14px;">
					
                </div>
			

				<div class="panel panel-default">	
                    <div class="panel-heading">
                    	Recent Activity
                    </div>
                </div>

                <div class="thumbnail" style="height:310px;width:262px;margin-top:-14px;">
					
                </div>
			</div>
		</div>

	<div id="event_details" class="modal fade" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">   
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <span class="glyphicon glyphicon-remove"></span></button>
                    <h3 id="myModalLabel">Event Details</h3><!--Name of the company will be shown here-->
                </div>

                <form action="#" method="post" class="form-horizontal" role="form" id="calling" name="calling">

                    <div class="modal-body">
                        
                        <div class="form-group">
                            <label for="name" class="col-sm-4 control-label">Name of Event</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="name" name="name"  placeholder="Event Name" readonly>
                            </div>
                        </div>
                        
                     
                        <div class="form-group">
                            <label for="date" class="col-sm-4 control-label">Date of Event</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="date" name="date"  placeholder="5th May 3 to 4PM" readonly>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="location" class="col-sm-4 control-label">Location Of Event</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="location" name="location"  placeholder="Location" readonly>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="description" class="col-sm-4 control-label">Description of Event</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="description" name="description"  placeholder="Description" readonly>
                            </div>
                        </div>
                    
                    </div>
        
                    <div class="modal-footer">
                    	<div class="col-sm-2">
                            <button type="submit" name="status" data-dismiss="modal" class="btn btn-primary">Edit Event</button>
                        </div>
                        <button class="btn btn-success" data-dismiss="modal" aria-hidden="true">OK</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    
    <div id="footer" class="container-fluid" style="margin:50px 0 0">
    	<div class="panel-footer">
        	<p  style="text-indent:580px">Copyright &copy; Phoenix Partners</p>
        </div>
	</div>
    

    <!-- JavaScript -->
    <script src="./assets/js/jquery-1.9.0.min.js" ></script>
    <script src="./assets/js/bootstrap.js" ></script>
    <script src="./assets/js/jquery.js" ></script>
    
</body>

</html>