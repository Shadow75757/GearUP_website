<?php
include_once "header.php";
?>
<div class="carb">
    <div class="services">
        <style>
            body {
                position: fixed;
                width: 100%;
            }

            h1 {
                text-align: center;
            }

            .hidden {
                background-color: #8f0000;
                background-image: linear-gradient(to right, #8f0000 0%, #e28e75 100%);
                background-size: 100%;
                background-clip: text;
                -webkit-background-clip: text;
                -moz-background-clip: text;
                -webkit-text-fill-color: transparent;
                -moz-text-fill-color: transparent;
                margin-bottom: 5rem;
                font-size: 2.5rem;
                text-align: center;
                position: absolute;
                top: 20px;
                display: inline-block;
                width: 250px;
                opacity: 0;
                animation: slideme 8s infinite;
            }

            .codinfox-changing-keywords {
                vertical-align: top;
                overflow: hidden;
                position: relative;
                display: inline-block;
                width: 300px;
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis;
            }

            .hidden:nth-child(3) {
                animation-delay: 2s;
            }

            .hidden:nth-child(5) {
                animation-delay: 4s;
            }

            .hidden:nth-child(7) {
                animation-delay: 6s;
            }

            @keyframes slideme {
                0% {
                    top: 20px;
                    opacity: 0;
                }

                5% {
                    top: 0px;
                    opacity: 1;
                }

                10% {
                    top: 0;
                    opacity: 1;
                }

                20% {
                    opacity: 1;
                }

                25% {
                    opacity: 0.1;
                    top: 0;
                }

                30% {
                    opacity: 0;
                    top: 20px;
                }
            }
        </style>
        <div class="codinfox-sidebar-description sidebar-personal-info-section">
            <div class="codinfox-changing-keywords" id="change">
                <strong>
                    <h1 class="hidden">Oops!</h1><br />
                    <h1 class="hidden">Error</h1><br />
                    <h1 class="hidden">404</h1><br />
                    <h1 class="hidden">:(</h1>
                </strong>
            </div>
        </div>
        <h1>Looks like this page has gone on an extended coffee break. <br> We'll try to get it back to work ASAP.</h1>
    </div>
</div>  