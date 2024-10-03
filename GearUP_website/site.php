<?php
include_once "header.php";
?>
<link rel="stylesheet" href="css/styles.css">
<div class="carb">
    <div class="main">
        <div class="main__container">
            <div class="main__content">
                <h1>Web Design</h1>
                <p style="opacity: 1">Our website development:<br>a major headache, but worth it!</p>
            </div>
            <div class="main__img-container">
                <img id="main__img" src="images/code.jpg" style="height: 450px; box-shadow: 0px 0px 50px black;" />
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
                    <li class="listing"><a href="#1">A New Start</a></li>
                    <li class="listing"><a href="#2">The Development</a></li>
                    <li class="listing"><a href="#3">In maintence</a></li>
                    <li class="listing"><a href="#4">In maintence</a></li>
                    <li class="listing"><a href="#5">In maintence</a></li>
                    <!-- Add more list items here -->
                </ul>
            </form>
        </div>
    </div>
    <div class="main__content">
        <div class="anim">
            <div class="container" id="1">
                <h1>A New Start</h1>
                <p> Our team chose to develop a website to make presenting, demonstrating, and documenting the entire
                    hardware and software project much easier. Let's be honest, creating documentation in Word is about
                    as exciting as watching paint dry, so we thought, why not do it directly on the website?</p>
                <p>This idea not only made documenting updates and changes a breeze (which could also be tracked on our
                    social media accounts), but it also made things more visual, which helped improve the quality of our
                    final report.</p>
                <p>At first, we considered not including construction and editing guides on the website along with our
                    explanations of everything. However, we ultimately decided to prioritize ease of use and visual
                    appeal, and so we focused on presenting the information in a more user-friendly way.
                <p>Let's be
                    honest, who really enjoys reading lengthy guides? While we understand that with some improvement and
                    refinement, the project could be
                    commercialized, the truth is, at the outset, none of us had experience with Arduinos involving both
                    hardware and software development, or programming raw software.</p>
                <p>We had to rely on trial and error,
                    as all the information is available on the internet and anyone with a bit of determination and
                    ambition can reproduce the project. To be honest, that was precisely what we done. A lot of
                    headaches and hours glued to the screen were necessary to bring you this guide today.</p>
                <p>That's why we chose to at least assist the search by compiling all the information on the same
                    website. But, enough about the boring part. Let's move on to what really matters - the actual
                    development of <span style="">GearUP</span>'s official website.
                </p>
            </div>
            <div class="container" id="2">
                <h1>The Development</h1>
                <p>The GearUP website was primarily designed as a digital platform to support the presentation
                    of the entire project. At the outset, we were uncertain about the specific content to include on the
                    site, so we began by jotting down all the fundamental elements and their corresponding requirements
                    on paper.</p>
                <p>This exercise led us to the initial draft, outlining how everything would come together. With this
                    groundwork laid, we embarked on a quest for inspiration. We sought a framework to guide our
                    development process, and one of the key aspects we identified from the start was incorporating the
                    responsiveness of the GitHub website.</p>
                <p> We drew inspiration from their implementation of a JavaScript
                    animation for opening and closing the index bars in the header.
                    he website comprised various files and utilized multiple programming languages, including HTML, CSS,
                    JavaScript, and MySQL.
                <p>We relied on PHPMyAdmin for both local and online database management.
                    Additionally, we consciously chose not to employ templates or automated website creation tools, as
                    we aimed for maximum freedom and a purer approach to enhance our proficiency in web development.</p>
                <p>Once our planning and research were complete, we initiated our action plan. We began by studying a
                    YouTube video by Brian Designs, using it as a reference for developing a responsive header, footer,
                    and body. We remained faithful to this foundation throughout most of the project. Building upon
                    that, we proceeded to add the adjacent pages, incorporating relevant images and outlining the
                    textual content for each page.</p>
                <p>As the project unfolded, new ideas continued to emerge, further
                    enriching our development process.</p>
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
    <script src="js/paragraph-fade.js"></script>
    <?php
    include_once "footer.php";
    ?>
</div>
</body>

</html>