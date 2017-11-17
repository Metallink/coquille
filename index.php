

<html>
    <head>
        <title>La Coquille</title>
        <link rel="icon" type="image/png" href="favicon.png" />
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

        body * {
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
            margin: 10px 69px;
        }

        #bandeau-contact > span:last-child > img {
            width: 15px;
            vertical-align: bottom;
            margin-right: 7px;
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

        #menu-lateral-droit {
            position: fixed;
            font-family: inherit;
            height: 100%;
            width: 20%;
            margin-top: 135px;
            right: -30px;
            font-size: 18px;
        }

        #menu-lateral-droit th {
            padding-bottom: 15px;
            font-weight: bold;
        }

        #menu-lateral-droit td {
            padding-bottom: 10px;
        }

        #menu-lateral-droit td:first-child {
            width: 103px;
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
            margin: auto 2%;
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

        #content * {
            color: #fff;
        }

        #cheffe, #carte, #cave, #galerie, #contact {
            padding: 20px 50px;
        }

        #cheffe {
            position: absolute;
            margin-top: -590px;
        }

        #accueil {
            background-image: url('photo.jpg');
            background-repeat: no-repeat;
            background-position: center;
            background-size: 100%;
            height: 600px;
        }

        #container-reserver {
            display: block;
            width: 100%;
            height: 100%;
            padding-left: 15%;
            padding-top: 80px;
        }

        #reserver {
            background-color: rgba(255,255,255,0.9);
            width: 220px;
            height: 306px;
            border-radius: 5px;
            border: 2px solid #77590d;
            padding: 25px;
        }

        #reserver * {
            color: #000;
            font-size: 18px;
        }

        #reserver h2 {
            font-size: 22px;
            margin-bottom: 20px;
        }

        #reserver .blue {
            /*color: #0087ce;*/
            color: #77590d;
        }

        #reserver .input {
            border: 1px solid grey;
            border-radius: 1px;
            padding: 5px;
            margin: 10px auto;
            color: gray;
            background-color: #FFF;
        }

        #confirm {
            border: 1px solid #77590d;
            padding: 10px 15px;
            width: 90px;
            text-align: center;
            background-color: #e8ddc2;
            color: #2f2201;
            border-radius: 3px;
            margin: 25px auto;
        }
        
        #container-cheffe {
        	background-image: url('cheffe.jpg');
            background-repeat: no-repeat;
            background-position: center;
            background-size: 100%;
            height: 600px;
            text-shadow: #805f00 1px 1px, #805f00 -1px 1px, #805f00 -1px -1px, #805f00 1px -1px;
        }
        
        #texte-cheffe {
        
        	width: 1020px;
        	height: 40px;
        }
        
        blockquote {
			font-style: normal;
			padding: 24px 40px 16px 25px;
			line-height: 48px;
		}

		blockquote p {
			font-size:18px;
			text-align:right;
			padding:0;
			color: #134977;
			display:block;
		}

		blockquote p.citation {
			font-size: 29px;
            text-align: left;
            padding: 0 0 10px 10px;
            position: relative;
            width: 730px;
		}

		blockquote p.citation:before, blockquote p.citation:after {
			content: '”';
			font-size: 32px;
			font-family:Georgia, "Times New Roman", Times, serif;
			color: #fff;
			font-weight:bold;
			vertical-align:text-top;
			line-height:0.8
		}

		blockquote p.citation:before {
			content: '“';
            margin-right: 10px;
		}

        blockquote p.citation:after {
            margin-left: 6px;
        }

        #container-carte {
            background-image: url('carte.jpg');
            background-repeat: no-repeat;
            background-position: center;
            background-size: 100%;
            height: 718px;
            text-shadow: #562b00 1px 1px, #562b00 -1px 1px, #562b00 -1px -1px, #562b00 1px -1px;
        }
        
        #filtre-cheffe {
        	background-color: #c19219;
            opacity: 0.75;
            width: 100%;
            height: 100%;

            /*display: flex;*/
            /*justify-content: space-around;*/
            /*flex-wrap: wrap;*/
        }

        #filtre-carte {
            background-color: #774c1b;
            opacity: 0.75;
            width: 100%;
            height: 100%;

            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .menu-carte {
             height: 550px;
             width: 450px;
             text-align: center;
        }
        
        .menu-carte img {
            width: 130px;
        }

        #container-cave {
            background-image: url('vins.png');
            background-repeat: no-repeat;
            background-position: center;
            background-size: 120%;
            height: 625px;
            text-shadow: #642021 1px 1px, #642021 -1px 1px, #642021 -1px -1px, #642021 1px -1px;
        }

        #filtre-cave {
            background-color: #642021;
            opacity: 0.9;
            width: 100%;
            height: 100%;
        }

        #cave {
            position: absolute;
            margin-top: -625px;
        }

        #cave table {
            width: 1040px;
            margin-top: 20px;
        }

        #cave table .region {
            padding-bottom: 7px;
        }

        #cave table td {
            padding-bottom: 3px;
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
            width: 116px;
            height: 322px;
            background-color: rgba(0,0,0,0.75);
            margin-top: -302px;
            margin-left: 936px;
        }

        #scroll-images > i.material-icons {
            font-size: 160px;
            margin-top: 90px;
            margin-left: -18px;
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
            /*background-color: #1E88E5;*/
            background-color: #a07e28;
            padding: 40px 90px;
            color: #fff;
        }

        .etoiles {
            letter-spacing: -8px;
            color: #6d5c25;
            vertical-align: super;
            margin-left: -5px;
        }

        #menu-normal .etoiles {
            letter-spacing: -4px;
            margin-left: -2px;
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
                <span>Chemin de la Coquille - 64310 BIDART</span>
            </span>
            <span><img src="pastille.png">Ouvert</span>
        </div>

        <div id="menu-lateral">
            <img id="nautilus-lateral" src="nautilus.png">
            <span id="coquille-lateral">La Coquille<span class="etoiles">☆ ☆ ☆</span></span>
            <ul>
                <li style="background: #e5e5e5"><a href="#accueil">Accueil</a></li>
                <li><a>Le Chef</a></li>
                <li><a href="#carte">Spécialités</a></li>
                <li style="background: #c3c3c3"><a href="#cave">La cave</a></li>
                <li><a href="#galerie">La galerie</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>

<!--        position: absolute;-->
<!--        left: 1060px;-->
<!--        top: 580px;-->
<!--        font-size: 33px;-->
<!--        font-weight: bold;-->
<!--        width: 410px;-->
<!--        text-shadow: #484848 5px 1px, #000000 -1px 1px, #000000 -1px -1px, #000000 1px -1px;-->
<!--        text-align: justify;-->
<!--        font-family: 'Satisfy', cursive;-->

        <div id="menu-lateral-droit">
            <table>
                <thead>
                <tr>
                    <th colspan="10" style="text-align: left">Horaires d'ouvertures</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Lundi</td>
                    <td>11:30-15:00</td>
                </tr>
                <tr>
                    <td>Mardi</td>
                    <td>11:30-15:00, 19:00-23:00</td>
                </tr>
                <tr>
                    <td>Mercredi</td>
                    <td>11:30-15:00, 19:00-23:00</td>
                </tr>
                <tr>
                    <td>Jeudi</td>
                    <td>11:30-15:00, 19:00-23:00</td>
                </tr>
                <tr style="font-weight: bold;">
                    <td>Vendredi</td>
                    <td>11:30-15:00, 19:00-23:00</td>
                </tr>
                <tr>
                    <td>Samedi</td>
                    <td>19:00-23:00</td>
                </tr>
                <tr>
                    <td>Dimanche</td>
                    <td>Fermé</td>
                </tr>
                </tbody>
            </table>
        </div>

        <div id="menu-normal">
            <a id="a-accueil" href="#accueil">Accueil</a>
            <a>Le Chef</a>
            <a href="#carte" style="padding-right: 5%">Spécialités</a>
            <a href="#cave" style="padding-left: 5%">La cave</a>
            <a href="#galerie">La galerie</a>
            <a href="#contact">Contact</a>
            <div>
                <img id="nautilus-normal" src="nautilus.png">
                <p>La Coquille<span class="etoiles">☆☆☆</span></p>
            </div>
        </div>

        <div id="content">
            <div id="accueil">
                <div id="container-reserver">
                    <div id="reserver">
                        <h2 class="blue">Réserver</h2>
                        <div class="input">Nom</div>
                        <div class="input">Téléphone</div>
                        <div style="margin: 20px auto">
                            <span>Nb. pers. : </span>
                            <span style="background-color: #FFF;
    margin-left: 88px;
    border: 1px solid grey;
    padding: 2px;
    padding-left: 9px;
    font-size: 18px;" class="blue">2 <img style="width: 9px;margin-bottom: 1px;" src="spinner.png" /></span>
                        </div>
                        <div style="margin: 10px auto 20px auto;">
                            <span>Jour : </span>
                            <span style="margin-left: 41px;" class="blue">22/10/2017 <i class="material-icons blue" style="font-size: 29px">date_range</i></span>
                        </div>
                        <div style="margin: 10px auto 10px auto;">
                            <span>Heure : </span>
                            <span style="background-color: #FFF;
    margin-left: 66px;
    border: 1px solid grey;
    padding: 3px;
    font-size: 18px;" class="blue">12:30 <i class="material-icons blue">arrow_drop_down</i></span>
                        </div>
                        <div id="confirm">Confirmer</div>
                    </div>
                </div>
            </div>
            <div id="container-cheffe">
                <div id="filtre-cheffe">
            	</div>
                <div id="cheffe">
                    <h1>Le Chef</h1>
                    <div id="texte-cheffe">
                        <blockquote>
                            <p class="citation">Nous vous invitons à éveiller vos papilles gustatives, déguster nos plats gastronomiques réalisés à partir des meilleurs produits locaux.</p>
                            <p>Sophie Millet - Chef 3 étoiles</p>
                        </blockquote>
                        <p style="font-size: 22px; text-align: justify; padding-right: 20px; margin-top: 89px; line-height: 28px;">Le Chef Millet meilleur ouvrier de France 2015 et 2016 a pu se former auprès des plus grands à l'école Chauvin à Paris.<br><br><br>Après avoir cotoyée les plus grands restaurants pendant 17 ans, La Coquille est le fruit de la passion des mets de sa terre natale.</p>
                    </div>
                </div>
           	</div>
            <div id="container-carte">
                <div id="filtre-carte">
                    <h1 style="width: 100%; margin: auto; margin-top: 15px; margin-left: 50px; margin-bottom: -50px;"/>Spécialités</h1>
                    <div class="menu-carte">
                        <p style="text-decoration: underline; font-size: 28px;">Menu Mer</p>
                        <p style="margin-top:20px;">40€</p>
                        <img src="trait-horizontal.png">
                        <p style="text-decoration: underline; font-size: 18px; padding-bottom: 7px;">Entrée</p>
                        <p>Bar de ligne de St-Jean-de-Luz</p>
                        <p style="padding-top: 7px; padding-bottom: 7px;">ou</p>
                        <p>St-Jacques poêlées accompagnées d’une soupe de châtaigne</p>
                        <img src="trait-horizontal.png">
                        <p style="text-decoration: underline; font-size: 18px; padding-bottom: 7px;">Plat</p>
                        <p>Noix de St-Jacques déglacées au Jurançon sur un lit de mâche</p>
                        <p style="padding-top: 7px; padding-bottom: 7px;">ou</p>
                        <p>La sole rôtie servi avec son crémeux de pomme de terre</p>
                        <img src="trait-horizontal.png">
                        <p style="text-decoration: underline; font-size: 18px; padding-bottom: 7px;">Dessert</p>
                        <p>Variation autour de la figue</p>
                        <p style="padding-top: 7px; padding-bottom: 7px;">ou</p>
                        <p>Dôme de mousse caraïbes</p>
                        
                    </div>

                    <div class="menu-carte" id="menu-terre">
                        <p style="text-decoration: underline; font-size: 28px;">Menu Terre</p>
                        <p style="margin-top:20px;">50€</p>
                        <img src="trait-horizontal.png">
                        <p style="text-decoration: underline; font-size: 18px; padding-bottom: 7px;">Entrée</p>
                        <p>Poitrine laquée de cochon de « Kintoa »</p>
                        <p style="padding-top: 7px; padding-bottom: 7px;">ou</p>
                        <p>Escalope de foie gras poêlée servie avec duo de mangue à la coriandre</p>
                        <img src="trait-horizontal.png">
                        <p style="text-decoration: underline; font-size: 18px; padding-bottom: 7px;">Plat</p>
                        <p>Filet de magret barbet sauche champagne</p>
                        <p style="padding-top: 7px; padding-bottom: 7px;">ou</p>
                        <p>Selle d’agneau rôti, son duo de courge butternut</p>
                        <img src="trait-horizontal.png">
                        <p style="text-decoration: underline; font-size: 18px; padding-bottom: 7px;">Dessert</p>
                        <p>Oreilles en millefeuille</p>
                        <p style="padding-top: 7px; padding-bottom: 7px;">ou</p>
                        <p>Ganache tendre à la passion, son croustillant spéculos</p>
                    </div>
                    <p style="position: absolute;
    margin-top: 665px;
    margin-left: -205px;">Vous pouvez également consulter l'ensemble de notre carte en <span style="color: #ffd15d;
    font-weight: bold;">cliquant ici</span>.</p>
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
                            <td class="region"><u>Vallée de la Loire</u></td>
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
                            <td class="region"><u>Vall&eacute;e du Rh&ocirc;ne</u></td>
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
                            <td>Plusieurs en stock</td>
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
                            <td class="region"><u>Bordeaux</u></td>
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
                            <td class="region"><u>Vall&eacute;e du Rh&ocirc;ne</u></td>
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
            <div id="contact" style="display: flex;">
                <div style="font-size: 18px; width: 100%">
                    <p style="font-size: 22px; font-weight: bold">Contactez-nous : </p>
                    <span style="display: block; margin: 40px;">
                        <a id="tel" href="tel:+33561347892"><i class="material-icons style="margin-right: 2px"">phone</i>+33 (0)5 61 34 78 92</a><span style="vertical-align: super;">*</span>
                    </span>
                    <span style="display: block; margin-left: 40px">
                        <a id="tel" href="tel:+33561347892"><i class="material-icons" style="margin-right: 5px">mail</i>contact@lacoquille.fr</a>
                    </span>
                    <span style="display: block; margin: 40px;">
                        <i class="material-icons">location_on</i>
                        <span style="margin-left: 30px; display: block; margin-top: -25px;">
                            <p>Restaurant La Coquille</p>
                            <p>Chemin de la Coquille</p>
                            <p>64310 BIDART</p>
                        </span>
                    </span>
                    <span style="font-size: 12px; font-style: italic; margin-left: 40px">* se référencer aux horaires d'ouvertures</span>
                </div>
                <div>
                    <img style="width: 400px; box-shadow: 1px 1px 12px #555;" src="maps.png">
                </div>
            </div>
        </div>
    </body>
</html>
