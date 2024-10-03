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

            .services h1{
                font-size: 4rem;
            }

            .anim-red {
                background-image: linear-gradient(-225deg,
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
                animation: textclip 2s linear infinite;
                display: inline-block;
                text-align: center;
            }

            .anim-blue {
                font-style: normal !important;
                background-image: linear-gradient(-225deg,
                        #0f2c5c 0%,
                        #7898cb 25%,
                        #0f2c5c 50%,
                        #7898cb 75%,
                        #0f2c5c 100%);
                background-size: auto auto;
                background-clip: border-box;
                background-size: 200% auto;
                color: #fff;
                background-clip: text;
                text-fill-color: transparent;
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                animation: textclip 2s linear infinite;
                display: inline-block;
                text-align: center;
            }

            @keyframes textclip {
                to {
                    background-position: 200% center;
                }
            }
        </style>
        <h1 class="word"></h1>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/write_team.js"></script>


    <!-- Henrique's Biographic Section -->
    <div class="main">
        <div class="main__container">
            <div class="main__content">
                <p>Hey! I'm <span class="anim-red">Henrique Prata</span>, an 18-year-old programming enthusiast from the
                    beautiful city of Porto.
                    <br>
                    <br>
                </p>
            </div>
            <div class="main__img-container">
                <div class="container reveal">
                    <div class="text-container">
                        <img id="main__img" src="images/prata.jpg" style="height: 400px; box-shadow: 0px 0px 50px black;"/>

                    </div>
                    <!-- Personal Social Media Icon Links -->
                    <div class="social__media--wrap">
                        <div class="social__icons">
                            <div class="gmail">
                                <a class="social__icon--link"
                                    href="https://mail.google.com/mail/u/0/#inbox?compose=GTvVlcSBpszdpFmvLNcdPltJZnPjrwdTNNdgWNbfncFrQSzjdnkfqqGJGGWgsdZTqRlJhrCcClPdM"
                                    target="_blank" aria-label="Gmail">
                                    <i class="fab fa-google"></i>
                                </a>
                            </div>
                            <div class="facebook">
                                <a class="social__icon--link" href="https://www.facebook.com/josehenrique.prata/"
                                    target="_blank" aria-label="Facebook">
                                    <i class="fab fa-facebook"></i>
                                </a>
                            </div>
                            <div class="instagram">
                                <a class="social__icon--link" href="https://www.instagram.com/henrique_prata757/"
                                    target="_blank" aria-label="Instagram">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                            <div class="twitter">
                                <a class="social__icon--link" href="https://twitter.com/zyzzsideman" target="_blank"
                                    aria-label="Twitter">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </div>
                            <div class="linkedin">
                                <a class="social__icon--link"
                                    href="https://www.linkedin.com/in/henrique-prata-2a0383240/" target="_blank"
                                    aria-label="LinkedIn">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>
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
                            <img id="main__img" src="images/gustabito.jpeg" style="height: 400px; box-shadow: 0px 0px 50px black;"/>
                        </div>
                        <!-- Personal Social Media Icon Links -->
                        <div class="social__media--wrap">
                            <div class="social__icons">
                                <div class="gmail">
                                    <a class="social__icon--link"
                                        href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCJNstdLLwPvbDcPKwgvhmLXHrsbCkgBBCNjCJPXrtWRWBkvLGtQHLXZFSFJPXXrHlfvvQCg"
                                        target="_blank" aria-label="Gmail">
                                        <i class="fab fa-google"></i>
                                    </a>
                                </div>
                                <div class="facebook">
                                    <a class="social__icon--link" href="https://www.facebook.com/gustavo.narciso.965"
                                        target="_blank" aria-label="Facebook">
                                        <i class="fab fa-facebook"></i>
                                    </a>
                                </div>
                                <div class="instagram">
                                    <a class="social__icon--link" href="https://www.instagram.com/gustavo.narciso/"
                                        target="_blank" aria-label="Instagram">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </div>
                                <div class="twitter">
                                    <a class="social__icon--link" href="https://twitter.com/gustaBo0o" target="_blank"
                                        aria-label="Twitter">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main__img-container">
                <div class="main__content">
                    <p>I'm <span class="anim-blue">Gustavo Narciso</span>, I'm 17 years old and currently living in
                        Porto.
                        <br>I'm studying computer science, focusing on programming.
                        <br>One of my favorite hobbies is going to the beach to watch the sunset, along with friends and
                        good
                        conversation.
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