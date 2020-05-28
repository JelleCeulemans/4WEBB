<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Wij zijn een web bureau voor totaal projecten">
    <meta name="author" content="Jelle Ceulemans, Glenn Bogaerts, Brandon Carvalho Dos Santos Mendes">

    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/onepager/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/onepager/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/onepager/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="/onepager/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="/onepager/img/favicon/safari-pinned-tab.svg" color="#3e606f">
    <meta name="msapplication-TileColor" content="#cccccc">
    <meta name="theme-color" content="#ffffff">

    <title>Contactbevestiging</title>



    <!-- Bootstrap core CSS-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom fonts for this template -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js" integrity="sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ" crossorigin="anonymous"></script>

    <!-- Custom styles for this template-->
    <link href="css/agency.min.css" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js" integrity="sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ" crossorigin="anonymous"></script>

</head>
<body id="phpcontainer">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="index.html"><img src="./img/logo.svg" alt="logo"></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                  Menu
                  <i class="fas fa-bars"></i>
                </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="index.html#diensten">Diensten</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="index.html#portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="index.html#team">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="index.html#vestiging">Vestiging</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="index.html#contact">Contact</a>
                    </li>
		    <li class="nav-item">
              		<a class="nav-link js-scroll-trigger" href="../index.html"><i class="fas fa-home"></i></a>
           	   </li>
                </ul>
            </div>
        </div>
    </nav>


    <div id="tekstvak">
        <header>
            <h1>Dankjewel om contact met ons op te nemen!</h1>
            <p>We beantwoorden je vragen zo spoedig mogelijk!</p>
        </header>
        <section>
            <h2>Ingestuurde gegevens:</h2>
            <hr>

            <?php
            echo "<div id=\"afhandeling\">\n";

                echo "<ul>";

                if (isset($_POST["naam"]) && $_POST["naam"] != "") {
                    echo "<li>Naam: " . $_POST["naam"] . "</li>\n";
                }

                if (isset($_POST["email"]) && $_POST["email"] != "") {
                    echo "<li>E-mailadres: " . $_POST["email"] . "</li>\n";
                }

                if (isset($_POST["telefoon"]) && $_POST["telefoon"] != "") {
                    echo "<li>Telefoonnummer: " . $_POST["telefoon"] . "</li>\n";
                }

                if (isset($_POST["bericht"]) && $_POST["bericht"] != "") {
                    echo "<li>Bericht: " . $_POST["bericht"] . "</li>\n";
                }

                echo "</ul>";

            echo "</div>";
   ?>
        </section>
        <footer>
            <p>
                Het 4Webb Team
            </p>
        </footer>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>
</body>

</html>
