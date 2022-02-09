<?php
    // starting session here
    session_start();

    global $data_list;
 
    function login(){
        if($_SERVER['REQUEST_METHOD'] === "POST"){
            if(isset($_POST)){
                if($_POST['email'] == "dav@edu.com.np" && $_POST['password'] == "dav123"){
                    // storing data in session
                    $_SESSION['email'] = $_POST['email'];
                    return true;
                }else{
                    return false;
                }
            }
        }
    }   
    
    function register(){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            // array_push
            $data_list = array();
            if(isset($_POST)){
                // adding value to associative array
                array_push($data_list, [
                    'first_name' => $_POST['first_name'],
                    'last_name' => $_POST['last_name'],
                    'contact' => $_POST['contact'],
                    'email' => $_POST['email'],
                    'password' => $_POST['password'],
                ]);
                return $data_list;
            }
            return [];
        }else{
            return [];
        }
    }
    // 3. no return type and parameter
    function show_bmi($height, $weight, $age){
        // height must be in feet and inches and weight in pounds
        // if height is in centimeters then we can take weight in kilograms
        echo "Height: ".$height. " Weight: ". $weight. " and Age: ".$age;
    }

    // 4. no return type and no parameter
    function show_profile(){
        $first_name = "Prashanna";
        $last_name = "Chudal";
        $designation = "DAV Head of Department";
        $contact = "9876543210";
        $email = "hod@dav.com.np";

        // here dot . is used to concat two or more string
        echo "Name: ". $first_name." ". $last_name. " Designation: ". 
        $designation. " Contact: ". $contact. " Email: ".$email;

    }
    // note:- if the function is return type then we need to echo it to see its output otherwise
    //  we can simply call/invoke the function and it will show its output because the output is already
    //  printed in the function
?>