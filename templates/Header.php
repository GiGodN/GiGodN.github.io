<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $page_title; ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <?php 
        if ($active == "index") {
            print '<link rel="stylesheet" href="./css/include.css">';
        }
        else {
            print '<link rel="stylesheet" href="../css/include.css">';
        }
    ?>
</head>

<body style="background-color: #555; color: #eee;">
    <nav class="navbar navbar-expand-lg navbar-light bg-dark" style="padding-left: 5%;">
        <a class="navbar-brand" href="#">
            <?php 
                if ($active == "index") {
                    print '<img src="./images/logo.png" alt="Vise Logo" width="40" height="40">';
                }
                else {
                    print '<img src="../images/logo.png" alt="Vise Logo" width="40" height="40">';
                }
            ?>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item <?php if($active == 'index') {print 'active';}?>">
                    <a class="nav-link text-light " href="/TestWeb/index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item <?php if($active == 'Project') {print 'active';}?>">
                    <a class="nav-link text-light" href="/TestWeb/php/VisualProject.php">Visual literary Anaylisis</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Relivate Links
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" target="_blank"href="https://www.youtube.com/channel/UCRyI8a523uWw1lXEjI7KRoQ">Youtube</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Twitter (WIP)</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">