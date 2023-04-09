<?php   

if (isset($_POST["add_faculty"])) {

    $facultyname = $_POST["faculty-name"];
    $facultyemail = $_POST["email"];
    $gender = $_POST["gender"];
    $designation = $_POST["designation"];
    $department = $_POST["department"];
    $d_o_j = $_POST["date-of-joining"];


    include("./db.php");

    $sql = mysqli_query($conn, "select * from faculties where email='$facultyemail'");
    $row = mysqli_fetch_array($sql);

    if (!$row) {

        $sql1 = mysqli_query($conn, "insert into faculties(faculty_name,email,gender,designation,date_of_joining,department) values ('$facultyname','$facultyemail','$gender','$designation','$d_o_j','$department')");

        if ($sql1) {
            header("location:./addfaculty.php?add_faculty_success");
        } else {
            header("location:./addfaculty.php?add_faculty_fail");
        }


    } else {
        header("location:./addfaculty.php?faculty_exist");
        $_SESSION['faculty_exist'] = "faculty exist";
    }

}
?>