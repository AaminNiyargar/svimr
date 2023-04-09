<?php   

if (isset($_POST["add_stream"])) {

    $stream_name = $_POST["stream_name"];
   

    include("./db.php");

    $sql = mysqli_query($conn, "select * from academic_stream where academic_stream='$stream_name'");
    $row = mysqli_fetch_array($sql);

    if (!$row) {

        $sql1 = mysqli_query($conn, "insert into academic_stream(academic_stream) values ('$stream_name')");

        if ($sql1) {
            header("location:./addstream.php?add_stream_success");
        } else {
            header("location:./addstream.php?add_stream_fail");
        }


    } else {
        header("location:./addstream.php?stream_exist");
        $_SESSION['stream_exist'] = "stream exist";
    }

}
?>