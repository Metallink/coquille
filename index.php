

<html>
    <head>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
    </head>

    <style>
        html, body, div, span, applet, object, iframe,
        h1, h2, h3, h4, h5, h6, p, blockquote, pre,
        a, abbr, acronym, address, big, cite, code,
        del, dfn, em, img, ins, kbd, q, s, samp,
        small, strike, strong, sub, sup, tt, var,
        b, u, i, center,
        dl, dt, dd, ol, ul, li,
        fieldset, form, label, legend,
        table, caption, tbody, tfoot, thead, tr, th, td,
        article, aside, canvas, details, embed,
        figure, figcaption, footer, header,
        menu, nav, output, ruby, section, summary,
        time, mark, audio, video {
            margin: 0;
            padding: 0;
            border: 0;
            font: inherit;
            vertical-align: baseline;
        }
        /* HTML5 display-role reset for older browsers */
        article, aside, details, figcaption, figure,
        footer, header, hgroup, menu, nav, section {
            display: block;
        }
        body {
            line-height: 1;
        }
        ol, ul {
            list-style: none;
        }
        blockquote, q {
            quotes: none;
        }

        table {
            border-collapse: collapse;
            border-spacing: 0;
        }

        body {
            font-family: 'Open Sans', sans-serif;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        h1 {
            font-family: 'Satisfy', cursive;
            color: #fff;
            font-size: 32px;
        }

        #bandeau-contact {
            background-color: #f6f6f6;
            position: fixed;
            display: block;
            height: 40px;
            width: 100%;
            text-align: center;
            top: 0;
        }

        #bandeau-contact > span {
            display: inline-block;
            text-align: center;
            margin: 10px 5%;
        }

        .material-icons {
            vertical-align: middle;
            margin-bottom: 4px;
        }

        #menu-lateral {
            position: fixed;
            font-family: inherit;
            height: 100%;
            width: 20%;
            margin-top: 100px;
        }

        #nautilus-lateral {
            width: 50px;
            padding: 15px 25px;
        }

        #coquille-lateral {
            position: absolute;
            top: 34px;
            font-size: 32px;
        }

        #menu-lateral li {
            padding: 15px 30px;
            font-size: 22px;
        }

        #menu-normal {
            display: block;
            background-color: #000;
            height: 40px;
            width 100%;
            margin-top: 40px;
            padding-top: 40px;
            text-align: center;
        }

        #menu-normal a {
            color: #fff;
            margin: auto 3%;
        }

        #content {
            display: block;
            margin: 0 auto;
            width: 60%;
        }

        #content > div {
            padding: 20px 50px;
        }

        #accueil {
            background-image: url('photo.jpg');
            background-repeat: no-repeat;
            background-position: center;
            background-size: 100%;
            height: 530px;
        }

        #carte {
            background-color: #00897B;
        }

        #cave {
            background-color: #E53935;
        }

        #galerie {
            background-color: rgba(0,0,0,0.82);
        }

        #images {
            height: 220px;
            overflow-x: auto;
            white-space: nowrap;
        }

        #images::-webkit-scrollbar {
            width: 12px;
            opacity: 0;
        }

        #images::-webkit-scrollbar-thumb {
            border: 3px solid #2E2E2E;
            border-radius: 10px;
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
            background-color: #555;
        }
        
        #galerie h1 {
            margin-bottom: 20px;
        }

        #galerie img {
            height: 200px;
        }

        #galerie img:not(:last-child) {
            margin-right: 50px;
        }

        #reserver {

        }

        #contact {
            background-color: #1E88E5;
            padding: 20px;
            color: #fff;
            text-align: center;
        }


    </style>

    <body>
        <div id="bandeau-contact">
            <span>FR | ESP | ENG</span>
            <span>
                <a id="tel" href="tel:+33561347892"><i class="material-icons">phone</i>+33 (0)5 61 34 78 92</a>
            </span>
            <span>
                <i class="material-icons">location_on</i>
                <span>Chemin de la Coquille BIDART 64310</span>
            </span>
        </div>

        <div id="menu-lateral">
            <img id="nautilus-lateral" src="nautilus.png">
            <span id="coquille-lateral">La Coquille</span>
            <ul>
                <li style="background: #f6f6f6"><a href="#accueil">Accueil</a></li>
                <li><a href="#carte">La carte</a></li>
                <li style="background: #e5e5e5"><a href="#cave">La cave</a></li>
                <li><a href="#galerie">La galerie</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>

        <div id="menu-normal">
            <a href="#accueil">Accueil</a>
            <a href="#carte">La carte</a>
            <a href="#cave" style="padding-right: 3%">La cave</a>
            <a href="#galerie" style="padding-left: 3%">La galerie</a>
            <a href="#contact">Contact</a>
        </div>
<!--Test -->
        <div id="content">
            <div id="accueil">
<!--CARTE -->
            </div>
            <div id="carte">
                <h1>La carte</h1>
            </div>
            <div id="cave">
                <h1>La cave</h1>
            </div>
            <div id="galerie">
                <h1>La galerie</h1>
                <div id="images">
                    <img src="galerie1.jpg">
                    <img src="galerie2.jpg">
                    <img src="galerie3.jpg">
                </div>
            </div>
            <div id="contact">
                <span style="padding-right: 5%;">
                    <a id="tel" href="tel:+33561347892"><i class="material-icons">phone</i>+33 (0)5 61 34 78 92</a>
                </span>
                <span style="padding-left: 5%;">
                    <i class="material-icons">location_on</i>
                    <span>Chemin de la Coquille BIDART 64310</span>
                </span>
            </div>
        </div>
    </body>
</html>
