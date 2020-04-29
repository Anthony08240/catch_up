<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TechNews - HTML and CSS Template</title>

    <!-- favicon -->
    <link href="assets/img/favicon.png" rel=icon>

    <!-- web-fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,500' rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- font-awesome -->
    <link href="assets/fonts/font-awesome/font-awesome.min.css" rel="stylesheet">
    <!-- Mobile Menu Style -->
    <link href="assets/css/mobile-menu.css" rel="stylesheet">

    <!-- Owl carousel -->
    <link href="assets/css/owl.carousel.css" rel="stylesheet">
    <link href="assets/css/owl.theme.default.min.css" rel="stylesheet">
    <!-- Theme Style -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar">

    <!-- session start -->

    <?php session_start();

    // connexion bdd 

    require_once('traitement/connectBDD.php');

    $connexion = new Database('localhost', 'technews', 'root', '');
    $bdd = $connexion->PDOConnexion();
    ?>


    <div id="main-wrapper">
        <!-- Page Preloader -->
        <div id="preloader">
            <div id="status">
                <div class="status-mes"></div>
            </div>
        </div>
        <!-- preloader -->

        <div class="uc-mobile-menu-pusher">
            <div class="content-wrapper">
                <section id="header_section_wrapper" class="header_section_wrapper">
                    <div class="container">
                        <div class="header-section">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="left_section">
                                        <span class="date">
                                            Sunday .
                                        </span>
                                        <!-- Date -->
                                        <span class="time">
                                            09 August . 2016
                                        </span>
                                        <!-- Time -->
                                        <div class="social">
                                            <a class="icons-sm fb-ic"><i class="fa fa-facebook"></i></a>
                                            <!--Twitter-->
                                            <a class="icons-sm tw-ic"><i class="fa fa-twitter"></i></a>
                                            <!--Google +-->
                                            <a class="icons-sm inst-ic"><i class="fa fa-instagram"> </i></a>
                                            <!--Linkedin-->
                                            <a class="icons-sm tmb-ic"><i class="fa fa-tumblr"> </i></a>
                                            <!--Pinterest-->
                                            <a class="icons-sm rss-ic"><i class="fa fa-rss"> </i></a>
                                        </div>
                                        <!-- Top Social Section -->
                                    </div>
                                    <!-- Left Header Section -->
                                </div>
                                <div class="col-md-4">
                                    <div class="logo">
                                        <a href="index.php"><img src="assets/img/logo.png" alt="Tech NewsLogo"></a>
                                    </div>
                                    <!-- Logo Section -->
                                </div>
                                <div class="col-md-4">
                                    <div class="right_section">
                                        <ul class="nav navbar-nav">
                                            <?php
                            if (isset($_SESSION['nom']) AND isset($_SESSION['pass'])){
                            ?>
                                            <li>Bonjours<strong>&nbsp;<?php echo $_SESSION['nom'];  ?>&nbsp;</strong>
                                            </li>
                                            <li><a href="traitement/logout.php">déconnexion</a></li>
                                            <?php } 
                            else {
	                        echo'<li><a href="sign_in_up/sign_in.php">Login</a></li>
                            <li><a href="sign_in_up/sign_up.php">Register</a></li>';
                            } 
                            ?>
                                            <li class="dropdown lang">
                                                <button class="btn btn-default dropdown-toggle" type="button"
                                                    id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="true">En <i class="fa fa-angle-down"></i></button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                                    <li><a href="#">Bn</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <!-- Language Section -->

                                        <ul class="nav-cta hidden-xs">
                                            <li class="dropdown"><a href="#" data-toggle="dropdown"
                                                    class="dropdown-toggle"><i class="fa fa-search"></i></a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <div class="head-search">
                                                            <form role="form">
                                                                <!-- Input Group -->
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control"
                                                                        placeholder="Type Something"> <span
                                                                        class="input-group-btn">
                                                                        <button type="submit"
                                                                            class="btn btn-primary">Search
                                                                        </button>
                                                                    </span></div>
                                                            </form>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <!-- Search Section -->
                                    </div>
                                    <!-- Right Header Section -->
                                </div>
                            </div>
                        </div>
                        <!-- Header Section -->

                        <div class="navigation-section">
                            <nav class="navbar m-menu navbar-default">
                                <div class="container">
                                    <!-- Brand and toggle get grouped for better mobile display -->
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                            data-target="#navbar-collapse-1"><span class="sr-only">Toggle
                                                navigation</span> <span class="icon-bar"></span> <span
                                                class="icon-bar"></span> <span class="icon-bar"></span>
                                        </button>
                                    </div>
                                    <!-- Collect the nav links, forms, and other content for toggling -->
                                    <div class="collapse navbar-collapse" id="#navbar-collapse-1">
                                        <ul class="nav navbar-nav main-nav">
                                            <li class="active"><a href="index.php">News</a></li>
                                            <li><a href="category.php">Mobile</a></li>
                                            <li><a href="blog.php">Tablet</a></li>
                                            <li><a href="blog.php">Gadgets</a></li>
                                            <li><a href="blog.php">Camera</a></li>
                                            <li><a href="blog.php">Design</a></li>
                                            <li class="dropdown m-menu-fw"><a href="#" data-toggle="dropdown"
                                                    class="dropdown-toggle">More
                                                    <span><i class="fa fa-angle-down"></i></span></a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <div class="m-menu-content">
                                                            <ul class="col-sm-3">
                                                                <li class="dropdown-header">Widget Haeder</li>
                                                                <li><a href="#">Awesome Features</a></li>
                                                                <li><a href="#">Clean Interface</a></li>
                                                                <li><a href="#">Available Possibilities</a></li>
                                                                <li><a href="#">Responsive Design</a></li>
                                                                <li><a href="#">Pixel Perfect Graphics</a></li>
                                                            </ul>
                                                            <ul class="col-sm-3">
                                                                <li class="dropdown-header">Widget Haeder</li>
                                                                <li><a href="#">Awesome Features</a></li>
                                                                <li><a href="#">Clean Interface</a></li>
                                                                <li><a href="#">Available Possibilities</a></li>
                                                                <li><a href="#">Responsive Design</a></li>
                                                                <li><a href="#">Pixel Perfect Graphics</a></li>
                                                            </ul>
                                                            <ul class="col-sm-3">
                                                                <li class="dropdown-header">Widget Haeder</li>
                                                                <li><a href="#">Awesome Features</a></li>
                                                                <li><a href="#">Clean Interface</a></li>
                                                                <li><a href="#">Available Possibilities</a></li>
                                                                <li><a href="#">Responsive Design</a></li>
                                                                <li><a href="#">Pixel Perfect Graphics</a></li>
                                                            </ul>
                                                            <ul class="col-sm-3">
                                                                <li class="dropdown-header">Widget Haeder</li>
                                                                <li><a href="#">Awesome Features</a></li>
                                                                <li><a href="#">Clean Interface</a></li>
                                                                <li><a href="#">Available Possibilities</a></li>
                                                                <li><a href="#">Responsive Design</a></li>
                                                                <li><a href="#">Pixel Perfect Graphics</a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- .navbar-collapse -->
                                </div>
                                <!-- .container -->
                            </nav>
                            <!-- .nav -->
                        </div>
                        <!-- .navigation-section -->
                    </div>
                    <!-- .container -->
                </section>
                <!-- header_section_wrapper -->
                <?php
                $req = $bdd->prepare(" SELECT * FROM article WHERE id_Article ='".$_GET['id']."'");
                $req ->execute();

                while( $donnees = $req->fetch() ) { ?>
                <section id="entiton" class="entity_section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="entity_wrapper">
                                    <div class="entity_title">
                                        <h1><a href="#"><?= $donnees['titre'];?></a></h1>
                                    </div>
                                    <!-- entity_title -->

                                    <div class="entity_meta"><a href="#" target="_self"><?= $donnees['date_article'];?></a>, by: <a href="#"
                                            target="_self"><?= $donnees['auteur'];?></a>
                                    </div>
                                    <!-- entity_meta -->

                                    <div class="entity_rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-full"></i>
                                    </div>
                
                                    <!-- entity_rating -->

                                    <div class="entity_social">
                                        <a href="#" class="icons-sm sh-ic">
                                            <i class="fa fa-share-alt"></i>
                                            <b>424</b> <span class="share_ic">Shares</span>
                                        </a>
                                        <a href="#" class="icons-sm fb-ic"><i class="fa fa-facebook"></i></a>
                                        <!--Twitter-->
                                        <a href="#" class="icons-sm tw-ic"><i class="fa fa-twitter"></i></a>
                                        <!--Google +-->
                                        <a href="#" class="icons-sm inst-ic"><i class="fa fa-google-plus"> </i></a>
                                        <!--Linkedin-->
                                        <a href="#" class="icons-sm tmb-ic"><i class="fa fa-ge"> </i></a>
                                        <!--Pinterest-->
                                        <a href="#" class="icons-sm rss-ic"><i class="fa fa-rss"> </i></a>
                                    </div>
                                    <!-- entity_social -->

                                    <div class="entity_thumb">
                                        <img class="img-responsive" src="<?= $donnees['image_article'];?>"
                                            alt="feature-top">
                                    </div>
                                    <!-- entity_thumb -->

                                    <div class="entity_content">
                                        <p><?= $donnees['contenu'];?></p>
                                    </div>
                                    <!-- entity_content -->

                                    <div class="entity_footer">
                                       
                                        <!-- entity_tag -->

                                        <div class="entity_social">
                                            <span><i class="fa fa-share-alt"></i>424 <a href="#">Shares</a> </span>
                                            <span><i class="fa fa-comments-o"></i>4 <a href="#">Comments</a> </span>
                                        </div>
                                        <!-- entity_social -->

                                    </div>
                                    <!-- entity_footer -->

                                </div>
                <?php } ?>
                                <!-- entity_wrapper -->

                                <div class="related_news">
                                    <div class="entity_inner__title header_purple">
                                        <h2><a href="#">Autres Article </a></h2>
                                    </div>
                                    <!-- entity_title -->

                                    <div class="row">
                                        <div class="col-md-6">
                                            <?php
                                        $req = $bdd->prepare(" SELECT * FROM article ORDER BY RAND( ) LIMIT 2 ");
                                         $req ->execute();

                                         while( $donnees = $req->fetch() ) { ?>
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="single.php?id=<?php echo $donnees['id_Article'];?>"><img class="media-object"
                                                            src="<?= $donnees['image_article'];?>"
                                                            alt="Generic placeholder image"></a>
                                                </div>
                                                <div class="media-body">
                                                    <span class="tag purple"><a href="category.php"
                                                            target="_self">Article</a></span>

                                                    <h3 class="media-heading"><a href="single.php?id=<?php echo $donnees['id_Article'];?>" target="_self"><?= $donnees['titre'];?></a></h3>
                                                    <span class="media-date"><a href="single.php?id=<?php echo $donnees['id_Article'];?>"><?= $donnees['date_article'];?></a>, by: <a
                                                            href="single.php?id=<?php echo $donnees['id_Article'];?>"><?= $donnees['auteur'];?></a></span>

                                                    <div class="media_social">
                                                        <span><a href="#"><i class="fa fa-share-alt"></i>424</a>
                                                            Shares</span>
                                                        <span><a href="#"><i class="fa fa-comments-o"></i>4</a>
                                                            Comments</span>
                                                    </div>
                                                </div>
                                            </div>
                                         <?php } ?>
                                            <div class="media">
                                                <div class="media-left">
                                                   
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                        <?php
                                        $req = $bdd->prepare(" SELECT * FROM article ORDER BY RAND( ) LIMIT 2 ");
                                         $req ->execute();

                                         while( $donnees = $req->fetch() ) { ?>
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="single.php?id=<?php echo $donnees['id_Article'];?>"><img class="media-object"
                                                            src="<?= $donnees['image_article'];?>"
                                                            alt="Generic placeholder image"></a>
                                                </div>
                                                <div class="media-body">
                                                    <span class="tag purple"><a href="category.php"
                                                            target="_self">Article</a></span>

                                                    <h3 class="media-heading"><a href="single.php?id=<?php echo $donnees['id_Article'];?>" target="_self"><?= $donnees['titre'];?></a></h3>
                                                    <span class="media-date"><a href="single.php?id=<?php echo $donnees['id_Article'];?>"><?= $donnees['date_article'];?></a>, by: <a
                                                            href="single.php?id=<?php echo $donnees['id_Article'];?>"><?= $donnees['auteur'];?></a></span>

                                                    <div class="media_social">
                                                        <span><a href="#"><i class="fa fa-share-alt"></i>424</a>
                                                            Shares</span>
                                                        <span><a href="#"><i class="fa fa-comments-o"></i>4</a>
                                                            Comments</span>
                                                    </div>
                                                </div>
                                            </div>
                                         <?php } ?>
                                            
                                            
                                        </div>
                                    </div>
                                </div>
                
                                <!-- Related news -->

                                <div class="widget_advertisement">
                                    <img class="img-responsive" src="assets/img/category_advertisement.jpg"
                                        alt="feature-top">
                                </div>
                                <!--Advertisement-->

                                <div class="readers_comment">
                                    <div class="entity_inner__title header_purple">
                                        <h2>Readers Comment</h2>
                                        <?php
                                     $req = $bdd->prepare(" SELECT * FROM commentaires WHERE id_Article ='".$_GET['id']."'");
                                     $req ->execute();

                                     while( $donnees = $req->fetch() ) { ?>
                                    </div>
                                    <!-- entity_title -->

                                    
                                    <!-- media end -->

                                    <div class="media">
                                        
                                        <div class="media-left">
                                            
                                        </div>
                                        
                                        <div class="media-body">
                                            <h2 class="media-heading"><a href="#"><?= $donnees['auteur'];?></a></h2>
                                            <?= $donnees['contenu'];?>

                                            <div class="entity_vote">
                                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a>
                                                <a href="#"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i></a>
                                                <a href="#"><span class="reply_ic">Reply </span></a>
                                            </div>
                                        </div>
                                        
                                    </div>
                                         <?php } ?>
                                    <!-- media end -->
                                </div>
                                <!--Readers Comment-->

                                <div class="widget_advertisement">
                                    <img class="img-responsive" src="assets/img/category_advertisement.jpg"
                                        alt="feature-top">
                                </div>
                                <!--Advertisement-->

                                <div class="entity_comments">
                                    <div class="entity_inner__title header_black">
                                        <h2>Add a Comment</h2>
                                    </div>
                                    <!--Entity Title -->
                                    <div class="entity_comment_from">
                                        <form method="post" action="traitement/ajout_com.php">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="auteur" id="auteur"
                                                    placeholder="Name">
                                            </div>
                                            
                                            <div class="form-group comment">
                                                <textarea class="form-control" name="contenu" id="contenu"
                                                    placeholder="Comment"></textarea>
                                            </div>

                                            <button type="submit" class="btn btn-submit red">Submit</button>
                                        </form>
                                    </div>
                                    <!--Entity Comments From -->

                                </div>
                                <!--Entity Comments -->

                            </div>
                            <!--Left Section-->

                            <div class="col-md-4">
                                <div class="widget">
                                    <div class="widget_title widget_black">
                                        <h2><a href="#">Popular News</a></h2>
                                    </div>
                                    <?php
                                            $req = $bdd->prepare(" SELECT * FROM article ORDER BY RAND( ) LIMIT 4 ");
                                         $req ->execute();

                                         while( $donnees = $req->fetch() ) { ?>
                                    <div class="media" style="margin-top: 15px;">
                                        <div class="media-left">
                                            <a href="single.php?id=<?php echo $donnees['id_Article'];?>"><img class="media-object" src="<?= $donnees['image_article'];?>"
                                                    alt="Generic placeholder image"></a>
                                        </div>
                                        <div class="media-body">
                                            <h3 class="media-heading">
                                                <a href="single.php?id=<?php echo $donnees['id_Article'];?>" target="_self"><?= $donnees['titre'];?></a>
                                            </h3> <span class="media-date"><a href="#"><?= $donnees['date_article'];?></a>, by: <a
                                                    href="#"><?= $donnees['auteur'];?></a></span>

                                            <div class="widget_article_social">
                                                <span>
                                                    <a href="single.php" target="_self"> <i
                                                            class="fa fa-share-alt"></i>424</a> Shares
                                                </span>
                                                <span>
                                                    <a href="single.php" target="_self"><i
                                                            class="fa fa-comments-o"></i>4</a> Comments
                                                </span>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    
                                    
                                </div>
                            <!--Right Section-->

                        </div>
                        <!-- row -->

                    </div>
                    <!-- container -->

                </section>
                <!-- Entity Section Wrapper -->

                <section id="subscribe_section" class="subscribe_section">
                    <div class="row">
                        <form action="#" method="post" class="form-horizontal">
                            <div class="form-group form-group-lg">
                                <label class="col-sm-6 control-label" for="formGroupInputLarge">
                                    <h1><span class="red-color">Sign up</span> for the latest news</h1>
                                </label>

                                <div class="col-sm-3">
                                    <input type="text" id="subscribe" name="subscribe" class="form-control input-lg">
                                </div>
                                <div class="col-sm-1">
                                    <input type="submit" value="Sign Up" class="btn btn-large pink">
                                </div>
                                <div class="col-sm-2"></div>
                            </div>
                        </form>
                    </div>
                </section>
                <!-- Subscriber Section -->

                <section id="footer_section" class="footer_section">
                    <div class="container">
                        <hr class="footer-top">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="footer_widget_title">
                                    <h3><a href="category.php" target="_self">About Tech</a></h3>
                                </div>
                                <div class="logo footer-logo">
                                    <a title="fontanero" href="index.php">
                                        <img src="assets/img/tech_about.jpg" alt="technews">
                                    </a>

                                    <p>Competently conceptualize go forward testing procedures and B2B expertise.
                                        Phosfluorescently
                                        cultivate principle-centered methods.of empowerment through fully researched.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="footer_widget_title">
                                    <h3><a href="category.php" target="_self">Discover</a></h3>
                                </div>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <ul class="list-unstyled left">
                                            <li><a href="#">Mobile</a></li>
                                            <li><a href="#">Tablet</a></li>
                                            <li><a href="#">Gadgets</a></li>
                                            <li><a href="#">Design</a></li>
                                            <li><a href="#">Camera</a></li>
                                            <li><a href="#">Apps</a></li>
                                            <li><a href="#">Login</a></li>
                                            <li><a href="#">About Us</a></li>
                                            <li><a href="#">Membership</a></li>
                                            <li><a href="#">Blog</a></li>
                                            <li><a href="#">Job</a></li>
                                            <li><a href="#">SiteMap</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-xs-8">
                                        <ul class="list-unstyled">
                                            <li><a href="#">Contact Us</a></li>
                                            <li><a href="#">Newsletter Alerts</a></li>
                                            <li><a href="#">Podcast</a></li>
                                            <li><a href="#">Sms Subscription</a></li>
                                            <li><a href="#">Advertisement Policy</a></li>
                                            <li><a href="#">Report Technical issue</a></li>
                                            <li><a href="#">Complaints and Corrections</a></li>
                                            <li><a href="#">Terms and Conditions</a></li>
                                            <li><a href="#">Privacy Policy</a></li>
                                            <li><a href="#">Cookie Policy</a></li>
                                            <li><a href="#">Securedrop</a></li>
                                            <li><a href="#">Archives</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                           
                               
                                
                                
                            
                            <div class="col-md-6">
                                <div class="footer_widget_title">
                                    <h3><a href="category.php" target="_self"><center>Tech Photos</center></a></h3>
                                </div>
                                <div class="widget_photos">
                                    <img class="img-thumbnail" src="assets/img/tech_photo1.jpg" alt="Tech Photos">
                                    <img class="img-thumbnail" src="assets/img/tech_photo2.jpg" alt="Tech Photos">
                                    <img class="img-thumbnail" src="assets/img/tech_photo3.jpg" alt="Tech Photos">
                                    <img class="img-thumbnail" src="assets/img/tech_photo4.jpg" alt="Tech Photos">
                                    <img class="img-thumbnail" src="assets/img/tech_photo5.jpg" alt="Tech Photos">
                                    <img class="img-thumbnail" src="assets/img/tech_photo6.jpg" alt="Tech Photos">
                                    <img class="img-thumbnail" src="assets/img/tech_photo7.jpg" alt="Tech Photos">
                                    <img class="img-thumbnail" src="assets/img/tech_photo8.jpg" alt="Tech Photos">
                                    <img class="img-thumbnail" src="assets/img/tech_photo9.jpg" alt="Tech Photos">
                                    <img class="img-thumbnail" src="assets/img/tech_photo10.jpg" alt="Tech Photos">
                                    <img class="img-thumbnail" src="assets/img/tech_photo11.jpg" alt="Tech Photos">
                                    <img class="img-thumbnail" src="assets/img/tech_photo12.jpg" alt="Tech Photos">
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="footer_bottom_Section">
                        <div class="container">
                            <div class="row">
                                <div class="footer">
                                    <div class="col-sm-3">
                                        <div class="social">
                                            <a class="icons-sm fb-ic"><i class="fa fa-facebook"></i></a>
                                            <!--Twitter-->
                                            <a class="icons-sm tw-ic"><i class="fa fa-twitter"></i></a>
                                            <!--Google +-->
                                            <a class="icons-sm inst-ic"><i class="fa fa-instagram"> </i></a>
                                            <!--Linkedin-->
                                            <a class="icons-sm tmb-ic"><i class="fa fa-tumblr"> </i></a>
                                            <!--Pinterest-->
                                            <a class="icons-sm rss-ic"><i class="fa fa-rss"> </i></a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <p>&copy; Copyright 2016-Tech News . Design by: <a
                                                href="https://uicookies.com">uiCookies</a> </p>
                                    </div>
                                    <div class="col-sm-3">
                                        <p>Technology News Magazine</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- #content-wrapper -->

        </div>
        <!-- .offcanvas-pusher -->

        <a href="#" class="crunchify-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>

        <div class="uc-mobile-menu uc-mobile-menu-effect">
            <button type="button" class="close" aria-hidden="true" data-toggle="offcanvas"
                id="uc-mobile-menu-close-btn">&times;</button>
            <div>
                <div>
                    <ul id="menu">
                        <li class="active"><a href="blog.php">News</a></li>
                        <li><a href="category.php">Mobile</a></li>
                        <li><a href="blog.php">Tablet</a></li>
                        <li><a href="category.php">Gadgets</a></li>
                        <li><a href="blog.php">Camera</a></li>
                        <li><a href="category.php">Design</a></li>
                        <li class="dropdown m-menu-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle">More
                                <span><i class="fa fa-angle-down"></i></span></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="m-menu-content">
                                        <ul class="col-sm-3">
                                            <li class="dropdown-header">Widget Haeder</li>
                                            <li><a href="#">Awesome Features</a></li>
                                            <li><a href="#">Clean Interface</a></li>
                                            <li><a href="#">Available Possibilities</a></li>
                                            <li><a href="#">Responsive Design</a></li>
                                            <li><a href="#">Pixel Perfect Graphics</a></li>
                                        </ul>
                                        <ul class="col-sm-3">
                                            <li class="dropdown-header">Widget Haeder</li>
                                            <li><a href="#">Awesome Features</a></li>
                                            <li><a href="#">Clean Interface</a></li>
                                            <li><a href="#">Available Possibilities</a></li>
                                            <li><a href="#">Responsive Design</a></li>
                                            <li><a href="#">Pixel Perfect Graphics</a></li>
                                        </ul>
                                        <ul class="col-sm-3">
                                            <li class="dropdown-header">Widget Haeder</li>
                                            <li><a href="#">Awesome Features</a></li>
                                            <li><a href="#">Clean Interface</a></li>
                                            <li><a href="#">Available Possibilities</a></li>
                                            <li><a href="#">Responsive Design</a></li>
                                            <li><a href="#">Pixel Perfect Graphics</a></li>
                                        </ul>
                                        <ul class="col-sm-3">
                                            <li class="dropdown-header">Widget Haeder</li>
                                            <li><a href="#">Awesome Features</a></li>
                                            <li><a href="#">Clean Interface</a></li>
                                            <li><a href="#">Available Possibilities</a></li>
                                            <li><a href="#">Responsive Design</a></li>
                                            <li><a href="#">Pixel Perfect Graphics</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- .uc-mobile-menu -->

    </div>
    <!-- #main-wrapper -->

    <!-- jquery Core-->
    <script src="assets/js/jquery-2.1.4.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Theme Menu -->
    <script src="assets/js/mobile-menu.js"></script>

    <!-- Owl carousel -->
    <script src="assets/js/owl.carousel.min.js"></script>

    <!-- Theme Script -->
    <script src="assets/js/script.js"></script>
</body>

</html>