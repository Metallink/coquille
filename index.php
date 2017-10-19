

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
            z-index: 2000;
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
            width 100%;
            height: 50px;

            margin-top: 40px;
            padding-top: 28px;
            padding-bottom: 30px;
            
            text-align: center;
            line-height: 94px;
            
            background: url('head_bg.png') center top repeat-x rgba(255, 255, 255, .85);
            border-bottom: solid 1px #7b7a78;
            border-bottom: solid 2px #c7a758;
            transition: opacity .3s linear;
        }

        #menu-normal a {
            color: #000;
            margin: auto 3%;
            font-size: 20px; 
        }

        #a-accueil {
            border-bottom: 5px solid #c7a658;
            padding-bottom: 15px;
            padding-left: 20px;
            padding-right: 20px;
        }

        #nautilus-normal {
            width: 40px;
            margin-top: -106px;
            margin-left: -6px;
        }

        #nautilus-normal + p {
            margin-top: -83px;
            margin-left: -6px;
        }

        #content {
            display: block;
            margin: 0 auto;
            width: 60%;
        }

        #carte, #cave, #galerie, #contact {
            padding: 20px 50px;
        }

        #accueil {
            background-image: url('photo.jpg');
            background-repeat: no-repeat;
            background-position: center;
            background-size: 100%;
            height: 530px;
        }

        #reserver {
            background-color: rgba(255,255,255,0.8);
            width: 100px;
            height: 100px;
        }

        #container-carte {
            background-image: url('carte.jpg');
            background-repeat: no-repeat;
            background-position: center;
            background-size: 100%;
            height: 525px;
        }

        #filtre-carte {
            background-color: #79632b;
            opacity: 0.85;
            width: 100%;
            height: 100%;
        }

        #carte {
            position: absolute;
            margin-top: -525px;
        }

        #container-cave {
            background-image: url('vins.png');
            background-repeat: no-repeat;
            background-position: center;
            background-size: 100%;
            height: 525px;
        }

        #filtre-cave {
            background-color: #642021;
            opacity: 0.9;
            width: 100%;
            height: 100%;
        }

        #cave {
            position: absolute;
            margin-top: -525px;
        }

        #cave table {
            width: 1040px;
            margin-top: 20px;
        }
        
        #content * {
            color: #fff;
        }

        #galerie {
            background-color: rgba(0,0,0,0.88);
        }

        #images {
            height: 230px;
            overflow-x: auto;
            white-space: nowrap;
        }

        #images::-webkit-scrollbar {
            width: 12px;
            opacity: 0;
        }

        #images::-webkit-scrollbar-thumb {
            border: 3px solid #191919;
            border-radius: 10px;
            -webkit-box-shadow: inset 0 0 6px #111;
            background-color: #111;
        }

        #scroll-images {
            position: absolute;
            width: 100px;
            height: 320px;
            background-color: rgba(0,0,0,0.6);
            margin-top: -300px;
            margin-left: 954px;
        }

        #scroll-images > i.material-icons {
            font-size: 160px;
            margin-top: 90px;
            margin-left: -25px;
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

        #contact {
            background-color: #1E88E5;
            padding: 20px;
            color: #fff;
            text-align: center;
        }


    </style>

    <body>
        <div id="bandeau-contact">
            <span>FR | ESP | ENG</span>
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
                <li style="background: #f1f1f1"><a href="#accueil">Accueil</a></li>
                <li><a href="#carte">La carte</a></li>
                <li style="background: #e5e5e5"><a href="#cave">La cave</a></li>
                <li><a href="#galerie">La galerie</a></li>
            </ul>
        </div>

        <div id="menu-normal">
            <a id="a-accueil" href="#accueil">Accueil</a>
            <a href="#carte" style="padding-right: 4%">La carte</a>
            <a href="#cave" style="padding-left: 4%">La cave</a>
            <a href="#galerie">La galerie</a>
            <div>
                <img id="nautilus-normal" src="nautilus.png">
                <p>La Coquille</p>
            </div>
        </div>

        <div id="content">
            <div id="accueil">
                <div id="reserver">

                </div>
            </div>
            <div id="container-carte">
                <div id="filtre-carte"></div>
                <div id="carte">
                    <h1>La carte</h1>
                </div>
            </div>
            <div id="container-cave">
                <div id="filtre-cave"></div>
                <div id="cave">
                    <h1>La cave</h1>
                    <table>
                        <tbody>
                        <tr>
                            <td><span style= font-size:18px; ><strong>Nos Vins blancs</strong></span></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td><u>Vallée de la Loire</u></td>
                        </tr>
                        <tr>
                            <td>IGP Vin de pays d&#39;Urf&eacute;, Domaine G. Bonnefoy &quot;Roussanne&quot;</td>
                            <td>2014</td>
                            <td>75cl</td>
                            <td>38.00&euro;</td>
                        </tr>
                        <tr>
                            <td>AOP Pouilly Fum&eacute;, Domaine de Ladoucette</td>
                            <td>2014</td>
                            <td>75cl</td>
                            <td>49.00&euro;</td>
                        </tr>
                        <tr>
                            <td>AOP Sancerre, Domaine des Clairneaux</td>
                            <td>2015</td>
                            <td>75cl</td>
                            <td>39.00&euro;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td><u>Vall&eacute;e du Rh&ocirc;ne</u></td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>AOP Condrieu, Domaine F. Villard &quot;Les Terrasses du Palat&quot;</td>
                            <td>2014-2015</td>
                            <td>75cl</td>
                            <td>79.00&euro;</td>
                        </tr>
                        <tr>
                            <td>AOP Condrieu, Domaine S. Montez &quot;Chansons&quot;</td>
                            <td>2014</td>
                            <td>75cl</td>
                            <td>75.00&euro;</td>
                        </tr>
                        <tr>
                            <td>AOP Condrieu, Domaine S. Montez &quot;La grillette&quot;</td>
                            <td>Plusieurs dispo</td>
                            <td>75cl</td>
                            <td>94.00&euro;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td><span style= font-size:18px; ><strong>Nos Vins rouges</strong></span></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td><u>Bordeaux</u></td>
                        </tr>
                        <tr>
                            <td>AOP Montlouis, Domaine de La Taille aux Loups</td>
                            <td>2014</td>
                            <td>75cl</td>
                            <td>56.00&euro;</td>
                        </tr>
                        <tr>
                            <td>AOP Menetou-Salon, Ch&acirc;teau de Maupas</td>
                            <td>2014</td>
                            <td>75cl</td>
                            <td>30.00&euro;</td>
                        </tr>
                        <tr>
                            <td>AOP Savenni&egrave;res, Ch&acirc;teau Soucherie &quot;Clos des Perri&egrave;res&quot;</td>
                            <td>2014</td>
                            <td>75cl</td>
                            <td>70.00&euro;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td><u>Vall&eacute;e du Rh&ocirc;ne</u></td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>AOP Condrieu, Aur&eacute;lien Chataignier</td>
                            <td>2015</td>
                            <td>75cl</td>
                            <td>67.50&euro;</td>
                        </tr>
                        <tr>
                            <td>AOP St Joseph, Domaine Fran&ccedil;ois Villard &quot;Mairlant&quot;</td>
                            <td>2014-2015</td>
                            <td>75cl</td>
                            <td>56.00&euro;</td>
                        </tr>
                        <tr>
                            <td>AOP St Joseph, S. Montez</td>
                            <td>2014</td>
                            <td>75cl</td>
                            <td>48.00&euro;</td>
                        </tr>
                        <tr>
                            <td>AOP St Joseph, Julien Pilon &quot;Dimanche &agrave; Lima&quot;</td>
                            <td>2014</td>
                            <td>75cl</td>
                            <td>54.00&euro;</td>
                        </tr>
                        <tr>
                            <td>AOP St Joseph, Aur&eacute;lien Chataignier</td>
                            <td>2015</td>
                            <td>75cl</td>
                            <td>40.00&euro;</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div id="galerie">
                <h1>La galerie</h1>
                <div id="images">
                    <img src="galerie1.jpg">
                    <img src="galerie2.jpg">
                    <img src="galerie3.jpg">
                </div>
                <div id="scroll-images">
                    <i class="material-icons">chevron_right</i>
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
