<!DOCTYPE html>
<a lang = "it">
<head>
    <meta name = "viewport" content = "width = device-width, initial-scale = 1.0" />
    <title>MaTTicket - Home</title>
    <link rel = "stylesheet" type = "text/css" href = "./css/utili/header.css" />
    <link rel = "stylesheet" type = "text/css" href = "./css/utili/footer.css" />
    <link rel = "stylesheet" type = "text/css" href = "./css/utili/locandine.css" />
    <link rel = "stylesheet" type = "text/css" href = "./css/utili/intestazioni.css" />
    <script src="./javascript/header.js" type="text/javascript"></script> 
    <script src="./javascript/utility.js" type="text/javascript"></script>
    <?php
    $templateParams["header"]="header.php";
    $templateParams["footer"]="footer.php";
    ?>
</head>
<body onclick ="clickCerca(); clickMenuAPanino();">
    <div id="placeholder">
    <header class ="Header" id ="header">
        <?php
        require($templateParams["header"]);
        ?>
    </header>
    </div>
    
    <main>
        <?php
        require($templateParams["contenuto"]);
        ?>
    </main>

    <footer>
        <?php
        require($templateParams["footer"]);
        ?>
    </footer>
</body>

