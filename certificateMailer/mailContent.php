<?php
    require "header.php";
?>
<style>
</style>
<main role="main" class="container">
    <div class="eight">
        <h1><strong>Mail Content</strong></h1>
    </div>
    <br><br>
    <div class="card">
    <div class="card-header bg-transparent"><strong>Subject: </strong>
    <?php
        include "connectivity.php";
        $sql = "SELECT * FROM content";
        $result = mysqli_query($conn, $sql);
        $i=0;
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
                echo $row['subject'];  
    ?>
    </div>
        <div class="card-body"><strong>Body: </strong>
            <?php
                echo $row['body'];  }
            } 
            ?>
        </div>
        <div class="card-footer bg-transparent"><a href="updateContent.php" class="btn btn-dark" style="float:right">Change Content</a>
        </div>
    </div>

</main>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script>
$("#mailContent").addClass("active");
</script>
<?php
    require "footer.php";
?>