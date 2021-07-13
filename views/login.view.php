
<?php require "views/partials/loginHeader.php" ?>

    <h2>Login</h2>
    <p>Please fill in your credentials to login.</p>

    <?php
    if(!empty($login_err)){
        echo '<div class="alert alert-danger">' . $login_err . '</div>';
    }
    ?>

<!--    <form action="--><?php //echo htmlspecialchars($_SERVER["PHP_SELF"]); ?><!--" method="post">-->
    <form action="loginProcess" method="post">
        <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" class="form-control <?= (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?= $username; ?>">
            <span class="invalid-feedback"><?= $username_err; ?></span>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control <?= (!empty($password_err)) ? 'is-invalid' : ''; ?>">
            <span class="invalid-feedback"><?= $password_err; ?></span>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Login">
            <a href="/login" class="btn btn-secondary ml-2">Reset</a>
        </div>
        <p>Don't have an account? <a href="/register">Sign up now</a>.</p>
    </form>
</div>
</body>
</html>
