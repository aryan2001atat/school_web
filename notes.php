<?php
    session_start();
    $page_title = "Notes";
    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true){
        header("location: loginform.php");
        exit;
    }
    

    // Include Header

    include_once('includes/school_header.php');
?>
    
    <div class="alert alert-warning alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        Please wait for some days.&nbsp;We are working with notes and will upload it <strong>SOON.</strong>
    </div>

    <div class="container-fluid">
        <ul class="breadcrumb">
		    <li><a href="index.php">Home</a></li>
    		<li class="active" style="color:#666;">&nbsp;/&nbsp;Notes</li>
	    </ul>
    </div>

    <div class="container">
        <p><span style="color:tomato;">Hello</span> <b>Students</b>, here you can download your class <em>syllabus</em> and <em>Notes</em> ....</p>
    </div>

    </div class="container-fluid">
    
        <div class="row">
            <button href="#" type="button" class="btn btnNotes btn-primary  btn-block mx-auto mb-3" style="width:50%; font-family:cursive !important; background-color:#b2a9a9; color:black ;" >Class 12 Syllabus and Notes</button>
        </div>
        <div class="row">
            <button href="#" type="button" class="btn btnNotes btn-primary  btn-block mx-auto mb-3" style="width:50%; font-family:cursive !important; background-color:#b2a9a9; color:black ;" >Class 11 Syllabus and Notes</button>
        </div>
        <div class="row">
            <button href="#" type="button" class="btn btnNotes btn-primary  btn-block mx-auto mb-3" style="width:50%; font-family:cursive !important; background-color:#b2a9a9; color:black ;" >Class 10 Syllabus and Notes</button>
        </div>
        <div class="row">
            <button href="#" type="button" class="btn btnNotes btn-primary  btn-block mx-auto mb-3" style="width:50%; font-family:cursive !important; background-color:#b2a9a9; color:black ;" >Class 9 Syllabus and Notes</button>
        </div>
        <div class="row">
            <button href="#" type="button" class="btn btnNotes btn-primary  btn-block mx-auto mb-3" style="width:50%; font-family:cursive !important; background-color:#b2a9a9; color:black ;" >Class 8 Syllabus and Notes</button>
        </div>
        <div class="row">
            <button href="#" type="button" class="btn btnNotes btn-primary  btn-block mx-auto mb-3" style="width:50%; font-family:cursive !important; background-color:#b2a9a9; color:black ;" >Class 7 Syllabus and Notes</button>
        </div>
        <div class="row">
            <button href="#" type="button" class="btn btnNotes btn-primary  btn-block mx-auto mb-3" style="width:50%; font-family:cursive !important; background-color:#b2a9a9; color:black ;" >Class 6 Syllabus and Notes</button>
        </div>

    </div>

    
<!-- Include Footer -->
<?php
    include_once('includes/school_footer.php');
?>