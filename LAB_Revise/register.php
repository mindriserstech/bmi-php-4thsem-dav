<!-- PHP Code starts -->
<?php
    include 'pages/func.php';

    $result = array();
    $data = register();
    array_push($result, $data);
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
                <div class="col-4">
                    <div class="card mt-5">
                        <div class="card-header">
                            <h1>BMI | Register</h1>
                            <form action="register.php" method="POST">
                        </div>
                        <div class="card-body">
                            <div class="form-group mb-3">
                                <label for="first_name">First Name:</label>
                                <input type="text" class="form-control" name="first_name" placeholder="Enter First Name">
                            </div>
                            <div class="form-group mb-3">
                                <label for="last_name">Last Name:</label>
                                <input type="text" class="form-control" name="last_name" placeholder="Enter Last Name">
                            </div>
                            <div class="form-group mb-3">
                                <label for="contact">Contact:</label>
                                <input type="text" class="form-control" name="contact" placeholder="Enter Contact Number">
                            </div>
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
                                <input type="submit" value="REGISTER" class="btn btn-primary btn-block">
                            </div>
                            Already Regisreted? <a href="login.php">Click here</a>
                        </form>
                        </div>
                    </div>
                </div>
                <div class="col-8">
                    <table class="table table-border table-hover  mt-5">
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Contact</th>
                                <th>Email</th>
                                <th>Password</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                if(isset($data)){
                                    if($data != NULL){
                                        foreach($result as $value) {
                                    ?>
                                        <tr>
                                            <td>1</td>
                                            <td><?php echo $value[0]['first_name']; ?></td>
                                            <td><?php echo $value[0]['last_name']; ?></td>
                                            <td><?php echo $value[0]['contact']; ?></td>
                                            <td><?php echo $value[0]['email']; ?></td>
                                            <td><?php echo $value[0]['password']; ?></td>
                                        </tr> 
                                   <?php }}
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- content ends -->
        <!-- Bootstrap JS starts -->
        <!-- Bootstrap JS ends -->
        <!-- project configuration and application configuration -->
    </body>
</html>