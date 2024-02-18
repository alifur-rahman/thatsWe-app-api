<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <title>Order the ThatWe App</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Homemade+Apple&family=McLaren&family=Sora:wght@300;500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel='stylesheet'
        href='https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css'>
    <style>
        :root {
            --maroon: #a83874;
            --purple: #7e3a77;
            --purple-dark: #3f284e;
            --black: #001524;
            --gray: #e7eaee;
            --yellow-lighter: #fdf1cd;
            --yellow-light: #f0d88f;
            --yellow: #f8c630;
            --orange: #e67e49;
            --orange-red: #dd5a56;
            --red: #d43562;
        }

        body {
            background: #fff;
            font-family: "Sora", cursive;
            font-weight: 300;
            line-height: 1.5;
        }

        * {
            box-sizing: border-box;
        }

        em {
            font-style: italic;
        }

        .container {
            max-width: 80rem;
            margin: auto;
            padding: 1.2rem 0;
        }

        .logo {
            font-family: "McLaren", cursive;
            text-transform: uppercase;
        }

        .nav {
            margin-top: 2rem;
        }

        .nav__logo {
            font-family: "McLaren", cursive;
            text-transform: uppercase;
            font-size: clamp(1.5rem, 3vw, 1.8rem);
            color: var(--yellow);
            background: var(--purple);
            display: inline-block;
            padding: 0.3rem 1.2rem;
            margin: 0 1rem;
        }

        .nav__item {
            display: inline-block;
            font-size: 1.3rem;
            margin: 0 0.5rem;
            color: #f8ecc9;
            cursor: pointer;
        }

        .nav__item:hover {
            text-decoration: underline;
        }

        .hero {
            background: url("https://assets.codepen.io/567707/illustration-mountains.jpg") center center/cover;
            padding: 2rem;
            min-height: 100vh;
        }

        .hero .download {
            margin: 0.6rem;
            width: 80%;
            max-width: 14rem;
            cursor: pointer;
            position: relative;
            top: 0;
            transition: 0.3s ease;
        }

        .hero .download:hover {
            top: -4px;
        }

        @media (min-width: 800px) {
            .hero {
                padding: 0 5rem;
            }
        }

        @media (min-width: 1024px) {
            .hero__inner {
                display: flex;
            }
        }

        .hero__info {
            line-height: 1.5;
            flex: 1;
            padding-top: 5rem;
            text-align: center;
        }

        @media (min-width: 1024px) {
            .hero__info {
                padding-right: 3rem;
                text-align: left;
            }
        }

        .hero__mockups {
            flex: 1;
            position: relative;
            padding-top: 2rem;
            padding-bottom: 3rem;
        }

        @media (min-width: 1024px) {
            .hero__mockups {
                transform: translate(1.5rem, -2rem);
            }
        }

        .screen {
            width: 20rem;
            margin: auto;
            margin: 2rem;
            position: relative;
        }

        .screen:nth-child(2) {
            position: absolute;
            top: 2rem;
            right: 0;
            z-index: 20;
        }

        @media (max-width: 740px) {
            .screen:nth-child(2) {
                top: 10%;
            }
        }

        @media (min-width: 1024px) {
            .screen:nth-child(2) {
                top: 10%;
            }
        }

        .screen__inner {
            background: white;
            position: absolute;
            width: 90%;
            height: 80%;
            top: 10%;
            left: 0;
            right: 0;
            margin: auto;
            padding: 0.6rem 0.7rem;
        }

        .screen img {
            position: relative;
            width: 100%;
            z-index: 1;
        }

        .screen__header {
            background: var(--purple);
            color: var(--yellow-light);
            text-align: center;
            padding: 0.5rem 0.2rem 0.15rem;
        }

        .screen__middle {
            padding: 0.1rem 0 0;
            color: var(--black);
            position: relative;
        }

        h1 {
            color: var(--yellow-lighter);
            font-family: "Homemade Apple";
            font-size: clamp(2.5rem, 4vw, 4rem);
            margin: 1rem;
        }

        h1 span {
            background-repeat: no-repeat;
            background-position: 100% 80%;
            background-size: 80%;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 126.24 17.71'%3E%3Cpath d='M76.41.07c11,.32,22.06.71,33.07,1.68,5.33.47,9.92,2.61,14.48,5,1.74.92,2.64,3.69,2.14,5.61-.27,1-1,1.31-1.93,1.65-4.58,1.69-9.25,1.76-14,1.32C94.59,14,79,12.93,63.42,12.76a297.76,297.76,0,0,0-51.74,3.71c-2.1.35-4.18.78-6.27,1.15a4.2,4.2,0,0,1-4.71-2c-1.16-1.89-.91-3.45.94-4.71a28.39,28.39,0,0,1,6.59-3c7.76-2.78,15.84-4.17,24-5.41C46.84.23,61.61-.19,76.41.07Z' style='fill: %23fdf1cd;'/%3E%3C/svg%3E");
        }

        h2 {
            color: var(--yellow-light);
            font-weight: 600;
            font-size: clamp(1.6rem, 2vw, 2rem);
            line-height: 1.3;
            margin: 3rem 1rem 2.5rem;
        }

        .bg-red {
            background: var(--red);
        }

        .bg-purple {
            background: var(--purple-dark);
        }

        .bg-yellow {
            background: #f6ca43;
        }

        .bg-yellow .question {
            color: var(--purple-dark);
        }

        .question {
            color: var(--yellow-lighter);
            font-size: 1.7rem;
            font-weight: 600;
            line-height: 1.1;
            margin: 1.5rem 2rem 1.5rem;
        }

        .subheader {
            margin: -0.3rem 2rem 3rem;
            line-height: 1.2;
        }

        .choices {
            font-size: 1.2rem;
            list-style: none;
        }

        .choices li {
            padding: 0.8rem 2rem;
        }

        .choices li:nth-child(1) {
            background: var(--yellow-light);
        }

        .choices li:nth-child(2) {
            background: #f2d47c;
        }

        .choices li:nth-child(3) {
            background: #f3d169;
        }

        .choices li:nth-child(4) {
            background: #f5cd56;
        }

        .choices li:nth-child(5) {
            background: #f6ca43;
        }

        .choices li:nth-child(6) {
            background: #f8c630;
        }

        .choices li:nth-child(7) {
            background: #f7c326;
        }

        .items {
            margin: 0 2rem 1.5rem;
            transform: translateY(-1.5rem);
        }

        .items li {
            margin: 0.8rem 0;
            background: var(--maroon);
            color: var(--yellow-lighter);
            line-height: 1.1;
            padding: 0.8rem 0.8rem;
        }

        .more-info {
            display: flex;
            align-items: center;
            background: var(--yellow-lighter);
            color: var(--maroon);

        }

        .more-info a {
            color: var(--maroon);
        }

        .more-info .image {
            flex: 0 0 30%;
            max-width: 10rem;
            line-height: 0;
        }

        .more-info .image img {
            width: 100%;
        }

        .more-info p {
            flex: 1;
            padding: 0 1.5rem;
        }
    </style>

</head>

<body>
    <!-- partial:index.partial.html -->
    <div class="hero">
        <div class="container">
            <nav class="nav">
                <div class="nav__inner">
                    <div class="nav__logo">SPARKS</div>
                    <div class="nav__item">About</div>
                    <div class="nav__item">Features</div>
                    <div class="nav__item">Support</div>
                </div>
            </nav>
            <div class="hero__inner">
                <div class="hero__info">
                    <h1>Let your sparks of joy <span>fly.</span></h1>
                    <h2>Life tips and advice to get you going, no matter how you're feeling.</h2><img class="download"
                        src="https://assets.codepen.io/567707/badge-ios-download.png" alt="Download Button" /><img
                        class="download" src="https://assets.codepen.io/567707/badge-android-download.png"
                        alt="Download Button" />
                </div>
                <div class="hero__mockups">
                    <div class="screen"><img src="https://assets.codepen.io/567707/mockup-iphone.png" />
                        <div class="screen__inner">
                            <div class="screen__header logo">Sparks</div>
                            <div class="screen__middle bg-red">
                                <p class="question">Hi Ash, how are you today?</p>
                                <ul class="choices">
                                    <li>Happy</li>
                                    <li>Optimistic</li>
                                    <li>Motivated</li>
                                    <li>Neutral</li>
                                    <li>Demotivated</li>
                                    <li>Sad</li>
                                    <li>Jaded</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="screen"><img src="https://assets.codepen.io/567707/mockup-iphone.png" />
                        <div class="screen__inner">
                            <div class="screen__header logo">Sparks</div>
                            <div class="screen__middle bg-yellow">
                                <p class="question">So you are feeling sad today?</p>
                                <p class="subheader">62 resources found.</p>
                                <div class="bg-purple">
                                    <ul class="items">
                                        <li>8 Quick Actions</li>
                                        <li>15 Articles</li>
                                        <li>25 Music Playlists</li>
                                        <li>5 Podcast Episodes</li>
                                        <li>9 Videos</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="more-info">
        <div class="image"><img src="https://assets.codepen.io/567707/palette-speaknow.png" alt="Taylor Swift album" />
        </div>
        <p>Part of the <a href="https://codepen.io/collection/XPxJmz">UI Designs inspired by Taylor Swift Album
                Covers</a> collection. This is <em>Speak Now (2010)</em>.</p>
    </div>
    <!-- partial -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
</body>

</html>
