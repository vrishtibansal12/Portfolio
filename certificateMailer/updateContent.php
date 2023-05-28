<?php
    require "header.php";
?>
<style>
</style>
<main role="main" class="container">
    <div class="eight">
        <h1><strong>Update Mail Content</strong></h1>
    </div>

    <br><br>
    <form action="updateContent_back.php" method="post">
        <label for="subject" class="form-label"><strong>Mail Content Subject</strong></label>
        <input type="text" class="form-control" id="subject" name="subject" value="<?php 
            include "connectivity.php";
            $sql = "SELECT * FROM content";
            $result = mysqli_query($conn, $sql);
            $i=0;
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    echo $row['subject'];?>" required>

        <label for="body" class="form-label"><strong>Mail Content Body</strong></label>
        <textarea class="form-control" id="body" name="body" style="height: 300px" name="updateContent" required><?php
                echo $row['body'];  
                }
            } 
            ?></textarea>
        <p>
            <strong>Note:</strong> The maximum length of an email body is 10,000 characters.
        </p>
        <br><br><br>
        <button type="submit" id="submit" class="btn btn-dark button-loading" data-loading-text="Loading..."
            style="float:right">Update Content</button>
    </form>
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