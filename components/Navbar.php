<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @font-face {
            font-family: 'Kanit';
            src: url('../font/Kanit-Regular.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        body {
            font-family: 'Kanit', sans-serif;
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="/assets/index.350e2433.css" /> -->
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
</head>

<?php 


if (isset($_SESSION['row'])) {
    switch ($_SESSION['row']['Role']) {
        case 'User' : return include('UserNav.php') ;
        case 'Admin' : return include('AdminNav.php') ;
        case 'Shop' : return include("ResNav.php") ;
    }
    
}