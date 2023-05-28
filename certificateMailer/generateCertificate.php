<?php
    require "header.php";
?>
<style>

</style>
<main role="main" class="container">
    <div class="eight">
        <h1><strong>List of Generated Certificates</strong></h1>
    </div>

    <?php
    ini_set('max_execution_time', 700);
    include "connectivity.php";
    $sql = "SELECT * FROM details";
    $result = mysqli_query($conn, $sql);

    $i = 0;
    $f=1;
    $fileprint;

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            
            $sql2="SELECT * FROM attachments";
            $result2 = mysqli_query($conn, $sql2);
            $j=0;

            if (mysqli_num_rows($result2) > 0) {
                while ($row2 = mysqli_fetch_array($result2)) {

                    // Create Image From Existing File
                    $jpg_image = imagecreatefromjpeg($row2['path']);

                    // Allocate A Color For The Text
                    $black = imagecolorallocate($jpg_image, 0, 0, 0);

                    // Set Path to Font File
                    $font_path = 'merriweather.ttf';
                    
                    // Set Text to Be Printed On Image
                    $text = $row['first_name'] . " " . $row['last_name'];

                    // Print Text On Image
                    imagettftext($jpg_image, 25, 0, $row2['X'], $row2['Y'], $black, $font_path, $text);

                    $name = "assets/img/" . $row['first_name'] . $row['last_name'] . ++$j.".jpeg";

                    // Send Image to Browser
                    imagejpeg($jpg_image, $name);
                    // $sqli = "UPDATE details SET certificate='" . $name . "' WHERE email='" . $row['email'] . "'";
                    // mysqli_query($conn, $sqli);

                    echo ++$i . "/" . mysqli_num_rows($result) . " : " . $name . " generated<br>";
                    $fileprint=$row['first_name'] . $row['last_name'];
                }
            }
            else{
                echo "No Attachments Found";
                $f=0;
                break;
            }

        }
    }else{
        echo "No Candidate Record Found";
        $f=0;
    } 
    
    if($f){
        $sql2="SELECT * FROM attachments";
        $result2 = mysqli_query($conn, $sql2);
        $j=1;

        if (mysqli_num_rows($result2) > 0) {
            while ($row2 = mysqli_fetch_array($result2)) {
                // echo $fileprint;
                echo '<button type="button" class="btn btn-outline-dark" style="float: right; margin: 2px"><a href="assets/img/'. $fileprint . $j.'.jpeg" style="text-decoration:inherit; color:inherit">'. $fileprint . $j .'</a></button>';                  
                ++$j;
            }
        }
    }
    ?>
</main>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script>
$("#generateCertificate").addClass("active");
</script>
<?php
    require "footer.php";
?>