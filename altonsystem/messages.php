<?php include 'header.php';?>

<body>
	<?php include 'navbar.php';?>
	<?php include 'menu-tab.php';?>
	
		<div class = "content">
			<div class = "col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class = "col-md-8 col-lg-8">
					<div class = "widget">
						<div class = "widget-head">
							Map Of Store Location
						</div>
						<div class = "widget-content">
							<iframe src=https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d251485.235037394!2d122.6808429824727!3d9.979073515485425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33ac1139eb89d7c5%3A0x7fc6e64c24198513!2sAlton%20Bar%20%26%20Restaurant!5e0!3m2!1sen!2sus!4v1574402122214!5m2!1sen!2sus" width="940" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>"
						</div>
					</div>				
				</div>
				<br>
<br>
<br>
				<div class = "col-md-4 col-lg-4">
					<div class = "widget">
						<div class = "widget-head">
							Message/Feedback
						</div>
						<div class = "widget-content">
							<div class = "padd">
								<form class="form-horizontal" action = "add_message.php" method="post">                              
                                <div class="form-group">
                                  <label class="col-lg-3 control-label">Fullname</label>
                                  <div class="col-lg-8">
                                    <input name = "fullname" type="text" class="form-control" placeholder="Please type your name" required >
                                  </div>
                                </div>                                
                                <div class="form-group">
                                  <label class="col-lg-3 control-label">Email</label>
                                  <div class="col-lg-8">
                                    <input type="email"  name = "email" class="form-control" placeholder="Please type your email" required>
                                  </div>
                                </div>
								<div class="form-group">
                                  <label class="col-lg-3 control-label">Subject</label>
                                  <div class="col-lg-8">
                                    <input type="text" name = "subject" class="form-control" placeholder="Subject" required>
                                  </div>
                                </div>
                                
                                <div class="form-group">
                                  <label class="col-lg-3 control-label">Comments</label>
                                  <div class="col-lg-8">
                                    <textarea name = "message" class="form-control" rows="5" placeholder="Comments here....."required></textarea>
                                  </div>
                                </div>
								<div class="form-group">
                                  <div class="col-lg-offset-3 col-lg-8">
                                    <button  class="btn btn-sm btn-success btn-block">Send</button>                                  
                                  </div>
                                </div>
                              </form>

						</div>
						</div>
					</div>		
				</div>				
					
		</div>
		<div class = "content">
			<div class = "col-lg-12 col-md-12  col-sm-12">
				<div class = "col-lg-12 col-md-12 col-sm-12 ">
					<div class = "title-header">
						
					</div>					
				</div>
				<br/>
				<br/>
				<br/>
				<div class = "col-lg-3 col-md-3 col-sm-3">
					
				</div>
				
<?php include 'footer.php';?> 	
<?php include 'script.php';?>
</body>
</html>



