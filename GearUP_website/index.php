<?php
session_start();
include_once "header.php";
?>
<style>
    a.links {
        background-image: linear-gradient(to bottom, #8f0000 0%, #e28e75 100%);
        background-clip: text;
        -webkit-background-clip: text;
        -moz-background-clip: text;
        -webkit-text-fill-color: transparent;
        -moz-text-fill-color: transparent;
    }

    .bullet-point p {
        position: relative;
        padding-left: 100px;
        /* Add some left padding for the bullet */
    }

    .bullet-point p::before {
        content: "\2022";
        /* Unicode character for a bullet (•) */
        position: absolute;
        left: 75px;
    }
</style>
<!-- Carbon Fiber Background Class -->
<div class="carb">

    <!-- Hero Section -->
    <div class="main">
        <div class="main__container">
            <div class="main__content">
                <h1>You are not ready for this</h1>
                <h2>immersion</h2>
                <br>&nbsp;</br>
                <br>&nbsp;</br>
                <p>Are you <sup><span style="color: #ff0000">brave</span></sup> enough?
                    <br>Can you handle all of this<sup><span style="color: #ff0000"> power </span></sup>?
                </p>
            </div>
            <div class="main__img--container">
                <img id="main__img" src="images/Automotive(NoBackground).png" />
            </div>
        </div>
    </div>
    <!-- Services Section Using Cards -->
    <div class="services">
        <h1>See what the hype is about</h1>
        <div class="services__container">
            <!-- Website Card -->
            <div class="services__card">
                <h2>Break the matrix</h2>
                <p>Crack the code, embrace the development.</p>
                <button class="cardbtn" onclick="window.location.href = 'site.php';">Unravel the source</button>
            </div>
            <!-- Hardware Card -->
            <div class="services__card">
                <h2>Experience the Immersion</h2>
                <p>Feel the power in your hands</p>
                <button class="cardbtn" onclick="window.location.href = 'hardware.php';">Ignite your journey</button>
            </div>
            <!-- Game Card -->
            <div class="services__card">
                <h2>Rev that motor</h2>
                <p>Drop a gear and disappear, we dare you</p>
                <button class="cardbtn" onclick="window.location.href = 'game.php';">Get immersed in our game</button>
            </div>
        </div>
    </div>
    <div class="main__content">
        <div class="container">
            <div class="anim">
                <h1>What is the GearUP project</h1>
                <p>Our main objective is to provide an escape from the everyday stress for
                    less fortunate teens. In today's world, gaming simulations have become highly expensive, putting
                    them out of reach for many teens on a tight budget.</p>
                <p>This project not only gives them the opportunity to create their own gaming controller, but it also
                    comes with comprehensive step-by-step guides on how to do it. We, as simple teens ourselves,
                    understand the importance of having fun and the joy that comes from gaming.</p>
                <p>The internet is a vast source of information, but navigating it can sometimes feel like a challenging
                    race. Throughout our development process, our team spent countless hours in forums, seeking
                    solutions to even the simplest problems and errors, as if we were on a quest for the elusive finish
                    line.</p>
                <p>That's where our website comes into play once again. We have gathered all the necessary information
                    to replicate the project, making it accessible and customizable for everyone. It's like getting a
                    customized gaming controller that fits perfectly, ensuring a smooth ride.</p>
                <p>This project also serves as a social critique, as we address the issue of exorbitant pricing in the
                    gaming industry. Our aim is to make gaming more accessible and affordable for all, highlighting the
                    fact that it's actually quite easy to create our own gaming experiences.</p>
                <p>Our project is composed of three main parts:</p>
                <div class="bullet-point">
                    <p>Gaming controller set</p>
                    <p>Immersive racing game</p>
                    <p>Presentation website</p>
                </div>
                <p>We stumbled upon a wrecked set of steering wheel and pedals from an old PS2. Our hardware team, using
                    an Arduino, breathed new life into it by adding some exciting enhancements. You can check out the
                    details on our <a href="hardware.php" class="links">hardware</a> page.</p>
                <p>It would be cliché if we had a gaming controller set without a game, wouldn't it? That's why GearUP
                    comes with a simple yet thrilling racing simulation. Prepare yourself for a real responsive and
                    immersive gameplay experience like no other. Feel the power by checking out our <a href="game.php"
                        class="links">game</a> page.</p>
                <p>Our website was meticulously created to serve as an informative, comprehensive, and responsive
                    platform to showcase our entire project. We've included everything you would find in a final report,
                    from presentation techniques and mental observations to workarounds and more. Break through the
                    fourth wall and explore our <a href="hardware.php" class="links">website</a> development page to
                    uncover all the intriguing details.</p>
                <p>Lastly, we would like to spread some awerness for our users. This is our first major project, and
                    while there may
                    be errors and areas where we could have opted for simpler, easier, or safer approaches, we've poured
                    a tremendous amount of effort into it.
                <p>We genuinely appreciate any suggestions or feedback you may have. Feel free to submit them through
                    the <a href="" class="links">contact us</a> link located in the footer, we are committed to
                    continuous improvement.</p>
                <p>Although this project was developed as part of our final course presentation, we had an incredible
                    amount of fun, put in immense effort, and remained determined to make it a success.</p>
                <p>Now the <span style="  background-image: linear-gradient(to bottom, #007313 0%, #16d201 100%);">green
                        light</span> is on.</p>
                <p>Turn the nitrous on, rev it up, and get ready to <span style="font-weight: bold;">GearUP</span>!</p>
                <script type="text/javascript" src="js/paragraph-fade.js"></script>
            </div>
        </div>
    </div>

    <?php
    include_once "footer.php";
    ?>
</div>