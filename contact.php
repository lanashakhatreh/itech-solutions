<?php
			include 'include/header.php';
		 ?>

<title>Contact </title>

	<div id="banner-area">
		<img src="images/banner/banner2.jpg" alt ="" />
		<div class="parallax-overlay"></div>
			<!-- Subpage title start -->
			<div class="banner-title-content">
	        	<div class="text-center">
		        	<h2>Contact Us</h2>
		        	<ul class="breadcrumb">
			            <li><a href="index.php"> Home </a></li>
			            <li><a href="contact.php"> Contact</a></li>
		          	</ul>
	          	</div>
          	</div><!-- Subpage title end -->
	</div><!-- Banner area end -->

	<!-- Main container start -->

	<section id="main-container">
		<div class="container">
			
			<div class="row">
				<!-- Map start here -->
				<div id="map-wrapper" class="no-padding">
					<div class="map" id="map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3363.3990220475134!2d35.852811315176126!3d32.542194381043444!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzLCsDMyJzMxLjkiTiAzNcKwNTEnMTguMCJF!5e0!3m2!1sen!2sjo!4v1555145267809!5m2!1sen!2sjo"
width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
						

					</div>
				</div><!--/ Map end here -->	

			</div><!-- Content row  end -->

			<div class="gap-40"></div>

			<div class="row">
	    		<div class="col-md-7">
	    			<form id="contact-form" action="" method="post" role="form" name="contact">
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label>Name</label>
								<input class="form-control" name="name" id="name" placeholder="" type="text" required>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Email</label>
									<input class="form-control" name="email" id="email" 
									placeholder="" type="email" required>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Subject</label>
									<input class="form-control" name="subject" id="subject" 
									placeholder="" required>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Message</label>
							<textarea class="form-control" name="message" id="message" placeholder="" rows="10" required></textarea>
						</div>
						<div class="text-right"><br>
							<button class="btn btn-primary solid blank" type="submit" name="submit">Send Message</button> 
						</div>
					</form>
	    		</div>
	    		<div class="col-md-5">
	    			<div class="contact-info">
		    			<h3>Contact Details</h3>
			    		
			    		<br>
			    		<p><i class="fa fa-home info"></i> Abdul Qader Al-Tal Street ,Jordan, Irbid </p>
						<p><i class="fa fa-phone info"></i>  +962795960240 </p>
						<p><i class="fa fa-envelope-o info"></i> info@itechjo.com</p>
						<p><i class="fa fa-globe info"></i>  www.itechjo.com</p>
						<p><i class="fa fa-clock-o"></i>Working Hours:</br>  09:00 - 18:00  </br>  Suterday to Thursday</P>
						</div>
    				</div>
	    		</div>
	    	</div>

		</div><!--/ container end -->

	</section><!--/ Main container end -->

<?php
		include 'include/db.php';
	 ?>
	<?php
      if (isset($_POST['submit']))
    {
    
    	
    	 $name = $_POST['name'];
        $email = $_POST['email'];
        $subject= $_POST['subject'];
        $message = $_POST['message'];
        




$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}


$sql = "INSERT INTO contact(name,email,message) ";
                 
 $sql .= "VALUES('{$name}','{$email}','{$message}') "; 

             if (mysqli_query($conn, $sql)) 

             {

                $send = 'send message';
             
               ?>

               


               <?php
           }
            else


             {
               $error ='not send ';
            }
            $conn->close();
    }
    
    
    
    
    
     ?>
	

		<!-- Footer start -->
<?php
			include 'include/footer.php';
		 ?>