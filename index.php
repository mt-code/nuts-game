<!DOCTYPE html>
<html>
    <head>
        <title>Wildish & Co - Find the nut!</title>

        <meta charset="UTF-8" />
        <meta name="description" content="Can you find the botanical but?" />
        <meta name="viewport" content="device-width=1.0, initial-scale=1.0" />

        <link rel="stylesheet" href="https://use.typekit.net/jrf5itg.css">
        <link rel="stylesheet" href="assets/css/main.css">
    </head>

    <body class="home">
        <section id="overlay" class="hidden">
            <img class="success" src="assets/img/tick.svg" alt="Tick">
            <img class="fail" src="assets/img/cross.svg" alt="Cross">

            <div class="content">
                <p class="title">Not a nut</p>
                <p class="message">Cashews are seeds</p>
            </div>
        </section>


        <section class="content">
            <h1>Find the nut*</h1>

            <div class="nuts">

                <!-- FIRST ROW -->
                <div class="nut" data-nut="no" data-message="Almonds are seeds">
                    <img src="assets/img/nuts/almond.jpg" alt="Almond">
                    <p class="name">Almond</p>
                </div>

                <div class="nut" data-nut="no" data-message="Brazil nuts are seeds">
                    <img src="assets/img/nuts/brazil.jpg" alt="Brazil">
                    <p class="name">Brazil</p>
                </div>

                <div class="nut" data-nut="no" data-message="Cashews are seeds">
                    <img src="assets/img/nuts/cashew.jpg" alt="Cashew">
                    <p class="name">Cashew</p>
                </div>

                <div class="nut" data-nut="no" data-message="Coconuts are drupes">
                    <img src="assets/img/nuts/coconut.jpg" alt="Coconut">
                    <p class="name">Coconut</p>
                </div>

                <!-- SECOND ROW -->
                <div class="nut" data-nut="yes" data-message="Obviously.">
                    <img src="assets/img/nuts/hazelnut.jpg" alt="Hazelnut">
                    <p class="name">Hazel</p>
                </div>

                <div class="nut" data-nut="no" data-message="Macadamias are seeds">
                    <img src="assets/img/nuts/macadamia.jpg" alt="Macadamia">
                    <p class="name">Macadamia</p>
                </div>

                <div class="nut" data-nut="no" data-message="Nuts are metal">
                    <img src="assets/img/nuts/metalnuts.jpg" alt="Metal Nuts">
                    <p class="name">Nuts</p>
                </div>

                <div class="nut" data-nut="no" data-message="Peanuts are legumes">
                    <img src="assets/img/nuts/peanut.jpg" alt="Peanut">
                    <p class="name">Peanut</p>
                </div>

                <!-- THIRD ROW -->
                <div class="nut" data-nut="no" data-message="Pecans are seeds">
                    <img src="assets/img/nuts/pecan.jpg" alt="Pecan">
                    <p class="name">Pecan</p>
                </div>

                <div class="nut" data-nut="no" data-message="Pine nuts are seeds">
                    <img src="assets/img/nuts/pinenut.jpg" alt="Pine nut">
                    <p class="name">Pine nut</p>
                </div>

                <div class="nut" data-nut="no" data-message="Pistachios are seeds">
                    <img src="assets/img/nuts/pistachio.jpg" alt="Pistachio">
                    <p class="name">Pistachio</p>
                </div>

                <div class="nut" data-nut="no" data-message="Walnuts are seeds">
                    <img src="assets/img/nuts/walnut.jpg" alt="Walnut">
                    <p class="name">Walnut</p>
                </div>
            </div>

            <footer>
                <a href="https://wildishandco.co.uk/" target="noopener">
                    <p>Wildish&Co are nuts about designing things. Please get in touch. Please.</p>

                    <img src="assets/img/wandco-hand.svg" alt="Wildish&Co">
                </a>
            </footer>
        </section>

        <audio id="ding" preload="auto">
            <source src="assets/sounds/ding.mp3" type="audio/mpeg">
        </audio>

        <audio id="buzzer" preload="auto">
            <source src="assets/sounds/buzzer.mp3" type="audio/mpeg">
        </audio>

        <script type="text/javascript" src="assets/js/main.js"></script>
    </body>
</html>