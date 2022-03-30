    <!DOCTYPE html>
    <html lang="zxx">

    <head>
        <title>X Core Gaming Store</title>
    </head>
    <body>
        <div id="preloder">
            <div class="loader"></div>
        </div>
        <?php
        include("header.php");
        ?>   
        <section class="hero">
            <div class="container">
                <?php 
                $ab=mysqli_connect("localhost","root","","project");
                $q=mysqli_query($ab,"SELECT * FROM product WHERE sidebar_status='1'");
                    while ($d=mysqli_fetch_array($q)) 
      {
       ?>
                 
                <div class="hero__slider owl-carousel">
                    <div class="hero__items set-bg" data-setbg="../admin/<?php echo $d['p_image']?>">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="hero__text">
                                    <div class="label"><?php echo $d['p_category']?></div>
                                    <h2 ><?php echo $d['p_name']?></h2>
                                    <p><?php echo $d['p_dis']?></p>
                                    <h2 style="color: red;"><?php echo "₹ ".$d['p_price']?></h2> 
                                    <br>
                                    <br>

                                    <a href="./product_details.php?uid=<?php echo $d['p_name'];?>" class="follow-btn "><span>View More</span></a>
                                    <!-- <a href="#"><span>Download Now</span> <i class="fa fa-angle-right"></i></a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    
                    
                </div>
            </div>
        </section>
        <!-- Hero Section End -->

        <!-- Product Section Begin -->     
        <section class="product spad "> 

        <div class="row space">                             
                                      
         <!-- <div class="product__item ">  -->    
      <?php
      $a=mysqli_connect("localhost","root","","project");
      $query=mysqli_query($a,"SELECT * FROM product");
      while ($data=mysqli_fetch_array($query)) 
      {
       ?>
       <a href="product_details.php?uid=<?php echo $data['p_name'];?>"> 
       <div  class="col-lg-2 col-md-5 col-sm-5">
    <div class="product__item__pic set-bg" 
    data-setbg="../admin/<?php echo $data['p_image']?>"></div>                                     
    <div class="product__item__text">
    <ul>                                             
        <li><?php echo $data['p_category']?></li>                                        
     </ul>    
    <h5 style="color: white;">
        <?php echo $data['p_name']?>
    </h5>
    <h5 style="color: red;"><?php echo "₹ ".$data['p_price']?></h5></div>

    </a>
    <br>
    
    </div>  
     <?php
      }
      ?>  
    </div>       
     </section>

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