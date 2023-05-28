<?php
    require "header.php";
?>
<style>
</style>
<main role="main" class="container">
    <div class="eight">
        <h1><strong>Attached Files</strong></h1>
    </div>
    <br><br><br>
    <table class='table'>
        <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th>File Name</th>
                <th>X-Coordinate</th>
                <th>Y-Coordinate</th>
            </tr>
        </thead>
        <tbody>
            <?php
        include "connectivity.php";
        $sql = "SELECT * FROM attachments";
        $result = mysqli_query($conn, $sql);
        $i=0;
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
                ?>
            <tr>
                <td><?php echo ++$i ?></td>
                <td><a href="<?php echo $row['path'] ?>" target="_blank"><?php echo $row['name'] ?></a></td>
                <td><?php echo $row['X'] ?></td>
                <td><?php echo $row['Y'] ?></td>
            </tr>
            <?php }
        } ?>
        </tbody>
    </table>
    <?php $conn->close() ?>
    <br>
    <button type="button" class="btn btn-outline-danger" style="float: right; margin: 2px"><a
            href="deleteAttachments.php" style="text-decoration:inherit; color:inherit">Delete all
            Attachments</a></button>
    <button type="button" class="btn btn-outline-dark" style="float: right; margin: 2px"><a href="attachmentsUpload.php"
            style="text-decoration:inherit; color:inherit">Upload Attachments</a></button>
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
$("#attachments").addClass("active");
</script>
<?php
    require "footer.php";
?>