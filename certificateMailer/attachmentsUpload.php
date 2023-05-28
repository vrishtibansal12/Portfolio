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
        <h1><strong>Attachments Upload</strong></h1>
    </div>
    <div class="row " style="height:75vh">
        <div class="card my-auto mx-auto">
            <div class="card-header">
                KINDLY UPLOAD ATTACHMENT
            </div>
            <div class="card-body">

                <form class="form-horizontal " action="attachmentsUpload_back.php" method="post"
                    enctype="multipart/form-data">
                    <fieldset>
                        <div class="form-group">
                            <label class="control-label" for="filebutton">Select Certificate without name written on
                                it</label>
                            <br><input type="file" name="certificate" id="file" class="input-large" required>
                        </div>

                        <p>
                            Please enter X-coordinate and Y-coordinate of Text for writing the name on certificate in
                            pixels(px)
                        </p>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="control-label" for="filebutton">X:</label>
                                <input type="number" class="form-control" value="500" name="xcoordicate">
                            </div>
                            <div class="col-md-6">
                                <label class="control-label" for="filebutton">Y:</label>
                                <input type="number" class="form-control" value="510" name="ycoordicate">
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="control-label" for="singlebutton">Import data</label>
                            <button type="submit" id="submit" name="Import" class="btn btn-primary button-loading"
                                data-loading-text="Loading...">Upload
                            </button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</main>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script>
$("#attachments").addClass("active");
</script>
<?php
    require "footer.php";
?>