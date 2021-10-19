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
    <script>
        function formSubmit() {
            //alert();
            var fromData = {
                studentName: $('#studentName').val(),
                roll: $('#roll').val(),
                email: $('#email').val(),
                gender: $('#gender').val(),
            };
            $.ajax({
                type: "POST",
                url: "datasave.php",
                data: fromData,
                dataType: "json"
            });
        }

        function viewData() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (xhttp.readyState == 4 && xhttp.status == 200) {
                   // alert(xhttp.responseText);
                    $('#dataTable').html(xhttp.responseText);
                    //document.getElementById('dataTable').innerHTML=xhttp.responseText;
                }
            }
            xhttp.open("POST","view.php",true);
            xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
            xhttp.send();
        }
    </script>
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
                                <input onclick="formSubmit(),viewData()" type="button" value="Submit"
                                       name="submitButton" class="btn btn-primary">

                            </div>


                        </form>
                    </div>

                </div>

            </div>

        </div>
        <div class="col-md-6 col-lg-6 col-sm-12" style="min-height: 500px;">
            <div id="dataTable">

            </div>

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