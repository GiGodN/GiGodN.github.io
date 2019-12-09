<?php
    $page_title = 'Welcome';
    $active = "index";
    include('./templates/Header.php');
?>

<link rel="stylesheet" href="./css/index.css">
<div class="page-header" style="width: 100%">
    <header class="page-header header container-fluid">
        <div class="overlay"></div>
        <div class="description">
        <h1>Welcome to Team Vise!</h1>
            <p>We are a small gaming youtube channel, (this is a work in progress website)</p>
                <a href="https://www.youtube.com/channel/UCRyI8a523uWw1lXEjI7KRoQ" target="_blank"><button class="btn btn-outline-secondary btn-lg">Visit Our Channel</button></a>
        </div>
    </header>

<?php
    include('./templates/Footer.php');
?>