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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    <script>
        $(document).ready(function () {
            $('.header').height($(window).height());
        })
    </script>

<?php
    include('./templates/Footer.php');
?>