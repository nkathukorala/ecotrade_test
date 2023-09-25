<?php require APPROOT.'/views/inc/header.php'; ?>
    <!-- Top NAVIGATION -->
    <?php require APPROOT . '/views/inc/components/topnavbar.php';?>



    <div class="form-container">
        <div class="form-header">
        <center><h1>Login</h1></center>
        <p><b>Welcome to EcoTrade! Please Login to continue.</b></p>
        </div>
        <form action="" method="POST">

            <!-- email -->
            <div class="form-input-title">Email</div>
            <input type="text" name="email" placeholder="Email" id="email" class="email" >
            <span class="form-invalid"></span>


            <!-- password -->
            <div class="form-input-title">Password</div>
            <input type="password" name="password" placeholder="Password" id="password" class="password" >
            <span class="form-invalid"></span>

            <!-- submit button -->
            <br><br>
            <input type="submit" value="Login" class="form-btn">
        </form>
    </div>

<?php require APPROOT.'/views/inc/footer.php'; ?>