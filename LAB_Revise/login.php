<!-- PHP Code starts -->
<?php
    include 'pages/func.php';
    
    if(login()){
        header("Location: index.php");
    }else{
        echo "LOGIN FAIL";
    }
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
        <!-- Content starts -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-4 offset-4">
                    <div class="card mt-5">
                        <div class="card-header">
                            <h1>BMI | Login</h1>
                            <form action="login.php" method="POST">
                        </div>
                        <div class="card-body">
                            <div class="form-group mb-3">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" name="email" placeholder="Enter Email">
                            </div>
                            <div class="form-group mb-3">
                                <label for="password">Password:</label>
                                <input type="password" class="form-control" name="password" placeholder="Enter Password">
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex">
                                <input type="submit" value="LOGIN" class="btn btn-primary btn-block">
                            </div>
                            Not Registered yet? <a href="register.php">Click here</a>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content ends -->

        <!-- Bootstrap JS starts -->
        <!-- Bootstrap JS ends -->
        <!-- project configuration and application configuration -->
    </body>
</html>