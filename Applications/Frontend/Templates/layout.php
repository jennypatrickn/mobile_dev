<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>JCoder ZM - <?php if ($title!='Accueil') echo $title ?></title>
        <link rel="icon" type="image/png" href="images/jcoder_finale.png" />
        <link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,400italic'>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">    
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/jcoder.css">
        <!--
        Accord Template
        http://www.templatemo.com/tm-478-accord
        -->
        
    </head>

    <body>

        <div class="main-body"><!--	#69b42d-->
            <div class="row navbar-nav navbar-fixed-top" id="row-header">
                <div class="col-lg-4" >
                    <div class="navbar-header">
                        <div  id="logo">
                            <a href=".">
                                <img src="images/jcoder_finale.png" alt="Image">
                            </a>
                        </div> 
                    </div>
                </div>
                <div class="col-lg-6" >
                    <nav class="navbar">
                        <div class="container-fluid" id="menu-haut">
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">      
                                <ul class="nav navbar-nav navbar-right"  >
                                    <li><a href="." class="<?php if($title=='Accueil') echo 'actif';?>">Acceuil</a></li>
                                    <li><a href="cv" class="<?php if($title=='CV') echo 'actif';?>">CV</a></li>
                                    <li><a href="porfolio" class="<?php if($title=='Porfolio') echo 'actif';?>">Porfolio</a></li>
                                    <li><a href="contact" class="<?php if($title=='Contact') echo 'actif';?>">Contact</a></li>
                                </ul>
                            </div><!-- /.navbar-collapse -->
                        </div><!-- /.container-fluid -->
                    </nav>
                </div>
            </div>
            <div class="container">

                <div class="row">               
                    <div class="main-page">

                        <aside class="main-navigation">
                            <div class="main-menu">

                                <div class="menu-container">
                                    <div class="block-keep-ratio block-keep-ratio-2-1 block-width-full home">                                    
                                        <a href="." class="block-keep-ratio__content  main-menu-link">
                                            <span class="main-menu-link-text">
                                                Accueil    
                                            </span>                                        
                                        </a>
                                    </div>                                
                                </div>

                                <div class="menu-container">                                
                                    <div class="block-keep-ratio  block-keep-ratio-1-1  block-width-half  pull-left  about-main">                                    
                                        <a href="cv" class="main-menu-link about block-keep-ratio__content flexbox-center">
                                            <i class="fa fa-user fa-4x main-menu-link-icon"></i>
                                            CV
                                        </a>                                    
                                    </div>

                                    <div class="block-keep-ratio  block-keep-ratio-1-1  block-width-half  pull-right  contact-main">
                                        <a href="contact" class="main-menu-link contact block-keep-ratio__content flexbox-center">
                                            <i class="fa fa-envelope-o fa-4x main-menu-link-icon"></i>
                                            Contact
                                        </a>                                
                                    </div>    
                                </div>   

                                <div class="menu-container">
                                    <div class="block-keep-ratio block-keep-ratio-1-1 block-keep-ratio-md-2-1 block-width-full gallery">                                    
                                        <a href="porfolio" class="main-menu-link  block-keep-ratio__content">
                                            <span class="main-menu-link-text">
                                                Porfolio    
                                            </span>                                            
                                        </a>                                    
                                    </div>                                
                                </div>

                                <!-- sidebar carousel -->
<!--                                <div class="menu-container">
                                    <div class="mauris">
                                        <div id="carousel-menu" class="carousel slide" data-ride="carousel">
                                             Wrapper for slides 
                                            <div class="carousel-inner" role="listbox">
                                                <div class="item active">
                                                    <img src="images/slider-img-1.png" alt="slider">
                                                    <div class="carousel-caption menu-caption">
                                                        Web programming
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <img src="images/menu-bg-home.png" alt="slider">
                                                    <div class="carousel-caption menu-caption">
                                                        Mobile App Programming
                                                    </div>
                                                </div>
                                            </div>

                                             Controls 
                                            <a class="left carousel-control" href="#carousel-menu" role="button" data-slide="prev">
                                                <span class="fa fa-caret-left" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="right carousel-control" href="#carousel-menu" role="button" data-slide="next">
                                                <span class="fa fa-caret-right" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>  .mauris 
                                </div>-->
                            </div> <!-- main-menu -->
                        </aside> <!-- main-navigation -->

                        <div class="content-main">
                            <div class="row margin-b-30">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <?php echo $content;?>
                                    
                                </div>    
                            </div>
                            <div class="row margin-b-30">
                                

<!--                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    <div class="box paris">

                                        <div class="info float-container">
                                            <div class="col-sm-12 paris-title">
                                                <h3 class="text-uppercase">Ingénieur Informatique</h3>
                                                <h4 class="text-uppercase">(  Développeur Web - Mobile )</h4>

                                            </div>
                                            <div class="bottom-img">
                                                <img src="images/JENNY.jpg" alt="Image">
                                                <p class="first">NOMENJANAHARY Jenny Patrick</p>    
                                            </div> 
                                            <hr />
                                            <div class="col-sm-12 location-main"> 
                                                <div class="pull-left location">
                                                    <i class="fa fa-map-marker fa-2x"></i><span>Antsirabe, MADAGASCAR</span>
                                                </div>

                                                <div class="pull-right user-icons">
                                                    <a href="#"><i class="fa fa-star fa-2x"></i></a>
                                                    <a href="#"><i class="fa fa-user fa-2x"></i></a>
                                                    <a href="#"><i class="fa fa-twitter fa-2x"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>-->
                            </div> <!-- row -->
                            <!--                        <div class="row">
                                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                            <div class="box bottom-main">
                                                                <div class="info float-container">
                                                                    <div class="col-sm-12 bottom-title">
                                                                        
                                                                        <h3 class="text-uppercase">Proin gravida nibhvel</h3>
                                                                        <h4 class="text-uppercase">mauris vitae erat</h4>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-4 col-lg-4">
                                                                            <div class="bottom-img">
                                                                                <img src="images/home-img-4.jpg" alt="Image">
                                                                                <p class="first">Sollicitudin nibh</p>    
                                                                            </div>                                      
                                                                        </div>
                                                                        <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-4 col-lg-4">
                                                                            <div class="bottom-img">
                                                                                <img src="images/home-img-5.jpg" alt="Image">
                                                                                <p class="second">duis sedio amiet</p>    
                                                                            </div>                                      
                                                                        </div>
                                                                        <div class="col-xxs-12 col-xs-6 col-sm-6 col-md-4 col-lg-4">
                                                                            <div class="bottom-img">
                                                                                <img src="images/home-img-6.jpg" alt="Image">
                                                                                <p class="third">Nec sagittis seim</p>    
                                                                            </div>                                      
                                                                        </div>
                                                                    </div>
                                                                    <p class="bottom-desc">Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. </p><hr />
                                                                    <div class="col-sm-12 location-main"> 
                                                                        <div class="pull-right bottom-user">
                                                                            <a href="#"><i class="fa fa-caret-right"></i><span>READ MORE</span></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>  row -->
                        </div> <!-- .content-main -->
                    </div> <!-- .main-page -->
                </div> <!-- .row -->           
                <footer class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 footer">
                        <p class="copyright">Copyright © 2016 <b>JCoder Zaza Dago M'Code</b> 

                            | Développeur : <a rel="nofollow" href="http://www.jcoderzm.esy.es" target="_parent"><b>Nomenjanahary Jenny Patrick</b></a></br> Tous droits réservés.</p>
                    </div>    
                </footer>  <!-- .row -->      
            </div> <!-- .container -->
        </div> <!-- .main-body -->

        <!-- JavaScript -->
        <script src="js/jquery-1.11.3.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

    </body>
</html>
