<?php
include "C:\wamp\www\ZINK\Entities\faq.php";
include "C:\wamp\www\ZINK\config.php";

//testConnexion();
$db=config::getConnexion();

    $result=$db->query('SELECT * FROM faq');
$x=0;
?>

<html>


<!-- Mirrored from demo.devitems.com/mirora-v2/mirora/faq.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:54:11 GMT -->
<head>
    

    <!-- ************************* CSS Files ************************* -->

   
   <!--- Basic Page Needs
   ================================================== -->
   <meta charset="utf-8">
    <title>ZINK</title>
    <meta name="description" content="">
    <meta name="author" content="">

   <!-- Mobile Specific Metas
   ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->
   <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/layout.css">
   <link rel="stylesheet" href="css/media-queries.css">
   <link rel="stylesheet" href="css/magnific-popup.css">

   <!-- Script
   ================================================== -->
    <script src="js/modernizr.js"></script>

   <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="photo.jpg" >

</head>

<body>

 
    <!-- Main Wrapper Start -->
    
        <!-- Breadcumb area End -->

        <!-- Main Content Wrapper Start -->
        <div class="row section-head">
<div class="row">
            <div class="two columns header-col">
 <div class="ten columns">
                            <div class="faq-heading">
                                <h2 class="mb--20">Voici les questions fréquemment posées, vous pouvez trouver la réponse vous-même</h2>
                                
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-12">
                            <div id="accordion" class="accordion">
                             <?php while ($row = $result->fetch()) { 
                            
                                    ?>
                                    <div class="card accordion__single">
                                        <div class="card-header accordion__header" id="headingNine">
                                            <a class="btn btn-link accordion__link collapsed" data-toggle="collapse" data-target="#c<?php echo $row['id']; ?>" aria-expanded="true" aria-controls="collapseNine">
                                              <?php echo $row['question']; ?>
                                            </a>
                                        </div>
                                        <div id="c<?php echo $row['id']; ?>" class="collapse" aria-labelledby="headingNine" data-parent="#accordion">
                                            <div class="card-body accordion__body">
                                                <?php echo $row['reponse']; ?>
                                            </div>
                                        </div>
                                    </div>
                    
    <?php
                                        
                                        }
                                        ?>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Content Wrapper Start -->


        <!-- Scroll To Top Start -->    
        <a class="scroll-to-top" href="#"><i class="fa fa-angle-double-up"></i></a>
        <!-- Scroll To Top End -->

        <!-- Popup Subscribe Box Start -->

      

        <!-- Popup Subscribe Box End -->

        <!-- Modal Start -->
        
        <!-- Modal End -->

    </div>
    <!-- Main Wrapper End -->


    <!-- ************************* JS Files ************************* -->

    <!-- jQuery JS -->
    <script src="assets/js/vendor/jquery.min.js"></script>

    <!-- Bootstrap and Popper Bundle JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <!-- All Plugins Js -->
    <script src="assets/js/plugins.js"></script>
    <!-- Ajax Mail Js -->
    <script src="assets/js/ajax-mail.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>



    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>
   <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>

   <script src="js/jquery.flexslider.js"></script>
   <script src="js/waypoints.js"></script>
   <script src="js/jquery.fittext.js"></script>
   <script src="js/magnific-popup.js"></script>
   <script src="js/init.js"></script>

</body>


<!-- Mirrored from demo.devitems.com/mirora-v2/mirora/faq.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:54:11 GMT -->
</html>