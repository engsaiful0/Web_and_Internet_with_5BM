<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="" method="post">
    <table>
        <tr>
            <td>Student Name</td>
            <td>
                <input name="studentName" id="studentName" placeholder="Enter the Student Name">
            </td>
        </tr>
        <tr>
            <td>Roll</td>
            <td> <input name="roll" id="roll" placeholder="Enter the roll"></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td>
                <select name="gender" id="gender">
                    <option>Male</option>
                    <option>Female</option>
                </select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input name="submitButton" type="submit" value="Save">
            </td>
        </tr>
    </table>
    <?php
    echo '<pre>';
  //  print_r($_POST);
    $alibaba=$_POST['studentName'];
    $roll=$_POST['roll'];
    $gender=$_POST['gender'];
    ?>
    <table>
        <tr>
            <td>Student Name</td>
            <td><?php echo $alibaba?></td>
        </tr>
        <tr>
            <td>Roll</td>
            <td><?php echo $roll?></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td><?php echo $gender?></td>
        </tr>
    </table>
</form>

</body>
</html>