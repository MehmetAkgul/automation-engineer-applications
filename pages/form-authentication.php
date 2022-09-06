<?php
if (  $_POST && $_POST["username"] == "techproed" && $_POST["password"] == "SuperSecretPassword") {  ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">

            You logged into a secure area!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

    </div>

    <div class="example">
    <h2><i class="icon-lock"></i> Secure Area</h2>
    <h4 class="subheader">Welcome to the Secure Area. When you are done click logout below.</h4>
    <a class="btn btn-dark" href="form-authentication.php"><i class="fa fa-sign-out-alt"> Logout</i></a>
    </div>
    <script>
        document.title = "Secure Area";
    </script>
    <?php } else {  ?>
    <div class="example">
        <h2>Login Page</h2>
        <h5>This is where you can log into the secure area. Enter <em>techproed</em> for the username and
            <em>SuperSecretPassword</em> for the password. If the information is wrong you should see error
            messages.</h5>
        <form action="form-authentication.php" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Username</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="username" aria-describedby="usernameHelp">
                <div id="usernameHelp" class="form-text">We'll never share your Username with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script>
        document.title = "Login";
    </script>
    <!-- col-md-8 finis-->
    <?php } ?>

