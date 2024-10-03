<?php
include_once "header.php";
?>
<div class="carb">
    <div class="services">
        <style>
            body {
                overflow-x: hidden;
                /* Hide horizontal scrollbar */
            }

            @keyframes textclip {
                to {
                    background-position: 200% center;
                }
            }
            .services h1{
                font-size: 4rem;
            }
        </style>
        <h1 class="word"></h1>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/write_sponsor.js"></script>
    <!-- FryDay Section -->
    <div class="main">
        <div class="main__container">
            <div class="main__content">
                <h1><span style="background:
                    linear-gradient(to bottom, #ff0000 0%, #1d1b1a 85%);
                    -webkit-background-clip: text;
                    -webkit-text-fill-color: transparent;">MovieVerse</span></h1>
                <p>The fresh older brother of IMDB. Always updated.
                    <br>
                    <br>
                </p>
            </div>
            <div class="main__img-container">
                <div class="container reveal">
                    <div class="text-container">
                        <img id="main__img" src="images/movieverse.png" />

                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>

        <!-- Gustavo's Biographic Section -->
        <div class="main">
            <div class="main__container">
                <div class="main__content">
                    <div class="main__img-container">
                        <div class="reveal-left">
                            <div class="text-container">
                                <img id="main__img" src="images/fryday.png" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main__img-container">
                    <div class="main__content">
                        <h1><span style="background:
                    linear-gradient(to bottom, #f9a424 35%, #05a751 100%);
                    -webkit-background-clip: text;
                    -webkit-text-fill-color: transparent;">FryDay</span></h1>
                        <p>The best food fast-food restaurant from the Nothen Portugal
                        </p>
                    </div>
                </div>
                <script src="js/animation.js"></script>
                <script src="js/animation-left.js"></script>
            </div>
            <?php
            include_once "footer.php";
            ?>
        </div>
        <script src="js/app.js"></script>
    </div>

    <?php
    include_once "footer.php";
    ?>
</div>
<script src="js/app.js"></script>
</body>

</html>