<!DOCTYPE html><html  >
<head>
  <!-- Site made with Mobirise Website Builder v4.12.3, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.12.3, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
  <meta name="description" content="">
  
  
  <title>Home</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:700,400&subset=cyrillic,latin,greek,vietnamese">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/animatecss/animate.min.css">
  <link rel="stylesheet" href="assets/mobirise/css/style.css">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
  <section class="mbr-box mbr-section mbr-section--relative mbr-section--fixed-size mbr-section--full-height mbr-section--bg-adapted mbr-parallax-background" id="header1-1" data-rv-view="17" style="background-image: url(assets/images/bg5.jpg);">
    <div class="mbr-box__magnet mbr-box__magnet--sm-padding mbr-box__magnet--center-left">
        
        <div class="mbr-box__container mbr-section__container container">
            <div class="mbr-box mbr-box--stretched"><div class="mbr-box__magnet mbr-box__magnet--center-left">
                <div class="row"><div class=" col-sm-6 col-sm-offset-6">
                    <div class="mbr-hero animated fadeInUp">
                        <h1 class="mbr-hero__text">Prices for Stocks</h1>
                        <p class="mbr-hero__subtext">
                        
                        <?php
                        $valor = $_POST['stock'];
                        $valor_py = file_get_contents( "marketstock.txt" );
                        $price = exec("python stockmarket.py $valor 2<&1");
                        $valor_py = file_get_contents( "marketstock.txt" );
                        $price_py = file_get_contents( "marketprice.txt" );
                        echo "Price for: " .$valor_py ."is: " .$price_py ;
                        ?>
                        <form action="" method="Post">
                        <label for="stock">Stock</label><br>
                        <input type="text" name="stock" value="" style="background-color:grey"><br><br>
                        <input type="submit" name="submit" value="Submit" style="background-color:grey; height:2em; width:5em">
                        </form>    
                        
                        <br>
                        <?php 
                        function pre_r( $array ){
                            $valor = $_POST['stock'];
                            $price = exec("python stockmarket.py $valor 2<&1");
                            sleep (5);
                        }

                        ?></p>
                    </div>
                </div></div>
            </div></div>
        </div>
        <div class="mbr-arrow mbr-arrow--floating text-center">
            <div class="mbr-section__container container">
            </div>
        </div>
    </div>
</section>


  <section class="engine"><a href="https://mobirise.info">Mobirise</a></section><script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/smooth-scroll.js"></script>
  <script src="assets/jarallax/jarallax.js"></script>
  <script src="assets/mobirise/js/script.js"></script>
  


</body>
</html>