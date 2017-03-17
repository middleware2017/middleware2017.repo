<!DOCTYPE html>
<html>
    <!-- Added by HTTrack -->
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <!-- /Added by HTTrack -->
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href="assets/css/font-awesome.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" type="text/css">
        <link rel="stylesheet" href="assets/css/selectize.css" type="text/css">
        <link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
        <link rel="stylesheet" href="assets/css/vanillabox/vanillabox.css" type="text/css">
        <link rel="stylesheet" href="assets/css/style.css" type="text/css">
        <script language="JavaScript1.2">
            var howOften = 4; //number often in seconds to rotate
            var current = 0; //start the counter at 0
            var ns6 = document.getElementById&&!document.all; //detect netscape 6
            // place your images, text, etc in the array elements here
            var items = new Array();
            items[0]="<img alt='Las Vegas in Winter!' src='assets/img/vegas1.jpg' height='400' width='710' border='0'/>"; 
            items[1]="<img alt='Las Vegas in Winter!' src='assets/img/vegas2.jpg' height='400' width='710' border='0'/>"; 
            items[2]="<img alt='Las Vegas in Winter!' src='assets/img/vegas3.jpg' height='400' width='710' border='0'/>"; 
            items[3]="<img alt='Las Vegas in Winter!' src='assets/img/vegas4.jpg' height='400' width='710' border='0'/>"; 
            
            function rotater() {
              document.getElementById("rotating_pics").innerHTML = items[current];
              current = (current==items.length-1) ? 0 : current + 1;
              setTimeout("rotater()",howOften*1000);
            }
            
            function rotater() {
              if(document.layers)
              {
                document.placeholderlayer.document.write(items[current]);
                document.placeholderlayer.document.close();
              }
              if(ns6)document.getElementById("rotating_pics").innerHTML=items[current]
                if(document.all)
                  placeholderdiv.innerHTML=items[current];
                        current = (current==items.length-1) ? 0 : current + 1; //increment or reset
                        setTimeout("rotater()",howOften*1000);
                      }
                      window.onload=rotater;
            //-->
        </script>
        <title>2017 ACM/IFIP/USENIX International Middleware Conference</title>
    </head>
    <body class="page-sub-page page-microsite">
        <!-- Wrapper -->
        <div class="wrapper">
            <!-- Header -->
            <div class="navigation-wrapper">
                <div class="primary-navigation-wrapper">
                    <header class="navbar" id="top" role="banner">
                        <div class="container">
                            <div class="navbar-header">
                                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                </button>
                            </div>
                            <nav class="collapse navbar-collapse bs-navbar-collapse navbar-left" role="navigation">
                                <ul class="nav navbar-nav">
                                    <li class="active">
                                        <a href="index.html">Home</a>
                                    </li>
                                    <li>
                                        <a href="#" class="has-child no-link">Organization</a>
                                        <ul class="list-unstyled child-navigation">
                                            <li><a href="organizing-committee.html">Organizing Committee</a></li>
                                            <li><a href="program-committee.php">Program Committee</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                            <!-- /.navbar collapse-->
                        </div>
                        <!-- /.container -->
                    </header>
                    <!-- /.navbar -->
                </div>
                <!-- /.primary-navigation -->
            </div>
            <!-- end Header -->
            <div id="page-content">
                <!-- Slider -->
                <div id="slider">
                    <div class="container">
                        <div class="slider-wrapper">
                            <div class="row">
                                <div class="col-md-9 col-sm-12">
                                    <div class="row">
                                        <div class="image-carousel">
                                            <div class="slide">
                                                <div class="image-carousel-slide" id="rotating_pics"></div>
                                            </div>
                                            <!-- /.slide -->
                                        </div>
                                        <!-- /.image-carousel -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.col-md-9 -->
                                <div class="col-md-3 col-sm-12">
                                    <header>
                                        <h2>Program Committee</h2>
                                    </header>
                                </div>
                                <!-- /.col-md-3 -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.slider-wrapper -->
                    </div>
                    <!-- /.container -->
                </div>
                <!-- end Slider -->
                <!-- Content -->
                <div class="block">
                    <div class="container">
                        <div class="row">
                            <!--MAIN Content-->
                            <div class="col-md-9">
                                <div id="page-main">
                                    <section id="members">
                                        <section id="program-chairs">
                                            <header>
                                                <h2 class="no-divider">Program committee</h2>
                                            </header>
                                            <?php
                                              $f = fopen("assets/mw_pc.csv", "r");
                                              $i=0;
                                              while ($i<52) {
												$line=fgetcsv($f);
                                                $i+=1;
                                                if ($i%2==1){
                                                  echo "<div class=\"row\">";
                                                }
                                                      echo " <div class=\"col-md-6\">\n<div class=\"author-block course-speaker\" style=\"padding:0; margin:0; border-bottom:none;\">\n ";
                                                      echo " <article class=\"paragraph-wrapper\" style=\"padding-left:0;\">\n<div class=\"inner\">\n ";
                                                      echo "<header><a href=\"\">" . $line[0]." ". $line[1] . "</a></header>";
                                                      echo "<figure>". $line[2] ."</figure>";
                                                      echo "</div></article></div></div>";
                                                if ($i%2==0){
                                                  echo "</div>";
                                                }
                                              }
                                              fclose($f);
                                            ?>
                                        </section>
                                        <!-- /#program-chairs -->
                                    </section>
                                </div>
                                <!-- /#page-main -->
                            </div>
                            <!-- /.col-md-6 -->
                            <!--SIDEBAR Content-->
                            <div class="col-md-3">
                            </div>
                            <!-- /.col-md-3 -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container -->
                </div>
                <!-- end Content -->
            </div>
            <footer id="page-footer">
                <section id="footer-top">
                    <div class="container">
                        <div class="footer-inner">
                            <!--                            <div class="footer-social">
                                <figure>Follow us:</figure>
                                <div class="icons">
                                </div> 
                                </div> -->
                            <!-- /.social -->
                        </div>
                        <!-- /.footer-inner -->
                    </div>
                    <!-- /.container -->
                </section>
                <!-- /#footer-top -->
                <section id="footer-bottom">
                    <div class="container">
                        <div class="footer-inner">
                            <div class="copyright"></div>
                            <!-- /.copyright -->
                        </div>
                        <!-- /.footer-inner -->
                    </div>
                    <!-- /.container -->
                </section>
                <!-- /#footer-bottom -->
            </footer>
            <!-- end Footer -->
        </div>
    </body>
    <script type="text/javascript" src="assets/js/jquery-2.1.0.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/selectize.min.js"></script>
    <script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.placeholder.js"></script>
    <script type="text/javascript" src="assets/js/jQuery.equalHeights.js"></script>
    <script type="text/javascript" src="assets/js/icheck.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.vanillabox-0.1.5.min.js"></script>
    <script type="text/javascript" src="assets/js/retina-1.1.0.min.js"></script>
    <script type="text/javascript" src="assets/js/custom.js"></script>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','../../www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-39874729-4', 'auto');
        ga('send', 'pageview');
    </script>
    <!-- Mirrored from acmsocc.github.io/2016/program-committee.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Sep 2016 20:51:30 GMT -->
</html>
