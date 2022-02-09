<!-- PHP Code starts -->
<?php 
    session_start();
    if(!isset($_SESSION['email'])){
        // method one
        // echo '<img src="https://thumbs.dreamstime.com/b/access-denied-rubber-stamp-over-white-background-86663740.jpg">';
        // echo "<br>";
        // echo '<a href="login.php">Go to Login</a>'; 

        // method two - redirection
        // header() method is use to redirect pages in php
        header("Location: login.php");
    }else{
?>
<!-- PHP Code ends -->

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0:">
        <title>BMI - DAV 4th Sem</title>

        <!-- Bootstrap 5 CSS CDN starts -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- Bootstrap 5 CSS CND ends -->
        
        <!-- custom css start -->
        <style>
            <?php include 'assets/css/style.css'; ?>
        </style>
        <!-- custom css ends -->
    </head>
    <body>
        <!-- Bootstrap Navbar  starts-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                </div>
            </div>
        </nav>
        <!-- Navbar ends -->

        <!-- Content starts -->
        <div class="container-fluid">
            <h1>Welcome to BMI <?php echo $_SESSION['email']; ?></h1>
        </div>
        <!-- content ends -->

        <!-- Bootstrap JS starts -->
        <!-- Bootstrap JS ends -->

        <!-- project configuration and application configuration -->
    </body>
</html>
<?php 
}
?>