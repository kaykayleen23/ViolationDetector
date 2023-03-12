<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Violation Detector</title>
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <link href="./style.css" rel="stylesheet" type="text/css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,300;0,400;0,600;1,300;1,400&family=Lora:wght@400;500&family=Montserrat:ital,wght@0,200;0,400;0,500;1,400&family=Rubik:wght@300;400;500&display=swap"
        rel="stylesheet">
    <style>
        .center {
            padding: 2rem 0;
            text-align: center;
            margin: 0;
        }
    </style>
</head>

<body class="bg-whitee">
    <section class="top-nav">
        <div>
            <h2 class="h3-bold">Violation Detector</h2>
        </div>
        <input class="mt-1" id="menu-toggle" type="checkbox" />
        <label class='menu-button-container mt-1' for="menu-toggle">
        <div class='menu-button'></div>
      </label>
        <ul class="menu z-index">   
            <a class="./UserPage.php">Dashboard</a>
            <a href="./overspeeding.php">Overspeeding</a>
            <a href="./illegallane.php">Lane Change</a>
            <a href="./redlight.php">Red Light</a>
            <a href="./report.php">Report</a>
            <button id="out" onclick="offline()" ><a href="./out.php">Log Out</a></button>
        </ul>
      </section>
    <div class="wrapper">

