<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Florian Schwingenschlögl">

    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-101506688-1');
    </script>

    <title>Creative Framework Get Started</title>

    <link rel="alternate" hreflang="en" href="../en">
    <link rel="shortcut icon" href="../lib/img/puzzle.png">
    <link href="../lib/css/imports.css" rel="stylesheet">

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
                                                                                  src="../lib/img/logo.png"></a>
            </div>
            <div class="navbar-collapse collapse navpadding">
                <ul class="nav navbar-nav navbar-right">
                    <li><a class="nav-link active">Get Started</a></li>
                    <li><a class="nav-link" href="../typography/">Typografie</a></li>
                    <li><a class="nav-link" href="../css/">CSS</a></li>
                    <li><a class="nav-link" href="../components/">Komponenten</a></li>
                    <li><a class="nav-link" href="../templates/">Vorlagen</a></li>
                    <li><a target="_self" class="nav-link" href="https://info-diploma-thesis.hagn.network/">Thesis</a></li>
                    <li><a class="nav-link" href="../en/get_started/">en</a></li>
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
        <li class="aside-scroll"><a href="#includesass">Sass kompilieren</a></li>
        <li class="aside-scroll"><a href="#dom">DOM</a></li>
    </ul>
</aside>

<main class="content">
    <article class="row">
        <h1>Get Started</h1>
        <p>Beginn mit Creative Framework deine ersten eigenen Websites zu entwickeln.
            Starte damit dir zu überlegen auf welche der bereitgestellten Methoden du unser Framework
            in deine Website integrieren willst. In diesm Abschnitt findest du alles zur
            Einbindung des Frameworks.
        </p>
    </article>
    <div class="container-line">
        <hr>
    </div>

    <div class="row">
        <div class="subnav-mobile">
            <h3>Inhaltsverzeichnis</h3>
            <nav>
            <ul class="dir_pad">
                <li class="directory"><a href="#download">Download</a></li>
                <li class="directory"><a href="#cdn">CDN</a></li>
                <li class="directory"><a href="#sourcecode">Source Code</a></li>
                <li  class="directory"><a href="#includecss">Include CSS</a></li>
                <li class="directory"><a href="#includesass">Sass kompilieren</a></li>
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
                Creative Framework gibt es als zwei unterschiedliche Dateiformate. Welche der Benutzer bevorzugt
                bleibt Ihm überlassen. Unten finden Sie einen kurzen Text der die Formate bechreibt. Um mit
                Creative Framework zu starten, muss nur eine der beiden Versionen heruntergeladen werden
            </p>
            <div class="row">
                <div class="col xs12 l6 xl4">
                    <h3>Creative Framework</h3>
                    <p class="p-footer">
                        Das ist die Standart CSS Version unseres Frameworks es wird in einer
                        minified Version und einer unminified Version heruntergeladen. Diese Option sollte
                        verwendet werden wenn kein Sass Vorwissen vorhanden ist.
                    </p>
                    <p>
                        <a class="download" href="../lib/creative_framework/css_creative_framework.css" download="css_creative_framework.css">
                            Creative Framework
                        </a>
                    </p>
                </div>
                <div class="col xs12 l6 xl4">
                    <h3>Creative Sass</h3>
                    <p class="p-footer">
                        Das ist die Sass Version unseres Frameworks sie beinhaltet alle Sass-Quelldatein
                        und kann nach belieben verändert werden. Für diese Option wird ein Sass-Compiler benötigt.
                        Sollte nur mit Vorwissen verwendet werden.
                    </p>
                    <p>
                        <a class="download" href="../lib/creative_framework/sass_creative_framework.zip" download="creative_sass.zip">
                            Creative Sass
                        </a>
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
            Du kannst Creative Framework auch unter einer CDN finden. Durch den unten
            angeführten Tag bindest du unser das Framework über das Web ein. Das Sylesheet ist bereits compiled und
            minified.
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
            Der Creative Frame Source Code enthält ein Zip File welches die unten angeführte
            Ordnerstruktur enthält. Er umfasst die compilierten Files als auch die Sass Files sowie
            Javascript Files.
        </p>
        <div class="row center margin-bottom">
            <div class="col xs12 s12 m8 l6 xl3">
                <a class="download" href="../lib/creative_framework/source_code.zip" download="source_code.zip">
                    Source Code
                </a>
            </div>
        </div>
        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp>creative_framework/
├──source_code/
    ├── css/
        ├── animations
        ├── buttons
        ├── colorSystem
        ├── dropdown
        ├── fonts
        ├── footer
        ├── form
        ├── gridSystem
        ├── header
        ├── helper
        ├── links
        ├── master
        ├── tabs
        ├── typografie
    ├── sass/
        ├── animations
        ├── buttons
        ├── colorSystem
        ├── dropdown
        ├── fonts
        ├── footer
        ├── form
        ├── gridSystem
        ├── header
        ├── helper
        ├── links
        ├── master
        ├── tabs
        ├── typografie</xmp></pre>
            </code>
        </div>
    </article>
    <div class="container-line">
        <hr>
    </div>

    <article id="includecss" class="section scrollspy">
        <h2>Include CSS</h2>
        <p>
            Mit dem unten angeführten Tag können sie die heruntergeladene CSS Version ganz einfach
            in ihre Website einbinden. Vorsicht, je nachdem in welchem Verzeichnis sich die
            Creative Framework CSS Datei befindet muss der Pfad geändert werden. In Beispiel unterhalb
            liegt die CSS Datei im selben Verzeichnis wie die HTML Datei in der verlinkt wird.
            Mit <i class="tagname">/</i> können sie tiefer in Verzeichnisse wechseln und mit <i class="tagname">../</i> aus einem Verzeichnis
            hinaus wechseln.
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
        <h2 class="title">Sass kompilieren</h2>
        <p>
            Dieser Bereich ist nur dann relevant wenn du dich für die Sass Version des Frsmworks entschieden hast.
            Anstatt eines großen CSS Datei wird ein Ordner mit vielen .sass Dateien heruntergeladen
            der die unten angeführte Ordnerstruktur besitzt. Jede Sass Datei beinhaltet Styles für
            verschiedene Komponenten.
        </p>
        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp>sass/
├── animations
├── buttons
├── colorSystem
├── dropdown
├── fonts
├── footer
├── form
├── gridSystem
├── header
├── helper
├── links
├── master
├── tabs
├── typografie</xmp></pre>
            </code>
        </div>
    </article>
    <div class="container-line">
        <hr>
    </div>

    <article id="dom" class="section scrollspy">
        <h2>DOM</h2>
        <p>
            Eine Webseite liegt dem Browser zunächst als einfacher Text, der mit der Auszeichnungssprache HTML formatiert ist, vor.
            Während der Browser den Code über das Netz empfängt, verarbeitet er ihn von oben nach unten. Diese Aufgabe übernimmt der
            sogenannte Parser. Der Parser überführt den HTML-Code in eine Objektstruktur, die dann im Arbeitsspeicher vorgehalten wird.
            Diese Objektstruktur besteht aus verschachtelten Knoten, wie Elementknoten, Attributknoten und Textknoten, die in einer
            Baumstruktur angeordnet sind. Der Browser nutzt für alle weiteren Operationen diese Objektstruktur, nicht den HTML-Quellcode,
            an dem üblicherweise gearbeitet wird.
        </p>
        <div class="row content_img center">
            <div class="col xs12">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="881px" version="1.1" content="&lt;mxfile userAgent=&quot;Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36&quot; version=&quot;8.5.3&quot; editor=&quot;www.draw.io&quot;&gt;&lt;diagram id=&quot;9a2782a8-7552-b0f5-acec-9bc0b22eff05&quot; name=&quot;Page-1&quot;&gt;7VtBd6MgEP41ObYvghpz3Kbt7qF76mG3R6JE2RrJI9gk++sXKyQaTJPdLfjCs5fCDAh882VmBBzB2XL7laFV9p0mOB+BcbIdwfsRAGA8icS/SrKrJWHk1YKUkaQWNQTP5DeWwrGUliTB61ZDTmnOyaotjGlR4Ji3ZIgxumk3W9C8PeoKpVgTPMco16U/SMKzWhqByUH+DZM0UyN74bTWzFH8mjJaFnK8EYCL979avUTqWXKh6wwldNMQwYcRnDFKeV1abmc4r7BVsNX9Hk9o9/NmuOCXdAB1hzeUl3LpHG/5CIS56H43Z6KUViU5W75TCL2vEVdPGQv1JiMcP69QXGk3ghNClvFlLmqeKC5Ins9oTtl7X7iIYhzHQr7mjL7ihmYeBX4w3o/3hpmYzsmleXvABBExXWLOdqKJ7BBCibHkoDeV9c3Bop6yQ9awpuqHJInS/aMPQIqCxLIbV6jhijhnZF5ybBjcJMBR4neBG4E5DEND4MLAHri+Bi7O8bKauWFoEY4WnbwN4wjPF2agjSwiC6EGGE6EZ5RVynhGU1qg/OEgvWtD2oAPbwn/WYlvA1l7kY0EFGzXUFXVF9lrzRHjXyonLgQFLbCSPZJq3rJ/ctRCSBr6X5jznQwrqORUiA5zf6J0JceqV1st8WNjCURoyWLZShpEzCnFstWk26QM54iTt/bT/8dAgUb9ORVB1gXewwDeBi3mg8Cmxw4G6p+nftgf9UON+hlGiRPUv/HbLt8u8f2B+OeJP9GJH1ki/kQnfoW3C8T3jojvhTrxI0O8jzRYExqXzqSRe3/RQxqpfLVJl3IdbkNtaDT9hhdachzKc5g2wynPPr5eE9lKaqBn3kTXH3y7TBRYspAauxEnSLEq3QgS/lGQgNBm4mkhSjjAfbX/3eC+rQCixm5uDxOeG9/C7OWlyyr3VfY5hOYPuQ86QrNvK3uaDib6RxPZejNWv8QhgvytiaxlT0CLIMiJ6LHfovsgekxMJU5goP0FtIc90l4//3XnpSHs86XB0w9/n0jx6sSNhb3DkMD6XgewY1NOxcJmkQNOpePs1zth1c/3Kvrp7z1dOkH9G9gj9T39aFGoXLim40/Pw+qbQlU/t+K7lRvXn3xwfFehC9nAFLL60VXG8MIJZL3oPGNN4QqGvPqSEDjtCIHQVgicuutUjvPqLuqHpqg/XAK5gPrKQL1QXw3uXpYS9pilgOHa3yXE7ziEskd8/RSqLrrA/UlwnvtTU9zv+bb3dZxwdDn9xrc6n8p9UT18+/Oua3xgBR/+AA==&lt;/diagram&gt;&lt;/mxfile&gt;" onclick="(function(svg){var src=window.event.target||window.event.srcElement;while (src!=null&amp;&amp;src.nodeName.toLowerCase()!='a'){src=src.parentNode;}if(src==null){if(svg.wnd!=null&amp;&amp;!svg.wnd.closed){svg.wnd.focus();}else{var r=function(evt){if(evt.data=='ready'&amp;&amp;evt.source==svg.wnd){svg.wnd.postMessage(decodeURIComponent(svg.getAttribute('content')),'*');window.removeEventListener('message',r);}};window.addEventListener('message',r);svg.wnd=window.open('https://www.draw.io/?client=1&amp;lightbox=1&amp;edit=_blank');}}})(this);" viewBox="0 0 881 356" style="cursor:pointer;max-width:100%;max-height:356px;"><defs/><g transform="translate(0.5,0.5)"><rect x="670" y="105" width="120" height="30" fill="#f8cecc" stroke="#b85450" pointer-events="none"/><g transform="translate(719.5,113.5)"><switch><foreignObject style="overflow:visible;" pointer-events="all" width="20" height="12" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility"><div xmlns="http://www.w3.org/1999/xhtml" style="display: inline-block; font-size: 12px; font-family: Helvetica; color: rgb(0, 0, 0); line-height: 1.2; vertical-align: top; width: 20px; white-space: nowrap; word-wrap: normal; text-align: center;"><div xmlns="http://www.w3.org/1999/xhtml" style="display:inline-block;text-align:inherit;text-decoration:inherit;">text<br /></div></div></foreignObject><text x="10" y="12" fill="#000000" text-anchor="middle" font-size="12px" font-family="Helvetica">text&lt;br&gt;</text></switch></g><rect x="670" y="50" width="120" height="30" fill="#d5e8d4" stroke="#82b366" pointer-events="none"/><g transform="translate(707.5,58.5)"><switch><foreignObject style="overflow:visible;" pointer-events="all" width="44" height="12" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility"><div xmlns="http://www.w3.org/1999/xhtml" style="display: inline-block; font-size: 12px; font-family: Helvetica; color: rgb(0, 0, 0); line-height: 1.2; vertical-align: top; width: 45px; white-space: nowrap; word-wrap: normal; text-align: center;"><div xmlns="http://www.w3.org/1999/xhtml" style="display:inline-block;text-align:inherit;text-decoration:inherit;">attribute<br /></div></div></foreignObject><text x="22" y="12" fill="#000000" text-anchor="middle" font-size="12px" font-family="Helvetica">attribute&lt;br&gt;</text></switch></g><rect x="670" y="0" width="120" height="30" fill="#dae8fc" stroke="#6c8ebf" pointer-events="none"/><g transform="translate(708.5,8.5)"><switch><foreignObject style="overflow:visible;" pointer-events="all" width="43" height="12" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility"><div xmlns="http://www.w3.org/1999/xhtml" style="display: inline-block; font-size: 12px; font-family: Helvetica; color: rgb(0, 0, 0); line-height: 1.2; vertical-align: top; width: 44px; white-space: nowrap; word-wrap: normal; text-align: center;"><div xmlns="http://www.w3.org/1999/xhtml" style="display:inline-block;text-align:inherit;text-decoration:inherit;">element<br /></div></div></foreignObject><text x="22" y="12" fill="#000000" text-anchor="middle" font-size="12px" font-family="Helvetica">element&lt;br&gt;</text></switch></g><path d="M 454 165 L 454 135 L 220 135 L 220 105" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/><rect x="393.5" y="165" width="120" height="30" fill="#dae8fc" stroke="#6c8ebf" pointer-events="none"/><g transform="translate(440.5,173.5)"><switch><foreignObject style="overflow:visible;" pointer-events="all" width="25" height="12" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility"><div xmlns="http://www.w3.org/1999/xhtml" style="display: inline-block; font-size: 12px; font-family: Helvetica; color: rgb(0, 0, 0); line-height: 1.2; vertical-align: top; width: 27px; white-space: nowrap; word-wrap: normal; text-align: center;"><div xmlns="http://www.w3.org/1999/xhtml" style="display:inline-block;text-align:inherit;text-decoration:inherit;">body<br /></div></div></foreignObject><text x="13" y="12" fill="#000000" text-anchor="middle" font-size="12px" font-family="Helvetica">body&lt;br&gt;</text></switch></g><path d="M 60 165 L 60 135 L 220 135 L 220 105" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/><rect x="0" y="165" width="120" height="30" fill="#dae8fc" stroke="#6c8ebf" pointer-events="none"/><g transform="translate(46.5,173.5)"><switch><foreignObject style="overflow:visible;" pointer-events="all" width="27" height="12" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility"><div xmlns="http://www.w3.org/1999/xhtml" style="display: inline-block; font-size: 12px; font-family: Helvetica; color: rgb(0, 0, 0); line-height: 1.2; vertical-align: top; width: 27px; white-space: nowrap; word-wrap: normal; text-align: center;"><div xmlns="http://www.w3.org/1999/xhtml" style="display:inline-block;text-align:inherit;text-decoration:inherit;">head<br /></div></div></foreignObject><text x="14" y="12" fill="#000000" text-anchor="middle" font-size="12px" font-family="Helvetica">head&lt;br&gt;</text></switch></g><path d="M 220 75 L 220 30" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/><rect x="180" y="75" width="80" height="30" fill="#dae8fc" stroke="#6c8ebf" pointer-events="none"/><g transform="translate(208.5,83.5)"><switch><foreignObject style="overflow:visible;" pointer-events="all" width="23" height="12" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility"><div xmlns="http://www.w3.org/1999/xhtml" style="display: inline-block; font-size: 12px; font-family: Helvetica; color: rgb(0, 0, 0); line-height: 1.2; vertical-align: top; width: 24px; white-space: nowrap; word-wrap: normal; text-align: center;"><div xmlns="http://www.w3.org/1999/xhtml" style="display:inline-block;text-align:inherit;text-decoration:inherit;">html<br /></div></div></foreignObject><text x="12" y="12" fill="#000000" text-anchor="middle" font-size="12px" font-family="Helvetica">html&lt;br&gt;</text></switch></g><rect x="160" y="0" width="120" height="30" fill="#dae8fc" stroke="#6c8ebf" pointer-events="none"/><g transform="translate(193.5,8.5)"><switch><foreignObject style="overflow:visible;" pointer-events="all" width="53" height="12" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility"><div xmlns="http://www.w3.org/1999/xhtml" style="display: inline-block; font-size: 12px; font-family: Helvetica; color: rgb(0, 0, 0); line-height: 1.2; vertical-align: top; width: 54px; white-space: nowrap; word-wrap: normal; text-align: center;"><div xmlns="http://www.w3.org/1999/xhtml" style="display:inline-block;text-align:inherit;text-decoration:inherit;">document<br /></div></div></foreignObject><text x="27" y="12" fill="#000000" text-anchor="middle" font-size="12px" font-family="Helvetica">document&lt;br&gt;</text></switch></g><path d="M 520 275 L 520 300 L 550 300 L 550 325" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/><path d="M 520 275 L 520 300 L 489 300 L 489 325" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/><path d="M 520 245 L 520 220 L 454 220 L 454 195" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/><rect x="460" y="245" width="120" height="30" fill="#dae8fc" stroke="#6c8ebf" pointer-events="none"/><g transform="translate(507.5,253.5)"><switch><foreignObject style="overflow:visible;" pointer-events="all" width="25" height="12" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility"><div xmlns="http://www.w3.org/1999/xhtml" style="display: inline-block; font-size: 12px; font-family: Helvetica; color: rgb(0, 0, 0); line-height: 1.2; vertical-align: top; width: 27px; white-space: nowrap; word-wrap: normal; text-align: center;"><div xmlns="http://www.w3.org/1999/xhtml" style="display:inline-block;text-align:inherit;text-decoration:inherit;">input<br /></div></div></foreignObject><text x="13" y="12" fill="#000000" text-anchor="middle" font-size="12px" font-family="Helvetica">input&lt;br&gt;</text></switch></g><path d="M 60 245 L 60 195" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/><rect x="0" y="245" width="120" height="30" fill="#dae8fc" stroke="#6c8ebf" pointer-events="none"/><g transform="translate(50.5,253.5)"><switch><foreignObject style="overflow:visible;" pointer-events="all" width="18" height="12" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility"><div xmlns="http://www.w3.org/1999/xhtml" style="display: inline-block; font-size: 12px; font-family: Helvetica; color: rgb(0, 0, 0); line-height: 1.2; vertical-align: top; width: 20px; white-space: nowrap; word-wrap: normal; text-align: center;"><div xmlns="http://www.w3.org/1999/xhtml" style="display:inline-block;text-align:inherit;text-decoration:inherit;">title<br /></div></div></foreignObject><text x="9" y="12" fill="#000000" text-anchor="middle" font-size="12px" font-family="Helvetica">[Not supported by viewer]</text></switch></g><path d="M 325 275 L 325 300 L 360 300 L 360 325" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/><path d="M 325 275 L 325 300 L 245 300 L 245 325" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/><path d="M 325 245 L 325 220 L 454 220 L 454 195" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/><rect x="290" y="245" width="70" height="30" fill="#dae8fc" stroke="#6c8ebf" pointer-events="none"/><g transform="translate(321.5,253.5)"><switch><foreignObject style="overflow:visible;" pointer-events="all" width="7" height="12" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility"><div xmlns="http://www.w3.org/1999/xhtml" style="display: inline-block; font-size: 12px; font-family: Helvetica; color: rgb(0, 0, 0); line-height: 1.2; vertical-align: top; width: 7px; white-space: nowrap; word-wrap: normal; text-align: center;"><div xmlns="http://www.w3.org/1999/xhtml" style="display:inline-block;text-align:inherit;text-decoration:inherit;">a<br /></div></div></foreignObject><text x="4" y="12" fill="#000000" text-anchor="middle" font-size="12px" font-family="Helvetica">[Not supported by viewer]</text></switch></g><path d="M 720 245 L 720 220 L 454 220 L 454 195" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/><rect x="660" y="245" width="120" height="30" fill="#dae8fc" stroke="#6c8ebf" pointer-events="none"/><g transform="translate(707.5,253.5)"><switch><foreignObject style="overflow:visible;" pointer-events="all" width="25" height="12" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility"><div xmlns="http://www.w3.org/1999/xhtml" style="display: inline-block; font-size: 12px; font-family: Helvetica; color: rgb(0, 0, 0); line-height: 1.2; vertical-align: top; width: 27px; white-space: nowrap; word-wrap: normal; text-align: center;"><div xmlns="http://www.w3.org/1999/xhtml" style="display:inline-block;text-align:inherit;text-decoration:inherit;">input<br /></div></div></foreignObject><text x="13" y="12" fill="#000000" text-anchor="middle" font-size="12px" font-family="Helvetica">input&lt;br&gt;</text></switch></g><rect x="310" y="325" width="100" height="30" fill="#f8cecc" stroke="#b85450" pointer-events="none"/><g transform="translate(348.5,333.5)"><switch><foreignObject style="overflow:visible;" pointer-events="all" width="22" height="12" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility"><div xmlns="http://www.w3.org/1999/xhtml" style="display: inline-block; font-size: 12px; font-family: Helvetica; color: rgb(0, 0, 0); line-height: 1.2; vertical-align: top; width: 23px; white-space: nowrap; word-wrap: normal; text-align: center;"><div xmlns="http://www.w3.org/1999/xhtml" style="display:inline-block;text-align:inherit;text-decoration:inherit;">Link<br /></div></div></foreignObject><text x="11" y="12" fill="#000000" text-anchor="middle" font-size="12px" font-family="Helvetica">Link&lt;br&gt;</text></switch></g><path d="M 60 325 L 60 275" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/><rect x="10" y="325" width="100" height="30" fill="#f8cecc" stroke="#b85450" pointer-events="none"/><g transform="translate(47.5,333.5)"><switch><foreignObject style="overflow:visible;" pointer-events="all" width="25" height="12" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility"><div xmlns="http://www.w3.org/1999/xhtml" style="display: inline-block; font-size: 12px; font-family: Helvetica; color: rgb(0, 0, 0); line-height: 1.2; vertical-align: top; width: 26px; white-space: nowrap; word-wrap: normal; text-align: center;"><div xmlns="http://www.w3.org/1999/xhtml" style="display:inline-block;text-align:inherit;text-decoration:inherit;">Dom<br /></div></div></foreignObject><text x="13" y="12" fill="#000000" text-anchor="middle" font-size="12px" font-family="Helvetica">Dom&lt;br&gt;</text></switch></g><rect x="530" y="325" width="40" height="30" fill="#d5e8d4" stroke="#82b366" pointer-events="none"/><g transform="translate(544.5,333.5)"><switch><foreignObject style="overflow:visible;" pointer-events="all" width="10" height="12" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility"><div xmlns="http://www.w3.org/1999/xhtml" style="display: inline-block; font-size: 12px; font-family: Helvetica; color: rgb(0, 0, 0); line-height: 1.2; vertical-align: top; width: 10px; white-space: nowrap; word-wrap: normal; text-align: center;"><div xmlns="http://www.w3.org/1999/xhtml" style="display:inline-block;text-align:inherit;text-decoration:inherit;">id<br /></div></div></foreignObject><text x="5" y="12" fill="#000000" text-anchor="middle" font-size="12px" font-family="Helvetica">[Not supported by viewer]</text></switch></g><rect x="463.5" y="325" width="50" height="30" fill="#d5e8d4" stroke="#82b366" pointer-events="none"/><g transform="translate(476.5,333.5)"><switch><foreignObject style="overflow:visible;" pointer-events="all" width="23" height="12" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility"><div xmlns="http://www.w3.org/1999/xhtml" style="display: inline-block; font-size: 12px; font-family: Helvetica; color: rgb(0, 0, 0); line-height: 1.2; vertical-align: top; width: 24px; white-space: nowrap; word-wrap: normal; text-align: center;"><div xmlns="http://www.w3.org/1999/xhtml" style="display:inline-block;text-align:inherit;text-decoration:inherit;">type<br /></div></div></foreignObject><text x="12" y="12" fill="#000000" text-anchor="middle" font-size="12px" font-family="Helvetica">type&lt;br&gt;</text></switch></g><rect x="220" y="325" width="50" height="30" fill="#d5e8d4" stroke="#82b366" pointer-events="none"/><g transform="translate(234.5,333.5)"><switch><foreignObject style="overflow:visible;" pointer-events="all" width="20" height="12" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility"><div xmlns="http://www.w3.org/1999/xhtml" style="display: inline-block; font-size: 12px; font-family: Helvetica; color: rgb(0, 0, 0); line-height: 1.2; vertical-align: top; width: 22px; white-space: nowrap; word-wrap: normal; text-align: center;"><div xmlns="http://www.w3.org/1999/xhtml" style="display:inline-block;text-align:inherit;text-decoration:inherit;">href<br /></div></div></foreignObject><text x="10" y="12" fill="#000000" text-anchor="middle" font-size="12px" font-family="Helvetica">href&lt;br&gt;</text></switch></g><path d="M 690 325 L 690 300 L 720 300 L 720 275" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/><rect x="660" y="325" width="60" height="30" fill="#d5e8d4" stroke="#82b366" pointer-events="none"/><g transform="translate(678.5,333.5)"><switch><foreignObject style="overflow:visible;" pointer-events="all" width="23" height="12" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility"><div xmlns="http://www.w3.org/1999/xhtml" style="display: inline-block; font-size: 12px; font-family: Helvetica; color: rgb(0, 0, 0); line-height: 1.2; vertical-align: top; width: 24px; white-space: nowrap; word-wrap: normal; text-align: center;"><div xmlns="http://www.w3.org/1999/xhtml" style="display:inline-block;text-align:inherit;text-decoration:inherit;">type<br /></div></div></foreignObject><text x="12" y="12" fill="#000000" text-anchor="middle" font-size="12px" font-family="Helvetica">type&lt;br&gt;</text></switch></g><path d="M 750 325 L 750 300 L 720 300 L 720 275" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/><rect x="730" y="325" width="40" height="30" fill="#d5e8d4" stroke="#82b366" pointer-events="none"/><g transform="translate(744.5,333.5)"><switch><foreignObject style="overflow:visible;" pointer-events="all" width="10" height="12" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility"><div xmlns="http://www.w3.org/1999/xhtml" style="display: inline-block; font-size: 12px; font-family: Helvetica; color: rgb(0, 0, 0); line-height: 1.2; vertical-align: top; width: 10px; white-space: nowrap; word-wrap: normal; text-align: center;"><div xmlns="http://www.w3.org/1999/xhtml" style="display:inline-block;text-align:inherit;text-decoration:inherit;">id<br /></div></div></foreignObject><text x="5" y="12" fill="#000000" text-anchor="middle" font-size="12px" font-family="Helvetica">[Not supported by viewer]</text></switch></g><path d="M 835 325 L 835 300 L 720 300 L 720 275" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/><rect x="790" y="325" width="90" height="30" fill="#d5e8d4" stroke="#82b366" pointer-events="none"/><g transform="translate(820.5,333.5)"><switch><foreignObject style="overflow:visible;" pointer-events="all" width="28" height="12" requiredFeatures="http://www.w3.org/TR/SVG11/feature#Extensibility"><div xmlns="http://www.w3.org/1999/xhtml" style="display: inline-block; font-size: 12px; font-family: Helvetica; color: rgb(0, 0, 0); line-height: 1.2; vertical-align: top; width: 30px; white-space: nowrap; word-wrap: normal; text-align: center;"><div xmlns="http://www.w3.org/1999/xhtml" style="display:inline-block;text-align:inherit;text-decoration:inherit;">value<br /></div></div></foreignObject><text x="14" y="12" fill="#000000" text-anchor="middle" font-size="12px" font-family="Helvetica">value&lt;br&gt;</text></switch></g><path d="M 750 325 L 750 325" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="none"/></g></svg>
            </div>
        </div>
    </article>
</main>


<footer class="footer">
    <ul class="sociallist">
        <li><a target="_blank" href="https://www.facebook.com/CreativePuzzleDevelop/"><img src="../lib/img/facebook.png"
                                                                                           alt="facebook logo"
                                                                                           class="img-responsive socialmedia"></a>
        </li>
        <li><a target="_blank" href="https://www.instagram.com/creative.puzzle/"><img src="../lib/img/instagram.png"
                                                                                      alt="instagram logo"
                                                                                      class="img-responsive socialmedia"></a>
        </li>
        <li><a target="_blank" href="https://twitter.com/creative_puzzle?lang=de"><img src="../lib/img/twitter.png"
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
<script src="../lib/js/validator.js"></script>
<script src="../lib/js/bootstrap.js"></script>
<script src="../lib/js/main.js"></script>
<script>
    $(document).ready(function () {
        $('.scrollspy').scrollSpy();
    });
</script>
</body>
</html>
