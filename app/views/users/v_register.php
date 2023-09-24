<?php require APPROOT.'/views/inc/header.php'; ?>
    <!-- Top NAVIGATION -->
    <?php require APPROOT . '/views/inc/components/topnavbar.php';?>



    <div class="form-container">
        <div class="form-header">
        <center><h1>Sign Up</h1></center>
        <p><b>Welcome to EcoTrade! Please sign up to continue.</b></p>
        </div>
        <form action="" method="POST">
            <!-- username -->
            <div class="form-input-title">Username</div>
            <input type="text" name="username" placeholder="Username" id="username" class="username" >
            <span class="form-invalid">invalid username</span>

            <!-- email -->
            <div class="form-input-title">Email</div>
            <input type="text" name="email" placeholder="Email" id="email" class="email" >
            <span class="form-invalid"></span>

            <!-- contact number -->
            <div class="form-input-title">Contact Number</div>
            <input type="text" name="number" placeholder="Contact Number" id="number" class="number" >
            <span class="form-invalid"></span>

            <!-- password -->
            <div class="form-input-title">Password</div>
            <input type="password" name="password" placeholder="Password" id="password" class="password" >
            <span class="form-invalid"></span>

            <!-- confirm password -->
            <div class="form-input-title">Confirm Password</div>
            <input type="password" name="confirm_password" placeholder="Confirm Password" id="confirm_password" class="confirm_password" >
            <span class="form-invalid"></span>

            <!-- submit button -->
            <br><br>
            <input type="submit" value="Sign Up" class="form-btn">
        </form>
    </div>

<?php require APPROOT.'/views/inc/footer.php'; ?>