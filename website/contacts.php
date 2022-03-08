<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Give Feedback</title>

</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

     <?php
    include("header.php");
    ?>
 
    
                    
    <h4 align="center" class="text-light mt-5">Leave Us A Message</h4><hr>
    <form method="POST">

                           <table class="fs-4 mt-5 text-light" align="center">
                            <tr>
                                <td>Name :</td>
                                <td><input type="text" name="fname" size="40"
                                 required data-validation-required-message="Please enter your name"></td>
                                
                            </tr>
                            <tr>
                                <td>Email :</td>
                                <td><input type="email" name="femail" size="40"
                                 required data-validation-required-message="Please enter your email"></td>
                            </tr>
                            <tr>
                                <td>Phone Number :</td>
                                <td><input type="text" name="fnumber" size="40"
                                 required data-validation-required-message="Please enter your number"></td>
                            </tr>
                            <tr>
                                <td>Message :</td>
                                <td>
                            <textarea name="feedback" rows="4" cols="38"
                            required data-validation-required-message="Please enter your message">
                             </textarea>
                              <!-- <input type="textarea" name="feedback"> -->
                         </td>
                            </tr>
                            
                            <tr >
                                
                                <td colspan="2" align="center">
                                <input type="submit" value="Send" name="ok" 
                                class="btn btn-danger mt-4"></td>

                                
                            </tr>
                           </table>
                       </form>                   
                       <div class="mt-5"></div>
    <?php 
    
    if (isset($_POST['ok']))
     {
     $a=mysqli_connect("localhost","root","","project");
     $fname=$_POST['fname'];
     $femail=$_POST['femail'];
     $fphone=$_POST['fnumber'];
     $feedback=$_POST['feedback'];
     
     if(mysqli_query($a,"INSERT INTO feedback(f_name,f_email,f_phone,f_feedback) VALUES ('$fname','$femail','$fphone','$feedback')"))
     {
        echo "<script>alert('Success...Thanks For Your Feedback!!!!!')</script>";
     }
     else
     {
       echo "<script>alert('Error!!!!')</script>";
     }
}
    ?> 
   
    <?php
    include("footer.php");
    ?>
   

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/player.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>