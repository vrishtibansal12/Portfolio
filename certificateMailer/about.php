<?php
    require "header.php";
?>
<style>
</style>
<div class="container">
    <div class="eight">
        <h1><strong>About</strong></h1>
    </div>

    <p>
    <h2>ABOUT THE CERTIFICATE MAILER </h2>
    Web applications like Certificate Mailer are most suitable for businesses hosting online webinars. It is a platform
    where, by following few  instructions, one may create certificates for each participant and have them addressed to
    their individual emails.
    <br>
    <br>
    <h2>WORKING OF THE APP </h2>
    The following instructions will help you utilise this app:
    <ul>
        <li>In the <strong><a href="displayUploads.php" style="color:black">Candidates</a></strong> area, you may view
            the Candidates and their information. Two buttons are provided below.
            More candidate information can be <strong><a href="uploadCSV.php" style="color:black">uploaded in a CSV
                    file</a></strong> with the first name, last name, and email address
            of each candidate listed in the first three columns. A second button allows you to <strong><a
                    href="deleteRecords.php" style="color:black">delete all previously
                    uploaded records</a></strong>.
        </li>
        <li>You may check out the mailing content on the <strong><a href="mailContent.php" style="color:black">Mail
                    Content</a></strong> tab and use the <strong><a href="updateContent.php" style="color:black">update
                    content button</a></strong> on same page to change the subject and body of the mail.</li>
        <li>On the <strong><a href="displayAttachments.php" style="color:black">attachments page</a></strong>, you may
            browse already-posted attachments and <strong><a href="attachmentsUpload.php" style="color:black">add new
                    ones</a></strong> or <strong><a href="deleteAttachments.php" style="color:black">remove
                    older</a></strong> ones. Fill in the X and Y coordinates for the text to be written in pixels when
            uploading attachments.</li>
        <li>The names of each candidate are listed on the certificate and saved in the database when you select the
            <strong><a href="generateCertificate.php" style="color:black">generate certificate</a></strong> tab. The
            button at the bottom displays a sample certificate for verifying coordinates of written text.</li>
        <li><strong><a href="sendMail.php" style="color:black">Send Email</a></strong> delivers the email to each candidate's inbox.
        </li>
    </ul>
    Voila! It's finished. Please feel free to drop your feedback on <strong><a href="contact.php"
            style="color:black">Contact Form</a></strong>.
    </ul>
    <br><br>
    <h2>ABOUT ME</h2>

    I'm Vrishti Bansal, a Software Developer and Graphic Designer based in Delhi, India
    <br>
    You can find more of my work on my <a href="http://www.beingvrishti.com/" style="color:black">personal website</a>.
    </p>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script>
$("#about").addClass("active");
</script>
<?php
    require "footer.php";
?>