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
    <title>Creative Framework CSS</title>
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
                    <li><a class="nav-link" href="../get_started/">Get Started</a></li>
                    <li><a class="nav-link" href="../typography/">Typography</a></li>
                    <li><a class="nav-link active">CSS</a></li>
                    <li><a class="nav-link" href="../components/">Components</a></li>
                    <li><a class="nav-link" href="../templates/">Template</a></li>
                    <li><a target="_self" class="nav-link" href="http://www.info.creative-puzzle.com">.info</a></li>
                    <li><a class="nav-link" target="_blank" href="http://www.app.creative-puzzle.com">App</a></li>
                    <li><a class="nav-link" href="../../css/">de</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<aside class="aside">
    <ul class="section table-of-contents">
        <li class="aside-scroll"><a href="#gridsystem">Grid System</a></li>
        <li class="aside-subnav"><a href="#container">Container</a></li>
        <li class="aside-subnav"><a href="#column">Column</a></li>
        <li class="aside-subnav"><a href="#nesting">Nesting</a></li>
        <li class="aside-subnav"><a href="#position">Positioning</a></li>
        <li class="aside-subnav"><a href="#extendedposition">Extended Positioning</a></li>
        <li class="aside-subnav"><a href="#sassconfig">Sass Configuration</a></li>
        <li class="aside-scroll"><a href="#colorsystem">Color System</a></li>
        <li class="aside-subnav"><a href="#wheel">Color Wheel</a></li>
        <li class="aside-subnav"><a href="#extracolors">Extended Colors</a></li>
        <li class="aside-subnav"><a href="#colorthemes">Color Themes</a></li>
        <li class="aside-scroll"><a href="#media">Media</a></li>
        <li class="aside-subnav"><a href="#images">Images</a></li>
        <li class="aside-subnav"><a href="#video">Videos</a></li>
        <li class="aside-subnav"><a href="#audio">Audio</a></li>
        <li class="aside-scroll"><a href="#table">Table</a></li>
        <li class="aside-scroll"><a href="#helper">Tools</a></li>
        <li class="aside-scroll"><a href="#shadow">Box Shadow</a></li>
        <li class="aside-scroll"><a href="#showhide">Hide Elements</a></li>
        <li class="aside-scroll parallax-hide"><a href="#parallax">Parallax</a></li>
        <li class="aside-scroll"><a href="#animations">Css Animations</a></li>
        <li class="aside-subnav"><a href="#keyframes">Keyframes</a></li>
        <li class="aside-subnav"><a href="#animelem">Opportunities</a></li>
    </ul>
</aside>
<main class="content">
    <article class="row">
        <h1>CSS</h1>
        <p>
            This section explains the CSS elements of the framework. The most important layout components are containers and the grid system.
            Tables and some classes for color selection are also explained.
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
                    <li class="directory"><a href="#gridsystem">Grid System</a></li>
                    <li class="sub-directory"><a href="#container">Container</a></li>
                    <li class="sub-directory"><a href="#column">Column</a></li>
                    <li class="sub-directory"><a href="#nesting">Nesting</a></li>
                    <li class="sub-directory"><a href="#position">Positioning</a></li>
                    <li class="sub-directory"><a href="#extendedposition">Extendet Positioning</a></li>
                    <li class="sub-directory"><a href="#sassconfig">Sass Configuration</a></li>
                    <li class="directory"><a href="#colorsystem">Color Sytem</a></li>
                    <li class="sub-directory"><a href="#wheel">Color Wheel</a></li>
                    <li class="sub-directory"><a href="#extracolors">Extendet Colors</a></li>
                    <li class="sub-directory"><a href="#colorthemes">Color Themes</a></li>
                    <li class="directory"><a href="#media">Media</a></li>
                    <li class="sub-directory"><a href="#images">Images</a></li>
                    <li class="sub-directory"><a href="#video">Videos</a></li>
                    <li class="sub-directory"><a href="#audio">Audio</a></li>
                    <li class="directory"><a href="#table">Table</a></li>
                    <li class="directory"><a href="#helper">Tools</a></li>
                    <li class="directory"><a href="#shadow">Box Shadow</a></li>
                    <li class="directory"><a href="#showhide">Hide Elements</a></li>
                    <li class="directory parallax-hide"><a href="#parallax">Parallax</a></li>
                    <li class="directory"><a href="#animations">Css Animations</a></li>
                    <li class="sub-directory"><a href="#keyframes">Keyframes</a></li>
                    <li class="sub-directory"><a href="#animelem">Opportunities</a></li>
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
            Create complex layouts using a 12 column grid system. A web page can be thought of as a kind of table with several columns and rows.
            For example, if the table is 12 columns wide and 1 line high, more than 450,000,000,000 positioning options are possible.
            By implementing further classes, there are even more options available.
        </p>
    </article>
    <article id="container" class="section scrollspy">
        <h3>Container Sizes</h3>
        <p>
            Containers enclose several DOM elements and define their maximum width. Ideally, the container classes should be included in
            semantic elements, for example <i class="tagname">&lt;main&gt;&lt;/main&gt;</i> or <i class="tagname"> &lt;section&gt; &lt;/section&gt; </i> tag.
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
        <h3>Equal column size</h3>
        <p>
            Once the container sizes have been determined, a  <i class="classname">.row</i> class is created. Each <i class="tagname">&lt;div&gt;</i>
            tag with the class <i class="classname">.row</i> represents one line in our mental table. Up to 12 <i class="classname">.col</i>
            classes can be included within the Row. They divide the free space among themselves.
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
        <h3 class="title">Set column size</h3>
        <p>
            Alternatively, individual or all elements can be provided with a certain size. Depending on the prefix, different screen
            sizes are addressed. If you want elements to be the same size on all screen sizes, it is sufficient to define <i class="classname">.xs</i>.
        </p>
        <div class="row center">
            <div class="col xs12 s12 m12 l10 xl6 table-scroll">
                <table class="table-stripped">
                    <tr>
                        <th></th>
                        <th>extra small (&lt; 400px)</th>
                        <th>small (&lt; 600px)</th>
                        <th>medium (&lt; 950px)</th>
                        <th>large (&lt; 1240px)</th>
                        <th>extra large (&gt; 1240px)</th>
                    </tr>
                    <tr>
                        <td>Class name</td>
                        <td><i class="classname">.xs</i></td>
                        <td><i class="classname">.s</i></td>
                        <td><i class="classname">.m</i></td>
                        <td><i class="classname">.l</i></td>
                        <td><i class="classname">.xl</i></td>
                    </tr>
                    <tr>
                        <td>Colum number</td>
                        <td colspan="5">12 (<a class="link-lighten" href="#sassconfig">Konfigurierbar</a>)</td>
                    </tr>
                    <tr>
                        <td>Nesting</td>
                        <td colspan="5">Ja</td>
                    </tr>
                    <tr>
                        <td>Column ordering</td>
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
        <h3>Nesting</h3>
        <p>
            It is also possible to nest several tables into each other - this creates even more possibilities to design a layout.
            All the above-mentioned attributes are still applicable.
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
        <h3>Horizontal Positioning</h3>
        <p>
            If the specified columns in a table do not fill the maximum width of the screen, they can be positioned as desired.
            By default, elements and texts are centered right-justified.
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
        <h3>Vertical Positioning</h3>
        <p>
            In case a container is higher than the enclosed elements, the child elements can be positioned either above, below or in the middle.
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
        <h3>Extended positioning</h3>
        <p>
            Afterwards it is still possible to change the position of some elements. For example, the columns can be arranged or indented.
        </p>
        <h3 class="title">Indenting columns</h3>
        <p>To avoid having to define empty columns, individual elements can be pressed further to the right.
            The logic is similar to that of the grid system and therefore easy to link.
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
            <div class="row">
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
        <h3 class="title">Ordering the lines</h3>
        <p>
            For example, if we have now defined 6 column elements and want to bring the last one to the very front of the source code,
            we can use the class first. To achieve the opposite, we use the class last. Furthermore, the complete order can be changed
            via the classes <i class="classname">order1</i> - <i class="classname">order12</i>.
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
        <h3>Personalize with Sass</h3>
        <p>
            If you have previous knowledge of precompiler and in particular of the languages SASS and SCSS, you can change the values of predefined
            variables and personalize the stylesheet. For example, the number of columns can be changed from 12 to 24.
        </p>
    </article>
    <article id="variablen" class="section scrollspy">
        <h3>Variables</h3>
        <p>
            You can also change the breakpoints or the margin.
        </p>
        <div class="row center">
            <div class="col xs12 s12 m12 l10 xl6 table-scroll">
                <table class="table-stripped">
                    <tr>
                        <th></th>
                        <th>Varibale name</th>
                        <th>Values</th>
                    </tr>
                    <tr>
                        <td>Columns Grid</td>
                        <td><i class="varname">$anzColumn</i></td>
                        <td>Number (0-24 recommended)</td>
                    </tr>
                    <tr>
                        <td>Grid Breakpoints</td>
                        <td><i class="varname">$small-min</i></td>
                        <td>Number (0-&infin;)</td>
                    </tr>
                    <tr>
                        <td>Grid Breakpoints</td>
                        <td><i class="varname">$medium-min</i></td>
                        <td>Number (0-&infin;)</td>
                    </tr>
                    <tr>
                        <td>Grid Breakpoints</td>
                        <td><i class="varname">$large-min</i></td>
                        <td>Number (0-&infin;)</td>
                    </tr>
                    <tr>
                        <td>Grid Breakpoints</td>
                        <td><i class="varname">$xxlarge-min</i></td>
                        <td>Number (0-&infin;)</td>
                    </tr>
                    <tr>
                        <td>Automatic Margine</td>
                        <td><i class="varname">$margin-auto</i></td>
                        <td>Percent (0-100)</td>
                    </tr>
                </table>
            </div>
        </div>
    </article>
    <div class="container-line">
        <hr>
    </div>
    <article id="colorsystem" class="section scrollspy">
        <h2>Color System</h2>
        <p>
            The framework offers a small selection of predefined color spaces. In addition to the basic colours,
            we also offer an extended colour space and predefined themes, such as one for autumn colours.
        </p>
        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp><div class="orange-medium"></div>
<p class="text-orange-medium"></p></xmp></pre>
            </code>
        </div>
    </article>
    <article id="wheel" class="section scrollspy">
        <h3>Color Wheel</h3>
        <p>
            Here all color wheel colors are prepared with 12 different tans as class names.
        </p>
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
        <h3>Extended Spectrum</h3>
        <p>
            The expanded color space adds more important colors to the color selection.
        </p>
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
        <h3>Color Collections</h3>
        <p>
            Do you want to open a web shop for autumn fashion, but you have no previous knowledge of colour theory?
            Even this should not be a problem for them with the predefined schemes.
        </p>
        <article>
            <h3 class="title">Autumn Kollektion</h3>
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
            Since media elements are often built into web pages, we have provided some classes that make it easier to integrate.
            We have divided the media into pictures, videos and audio.
        </p>
    </article>
    <article id="images" class="section scrollspy">
        <h3>Images</h3>
        <p>
            To make images through the framework responsive there is the class <i class="classname">.img-wrapper</i> which allows images to be
            automatically adjusted to the size of the browser window. In order to give images a special look, the classes <i class="classname">.round-img</i>
            and <i class="classname">.circle-img</i> can be used additionally to round off images or make it completely round.
        </p>
        <div class="row content_code spacearound">
            <div class="col xs12 s12 m12 l3 x3">
                <img class="img-responsive round-img" src="../../lib/img/expimage/CommachioI_HAG.jpg" alt="CommachioI Hagn">
            </div>
            <div class="col xs12 s12 m12 l3 x3">
                <img class="img-responsive circle-img" src="../../lib/img/expimage/CommachioII_HAG.jpg" alt="CommachioII Hagn">
            </div>
            <div class="col xs12 s12 m12 l3 x3">
                <img class="img-responsive" src="../../lib/img/expimage/CommachioIII_HAG.jpg" alt="CommachioIII Hagn">
            </div>
        </div>
        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp><div class="image-wrapper">
    <img class="round-img" src="../../lib/img/expimage/CommachioI_HAG.jpg" alt="CommachioI Hagn">
</div>
<div class="image-wrapper">
    <img class="circle-img" src="../../lib/img/expimage/CommachioII_HAG.jpg" alt="CommachioII Hagn">
</div>
<div class="image-wrapper">
    <img src="../../lib/img/expimage/CommachioIII_HAG.jpg" alt="CommachioIII Hagn">
</div></xmp></pre>
            </code>
        </div>
    </article>
    <article id="video" class="section scrollspy">
        <h3>Videos</h3>
        <p>
            The <i class="classname">.video-wrapper-16</i> and <i class="classname">.video-wrapper-4</i> classes allow videos to change
            in percentage of the browser window, one class being suitable for 16:9 videos and the other for videos in 4:3 format.
        </p>
        <div class="content_code">
            <video controls class="col xs12">
                <source src="../../lib/img/expimage/Attersee%20I%20HAG.m4v" type="video/mp4">
            </video>
        </div>
        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp><div class="video-wrapper-4">
    <video controls class="col xs12">
        <source src="../../lib/img/expimage/Attersee%20I%20HAG.m4v" type="video/mp4">
    </video>
</div>
<div class="video-wrapper-16">
   <video controls class="col xs12">
       <source src="../../lib/img/expimage/Attersee%20I%20HAG.m4v" type="video/mp4">
   </video>
</div></xmp></pre>
            </code>
        </div>
    </article>
    <article id="audio" class="section scrollspy">
        <h3>Audio</h3>
        <p>
            The <i class="tagname">&lt;audio&gt;</i> tag in HTML offers a standard way to embed audio files in web pages.
            The default design of the tag is different in each browser. The framework contains the class <i class="classname">.audio-wrapper</i>
            which gives the audio tag an individual look and feel, which is the same in all browsers.
        </p>
        <div class="row content_code center">
            <audio controls>
                <source src="../../audio/A-Cray%20-%20Stomper%20%5BNeodigital%5D.mp3" type="audio/mp3">
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
        <h2>Table</h2>
        <p>
            Tables are another important layout element and can be used in many ways. The framework provides a standard design for the
            <i class="tagname">&lt;table&gt;</i> tag. Additionally, there are 3 different classes which can be assigned to the <i class="tagname">&lt;table&gt;</i>
            tag to give the table a special appearance. With the class <i class="classname">.table-light</i>, the background color of this table becomes
            gray when a line is passed over. The <i class="classname">.table-responsive</i> class gives the table the property to adjust itself to the browser window as a percentage.
            To use a striped table, the <i class="classname">.table-stripped</i> class must be added to the <i class="tagname">&lt;table&gt;</i> tag.
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
        <h2>Tools</h2>
        <p>
            This section deals with small tools that can be used to refine the layout of a website. To change the flow of an element there
            are the classes <i class="classname">.float-right</i> and <i class="classname">.float-left</i>. Another important class is <i class="classname">.block</i>
            with which elements can be defined as block elements, i. e. a line break occurs after this element. To separate contents, there is the class
            <i class="classname">.line</i> with which a separator can be added, it should only be used within the <i class="tagname">&lt;hr&gt;</i> tag.
        </p>
        <div class="row middle center margin-top">
            <span class="col xs4 s4 md4 l4 xl4">Dieser Text ist links fließend</span>
            <img src="../../lib/img/expimage/MykonosII_KUT.JPG" class="float-right img-responsive img_small col xs4 s4 md4 l4 xl4" alt="MykonosII Kutis">
        </div>
        <hr class="line">
        <div class="row middle center">
            <img src="../../lib/img/expimage/MykonosII_KUT.JPG" class="float-left img-responsive img_small col xs4 s4 md4 l4 xl4" alt="MykonosII Kutis">
            <span class="col xs4 s4 md4 l4 xl4">Dieser Text ist rechts fließend</span>
        </div>
        <p class="margin-top margin-bottom">
            <span class="block text-center border">Das ist ein Block Element</span>
        </p>
        <div class="codeBox">
            <code>
                <pre class="prettyprint"><xmp><span>Dieser Text ist links fließend</span>
<img src="../../lib/img/expimage/MykonosII_KUT.JPG" class="float-right" alt="MykonosII Kutis">
<span>Dieser Text ist rechts fließend</span>
<img src="../../lib/img/expimage/MykonosII_KUT.JPG" class="float-left" alt="MykonosII Kutis">
<span class="block">Das ist ein Block Element</span></xmp></pre>
            </code>
        </div>
    </article>
    <div class="container-line">
        <hr>
    </div>
    <article id="shadow" class="section scrollspy">
        <h2>Box Shadow</h2>
        <p>
            Since our framework contains elements like header, footer and cards, it also offers different box shadows for each element.
            The Shadow box has the effect that it makes elements look like the corresponding component is not part of the website, but on top of it.
            There are 5 different classes which cast a shadow of different intensity. The classes can be named
            <i class="classname">.shadow-ex-light</i>,<i class="classname">.shadow-light</i>,<i class="classname">.shadow-medium</i>,
            <i class="classname">.shadow-hard</i> and <i class="classname">.shadow-ex-hard</i>, whereby the shadow becomes stronger in ascending order.
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
        <h2>Hide Elements</h2>
        <p>
            This section explains the <i class="classname">.show</i> and <i class="classname">.hide</i> classes.
            The framework contains some classes that determine which element is to be
            displayed and which element is to be hidden. Therefore there are the classes <i class="varname">show-size</i> and <i class="varname">hide-size</i>.
            The desired screen size should be used instead of the size. There are <i class="classname">.sl</i>, <i class="classname">.md</i>,
            <i class="classname">.md-up</i><i class="classname">.md-down</i>,<i class="classname">.lg</i> and only <i class="classname">.show</i> without size.
            The same rules apply to <i class="classname">.hide</i> class.
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
            Parallax scrolling is one of the major new web design trends. This effect consists of individual layers that move at different speeds,
            giving the viewer the impression of depth. The parallax scrolling can be easily implemented in the framework and the class
            <i class="classname">.parallax</i>. The <i class="classname">.parallax</i> class should be applied to the
            <i class="tagname">&lt;body&gt;</i> or a <i class="classname">.container</i>.
        </p>
        <div class="row content_code">
            <div class="parallax parallax-container text-center" style="background-image: url('../../lib/img/expimage/MykonosIII_KUT.jpg')">
                <div class="transparent-box">
                </div>
                <span class="title-lg text-supremewhite-medium">Creative Framework</span>
                <div class="transparent-box">
                </div>
            </div>
        </div>
        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp><div class="container-xl parallax" style="background-image: url('../../lib/img/expimage/MykonosIII_KUT.jpg')">
    Website Content
</div></xmp></pre>
            </code>
        </div>
    </article>
    <div class="container-line">
        <hr>
    </div>
    <article id="animations" class="section scrollspy">
        <h2>Css Animation</h2>
        <p>
            Animations show the user that an action has taken place. It doesn't always make sense to use them and "keep it simple"also applies here.
            An animation can also give the user some kind of feedback, e. g. explanatory texts may appear if the input is incorrect.
            A further example would be information boxes or announcements on initial registration. For some of these cases, classes with either
            the transition or animation attribute are provided. Furthermore, various keyframes were programmed out. These determine the type of animation,
            for example, an element can be moved out in all directions.
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
        <h3>Keyframe</h3>
        <p>
            As mentioned above, animations use keyframes. In these, the position of an element can be determined within a certain time period
            of the animation. In the example below, a keyframe is defined using CSS - but if you download our framework, you don't have to
            pay attention to it. Simply use the provided class names in the following area.
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
        <h3>Opportunities </h3>
        <p>
            The classes listed below call animations when you create the Document Object Model. With advanced knowledge the classes
            can also be called at other times via JavaScript.
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
