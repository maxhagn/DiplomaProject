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
    <title>Creative Framework CSS</title>
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
                    <li><a class="nav-link" href="../get_started/">Get Started</a></li>
                    <li><a class="nav-link" href="../typography/">Typografie</a></li>
                    <li><a class="nav-link active">CSS</a></li>
                    <li><a class="nav-link" href="../components/">Komponenten</a></li>
                    <li><a class="nav-link" href="../templates/">Vorlagen</a></li>
                    <li><a target="_self" class="nav-link" href="https://info-diploma-thesis.hagn.network/">Thesis</a></li>
                    <li><a class="nav-link" href="../en/css/">en</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<aside class="aside">
    <ul class="section table-of-contents">
        <li class="aside-scroll"><a href="#gridsystem">Grid System</a></li>
        <li class="aside-subnav"><a href="#container">Container</a></li>
        <li class="aside-subnav"><a href="#column">Spalten</a></li>
        <li class="aside-subnav"><a href="#nesting">Verschachtelung</a></li>
        <li class="aside-subnav"><a href="#position">Positionierung</a></li>
        <li class="aside-subnav"><a href="#extendedposition">Erweiterte Positionierung</a></li>
        <li class="aside-subnav"><a href="#sassconfig">Sass Konfiguration</a></li>
        <li class="aside-scroll"><a href="#colorsystem">Farbsystem</a></li>
        <li class="aside-subnav"><a href="#wheel">Farbrad</a></li>
        <li class="aside-subnav"><a href="#extracolors">Erweiterte Farben</a></li>
        <li class="aside-subnav"><a href="#colorthemes">Farbkreationen</a></li>
        <li class="aside-scroll"><a href="#media">Media</a></li>
        <li class="aside-subnav"><a href="#images">Bilder</a></li>
        <li class="aside-subnav"><a href="#video">Videos</a></li>
        <li class="aside-subnav"><a href="#audio">Audio</a></li>
        <li class="aside-scroll"><a href="#table">Tabellen</a></li>
        <li class="aside-scroll"><a href="#helper">Werkzeuge</a></li>
        <li class="aside-scroll"><a href="#shadow">Box Schatten</a></li>
        <li class="aside-scroll"><a href="#showhide">Elemente ausblenden</a></li>
        <li class="aside-scroll parallax-hide"><a href="#parallax">Parallax</a></li>
        <li class="aside-scroll"><a href="#animations">Css Animationen</a></li>
        <li class="aside-subnav"><a href="#keyframes">Schlüsselbildanimationen</a></li>
        <li class="aside-subnav"><a href="#animelem">Möglichkeiten</a></li>
    </ul>
</aside>
<main class="content">
    <article class="row">
        <h1>CSS</h1>
        <p>In diesem Abschnitt werden die CSS Elemente des Frameworks erklärt. Die wichtigsten
            Layout Komponenten sind Container sowie das Grid System. Des weiteren werden auch Tabellen
            und einige Klassen zur Farbauswahl erläutert.
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
                    <li class="directory"><a href="#gridsystem">Grid System</a></li>
                    <li class="sub-directory"><a href="#container">Container</a></li>
                    <li class="sub-directory"><a href="#column">Spalten</a></li>
                    <li class="sub-directory"><a href="#nesting">Verschachtelung</a></li>
                    <li class="sub-directory"><a href="#position">Positionierung</a></li>
                    <li class="sub-directory"><a href="#extendedposition">Erweiterte Positionierung</a></li>
                    <li class="sub-directory"><a href="#sassconfig">Sass Konfiguration</a></li>
                    <li class="directory"><a href="#colorsystem">Farbsystem</a></li>
                    <li class="sub-directory"><a href="#wheel">Farbrad</a></li>
                    <li class="sub-directory"><a href="#extracolors">Erweiterte Farben</a></li>
                    <li class="sub-directory"><a href="#colorthemes">Farbkreationen</a></li>
                    <li class="directory"><a href="#media">Media</a></li>
                    <li class="sub-directory"><a href="#images">Bilder</a></li>
                    <li class="sub-directory"><a href="#video">Videos</a></li>
                    <li class="sub-directory"><a href="#audio">Audio</a></li>
                    <li class="directory"><a href="#table">Tabellen</a></li>
                    <li class="directory"><a href="#helper">Werkzeuge</a></li>
                    <li class="directory"><a href="#shadow">Box Schatten</a></li>
                    <li class="directory"><a href="#showhide">Elemente ausblenden</a></li>
                    <li class="directory parallax-hide"><a href="#parallax">Parallax</a></li>
                    <li class="directory"><a href="#animations">Css Animationen</a></li>
                    <li class="sub-directory"><a href="#keyframes">Schlüsselbildanimationen</a></li>
                    <li class="sub-directory"><a href="#animelem">Möglichkeiten</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="container-line">
        <hr>
    </div>
    <article id="gridsystem" class="section scrollspy">
        <h2>Grid System</h2>
        <p>
            Gestalte komplexe Layouts mithilfe eines 12 Spalten Grid Systems. Eine Webseite kann gedanklich in eine
            Art
            Tabelle mit mehreren Spalten und Zeilen unterteilt werden. Ist die Tabelle zum Beispiel 12 Spalten breit
            und 1
            Zeile hoch so sind über 450.000.000 Möglichkeiten der Positionierung möglich. Durch das Implementieren
            weiterer
            Klassen sind noch einmal mehr Optionen offen.
        </p>
    </article>
    <article id="container" class="section scrollspy">
        <h3>Container</h3>
        <p>Container umschließen mehrere DOM Elemente und definieren deren maximale Breite. Im Optimalfall sollten
            die
            Containerklassen in semantische Elemente eingebunden werden, also zum Beispiel im <i class="tagname">&lt;main&gt;
                &lt;/main&gt;</i>
            oder <i class="tagname"> &lt;section&gt; &lt;/section&gt; </i> Tag.
        </p>
        <div class="row center">
            <div class="col xs12 table-scroll">
                <table class="table-stripped">
                    <tr>
                        <th></th>
                        <th>Sehr Klein</th>
                        <th>Klein</th>
                        <th>Mittel</th>
                        <th>Groß</th>
                        <th>Sehr Groß</th>
                        <th>Elastisch</th>
                    </tr>
                    <tr>
                        <td>Breite</td>
                        <td>60%</td>
                        <td>80%</td>
                        <td>90%</td>
                        <td>95%</td>
                        <td>100%</td>
                        <td>100%</td>
                    </tr>
                    <tr>
                        <td>Klassenname</td>
                        <td><i class="classname">.container-xs</i></td>
                        <td><i class="classname">.container-s</i></td>
                        <td><i class="classname">.container-m</i></td>
                        <td><i class="classname">.container-l</i></td>
                        <td><i class="classname">.container-xl</i></td>
                        <td><i class="classname">.container-elastic</i></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row margin-bottom center">
            <div class="container-xs blue-medium text-supremewhite-medium grid_demo grid_container_demo">.container-xs</div>
            <div class="container-s blue-medium text-supremewhite-medium grid_demo grid_container_demo">.container-s</div>
            <div class="container-m blue-medium text-supremewhite-medium grid_demo grid_container_demo">.container-m</div>
            <div class="container-l blue-medium text-supremewhite-medium grid_demo grid_container_demo">.container-l</div>
            <div class="container-xl blue-medium text-supremewhite-medium grid_demo grid_container_demo">.container-xl</div>
        </div>
        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp><div class="container-xs">.container-xs</div>
<div class="container-s">.container-s</div>
<div class="container-m">.container-m</div>
<div class="container-l">.container-l</div>
<div class="container-xl">.container-xl</div></xmp></pre>
            </code>
        </div>
    </article>
    <article id="column" class="section scrollspy">
        <h3>Gleiche Spaltengröße</h3>
        <p>Nachdem die Größen der Container bestimmt wurden, wird eine <i class="classname">.row</i> Klasse eingerichtet. Jeder <i class="tagname">&lt;div&gt;</i>
            Tag mit der Klasse <i class="classname">.row</i> repräsentiert eine Zeile in unserer gedanklichen Tabelle.
            Innerhalb der Row können bis zu 12 <i class="classname">.col</i> Klassen eingebunden werden. Diese teilen sich den freien Platz untereinander auf.
        </p>
        <div class="row center margin-top">
            <div class="col blue-medium grid_demo">Erste von zwei Spalten</div>
            <div class="col blue-medium grid_demo">Zweite von zwei Spalten</div>
        </div>
        <div class="row center margin-bottom">
            <div class="col blue-medium grid_demo">Erste von drei Spalten</div>
            <div class="col blue-medium grid_demo">Zweite von drei Spalten</div>
            <div class="col blue-medium grid_demo">Dritte von drei Spalten</div>
        </div>
        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp><div class="row">
    <div class="col">Erste von zwei Spalten</div>
    <div class="col">Zweite von zwei Spalten</div>
</div>
<div class="row center">
    <div class="col">Erste von drei Spalten</div>
    <div class="col">Zweite von drei Spalten</div>
    <div class="col">Dritte von drei Spalten</div>
</div></xmp></pre>
            </code>
        </div>
    </article>
    <article>
        <h3 class="title">Spaltengröße setzen</h3>
        <p>Alternativ können einzelne oder alle Elemente mit einer bestimmten Größe versehen werden. Je nach
            Vorsilbe werden
            andere Bildschirmgrößen angesprochen. Sollen Elemente auf jeder Bildschirmgrößen gleich groß sein, so
            reicht es
            <i class="classname">.xs</i> zu definieren.
        </p>
        <div class="row center">
            <div class="col xs12 s12 m12 l10 xl6 table-scroll">
                <table class="table-stripped">
                    <tr>
                        <th></th>
                        <th>Sehr Klein (&lt; 400px)</th>
                        <th>Klein (&lt; 600px)</th>
                        <th>Mittel (&lt; 950px)</th>
                        <th>Groß (&lt; 1240px)</th>
                        <th>Sehr Groß (&gt; 1240px)</th>
                    </tr>
                    <tr>
                        <td>Klassenname</td>
                        <td><i class="classname">.xs</i></td>
                        <td><i class="classname">.s</i></td>
                        <td><i class="classname">.m</i></td>
                        <td><i class="classname">.l</i></td>
                        <td><i class="classname">.xl</i></td>
                    </tr>
                    <tr>
                        <td>Spaltenanzahl</td>
                        <td colspan="5">12 (<a class="link-lighten" href="#sassconfig">Konfigurierbar</a>)</td>
                    </tr>
                    <tr>
                        <td>Verschachtelbar</td>
                        <td colspan="5">Ja</td>
                    </tr>
                    <tr>
                        <td>Spalten sortieren</td>
                        <td colspan="5">Ja</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row center">
            <div class="col blue-medium grid_demo">1 von 3</div>
            <div class="col xs6 blue-medium grid_demo">.xs6 (wider)</div>
            <div class="col blue-medium grid_demo">3 von 3</div>
        </div>
        <div class="row center">
            <div class="col blue-medium grid_demo">1 von 3</div>
            <div class="col xs9 blue-medium grid_demo">.xs9 (wider)</div>
            <div class="col blue-medium grid_demo">3 von 3</div>
        </div>
        <div class="row center margin-bottom">
            <div class="col xs7 blue-medium grid_demo">.col .xs7</div>
            <div class="col blue-medium grid_demo">2 von 3</div>
            <div class="col blue-medium grid_demo">3 von 3</div>
        </div>
        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp><div class="row">
    <div class="col">1 von 3</div>
    <div class="col xs6">.xs6 (wider)</div>
    <div class="col">3 von 3</div>
</div>
<div class="row">
    <div class="col">1 von 3</div>
    <div class="col xs9">.xs9 (wider)</div>
    <div class="col">3 von 3</div>
</div>
<div class="row">
    <div class="col xs7">.col .xs7</div>
    <div class="col">2 von 3</div>
    <div class="col">3 von 3</div>
</div></xmp></pre>
            </code>
        </div>
    </article>
    <article id="nesting" class="section scrollspy">
        <h3>Verschachtelung</h3>
        <p>Ebenfalls möglich ist es, mehrere Tabellen ineinander zu verschachteln - so entstehen noch mehr
            Möglichkeiten ein Layout zu gestalten. Alle zuvor erwähnten Attribute sind weiterhin anwendbar.
        </p>
        <div class="row margin-bottom center content_code">
            <div class="col blue-darken3 grid_without_color">Level 1 .col</div>
            <div class="col blue-darken3 grid_without_color">Level 1 .col
                <div class="row">
                    <div class="col blue-medium grid_without_color">Level 2 .col
                        <div class="row">
                            <div class="col blue-lighten3 grid_without_color">Level 3 .col</div>
                            <div class="col blue-lighten3 grid_without_color">Level 3 .col</div>
                        </div>
                    </div>
                    <div class="col blue-medium grid_without_color">Level 2 .col</div>
                </div>
            </div>
            <div class="col blue-darken3 grid_without_color">Level 1 .col</div>
        </div>
        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp><div class="row">
    <div class="col">Level 1 .col</div>
    <div class="col">Level 1 .col
        <div class="row">
            <div class="col">Level 2 .col
                <div class="row">
                    <div class="col">Level 3 .col</div>
                    <div class="col">Level 3 .col</div>
                </div>
            </div>
            <div class="col">Level 2 .col</div>
        </div>
    </div>
    <div class="col">Level 1 .col</div>
</div></xmp></pre>
            </code>
        </div>
    </article>
    <article id="position" class="section scrollspy">
        <h3>Horizontale Zentrierung</h3>
        <p>Füllen die angegebenen Spalten in einer Tabelle nicht die maximale Breite des Bildschirms aus, so können
            diese nach belieben positioniert werden. Standardmäßig werden Elemente und Texte Rechtsbündig zentriert.
        </p>
        <div class="content_code">
            <div class="container-m text-supremewhite-medium">
                <div class="row center">
                    <div class="col xs3 blue-medium grid_demo"> .row in .container-m | .center</div>
                </div>
            </div>
            <div class="container-m text-supremewhite-medium">
                <div class="row start">
                    <div class="col xs3 blue-medium grid_demo"> .row in .container-m | .start</div>
                </div>
            </div>
            <div class="container-m text-supremewhite-medium">
                <div class="row end">
                    <div class="col xs3 blue-medium grid_demo"> .row in .container-m | .end</div>
                </div>
            </div>
        </div>
        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp><div class="row start">
    <div class="col"> .row in .container-m | .start</div>
</div>
<div class="row center">
    <div class="col xs3"> .row in .container-m | .center</div>
</div>
<div class="row end">
    <div class="col"> .row in .container-m | .end</div>
</div></xmp></pre>
            </code>
        </div>
        <h3>Vertikale Zentrierung</h3>
        <p>Im Falle, dass ein Container höher als die eingeschlossenen Elemente, können die Kindelemente entweder
            Oben,
            Unten oder in der Mitte positioniert werden.
        </p>
        <div class="container-m text-supremewhite-medium margin-top">
            <div class="row row-cust-height top">
                <div class="col blue-medium grid_demo"> .row in .container-m | .top</div>
            </div>
        </div>
        <div class="container-m text-supremewhite-medium">
            <div class="row row-cust-height middle">
                <div class="col blue-medium grid_demo"> .row in .container-m | .middle</div>
            </div>
        </div>
        <div class="container-m text-supremewhite-medium margin-bottom">
            <div class="row row-cust-height bottom">
                <div class="col blue-medium grid_demo"> .row in .container-m | .bottom</div>
            </div>
        </div>
        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp><div class="row top">
	<div class="col blue-medium"> .row in .container-m | .top</div>
</div>
<div class="row row-cust-height middle">
	<div class="col blue-medium"> .row in .container-m | .middle</div>
</div>
<div class="row row-cust-height bottom">
	<div class="col blue-medium"> .row in .container-m | .bottom</div>
</div></xmp></pre>
            </code>
        </div>
    </article>
    <article id="extendedposition" class="section scrollspy">
        <h3>Erweiterte Positionierung</h3>
        <p>Auch im Nachhinein ist es noch möglich die Position einiger Elemente zu ändern. Zum Beispiel können die
            Spalten
            geordnet oder eingerückt werden.
        </p>
        <h3 class="title">Spalten einrücken</h3>
        <p>Um keine leeren Spalten definieren zu müssen, können einzelne Elemente weiter nach rechts gedrückt
            werden. Die
            Logik ist deckend zu der des Grid Systems und somit einfach verknüpfbar.
        </p>
        <div class="container-m text-supremewhite-medium margin-top margin-bottom">
            <div class="row">
                <div class="col push-xs2 blue-medium grid_demo"> .col .push-xs2</div>
            </div>
            <div class="row">
                <div class="col push-xs4 blue-medium grid_demo"> .col .push-xs4</div>
            </div>
            <div class="row">
                <div class="col push-xs6 blue-medium grid_demo"> .col .push-xs6</div>
            </div>
            <div class="row">
                <div class="col push-xs8 blue-medium grid_demo"> .col .push-xs8</div>
            </div>
            <div>
                <div class="col push-xs10 blue-medium grid_demo"> .col .push-xs10</div>
            </div>
            <div>
                <div class="col push-xs11 blue-medium grid_demo"> .col .push-xs11</div>
            </div>
        </div>
        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp><div class="row">
    <div class="col push-xs2"> .col .push-xs2</div>
</div>
<div class="row">
    <div class="col push-xs4"> .col .push-xs4</div>
</div>
<div class="row">
    <div class="col push-xs6"> .col .push-xs6</div>
</div>
<div class="row">
    <div class="col push-xs8"> .col .push-xs8</div>
</div>
<div class="row">
    <div class="col push-xs10"> .col .push-xs10</div>
</div>
<div class="row">
    <div class="col push-xs11"> .col .push-xs11</div>
</div></xmp></pre>
            </code>
        </div>
        <h3 class="title">Ordnen der Spalten</h3>
        <p>Sind nun zum Beispiel 6 Column Elemente definiert und das letzte Element im Sourcecode soll ganz nach
            vorne
            gebracht werden, so kann die Klasse first verwendet werden. Um das Gegenteil dazu zu erreichen wird die
            Klasse
            last verwendet. Weiteres kann über die Klassen <i class="classname">.order1</i> - <i class="classname">.order12</i>
            die komplette Ordnung verändert werden.
        </p>
        <div class="container-m text-supremewhite-medium margin-top">
            <div class="row center">
                <div class="col xs6 last blue-medium grid_demo"> DOM Element 1 .last</div>
                <div class="col xs6 first blue-medium grid_demo"> DOM Element 2 .first</div>
            </div>
        </div>
        <div class="container-m text-supremewhite-medium">
            <div class="row center">
                <div class="col blue-medium grid_demo"> DOM Element 1</div>
                <div class="col last blue-medium grid_demo"> DOM Element 2 | .last</div>
                <div class="col xs6 first blue-medium grid_demo"> DOM Element 3 | .first</div>
            </div>
        </div>
        <div class="container-m text-supremewhite-medium margin-bottom">
            <div class="row center">
                <div class="col first blue-medium grid_demo"> DOM Element 1 | .first</div>
                <div class="col blue-medium grid_demo"> DOM Element 2</div>
                <div class="col xs6 first blue-medium grid_demo"> DOM Element 3 | .first</div>
            </div>
        </div>
        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp><div class="row center">
    <div class="col"> DOM Element 1 </div>
    <div class="col"> DOM Element 2 </div>
    <div class="col first"> DOM Element 3 | .first</div>
</div></xmp></pre>
            </code>
        </div>
    </article>
    <article id="sassconfig" class="section scrollspy">
        <h3>Mit Sass personalisieren</h3>
        <p>Falls Vorkenntnisse über Precompiler und im Speziellen über die Sprachen SASS und SCSS vorhanden ist,
            können die
            Werte vordefinierte Variablen geändert und das Stylesheet personalisiert werden. Zum Beispiel kann die
            Anzahl
            der Spalten von 12 auf 24 geändert werden.</p>
    </article>
    <article id="variablen" class="section scrollspy">
        <h3>Variablen</h3>
        <p>Des Weiteren könnten die Breakpoints oder der Seitenrand verändert werden.</p>
        <div class="row center">
            <div class="col xs12 s12 m12 l10 xl6 table-scroll">
                <table class="table-stripped">
                    <tr>
                        <th></th>
                        <th>Variablenname</th>
                        <th>Werte</th>
                    </tr>
                    <tr>
                        <td>Spaltenanzahl Grid</td>
                        <td><i class="varname">$anzColumn</i></td>
                        <td>Nummer (0-24 Empfohlen)</td>
                    </tr>
                    <tr>
                        <td>Grid Breakpoints</td>
                        <td><i class="varname">$small-min</i></td>
                        <td>Nummer (0-&infin;)</td>
                    </tr>
                    <tr>
                        <td>Grid Breakpoints</td>
                        <td><i class="varname">$medium-min</i></td>
                        <td>Nummer (0-&infin;)</td>
                    </tr>
                    <tr>
                        <td>Grid Breakpoints</td>
                        <td><i class="varname">$large-min</i></td>
                        <td>Nummer (0-&infin;)</td>
                    </tr>
                    <tr>
                        <td>Grid Breakpoints</td>
                        <td><i class="varname">$xxlarge-min</i></td>
                        <td>Nummer (0-&infin;)</td>
                    </tr>
                    <tr>
                        <td>Automatischer Margine</td>
                        <td><i class="varname">$margin-auto</i></td>
                        <td>Prozentanzahl (0-100)</td>
                    </tr>
                </table>
            </div>
        </div>
    </article>
    <div class="container-line">
        <hr>
    </div>
    <article id="colorsystem" class="section scrollspy">
        <h2>Farb System</h2>
        <p>Das Framework bietet eine kleine Selektion an vordefinierten Farbräumen. Neben den Grundfarben bieten wir
            einen Erweiterten Farbraum und vordefinierte Themen, wie zum Beispiel eines für Farben des Herbstes.</p>
        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp><div class="orange-medium"></div>
<p class="text-orange-medium"></p></xmp></pre>
            </code>
        </div>
    </article>
    <article id="wheel" class="section scrollspy">
        <h3>Farbrad</h3>
        <p>Hier werden alle Farbrad Farben mit 12 verschiedenen Tans als Klassennamen aufbereitet. </p>
        <div class="content_code content_colors">
            <div class="row">
                <div class="col xs6 s6 m6 l4 xl4 red-lighten6">
                    .red-lighten6
                </div>
                <div class="col xs6 s6 m6 l4 xl4 red-lighten5">
                    .red-lighten5
                </div>
                <div class="col xs6 s6 m6 l4 xl4 red-lighten4">
                    .red-lighten4
                </div>
                <div class="col xs6 s6 m6 l4 xl4 red-lighten3">
                    .red-lighten3
                </div>
                <div class="col xs6 s6 m6 l4 xl4 red-lighten2">
                    .red-lighten2
                </div>
                <div class="col xs6 s6 m6 l4 xl4 red-lighten1">
                    .red-lighten1
                </div>
                <div class="col xs12 s12 m12 l12 xl12 red-medium">
                    .red-medium
                </div>
                <div class="col xs6 s6 m6 l4 xl4 red-darken1">
                    .red-darken1
                </div>
                <div class="col xs6 s6 m6 l4 xl4 red-darken2">
                    .red-darken2
                </div>
                <div class="col xs6 s6 m6 l4 xl4 red-darken3">
                    .red-darken3
                </div>
                <div class="col xs6 s6 m6 l4 xl4 red-darken4">
                    .red-darken4
                </div>
                <div class="col xs6 s6 m6 l4 xl4 red-darken5">
                    .red-darken5
                </div>
                <div class="col xs6 s6 m6 l4 xl4 red-darken6">
                    .red-darken6
                </div>
            </div>
            <div class="row">
                <div class="col xs6 s6 m6 l4 xl4 orange-lighten6">
                    .orange-lighten6
                </div>
                <div class="col xs6 s6 m6 l4 xl4 orange-lighten5">
                    .orange-lighten5
                </div>
                <div class="col xs6 s6 m6 l4 xl4 orange-lighten4">
                    .orange-lighten4
                </div>
                <div class="col xs6 s6 m6 l4 xl4 orange-lighten3">
                    .orange-lighten3
                </div>
                <div class="col xs6 s6 m6 l4 xl4 orange-lighten2">
                    .orange-lighten2
                </div>
                <div class="col xs6 s6 m6 l4 xl4 orange-lighten1">
                    .orange-lighten1
                </div>
                <div class="col xs12 s12 m12 l12 xl12 orange-medium">
                    .orange-medium
                </div>
                <div class="col xs6 s6 m6 l4 xl4 orange-darken1">
                    .orange-darken1
                </div>
                <div class="col xs6 s6 m6 l4 xl4 orange-darken2">
                    .orange-darken2
                </div>
                <div class="col xs6 s6 m6 l4 xl4 orange-darken3">
                    .orange-darken3
                </div>
                <div class="col xs6 s6 m6 l4 xl4 orange-darken4">
                    .orange-darken4
                </div>
                <div class="col xs6 s6 m6 l4 xl4 orange-darken5">
                    .orange-darken5
                </div>
                <div class="col xs6 s6 m6 l4 xl4 orange-darken6">
                    .orange-darken6
                </div>
            </div>
            <div class="row">
                <div class="col xs6 s6 m6 l4 xl4 yellow-lighten6">
                    .yellow-lighten6
                </div>
                <div class="col xs6 s6 m6 l4 xl4 yellow-lighten5">
                    .yellow-lighten5
                </div>
                <div class="col xs6 s6 m6 l4 xl4 yellow-lighten4">
                    .yellow-lighten4
                </div>
                <div class="col xs6 s6 m6 l4 xl4 yellow-lighten3">
                    .yellow-lighten3
                </div>
                <div class="col xs6 s6 m6 l4 xl4 yellow-lighten2">
                    .yellow-lighten2
                </div>
                <div class="col xs6 s6 m6 l4 xl4 yellow-lighten1">
                    .yellow-lighten1
                </div>
                <div class="col xs12 s12 m12 l12 xl12 yellow-medium">
                    .yellow-medium
                </div>
                <div class="col xs6 s6 m6 l4 xl4 yellow-darken1">
                    .yellow-darken1
                </div>
                <div class="col xs6 s6 m6 l4 xl4 yellow-darken2">
                    .yellow-darken2
                </div>
                <div class="col xs6 s6 m6 l4 xl4 yellow-darken3">
                    .yellow-darken3
                </div>
                <div class="col xs6 s6 m6 l4 xl4 yellow-darken4">
                    .yellow-darken4
                </div>
                <div class="col xs6 s6 m6 l4 xl4 yellow-darken5">
                    .yellow-darken5
                </div>
                <div class="col xs6 s6 m6 l4 xl4 yellow-darken6">
                    .yellow-darken6
                </div>
            </div>
            <div class="row">
                <div class="col xs6 s6 m6 l4 xl4 green-lighten6">
                    .green-lighten6
                </div>
                <div class="col xs6 s6 m6 l4 xl4 green-lighten5">
                    .green-lighten5
                </div>
                <div class="col xs6 s6 m6 l4 xl4 green-lighten4">
                    .green-lighten4
                </div>
                <div class="col xs6 s6 m6 l4 xl4 green-lighten3">
                    .green-lighten3
                </div>
                <div class="col xs6 s6 m6 l4 xl4 green-lighten2">
                    .green-lighten2
                </div>
                <div class="col xs6 s6 m6 l4 xl4 green-lighten1">
                    .green-lighten1
                </div>
                <div class="col xs12 s12 m12 l12 xl12 green-medium">
                    .green-medium
                </div>
                <div class="col xs6 s6 m6 l4 xl4 green-darken1">
                    .green-darken1
                </div>
                <div class="col xs6 s6 m6 l4 xl4 green-darken2">
                    .green-darken2
                </div>
                <div class="col xs6 s6 m6 l4 xl4 green-darken3">
                    .green-darken3
                </div>
                <div class="col xs6 s6 m6 l4 xl4 green-darken4">
                    .green-darken4
                </div>
                <div class="col xs6 s6 m6 l4 xl4 green-darken5">
                    .green-darken5
                </div>
                <div class="col xs6 s6 m6 l4 xl4 green-darken6">
                    .green-darken6
                </div>
            </div>
            <div class="row">
                <div class="col xs6 s6 m6 l4 xl4 blue-lighten6">
                    .blue-lighten6
                </div>
                <div class="col xs6 s6 m6 l4 xl4 blue-lighten5">
                    .blue-lighten5
                </div>
                <div class="col xs6 s6 m6 l4 xl4 blue-lighten4">
                    .blue-lighten4
                </div>
                <div class="col xs6 s6 m6 l4 xl4 blue-lighten3">
                    .blue-lighten3
                </div>
                <div class="col xs6 s6 m6 l4 xl4 blue-lighten2">
                    .blue-lighten2
                </div>
                <div class="col xs6 s6 m6 l4 xl4 blue-lighten1">
                    .blue-lighten1
                </div>
                <div class="col xs12 s12 m12 l12 xl12 blue-medium">
                    .blue-medium
                </div>
                <div class="col xs6 s6 m6 l4 xl4 blue-darken1">
                    .blue-darken1
                </div>
                <div class="col xs6 s6 m6 l4 xl4 blue-darken2">
                    .blue-darken2
                </div>
                <div class="col xs6 s6 m6 l4 xl4 blue-darken3">
                    .blue-darken3
                </div>
                <div class="col xs6 s6 m6 l4 xl4 blue-darken4">
                    .blue-darken4
                </div>
                <div class="col xs6 s6 m6 l4 xl4 blue-darken5">
                    .blue-darken5
                </div>
                <div class="col xs6 s6 m6 l4 xl4 blue-darken6">
                    .blue-darken6
                </div>
            </div>
            <div class="row">
                <div class="col xs6 s6 m6 l4 xl4 purple-lighten6">
                    .purple-lighten6
                </div>
                <div class="col xs6 s6 m6 l4 xl4 purple-lighten5">
                    .purple-lighten5
                </div>
                <div class="col xs6 s6 m6 l4 xl4 purple-lighten4">
                    .purple-lighten4
                </div>
                <div class="col xs6 s6 m6 l4 xl4 purple-lighten3">
                    .purple-lighten3
                </div>
                <div class="col xs6 s6 m6 l4 xl4 purple-lighten2">
                    .purple-lighten2
                </div>
                <div class="col xs6 s6 m6 l4 xl4 purple-lighten1">
                    .purple-lighten1
                </div>
                <div class="col xs12 s12 m12 l12 xl12 purple-medium">
                    .purple-medium
                </div>
                <div class="col xs6 s6 m6 l4 xl4 purple-darken1">
                    .purple-darken1
                </div>
                <div class="col xs6 s6 m6 l4 xl4 purple-darken2">
                    .purple-darken2
                </div>
                <div class="col xs6 s6 m6 l4 xl4 purple-darken3">
                    .purple-darken3
                </div>
                <div class="col xs6 s6 m6 l4 xl4 purple-darken4">
                    .purple-darken4
                </div>
                <div class="col xs6 s6 m6 l4 xl4 purple-darken5">
                    .purple-darken5
                </div>
                <div class="col xs6 s6 m6 l4 xl4 purple-darken6">
                    .purple-darken6
                </div>
            </div>
            <h3>Extra Spectrum</h3>
            <p>Der erweiterte Farbraum fügt weitere wichtige Farben zur Farbauswahl hinzu. </p><br>
            <div class="row">
                <div class="col xs6 s6 m6 l4 xl4 flatyellow-lighten6">
                    .flatyellow-lighten6
                </div>
                <div class="col xs6 s6 m6 l4 xl4 flatyellow-lighten5">
                    .flatyellow-lighten5
                </div>
                <div class="col xs6 s6 m6 l4 xl4 flatyellow-lighten4">
                    .flatyellow-lighten4
                </div>
                <div class="col xs6 s6 m6 l4 xl4 flatyellow-lighten3">
                    .flatyellow-lighten3
                </div>
                <div class="col xs6 s6 m6 l4 xl4 flatyellow-lighten2">
                    .flatyellow-lighten2
                </div>
                <div class="col xs6 s6 m6 l4 xl4 flatyellow-lighten1">
                    .flatyellow-lighten1
                </div>
                <div class="col xs12 s12 m12 l12 xl12 flatyellow-medium">
                    .flatyellow-medium
                </div>
                <div class="col xs6 s6 m6 l4 xl4 flatyellow-darken1">
                    .flatyellow-darken1
                </div>
                <div class="col xs6 s6 m6 l4 xl4 flatyellow-darken2">
                    .flatyellow-darken2
                </div>
                <div class="col xs6 s6 m6 l4 xl4 flatyellow-darken3">
                    .flatyellow-darken3
                </div>
                <div class="col xs6 s6 m6 l4 xl4 flatyellow-darken4">
                    .flatyellow-darken4
                </div>
                <div class="col xs6 s6 m6 l4 xl4 flatyellow-darken5">
                    .flatyellow-darken5
                </div>
                <div class="col xs6 s6 m6 l4 xl4 flatyellow-darken6">
                    .flatyellow-darken6
                </div>
            </div>
            <div class="row">
                <div class="col xs6 s6 m6 l4 xl4 swampgreen-lighten6">
                    .swampgreen-lighten6
                </div>
                <div class="col xs6 s6 m6 l4 xl4 swampgreen-lighten5">
                    .swampgreen-lighten5
                </div>
                <div class="col xs6 s6 m6 l4 xl4 swampgreen-lighten4">
                    .swampgreen-lighten4
                </div>
                <div class="col xs6 s6 m6 l4 xl4 swampgreen-lighten3">
                    .swampgreen-lighten3
                </div>
                <div class="col xs6 s6 m6 l4 xl4 swampgreen-lighten2">
                    .swampgreen-lighten2
                </div>
                <div class="col xs6 s6 m6 l4 xl4 swampgreen-lighten1">
                    .swampgreen-lighten1
                </div>
                <div class="col xs12 s12 m12 l12 xl12 swampgreen-medium">
                    .swampgreen-medium
                </div>
                <div class="col xs6 s6 m6 l4 xl4 swampgreen-darken1">
                    .swampgreen-darken1
                </div>
                <div class="col xs6 s6 m6 l4 xl4 swampgreen-darken2">
                    .swampgreen-darken2
                </div>
                <div class="col xs6 s6 m6 l4 xl4 swampgreen-darken3">
                    .swampgreen-darken3
                </div>
                <div class="col xs6 s6 m6 l4 xl4 swampgreen-darken4">
                    .swampgreen-darken4
                </div>
                <div class="col xs6 s6 m6 l4 xl4 swampgreen-darken5">
                    .swampgreen-darken5
                </div>
                <div class="col xs6 s6 m6 l4 xl4 swampgreen-darken6">
                    .swampgreen-darken6
                </div>
            </div>
            <div class="row">
                <div class="col xs6 s6 m6 l4 xl4 brightblue-lighten6">
                    .brightblue-lighten6
                </div>
                <div class="col xs6 s6 m6 l4 xl4 brightblue-lighten5">
                    .brightblue-lighten5
                </div>
                <div class="col xs6 s6 m6 l4 xl4 brightblue-lighten4">
                    .brightblue-lighten4
                </div>
                <div class="col xs6 s6 m6 l4 xl4 brightblue-lighten3">
                    .brightblue-lighten3
                </div>
                <div class="col xs6 s6 m6 l4 xl4 brightblue-lighten2">
                    .brightblue-lighten2
                </div>
                <div class="col xs6 s6 m6 l4 xl4 brightblue-lighten1">
                    .brightblue-lighten1
                </div>
                <div class="col xs12 s12 m12 l12 xl12 brightblue-medium">
                    .brightblue-medium
                </div>
                <div class="col xs6 s6 m6 l4 xl4 brightblue-darken1">
                    .brightblue-darken1
                </div>
                <div class="col xs6 s6 m6 l4 xl4 brightblue-darken2">
                    .brightblue-darken2
                </div>
                <div class="col xs6 s6 m6 l4 xl4 brightblue-darken3">
                    .brightblue-darken3
                </div>
                <div class="col xs6 s6 m6 l4 xl4 brightblue-darken4">
                    .brightblue-darken4
                </div>
                <div class="col xs6 s6 m6 l4 xl4 brightblue-darken5">
                    .brightblue-darken5
                </div>
                <div class="col xs6 s6 m6 l4 xl4 brightblue-darken6">
                    .brightblue-darken6
                </div>
            </div>
            <div class="row">
                <div class="col xs6 s6 m6 l4 xl4 iceblue-lighten6">
                    .iceblue-lighten6
                </div>
                <div class="col xs6 s6 m6 l4 xl4 iceblue-lighten5">
                    .iceblue-lighten5
                </div>
                <div class="col xs6 s6 m6 l4 xl4 iceblue-lighten4">
                    .iceblue-lighten4
                </div>
                <div class="col xs6 s6 m6 l4 xl4 iceblue-lighten3">
                    .iceblue-lighten3
                </div>
                <div class="col xs6 s6 m6 l4 xl4 iceblue-lighten2">
                    .iceblue-lighten2
                </div>
                <div class="col xs6 s6 m6 l4 xl4 iceblue-lighten1">
                    .iceblue-lighten1
                </div>
                <div class="col xs12 s12 m12 l12 xl12 iceblue-medium">
                    .iceblue-medium
                </div>
                <div class="col xs6 s6 m6 l4 xl4 iceblue-darken1">
                    .iceblue-darken1
                </div>
                <div class="col xs6 s6 m6 l4 xl4 iceblue-darken2">
                    .iceblue-darken2
                </div>
                <div class="col xs6 s6 m6 l4 xl4 iceblue-darken3">
                    .iceblue-darken3
                </div>
                <div class="col xs6 s6 m6 l4 xl4 iceblue-darken4">
                    .iceblue-darken4
                </div>
                <div class="col xs6 s6 m6 l4 xl4 iceblue-darken5">
                    .iceblue-darken5
                </div>
                <div class="col xs6 s6 m6 l4 xl4 iceblue-darken6">
                    .iceblue-darken6
                </div>
            </div>
            <div class="row">
                <div class="col xs6 s6 m6 l4 xl4 grey-lighten6">
                    .grey-lighten6
                </div>
                <div class="col xs6 s6 m6 l4 xl4 grey-lighten5">
                    .grey-lighten5
                </div>
                <div class="col xs6 s6 m6 l4 xl4 grey-lighten4">
                    .grey-lighten4
                </div>
                <div class="col xs6 s6 m6 l4 xl4 grey-lighten3">
                    .grey-lighten3
                </div>
                <div class="col xs6 s6 m6 l4 xl4 grey-lighten2">
                    .grey-lighten2
                </div>
                <div class="col xs6 s6 m6 l4 xl4 grey-lighten1">
                    .grey-lighten1
                </div>
                <div class="col xs12 s12 m12 l12 xl12 grey-medium">
                    .grey-medium
                </div>
                <div class="col xs6 s6 m6 l4 xl4 grey-darken1">
                    .grey-darken1
                </div>
                <div class="col xs6 s6 m6 l4 xl4 grey-darken2">
                    .grey-darken2
                </div>
                <div class="col xs6 s6 m6 l4 xl4 grey-darken3">
                    .grey-darken3
                </div>
                <div class="col xs6 s6 m6 l4 xl4 grey-darken4">
                    .grey-darken4
                </div>
                <div class="col xs6 s6 m6 l4 xl4 grey-darken5">
                    .grey-darken5
                </div>
                <div class="col xs6 s6 m6 l4 xl4 grey-darken6">
                    .grey-darken6
                </div>
            </div>
            <div class="row">
                <div class="col xs6 s6 m6 l4 xl4 brown-lighten6">
                    .brown-lighten6
                </div>
                <div class="col xs6 s6 m6 l4 xl4 brown-lighten5">
                    .brown-lighten5
                </div>
                <div class="col xs6 s6 m6 l4 xl4 brown-lighten4">
                    .brown-lighten4
                </div>
                <div class="col xs6 s6 m6 l4 xl4 brown-lighten3">
                    .brown-lighten3
                </div>
                <div class="col xs6 s6 m6 l4 xl4 brown-lighten2">
                    .brown-lighten2
                </div>
                <div class="col xs6 s6 m6 l4 xl4 brown-lighten1">
                    .brown-lighten1
                </div>
                <div class="col xs12 s12 m12 l12 xl12 brown-medium">
                    .brown-medium
                </div>
                <div class="col xs6 s6 m6 l4 xl4 brown-darken1">
                    .brown-darken1
                </div>
                <div class="col xs6 s6 m6 l4 xl4 brown-darken2">
                    .brown-darken2
                </div>
                <div class="col xs6 s6 m6 l4 xl4 brown-darken3">
                    .brown-darken3
                </div>
                <div class="col xs6 s6 m6 l4 xl4 brown-darken4">
                    .brown-darken4
                </div>
                <div class="col xs6 s6 m6 l4 xl4 brown-darken5">
                    .brown-darken5
                </div>
                <div class="col xs6 s6 m6 l4 xl4 brown-darken6">
                    .brown-darken6
                </div>
            </div>
            <div class="row">
                <div class="col xs6 s6 m6 l4 xl4 magenta-lighten6">
                    .magenta-lighten6
                </div>
                <div class="col xs6 s6 m6 l4 xl4 magenta-lighten5">
                    .magenta-lighten5
                </div>
                <div class="col xs6 s6 m6 l4 xl4 magenta-lighten4">
                    .magenta-lighten4
                </div>
                <div class="col xs6 s6 m6 l4 xl4 magenta-lighten3">
                    .magenta-lighten3
                </div>
                <div class="col xs6 s6 m6 l4 xl4 magenta-lighten2">
                    .magenta-lighten2
                </div>
                <div class="col xs6 s6 m6 l4 xl4 magenta-lighten1">
                    .magenta-lighten1
                </div>
                <div class="col xs12 s12 m12 l12 xl12 magenta-medium">
                    .magenta-medium
                </div>
                <div class="col xs6 s6 m6 l4 xl4 magenta-darken1">
                    .magenta-darken1
                </div>
                <div class="col xs6 s6 m6 l4 xl4 magenta-darken2">
                    .magenta-darken2
                </div>
                <div class="col xs6 s6 m6 l4 xl4 magenta-darken3">
                    .magenta-darken3
                </div>
                <div class="col xs6 s6 m6 l4 xl4 magenta-darken4">
                    .magenta-darken4
                </div>
                <div class="col xs6 s6 m6 l4 xl4 magenta-darken5">
                    .magenta-darken5
                </div>
                <div class="col xs6 s6 m6 l4 xl4 magenta-darken6">
                    .magenta-darken6
                </div>
            </div>
            <div class="row">
                <div class="col xs6 s6 m6 l4 xl4 aqua-lighten6">
                    .aqua-lighten6
                </div>
                <div class="col xs6 s6 m6 l4 xl4 aqua-lighten5">
                    .aqua-lighten5
                </div>
                <div class="col xs6 s6 m6 l4 xl4 aqua-lighten4">
                    .aqua-lighten4
                </div>
                <div class="col xs6 s6 m6 l4 xl4 aqua-lighten3">
                    .aqua-lighten3
                </div>
                <div class="col xs6 s6 m6 l4 xl4 aqua-lighten2">
                    .aqua-lighten2
                </div>
                <div class="col xs6 s6 m6 l4 xl4 aqua-lighten1">
                    .aqua-lighten1
                </div>
                <div class="col xs12 s12 m12 l12 xl12 aqua-medium">
                    .aqua-medium
                </div>
                <div class="col xs6 s6 m6 l4 xl4 aqua-darken1">
                    .aqua-darken1
                </div>
                <div class="col xs6 s6 m6 l4 xl4 aqua-darken2">
                    .aqua-darken2
                </div>
                <div class="col xs6 s6 m6 l4 xl4 aqua-darken3">
                    .aqua-darken3
                </div>
                <div class="col xs6 s6 m6 l4 xl4 aqua-darken4">
                    .aqua-darken4
                </div>
                <div class="col xs6 s6 m6 l4 xl4 aqua-darken5">
                    .aqua-darken5
                </div>
                <div class="col xs6 s6 m6 l4 xl4 aqua-darken6">
                    .aqua-darken6
                </div>
            </div>
            <div class="row">
                <div class="col xs6 s6 m6 l4 xl4 beige-lighten6">
                    .beige-lighten6
                </div>
                <div class="col xs6 s6 m6 l4 xl4 beige-lighten5">
                    .beige-lighten5
                </div>
                <div class="col xs6 s6 m6 l4 xl4 beige-lighten4">
                    .beige-lighten4
                </div>
                <div class="col xs6 s6 m6 l4 xl4 beige-lighten3">
                    .beige-lighten3
                </div>
                <div class="col xs6 s6 m6 l4 xl4 beige-lighten2">
                    .beige-lighten2
                </div>
                <div class="col xs6 s6 m6 l4 xl4 beige-lighten1">
                    .beige-lighten1
                </div>
                <div class="col xs12 s12 m12 l12 xl12 beige-medium">
                    .beige-medium
                </div>
                <div class="col xs6 s6 m6 l4 xl4 beige-darken1">
                    .beige-darken1
                </div>
                <div class="col xs6 s6 m6 l4 xl4 beige-darken2">
                    .beige-darken2
                </div>
                <div class="col xs6 s6 m6 l4 xl4 beige-darken3">
                    .beige-darken3
                </div>
                <div class="col xs6 s6 m6 l4 xl4 beige-darken4">
                    .beige-darken4
                </div>
                <div class="col xs6 s6 m6 l4 xl4 beige-darken5">
                    .beige-darken5
                </div>
                <div class="col xs6 s6 m6 l4 xl4 beige-darken6">
                    .beige-darken6
                </div>
            </div>
        </div>
    </article>
    <article id="extracolors" class="section scrollspy">
        <h3>Erweitertes Spektrum</h3>
        <p>Der erweiterte Farbraum fügt weitere wichtige Farben zur Farbauswahl hinzu. </p>
        <div class="row content_code content_colors">
            <div class="row">
                <div class="col xs6 s6 m6 l4 xl4 flatyellow-lighten6">
                    .flatyellow-lighten6
                </div>
                <div class="col xs6 s6 m6 l4 xl4 flatyellow-lighten5">
                    .flatyellow-lighten5
                </div>
                <div class="col xs6 s6 m6 l4 xl4 flatyellow-lighten4">
                    .flatyellow-lighten4
                </div>
                <div class="col xs6 s6 m6 l4 xl4 flatyellow-lighten3">
                    .flatyellow-lighten3
                </div>
                <div class="col xs6 s6 m6 l4 xl4 flatyellow-lighten2">
                    .flatyellow-lighten2
                </div>
                <div class="col xs6 s6 m6 l4 xl4 flatyellow-lighten1">
                    .flatyellow-lighten1
                </div>
                <div class="col xs12 s12 m12 l12 xl12 flatyellow-medium">
                    .flatyellow-medium
                </div>
                <div class="col xs6 s6 m6 l4 xl4 flatyellow-darken1">
                    .flatyellow-darken1
                </div>
                <div class="col xs6 s6 m6 l4 xl4 flatyellow-darken2">
                    .flatyellow-darken2
                </div>
                <div class="col xs6 s6 m6 l4 xl4 flatyellow-darken3">
                    .flatyellow-darken3
                </div>
                <div class="col xs6 s6 m6 l4 xl4 flatyellow-darken4">
                    .flatyellow-darken4
                </div>
                <div class="col xs6 s6 m6 l4 xl4 flatyellow-darken5">
                    .flatyellow-darken5
                </div>
                <div class="col xs6 s6 m6 l4 xl4 flatyellow-darken6">
                    .flatyellow-darken6
                </div>
            </div>
            <div class="row">
                <div class="col xs6 s6 m6 l4 xl4 swampgreen-lighten6">
                    .swampgreen-lighten6
                </div>
                <div class="col xs6 s6 m6 l4 xl4 swampgreen-lighten5">
                    .swampgreen-lighten5
                </div>
                <div class="col xs6 s6 m6 l4 xl4 swampgreen-lighten4">
                    .swampgreen-lighten4
                </div>
                <div class="col xs6 s6 m6 l4 xl4 swampgreen-lighten3">
                    .swampgreen-lighten3
                </div>
                <div class="col xs6 s6 m6 l4 xl4 swampgreen-lighten2">
                    .swampgreen-lighten2
                </div>
                <div class="col xs6 s6 m6 l4 xl4 swampgreen-lighten1">
                    .swampgreen-lighten1
                </div>
                <div class="col xs12 s12 m12 l12 xl12 swampgreen-medium">
                    .swampgreen-medium
                </div>
                <div class="col xs6 s6 m6 l4 xl4 swampgreen-darken1">
                    .swampgreen-darken1
                </div>
                <div class="col xs6 s6 m6 l4 xl4 swampgreen-darken2">
                    .swampgreen-darken2
                </div>
                <div class="col xs6 s6 m6 l4 xl4 swampgreen-darken3">
                    .swampgreen-darken3
                </div>
                <div class="col xs6 s6 m6 l4 xl4 swampgreen-darken4">
                    .swampgreen-darken4
                </div>
                <div class="col xs6 s6 m6 l4 xl4 swampgreen-darken5">
                    .swampgreen-darken5
                </div>
                <div class="col xs6 s6 m6 l4 xl4 swampgreen-darken6">
                    .swampgreen-darken6
                </div>
            </div>
            <div class="row">
                <div class="col xs6 s6 m6 l4 xl4 brightblue-lighten6">
                    .brightblue-lighten6
                </div>
                <div class="col xs6 s6 m6 l4 xl4 brightblue-lighten5">
                    .brightblue-lighten5
                </div>
                <div class="col xs6 s6 m6 l4 xl4 brightblue-lighten4">
                    .brightblue-lighten4
                </div>
                <div class="col xs6 s6 m6 l4 xl4 brightblue-lighten3">
                    .brightblue-lighten3
                </div>
                <div class="col xs6 s6 m6 l4 xl4 brightblue-lighten2">
                    .brightblue-lighten2
                </div>
                <div class="col xs6 s6 m6 l4 xl4 brightblue-lighten1">
                    .brightblue-lighten1
                </div>
                <div class="col xs12 s12 m12 l12 xl12 brightblue-medium">
                    .brightblue-medium
                </div>
                <div class="col xs6 s6 m6 l4 xl4 brightblue-darken1">
                    .brightblue-darken1
                </div>
                <div class="col xs6 s6 m6 l4 xl4 brightblue-darken2">
                    .brightblue-darken2
                </div>
                <div class="col xs6 s6 m6 l4 xl4 brightblue-darken3">
                    .brightblue-darken3
                </div>
                <div class="col xs6 s6 m6 l4 xl4 brightblue-darken4">
                    .brightblue-darken4
                </div>
                <div class="col xs6 s6 m6 l4 xl4 brightblue-darken5">
                    .brightblue-darken5
                </div>
                <div class="col xs6 s6 m6 l4 xl4 brightblue-darken6">
                    .brightblue-darken6
                </div>
            </div>
            <div class="row">
                <div class="col xs6 s6 m6 l4 xl4 iceblue-lighten6">
                    .iceblue-lighten6
                </div>
                <div class="col xs6 s6 m6 l4 xl4 iceblue-lighten5">
                    .iceblue-lighten5
                </div>
                <div class="col xs6 s6 m6 l4 xl4 iceblue-lighten4">
                    .iceblue-lighten4
                </div>
                <div class="col xs6 s6 m6 l4 xl4 iceblue-lighten3">
                    .iceblue-lighten3
                </div>
                <div class="col xs6 s6 m6 l4 xl4 iceblue-lighten2">
                    .iceblue-lighten2
                </div>
                <div class="col xs6 s6 m6 l4 xl4 iceblue-lighten1">
                    .iceblue-lighten1
                </div>
                <div class="col xs12 s12 m12 l12 xl12 iceblue-medium">
                    .iceblue-medium
                </div>
                <div class="col xs6 s6 m6 l4 xl4 iceblue-darken1">
                    .iceblue-darken1
                </div>
                <div class="col xs6 s6 m6 l4 xl4 iceblue-darken2">
                    .iceblue-darken2
                </div>
                <div class="col xs6 s6 m6 l4 xl4 iceblue-darken3">
                    .iceblue-darken3
                </div>
                <div class="col xs6 s6 m6 l4 xl4 iceblue-darken4">
                    .iceblue-darken4
                </div>
                <div class="col xs6 s6 m6 l4 xl4 iceblue-darken5">
                    .iceblue-darken5
                </div>
                <div class="col xs6 s6 m6 l4 xl4 iceblue-darken6">
                    .iceblue-darken6
                </div>
            </div>
            <div class="row">
                <div class="col xs6 s6 m6 l4 xl4 grey-lighten6">
                    .grey-lighten6
                </div>
                <div class="col xs6 s6 m6 l4 xl4 grey-lighten5">
                    .grey-lighten5
                </div>
                <div class="col xs6 s6 m6 l4 xl4 grey-lighten4">
                    .grey-lighten4
                </div>
                <div class="col xs6 s6 m6 l4 xl4 grey-lighten3">
                    .grey-lighten3
                </div>
                <div class="col xs6 s6 m6 l4 xl4 grey-lighten2">
                    .grey-lighten2
                </div>
                <div class="col xs6 s6 m6 l4 xl4 grey-lighten1">
                    .grey-lighten1
                </div>
                <div class="col xs12 s12 m12 l12 xl12 grey-medium">
                    .grey-medium
                </div>
                <div class="col xs6 s6 m6 l4 xl4 grey-darken1">
                    .grey-darken1
                </div>
                <div class="col xs6 s6 m6 l4 xl4 grey-darken2">
                    .grey-darken2
                </div>
                <div class="col xs6 s6 m6 l4 xl4 grey-darken3">
                    .grey-darken3
                </div>
                <div class="col xs6 s6 m6 l4 xl4 grey-darken4">
                    .grey-darken4
                </div>
                <div class="col xs6 s6 m6 l4 xl4 grey-darken5">
                    .grey-darken5
                </div>
                <div class="col xs6 s6 m6 l4 xl4 grey-darken6">
                    .grey-darken6
                </div>
            </div>
            <div class="row">
                <div class="col xs6 s6 m6 l4 xl4 brown-lighten6">
                    .brown-lighten6
                </div>
                <div class="col xs6 s6 m6 l4 xl4 brown-lighten5">
                    .brown-lighten5
                </div>
                <div class="col xs6 s6 m6 l4 xl4 brown-lighten4">
                    .brown-lighten4
                </div>
                <div class="col xs6 s6 m6 l4 xl4 brown-lighten3">
                    .brown-lighten3
                </div>
                <div class="col xs6 s6 m6 l4 xl4 brown-lighten2">
                    .brown-lighten2
                </div>
                <div class="col xs6 s6 m6 l4 xl4 brown-lighten1">
                    .brown-lighten1
                </div>
                <div class="col xs12 s12 m12 l12 xl12 brown-medium">
                    .brown-medium
                </div>
                <div class="col xs6 s6 m6 l4 xl4 brown-darken1">
                    .brown-darken1
                </div>
                <div class="col xs6 s6 m6 l4 xl4 brown-darken2">
                    .brown-darken2
                </div>
                <div class="col xs6 s6 m6 l4 xl4 brown-darken3">
                    .brown-darken3
                </div>
                <div class="col xs6 s6 m6 l4 xl4 brown-darken4">
                    .brown-darken4
                </div>
                <div class="col xs6 s6 m6 l4 xl4 brown-darken5">
                    .brown-darken5
                </div>
                <div class="col xs6 s6 m6 l4 xl4 brown-darken6">
                    .brown-darken6
                </div>
            </div>
            <div class="row">
                <div class="col xs6 s6 m6 l4 xl4 magenta-lighten6">
                    .magenta-lighten6
                </div>
                <div class="col xs6 s6 m6 l4 xl4 magenta-lighten5">
                    .magenta-lighten5
                </div>
                <div class="col xs6 s6 m6 l4 xl4 magenta-lighten4">
                    .magenta-lighten4
                </div>
                <div class="col xs6 s6 m6 l4 xl4 magenta-lighten3">
                    .magenta-lighten3
                </div>
                <div class="col xs6 s6 m6 l4 xl4 magenta-lighten2">
                    .magenta-lighten2
                </div>
                <div class="col xs6 s6 m6 l4 xl4 magenta-lighten1">
                    .magenta-lighten1
                </div>
                <div class="col xs12 s12 m12 l12 xl12 magenta-medium">
                    .magenta-medium
                </div>
                <div class="col xs6 s6 m6 l4 xl4 magenta-darken1">
                    .magenta-darken1
                </div>
                <div class="col xs6 s6 m6 l4 xl4 magenta-darken2">
                    .magenta-darken2
                </div>
                <div class="col xs6 s6 m6 l4 xl4 magenta-darken3">
                    .magenta-darken3
                </div>
                <div class="col xs6 s6 m6 l4 xl4 magenta-darken4">
                    .magenta-darken4
                </div>
                <div class="col xs6 s6 m6 l4 xl4 magenta-darken5">
                    .magenta-darken5
                </div>
                <div class="col xs6 s6 m6 l4 xl4 magenta-darken6">
                    .magenta-darken6
                </div>
            </div>
            <div class="row">
                <div class="col xs6 s6 m6 l4 xl4 aqua-lighten6">
                    .aqua-lighten6
                </div>
                <div class="col xs6 s6 m6 l4 xl4 aqua-lighten5">
                    .aqua-lighten5
                </div>
                <div class="col xs6 s6 m6 l4 xl4 aqua-lighten4">
                    .aqua-lighten4
                </div>
                <div class="col xs6 s6 m6 l4 xl4 aqua-lighten3">
                    .aqua-lighten3
                </div>
                <div class="col xs6 s6 m6 l4 xl4 aqua-lighten2">
                    .aqua-lighten2
                </div>
                <div class="col xs6 s6 m6 l4 xl4 aqua-lighten1">
                    .aqua-lighten1
                </div>
                <div class="col xs12 s12 m12 l12 xl12 aqua-medium">
                    .aqua-medium
                </div>
                <div class="col xs6 s6 m6 l4 xl4 aqua-darken1">
                    .aqua-darken1
                </div>
                <div class="col xs6 s6 m6 l4 xl4 aqua-darken2">
                    .aqua-darken2
                </div>
                <div class="col xs6 s6 m6 l4 xl4 aqua-darken3">
                    .aqua-darken3
                </div>
                <div class="col xs6 s6 m6 l4 xl4 aqua-darken4">
                    .aqua-darken4
                </div>
                <div class="col xs6 s6 m6 l4 xl4 aqua-darken5">
                    .aqua-darken5
                </div>
                <div class="col xs6 s6 m6 l4 xl4 aqua-darken6">
                    .aqua-darken6
                </div>
            </div>
            <div class="row">
                <div class="col xs6 s6 m6 l4 xl4 beige-lighten6">
                    .beige-lighten6
                </div>
                <div class="col xs6 s6 m6 l4 xl4 beige-lighten5">
                    .beige-lighten5
                </div>
                <div class="col xs6 s6 m6 l4 xl4 beige-lighten4">
                    .beige-lighten4
                </div>
                <div class="col xs6 s6 m6 l4 xl4 beige-lighten3">
                    .beige-lighten3
                </div>
                <div class="col xs6 s6 m6 l4 xl4 beige-lighten2">
                    .beige-lighten2
                </div>
                <div class="col xs6 s6 m6 l4 xl4 beige-lighten1">
                    .beige-lighten1
                </div>
                <div class="col xs12 s12 m12 l12 xl12 beige-medium">
                    .beige-medium
                </div>
                <div class="col xs6 s6 m6 l4 xl4 beige-darken1">
                    .beige-darken1
                </div>
                <div class="col xs6 s6 m6 l4 xl4 beige-darken2">
                    .beige-darken2
                </div>
                <div class="col xs6 s6 m6 l4 xl4 beige-darken3">
                    .beige-darken3
                </div>
                <div class="col xs6 s6 m6 l4 xl4 beige-darken4">
                    .beige-darken4
                </div>
                <div class="col xs6 s6 m6 l4 xl4 beige-darken5">
                    .beige-darken5
                </div>
                <div class="col xs6 s6 m6 l4 xl4 beige-darken6">
                    .beige-darken6
                </div>
            </div>
        </div>
    </article>
    <article id="colorthemes" class="section scrollspy">
        <h3>Farbkreationen</h3>
        <p>Wollen Sie einen Webshop für Herbstmode eröffnen, jedoch kein Vorwissen im Bereich Farblehre? Auch das
            sollte
            mit den vordefinierten Schemata keine Problem für sie werden.</p>
        <article>
            <h3 class="title">Herbst Kollektion</h3>
            <div class="content_code content_colors">
                <div class="row">
                    <div class="col xs6 s6 m6 l4 xl4 autumnred-lighten6">
                        .autumnred-lighten6
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 autumnred-lighten5">
                        .autumnred-lighten5
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 autumnred-lighten4">
                        .autumnred-lighten4
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 autumnred-lighten3">
                        .autumnred-lighten3
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 autumnred-lighten2">
                        .autumnred-lighten2
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 autumnred-lighten1">
                        .autumnred-lighten1
                    </div>
                    <div class="col xs12 s12 m12 l12 xl12 autumnred-medium">
                        .autumnred-medium
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 autumnred-darken1">
                        .autumnred-darken1
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 autumnred-darken2">
                        .autumnred-darken2
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 autumnred-darken3">
                        .autumnred-darken3
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 autumnred-darken4">
                        .autumnred-darken4
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 autumnred-darken5">
                        .autumnred-darken5
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 autumnred-darken6">
                        .autumnred-darken6
                    </div>
                </div>
                <div class="row">
                    <div class="col xs6 s6 m6 l4 xl4 autumngreen-lighten6">
                        .autumngreen-lighten6
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 autumngreen-lighten5">
                        .autumngreen-lighten5
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 autumngreen-lighten4">
                        .autumngreen-lighten4
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 autumngreen-lighten3">
                        .autumngreen-lighten3
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 autumngreen-lighten2">
                        .autumngreen-lighten2
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 autumngreen-lighten1">
                        .autumngreen-lighten1
                    </div>
                    <div class="col xs12 s12 m12 l12 xl12 autumngreen-medium">
                        .autumngreen-medium
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 autumngreen-darken1">
                        .autumngreen-darken1
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 autumngreen-darken2">
                        .autumngreen-darken2
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 autumngreen-darken3">
                        .autumngreen-darken3
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 autumngreen-darken4">
                        .autumngreen-darken4
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 autumngreen-darken5">
                        .autumngreen-darken5
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 autumngreen-darken6">
                        .autumngreen-darken6
                    </div>
                </div>
                <div class="row">
                    <div class="col xs6 s6 m6 l4 xl4 autumnyellow-lighten6">
                        .autumnyellow-lighten6
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 autumnyellow-lighten5">
                        .autumnyellow-lighten5
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 autumnyellow-lighten4">
                        .autumnyellow-lighten4
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 autumnyellow-lighten3">
                        .autumnyellow-lighten3
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 autumnyellow-lighten2">
                        .autumnyellow-lighten2
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 autumnyellow-lighten1">
                        .autumnyellow-lighten1
                    </div>
                    <div class="col xs12 s12 m12 l12 xl12 autumnyellow-medium">
                        .autumnyellow-medium
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 autumnyellow-darken1">
                        .autumnyellow-darken1
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 autumnyellow-darken2">
                        .autumnyellow-darken2
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 autumnyellow-darken3">
                        .autumnyellow-darken3
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 autumnyellow-darken4">
                        .autumnyellow-darken4
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 autumnyellow-darken5">
                        .autumnyellow-darken5
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 autumnyellow-darken6">
                        .autumnyellow-darken6
                    </div>
                </div>
                <div class="row">
                    <div class="col xs6 s6 m6 l4 xl4 autumnorange-lighten6">
                        .autumnorange-lighten6
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 autumnorange-lighten5">
                        .autumnorange-lighten5
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 autumnorange-lighten4">
                        .autumnorange-lighten4
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 autumnorange-lighten3">
                        .autumnorange-lighten3
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 autumnorange-lighten2">
                        .autumnorange-lighten2
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 autumnorange-lighten1">
                        .autumnorange-lighten1
                    </div>
                    <div class="col xs12 s12 m12 l12 xl12 autumnorange-medium">
                        .autumnorange-medium
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 autumnorange-darken1">
                        .autumnorange-darken1
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 autumnorange-darken2">
                        .autumnorange-darken2
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 autumnorange-darken3">
                        .autumnorange-darken3
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 autumnorange-darken4">
                        .autumnorange-darken4
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 autumnorange-darken5">
                        .autumnorange-darken5
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 autumnorange-darken6">
                        .autumnorange-darken6
                    </div>
                </div>
                <div class="row">
                    <div class="col xs6 s6 m6 l4 xl4 autumnbrown-lighten6">
                        .autumnbrown-lighten6
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 autumnbrown-lighten5">
                        .autumnbrown-lighten5
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 autumnbrown-lighten4">
                        .autumnbrown-lighten4
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 autumnbrown-lighten3">
                        .autumnbrown-lighten3
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 autumnbrown-lighten2">
                        .autumnbrown-lighten2
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 autumnbrown-lighten1">
                        .autumnbrown-lighten1
                    </div>
                    <div class="col xs12 s12 m12 l12 xl12 autumnbrown-medium">
                        .autumnbrown-medium
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 autumnbrown-darken1">
                        .autumnbrown-darken1
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 autumnbrown-darken2">
                        .autumnbrown-darken2
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 autumnbrown-darken3">
                        .autumnbrown-darken3
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 autumnbrown-darken4">
                        .autumnbrown-darken4
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 autumnbrown-darken5">
                        .autumnbrown-darken5
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 autumnbrown-darken6">
                        .autumnbrown-darken6
                    </div>
                </div>
            </div>
        </article>
        <article>
            <h3>Camouflage Kollektion</h3>
            <div class="content_code content_colors">
                <div class="row">
                    <div class="col xs6 s6 m6 l4 xl4 camodarkgreen-lighten6">
                        .camodarkgreen-lighten6
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 camodarkgreen-lighten5">
                        .camodarkgreen-lighten5
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 camodarkgreen-lighten4">
                        .camodarkgreen-lighten4
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 camodarkgreen-lighten3">
                        .camodarkgreen-lighten3
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 camodarkgreen-lighten2">
                        .camodarkgreen-lighten2
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 camodarkgreen-lighten1">
                        .camodarkgreen-lighten1
                    </div>
                    <div class="col xs12 s12 m12 l12 xl12 camodarkgreen-medium">
                        .camodarkgreen-medium
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 camodarkgreen-darken1">
                        .camodarkgreen-darken1
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 camodarkgreen-darken2">
                        .camodarkgreen-darken2
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 camodarkgreen-darken3">
                        .camodarkgreen-darken3
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 camodarkgreen-darken4">
                        .camodarkgreen-darken4
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 camodarkgreen-darken5">
                        .camodarkgreen-darken5
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 camodarkgreen-darken6">
                        .camodarkgreen-darken6
                    </div>
                </div>
                <div class="row">
                    <div class="col xs6 s6 m6 l4 xl4 camolightgreen-lighten6">
                        .camolightgreen-lighten6
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 camolightgreen-lighten5">
                        .camolightgreen-lighten5
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 camolightgreen-lighten4">
                        .camolightgreen-lighten4
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 camolightgreen-lighten3">
                        .camolightgreen-lighten3
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 camolightgreen-lighten2">
                        .camolightgreen-lighten2
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 camolightgreen-lighten1">
                        .camolightgreen-lighten1
                    </div>
                    <div class="col xs12 s12 m12 l12 xl12 camolightgreen-medium">
                        .camolightgreen-medium
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 camolightgreen-darken1">
                        .camolightgreen-darken1
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 camolightgreen-darken2">
                        .camolightgreen-darken2
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 camolightgreen-darken3">
                        .camolightgreen-darken3
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 camolightgreen-darken4">
                        .camolightgreen-darken4
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 camolightgreen-darken5">
                        .camolightgreen-darken5
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 camolightgreen-darken6">
                        .camolightgreen-darken6
                    </div>
                </div>
                <div class="row">
                    <div class="col xs6 s6 m6 l4 xl4 camobrowngreen-lighten6">
                        .camobrowngreen-lighten6
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 camobrowngreen-lighten5">
                        .camobrowngreen-lighten5
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 camobrowngreen-lighten4">
                        .camobrowngreen-lighten4
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 camobrowngreen-lighten3">
                        .camobrowngreen-lighten3
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 camobrowngreen-lighten2">
                        .camobrowngreen-lighten2
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 camobrowngreen-lighten1">
                        .camobrowngreen-lighten1
                    </div>
                    <div class="col xs12 s12 m12 l12 xl12 camobrowngreen-medium">
                        .camobrowngreen-medium
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 camobrowngreen-darken1">
                        .camobrowngreen-darken1
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 camobrowngreen-darken2">
                        .camobrowngreen-darken2
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 camobrowngreen-darken3">
                        .camobrowngreen-darken3
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 camobrowngreen-darken4">
                        .camobrowngreen-darken4
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 camobrowngreen-darken5">
                        .camobrowngreen-darken5
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 camobrowngreen-darken6">
                        .camobrowngreen-darken6
                    </div>
                </div>
                <div class="row">
                    <div class="col xs6 s6 m6 l4 xl4 camolightbrown-lighten6">
                        .camolightbrown-lighten6
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 camolightbrown-lighten5">
                        .camolightbrown-lighten5
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 camolightbrown-lighten4">
                        .camolightbrown-lighten4
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 camolightbrown-lighten3">
                        .camolightbrown-lighten3
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 camolightbrown-lighten2">
                        .camolightbrown-lighten2
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 camolightbrown-lighten1">
                        .camolightbrown-lighten1
                    </div>
                    <div class="col xs12 s12 m12 l12 xl12 camolightbrown-medium">
                        .camolightbrown-medium
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 camolightbrown-darken1">
                        .camolightbrown-darken1
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 camolightbrown-darken2">
                        .camolightbrown-darken2
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 camolightbrown-darken3">
                        .camolightbrown-darken3
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 camolightbrown-darken4">
                        .camolightbrown-darken4
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 camolightbrown-darken5">
                        .camolightbrown-darken5
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 camolightbrown-darken6">
                        .camolightbrown-darken6
                    </div>
                </div>
                <div class="row">
                    <div class="col xs6 s6 m6 l4 xl4 camodarkbrown-lighten6">
                        .camodarkbrown-lighten6
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 camodarkbrown-lighten5">
                        .camodarkbrown-lighten5
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 camodarkbrown-lighten4">
                        .camodarkbrown-lighten4
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 camodarkbrown-lighten3">
                        .camodarkbrown-lighten3
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 camodarkbrown-lighten2">
                        .camodarkbrown-lighten2
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 camodarkbrown-lighten1">
                        .camodarkbrown-lighten1
                    </div>
                    <div class="col xs12 s12 m12 l12 xl12 camodarkbrown-medium">
                        .camodarkbrown-medium
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 camodarkbrown-darken1">
                        .camodarkbrown-darken1
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 camodarkbrown-darken2">
                        .camodarkbrown-darken2
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 camodarkbrown-darken3">
                        .camodarkbrown-darken3
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 camodarkbrown-darken4">
                        .camodarkbrown-darken4
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 camodarkbrown-darken5">
                        .camodarkbrown-darken5
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 camodarkbrown-darken6">
                        .camodarkbrown-darken6
                    </div>
                </div>
            </div>
        </article>
        <article>
            <h3 class="title">Supreme Kollektion</h3>
            <div class="content_code content_colors">
                <div class="row">
                    <div class="col xs6 s6 m6 l4 xl4 supreme-lighten6">
                        .supreme-lighten6
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 supreme-lighten5">
                        .supreme-lighten5
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 supreme-lighten4">
                        .supreme-lighten4
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 supreme-lighten3">
                        .supreme-lighten3
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 supreme-lighten2">
                        .supreme-lighten2
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 supreme-lighten1">
                        .supreme-lighten1
                    </div>
                    <div class="col xs12 s12 m12 l12 xl12 supreme-medium">
                        .supreme-medium
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 supreme-darken1">
                        .supreme-darken1
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 supreme-darken2">
                        .supreme-darken2
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 supreme-darken3">
                        .supreme-darken3
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 supreme-darken4">
                        .supreme-darken4
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 supreme-darken5">
                        .supreme-darken5
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 supreme-darken6">
                        .supreme-darken6
                    </div>
                </div>
                <div class="row">
                    <div class="col xs6 s6 m6 l4 xl4 supremewhite-lighten6">
                        .supremewhite-lighten6
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 supremewhite-lighten5">
                        .supremewhite-lighten5
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 supremewhite-lighten4">
                        .supremewhite-lighten4
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 supremewhite-lighten3">
                        .supremewhite-lighten3
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 supremewhite-lighten2">
                        .supremewhite-lighten2
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 supremewhite-lighten1">
                        .supremewhite-lighten1
                    </div>
                    <div class="col xs12 s12 m12 l12 xl12 supremewhite-medium">
                        .supremewhite-medium
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 supremewhite-darken1">
                        .supremewhite-darken1
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 supremewhite-darken2">
                        .supremewhite-darken2
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 supremewhite-darken3">
                        .supremewhite-darken3
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 supremewhite-darken4">
                        .supremewhite-darken4
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 supremewhite-darken5">
                        .supremewhite-darken5
                    </div>
                    <div class="col xs6 s6 m6 l4 xl4 supremewhite-darken6">
                        .supremewhite-darken6
                    </div>
                </div>
            </div>
        </article>
    </article>
    <div class="container-line">
        <hr>
    </div>
    <article id="media" class="section scrollspy">
        <h2>Media</h2>
        <p>
            Da Medien Elemente häufig in Webseiten eingebaut werden haben wir einige Klassen bereit gestellt die das
            Einbinden erleichtern. Wir haben die Medien in die Bereiche Bilder, Videos und Audio geteilt.
        </p>
    </article>
    <article id="images" class="section scrollspy">
        <h3>Bilder</h3>
        <p>Um Bilder durch das Framework responsive zu machen gibt es die Klasse <i class="classname">.img-wrapper</i> welche es ermöglicht
            Bilder das sie sich automatisch prozentuell an die Größe des Browserfensters anpassen. Um Bildern ein spezielles
            Ausehen zu geben können die Klassen <i class="classname">.round-img</i> und <i class="classname">.circle-img</i> zusätzlich
            verwendet werden um Bilder abzurunden oder ganz rund zu gestalten.
        </p>
        <div class="row content_code spacearound">
            <div class="col xs12 s12 m12 l3 x3">
                <img class="img-responsive round-img" src="../lib/img/expimage/CommachioI_HAG.jpg" alt="CommachioI Hagn">
            </div>
            <div class="col xs12 s12 m12 l3 x3">
                <img class="img-responsive circle-img" src="../lib/img/expimage/CommachioII_HAG.jpg" alt="CommachioII Hagn">
            </div>
            <div class="col xs12 s12 m12 l3 x3">
                <img class="img-responsive" src="../lib/img/expimage/CommachioIII_HAG.jpg" alt="CommachioIII Hagn">
            </div>
        </div>
        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp><div class="image-wrapper">
    <img class="round-img" src="../lib/img/expimage/CommachioI_HAG.jpg" alt="CommachioI Hagn">
</div>
<div class="image-wrapper">
    <img class="circle-img" src="../lib/img/expimage/CommachioII_HAG.jpg" alt="CommachioII Hagn">
</div>
<div class="image-wrapper">
    <img src="../lib/img/expimage/CommachioIII_HAG.jpg" alt="CommachioIII Hagn">
</div></xmp></pre>
            </code>
        </div>
    </article>
    <article id="video" class="section scrollspy">
        <h3>Video</h3>
        <p>Die Klasse <i class="classname">.video-wrapper-16</i> und <i class="classname">.video-wrapper-4</i>
            ermöglichen das Videos sich prozentuell zum Browserfenster ändern wobei die eine Klasse für 16:9 Videos geeigent ist und die andere
            für Videos im 4:3 Format.
        </p>
        <div class="content_code">
            <video controls class="col xs12">
                <source src="../lib/img/expimage/Attersee%20I%20HAG.m4v" type="video/mp4">
            </video>
        </div>
        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp><div class="video-wrapper-4">
    <video controls class="col xs12">
        <source src="../lib/img/expimage/Attersee%20I%20HAG.m4v" type="video/mp4">
    </video>
</div>
<div class="video-wrapper-16">
   <video controls class="col xs12">
       <source src="../lib/img/expimage/Attersee%20I%20HAG.m4v" type="video/mp4">
   </video>
</div></xmp></pre>
            </code>
        </div>
    </article>
    <article id="audio" class="section scrollspy">
        <h3>Audio</h3>
        <p>
            Der <i class="tagname">&lt;audio&gt;</i> Tag in HTML bietet eine standart Möglichkeit Audiodateien in Webseiten einzubinden.
            Das default Design des Tags wird in jedem Browser unterschiedlichen dargestellt.
            Das Framework beinhaltet die Klasse <i class="classname">.audio-wrapper</i> welche dem Audio Tag eine individuelles Aussehen,
            das in allen Browsern gleich ist, gibt.
        </p>
        <div class="row content_code center">
            <audio controls>
                <source src="../lib/audio/David%20Bowie%20-%20Ziggy%20Stardust.mp3" type="audio/mp3">
            </audio>
        </div>
        <div class="codeBox">
            <code>
                <pre class="prettyprint"><xmp><h3 class="test">Gleiche Spaltengröße</h3></xmp></pre>
            </code>
        </div>
    </article>
    <div class="container-line">
        <hr>
    </div>
    <article id="table" class="section scrollspy">
        <h2>Tabellen</h2>
        <p>
            Tabellen sind ein weiteres wichtiges Layout Element und können vielseitig eingesetzt werden.
            Das Framework bietet ein Standartdesign für den <i class="tagname">&lt;table&gt;</i> Tag. Zusätzlich gibt es 3
            unterschiedliche Klassen die dem <i class="tagname">&lt;table&gt;</i> Tag zugewiesen werden können um der Tabelle ein spezielles
            Aussehen zu geben. Mit der Klasse <i class="classname">.table-light</i> wird beim Überfahren einer Zeile die Hintergrundfarbe
            dieser Tabelle grau. Durch die Klasse <i class="classname">.table-responsive</i> bekommt die Tabelle die Eigenschaft sich
            prozentual dem Browserfenster anzupassen. Um eine gestreifte Tabelle zu verwenden kann dem <i class="tagname">&lt;table&gt;</i> Tag die Klasse
            <i class="classname">.table-stripped</i> hinzugefügt werden.
        </p>
        <div class="row content_code spacearound">
            <div class="col xs12 s12 m12 l12 xl3">
                <table class="table_demo">
                    <tr>
                        <th>Farben</th>
                        <th>Schriftarten</th>
                        <th>Elemente</th>
                    </tr>
                    <tr>
                        <td>Rot</td>
                        <td>Roboto</td>
                        <td>Header</td>
                    </tr>
                    <tr>
                        <td>Grün</td>
                        <td>Raleway</td>
                        <td>Cards</td>
                    </tr>
                    <tr>
                        <td>Blau</td>
                        <td>Open-Sans</td>
                        <td>Footer</td>
                    </tr>
                </table>
            </div>
            <div class="col xs12 s12 m12 l12 xl3">
                <table class="table-light table_demo">
                    <tr>
                        <th>Farben</th>
                        <th>Schriftarten</th>
                        <th>Elemente</th>
                    </tr>
                    <tr>
                        <td>Rot</td>
                        <td>Roboto</td>
                        <td>Header</td>
                    </tr>
                    <tr>
                        <td>Grün</td>
                        <td>Raleway</td>
                        <td>Cards</td>
                    </tr>
                    <tr>
                        <td>Blau</td>
                        <td>Open-Sans</td>
                        <td>Footer</td>
                    </tr>
                </table>
            </div>
            <div class="col xs12 s12 m12 l12 xl3">
                <table class="table-stripped table_demo">
                    <tr>
                        <th>Farben</th>
                        <th>Schriftarten</th>
                        <th>Elemente</th>
                    </tr>
                    <tr>
                        <td>Rot</td>
                        <td>Roboto</td>
                        <td>Header</td>
                    </tr>
                    <tr>
                        <td>Grün</td>
                        <td>Raleway</td>
                        <td>Cards</td>
                    </tr>
                    <tr>
                        <td>Blau</td>
                        <td>Open-Sans</td>
                        <td>Footer</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="codeBox">
            <code>
                    <pre class="prettyprint"><xmp><table>
    <tr>
        <th>Farben</th>
        <th>Schriftarten</th>
        <th>Elemente</th>
    </tr>
    <tr>
        <td>Rot</td>
        <td>Roboto</td>
        <td>Header</td>
    </tr>
    <tr>
        <td>Grün</td>
        <td>Raleway</td>
        <td>Cards</td>
    </tr>
    <tr>
        <td>Blau</td>
        <td>Open-Sans</td>
        <td>Footer</td>
    </tr>
</table>
<table class="table-light">
    <tr>
        <th>Farben</th>
        <th>Schriftarten</th>
        <th>Elemente</th>
    </tr>
    <tr>
        <td>Rot</td>
        <td>Roboto</td>
        <td>Header</td>
    </tr>
    <tr>
        <td>Grün</td>
        <td>Raleway</td>
        <td>Cards</td>
    </tr>
    <tr>
        <td>Blau</td>
        <td>Open-Sans</td>
        <td>Footer</td>
    </tr>
</table>
<table class="table-stripped">
    <tr>
        <th>Farben</th>
        <th>Schriftarten</th>
        <th>Elemente</th>
    </tr>
    <tr>
        <td>Rot</td>
        <td>Roboto</td>
        <td>Header</td>
    </tr>
    <tr>
        <td>Grün</td>
        <td>Raleway</td>
        <td>Cards</td>
    </tr>
    <tr>
        <td>Blau</td>
        <td>Open-Sans</td>
        <td>Footer</td>
    </tr>
</table></xmp></pre>
            </code>
        </div>
    </article>
    <div class="container-line">
        <hr>
    </div>
    <article id="helper" class="section scrollspy">
        <h2>Werkzeuge</h2>
        <p>Dieser Abschnitt beschäftigt sich mit kleinen Werkzeugen die verwendet werden können um das Layout einer
            Webseite zu verfeinern. Um den Fluss eines Elements zu verändern gibt es die Klassen <i class="classname">.float-right</i> und
            <i class="classname">.float-left</i>. Eine weitere wichtige Klasse ist <i class="classname">.block</i> mit
            ihr können Elemente als Block Elemente definiert werden das heißt das nach diesem Element ein Zeilenumbruch stattfindet. Um
            Inhalte ersichtlich zu trennen gibt es die Klasse <i class="classname">.line</i> mit der eine Trennline hinzugefügt werden kann
            sie sollte nur innerhalb eines <i class="tagname">&lt;hr&gt;</i> Tags verwendet werden.
        </p>
        <div class="row middle center margin-top">
            <span class="col xs4 s4 md4 l4 xl4">Dieser Text ist links fließend</span>
            <img src="../lib/img/expimage/MykonosII_KUT.JPG" class="float-right img-responsive img_small col xs4 s4 md4 l4 xl4" alt="MykonosII Kutis">
        </div>
        <hr class="line">
        <div class="row middle center">
            <img src="../lib/img/expimage/MykonosII_KUT.JPG" class="float-left img-responsive img_small col xs4 s4 md4 l4 xl4" alt="MykonosII Kutis">
            <span class="col xs4 s4 md4 l4 xl4">Dieser Text ist rechts fließend</span>
        </div>
        <p class="margin-top margin-bottom">
            <span class="block text-center border">Das ist ein Block Element</span>
        </p>
        <div class="codeBox">
            <code>
                <pre class="prettyprint"><xmp><span>Dieser Text ist links fließend</span>
<img src="../lib/img/expimage/MykonosII_KUT.JPG" class="float-right" alt="MykonosII Kutis">
<span>Dieser Text ist rechts fließend</span>
<img src="../lib/img/expimage/MykonosII_KUT.JPG" class="float-left" alt="MykonosII Kutis">
<span class="block">Das ist ein Block Element</span></xmp></pre>
            </code>
        </div>
    </article>
    <div class="container-line">
        <hr>
    </div>
    <article id="shadow" class="section scrollspy">
        <h2>Box Schatten</h2>
        <p>
            Da unser Framework Elemente wie Header, Footer und Karten enthält bietet es auch verschiedene Box Schatten
            für die jeweiligen Elemente an. Der Box Schatten hat den Effekt das er Elemente für den Betrachter so aussehen
            lässt als würde die entsprechende Komponente nicht Bestandteil der Website sein, sondern oben drauf liegen.
            Es gibt 5 verschiedene Klassen die einen unterschiedlich starken Schatten werfen. Die Klassen können über den Namen
            <i class="classname">.shadow-ex-light</i>,<i class="classname">.shadow-light</i>,<i class="classname">.shadow-medium</i>,
            <i class="classname">.shadow-hard</i> und <i class="classname">.shadow-ex-hard</i> wobei der Schatten
            aufsteigend stärker wird.
        </p>
        <div class="row content_code center">
            <div class="col xs12 s12 m12 l4 x2">
                <div class="shadow-ex-light box_demo"></div>
            </div>
            <div class="col xs12 s12 m12 l4 x2">
                <div class="shadow-light box_demo"></div>
            </div>
            <div class="col xs12 s12 m12 l4 x2">
                <div class="shadow-medium box_demo"></div>
            </div>
            <div class="col xs12 s12 m12 l4 x2">
                <div class="shadow-hard box_demo"></div>
            </div>
            <div class="col xs12 s12 m12 l4 x2">
                <div class="shadow-ex-hard box_demo"></div>
            </div>
        </div>
        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp><div class="shadow-ex-light"></div>
<div class="shadow-light"></div>
<div class="shadow-medium"></div>
<div class="shadow-hard"></div>
<div class="shadow-ex-hard"></div></xmp></pre>
            </code>
        </div>
    </article>
    <div class="container-line">
        <hr>
    </div>
    <article id="showhide" class="section scrollspy">
        <h2>Elemente ausblenden</h2>
        <p>
            In diesem Abschnitt werden die Klassen <i class="classname">.show</i> und <i class="classname">.hide</i>
            erklärt. Das Framework enthält einige Klassen die bestimmen ab welcher Bildschirmgröße welches Element angezeigt werden soll und
            welches versteckt werden soll. Dafür gibt es die Klassen <i class="varname">show-größe</i> und <i class="varname">hide-größe</i>. An
            der Stelle der Größe ist die gewünschte Bildschirmgröße einzusetzen. Es gibt <i class="classname">.sl</i>, <i class="classname">.md</i>,
            <i class="classname">.md-up</i><i class="classname">.md-down</i>,<i class="classname">.lg</i> und nur <i class="classname">.show</i> ohne
            Größe. Dieselben Regeln gelten auch für die <i class="classname">.hide</i> Klasse.
        </p>
        <h3 class="margin-top">Hide</h3>
        <div class="row center margin-bottom">
            <div class="hide col xs6 s6 m6 l2 xl2 hide_box">Box hide</div>
            <div class="hide-sl col xs6 s6 m6 l2 xl2 hide_box">Box hide-sl</div>
            <div class="hide-md col xs6 s6 m6 l2 xl2 hide_box">Box hide-md</div>
            <div class="hide-md-down col xs6 s6 m6 l2 xl2 hide_box">Box hide-md-down</div>
            <div class="hide-md-up col xs6 s6 m6 l2 xl2 hide_box">Box hide-md-up</div>
            <div class="hide-lg col xs6 s6 m6 l2 xl2 hide_box">Box hide-lg</div>
        </div>
        <h3 class="margin-top">Show</h3>
        <div class="row center margin-bottom">
            <div class="show col xs6 s6 m6 l2 xl2 hide_box">Box show</div>
            <div class="show-sl col xs6 s6 m6 l2 xl2 hide_box">Box show-sl</div>
            <div class="show-md col xs6 s6 m6 l2 xl2 hide_box">Box show-md</div>
            <div class="show-md-down col xs6 s6 m6 l2 xl2 hide_box">Box show-md-down</div>
            <div class="show-md-up col xs6 s6 m6 l2 xl2 hide_box">Box show-md-up</div>
            <div class="show-lg col xs6 s6 m6 l2 xl2 hide_box">Box show-lg</div>
        </div>
        <div class="codeBox">
            <code>
                <pre class="prettyprint"><xmp><div class="hide">Box hide</div>
<div class="hide-sl">Box hide-sl</div>
<div class="hide-md">Box hide-md</div>
<div class="hide-md-down">Box hide-md-down</div>
<div class="hide-md-up">Box hide-md-up</div>
<div class="hide-lg">Box hide-lg</div>
<div class="show">Box show</div>
<div class="show-sl">Box show-sl</div>
<div class="show-md">Box show-md</div>
<div class="show-md-down">Box show-md-down</div>
<div class="show-md-up">Box show-md-up</div>
<div class="show-lg">Box show-lg</div></xmp></pre>
            </code>
        </div>
    </article>
    <div class="container-line">
        <hr>
    </div>
    <article id="parallax" class="section scrollspy parallax-hide">
        <h2>Parallax</h2>
        <p>
            Das Parallax-Scrolling ist einer der großen neuen Webdesign-Trends. Bei diesem Effekt handelt es sich um
            einzelne Ebenen die sich unterschiedlich schnell bewegen so entsteht bei Betrachter der Eindruck von Tiefe. Das
            Parallax-Scrolling kann dem Framework und der Klasse <i class="classname">.parallax</i> einfach implementiert werden. Die Klasse
            <i class="classname">.parallax</i> sollte dabei auf dem <i class="tagname">&lt;body&gt;</i> oder einem <i class="classname">.container</i> angewendet
            werden.
        </p>
        <div class="row content_code">
            <div class="parallax parallax-container text-center" style="background-image: url('../lib/img/expimage/MykonosIII_KUT.jpg')">
                <div class="transparent-box">
                </div>
                <span class="title-lg text-supremewhite-medium">Creative Framework</span>
                <div class="transparent-box">
                </div>
            </div>
        </div>
        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp><div class="container-xl parallax" style="background-image: url('../lib/img/expimage/MykonosIII_KUT.jpg')">
    Website Content
</div></xmp></pre>
            </code>
        </div>
    </article>
    <div class="container-line">
        <hr>
    </div>
    <article id="animations" class="section scrollspy">
        <h2>Css Animationen</h2>
        <p>Animationen verdeutlichen dem User, dass eine Aktion stattgefunden hat. Nicht immer ist es sinnvoll sie zu
            verwenden und auch hier gilt "keep it simple". Eine Animation kann dem User auch eine Art Feedback geben, so
            können zum Beispiel Erklärungstexte bei falscher Eingabe erscheinen. Ein Weiteres Beispiel wären
            Informationsboxen oder Ankündigungen bei erstmaligem Anmelden. Für einige dieser Fälle werden Klassen
            bereitgestellt, die entweder mit dem "transition" oder dem "animation" Attribut ausgestattet sind. Weiteres
            wurden verschiedenste Schlüsselbildanimationen, oder in Fachspache auch Keyframes gennant, ausprogrammiert.
            Diese bestimmen die Art der Animation, so kann zum Beispiel ein Element in alle Richtungen hinausbewegt werden.
        </p>
        <div class="row content_code">
            <div class="col xs12 s12 m12 l12 x12 center margin-bottom">
                <div class="card margin-auto" id="expcard"></div>
            </div>
            <div class="col xs12 s12 md12 l12 x12 center">
                <div class="select-container margin-auto">
                    <form>
                        <select class="select-anim" id="effects">
                            <optgroup label="Move">
                                <option value="MoveInLeft">Move In Left</option>
                                <option value="MoveInRight">Move In Right</option>
                                <option value="MoveInTop">Move In Top</option>
                                <option value="MoveInBottom">Move In Bottom</option>
                                <option value="MoveOutLeft">Move Out Left</option>
                                <option value="MoveOutRight">Move Out Right</option>
                                <option value="MoveOutTop">Move Out Top</option>
                                <option value="MoveOutBottom">Move Out Bottom</option>
                            </optgroup>
                            <optgroup label="Slide">
                                <option value="SlideInLeft">Slide In Left</option>
                                <option value="SlideInRight">Slide In Right</option>
                                <option value="SlideInTop">Slide In Top</option>
                                <option value="SlideInBottom">Slide In Bottom</option>
                                <option value="SlideOutLeft">Slide Out Left</option>
                                <option value="SlideOutRight">Slide Out Right</option>
                                <option value="SlideOutTop">Slide Out Top</option>
                                <option value="SlideOutBottom">Slide Out Bottom</option>
                            </optgroup>
                            <optgroup label="Shake">
                                <option value="Shake">Shake</option>
                                <option value="ShakeX">ShakeX</option>
                            </optgroup>
                            <optgroup label="Rotations">
                                <option value="FlipX">Flip X</option>
                                <option value="FlipY">Flip Y</option>
                                <option value="Rotate3D">3D Rotation</option>
                                <option value="RotateIn">Rotate In</option>
                                <option value="RotateOut">Rotate Out</option>
                            </optgroup>
                            <optgroup label="Bounce">
                                <option value="BounceIn">Bounce In</option>
                                <option value="BounceOut">Bounce Out</option>
                                <option value="Bounce">Bounce</option>
                            </optgroup>
                            <optgroup label="Zoom">
                                <option value="Zoom">Zoom</option>
                                <option value="ZoomUp">Zoom Up</option>
                                <option value="ZoomIn">Zoom In</option>
                                <option value="ZoomOut">Zoom Out</option>
                            </optgroup>
                            <optgroup label="Specials">
                                <option value="Elastic">Elastic</option>
                                <option value="HingeLeft">Hinge Left</option>
                                <option value="HingeRight">Hinge Right</option>
                                <option value="Fullscreen">Fullscreen</option>
                                <option value="ScaleX">Scale X</option>
                                <option value="ScaleY">Scale Y</option>
                            </optgroup>
                        </select>
                        <label for="effects" class="lable-thin">Wähle einen Effekt</label>
                        <input  class="input-counter" type="text" id="wait-counter" value="2000">
                        <label for="wait-counter" class="lable-thin">Wartezeit bis Objekt zurück kommt.</label>
                    </form>
                </div>
            </div>
        </div>
        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp>/* Dauer | Timingfunktion | Verzögerung | #Iterationen | Richtung | Füllmodus | Abspielstatus | Name */
animation: 3s ease-in 1s 2 reverse both paused slidein;
/* Variables Attribut | Dauer | Timingfunktion | Verzögerung */
transition: margin-right 4s ease-in-out 1s;</xmp></pre>
            </code>
        </div>
    </article>
    <article id="keyframes" class="section scrollspy">
        <h3>Schlüsselbildanimationen</h3>
        <p>
            Wie oben bereits angesprochen verwenden Animationen Schlüsselbilder. In diesen kann die Position eines Elements,
            in einer bestimmten Zeitspanne der Animation, bestimmt werden. Im Beispiel unterhalb wird ein Keyframe mittels
            CSS definiert - Laden Sie jedoch unser Framework herunter müssen sie diese nicht beachten. Verwenden Sie einfach die
            bereitgestellten Klassennamen im nachfolgenden Bereich.
        </p>
        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp>@keyframes moveOut {
    from {top: 500px;}
    to {top: .200px;}
}</xmp></pre>
            </code>
        </div>
    </article>
    <article id="animelem" class="section scrollspy">
        <h3>Möglichkeiten</h3>
        <p>
            Die unten aufgeführten Klassen rufen beim Erstellen des DOM's Animationen auf. Mit fortgeschrittenem Wissen können die Klassen
            auch zu anderen Zeitpunkten über JavaScript aufgerufen werden.
        </p>
        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp><div class="moveIn"></div>
<div class="moveOut"></div>
<div class="slideIn"></div>
<div class="slideOut"></div>
<div class="slideLeft"></div>
<div class="slideRight"></div>
<div class="Wiggle"></div></xmp></pre>
            </code>
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
<script src="http://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
<script src="https://www.gstatic.com/charts/loader.js"></script>
<script src="../lib/js/validator.js"></script>
<script src="../lib/js/bootstrap.js"></script>
<script src="../lib/js/main.js"></script>
<script src="../lib/js/master.js"></script>
<script>
    $(document).ready(function () {
        $('.scrollspy').scrollSpy();
    });
</script>
</body>
</html>
