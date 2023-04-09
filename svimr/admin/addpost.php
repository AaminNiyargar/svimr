<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../images/logo.jpg" type="image/x-icon">

    <title>Add Faculty Details</title>

    <!-- ONLINE LINKS -->

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8"
        src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"
        integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- LOCAL FILES -->
    <link rel="stylesheet" href="../css/style.css">

    <script>
        $(document).ready(function () {
            $('#faculty-table').DataTable();
        });

        function confirm_delete_faculty() {

            var a = confirm("Do you really want to Delete this detail");
            if (a)
                return true;
            else
                return false;
        }
    </script>

</head>

<body>
    <?php include('./sidebar.php');
    ?>
    <div class='container-fluid add-faculty'>
        <div class='row'>
            <div class='faculty-heading'>
                <h2>Add Post</h2>
            </div>
            <form method="post" class='add-faculty-form' action="./addpost1.php">
                <div>
                    <input type='text' placeholder='Post Name' required name='post-name' />
                  </div>

                <div>
                    <select name="type"  required>
                        <option selected>Select type</option>
                        <option value="Academic">Academic</option>
                        <option value="Non Academic">Non Academic</option>
                    </select>
                </div>

                <div>
                    <select name="stream">
                        <option selected>Select Stream</option>
                        <?php
                        include_once ('db.php');
                        $sql="select * from academic_stream";
                        $query=mysqli_query($conn,$sql);
                        while($row=mysqli_fetch_assoc($query))
                        {?>
                        <option value="<?php echo $row['id'];   ?>"><?php echo $row['academic_stream']; ?></option>
                        <?php }?>
                        
                    </select>
                </div>
               
                <div> <input id='submit-faculty-btn' type='submit' name="add_post" value='Add' /></div>
            </form>
        </div>

        <div class='container-fluid faculty-list'>
            <hr>

            <table id='faculty-table' class="table table-striped table-hover">
                <header style="background-color:lightgray; border-radius:10px">
                    <h2 style="padding:20px; ">Posts</h2>
                </header>
                <thead>
                    <tr>
                        <th>Sno.</th>
                        <th>Post Name</th>
                        <th>Post Type</th>
                        <th>Post Stream</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    include("./db.php");
                    $query = mysqli_query($conn, "select * from post_applied");


                    if ($query) {
                        $count = 0;
                        while ($result = mysqli_fetch_assoc($query)) {
                            ?>
                            <tr>
                                <td>
                                    <?php echo ++$count; ?>
                                </td>
                                <td>
                                    <?php echo $result['post_name']; ?>
                                </td>
                                <td>
                                    <?php echo $result['type']; ?>
                                </td>
                                <td>
                                    <?php 
                                    
                                    $sql2="select academic_stream from academic_stream where id=$result[stream_id]";
                                    $query1=mysqli_query($conn,$sql2);
                                    $res=mysqli_fetch_assoc($query1);
                                    echo $res['academic_stream']; ?>
                                </td>
                                <td>
                                    <a href="./editfaculty.php?faculty_id=<?php echo $result[0]; ?>">
                                        <i class="fa-solid fa-pen-to-square p-1 text-primary"></i>
                                    </a>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href="./deletefaculty.php?faculty_id=<?php echo $result[0]; ?>"
                                        onclick="return confirm_delete_faculty()">
                                        <i class="fa-solid fa-trash-can p-1 text-danger"></i>
                                    </a>
                                </td>

                            </tr>

                        <?php



                        }
                    } else {
                        echo "<tr><td colspan='3'>There is no data to display</td></tr>";
                    }

                    ?>
                </tbody>
            </table>
        </div>


    </div>

</body>

</html>

<?php
include("./footer.php");
?>