<?php
			include 'include/header.php';
		 ?>

<title>JOB Application </title>
	<div id="banner-area">
		<img src="images/banner/banner2.jpg" alt ="" />
		<div class="parallax-overlay"></div>
			<!-- Subpage title start -->
			<div class="banner-title-content">
	        	<div class="text-center">
		        	<h2>Job Application</h2>
		        	<ul class="breadcrumb">
			            <li><a href="index.php"> Home </a></li>
			            <li><a href="job_application.php"> Job Application</a></li>
		          	</ul>
	          	</div>
          	</div><!-- Subpage title end -->
	</div><!-- Banner area end -->

	<!-- Main container start -->
<section class="contact-container">

	<div class="container">

		<div class="row">

			<div class="col-sm-7 sep">
	
						<form class="form-horizontal" class="reset-on-success" action="" method="post" name="itech">

					<div class="form-group">
						<label for="email" class="col-sm-3 control-label">Email</label>
						<div class="col-sm-6">
							<input type="email" name="email" class="form-control" id="email" placeholder="Enter email here...">
						</div>
					</div>

					<div class="form-group">
							<label for="fullname" class="col-sm-3 control-label">Fullname</label>
							<div class="col-sm-6">
									<input type="text" name="fullname" id="fullname"  class="form-control round-input">
							</div>
					</div>

					<div class="form-group">
						<label for="phone" class="col-sm-3 control-label">Phone number</label>
						<div class="col-sm-6">
							<input type="text" name="phone" class="form-control round-input" id="phone" placeholder="">
						</div>
					</div>

					<div class="form-group">
						
						<label for="password" class="col-sm-3 control-label">Short Introduction</label>
						<div class="col-sm-9">
							<textarea  class="form-control o_website_form_input" id="intro" name="intro" 
							required=""  placeholder="Impress us!" ></textarea>
						</div>
					</div>

					<div class="form-group">
						<label for="confirm_password" class="col-sm-3 control-label">Resume </label>
						<div class="col-sm-9">
					<input type="file" class="form-control o_website_form_input" required=""  id="resume"  name="resume" >
						</div>
					</div>



					


					<div class="form-group ">
						<div class="col-sm-offset-3 col-sm-9">
						<button type="submit" class="btn" name="submit">Submit</button>
						</div>
					</div>
					

					

				</form>
				</div>

			</div>
			</section>


<?php
		include 'include/db.php';
	 ?>
<?php

     if (isset($_POST['submit']))
    {

    	
    		
    	$name = $_POST['fullname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $intro = $_POST['intro'];
        $resume =$_POST['resume'];


//"itechjoc_user", "lana321", "itechjoc_mg"       

$sql = "INSERT INTO register(username,email,phone,intro,resume) ";
                 
            $sql .= "VALUES('{$name}','{$email}','{$phone}','{$intro}','{$resume}') "; 


     
                 if (mysqli_query($conn, $sql)) 

             {

             //  echo "<h1>send </h1>";
            
               ?>

               


               <?php
           }
            else


             {
                 echo "<h1> not send </h1>";
;
            }
            $conn->close();
    }
    
    
    
    
    
     ?>
    
	

		<!-- Footer start -->
<?php
			include 'include/footer.php';
		 ?>