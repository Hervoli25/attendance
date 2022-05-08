<?php
$title = 'Success';
require_once 'includes/header.php';
?>

<h1 class="success">you have been registered successfully! 😊</h1>

<!--This code uses the method Get to print out the values that were passed to the action page. -->

<!--
<div class="card content" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title"><?php //echo $_GET['firstname'] . ' ' . $_GET['lastname'] 
                                ?></h5>

        <h6 class="card-subtitle mb-2 text-muted">
            <?php //echo $_GET['specialty']; 
            ?>
        </h6>


        <p class="card-text">
            Date Of Birth: <?php //echo $_GET['dob']; 
                            ?>
        </p>

        <p class="card-text">
            Email Adress: <?php //echo $_GET['email']; 
                            ?>
        </p>

        <p class="card-text">
            Cel Number: <?php // echo $_GET['phone']; 
                        ?>
        </p>

        <a href="#" class="card-link">
            Check Details
            <i class="fa-solid fa-trash-can text-danger"></i>
        </a>
        <a href="#" class="card-link">
            Edit Profile
            <i class="fa-solid fa-pen text-danger"></i>
        </a>
    </div>
</div>
-->

<div class="card content" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title"><?php echo $_POST['firstname'] . ' ' . $_POST['lastname']
                                ?></h5>

        <h6 class="card-subtitle mb-2 text-muted">
            <?php echo $_POST['specialty'];
            ?>
        </h6>


        <p class="card-text">
            Date Of Birth: <?php echo $_POST['dob'];
                            ?>
        </p>

        <p class="card-text">
            Email Adress: <?php echo $_POST['email'];
                            ?>
        </p>

        <p class="card-text">
            Cel Number: <?php echo $_POST['phone'];
                        ?>
        </p>

        <a href="#" class="card-link">
            Check Details
            <i class="fa-solid fa-trash-can text-danger"></i>
        </a>
        <a href="#" class="card-link">
            Edit Profile
            <i class="fa-solid fa-pen text-danger"></i>
        </a>
    </div>
</div>


<?php
echo $_POST['firstname'];
echo $_POST['lastname'];
echo $_POST['dob'];
echo $_POST['specialty'];
echo $_POST['email'];
echo $_POST['phone'];


?>


<br>
<br>
<br>

<?php require_once 'includes/footer.php'; ?>