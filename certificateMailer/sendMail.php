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
        <h1><strong>Sent Mails</strong></h1>
    </div>

    <?php
    ini_set('max_execution_time', 1000);
    include "connectivity.php";

    $sql3 = "SELECT * FROM content";
    $result3 = mysqli_query($conn, $sql3);
    if (mysqli_num_rows($result3) > 0) {
        while ($row3 = mysqli_fetch_array($result3)) {
            $subject = $row3["subject"];
            $body = $row3["body"];
        }
    }

    $i = 0;
    $sql = "SELECT * FROM details";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $email = $row["email"];
            $name = $row["first_name"] . " " . $row["last_name"];
            // $filename1 = $row["firstname"] . $row["lastname"] . '1.jpeg';
            // $filename2 = $row["firstname"] . $row["lastname"] . '2.jpeg';

            // $filepath = dirname($row["certificate"]);
            
            $sql2="SELECT * FROM attachments";
            $result2 = mysqli_query($conn, $sql2);
            $j=0;
            $len=mysqli_num_rows($result2);
            $f=1;
            $attach=[];
            if (mysqli_num_rows($result2) > 0) {
                while ($row2 = mysqli_fetch_array($result2)) {
                    $attach[] = [
                        "content" => base64_encode(file_get_contents("assets/img/" . $row['first_name'] . $row['last_name'] . ++$j.".jpeg")),
                        "type" => 'image/jpeg',
                        "filename" => "Certificate.jpeg",
                        "disposition" => 'attachment'
                    ];
                    // $filenames[]="assets/img/" . $row['first_name'] . $row['last_name'] . ++$j.".jpeg";
                }
                // print_r($filenames);
            }
            else{
                echo "No Attachments Found";
                $f=0;
            }

            if($f){
                $headers = array(
                    'Authorization: Bearer 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',
                    'Content-Type: application/json'
                );
                $k=0;
                $data = array(
                    "personalizations" => array(
                        array(
                            "to" => array(
                                array(
                                    "email" => $email,
                                    "name" => $name
                                )
                            )
                        )
                    ),
                    "from" => array(
                        "email" => "vrishti2012@gmail.com",
                        "name" => "Certificate Mailer"
                    ),
                    "subject" => $subject,
                    "content" => array(
                        array(
                            "type" => "text/html",
                            "value" => $body
                        )
                    ),
                    "attachments" => $attach
                        // array(
                        //     "content" => base64_encode(file_get_contents($filenames[$k])),
                        //     "type" => 'image/jpeg',
                        //     "filename" => "Certificate.jpeg",
                        //     "disposition" => 'attachment'
                        // ),
                        
                    
                );
            }else{
                echo "<strong> Sending Mail With No attachments</strong><br>";
                $headers = array(
                    'Authorization: Bearer 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',
                    'Content-Type: application/json'
                );
                $k=0;
                $data = array(
                    "personalizations" => array(
                        array(
                            "to" => array(
                                array(
                                    "email" => $email,
                                    "name" => $name
                                )
                            )
                        )
                    ),
                    "from" => array(
                        "email" => "vrishti2012@gmail.com",
                        "name" => "Certificate Mailer"
                    ),
                    "subject" => $subject,
                    "content" => array(
                        array(
                            "type" => "text/html",
                            "value" => $body
                        )
                    )
                );
            }

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, "https://api.sendgrid.com/v3/mail/send");
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $response = curl_exec($ch);
            curl_close($ch);

            echo $response;
            echo ++$i . "/" . mysqli_num_rows($result) . ": sent " . $row["email"] . "<br>";

        }
    }
    else{
        echo "No Candidate Record Found";
    }
    ?>
</main>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script>
$("#sendMail").addClass("active");
</script>
<?php
    require "footer.php";
?>