<?php

session_start(); //temp session
error_reporting(0); // hide undefine index
include("connection/connect.php"); // connection
if(isset($_POST['submit'] )) //if submit btn is pressed
{
     if(empty($_POST['firstname']) ||  //fetching and find if its empty
   	    empty($_POST['lastname'])||
		empty($_POST['email']) ||
		empty($_POST['phone'])||
		empty($_POST['password'])||
		empty($_POST['cpassword']) ||
		empty($_POST['cpassword'])||
		empty($_POST['need']))
		{
			$message = "All fields must be Required!";
		}
	else
	{



	if($_POST['password'] != $_POST['cpassword']){  //matching passwords
       	$message = "Password not match";
    }
	else{



	 //inserting values into db
	$mql = "INSERT INTO users(username,f_name,l_name,email,phone,password,address, need) VALUES('".$_POST['username']."','".$_POST['firstname']."','".$_POST['lastname']."','".$_POST['email']."','".$_POST['phone']."','".md5($_POST['password'])."','".$_POST['address']."','".$_POST['need']."')";
	mysqli_query($db, $mql);
		$success = "Account Created successfully! <p>You will be redirected in <span id='workshop'>5</span> second(s).</p>
														<script type='text/javascript'>
														function countdown() {
															var i = document.getElementById('workshop');
															if (parseInt(i.innerHTML)<=0) {
																location.href = 'login.php';
															}
															i.innerHTML = parseInt(i.innerHTML)-1;
														}
														setInterval(function(){ countdown(); },1000);
														</script>'";




		 header("refresh:5;url=login.php"); // redireted once inserted success
    }
	}

}


?>

<?php
include("header.php");
?>
                        </ul>
                  </div>
               </div>
            </nav>
            <!-- /.navbar -->
         </header>
         <div class="page-wrapper">
            <div class="breadcrumb">
               <div class="container">
                  <ul>
                     <li><a href="#" class="active">
					  <span style="color:red;"><?php echo $message; ?></span>
					   <span style="color:green;">
								<?php echo $success; ?>
										</span>

					</a></li>

                  </ul>
               </div>
            </div>
            <section class="contact-page inner-page">
               <div class="container">
                  <div class="row">
                     <!-- REGISTER -->
                     <div class="col-md-8">
                        <div class="widget">
                           <div class="widget-body">

							  <form action="" method="post">
                  <h1> <center> Applicant form </center></h1>
                  <hr>
                  <h4> I want :&emsp;&emsp;&emsp;&emsp;&emsp; <input type="radio" name="need" value="Training"> Training &emsp; <input type="radio" name="need" value="Job"> Job 
                    <br> </h4>
                                 <div class="row">
								  <div class="form-group col-sm-12">
                                       <label for="exampleInputEmail1">Identity Number</label>
                                       <input class="form-control" type="number" name="username" id="example-text-input" placeholder="National ID" minlength="4"  required>
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <label for="exampleInputEmail1">First Name</label>
                                       <input class="form-control" type="text" name="firstname" id="example-text-input" placeholder="First Name" minlength="4" required>
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <label for="exampleInputEmail1">Last Name</label>
                                       <input class="form-control" type="text" name="lastname" id="example-text-input-2" placeholder="Last Name" minlength="4" required>
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <label for="exampleInputEmail1">Email address</label>
                                       <input type="email" minlength="10" required class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"> <small id="emailHelp" class="form-text text-muted">We"ll never share your email with anyone else.</small>
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <label for="exampleInputEmail1">Phone number</label>
                                       <input class="form-control" minlength="10" required type="text" name="phone" id="example-tel-input-3" placeholder="Phone"> <small class="form-text text-muted">We"ll never share your email with anyone else.</small>
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <label for="exampleInputPassword1">Password</label>
                                       <input type="password" minlength="6" required class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <label for="exampleInputPassword1">Repeat password</label>
                                       <input type="password" minlength="6" required class="form-control" name="cpassword" id="exampleInputPassword2" placeholder="Password">
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <label for="exampleInputPassword1">Profile</label>
                                       <input type="file" required class="form-control" name="profile" placeholder="Profile">
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <label for="exampleInputPassword1">Certificate</label>
                                       <input type="file" required class="form-control" name="certificate"  placeholder="Certificate">
                                    </div>
                                    <div class="form-group col-sm-12">
                                  <label for="exampleTextarea">Current Address</label>
                                    <textarea class="form-control" required id="exampleTextarea" placeholder="Village, Cell, Sector, District, Province"  name="address" rows="3"></textarea>
                                       </div>

                                 </div>

                                 <div class="row">
                                    <div class="col-sm-4">
                                       <p> <input type="submit" value="Continue" name="submit" class="btn theme-btn"> </p>
                                    </div>
                                 </div>
                              </form>

						   </div>
                           <!-- end: Widget -->
                        </div>
                        <!-- /REGISTER -->
                     </div>
                     <!-- WHY? -->
                     <div class="col-md-4">
                        <h4>Fill in form correctly</h4>
                        <p>You will need this info in future</p>
                        <hr>
                        <img src="images/img/icon.png" alt="" class="img-fluid">

                        <!-- end:Panel -->
                        <h4 class="m-t-20">Contact Customer Support</h4>
                        <p> If you"re looking for more help or have a question to ask, please </p>
                        <p> <a href="#" class="btn theme-btn m-t-15">contact us</a> </p>
                     </div>
                     <!-- /WHY? -->
                  </div>
               </div>
            </section>
            <?php
            include("footer.php");
            ?>
