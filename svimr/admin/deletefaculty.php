<?php  
    session_start();
    if (!isset($_SESSION['admin_login'])) {
        header('location:./index.php?login_warning');
    }
$f_id = $_REQUEST['faculty_id'];

include('./db.php');
$sql = mysqli_query($conn, "delete  from faculties where f_id=$f_id");
if($sql) {
    header("location:./addfaculty.php?f_deleted");
}
else {
    header("location:./addfaculty.php?f_not_deleted");
}
?>