<?php
session_start();
    $page_title = "Campus";
?>
<!-- Include Header -->
<?php
    include_once('includes/school_header.php');
?>


    <div class="container-fluid">
        <ul class="breadcrumb">
		    <li><a href="index.php">Home</a></li>
    		<li class="active" style="color:#666;">&nbsp;/&nbsp;Campus</li>
	    </ul>
    </div>

    <div class="container mt-5 mb-5 educationSec">
        <h2 class="eduHead text-justify"><span>Education</span>&nbsp;Facilities</h2>
        <div class="row mt-5">
            <div class="edu_data col-xl-8 col-md-7 col-sm-12">
                <h3>SCIENCE LABORATORIES</h3>
                <p>Well equipped Physics, Chemistry and Biology laboratories to develop inquisitive characters so that they develop to be custodians of the environment. The aims of science labs are to develop interest in and stimulate curiosity and to develop scientific skills and temper so that students can understand themselves and the world around them.</p>
            </div>
            <div class="edu_data col-xl-4 col-md-5 col-sm-4">
                <img src="assets/img/lab.jpg" alt="Laboratory" class="img-fluid img-thumbnail">
            </div>
        </div>
        <div class="row mt-5">
            <div class="edu_data col-xl-4 col-md-5 col-sm-4">
                <img src="assets/img/classrooms.jpg" alt="Classroom" class="img-fluid img-thumbnail">
            </div>
            <div class="edu_data col-xl-8 col-md-7 col-sm-12">
                <h3>CLASS ROOMS</h3>
                <p>There are 50 spacious classrooms linked by a campus wide high speed computer network and equipped with appropriate audio-visual equipment and resources.</p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="edu_data col-xl-8 col-md-7 col-sm-12">
                <h3>LIBRARY</h3>
                <p>“ A well informed person is a well educated person. It is a sharing and perfected source of information” Our school library endeavors to provide students with additional information opportunities. Library collections standout around 10,000 books on a variety of subjects and has a regular influx of journals periodicals and magazines apart a few news papers.</p>
            </div>
            <div class="edu_data col-xl-4 col-md-5 col-sm-4">
                <img src="assets/img/library1.jpg" alt="Library" class="img-fluid img-thumbnail">
            </div>
        </div>
        <div class="row mt-5">
            <div class="edu_data col-xl-4 col-md-5 col-sm-4">
                <img src="assets/img/CompLab.jpg" alt="Computer Labs" class="img-fluid img-thumbnail">
            </div>
            <div class="edu_data col-xl-8 col-md-7 col-sm-12">
                <h3>COMPUTER LABS</h3>
                <p>Four well-equipped computer labs to acquaint the students with information technology. Computer education is provided to our students to get exposure and access to the world of information and create awareness about its uses and the latest technology innovations that are going on in the world.</p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="edu_data col-xl-8 col-md-7 col-sm-12">
                <h3>ATL (Atal Tinkering Lab)</h3>
                <p>With a vision to ‘Cultivate one Million children in India as Neoteric Innovators’, Atal Innovation Mission is establishing Atal Tinkering Laboratories (ATLs) in schools across India. The objective of this scheme is to foster curiosity, creativity and imagination in young minds; and inculcate skills such as design mindset, computational thinking, adaptive learning, physical computing etc.</p>
            </div>
            <div class="edu_data col-xl-4 col-md-5 col-sm-4">
                <img src="assets/img/ATL.png" alt="ATL Laboratory" class="img-fluid img-thumbnail">
            </div>
        </div>
        <div class="row mt-5">
            <div class="edu_data col-xl-4 col-md-5 col-sm-4">
                <img src="assets/img/smartclass.jpg" alt="Laboratory" class="img-fluid img-thumbnail">
            </div>
            <div class="edu_data col-xl-8 col-md-7 col-sm-12">
                <h3>Coming&nbsp;<span style="color:tomato;">Soon...</span></h3>
                <p>We are working to make all classrooms SMART to give technical knowledge to our students. We are giving training to our teachers also to enhance their Skills.</p>
            </div>
        </div>
    </div>

    <!-- Sports CoCurricular -->
    <div class="container mt-5 mb-5 sportSec">
        <h2 class="sportHead text-justify"><span>SPORTS</span>&nbsp;COCURRICULAR</h2>
        <div class="row mt-5">
            <div class="sport_data col-xl-8 col-md-7 col-sm-12">
                <h3>SCOUT AND GUIDE</h3>
                <p>The mission is to contribute to the education of young people, through a value system to help build a better world where people are self reliant individuals and play a constructive role in society. It aspires to make a student trustworthy, loyal, courteous, disciplined, courageous, thrifty and pure in thought, word and deed.</p>
            </div>
            <div class="sport_data col-xl-4 col-md-5 col-sm-4">
                <img src="assets/img/scout.jpg" alt="Scouts" class="img-fluid img-thumbnail">
            </div>
        </div>
        <div class="row mt-5">
            <div class="sport_data col-xl-4 col-md-5 col-sm-4">
                <img src="assets/img/sport.jpg" alt="Sports" class="img-fluid img-thumbnail">
            </div>
            <div class="sport_data col-xl-8 col-md-7 col-sm-12">
                <h3>SPORTS</h3>
                <p>The sporting talents of our school are provided with suitable facilities. Sports increase concentration and develop problem solving skills and improve self-esteem through success and failure. The students learn time management skills, social interaction, exercising leadership, reliance on team-mates, fighting depression and anxiety. The deserving students are given guidance, training and logistic support to participate in the zonal and inter-zonal competitions.</p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="sport_data col-xl-8 col-md-7 col-sm-12">
                <h3>NCC</h3>
                <p>NSC in school - NCC from 01 April 2018. 100 seats have been allotted to the Junior Division of which 100 students were selected as cadets in the first, second year, in which 50 cadets of the school have given the examination of 'A' certificate on 02 February 2020. A platoon of senior division has been approved from July 2020 under which cadets will get 'B' certificate. All of which State services have special importance.</p>
            </div>
            <div class="sport_data col-xl-4 col-md-5 col-sm-4">
                <img src="assets/img/NCC.png" alt="NCC" class="img-fluid img-thumbnail">
            </div>
        </div>
    </div>


<!-- Include Footer -->
<?php
    include_once('includes/school_footer.php');
?>