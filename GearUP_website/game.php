<?php
include_once "header.php";
?>
<div class="carb">
    <div class="main">
        <div class="main__container">
            <div class="main__content">
                <h1>GAME SECTION</h1>
                <p>Check out our technologies</p>
            </div>
            <div class="main__img-container">
                <img id="main__img" src="#" />
            </div>
        </div>
    </div>
    <div class="index-box" id="index-box">
        <div class="box">
            <form style="position: absolute">
                <h2>
                    <div class="container">
                        <b style="color: #ff0000;
                              letter-spacing: 0.2em;
                              font-size: 45px;
                              padding: 116px;">Index</b>
                    </div>
                </h2>
                <ul class="indx">
                    <li class="listing"><a href="#1">GearUP's official game</a></li>
                    <li class="listing"><a href="#2">Steer in the right direction</a></li>
                    <li class="listing"><a href="#3">Situation Point</a></li>
                    <li class="listing"><a href="#4">Section 4</a></li>
                    <li class="listing"><a href="#5">Section 5</a></li>
                    <!-- Add more list items here -->
                </ul>
            </form>
        </div>
    </div>
    <div class="main__content">
        <div class="anim">
            <div class="container" id="1">
                <h1>GearUP's official game</h1>
                <p>During the initial stages of the <span style="font-weight: bold;">GearUP</span> project, our team
                    embarked on laying the groundwork for the entire game. This involved crafting mountains, designing
                    streets to form a city, and creating a suitable environment for the car to navigate.</p>
                <p>After shaping and beautifying the terrain, we realized that we had overlooked a crucial reference
                    point, Position 0. This oversight resulted in a disjointed appearance of roads, sidewalks, and
                    buildings. As a result, we had to start from scratch and rebuild everything from Position 0. Once we
                    overcame this setback, our focus shifted to embellishing the terrain with various buildings such as
                    NPC residences, a supermarket, a bank, a fire station, a bus stop, and an ATM, among others.</p>
            </div>
            <div class="container" id="2">
                <h1>Steer in the right direction</h1>
                <p>Next, our attention turned to developing the car, complete with a controller. After implementing the
                    necessary scripts, the car was functional and could be driven. However, the camera failed to track
                    its movement, despite having the correct camera script. We made some minor adjustments to ensure
                    proper functionality, modifying the camera script so that it remained fixed at a certain point in
                    the map, pointing towards and following the car, albeit not as seamlessly as intended. Consequently,
                    we made further alterations, essentially rewriting the entire script to enable the camera to follow
                    and track the car as intended.</p>
                <p>Once we resolved this issue, our focus shifted to refining the car's features. This included adding a
                    speedometer synchronized with the car's velocity. Initially, the car would consistently accelerate,
                    even after releasing the accelerator pedal or while in reverse or eighth gear. We also had to
                    rectify the gear shifting, as initially, the gears would transition abruptly from fourth to eighth
                    gear or cycle through all gears, only to revert back to fifth gear when attempting to shift to
                    seventh gear. Additionally, gear selection did not switch to "R" (reverse) when engaging reverse
                    gear, causing reverse movement to occur in eighth gear or the current gear selected. Furthermore, we
                    implemented a location system for the car, allowing the player's location to be displayed in
                    real-time on the mini-map during gameplay.</p>
            </div>
            <div class="container" id="3">
                <h1>Situation Point</h1>
                <p>Currently, we are in the process of creating the menu, which will provide access to various options
                    such as starting the game or exiting. The game itself will feature NPCs, a user-friendly menu, and
                    free-roaming driving without the need for level completion or progression.</p>
                <p>In summary, "Gear Up" is an exciting project aimed at captivating young audiences, aged 15 to 22.
                    While maintaining a professional tone, we infuse a touch of modernism into our development process,
                    ensuring an immersive and enjoyable gaming experience. Stay tuned for updates as we continue to
                    shape and refine the game to deliver a truly remarkable driving adventure.</p>
                <script type="text/javascript" src="js/paragraph-fade.js"></script>
            </div>
            <div class="container" id="2">
                <h1>In maintence</h1>
                <p>In maintence</p>
            </div>
            <div class="container" id="3">
                <h1>In maintence</h1>
                <p>In maintence</p>
            </div>
            <div class="container" id="4">
                <h1>In maintence</h1>
                <p>In maintence</p>
            </div>
            <div class="container" id="5">
                <h1>In maintence</h1>
                <p>In maintence</p>
            </div>
        </div>
    </div>
    <div class="main__content">
        <div class="anim">
            <div class="container" id="1">
                <h1>GearUP's official game</h1>
                <p>mekie </p>
            </div>
            <div class="container" id="2">
                <h1>Sdfasdht direction</h1>
                <p>Netasss.</p>
            </div>
            <div class="container" id="3">
                <h1>Situation Point</h1>
                <p>Currently, we are in the process of creating the menu, which will provide access to various options
                    such as starting the game or exiting. The game itself will feature NPCs, a user-friendly menu, and
                    free-roaming driving without the need for level completion or progression.</p>
                <p>In summary, "Gear Up" is an exciting project aimed at captivating young audiences, aged 15 to 22.
                    While maintaining a professional tone, we infuse a touch of modernism into our development process,
                    ensuring an immersive and enjoyable gaming experience. Stay tuned for updates as we continue to
                    shape and refine the game to deliver a truly remarkable driving adventure.</p>
                <script type="text/javascript" src="js/paragraph-fade.js"></script>
            </div>
            <div class="container" id="2">
                <h1>In maintence</h1>
                <p>In maintence</p>
            </div>
            <div class="container" id="3">
                <h1>In maintence</h1>
                <p>In maintence</p>
            </div>
            <div class="container" id="4">
                <h1>In maintence</h1>
                <p>In maintence</p>
            </div>
            <div class="container" id="5">
                <h1>In maintence</h1>
                <p>In maintence</p>
            </div>
        </div>
    </div>
    <?php
    include_once "footer.php";
    ?>
</div>
<script src="js/app.js"></script>
</body>

</html>