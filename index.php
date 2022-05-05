<?php
$title = 'Index';
require_once 'includes/header.php';

?>

<h1 class="text-warning mt-2 text-center">Registration For IT Conference!</h1>


<form method="get" action="success.php">
    <div class="mb-3">
        <label for="firstname" class="form-label">First Name</label>
        <input type="text" class="form-control" id="firstName" name="firstname" placeholder="Enter firstname">
        <div id="firstnamehelper" class="form-text">We value your privacy.</div>
    </div>


    <div class="mb-3">
        <label for="lastname" class="form-label">Last Name</label>
        <input type="text" class="form-control" id="lastName" name="lastname" placeholder="Enter lastname">
    </div>

    <div class="mb-3">
        <label for="dob" class="form-label">Date Of Birth</label>
        <input type="text" class="form-control" id="dob" name="dob">
    </div>


    <div class="mb-3">
        <label for="" class="form-label">Area Of Experience</label>
        <select class="form-control" id="specialty" name="specialty">
            <option selected>Select Your Profession</option>
            <option value="Database Admin">Database Admin</option>
            <option value="Sofware Developer">Sofware Developer</option>
            <option value="Web Developer">Web Developer</option>
            <option value="Other">Other</option>
    </div>


    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email address" required>
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>

    <div class="mb-3">
        <label for="phone" class="form-label">Contact Number</label>
        <input type="text" class="form-control" id="phone" name="phone">
        <div id="phoneHelp" class="form-text">We'll never share your number with anyone else.</div>
    </div>

    <!--
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1 " placeholder="Enter your password" required>
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
-->
    <div class="d-grid gap-2">
        <button class="btn btn-primary" type="submit" name="submit" id="submit"> Button</button>

    </div>
</form>

<?php require_once 'includes/footer.php'; ?>