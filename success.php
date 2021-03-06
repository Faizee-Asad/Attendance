<?php
$title = 'Success';
require_once 'includes/header.php';
require_once 'db/conn.php';

if(isset($_POST['submit'])){
    // extract value from the $_POST array
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $contact = $_POST['phone'];
    $specialty = $_POST['specialty'];
    // Call funtion to insert and track of if success or not
    $isSuccess = $crud->insertAttendees($fname, $lname, $dob, $email,$contact,$specialty);
    // $specialtyName = $crud->getSpecialtyById($specialty);
        
    if($isSuccess){
        // SendEmail::SendMail($email, 'Welcome to IT Conference 2019', 'You have successfully registerted for this year\'s IT Conference');
        include 'includes/successmessage.php';
    }
    else{
        include 'includes/errormessage.php';
    }

}

?>

<h1 class="text-center text-success">You Have Been Registered!</h1>

<!-- This prints out values that were passed to the action page using method="GET" -->
<!-- <div class="card" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">
            Full Name:
            <?php //echo $_GET['firstname'] . ' ' . $_GET['lastname']; ?>
        </h5>
        <h6 class="card-title">
            <?php //echo $_GET['specialty']; ?>
        </h6>
        <p class="card-text">
            Date of Birth:<?php //echo $_GET['dob'] ?>
        </p>
        <p class="card-text">
            Email address:<?php //echo $_GET['email'] ?>
        </p>
        <p class="card-text">Contact Number:<?php //echo $_GET['phone'] ?>
        </p>
    </div>
</div> -->

<div class="card" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">
            Full Name:
            <?php echo $_POST['firstname'] . ' ' . $_POST['lastname']; ?>
        </h5>
        <h6 class="card-title">
            <?php echo $_POST['specialty']; ?>
        </h6>
        <p class="card-text">
            Date of Birth:<?php echo $_POST['dob'] ?>
        </p>
        <p class="card-text">
            Email address:<?php echo $_POST['email'] ?>
        </p>
        <p class="card-text">Contact Number:<?php echo $_POST['phone'] ?>
        </p>
    </div>
</div>


<br>
<br>
<br>
<br>

<?php require_once 'includes/footer.php'; ?>