<?php
session_start();
$page_title = "Home";

?>
<!-- Include Header -->
<?php
	include_once('includes/school_header.php');
?>

    <!-- Navigation Bar -->
    <!-- <navbar>
        <div class="container-fluid con1">
            <ul class="nav">
                <li id="l1"><a href="#" class="active">Home</a></li>
                <li><a href="https://www.youtube.com/" target="_blank">Campus</a></li>
                <li><a href="#">Gallery</a></li>
                <li><a href="#">Notice</a></li>
                <li><a href="#">Courses</a></li>
                <li><a href="#">About Us</a></li>
            </ul>
        </div>
    </navbar> -->

    


    <div class="container-fluid">
        <ul class="breadcrumb">
		    <li><a class="active" style="color:#666;" >Home</a></li>
	    </ul>
    </div>

    <!-- Home -->
    <div id="home">


        <!-- Video and Aim -->
        <div class="container-fluid con2">
            <div class="row mt-5 mb-5">
                <div class="col-xl-5  col-md-6 col-sm-12 vid">
                    <video width="400px" autoplay controls muted loop>
                        <source src="assets/vid/IntroSchool.mp4">
                        
                    </video>
                </div>
                <div class="col-xl-7 aim  col-md-6 col-sm-12" id="aim">
                    <h2>Our Aim</h2>
                    <p class="text-justify">Such a national education system has to be developed,
                        through which such a young generation can be created which is full of patriotism
                        physical, vital, mental, intellectual and
                        be fully developed spiritually, able to face the present challenges of life and his life
                        Villagers, residents, girikandras, slum dwellers living in oppressed poverty-stricken
                        By making the people free from social evils, exploitation and injustice, the life of the nation
                        is harmonious, prosperous and
                        Dedicated to creating culture.</p>
                    <button class="btncampus"><a href="campus.php">OUR CAMPUS</a></button>
                </div>
            </div>
        </div><hr>


        <!-- Our Management -->
        <div class="container mt-5 mb-5 managementsec">
            <h1 class="mnghead text-justify">Our&nbsp;<span>Management</span></h1>
            <div class="row mt-5">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <img class="img-fluid img-thumbnail mngImg" src="assets/img/president.png" alt="President">
                    <p class="mngName">President</p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <img class="img-fluid img-thumbnail mngImg" src="assets/img/manager.png" alt="Manager">
                    <p class="mngName">Manager</p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <img class="img-fluid img-thumbnail mngImg" src="assets/img/tres.jpg" alt="Treasure">
                    <p class="mngName">Treasure</p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <img class="img-fluid img-thumbnail mngImg" src="assets/img/principal.png" alt="Principal">
                    <p class="mngName">Principal</p>
                </div>
            </div>
        </div><hr>


        <!-- Our Gallery -->
        <div class="container mt-5 mb-5 gallery">
            <h1 class="galhead text-justify">Our&nbsp;<span>Gallery</span></h1>
            <div class="row mt-5">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="assets/img/class1.jpg" target="_blank"><img class="img-fluid img-thumbnail mt-2 galImg"
                            src="assets/img/class1.jpg" alt="error"></a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="assets/img/class2.jpg" target="_blank"><img class="img-fluid img-thumbnail mt-2 galImg"
                            src="assets/img/class2.jpg" alt="error"></a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="assets/img/classroom.jpg" target="_blank"><img class="img-fluid img-thumbnail mt-2 galImg"
                            src="assets/img/classroom.jpg" alt="error"></a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="assets/img/classrooms.jpg" target="_blank"><img class="img-fluid img-thumbnail mt-2 galImg"
                            src="assets/img/classrooms.jpg" alt="error"></a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="assets/img/culture.jpg" target="_blank"><img class="img-fluid img-thumbnail mt-2 galImg"
                            src="assets/img/culture.jpg" alt="error"></a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="assets/img/indian trad dance.jpg" target="_blank"><img class="img-fluid img-thumbnail mt-2 galImg"
                            src="assets/img/indian trad dance.jpg" alt="error"></a>
                    <a href="gallery.php"><button type="button" class="btn mt-2 btn-outline-primary">View All >></button></a>
                </div>
            </div>
        </div><hr>
            
        </div>
        
	</div>
    

<!-- Include Footer -->
<?php
    include_once('includes/school_footer.php');
?>