<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<!--    <link href="css/bootstrap.min.css" rel="stylesheet">-->
<!--    <script src="js/bootstrap.min.js" type="text/javascript"></script>-->
<!---->
    <link href="css/jquery-ui.css" rel="stylesheet">
<!--    <script src="js/jquery-1.10.2.js"></script>-->
    <script src="js/jquery-ui.js"></script>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12">
            <img src="images/banner.jpg" style="width: 100%;height: 260px;">
        </div>

    </div>

</div>
<div class="container-fluid">
    <div class="row">

        <div class="col-md-6 col-lg-6 col-sm-12" style="min-height: 500px">
            <div class="card">
                <div class="card-header">
                    <h3>Student Registration Form</h3>
                </div>
                <div class="card-body">
                    <div class="registration-container" style="width: 50%;margin: 0 auto">
                        <form action="" method="post">
                            <div class="form-group">
                                <label>Student Name</label>
                                <input required class="form-control" type="text" id="studentName" name="studentName"
                                       placeholder="Enter student Name">
                            </div>
                            <div class="form-group">
                                <label>Roll</label>
                                <input required class="form-control" name="roll" id="roll" type="text"
                                       placeholder="Enter Roll">
                            </div>
                            <div class="form-group">
                                <label>Mobile</label>
                                <input required class="form-control" name="mobile" id="mobile" type="text"
                                       placeholder="Enter Mobile">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" name="email" id="email" type="email"
                                       placeholder="Enter Email">
                            </div>
                            <div class="form-group">
                                <label>Gender</label>
                                <select name="gender" id="gender" class="form-control">
                                    <option>Select Gender</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Date</label>
                                <input class="form-control datepicker" name="dateOfBirth" id="dateOfBirth" type="text"
                                       placeholder="Enter Date of Birth">
                            </div>
                            <div class="form-group">
                                <label>Picture</label>
                                <input class="form-control" name="picture" id="picture" type="file">
                            </div>
                            <div class="form-group">
                                <label></label>
                                <input type="submit" name="submitButton" class="btn btn-primary">

                            </div>

                            <!--                <table>-->
                            <!--                    <tr>-->
                            <!--                        <td>Student Name</td>-->
                            <!--                        <td>-->
                            <!--                            <input name="studentName" id="studentName" placeholder="Enter the Student Name">-->
                            <!--                        </td>-->
                            <!--                    </tr>-->
                            <!--                    <tr>-->
                            <!--                        <td>Roll</td>-->
                            <!--                        <td> <input name="roll" id="roll" placeholder="Enter the roll"></td>-->
                            <!--                    </tr>-->
                            <!--                    <tr>-->
                            <!--                        <td>Gender</td>-->
                            <!--                        <td>-->
                            <!--                            <select name="gender" id="gender">-->
                            <!--                                <option>Male</option>-->
                            <!--                                <option>Female</option>-->
                            <!--                            </select>-->
                            <!--                        </td>-->
                            <!--                    </tr>-->
                            <!--                    <tr>-->
                            <!--                        <td></td>-->
                            <!--                        <td>-->
                            <!--                            <input name="submitButton" type="submit" value="Save">-->
                            <!--                        </td>-->
                            <!--                    </tr>-->
                            <!--                </table>-->
                            <?php
                            echo '<pre>';
                            //  print_r($_POST);
                            include 'connection.php';/*Database connection*/
                            if (isset($_POST['submitButton'])) {
                                $studentName = $_POST['studentName'];
                                $roll = $_POST['roll'];
                                $gender = $_POST['gender'];




                                $insert_query = "INSERT INTO web(studentName,roll,gender) values('$studentName','$roll','$gender')";

                                $result = mysqli_query($connection, $insert_query);

                                if ($result) {
                                    echo 'Data has been inserted successfully';
                                } else {
                                    echo 'Failed!!Data has not been inserted successfully';
                                }



                                ?>

                                <?php
                            }

                            $select_query = "SELECT * FROM web";
                            $result = mysqli_query($connection, $select_query);
                            $serial = 1;
                            ?>

                        </form>
                    </div>

                </div>

            </div>

        </div>
        <div class="col-md-6 col-lg-6 col-sm-12" style="min-height: 500px;">
            <table class="table-striped table table-bordered " style="border-collapse: collapse ">
                <tr>
                    <!--                                        <td style="width: 10px">#</td>-->
                    <td>Student Name</td>
                    <td>Roll</td>
                    <td>Gender</td>
                    <td>Delete</td>
                    <td>Edit</td>
                    <td>Print</td>
                </tr>
                <?php
                while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <!--                                            <td style="width: 10px">-->
                        <!--                                                --><?php //echo $serial++; ?>
                        <!--                                            </td>-->
                        <td><?php echo $row['studentName'] ?></td>


                        <td><?php echo $row['roll'] ?></td>


                        <td><?php echo $row['gender'] ?></td>
                        <td style="width: 40px!important;" >
                            <a onclick="confirm('Do you want to delete?')" class="btn btn-primary" href="delete.php?id=<?php echo $row['id'] ?>">Delete</a>
                        </td>
                        <td style="width: 40px!important;" >
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal_<?php echo $row['id']?>">
                                Edit
                            </button>
                        </td>
                        <td style="width: 40px!important;" >
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal_<?php echo $row['id']?>">
                                print
                            </button>
                        </td>

                        <!-- Button trigger modal -->


                        <!-- Modal -->
                        <div class="modal fade" id="editModal_<?php echo $row['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="edit.php" method="post" enctype="multipart/form-data">
                                            <?php

                                            include 'connection.php';/*Database connection*/
                                            $id= $row['id'];
                                            $select_query="SELECT * FROM WEB where id='$id'";
                                            $result_edit=mysqli_query($connection,$select_query);
                                            $result_edit_row=mysqli_fetch_row($result_edit);


                                            ?>
                                            <input id="id" type="hidden" name="id" value="<?php echo $result_edit_row[0]?>">
                                            <div class="form-group">
                                                <label>Student Name</label>
                                                <input required class="form-control" type="text"  value="<?php echo $result_edit_row[1]?>" id="studentName" name="studentName"
                                                       placeholder="Enter student Name">
                                            </div>
                                            <div class="form-group">
                                                <label>Roll</label>
                                                <input required class="form-control" value="<?php echo $result_edit_row[2]?>" name="roll" id="roll" type="text"
                                                       placeholder="Enter Roll">
                                            </div>
                                            <div class="form-group">
                                                <label>Mobile</label>
                                                <input required class="form-control"name="mobile" id="mobile" type="text"
                                                       placeholder="Enter Mobile">
                                            </div>
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input class="form-control"  name="email" id="email" type="email"
                                                       placeholder="Enter Email">
                                            </div>
                                            <div class="form-group">
                                                <label>Gender</label>
                                                <select name="gender"  id="gender" class="form-control">
                                                    <option><?php echo $result_edit_row[3]?></option>
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Date</label>
                                                <input class="form-control datepicker" name="dateOfBirth" id="dateOfBirth" type="text"
                                                       placeholder="Enter Date of Birth">
                                            </div>
                                            <div class="form-group">
                                                <label>Picture</label>
                                                <input class="form-control" name="picture" id="picture" type="file">
                                            </div>
                                            <div class="form-group">
                                                <label></label>
                                                <input type="submit" name="submitButton" class="btn btn-primary">

                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </tr>

                    <?php
                }
                ?>
            </table>
        </div>
    </div>
</div>
<div class="row">
    <div class="container-fluid">

    </div>

</div>

<script>
    $(function () {
        $("#dateOfBirth").datepicker({
            appendText: "(yy-mm-dd)",
            dateFormat: "yy-mm-dd",
            altField: "#datepick-2",
            altFormat: "DD, d MM, yy"
        });
    });
</script>
</body>
</html>