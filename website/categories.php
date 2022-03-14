<!DOCTYPE html>
<html lang="zxx">

<head>
   
</head>

<body>
  <!--  -->
  <?php 
$cat=$_GET['uid'];
  ?>
    <div id="preloder">
        <div class="loader"></div>
    </div>

     <?php
    include("header.php");
    ?>

    <section class="product-page spad mt-4 space">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product__page__content">
                        <div class="product__page__title">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-6">
                                    <div class="section-title">
                                        <?php
                    $connect=mysqli_connect("localhost","root","","project");
                    $query=mysqli_query($connect,"SELECT * FROM category WHERE c_name='$cat'");
    
                    while ($d=mysqli_fetch_array($query)) 
                {
                ?>
                     <h4><?php echo $d['c_name'];?></h4>

                <?php } ?>

                                        
                                    </div>
                                </div>
                                
                            </div>
                        </div>


                        <div class="row">
                           <?php
                           
                        $a=mysqli_connect("localhost","root","","project");
                            $q=mysqli_query($a,"SELECT * FROM product WHERE p_category='$cat'");

                            while 
                                ($data=mysqli_fetch_array($q,MYSQLI_ASSOC)) 
                            { ?><a href="product_details.php?uid=<?php echo $data['p_name'];?>">
                                <div class="col-lg-3 col-md-5 col-sm-5">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="../admin/<?php echo $data['p_image']?>">
                                        
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li><?php echo $data['p_category']; ?></li>
                                            
                                        </ul>
                                        <h5><a href="#"><?php echo $data['p_name']; ?></a></h5>
                                        <h5><a href="#"><?php echo $data['p_price']?></a></h5>
                                    </div>
                                </div>
                            </div>
                            </a>
                          <?php  }
                           ?>
                            
                            
                           
                            
                            
                            
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </section>
                 
<?php
    include("footer.php");
    ?>
 
  <div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch"><i class="icon_close"></i></div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Search here.....">
        </form>
    </div>
</div>

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