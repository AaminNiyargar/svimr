<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="../images/logo.jpg" type="image/x-icon">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js"
        integrity="sha512-rpLlll167T5LJHwp0waJCh3ZRf7pO6IT1+LZOhAyP6phAirwchClbTZV3iqL3BMrVxIYRbzGTpli4rfxsCK6Vw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">


    <link rel="stylesheet" href="../css/style.css">
    <title>Login</title>
</head>

<body>
    <div class='container-fluid'>
        <div class='result login-page'>
            <div class='my-login-form col-md-4  p-5  col-12'>

                <form method="post" class="form-control  text-center">
                    <h1 class="text-primary ">Admin Login </h1>
                    <div class="mt-5"><i class="fa-regular fa-user"></i> &nbsp;&nbsp; <input type='text'
                            placeholder='User Name' name='username' required /></div>
                    <div class="mt-3"> <i class="fa-solid fa-lock"></i>&nbsp;&nbsp;<input type='password'
                            placeholder='Password' name='password' required /></div>
                    <div class="m-3"> <button class='submit-login-btn btn btn-outline-secondary' type='submit'
                            name="authenticate" value='LogIn'><b> Login </b> </button></div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <script>
        function err_login() {
            toastr.error("<b>Invalid Credentials   : ( </b>");
        }
        function login_warning() {
            toastr.warning("<b>Please Login  : ( </b>");
        }
    </script>

</body>

</html>

<?php

if (isset($_GET["login_warning"]))
    echo "<script>login_warning()</script>";
if (isset($_GET["err"]))
    echo "<script>err_login()</script>";


if (isset($_POST['authenticate'])) {
    session_start();
    include("./db.php");
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = mysqli_query($conn, "select * from admin_login where username='$username' and password='$password' ");

    $row = mysqli_fetch_array($sql);
    if ($row) {
        $_SESSION['admin_login'] = $row[1];
        header("location:./dashboard.php?success");

    } else {
        $_SESSION['login_fail'] = "Invalid Credentials !!!";
        header("location:./index.php?err");
    }
}

?>