
<?php require "views/partials/loginHeader.php" ?>

    <h2>Sign Up</h2>
    <p>Please fill this form to create an account.</p>
<!--    <form action="--><?php //echo htmlspecialchars($_SERVER["PHP_SELF"]); ?><!--" method="post">-->
    <form action="registerCreateUser" method="post">
        <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" class="form-control <?= (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?= $username; ?>">
            <span class="invalid-feedback"><?= $username_err; ?></span>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control <?= (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="">
            <span class="invalid-feedback"><?= $password_err; ?></span>
        </div>
        <div class="form-group">
            <label>Confirm Password</label>
            <input type="password" name="confirm_password" class="form-control <?= (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="">
            <span class="invalid-feedback"><?= $confirm_password_err; ?></span>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Submit">
            <a href="/register" class="btn btn-secondary ml-2">Reset</a>
        </div>
        <p>Already have an account? <a href="login">Login here</a>.</p>
    </form>
</div>
</body>
</html>
