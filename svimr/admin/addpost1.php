<?php   

if (isset($_POST["add_post"])) {

    $postname = $_POST["post-name"];
    $posttype = $_POST["type"];
    $stream = $_POST["stream"];
   

    include("./db.php");

    $sql = mysqli_query($conn, "select * from post_applied where post_name='$postname'");
    $row = mysqli_fetch_array($sql);
    echo "hello";
    if (!$row) {

        $sql1 = mysqli_query($conn, "insert into post_applied(post_name,type,stream_id) values ('$postname','$posttype',$stream)");

        if ($sql1) {
            header("location:./addpost.php?add_post_success");
        } else {
            // header("location:./addpost.php?add_post_fail");
echo mysqli_error();

        }


    } else {
        echo mysqli_error();
        // header("location:./addpost.php?post_exist");
        // $_SESSION['post_exist'] = "post exist";
        
    }

}
?>