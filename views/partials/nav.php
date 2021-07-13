<!--Navigation Bar-->

<?php
$loginCheck->isLoggedin();
?>

<nav class="navbar navbar-light navbar-expand bg-light">
    <div class="container-fluid">
        <div class="navbar-nav">
            <a class="nav-link active" href="/">Home</a>
        </div>
        <div class="navbar-nav">
            <p>Hello <?= $_SESSION['username'] ?></p>
        </div>
        <div class="navbar-nav">
            <a class="nav-link active" href="/logout">Logout</a>
        </div>
    </div>
</nav>
