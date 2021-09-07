<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js" type="text/javascript"></script>

    <link href="css/jquery-ui.css" rel="stylesheet">
    <script src="js/jquery-1.10.2.js"></script>
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
        <div class="col-md-2 col-lg-2 col-sm-12 bg-success" style="min-height: 500px">

        </div>
        <div class="col-md-8 col-lg-8 col-sm-12" style="min-height: 500px">

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
                                <input required class="form-control" name="roll" id="roll" type="text" placeholder="Enter Roll">
                            </div>
                            <div class="form-group">
                                <label>Mobile</label>
                                <input required class="form-control" name="mobile" id="mobile" type="text" placeholder="Enter Mobile">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" name="email" id="email" type="email" placeholder="Enter Email">
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
                                <input class="form-control datepicker" name="dateOfBirth" id="dateOfBirth"  type="text" placeholder="Enter Date of Birth">
                            </div>
                            <div class="form-group">
                                <label>Picture</label>
                                <input class="form-control" name="picture" id="picture"  type="file" >
                            </div>
                            <div class="form-group">
                                <label></label>
                                <input type="submit" class="btn btn-primary">

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
                            $alibaba = $_POST['studentName'];
                            $roll = $_POST['roll'];
                            $gender = $_POST['gender'];
                            ?>
                            <table class="table table-bordered table-striped table-hover tab">
                                <tr>
                                    <td>Student Name</td>
                                    <td><?php echo $alibaba ?></td>
                                </tr>
                                <tr>
                                    <td>Roll</td>
                                    <td><?php echo $roll ?></td>
                                </tr>
                                <tr>
                                    <td>Gender</td>
                                    <td><?php echo $gender ?></td>
                                </tr>
                            </table>
                        </form>
                    </div>

                </div>

            </div>

        </div>
        <div class="col-md-2 col-lg-2 col-sm-12 bg-danger" style="min-height: 500px;">

        </div>
    </div>
</div>

<script>
    $(function() {
        $( "#dateOfBirth" ).datepicker({
            appendText:"(yy-mm-dd)",
            dateFormat:"yy-mm-dd",
            altField: "#datepick-2",
            altFormat: "DD, d MM, yy"
        });
    });
</script>
</body>
</html>