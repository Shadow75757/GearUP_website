<?php
session_start();
$loggedIn = isset($_SESSION['login']); // Verifica se o usuário está logado
?>

<!DOCTYPE html>
<html lang="PT-pt">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GearUP</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">

    <!-- Styling Links -->
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"
        integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet" />

    <!-- Scripts -->
    <script type="text/javascript" src="js/changeTitle.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
    <style>
        .anim-red {
            background-image: linear-gradient(45deg,
                    #8f0000 0%,
                    #e28e75 25%,
                    #8f0000 50%,
                    #e28e75 75%,
                    #8f0000 100%);
            background-size: auto auto;
            background-clip: border-box;
            background-size: 200% auto;
            color: #fff;
            background-clip: text;
            text-fill-color: transparent;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: textclip 5s linear infinite;
            display: inline-block;
            text-align: center;
        }

        @keyframes textclip {
            to {
                background-position: 200% center;
            }
        }


        /* Position the modal in the middle of the screen */
        .modal {
            display: none;
            position: fixed;
            z-index: 9999;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            max-width: 80%;
            max-height: 80%;
            overflow: auto;
            background-color: #fff;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.5);
            padding: 20px;
            animation: modal-fade 0.5s ease forwards;
        }

        /* Style the dark overlay */
        #overlay {
            display: none;
            position: fixed;
            z-index: 9998;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.75);
            animation: overlay-fade 0.5s ease forwards;
        }

        /* Add animation for modal disappearing */
        .modal.fade-out {
            animation: modal-fade-out 0.5s ease forwards;
        }

        /* Add animation for overlay disappearing */
        #overlay.fade-out {
            animation: overlay-fade-out 0.5s ease forwards;
        }

        @keyframes modal-fade {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes overlay-fade {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes modal-fade-out {
            from {
                opacity: 1;
            }

            to {
                opacity: 0;
            }
        }

        @keyframes overlay-fade-out {
            from {
                opacity: 1;
            }

            to {
                opacity: 0;
            }
        }
    </style>
</head>

<body>
    <!-- Navbar Section -->
    <nav class="navbar">
        <div class="navbar__container">
            <a href="/gearup" id="navbar__logo"><i class="fas fa-gem"></i><b class="anim-red">GearUP</b></a>
            <div class="navbar__toggle" id="mobile-menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>

            <!-- Header Links -->
            <ul class="navbar__menu">
                <li class="navbar__item">
                    <a href="site.php" class="navbar__links" style="color: #fff">Web Design</a>
                </li>
                <li class="navbar__item">
                    <a href="hardware.php" class="navbar__links">Hardware</a>
                </li>
                <li class="navbar__item">
                    <a href="game.php" class="navbar__links">Game</a>
                </li>
                <?php if ($loggedIn) { // Se o usuário estiver logado, exibe o dropdown de perfil ?>
                    <ul>
                        <li>
                            <img src="images/lightpfp.jpg" class="profile" />
                            <ul>
                                <li class="sub-item">
                                    <span class="material-icons-outlined"> manage_accounts </span>
                                    <p><a href="profile.php">Update Profile</a></p>
                                </li>
                                <!-- HTML code for the link -->
                                <li class="sub-item">
                                    <span class="material-icons-outlined">grid_view</span>
                                    <p><a href="#" onclick="openModal()">Light Theme</a></p>
                                </li>
                                <!-- Language Change -->
                                <li class="sub-item">
                                    <span class="material-icons-outlined">donut_small</span>
                                    <p><a href="profile.php">Change Language</a></p>
                                </li>
                                <!-- Modal -->
                                <div id="overlay"></div>
                                <!-- Remove the close button from the modal content -->
                                <div id="myModal" class="modal">
                                    <div class="modal-content">
                                        <p id="modal-message"></p>
                                    </div>
                                </div>
                                <!-- LogOut -->
                                <li class="sub-item" href="logout.php">
                                    <span class="material-icons-outlined"> logout </span>
                                    <p><a href="includes/logout.inc.php">Logout</a></p>
                                </li>
                            </ul>
                        </li>
                    </ul>
                <?php } else { // Caso contrário, exibe o botão de login ?>
                    <a href="login.php">
                        <button class="glow-on-hover"><b>Log In</b></button>
                    </a>
                <?php } ?>
            </ul>
        </div>
    </nav>
</body>

</html>