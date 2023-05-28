<?php
    require "header.php";
?>
<style>
.container {
    padding-top: 70px;
    padding-bottom: 11px;
}
</style>
<main role="main" class="container">
    <div class="eight">
        <h1><strong>Candidates</strong></h1>
    </div>
    <br><br><br>
    <table class='table'>
        <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php
        include "connectivity.php";
        $sql = "SELECT * FROM details";
        $result = mysqli_query($conn, $sql);
        $i=0;
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
                ?>
            <tr>
                <td><?php echo ++$i ?></td>
                <td><?php echo $row['first_name'] ?></td>
                <td><?php echo $row['last_name'] ?></td>
                <td><?php echo $row['email'] ?></td>
            </tr>
            <?php }
        } ?>
        </tbody>
    </table>
    <?php $conn->close() ?>
    <br>
    <button type="button" class="btn btn-outline-danger" style="float: right; margin: 2px"><a
            href="deleteRecords.php" style="text-decoration:inherit; color:inherit">Delete all
            Records</a></button>
    <button type="button" class="btn btn-outline-dark" style="float: right; margin: 2px"><a href="uploadCSV.php"
            style="text-decoration:inherit; color:inherit">Upload CSV</a></button>

</main>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.21/datatables.min.css" />
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.21/datatables.min.js"></script>
<script>
$(".table").DataTable();
</script>
<script>
$("#displayUploads").addClass("active");
</script>
<?php
    require "footer.php";
?>