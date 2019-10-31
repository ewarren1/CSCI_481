<?php include('dbconnection.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>Register</title>

    <link rel="stylesheet" href="style/registration_form.css" />


</head>
<body>
        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="post" action="register.php" class="register-form" id="register-form">
                            <?php include('errors.php'); ?>           
                            <div class="form-group">
                                <input type="text" name="username" placeholder="Your username" value="<?php echo $username; ?>">
                            </div>
                             <div class="form-group">
                               <input type="email" name="email" placeholder="Your Email" value="<?php echo $email; ?>">
                            </div>
                             <div class="form-group">
                                <input type="text" name="firstName" placeholder="Your First Name" value="<?php echo $firstname; ?>">
                            </div>
                             <div class="form-group">
                                <input type="text" name="middleName" placeholder="Your Middle Name" value="<?php echo $middlename; ?>">
                            </div>
                             <div class="form-group">
                                <input type="text" name="lastName" placeholder="Your Last Name" value="<?php echo $lastname; ?>">
                            </div>
                             <div class="form-group">
                                <input type="text" name="companyName" placeholder="Company Name" value="<?php echo $companyname; ?>">
                            </div>
                            <div class="form-group">
                                <input type="password" name="pass" placeholder="Password" value="<?php echo $pass; ?>">
                            </div>
                            <div class="form-group">
                                <input type="password" id="re_pass" placeholder="Repeat your password" value="<?php echo $re_pass; ?>">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn" name="signup1">Register</button>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="login_main.php" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>


</body>
</html>