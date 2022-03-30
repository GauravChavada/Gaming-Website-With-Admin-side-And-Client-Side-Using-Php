<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Register</title>
</head>

<body>
    <div id="preloder">
        <div class="loader"></div>
    </div>
     <?php
    include("header.php");
    ?>
    <section class="login spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="login__form">
                        <h3>Register</h3>
                        <form method="POST">
                            <div class="input__item">
                                <input type="text" name="fname" placeholder="First Name">
                                <span class="icon_profile"></span>
                            </div>
                            <div class="input__item">
                                <input type="text" name="lname" placeholder="Last Name">
                                <span class="icon_profile"></span>
                            </div>
                             <div class="input__item">
                                <input type="text" name="dname" placeholder="Display Name">
                                <span class="icon_profile"></span>
                            </div>
                             <div class="input__item">
                                <input type="text" name="email" placeholder="Email address">
                                <span class="icon_mail"></span>
                            </div>
                            <div class="input__item">
                                <input type="text" name="password" placeholder="Password">
                                <span class="icon_lock"></span>
                            </div>
                            <button type="submit" name="register" class="site-btn">Register Now</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login__register">
                        <h3>Already Have An Account?</h3>
                        <a href="login_client.php" class="primary-btn">Login Now</a>
                    </div>
                </div>
            </div>
            <div class="login__social">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6">
                        <div class="login__social__links">
                            <span>or</span>
                            <ul>
                                <li><a href="#" class="facebook"><i class="fa fa-facebook"></i> Sign in With
                                Facebook</a></li>
                                <li><a href="#" class="google"><i class="fa fa-google"></i> Sign in With Google</a></li>
                                <li><a href="#" class="twitter"><i class="fa fa-twitter"></i> Sign in With Twitter</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Login Section End -->

    <!-- Footer Section Begin -->
    <?php
    include("footer.php");
    ?>
      <!-- Footer Section End -->

      <!-- Search model Begin -->
      <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch"><i class="icon_close"></i></div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/player.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>

    <?php
    if (isset($_POST['register'])) 
    {
        $connect = mysqli_connect("localhost","root","","project");
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $dname=$_POST['dname'];
        $password=$_POST['password'];
        if(mysqli_query($connect,"INSERT INTO users(fname,lname,dname,email,password) VALUES ('$fname','$lname','$dname','$email','$password')"))
        {
        header("location:login_client.php");
        }
        else 
        {
        echo "<script>alert('Error Registering in databse')</script>";
        }
    }
     ?>
</body>
</html>