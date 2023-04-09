<?php
session_start();
if (!isset($_SESSION['admin_login'])) {
    header('location:./index.php?login_warning');
}
?>
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

    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="  flex-shrink-0 p-3 bg-white " id="sidebar">
        <div class="d-flex align-items-center pb-3 mb-3  text-decoration-none border-bottom">
            <img src='../img/logo.jpg' width="30" height="24" />
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <span class="fs-5 fw-semibold text-primary">SVIMI</span>
        </div>
        <ul class="list-unstyled ps-0">
            <li class="mb-1">
                <a class="btn btn-toggle align-items-center rounded collapsed" href="./dashboard.php">
                    <b>Home</b>
                </a>
            </li>
            <li class="mb-1">
                <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
                    data-bs-target="#dashboard-collapse" aria-expanded="false">
                    <b>Dashboard</b>
                </button>
                <div class="collapse" id="dashboard-collapse" style="">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="./addpost.php" class="sidebar-link  rounded">Add Post</a></li>
                        <li><a href="./addstream.php" class="sidebar-link  rounded">Add Academic Stream</a></li>
                        
                    </ul>
                </div>
            </li>
            <li class="mb-1">
                <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
                    data-bs-target="#orders-collapse" aria-expanded="false">
                    <b>Reports</b>
                </button>
                <div class="collapse" id="orders-collapse" style="">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="#" class="sidebar-link  rounded">New</a></li>
                        <li><a href="#" class="sidebar-link  rounded">Processed</a></li>
                        <li><a href="#" class="sidebar-link  rounded">Shipped</a></li>
                        <li><a href="#" class="sidebar-link  rounded">Returned</a></li>
                    </ul>
                </div>
            </li>
            <li class="border-top my-3"></li>
            <li class="mb-1">
                <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
                    data-bs-target="#account-collapse" aria-expanded="false">
                    <b>Account</b>
                </button>
                <div class="collapse" id="account-collapse">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="#" class="sidebar-link  rounded">Profile</a></li>
                        <li><a href="./logout.php" class="sidebar-link  rounded">Sign out</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</body>

</html>