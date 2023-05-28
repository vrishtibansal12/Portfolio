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
        <h1><strong>Upload CSV Files Having Candidate name</strong></h1>
    </div>
    <br><br><br>
    <p style="text-align:center">
            Upload a CSV file with the Participant's Firstname, Lastname, and E-mail Address listed in the First
            three columns.
        </p>
    <div class="row " style="height:50vh;">
        <div class="card my-auto mx-auto">
            <div class="card-header">
                IMPORT CSV FILE
            </div>
            <div class="card-body">

                <form class="form-horizontal " action="storeData.php" method="post" name="upload_excel"
                    enctype="multipart/form-data">
                    <fieldset>
                        <div class="form-group">
                            <label class="control-label" for="filebutton">Select File</label>
                            <input type="file" name="file" id="file" class="input-large" required>
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="singlebutton">Import data</label>
                            <button type="submit" id="submit" name="Import" class="btn btn-dark button-loading"
                                data-loading-text="Loading...">Import
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
$("#displayUploads").addClass("active");
</script>
<?php
    require "footer.php";
?>