<?php
include 'connection.php';/*Database connection*/
$select_query = "SELECT * FROM web order by id DESC";
$result = mysqli_query($connection, $select_query);
$serial = 1;

?>
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
            <td><?php echo $row['studentName'] ?></td>


            <td><?php echo $row['roll'] ?></td>


            <td><?php echo $row['gender'] ?></td>
            <td style="width: 40px!important;">
                <a onclick="confirm('Do you want to delete?')" class="btn btn-primary"
                   href="delete.php?id=<?php echo $row['id'] ?>">Delete</a>
            </td>
            <td style="width: 40px!important;">
                <button type="button" class="btn btn-primary" data-toggle="modal"
                        data-target="#editModal_<?php echo $row['id'] ?>">
                    Edit
                </button>
            </td>
            <td style="width: 40px!important;">
                <button type="button" class="btn btn-primary" data-toggle="modal"
                        data-target="#editModal_<?php echo $row['id'] ?>">
                    print
                </button>
            </td>

        </tr>

        <?php
    }
    ?>
</table>