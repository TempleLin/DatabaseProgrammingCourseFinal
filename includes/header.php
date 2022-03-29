<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!--    $title needs to be set before requiring this file.-->
    <title>Attendance - <?php echo $title ?></title>
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/animations.css">


</head>
<body>
<!--Bootstrap container class.-->
<div class="container">
<!--    "fixed-top" class can make navbar full width.-->
    <nav class="navbar navbar-dark bg-dark fixed-top">
        <form class="form-inline">
            <button class="btn btn-outline-success text-light round-btn" type="button" onclick="location.href = 'index.php';">Home</button>
            <button class="btn btn-sm btn-outline-secondary text-light round-btn" type="button" onclick="location.href = 'viewAttendees.php';">Musics</button>
            <button class="btn btn-sm btn-outline-secondary text-light round-btn" type="button" onclick="location.href = 'viewAttendees.php';">Sounds</button>
        </form>
        <form class="d-flex">
            <button class="btn btn-outline-success text-light round-btn" type="button" onclick="location.href = 'upload.php';">Upload</button>
            <button class="btn btn-outline-success text-light form-inline round-btn" type="button">Login/Register</button>
        </form>
    </nav>