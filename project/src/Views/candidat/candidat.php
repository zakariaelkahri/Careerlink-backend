<?php 
 session_start();
 
 if(!isset($_SESSION["name"]) || $_SESSION["name"] != "candidat")
 {

     header("location: ../auth/login.php");
     
     exit();
 }
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace Client</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <header>
        <div class="container">
            <div class="navigation">
                <ul>
                    <li>
                        <a href="#">

                            <h2 class="title">careerlink candidat</h2>
                        </a>
                    </li>

                    <li>
                        <a href="admin.php">
                            <span class="icon">
                                <ion-icon name="home-outline"></ion-icon>
                            </span>
                            <span class="title">Accueil</span>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <span class="icon">
                                <ion-icon name="people-outline"></ion-icon>
                            </span>
                            <span class="title">Les Clients</span>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <span class="icon">
                                <ion-icon name="cart-outline"></ion-icon>
                            </span>
                            <span class="title">commande</span>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <span class="icon">
                                <ion-icon name="cube-outline"></ion-icon>
                            </span>
                            <span class="title">Gestion des produits</span>
                        </a>
                    </li>



                    <li>
                        <a href="#">
                            <span class="icon">
                                <ion-icon name="log-out-outline"></ion-icon>
                            </span>
                            <span class="title">Sign Out</span>
                        </a>
                    </li>
                </ul>
            </div>

    </header>

    <div class="main">
        <div class="topbar">
            <div class="toggle">
                <ion-icon name="menu-outline"></ion-icon>
            </div>

            <div class="search">
                <label>
                    <input type="text" placeholder="Search here">
                    <ion-icon name="search-outline"></ion-icon>
                </label>
            </div>


        </div>
    </div>

    <footer>
        <p>&copy; 2025 MonSite. Tous droits réservés.</p>
    </footer>
    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js?v=1"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>