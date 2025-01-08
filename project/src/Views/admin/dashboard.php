<?php
 session_start();
 
    if(!isset($_SESSION["name"]) || $_SESSION["name"] != "admin")
    {

        header("location: ../auth/login.php");
        exit();
    }


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CreerLink</title>
    <link rel="stylesheet" href="../assets/css/style.css">

    <script src="https://cdn.tailwindcss.com"></script>

    <style>
    table * {
        text-align: center !important;
        border: 1px solid black;

    }
    </style>
</head>

<body>

    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">

                        <h2 class="title">careerlink admin</h2>
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
                    <a href="logout.php">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>

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

            <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="numbers">

                        </div>
                        <div class="cardName">Les Produits</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="cube-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">80</div>
                        <div class="cardName">Les Cleints</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="people-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">284</div>
                        <div class="cardName">Les Commande</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="cart-outline"></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">$7,842</div>
                        <div class="cardName">Earning</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="cash-outline"></ion-icon>
                    </div>
                </div>
            </div>

            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Recent Orders</h2>
                        <a href="#" class="btn">View All</a>
                    </div>

                    <div class="min-h-screen bg-gray-100">
                        <!-- Header Section -->
                        <header class="bg-blue-600 py-6">
                            <div class="container mx-auto px-4">
                                <h1 class="text-2xl font-bold text-white">CarrerLink Job Search</h1>
                                <p class="text-blue-200 text-sm mt-1">Find your dream job from thousands of
                                    opportunities.</p>
                            </div>
                        </header>

                        <!-- Search and Filters -->
                        <div class="container mx-auto px-4 py-6">
                            <div class="bg-white rounded-lg shadow-md p-4">
                                <form class="flex flex-wrap gap-4">
                                    <!-- Search Bar -->
                                    <div class="flex-grow">
                                        <input type="text" placeholder="Search jobs, titles, or companies"
                                            class="w-full border border-gray-300 rounded-lg p-3 text-gray-700 focus:ring focus:ring-blue-200 focus:outline-none" />
                                    </div>
                                    <!-- Location Filter -->
                                    <div class="flex-grow">
                                        <input type="text" placeholder="Location (e.g., Remote, New York)"
                                            class="w-full border border-gray-300 rounded-lg p-3 text-gray-700 focus:ring focus:ring-blue-200 focus:outline-none" />
                                    </div>
                                    <!-- Search Button -->
                                    <div>
                                        <button type="submit"
                                            class="w-full bg-blue-600 text-white font-medium py-3 px-6 rounded-lg hover:bg-blue-700">
                                            Search
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="container mx-auto px-4">
                            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                                <div class="bg-white shadow-md rounded-lg p-6 hover:shadow-lg">
                                    <div class="flex justify-between items-center">
                                        <h2 class="text-lg font-semibold text-gray-800">Frontend Developer</h2>
                                        <span
                                            class="text-sm bg-blue-100 text-blue-600 font-medium py-1 px-3 rounded-full">Remote</span>
                                    </div>
                                    <p class="text-sm text-gray-500 mt-2">CarrerLink Inc.</p>
                                    <p class="text-sm text-gray-600 mt-4">
                                        Build modern, user-friendly web applications with a focus on design and
                                        performance.
                                    </p>
                                    <div class="mt-4 flex flex-wrap gap-2 text-sm text-gray-500">
                                        <div class="flex items-center">
                                            <svg class="w-4 h-4 text-blue-500 mr-1" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="M10 20s-6-5.686-6-10A6 6 0 0110 4a6 6 0 016 6c0 4.314-6 10-6 10zM10 8a2 2 0 100 4 2 2 0 000-4z" />
                                            </svg>
                                            Remote
                                        </div>
                                        <div class="flex items-center">
                                            <svg class="w-4 h-4 text-blue-500 mr-1" xmlns="http://www.w3.org/2000/svg"
                                                fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="M11.3 1.046a7 7 0 015.652 11.32l-4.24 5.473a2 2 0 01-3.424 0L5.048 12.37a7 7 0 016.253-11.324zM10 4.5a1 1 0 00-1 1V10a1 1 0 00.293.707l3 3a1 1 0 001.414-1.414L10.5 9.586V5.5a1 1 0 00-1-1z" />
                                            </svg>
                                            $60,000 - $90,000
                                        </div>
                                    </div>
                                    <div class="mt-6">
                                        <a href="#"
                                            class="block text-center bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-lg">
                                            View Details
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script src="../assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>