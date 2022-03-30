<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="description" content="Gaming World">
<meta name="keywords" content="Anime, unica, creative, html">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>X Core Store</title>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap"
rel="stylesheet">
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
<link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
<link rel="stylesheet" href="css/plyr.css" type="text/css">
<link rel="stylesheet" href="css/nice-select.css" type="text/css">
<link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
<link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
<!-- Page Preloder -->
<!-- <div id="preloder">
<div class="loader"></div>
</div> -->

<!-- Header Section Begin -->
<header class="header">
<div class="container">
<div class="row">
    <div class="col-lg-2">
        <div class="header__logo">
            <a href="./index.php" class="ms-5"><h3 class="text-light ml-5">X Core</h3>
                <!-- <img src="img/cross.png" height="40" width="40" align="right" alt=""> -->
            </a>
          <!--    <a href=""><img src="img/core.png"  alt=""></a> -->
        </div>

    </div>
    
    <div class="col-lg-8">
        <div class="header__nav">
            <nav class="header__menu mobile-menu">
                <ul>
                    <li
                    <?php
                        $curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
                        if ($curPageName=="index.php") 
                        {
                            echo "class='active'";    
                        }
                    ?>
                    ><a href="./index.php">Homepage</a></li>
                    <li <?php
                        $curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
                        if ($curPageName=="categories.php") 
                        {
                            echo "class='active'";    
                        }
                    ?>
                    ><a >Categories<span class="collapse navbar-collapse "></span></a>
                        <ul name="pcategory" class="dropdown">
                    <?php
                    $a=mysqli_connect("localhost","root","","project");
                    $q=mysqli_query($a,"SELECT * FROM category");
                    while ($c=mysqli_fetch_array($q,MYSQLI_ASSOC))

                    {
                     ?>
                            <li class="dropdown-item xyz">
                            <a class="text-center" href="categories.php?uid=<?php echo $c["c_name"];?>"><?php echo $c["c_name"];?></a>     
                            </li>
                     <?php   
                    }
                    ?>  
                    </ul>
                    </li>
                    <li
                        <?php
                        $curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
                        if ($curPageName=="blog.php") 
                        {
                            echo "class='active'";    
                        }
                    ?>
                    ><a href="./blog.php">About Us</a></li>
                    <li
                        <?php
                        $curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
                        if ($curPageName==".php") 
                        {
                            echo "class='active'";    
                        }
                    ?>
                    ><a href="./contacts.php">Contacts</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="col-lg-2">
        <div class="header__right">
            
            <?php            
            if (isset($_SESSION['name']) && isset($_SESSION['pass']))
            {
                ?>
                <a href="./logout_client.php" class=' fa fa-sign-out' style="font-size:24px;">
                <a href="/website/wishlist.php" class=' fa fa-heart' style="font-size:22px;">
                <a href="/website/cart.php"  class="fa fa-shopping-cart"
                style="font-size:22px;"></a>  
                </a>
                <a href="/website/library.php"  class="fa fa-download" aria-hidden="true"
                style="font-size:21px;"></a>  

                </a>
                
            <?php           
            } 
            else
                {    
                    ?>
                    <a class="hover" href='./login_client.php'><span 
                    class="icon_profile "></span></a>
                <?php
            }
            ?>  
        </div>
    </div>
</div>
<div id="mobile-menu-wrap"></div>
</div>
</header>
</body>
</html>