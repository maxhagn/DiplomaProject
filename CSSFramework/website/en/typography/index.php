<!DOCTYPE html>
<html lang="en">
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
    <title>Creative Framework Typography</title>
    <link rel="alternate" hreflang="en" href="../en">
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
                    <li><a class="nav-link active">Typography</a></li>
                    <li><a class="nav-link" href="../css/">CSS</a></li>
                    <li><a class="nav-link" href="../components/">Components</a></li>
                    <li><a class="nav-link" href="../templates/">Templates</a></li>
                    <li><a target="_self" class="nav-link" href="https://info-diploma-thesis.hagn.network/">Thesis</a></li>
                    <li><a class="nav-link" href="../../typography/">de</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<aside class="aside">
    <ul class="section table-of-contents">
        <li class="aside-scroll"><a href="#title">Title</a></li>
        <li class="aside-scroll"><a href="#heading">Headings</a></li>
        <li class="aside-scroll"><a href="#paragraph">Paragraph</a></li>
        <li class="aside-scroll"><a href="#shadow">Text Shadow</a></li>
        <li class="aside-scroll"><a href="#position">Text Position</a></li>
        <li class="aside-scroll"><a href="#schrift">Font Weight</a></li>
        <li class="aside-scroll"><a href="#schriftart">Font Family</a></li>
        <li class="aside-scroll"><a href="#lists">Lists</a></li>
        <li class="aside-scroll"><a href="#andere">Additional Formats</a></li>
        <li class="aside-scroll"><a href="#link">Links</a></li>
    </ul>
</aside>
<main class="content">
    <article class="row">
        <h1>Typography</h1>
        <p>
            The typography of our Creative Framework is divided into different areas. How you use it and which option it includes is
            described in the sections below. In this section you will find everything about the typography of the framework.
        </p>
    </article>
    <div class="container-line">
        <hr>
    </div>
    <div class="row">
        <div class="subnav-mobile">
            <h3>Table of content</h3>
            <nav>
                <ul class="dir_pad">
                    <li class="directory"><a href="#title">Title</a></li>
                    <li class="directory"><a href="#heading">Headings</a></li>
                    <li class="directory"><a href="#paragraph">Paragraph</a></li>
                    <li class="directory"><a href="#shadow">Text Shadow</a></li>
                    <li class="directory"><a href="#position">Text Alignment</a></li>
                    <li class="directory"><a href="#schrift">Font Weight</a></li>
                    <li class="directory"><a href="#schriftart">Font Family</a></li>
                    <li class="directory"><a href="#lists">Lists</a></li>
                    <li class="directory"><a href="#andere">Additional Formats</a></li>
                    <li class="directory"><a  href="#link">Links</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="container-line">
        <hr>
    </div>
    <article id="title" class="section scrollspy">
        <h2 class="title">Title</h2>
        <p>
            The title contains five different title classes which determine the size of a headline. The classes begin with the class name
            <i class="varname">title-size</i>, whereby the desired size must be used instead of <i class="varname">size</i>.
            The following sizes are available: <i class="classname">.xs</i>, <i class="classname">.sl</i>, <i class="classname">.md</i>, <i class="classname">.lg</i>
            and <i class="classname">.xl</i>. Titles should be used for headings related to paragraphs.
        </p>
        <div class="row content_code margin-top heading_demo">
            <span class="title-xl col xs12">Titel-xl</span>
            <span class="title-lg col xs12">Titel-lg</span>
            <span class="title-md col xs12">Titel-md</span>
            <span class="title-sl col xs12">Titel-sl</span>
            <span class="title-xs col xs12">Titel-xs</span>
        </div>
        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp><span class="title-xl">Titel-xl</span>
<span class="title-lg">Titel-lg</span>
<span class="title-md">Titel-md</span>
<span class="title-sl">Titel-sl</span>
<span class="title-xs">Titel-xs</span></xmp></pre>
            </code>
        </div>
    </article>
    <div class="container-line">
        <hr>
    </div>
    <article id="heading" class="section scrollspy">
        <h2>Heading</h2>
        <p>
            The headlines tags <i class="tagname">&lt;h1&gt;</i> to <i class="tagname">&lt;h6&gt;</i> were also styled by the team with different sizes.
            No class name is required for the headings.
        </p>
        <div class="row content_code heading_demo">
            <h1 class="h1_demo col xs12 s12 md12 l12 xl12">Heading 1</h1>
            <h2 class="h2_demo col xs12 s12 md12 l12 xl12">Heading 2</h2>
            <h3 class="h3_demo col xs12 s12 md12 l12 xl12">Heading 3</h3>
            <h4 class="h4_demo col xs12 s12 md12 l12 xl12">Heading 4</h4>
            <h5 class="h5_demo col xs12 s12 md12 l12 xl12">Heading 5</h5>
            <h6 class="h6_demo col xs12 s12 md12 l12 xl12">Heading 6</h6>
        </div>
        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp><h1>Heading 1</h1>
<h2>Heading 2</h2>
<h3>Heading 3</h3>
<h4>Heading 4</h4>
<h5>Heading 5</h5>
<h6>Heading 6</h6></xmp></pre>
            </code>
        </div>
    </article>
    <div class="container-line">
        <hr>
    </div>
    <article id="paragraph" class="section scrollspy">
        <h2>Paragraph</h2>
        <p>
            Like the headlines tags, the <i class="tagname">&lt;p&gt;</i> tag has been styled to make it easy for the user to create content elements
            consisting of a title or heading and a paragraph. The <i class="tagname">&lt;p&gt;</i> day has a <i class="varname">margin</i>
            of 1rem and a <i class="varname">line-height</i> of 1.5rem.
        </p>
        <div class="row content_code">
            <p>Das ist ein Paragraf</p>
            <p>Das ist ein weiterer Paragraf</p>
            <p>Das ist der letzte Paragraf</p>
        </div>
        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp><p>Das ist ein Paragraf</p>
<p>Das ist ein weiterer Paragraf</p>
<p>Das ist der letzte Paragraf</p></xmp></pre>
            </code>
        </div>
    </article>
    <div class="container-line">
        <hr>
    </div>
    <article id="shadow" class="section scrollspy">
        <h2>Text Shadow</h2>
        <p>
            The Creative Framework offers a selection of text shadows that are divided into two types of <i class="classname">.hard</i> and <i class="classname">.blur</i>.
            You can use the class name <i class="varname">text-art-strength</i> to call the desired shadows. With the text Shadow Strength there are 3
            different gradations <i class="classname">1</i>, <i class="classname">2</i> and <i class="classname">3</i>.
            The class for a <i class="classname">blur</i> shadow could look like this: <i class="classname">text-blur-3</i>.
        </p>
        <div class="content_code">
            <p class="row center"><span class="text-blur-1 col xs12 s12 md12 l6 xl6">Text Blur-Schatten leicht</span><span class="text-hard-1 col xs12 s12 md12 l6 xl6">Text Hard-Schatten leicht</span></p>
            <p class="row center"><span class="text-blur-2 col xs12 s12 md12 l6 xl6">Text Blur-Schatten mittel</span><span class="text-hard-2 col xs12 s12 md12 l6 xl6">Text Hard-Schatten mittle</span></p>
            <p class="row center"><span class="text-blur-3 col xs12 s12 md12 l6 xl6">Text Blur-Schatten stark</span><span class="text-hard-3 col xs12 s12 md12 l6 xl6">Text Hard-Schatten stark</span></P>
        </div>
        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp><span class="text-blur-1">Text Blur-Schatten leicht</span>           <span class="text-hard-1">Text Hard-Schatten leicht</span>
<span class="text-blur-2">Text Blur-Schatten mittel</span>          <span class="text-hard-2">Text Hard-Schatten mittle</span>
<span class="text-blur-3">Text Blur-Schatten stark</span>           <span class="text-hard-3">Text Hard-Schatten stark</span></xmp></pre>
            </code>
        </div>
    </article>
    <div class="container-line">
        <hr>
    </div>
    <article id="position" class="section scrollspy">
        <h2>Text Alignment</h2>
        <p>
            For text alignment there are also classes that make it easier for the user to align text. The classes can also be called with
            the class name <i class="classname">.text-position</i>, whereby there are three types of position. Position right
            <i class="classname">.text-right</i>, position left <i class="classname">.text-left</i>
            and position centered <i class="classname">.text-center</i>.
        </p>
        <div class="row content_code">
            <p class="text-left">Dieser Paragraph ist rechts ausgerichtetet.</p>
            <p class="text-center">Dieser Paragraph ist links ausgerichtetet.</p>
            <p class="text-right">Dieser Paragraph ist zentriertet.</p>
        </div>
        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp><p class="text-right">Dieser Paragraph ist rechts ausgerichtetet.</p>
<p class="text-left">Dieser Paragraph ist links ausgerichtetet.</p>
<p class="text-center">Dieser Paragraph ist zentriertet.</p></xmp></pre>
            </code>
        </div>
    </article>
    <div class="container-line">
        <hr>
    </div>
    <article id="schrift" class="section scrollspy">
        <h2>Font Weight</h2>
        <p>
            The class name <i class="classname">.text-strength</i> can be used to determine the font size of a paragraph or an individual text element.
            As options for the thickness there are 3 different classes <i class="classname">.text-bold</i>, <i class="classname">.text-medium</i>
            and <i class="classname">.text-light</i>. The <i class="classname">.text-bold</i> class sets the font-weight to bold.
            The classes <i class="classname">.text-medium</i> and <i class="classname">.text-light</i> also set the font-weight of the element
            to medium and lighter. There is also <i class = "classname">.text-thin </i> and <i class = "classname">.text-thick </i>.
        </p>
        <div class="row content_code">
            <p class="text-bold">Dieser Text ist bold.</p>
            <p class="text-medium">Dieser Text ist medium.</p>
            <p class="text-light">Dieser Text ist light.</p>
            <p class="text-thin">Dieser Text ist thin.</p>
            <p class="text-thick">Dieser Text ist thick.</p>
        </div>
        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp><p class="text-bold">Dieser Text ist bold.</p>
<p class="text-medium">Dieser Text ist medium.</p>
<p class="text-light">Dieser Text ist light.</p>
<p class="text-thin">Dieser Text ist thin.</p>
<p class="text-thick">Dieser Text ist thick.</p></xmp></pre>
            </code>
        </div>
    </article>
    <div class="container-line">
        <hr>
    </div>
    <article id="schriftart" class="section scrollspy">
        <h2>Font Family</h2>
        <p>
            There are a variety of fonts available in our framework. We have selected 10 different fonts which can be called up via class name.
            The class name is composed of <i class="classname">.font-type</i> font. Instead of <i class="varname">type</i>, the desired font name should be used.
            The class of the font should be inserted into the <i class="tagname">body</i> to give the document a uniform style. We offer the following fonts:
            <i class="classname">.roboto</i>,<i class="classname">.open-sans</i>,<i class="classname">.merriweather</i>,
            <i class="classname">.nunito</i>,<i class="classname">.raleway</i>,<i class="classname">.roboto-serif</i>,
            <i class="classname">.merriweather-serif</i>,<i class="classname">.pt-serif</i>,<i class="classname">.eb-garamond</i>,
            <i class="classname">.source</i>,<i class="classname">.amatic</i> and <i class="classname">.kavicanar</i>.
        </p>
        <div class="row centered content_code">
            <p class="font-roboto">
                Roboto
            </p>
            <p class="font-merriweather">
                Merriweather
            </p>
            <p class="font-nunito">
                Nunito
            </p>
            <p class="font-raleway">
                Raleway
            </p>
            <p class="font-roboto-serif">
                Roboto Serif
            </p>
            <p class="font-merriweather-serif">
                Merriweather Serif
            </p>
            <p class="font-pt-serif">
                PT Serif
            </p>
            <p class="font-eb-garamond">
                EB Garamond
            </p>
            <p class="font-source">
                Source
            </p>
            <p class="font-amatic">
                Amatic
            </p>
            <p class="font-kavicanar">
                <span >Kavicanar</span>
            </p>
        </div>
        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp><span class="font-roboto">Roboto</span>
<span class="font-merriweather">Merriweather</span>
<span class="font-nunito">Nunito</span>
<span class="font-raleway">Raleway</span>
<span class="font-roboto-serif">Roboto Serif</span>
<span class="font-merriweather-serif">Merriweather Serif</span>
<span class="font-pt-serif">PT Serif</span>
<span class="font-eb-garamond">EB Garamond</span>
<span class="font-source">Source</span>
<span class="font-amatic">Amatic</span>
<span class="font-kavicanar">Kavincanar</span></xmp></pre>
            </code>
        </div>
    </article>
    <div class="container-line">
        <hr>
    </div>
    <article id="lists" class="section scrollspy">
        <h2>Lists</h2>
        <p>
            Several classes have also been provided to style lists. All lists <i class="tagname">&lt;ul&gt;</i>, <i class="tagname">&lt;ol&gt;</i>
            and <i class="tagname">&lt;dl&gt;</i>are available. There is the class <i class="classname">.list-inline</i>, <i class="classname">.list-styled</i>
            and <i class="classname">.list-unstyled</i>. In all lists, <i class="varname">margin-top</i> has been removed and a <i class="varname">margin-bottom</i>
            1rem has been added. The class <i class="classname">.list-unstyled</i> has no bullets and the class <i class="classname">.list-inline</i> represents a list
            as an inline-block element. The styled list <i class="classname">.list-styled</i> has unfilled points as listing characters and the general <i class="varname">margin</i>
            and <i class="varname">padding</i> properties of all lists.
        </p>
        <div class="row content_code center">
            <ul class="list-unstyled text-left col xs12 s112 md6 l6 xl6">
                <li>Erstes Listen Element</li>
                <li>Zweites Listen Element</li>
                <li>Drittes Listen Element</li>
                <li>Viertes Listen Element</li>
                <li>Fünftes Listen Element</li>
            </ul>
            <ul class="list-styled text-left col xs12 s12 md6 l6 xl6">
                <li>Erstes Listen Element</li>
                <li>Zweites Listen Element</li>
                <li>Drittes Listen Element</li>
                <li>Viertes Listen Element</li>
                <li>Fünftes Listen Element</li>
            </ul>
        </div>
        <div class="row start">
            <ul class="list-inline col xs12 s12 md12 l12 xl12">
                <li>Erstes Listen Element,</li>
                <li>Zweites Listen Element,</li>
                <li>Drittes Listen Element,</li>
                <li>Viertes Listen Element,</li>
                <li>Fünftes Listen Element,</li>
            </ul>
        </div>
        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp><ul class="list-unstyled">
    <li>Erstes Listen Element</li>
    <li>Zweites Listen Element</li>
    <li>Drittes Listen Element</li>
    <li>Viertes Listen Element</li>
    <li>Fünftes Listen Element</li>
</ul>
<ul class="list-styled">
    <li>Erstes Listen Element</li>
    <li>Zweites Listen Element</li>
    <li>Drittes Listen Element</li>
    <li>Viertes Listen Element</li>
    <li>Fünftes Listen Element</li>
</ul>
<ul class="list-inline">
    <li>Erstes Listen Element</li>
    <li>Zweites Listen Element</li>
    <li>Drittes Listen Element</li>
    <li>Viertes Listen Element</li>
    <li>Fünftes Listen Element</li>
</ul></xmp></pre>
            </code>
        </div>
    </article>
    <div class="container-line">
        <hr>
    </div>
    <article id="andere" class="section scrollspy">
        <h2>Additional Formats</h2>
        <p>
            Inline text elements can be used to highlight text or allow special formatting of text. Creative Framework has the following tags
            <i class="tagname">&lt;em&gt;</i>, <i class="tagname">&lt;i&gt;</i>,<i class="tagname">&lt;b&gt;</i>,<i class="tagname">&lt;del&gt;</i>,
            <i class="tagname">&lt;small&gt;</i>, <i class="tagname">&lt;strong&gt;</i> und <i class="tagname">&lt;mark&gt;</i> styled by default.
            Particularly important inline text elements are <i class="tagname">&lt;i&gt;</i> for italics, <i class="tagname">&lt;b&gt;</i> for bold text
            and <i class="tagname">&lt;del&gt;</i> for crossed out text.
        </p>
        <div class="row content_code">
            <p>Ein Teil des Textes ist leicht <em>hervorgehoben</em></p>
            <p>Ein Teil des Textes ist <i>kursive</i></p>
            <p>Ein Teil des Textes is <b>bold</b></p>
            <p>Ein Teil des Textes ist <del>durchgestrichen</del></p>
            <p>Ein Teil des Textes ist <strong>strong</strong></p>
            <p><mark>Dieser Text ist makiert.</mark></p>
        </div>
        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp><p>Ein Teil des Textes ist leicht <em>hervorgehoben</em></p>
<p>Ein Teil des Textes ist <i>kursive</i></p>
<p>Ein Teil des Textes is <b>bold</b></p>
<p>Ein Teil des Textes ist <del>durchgestrichen</del>
<p>Ein Teil des Textes ist <strong>strong</strong></p>
<p><mark>Dieser Text ist makiert.</mark></p></xmp></pre>
            </code>
        </div>
    </article>
    <div class="container-line">
        <hr>
    </div>
    <article id="link" class="section scrollspy">
        <h2>Links</h2>
        <p>
            Since links are an important part of a website, our framework has a selection of different link designs. They can easily be
            called using the class name <i class="varname">link-type</i>. The following options are available for the type of links: <i class="classname">.link-slide</i>,<i class="classname">.link-change-color</i>,
            <i class="classname">.link-scale-small</i>,<i class="classname">.link-scale-big</i>,<i class="classname">.link-heartbeat</i>,
            <i class="classname">.link-underline-green</i>,<i class="classname">.link-underline-white</i>,<i class="classname">.link-underline-blue</i>,
            <i class="classname">.link-underline-red</i>,<i class="classname">.link-lighten</i>,<i class="classname">.link-darken</i>,
            <i class="classname">.link-bg</i> and <i class="classname">link-crossed</i>.
        </p>
        <div class="row content_code centered link_demo">
            <a href="https://www.google.at" class="link-slide col xs12 s12 md6 l6 xl3">www.google.at</a>
            <a href="https://www.google.at" class="link-change-color col xs12 s12 md6 l6 xl3">www.google.at</a>
            <a href="https://www.google.at" class="link-scale-big col xs12 s12 md6 l6 xl3">www.google.at</a>
            <a href="https://www.google.at" class="link-scale-small col xs12 s12 md6 l6 xl3">www.google.at</a>
            <a href="https://www.google.at" class="link-underline-white col xs12 s12 md6 l6 xl3">www.google.at</a>
            <a href="https://www.google.at" class="link-underline-green col xs12 s12 md6 l6 xl3">www.google.at</a>
            <a href="https://www.google.at" class="link-underline-blue col xs12 s12 md6 l6 xl3">www.google.at</a>
            <a href="https://www.google.at" class="link-underline-red col xs12 s12 md6 l6 xl3">www.google.at</a>
            <a href="https://www.google.at" class="link-heartbeat col xs12 s12 md6 l6 xl3">www.google.at</a>
            <a href="https://www.google.at" class="link-darken col xs12 s12 md6 l6 xl3">www.google.at</a>
            <a href="https://www.google.at" class="link-lighten col xs12 s12 md4 l6 xl3">www.google.at</a>
            <a href="https://www.google.at" class="link-crossed col xs12 s12 md6 l6 xl3">www.google.at</a>
        </div>
        <div class="codeBox">
            <code>
<pre class="prettyprint"><xmp><a href="https://www.google.at" class="link-slide">www.google.at</a>
<a href="https://www.google.at" class="link-change-color">www.google.at</a>
<a href="https://www.google.at" class="link-scale-big">www.google.at</a>
<a href="https://www.google.at" class="link-scale-small">www.google.at</a>
<a href="https://www.google.at" class="link-underline-white">www.google.at</a>
<a href="https://www.google.at" class="link-underline-green">www.google.at</a>
<a href="https://www.google.at" class="link-underline-blue">www.google.at</a>
<a href="https://www.google.at" class="link-underline-red">www.google.at</a>
<a href="https://www.google.at" class="link-heartbeat">www.google.at</a>
<a href="https://www.google.at" class="link-darken">www.google.at</a>
<a href="https://www.google.at" class="link-lighten">www.google.at</a>
<a href="https://www.google.at" class="link-crossed">www.google.at</a></xmp></pre>
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
