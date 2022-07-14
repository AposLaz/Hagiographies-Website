<!--================Header Menu Area =================-->
        <header class="header_area">
            <nav class="navbar navbar-expand-lg navbar-light fixed-top">
                <div class="container box_1620">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="index.php"><img style="height:70px;" src="img/logo.png" alt="Λογότυπο καταστήματος"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item"><a class="nav-link" href="index.php">Αρχικη</a></li> 
                            <li class="nav-item"><a class="nav-link" href="gallery.php">Συλλογη</a></li>
                            <li class="nav-item"><a class="nav-link" href="index.php#services">υπηρεσιεσ</a></li>
                            <li class="nav-item"><a class="nav-link" href="index.php#about-us">Σχετικα με εμας</a></li>
                            <li class="nav-item"><a class="nav-link" href="index.php#contact-us">Επικοινωνια</a></li>
                            <?php 
                                if(!isset($_SESSION['loggedin'])){
                            ?>
                                <li class="nav-item"><a class="nav-link" href="login2/login.php">Είσοδος</a></li>
                            <?php 
                                } 
                                else{ ?>
                                <li class="nav-item"><a class="nav-link" href="logout.php">Αποσύνδεση</a></li>
                            <?php } ?>
                        </ul>
                    </div> 
                </div>
            </nav>
        </header>
        <!--================Header Menu Area =================-->