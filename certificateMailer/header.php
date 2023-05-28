<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Certificate Mailer</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous"> -->
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/starter-template/">
    <link rel="icon" type="image/x-icon" href="favicon.png">
    <!-- Bootstrap core CSS -->
    <link href="assets/dist/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
    <style>
    body {
        height: 100vh;
        margin: 0;
    }

    body {
        display: flex;
        flex-direction: column;
    }

    .container {
        padding-top: 70px;
        padding-bottom: 11px;
    }

    .eight h1 {
        text-align: center;

        text-transform: uppercase;
        font-size: 40px;
        letter-spacing: 1px;

        display: grid;
        grid-template-columns: 1fr auto 1fr;
        grid-template-rows: 30px 0;
        grid-gap: 22px;
    }

    .eight h1:after,
    .eight h1:before {
        content: " ";
        display: block;
        border-bottom: 2px solid #ccc;
        background-color: #fff;
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="index.php">Certificate Mailer</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a id="about" class="nav-link" href="about.php">About</a>
                </li>
                <!-- <li class="nav-item">
                    <a id="uploadCSV" class="nav-link" href="uploadCSV.php">Update CSV</a>
                </li> -->
                <li class="nav-item">
                    <a id="displayUploads" class="nav-link" href="displayUploads.php">Candidates</a>
                </li>
                <li class="nav-item">
                    <a id="mailContent" class="nav-link" href="mailContent.php">Mail Content</a>
                </li>
                <li class="nav-item">
                    <a id="attachments" class="nav-link" href="displayAttachments.php">Attachments</a>
                </li>
                <li class="nav-item">
                    <a id="generateCertificate" class="nav-link" href="generateCertificate.php">Generate certificate</a>
                </li>
                <li class="nav-item">
                    <a id="sendMail" class="nav-link" href="sendMail.php">Send Email</a>
                </li>
                <!-- <li class="nav-item">
                    <a id="deleteRecords" class="nav-link" href="deleteRecords.php">Delete All Records</a>
                </li> -->
                <li class="nav-item">
                    <a id="contact" class="nav-link" href="contact.php">Contact</a>
                </li>
            </ul>
        </div>
    </nav>