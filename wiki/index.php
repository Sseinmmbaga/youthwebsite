<?php
include_once "./include/connection.php";
    ini_set('display_errors',1);
    ini_set('display_startup_errors',1);
    error_reporting(E_ALL);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap Datatables CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">

    <!-- Bootstrap Datatables Js -->
    <script defer src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script defer src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script defer src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script defer src="./assets/js/script.js"></script>


    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/sidebar.css">

    <title>All Data</title>
    <style>       

        .card-custom {
            border-color: #86be3f;
        }

        .card-header-custom {
            background-color: #86be3f;
        }

        .card-header-custom a {
            color: #fff;
        }

        .color-set {
            background-color: #86be3f;
            color: white;
        }

        .color-set-default {
            background-color: #343a40;
            color: white;
        }

        /* added */
        a {

            text-decoration: none;

        }

        a {
            text-decoration: solid;
        }

        .pass {
            position: relative;

        }

        i {

            position: absolute;

        }
    </style>
</head>

<body>
        <div class="container">
            <div class="container">


                <div class="row">

                    <div class="col-md-6 mx-auto">
                        <div class='card card-body  bg-light mt-5'>
                            <h2 class="text-center">Admin Login</h2>
                            <p class="text-center">Please fill in credentials to log in.</p>

                            <form action="" method='POST'>
                                <?php
                                 require_once "index.php";
                             ?>
                                <div class="form-group">
                                    <label for='email'>Username: <sup>*</sup></label>
                                    <input type='text' name="username" class='form-control form-control-lg'>
                                    <span class="invalid-feedback"></span>
                                </div>
                                <div class=" pass mt-3">
                                    <label for='password'>Password: <sup>*</sup></label>
                                    <!-- <span><i class="fa fa-eye" id="eye"></i></span> -->
                                    <input type="password" name="password" class='form-control form-control-lg' autocomplete="current-password">

                                </div>                               
                                <div class="row mt-3 text-center">                                    
                                    <div class='col'>
                                        <input type='submit' name='login' value='Login' class='btn  btn-block color-set'>
                                    </div>

                                </div>                               

                            </form>

                        </div>
                    </div>

                </div>
            </div>

        </div>



</body>
<?php
                session_start();
            if (isset($_POST['login'])) {
                # code...
                $input_username=mysqli_real_escape_string($conn,$_POST['username']);
                $input_password=mysqli_real_escape_string($conn,$_POST['password']);

                 $checking_query="select * from  Admin_tbl where BINARY Admin_Username='".$input_username."' and BINARY Admin_Password='".$input_password."'";

                 $result_query=mysqli_query($conn,$checking_query);
                 if ( mysqli_num_rows($result_query)==1) {
                    # code...
                    header("Location:allData.php");
                    $user=mysqli_fetch_array($result_query);
                    if (is_array($user)) {
                        # code...
                    $_SESSION['ID']=$user['Admin_Id'];
                    $_SESSION['name']=$user['Admin_Username'];                      

                    }
                 }else {
                    # code...
                    $message="Invalid Username or Password";
                        header("Location: ./index.php?message=Invalid Username or Password");
                    }

 
            }

?>

</html>