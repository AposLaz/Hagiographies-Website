<?php
    ob_start();
    session_start();

    // edw mporeis na tsekareis ama einai sundedemenos o xrhsths me thn metavlhth loggedin pou evala sto login.php
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
    {
        $profil = $_SESSION["userid"];
    }
    else{
        $profil = "";
    }
    include_once('config.php');
?>

<!doctype html>
<html prefix="og: http://ogp.me/ns#" lang="el">
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
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
        <style type="text/css">
            .gallery_group{
                display: none;
            }
            .gallery-btn-color{
                color: white;
               background-color:#804200;
               border-right: 1px solid white;
               border-left: 1px solid white;
               cursor: pointer;
            }
            .active, .gallery-btn-color:hover {
              background-color: #b35c00;
              color: white;
            }

            @media (max-width:450px){
                .gallery_group{
                    display:block;
                }
                .gallery_group_row{
                    display:none;
                }
            }
        </style>
    </head>
    <body style="background-color: #331a00;">
        
        <!--================Header Menu Area =================-->
        <?php
            include('header.php');
        ?>
        <!--================Header Menu Area =================-->
        
        <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
						<h2>Τα έργα μας>
						<div class="page_link">
							<a href="index.php">Αρχική</a>
							<a href="gallery.php">Συλλογή</a>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--======================= MODAL =====================-->
            <!-- Modal -->
                <div class="modal fade" id="upload_image_now" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Ανέβασε μία Φωτογραφία</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                          <?php if(isset($_SESSION["loggedin"])){ ?>
                                <form action="upload_image.php" method="post" name="myform" enctype="multipart/form-data">
                                  <div class="modal-body">
                                            <div class="form-group col-lg-5 col-lg-4" align="left">
                                              <label class="btn btn-primary" style="float:left;margin:3px;cursor:pointer;">
                                                  Πρόσθεσε μια εικόνα<input type="file" name="image" style="display:none">
                                              </label>
                                            </div>
                                            <br>
                                            <div class="w-100"></div>
                                           <div class="form-group col-lg-7" align="left">
                                                <label for="message-text" class="col-form-label" style="color:black">Περιγραφή:</label>
                                                <textarea class="form-control" name="description1" rows="1" id="message-text"></textarea>
                                          </div>
                                          <div class="form-group col-lg-7" align="left">
                                                <label for="message-text" class="col-form-label" style="color:black">Διαστάσεις:</label>
                                                <textarea class="form-control" name="dimension" rows="1" id="message-text"></textarea>
                                          </div>
                                            <div class="group-form col-lg-5" align="left" style="margin-left:20px;">
                                                <input type="checkbox" class="form-check-input" value="1" id="exampleCheck1" name="eikona"><strong style="color:black">Φορητή εικόνα</strong>
                                                <br>
                                                <input type="checkbox" class="form-check-input" value="0" style="color:black" id="exampleCheck2" name="eikona"><strong style="color:black">Τοιχογραφία</strong>
                                            </div>
                                  </div>
                                  <div class="modal-footer">
                                    <button style="cursor:pointer" type="button" class="btn btn-danger" data-dismiss="modal">Ακύρωση</button>
                                    <button type="submit" name="upload_image" onclick="return funcheck()" class="btn btn-success" style="cursor:pointer;float:left;margin:3px;">Προσθήκη</button>
                                  </div>
                              </form>
                          <?php } ?>
                    </div>
                  </div>
                </div>
        <!--======================= END MODAL ====================-->

         <!--======================= UPDATE MODAL =====================-->
            <!-- Modal -->
                <div class="modal fade" id="update_image" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Επεξεργασία Φωτογραφίας</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                          <?php if(isset($_SESSION["loggedin"])){ ?>
                                <form action="update_image.php" method="post" name="myform" enctype="multipart/form-data">
                            <div class="modal-body">

                                  <input type="hidden" name="update_id" id="update_id">
                                  
                                  <div class="form-group col-lg-7" align="left">
                                    <label for="message-text" class="col-form-label" style="color:black">Περιγραφή:</label>
                                    <textarea class="form-control" name="description2" rows="1" id="message-text"></textarea>
                                </div>
                                <div class="form-group col-lg-7" align="left">
                                    <label for="message-text" class="col-form-label" style="color:black">Διαστάσεις:</label>
                                    <textarea class="form-control" name="dimension1" rows="1" id="message-text1"></textarea>
                                </div>
                                  
                                <div class="group-form col-lg-5" align="left" style="margin-left:20px;">
                                    <input type="checkbox" class="form-check-input check-class" value="1" id="exampleCheck11" name="check"><strong style="color:black">Φορητή εικόνα</strong>
                                    <br>
                                    <input type="checkbox" class="form-check-input check-class" value="0" style="color:black" id="exampleCheck22" name="check"><strong style="color:black">Τοιχογραφία</strong>
                                </div>
                            </div>
                                  <div class="modal-footer">
                                    <button style="cursor:pointer" type="button" class="btn btn-danger" data-dismiss="modal">Ακύρωση</button>
                                    <button type="submit" name="update_img" onclick="return funcheck()" class="btn btn-success" style="cursor:pointer;float:left;margin:3px;">Αποθήκευση</button>
                                  </div>
                              </form>
                          <?php } ?>
                    </div>
                  </div>
                </div>
        <!--======================= END UPDATE MODAL ====================-->

        <!--================Home Gallery Area =================-->
        <section class="home_gallery_area p_120" id="image_senction" style="background: url(marios_agio/test3.jpg);">
            <!----------------------- BUTTONS FOR UPLOAD ----------------------->
        	<div class="container" id="show_all_images" align="center">
                        <?php 
                            if($profil==true){
                                if(isset($_SESSION['msg']) && !empty($_SESSION['msg'])){ ?>
                        <p style="font-size:18px;color:#336600;text-align:center;font-weight: bold;"><?php echo $_SESSION['msg']; ?></p>
                        <?php
                            }  
                                unset($_SESSION['msg']);
                            }
                        ?>
            			<ul class="gallery_filter list">
                            <h2 style="color:#000;font-size: 40px;"><strong>ΣΥΛΛΟΓΗ</strong></h2>
                            <hr style="width: 25%; color:#331a00;border: 2px solid #331a00;">
                            <?php if($profil == true){ ?>
        						  <button type="submit" name="upload_image" class="btn btn-success" data-toggle="modal" data-target="#upload_image_now" style="cursor:pointer;float:left;margin:3px;" >ΠΡΟΣΘΗΚΗ ΕΙΚΟΝΑΣ</button>
                            <?php } ?>
    					</ul>
                        <br>
                        <br>

                        <div class="btn-group gallery_group_row gallery_filter list" id="btn-active1" role="group" aria-label="Basic example">
                        <form action="gallery.php#show_all_images" method="post">
                          <button type="submit" name="ph1" class="btn gallery-btn-color ">Όλα τα Έργα</button>
                          <button type="submit" name="ph2" class="btn gallery-btn-color">Τοιχογραφίες Αγίων</button>
                          <button type="submit" name="ph3" class="btn gallery-btn-color ">Φορητές Νεοκλασσικές Εικόνες</button>
                        </form>
                        </div>

                        <div id="btn-active2" class="btn-group-vertical gallery_group gallery_filter list" role="group" aria-label="Basic example">
                        <form action="gallery.php#show_all_images" method="post">
                          <button type="submit" name="ph1" class="btn gallery-btn-color ">Όλα τα Έργα</button>
                          <button type="submit" name="ph2" class="btn gallery-btn-color">Τοιχογραφίες Αγίων</button>
                          <button type="submit" name="ph3" class="btn gallery-btn-color">Φορητές Νεοκλασσικές Εικόνες</button>
                      </form>
                        </div>
                	</div>
                    <br>
                    <br>
        	<div id="images_show" class="container box_1620">
        		<div class="gallery_f_inner row imageGallery1">


                    <?php 
    //========================-----------------DISPLAY IMAGES------------------============================//
                        if(isset($_POST["ph2"]))
                        {
                            $sql="SELECT * FROM images WHERE type='toixografia' order by ID DESC"; 
                            $result = mysqli_query($link,$sql) or die('There was an error');
                        }else if(isset($_POST["ph3"])){
                            $sql="SELECT * FROM images WHERE type='pinakas' order by ID DESC"; 
                            $result = mysqli_query($link,$sql) or die('There was an error');
                        }else{
                            $sql="SELECT * FROM images order by ID DESC"; 
                            $result = mysqli_query($link,$sql) or die('There was an error');
                        } 
                        while ($row = mysqli_fetch_array($result)) {
                    ?>
        			<div class="col-lg-3 col-md-4 col-sm-6 ap">
                        <?php if($profil==true){ ?>
                            <!--------- DELETE IMAGE ----------->
                            <div class="row" align="center">
                               <!-- <div class="col">
                                    <button type="button" data-toggle="modal" data-target="#update_image" class="btn btn-link update_btn" value="<?php echo $row['ID'] ?>"><i style="color:blue;font-size: 15px;cursor: pointer" class="fa fa-retweet">Επεξεργασία</i></button>
                                </div>-->
                                <div class="col">
                                    <a href="delete_image.php?delID=<?php echo $row['ID'] ?>" onClick="return confirm('Θες να διαγράψεις την εικόνα?');"><i style="color:red;margin-top: 12px;" class="fa fa-trash">Διαγραφή</i></a>
                                </div>
                            </div>
                        <?php } ?>
        				<div class="h_gallery_item">
        					<img width="100px" height="200px" src="images_marios/<?php echo $row['image_name']; ?>" alt="" title="Αγιογραφία">
        					<div class="hover">
        						<!--<a href="#"><h4>Spreading Peace to world</h4></a>-->
        						<a class="light" href="images_marios/<?php echo $row['image_name']; ?>"><i class="fa fa-expand"></i></a>
        					</div>
                            <figcaption style="text-align:center"><?php echo $row['description'] ?></figcaption>
                            <figcaption style="text-align:center"><?php echo $row['dimension'] ?></figcaption>
        				</div>
        			</div>
                <?php } ?>
        		</div>
        </section>
        <!--================End Home Gallery Area =================-->
        
        <!--================Footer Area =================-->
        <?php 
            include('footer.php');
        ?>
        
        
        
        
        
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

        <!-- Js -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <!-- FOR OPEN MODAL AT EDIT BUTTON -->
    <script>
        $(document).ready(function () {
            $('.update_btn').on('click',function(){
                    var id = $(this).val();
                    console.log(id); 
                    $('#update_image').modal('show');

                    //$tr = $(this).closest('tr');
                    
                    var id = $(this).closest("img").map(function(){
                        return $(this).text();
                    }).get();

                    $tr = $(this).closest('figcaption');
                    $tl = $tr.html($("#message-text").val()); 
                   // var data1 =$tr.children("figcaption").map(function(){
                    //    return $(this).text();
                    //}).get();


                    console.log(data);
                    console.log(data1);

                    $('#update_id').val(data[0]);
                    $('#message-text').val(id);
                    $('#message-text1').val(data1[1]);
                
            });
        });
    </script>  


    <script>
        function funcheck(){
            var x = document.forms["myform"]['image'].value;
            var y = document.getElementById("exampleCheck1").checked;
            var z = document.getElementById("exampleCheck2").checked;
            
            if (x.length==0) {
                alert("Επέλεξε μια εικόνα");
                return false;
            }
            else if(y==false && z==false)
            {
                alert("Επέλεξε έναν τύπο εικόνα");
                return false;
            }
            else if(y==true && z==true)
            {
                alert("Επέλεξε έναν τύπο εικόνας.Όχι 2!!!");
                return false;
            }
            else{
                return true;
            }
        }
        // Add active class to the current button (highlight it)
        var header = document.getElementById("btn-active1");
        var btns = header.getElementsByClassName("gallery-btn-color");
        for (var i = 0; i < btns.length; i++) {
          btns[i].addEventListener("click", function() {
          var current = document.getElementsByClassName("active");
          current[0].className = current[0].className.replace(" active", "");
          this.className += " active";
          });
        }

        // Add active class to the current button (highlight it)
        var header = document.getElementById("btn-active2");
        var btns1 = header.getElementsByClassName("gallery-btn-color");
        for (var i = 0; i < btns1.length; i++) {
          btns1[i].addEventListener("click", function() {
          var current = document.getElementsByClassName("active");
          current[0].className = current[0].className.replace("active", "");
          this.className += " active";
          });
        }
    </script>

    </body>
</html>