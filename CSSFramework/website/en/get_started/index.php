<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-101506688-1');
    </script>
    <title>Creative Framework Get Started</title>
    <link rel="alternate" hreflang="en" href="../">
    <link rel="shortcut icon" href="../../lib/img/puzzle.png">
    <link href="../../lib/css/imports.css" rel="stylesheet">
    <script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>
</head>
<body>
<header id="top" class="header">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header navpadding">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand logopadding logo" href="../"><img class="navicon" alt="Brand"
                                                                         src="../../lib/img/logo.png"></a>
            </div>
            <div class="navbar-collapse collapse navpadding">
                <ul class="nav navbar-nav navbar-right">
                    <li><a class="nav-link active">Get Started</a></li>
                    <li><a class="nav-link" href="../typography/">Typography</a></li>
                    <li><a class="nav-link" href="../css/">CSS</a></li>
                    <li><a class="nav-link" href="../components/">Components</a></li>
                    <li><a class="nav-link" href="../templates/">Templates</a></li>
                    <li><a target="_self" class="nav-link" href="https://info-diploma-thesis.hagn.network/">Thesis</a></li>
                    <li><a class="nav-link" href="../../get_started/">de</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<aside class="aside">
    <ul class="section table-of-contents">
        <li class="aside-scroll"><a href="#download">Download</a></li>
        <li class="aside-scroll"><a href="#cdn">CDN</a></li>
        <li class="aside-scroll"><a href="#sourcecode">Source Code</a></li>
        <li class="aside-scroll"><a href="#includecss">Include CSS</a></li>
        <li class="aside-scroll"><a href="#includesass">Sass compiling</a></li>
        <li class="aside-scroll"><a href="#dom">DOM</a></li>
    </ul>
</aside>
<main class="content">
    <article class="row">
        <h1>Get Started</h1>
        <p class="intro">
            Start developing your first websites with Creative Framework. Start thinking about which of the provided methods you
            want to integrate our framework into your website. In this section you will find everything you need to include the framework.
        </p>
    </article>
    <div class="container-line">
        <hr>
    </div>
    <div class="row">
        <div class="subnav-mobile">
            <h3>Table of Content</h3>
            <nav>
                <ul class="dir_pad">
                    <li class="directory"><a href="#download">Download</a></li>
                    <li class="directory"><a href="#cdn">CDN</a></li>
                    <li class="directory"><a href="#sourcecode">Source Code</a></li>
                    <li  class="directory"><a href="#includecss">Include CSS</a></li>
                    <li class="directory"><a href="#includesass">Sass compile</a></li>
                    <li class="directory"><a href="#dom">DOM</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="container-line">
        <hr>
    </div>
    <article id="download" class="section scrollspy">
        <h2>Download</h2>
        <p>
            Creative Framework comes in two different file formats. Which of the user's preferences is left to him/her. Below is a short text
            describing the formats. To start with Creative Framework, you only need to download one of the two versions.
        </p>
        <div class="row">
            <div class="col xs12 l6 xl4">
                <h3>Creative Framework</h3>
                <p class="p-footer">
                    This is the standard CSS version of our framework. It is downloaded in a minified and a non minimized version.
                    This option should be used if no Sass prior knowledge is available.
                </p>
                <p>
                    <button type="button" onclick="location.href='index.php'" class="download">
                        Creative Framework
                    </button>
                </p>
            </div>
            <div class="col xs12 l6 xl4">
                <h3>Creative Sass</h3>
                <p class="p-footer">
                    This is the sass version of our frameworks which contains all sass source files
                    and can be changed. This option requires a Sass compiler. Should only be used with prior knowledge.
                </p>
                <p>
                    <button type="button" onclick="location.href='index.php'" class="download">
                        Creative Sass
                    </button>
                </p>
            </div>
        </div>
    </article>
    <div class="container-line">
        <hr>
    </div>
    <article id="cdn" class="section scrollspy">
        <h2>CDN</h2>
        <p>
            You can also find Creative Framework on a CDN. Through the tag below, you integrate our framework over the web.
            The stylesheet is already compiled and minified.
        </p>
        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp><head>
    <link href="http://www.creative-puzzle.com/css" rel="stylesheet" type="text/css">
</head></xmp></pre>
            </code>
        </div>
    </article>
    <div class="container-line">
        <hr>
    </div>
    <article id="sourcecode" class="section scrollspy">
        <h2>Source Code</h2>
        <p>
            The Creative Framework source code contains a zip file which includes the folder structure listed below.
            It includes the compiled files as well as the sass files and javascript files.
        </p>
        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp>creative_framework/
&#9500;&#9472;&#9472; dist/
&#9474; &#9500;&#9472;&#9472; css/
&#9474; &#9492;&#9472;&#9472; js/
&#9500;&#9472;&#9472; html/
&#9474; &#9492;&#9472;&#9472; templates/
&#9500;&#9472;&#9472; js/
&#9492;&#9472;&#9472; scss/</xmp></pre>
            </code>
        </div>
    </article>
    <div class="container-line">
        <hr>
    </div>
    <article id="includecss" class="section scrollspy">
        <h2>Include CSS</h2>
        <p>
            With the tag below you can easily integrate the downloaded CSS version into your website. Caution, depending on the directory
            in which the Creative Framework CSS file is located, the path must be changed. In the example below, the CSS file is located
            in the same directory as the HTML file that is linked to it. With <i class="tagname">' / '</i> you can
            change deeper into directories and with <i class="tagname">' ../ '</i> you can change from a directory.
        </p>
        <div class="codeBox">
            <code>
                <pre class="prettyprint"><xmp><link href="creative_framework.min.css" rel="stylesheet" type="text/css"></xmp></pre>
            </code>
        </div>
    </article>
    <div class="container-line">
        <hr>
    </div>
    <article id="includesass" class="section scrollspy">
        <h2 class="title">Sass compiling</h2>
        <p>
            This area is only relevant if you have chosen the Sass version of the framework. Instead of a large CSS file, a folder with many
            .sass files is downloaded that has the folder structure listed below. Each Sass file contains styles for different components.
        </p>
        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp>sass/
&#9500;&#9472;&#9472; colors
&#9500;&#9472;&#9472; gridSystem
&#9500;&#9472;&#9472; helper
&#9500;&#9472;&#9472; header
&#9500;&#9472;&#9472; footer
&#9500;&#9472;&#9472; buttons
&#9500;&#9472;&#9472; forms
&#9500;&#9472;&#9472; typografie
&#9500;&#9472;&#9472; master</xmp></pre>
            </code>
        </div>
    </article>
    <div class="container-line">
        <hr>
    </div>
    <article id="dom" class="section scrollspy">
        <h2>DOM</h2>
        <p>
            A web page is initially presented to the browser as a simple text formatted with the markup language HTML.
            While the browser receives the code via the network, it processes it from top to bottom. This task is performed by the so-called parser.
            The parser converts the HTML code into an object structure, which is then stored in the working memory.
            This object structure consists of nested nodes, such as element nodes, attribute nodes, and text nodes arranged in a tree structure.
            The browser uses this object structure for all further operations, not the HTML source code that is usually used.
        </p>
        <div class="row content_img">
            <div class="col xs12">
                <img class="img-responsive dom_demo" src="../../lib/img/get_started/dom.png" alt="Document Object Model Abbildung">
            </div>
        </div>
    </article>
</main>
<footer class="footer">
    <ul class="sociallist">
        <li><a target="_blank" href="https://www.facebook.com/CreativePuzzleDevelop/"><img src="../../lib/img/facebook.png"
                                                                                           alt="facebook logo"
                                                                                           class="img-responsive socialmedia"></a>
        </li>
        <li><a target="_blank" href="https://www.instagram.com/creative.puzzle/"><img src="../../lib/img/instagram.png"
                                                                                      alt="instagram logo"
                                                                                      class="img-responsive socialmedia"></a>
        </li>
        <li><a target="_blank" href="https://twitter.com/creative_puzzle?lang=de"><img src="../../lib/img/twitter.png"
                                                                                       alt="twitter logo"
                                                                                       class="img-responsive socialmedia"></a>
        </li>
    </ul>
    <div class="col-footer text-center">
        <button type="button" class="btnimpr btn btn-md" data-toggle="modal" data-target="#Impressum">
            Impressum
        </button>
    </div>
    <div class="modal fade " id="Impressum" tabindex="-1" role="dialog" aria-labelledby="ImpressumLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="ImpressumLabel">Impressum</h4>
                </div>
                <div class="modal-body">
                    <h3>Inhaber</h3>
                    <p>Name: Maximilian Hagn</p>
                    <h3>Adresse</h3>
                    <p>
                        Straße: Rudolf-Waisenhorn-Gasse 138/4
                    </p>
                    <p>
                        PLZ: 1230
                    </p>
                    <p>
                        Ort: Wien
                    </p>
                    <p>
                        Land: Österreich
                    </p>
                    <h3>Kontakt</h3>
                    <p>
                        Telefon: <a href="tel:+436769579022">+43 676 9579022</a>
                    </p>
                    <p>
                        E-Mail:
                    </p>
                    <ul class="imprmail">
                        <li><a href="mailto:maximilian.hagn@htl.rennweg.at" target="_blank">maximilian.hagn@htl.rennweg.at</a>
                        </li>
                        <li><a href="mailto:web.creativePuzzle@gmail.com"
                               target="_blank">web.creativePuzzle@gmail.com</a></li>
                        <li><a href="mailto:team.creativePuzzle@gmail.com"
                               target="_blank">team.creativePuzzle@gmail.com</a></li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Schließen</button>
                </div>
            </div>
        </div>
    </div>
    <p class="p-footer centered">Created by CreativePuzzle</p>
</footer>
<script src="https://code.jquery.com/jquery-3.3.0.js" integrity="sha256-TFWSuDJt6kS+huV+vVlyV1jM3dwGdeNWqezhTxXB/X8="
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
<script src="https://www.gstatic.com/charts/loader.js"></script>
<script src="../../lib/js/validator.js"></script>
<script src="../../lib/js/bootstrap.js"></script>
<script src="../../lib/js/main.js"></script>
<script>
    $(document).ready(function () {
        $('.scrollspy').scrollSpy();
    });
</script>
</body>
</html>
