<?php
    session_start();
    if(isset($_SESSION["userid"]))
    {
        $profil = $_SESSION["userid"];
    }
    else{
        $profil = "";
    }
    include_once('config.php');
?>

<!doctype html>
<html lang="el" prefix="og: http://ogp.me/ns#">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <!-----------  SEO ---------------->
        <title>Αγιογραφίες - Εικόνες , Αγιογράφηση Ιερών Μονών - Ναών|Hλίας Δήμας</title> <!-- 66 -->
        <meta name="description" content="Καλωσορίσατε στον ιστότοπο του καταστήματος Αγιογρφίες Ηλίας Δήμας.Οι αγιογραφίες,εικόνες Αγίων θα προσφέρουν στον Ιερό Ναό την αίγλη που του αρμόζει.">
        <meta name="robots" content="index, follow" />
        <meta name="keywords" content="αγιογραφίες, agiografies, agiographies, τοιχογραφίες, toixografies , εικόνες αγίων , eikones agiwn , Αγιογραφίες για Εκκλησίες , Αγιογραφίες για Ναούς , Αγιογραφίες Μονών , αγιογράφοι , agiografoi , Γρεβενά ,Grevena, Αγιοι , Παναγία , Εκόνες Παναγίας , εικόνες Χριστού ,Agioi,Panagia,Eikones Panagias,eikones Xristou,ekklisies,Εκκλησίες Γρεβενά,ζωγράφοι,zwgrafoi,αγιογραφιες για την εκκλησία,agiografies gia tin ekklhsia,αγιογραφίες σε ξύλο">
        <!------------- OG DATA ------------------->
        <meta property="og:type" content="website">
        <meta property="og:url" content="" />
        <meta property="og:title" content="Αγιογραφίες - Εικόνες , Αγιογράφηση Ιερών Μονών - Ναών|Hλίας Δήμας" />
        <meta name="og:description" content="Καλωσορίσατε στον ιστότοπο του καταστήματος Αγιογρφίες Ηλίας Δήμας.Οι αγιογραφίες,εικόνες Αγίων θα προσφέρουν στον Ιερό Ναό την αίγλη που του αρμόζει.">                   <!-- example -->
        <meta property="og:image" content="https://www.hagiography.gr/images/Ierosolima/medium/Ierosolima_15.jpg">
        <meta property="og:locale" content="el_GR" />
        <!--- id apo to fb developpers --->
        <meta property="fb:app_id" content="">
        <!------   links ------->
        <link rel="canonical" href=""> <!--ur-->


        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="vendors/animate-css/animate.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <link rel="stylesheet" href="css/responsive.css">
        <!---------js---------------------------->
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
          <script src="js/jquery.js"></script>
          <script src="js/bootstrap.js"></script>
          <script src="js/myjs.js"></script>
        <style type="text/css">
            .categories_post:hover .categories_details {
                background: rgba(34, 34, 34, 0.8); /*rgba(248, 182, 0, 0.85);*/
            }
        </style>
    </head>
    <body style="background: url(marios_agio/test3.jpg);">
        
        <?php
            include('header.php');
        ?>
        
        <?php
            include('banner.php');
        ?>
        
        <!--================Find View Area =================-->
        <section class="find_view_area p_120" style="background-color:#f3f3f1;">
            <div class="container" id="about-us" align="center">
                        <ul class="gallery_filter list" align="center">
                            <h2 style="color:#000;font-size: 40px;"><strong>ΣΧΕΤΙΚΑ ΜΕ ΕΜΑΣ</strong></h2>
                            <hr style="width: 25%; color:#331a00;border: 2px solid #331a00;">
                        </ul>
                        <br>
                        <br>
            </div>
            <div class="container">
                <div class="find_inner">
                    <img class="img-fluid" src="marios_agio/15.jpg" alt="">
                    <div class="find_text">
                        <div class="find_text_inner">
                            <h4>Ηλίας Δήμας</h4>
                            <p style="color:black"> Ο Δήμας Ηλίας έιναι επαγγελματίας ζωγράφος,όπου ζει στην πόλη των Γρεβενών και έχει πάνω από 27 χρόνια εμπειρίας στον κλάδο. Έχει εξειδίκευση στην αγιογραφία και λειτουργεί το δικό του ατελιέ στα Γρεβενά για πάνω από 15 χρόνια. Λαμβάνει εξ ολοκλήρου τη χειροποίητη αγιογράφηση ναών και την παραγωγή χειροποίητων φορητών εικόνων παντώς μεγέθους.</p><br>
                            <p style="color:black">Ξεκίνησε να εργάζεται ως καλλιτέχνης από το 1992 και το 2004 άνοιξε το δικό 
                            του ατελιέ ζωγραφικής και αγιογραφίας το οποίο λειτουργεί μέχρι και σήμερα. Όλο αυτό το διάστημα έχει συνεργαστεί με τους περισσότερους ναούς του νομού αλλά και εκτός αυτού.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Find Vies Area =================-->

        <!--================Home Gallery Area style="background-color: #e7e6e4=================-->
        <section class="home_gallery_area p_120" style="background: url(marios_agio/test3.jpg);">
        	<div class="container" align="center">
            			<ul class="gallery_filter list">
    						<h2 style="color:#000;font-size: 40px;"><strong>ΣΥΛΛΟΓΗ</strong></h2>
                            <hr style="width: 25%; color:#331a00;border: 2px solid #331a00;">
                        </ul>
                        <br>
                        <br>
        	</div>
        	<div class="container box_1620">
        		<div class="gallery_f_inner row imageGallery1">
                    <?php 
                    //-----------------DISPLAY IMAGES------------------
                          $sql="SELECT * FROM images ORDER BY ID DESC LIMIT 8"; 
                          $result = mysqli_query($link,$sql) or die('There was an error'); 
                          while ($row = mysqli_fetch_array($result)) {
                    ?>
            			<div class="col-lg-3 col-md-4 col-sm-6 ap">
            				<div class="h_gallery_item">
                                <img width="100px" height="220px" src="images_marios/<?php echo $row['image_name']; ?>" alt="Ένα από τα έργα μας" title="Αγιογραφία">
                                <div class="hover">
                                    <!--<a href="#"><h4>Spreading Peace to world</h4></a>-->
                                    <a class="light" href="images_marios/<?php echo $row['image_name']; ?>"><i class="fa fa-expand"></i></a>
                                </div>
                        </div>
            			</div>
                    <?php } ?>
        		</div>
        		<div class="button_more">
        			<a class="btn theme_btn" href="gallery.php">Περρισοτερες Εικονες</a>
        		</div>
        	</div>
        </section>
        <!--================End Home Gallery Area =================-->
        
        <!--================Service Area =================-->
        <section class="service_area p_120" style="background-color:#f3f3f1;">
        	<div class="container" id="services">
        		<div class="main_title">
                    <ul class="gallery_filter list">
            			 <h2>ΟΙ ΥΠΗΡΕΣΙΕΣ ΜΑΣ</h2>
            			 <hr style="width: 25%; color:#331a00;border: 2px solid #331a00;">
        		    </ul>
                </div>
        		<div class="row service_inner justify-content-center">
        			<div class="col-lg-4">
                        <a href="gallery.php#image_senction">
            				<div class="categories_post" style="background-color: #fff;">
                                <img width="400px" height="300px" src="marios_agio/12.jpg" alt="φορητές εικόνες">
                                <div class="categories_details">
                                    <div class="categories_text">
                                        <h5>Ζωγραφική φορητών νεοκλασσικών εικόνων</h5>
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                        <p>wsdfsd sdfsdf sdfsdf sdfsdf wfeef wefergreger egergerger wegegwe wefwqfq wfwefwfweqwfwf wfewfw fevev vgvg </p>
                                    </div>
                                </div>
            					<!--<h4>Ζωγραφική φορητών νεοκλασσικών εικόνων</h4></a>
            					<p>...</p>-->
            				</div>
                        </a>
        			</div>
        			<div class="col-lg-4">
                        <a href="gallery.php#image_senction">
                            <div class="categories_post" style="background-color: #fff;">
                                <img width="400px" height="300px" src="marios_agio/25.jpg" alt="φορητές εικόνες">
                                <div class="categories_details">
                                    <div class="categories_text">
                                        <h5>Τοιχογραφίες Αγίων</h5>
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                        <p>wsdfsd sdfsdf sdfsdf sdfsdf wfeef wefergreger egergerger wegegwe wefwsad  sadf sdfqfq wfwefwfweqwfwf wfewfw fevev vgvg </p>
                                    </div>
                                </div>
                                <!--<h4>Ζωγραφική φορητών νεοκλασσικών εικόνων</h4></a>
                                <p>...</p>-->
                            </div>
                        </a>
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End Service Area =================-->
        
        <!--================Contact Area =================-->
        <section class="contact_area p_120" style="background-color: #fff">
            <div class="container" id="contact-us" align="center">
                        <ul class="gallery_filter list">
                            <h2 style="color:#000;font-size: 40px;"><strong>ΕΠΙΚΟΙΝΩΝΙΑ</strong></h2>
                            <hr style="width: 25%; color:#331a00;border: 2px solid #331a00;">
                        </ul>
                        <br>
                        <br>
            </div>
            <div class="container">
                <div class="row">
                    <div class="mapouter mapBox col-md-8">
                        <iframe width="100%" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=makedonomachon%201%2Cgrevena%2051100&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.online-timer.net"></a><style>.mapouter{position:relative;text-align:right;height:500px;width:529px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:529px;}</style></div>
                    <div class="col-lg-3">
                        <div class="contact_info" >
                            <div class="info_item">
                                <h4 style="color:black">Για οποιαδήποτε πληροφορία μην διστάσετε να επικοινωνήσετε μαζί μας.</h4>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-home" style="color:#331a00"></i>
                                <a href="https://www.google.com/maps/place/%CE%9C%CE%B1%CE%BA%CE%B5%CE%B4%CE%BF%CE%BD%CE%BF%CE%BC%CE%AC%CF%87%CF%89%CE%BD+1,+%CE%93%CF%81%CE%B5%CE%B2%CE%B5%CE%BD%CE%AC+511+00/@40.0837524,21.4249116,18z/data=!4m5!3m4!1s0x13599700451ce0a9:0x306ab1b76f64fcd5!8m2!3d40.08393!4d21.4259193"><h6>Μακεδονομάχων 1, Γρεβενά 51100, Ελλάδα</h6></a>
                                <p>Η τοποθεσία μας</p>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-phone-handset" style="color:#331a00"></i>
                                <h6><a href="tel:+6936747555">030-6936747555</a></h6>
                                <p>Επικοινωνήστε μαζί μας οποιαδήποτε στιγμή</p>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-envelope" style="color:#331a00"></i>
                                <h6><a href="mailto:iliasdimas65@gmail.com">iliasdimas65@gmail.com</a></h6>
                                <p>Επικοινωνία μέσω email</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================Contact Area =================-->
        
        <!--=================  FOOTER  ===================-->
        <?php 
            include('footer.php');
        ?>
        <!--================= END FOOTER  ================-->
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/stellar.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope-min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="js/theme.js"></script>

        <!-- contact js -->
        <script src="js/jquery.form.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/contact.js"></script>
        <!--gmaps Js-->

        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB-euwgJulhrbapHi07aK_etmdq748RtZU&callback=initMap"></script>
        <script src="js/gmaps.min.js"></script>
        <script src="js/theme.js"></script>

         <!-- Js -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


    </body>
</html>