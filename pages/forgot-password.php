<div class="example">
    <h2>Forgot Password</h2>
    <h4 class="subheader"></h4>
    <form name="forgot_password" id="forgot_password" action="forgot-password2.php" method="post">
        <div class="row g-3  mb-3 align-items-center">
            <div class="col-auto">
                <label for="email" class="col-form-label">E-mail</label>

            </div>
            <div class="col-auto">
                <input type="text" class="form-control" name="email" id="email"
                       pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
            </div>
        </div>

        <button type="submit" class="btn btn-primary"><i class="icon-2x icon-signin">Retrieve password</i>
        </button>

    </form>
</div>
<script>
    document.title = "Forgot Password";
</script>