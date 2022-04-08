<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<link rel="apple-touch-icon" sizes="76x76" href="./assets/img/favicon.ico">
<link rel="icon" type="image/png" href="./assets/img/favicon.ico">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<title>Docs for Mundana - Free Template by WowThemesNet</title>
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport'/>
    
<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700|Source+Sans+Pro:400,700" rel="stylesheet">
    
<!-- Font Awesome Icons -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    
<!-- Main CSS -->
<link href="./assets/css/main.css" rel="stylesheet"/>
    
<!-- Docs CSS -->
<link href="./assets/css/vendor/bootstrap-toc.css" rel="stylesheet"/>
<link href="./assets/css/vendor/prism.css" rel="stylesheet"/>
    
</head>
    
<body>  
    
    
<!----------------------------------------------------------------------
End fixed sidebar
------------------------------------------------------------------------>

<nav id="toc" class="fixedsidebar d-none d-lg-block">   
    <h5 class="mt-4 mb-4 pt-1"><a class="text-dark navbar-brand" href="./index.html"><strong>Mundana</strong> Theme</a></h5>
    <a target="_blank" href="https://www.buymeacoffee.com/sal" class="btn btn-secondary mb-4 btn-sm btn-round"><i class="fas fa-coffee mr-1"></i> Buy me a coffee</a>
</nav>
    
<!----------------------------------------------------------------------
End fixed sidebar
------------------------------------------------------------------------> 
    
       
<main class="content-withfixedsidebar">
    
    
<!----------------------------------------------------------------------
NAVBAR (remove topnav if you don't want changed nav background on scroll)
------------------------------------------------------------------------>
<nav class="topnav navbar navbar-expand-lg navbar-light bg-white fixed-top">
<div class="container">
	<a class="navbar-brand d-lg-none" href="./index.html"><i class="fas fa-anchor mr-2"></i><strong>Mundana</strong></a>
	<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
	</button>
	<div class="navbar-collapse collapse" id="navbarColor02">
		<ul class="navbar-nav mr-auto d-flex align-items-center">
			<li class="nav-item">
			<a class="nav-link" href="./index.html">&larr; Back to demo</a>
			</li>
		</ul>
		<ul class="navbar-nav ml-auto d-flex align-items-center">			
			<li class="nav-item highlight">
			<a class="nav-link" target="_blank" href="https://www.wowthemes.net/mundana-free-html-bootstrap-template">&rarr; Go to download this theme</a>
			</li>
		</ul>
	</div>
</div>
</nav>
<!-- End Navbar -->
    
<!-------------------------------------
HEADER
--------------------------------------->
<div class="jumbotron jumbotron-fluid mb-3 pb-0 bg-white position-relative">
	<div class="container h-100 tofront">
		<div class="row align-items-center justify-content-center text-center">
			<div class="col-md-10">
				<h1 class="display-3 text-dark">Documentation</h1>
			</div>
		</div>
	</div>
</div>
<!--- END HEADER -->

<!-- DOCS CONTENT -->
<div class="container pt-5 pb-5 mb-5">
	<div class="row justify-content-center">
      
<div class="col-lg-11">
<div id="docsarea" class="font-weight-normal">
    
<p class="lead">Hey there! You’re looking at <a href="./index.html">Mundana</a> official documentation. Mundana is an HTML blogging template with flexible, ready to use UI components which will hep you build your blog faster. Let’s begin!
</p>
    
    
<section class="pt-5 mt-4 pb-5 bg-info rounded">
<div class="container text-center">
	
	<div class="d-flex">
		<div class="col">
			<a href="./article.html"><img src="assets/img/screenshot-mundana-article.png" class="shadow-lg"></a>
		</div>
		<div class="col">
			<a href="./index.html"><img src="assets/img/screenshot-mundana.png" class="shadow-lg"></a>
		</div>
		<div class="col">
			<a href="./category.html"><img src="assets/img/screenshot-mundana-category.png" class="shadow-lg"></a>
		</div>
	</div>
</div>
</section>
    
<h1>Quick Start</h1>
    
<p>If you are not planning to customize your style with SCSS, simply remove the <code>assets/scss/</code> folder and get started by opening the index.html file.  So, this will be the structure of your template:</p>

<h2>File Structure</h2>
<code>
<ul class="ascii">
    <li>assets/
        <ul>
        <li>css/
            <ul>
            <li>vendor/
                <ul>
                <li>prism.css</li>
                </ul>
            </li>
            <li>main.css</li>
            <li>main.css.map</li>
            </ul>
        </li>
        <li>img/</li>
        <li>js/
            <ul>
            <li>vendor/
                <ul>
                <li>jquery.min.js</li>
                <li>bootstrap.min.js</li>                
                <li>popper.min.js</li>
                </ul>
            </li>
            <li>functions.js</li>
            </ul>
        </li>
        <li>index.html</li>
        <li>article.html</li>
        <li>category.html</li>
        <li>templates.html</li>
        <li>docs.html</li>        
        </ul>
    </li>
</ul>
</code>
    
<!----------------------------------------------------------------------
basic template
------------------------------------------------------------------------>
<h2>Basic Template</h2>
    
<!-- Trigger -->
<button class="btn btn-sm btn-round btncopy mb-2" data-clipboard-target="#quickstart">
    Copy to clipboard
</button>
     

<pre id="quickstart" class="language-markup">
&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;en&quot;&gt;
&lt;head&gt;
&lt;meta charset=&quot;utf-8&quot;/&gt;
&lt;link rel=&quot;apple-touch-icon&quot; sizes=&quot;76x76&quot; href=&quot;./assets/img/favicon.ico&quot;&gt;
&lt;link rel=&quot;icon&quot; type=&quot;image/png&quot; href=&quot;./assets/img/favicon.ico&quot;&gt;
&lt;meta http-equiv=&quot;X-UA-Compatible&quot; content=&quot;IE=edge,chrome=1&quot;/&gt;
&lt;title&gt;Site Title&lt;/title&gt;
&lt;meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport'/&gt;
    
&lt;!-- Fonts --&gt;
&lt;link href=&quot;https://fonts.googleapis.com/css?family=Playfair+Display:400,700|Source+Sans+Pro:400,700&quot; rel=&quot;stylesheet&quot;&gt;
&lt;link rel=&quot;stylesheet&quot; href=&quot;https://use.fontawesome.com/releases/v5.3.1/css/all.css&quot; integrity=&quot;sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU&quot; crossorigin=&quot;anonymous&quot;&gt;
    
&lt;!-- CSS --&gt;
&lt;link href=&quot;./assets/css/main.css&quot; rel=&quot;stylesheet&quot;/&gt;
    
&lt;/head&gt;
    
&lt;body&gt; 

&lt;main&gt; My content goes here &lt;/main&gt;

&lt;!-- Javascript --&gt;
&lt;script src=&quot;./assets/js/vendor/jquery.min.js&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
&lt;script src=&quot;./assets/js/vendor/popper.min.js&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
&lt;script src=&quot;./assets/js/vendor/bootstrap.min.js&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;
&lt;script src=&quot;./assets/js/functions.js&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;

&lt;/body&gt;
    
&lt;/html&gt;

</pre>

<p class="mt-4">That's it! Start editing your theme with an HTML editor, such as Brackets.</p>
    
<h1>Advanced Customization</h1>    

<p>If you are  planning to customize the template with Gulp & SCSS, follow the guide below.</p>  

<p>First, this is the structure of your template files:</p>
            
<!----------------------------------------------------------------------
file structure
------------------------------------------------------------------------>
<h2>File Structure</h2>
<code>
<ul class="ascii">
    <li>assets/
        <ul>
        <li>css/
            <ul>
            <li>vendor/
                <ul>
                <li>prism.css</li>
                </ul>
            </li>
            <li>main.css</li>
            <li>main.css.map</li>
            </ul>
        </li>
        <li>img/</li>
        <li>js/
            <ul>
            <li>vendor/
                <ul>
                <li>jquery.min.js</li>
                <li>bootstrap.min.js</li>                
                <li>popper.min.js</li>
                </ul>
            </li>
            <li>functions.js</li>
            </ul>
        </li>                  
        <li>scss/
            <ul>
            <li>1-frameworks/
                <ul>
                <li>bootstrap/
                    <ul>
                        <li>source/</li>
                        <li>bootstrap.scss</li>                
                        <li>bootstrap-grid.scss</li>
                        <li>bootstrap-reboot.scss</li>
                        <li>bootstrap-user-variables.scss</li>
                    </ul>
                </li>
                <li>_index.scss</li>
                </ul>
            </li>
            <li>2-plugins</li>
            <li>3-base</li>
            <li>4-modules</li>
            <li>5-layout</li>
            </ul>
            <ul><li>main.scss</li></ul>
            
        </li>
        <li>index.html</li>
        <li>article.html</li>
        <li>category.html</li>
        <li>templates.html</li>
        <li>docs.html</li>
        <li>gulpfile.js</li>
        <li>package.json</li>
        <li>README.md</li>
        
        
        </ul>
    </li>
</ul>
</code>
    

    
<!----------------------------------------------------------------------
gulp
------------------------------------------------------------------------>
    
<h2>Install Gulp</h2>
<p>Gulp can automate tasks in your development workflow. Gulp is also required in order to work with <code>scss</code> files. In order to use Gulp you will need to download Node JS first:</p>
    
<p class="mb-3"><a href="https://nodejs.org/en/" class="btn btn-primary btn-icon" target="_blank">
    <i class="fab fa-node-js mr-2"></i> Download Node JS</a>
</p>
    
<p>After Node is installed you can now proceed to Gulp installation. To do that simply run the following command in your terminal. This will install Gulp globally. Aferwards you can cd to you project’s folder where our KIT is installed.</p>

<code>npm install gulp-cli -g</code>

<!----------------------------------------------------------------------
scss
------------------------------------------------------------------------>
    
<h2>Customize with SCSS</h2>
<p>It is highly recommended that all the customized styles to be stored only within the user’s files from the <code>scss</code> folder. Gulp is required for this. </p>
<ol>
  <li>Download the project’s zip.</li>
  <li>Make sure you have node.js (https://nodejs.org/en/) installed.</li>
  <li>Type <code class="highlighter-rouge">npm install</code> in terminal/console in the source folder where <code class="highlighter-rouge">package.json</code> is located.</li>
  <li>Make sure you have gulp <code class="highlighter-rouge">npm install gulp</code></li>
  <li>Run in terminal <code class="highlighter-rouge">gulp open-app</code> for opening the Dashboard Page (default) of the product.</li>
  <li>Run in terminal <code class="highlighter-rouge">gulp compile-scss</code> for a single compilation or <code class="highlighter-rouge">gulp watch</code> for continous compilation of the changes that you make in <code class="highlighter-rouge">*.scss</code> files. This command should be run in the same folder where <code class="highlighter-rouge">gulpfile.js</code> and <code class="highlighter-rouge">package.json</code> are located.</li>
</ol>
    
    
<div class="alert alert-orange mt-5 d-flex align-items-center">
    <div>
        <span class="align-self-center iconbox iconsmall fill rounded-circle bg-danger text-white shadow border-0 mr-2"><i class="fas fa-bullhorn"></i>
        </span>
    </div> 
    <div>When working with SCSS, you only need to these 2 files: <ul>
        <li><code>assets/scss/frameworks/bootstrap/bootstrap-user-variables.scss</code> (here you can edit or add variables)</li> 
        <li><code>assets/scss/main.scss</code> (here you will customize your style)</li>
        </ul> 
        Do not touch anything else! Everything you edit in these 2 files will be compiled in <code>main.css</code>.
    </div>
</div>
    
    

    
<h1>Components</h1>
    
<!----------------------------------------------------------------------
 colors
------------------------------------------------------------------------>
    
<h2>Colors</h2>
    
<div class="alert alert-dark mb-5">
    Options:
    <ul>
    <li>Background: <code>bg-*color</code></li>    
    <li>Text: <code>text-*color</code></li>
    <li>Alert: <code>alert-*color</code></li>    
    <li>Button: <code>btn-*color</code></li>
    <li>Badge: <code>badge-*color</code></li>
    </ul>
</div>
    
<div class="d-flex text-white align-items-center h-100 text-center">
	<div class="col-md-4 bg-primary p-5" style="height:130px;">
		<h5>Primary</h5>
	</div>
	<div class="col-md-4 bg-secondary p-5" style="height:130px;">
		<h5>Secondary</h5>
	</div>
	<div class="col-md-4 bg-info p-5" style="height:130px;">
		<h5>Info</h5>
	</div>
</div>
<div class="d-flex text-white align-items-center h-100 text-center">
    <div class="col-md-4 bg-lightblue p-5 border border-left-0 border-top-0" style="height:130px;">
		<h5 class="text-dark">Light Blue</h5>
	</div>
	<div class="col-md-4 bg-warning p-5" style="height:130px;">
		<h5>Warning</h5>
	</div>
	<div class="col-md-4 bg-danger p-5" style="height:130px;">
		<h5>Danger</h5>
	</div>
</div>
<div class="d-flex text-white align-items-center h-100 text-center">
	<div class="col-md-4 bg-purple p-5" style="height:130px;">
		<h5>Purple</h5>
	</div>
	<div class="col-md-4 bg-black p-5" style="height:130px;">
		<h5>Black</h5>
	</div>
	<div class="col-md-4 bg-cyan p-5" style="height:130px;">
		<h5>Cyan</h5>
	</div>
</div>
    
<!----------------------------------------------------------------------
alerts
------------------------------------------------------------------------>
<h2>Alerts</h2>
    
<div class="alert alert-dark mb-5">
    Options:
    <ul>
    <li>Background: <code>alert-*color</code></li>    
    <li>Text: <code>text-*color</code></li>
    <li>Shadow: <code>shadow</code>, <code>shadow-sm</code>, <code>shadow-lg</code></li>
    </ul>
</div>
    
<div class="row mb-4">
<div class="col-md-6">
    <div class="alert alert-primary shadow-lg" role="alert">
         A simple primary alert-check it out!
    </div>
    <div class="alert alert-secondary" role="alert">
         A simple secondary alert-check it out!
    </div>
    <div class="alert alert-success" role="alert">
         A simple success alert-check it out!
    </div>
</div>
<div class="col-md-6">
    <div class="alert alert-danger" role="alert">
        <i class="fas fa-bullhorn"></i> A simple danger alert-check it out! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
        </button>
    </div>
    <div class="alert alert-warning" role="alert">
         A simple warning alert-check it out! 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
        </button>
    </div>
    <div class="alert alert-info" role="alert">
         A simple info alert-check it out! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
        </button>
    </div>
</div>
</div>
    
<script type="text/plain" class="language-markup"><div class="alert alert-primary shadow-lg" role="alert">
    A simple primary alert-check it out!
</div></script>
    
<script type="text/plain" class="language-markup"><div class="alert alert-danger" role="alert">
    <i class="fas fa-bullhorn"></i> A simple danger alert-check it out! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
    </button>
</div></script>
 
    
<!----------------------------------------------------------------------
avatars
------------------------------------------------------------------------>
    
<h2>Avatars</h2>
    
<div class="alert alert-dark mb-5">
    Options:
    <ul>
    <li>Round: <code>rounded-circle</code></li>    
    <li>Size: <code>width="*"</code></li>
    <li>Shadow: <code>shadow</code>, <code>shadow-sm</code>, <code>shadow-lg</code></li>
    </ul>
</div> 
    
<div class="mb-3">
<img class="rounded-circle shadow" src="assets/img/demo/avatar2.jpg" width="50">
<img class="rounded-circle shadow" src="assets/img/demo/avatar2.jpg" width="70">
<img class="rounded-circle shadow" src="assets/img/demo/avatar2.jpg" width="90">
</div>
    
<script type="text/plain" class="language-markup"><img class="rounded-circle shadow" src="assets/img/demo/avatar2.jpg" width="50">
<img class="rounded-circle shadow" src="assets/img/demo/avatar2.jpg" width="70">
<img class="rounded-circle shadow" src="assets/img/demo/avatar2.jpg" width="90">
</script>

<!----------------------------------------------------------------------
badges
------------------------------------------------------------------------>
<h2>Badges</h2>
    
<div class="alert alert-dark mb-5">
    Options:
    <ul>
    <li>Background: <code>badge-*color</code></li>    
    <li>Text: <code>text-*color</code></li>
    <li>Shadow: <code>shadow</code>, <code>shadow-sm</code>, <code>shadow-lg</code></li>
    </ul>
</div>    
    
<div class="row">
	<div class="col-md-12">
		<span class="badge badge-pill badge-primary">Primary</span>
		<span class="badge badge-pill badge-secondary">Secondary</span>
		<span class="badge badge-pill badge-success">Success</span>
		<span class="badge badge-pill badge-danger">Danger</span>
		<span class="badge badge-pill badge-warning">Warning</span>
		<span class="badge badge-pill badge-info">Info</span>
        <a class="btn btn-primary" href="#">
			Profile <span class="badge badge-warning ml-2">15%</span>
			</a>
	</div>
</div>
    
<script type="text/plain" class="language-markup"><span class="badge badge-pill badge-primary">Primary</span>
</script>
    
<script type="text/plain" class="language-markup"><a class="btn btn-primary" href="#">Profile <span class="badge badge-warning ml-2">15%</span></a></script>


<!----------------------------------------------------------------------
buttons
------------------------------------------------------------------------>
<h2>Buttons</h2>
    
<div class="alert alert-dark mb-5">
    Options
    <ul>
    <li>Background: <code>btn-*color</code></li>    
    <li>Text: <code>text-*color</code></li>
    <li>Size: <code>btn-sm</code>, <code>btn</code>, <code>btn-lg</code></li>
    <li>Outline: <code>btn-outline-*color</code></li>
    <li>Round: <code>btn-round</code></li>
    <li>Width: <code>btn-block w-100</code></li>
    <li>Shadow: <code>shadow</code>, <code>shadow-sm</code>, <code>shadow-lg</code></li>
    </ul>
</div> 
    
<div class="row mb-4">
<div class="col-md-3">
<a href="#" class="btn btn-block btn-primary mb-2">Default</a>
</div>
    
<div class="col">
<a href="#" class="btn btn-block btn-outline-primary mb-2">Outline</a>
</div>
    
<div class="col">
<a href="#" class="btn btn-block btn-primary btn-round mb-2 shadow-lg">Round</a>
</div>
    
<div class="col">
<a href="#" class="btn btn-block btn-outline-primary btn-round mb-2">Outline</a>
</div>
</div>    

<script type="text/plain" class="language-markup"><a href="#" class="btn btn-primary">Default</a>
<a href="#" class="btn btn-outline-primary">Outline</a>
<a href="#" class="btn btn-primary btn-round shadow-lg">Round</a>
<a href="#" class="btn btn-outline-primary btn-round">Outline Round</a>
</script>


 
<!----------------------------------------------------------------------
carousel
------------------------------------------------------------------------>
    
<h2>Carousel</h2>
    
<div class="alert alert-dark mb-5">
    Options
    <ul>
    <li>Shadow: <code>shadow</code>, <code>shadow-sm</code>, <code>shadow-lg</code></li>
    <li>Rounded: <code>rounded</code></li>
    </ul>
</div>
    
<div class="alert alert-dark mb-5">
    Images with non-equal heights may cause a jump effect. Here's the call for a smooth transition:
    <code>    $('.carousel').on('slide.bs.carousel', function (event) {
      var height = $(event.relatedTarget).height();
      var $innerCarousel = $(event.target).find('.carousel-inner');
      $innerCarousel.animate({
        height: height
      });
    });
</code>
</div>
    
<div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
<ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
</ol>
<div class="carousel-inner shadow-sm rounded">
    <div class="carousel-item active">
        <img class="d-block w-100" src="assets/img/demo/slide1.jpg" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
            <h5>Mountains, Nature Collection</h5>
        </div>
    </div>
    <div class="carousel-item">
        <img class="d-block w-100" src="assets/img/demo/slide2.jpg" alt="Second slide">
        <div class="carousel-caption d-none d-md-block">
            <h5>Freedom, Sea Collection</h5>
        </div>
    </div>
    <div class="carousel-item">
        <img class="d-block w-100" src="assets/img/demo/slide3.jpg" alt="Third slide">
        <div class="carousel-caption d-none d-md-block">
            <h5>Living the Dream, Lost Island</h5>
        </div>
    </div>
</div>
</div>
    
<br/>
    
<script type="text/plain" class="language-markup"><div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
<ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
</ol>
<div class="carousel-inner shadow-sm rounded">
    <div class="carousel-item active">
        <img class="d-block w-100" src="assets/img/demo/slide1.jpg" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
            <h5>Mountains, Nature Collection</h5>
        </div>
    </div>
    <div class="carousel-item">
        <img class="d-block w-100" src="assets/img/demo/slide2.jpg" alt="Second slide">
        <div class="carousel-caption d-none d-md-block">
            <h5>Freedom, Sea Collection</h5>
        </div>
    </div>
    <div class="carousel-item">
        <img class="d-block w-100" src="assets/img/demo/slide3.jpg" alt="Third slide">
        <div class="carousel-caption d-none d-md-block">
            <h5>Living the Dream, Lost Island</h5>
        </div>
    </div>
</div>
</div></script>
    

    
<!----------------------------------------------------------------------
forms
------------------------------------------------------------------------>
    
<h2>Forms</h2>
    
<div class="alert alert-dark mb-5">
    Options
    <ul>
    <li>Rounded: <code>input-round</code></li>
    </ul>
</div>
    
<p><b>Inline Form</b></p>
    
<div class="row">
    <div class="col">
        <input type="text" class="form-control input-round" placeholder="First name">
    </div>
    <div class="col">
        <input type="text" class="form-control input-round" placeholder="Last name">
    </div>
    <div class="col">
        <button type="submit" class="btn btn-primary btn-round">Subscribe</button>
    </div>
</div>
    
<br/>
    
<script type="text/plain" class="language-markup"><div class="row">
    <div class="col">
        <input type="text" class="form-control input-round" placeholder="First name">
    </div>
    <div class="col">
        <input type="text" class="form-control input-round" placeholder="Last name">
    </div>
    <div class="col">
        <button type="submit" class="btn btn-primary btn-round">Subscribe</button>
    </div>
</div></script>
    
<br/>
    
<p><b>Sign Up Form</b></p>
    
<div class="col-md-4">
<form>
<div class="form-group">
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required="">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
</div>
<div class="form-group">
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required="">
</div>
<div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
</div>
<button type="submit" class="btn btn-success btn-round d-block w-100">Sign in</button>
</form>
</div>
    
<br/>
    
<script type="text/plain" class="language-markup"><form>
<div class="form-group">
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required="">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
</div>
<div class="form-group">
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required="">
</div>
<div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
</div>
<button type="submit" class="btn btn-success btn-round">Sign in</button>
</form></script>
    
<br/>
    
<p><b>Contact Form</b></p>
<form>
<div class="row form-group">
    <div class="col">
        <input type="text" class="form-control" placeholder="First name">
    </div>
    <div class="col">
        <input type="text" class="form-control" placeholder="Last name">
    </div>
</div>
<div class="form-group">
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
</div>
<button type="submit" class="btn btn-primary btn-round">Submit</button>
</form>

<br/>
    
<script type="text/plain" class="language-markup"><form>
<div class="row form-group">
    <div class="col">
        <input type="text" class="form-control" placeholder="First name">
    </div>
    <div class="col">
        <input type="text" class="form-control" placeholder="Last name">
    </div>
</div>
<div class="form-group">
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
</div>
<button type="submit" class="btn btn-primary btn-round">Submit</button>
</form></script>
 


<!----------------------------------------------------------------------
icons
------------------------------------------------------------------------>
    
<h2>Icons</h2>
    <p>Anchor UI Kit comes with latest Font Awesome, the web’s most popular icon set and toolkit. <a target="_blank" href="https://fontawesome.com/icons?d=gallery">Here</a> are all the available icons.</p>
    
<div class="alert alert-dark mt-5 mb-5">
    Simple Icon Options
    <ul>
    <li>Color: <code>text-*color</code></li>
    <li>Size: <code>fa-2x</code>, <code>fa-3x</code></li>
    </ul>
</div>
    
<div class="alert alert-dark mb-5">
    Bordered Icon Options
    <ul>
    <li>Color: <code>text-*color</code></li>
    <li>Size: <code>iconsmall</code>, <code>iconmedium</code>, <code>iconlarge</code></li>
    <li>Circle: <code>rounded-circle</code></li>
    <li>Shadow: <code>shadow</code>, <code>shadow-sm</code>, <code>shadow-lg</code></li>
    </ul>
</div>
    
<div class="alert alert-dark mb-5">
    Background Fill Icon Options
    <ul>
    <li>Background: <code>bg-*color</code></li>
    <li>Size: <code>iconsmall</code>, <code>iconmedium</code>, <code>iconlarge</code></li>
    <li>Circle: <code>rounded-circle</code></li>
    <li>Shadow: <code>shadow</code>, <code>shadow-sm</code>, <code>shadow-lg</code></li>
    </ul>
</div>
    
 <p><i class="fas fa-chart-line mr-2"></i> <i class="fas fa-chart-line fa-2x mr-2"></i> <i class="fas fa-chart-line fa-3x"></i></p>
    
<script type="text/plain" class="language-markup"><!-- icon sizes -->
<i class="fas fa-chart-line"></i> 
<i class="fas fa-chart-line fa-2x"></i> 
<i class="fas fa-chart-line fa-3x"></i></script>
<br/>
    
<p>Bordered Icons:</p>

<p>
<span class="iconbox iconsmall rounded-circle text-primary"><i class="fab fa-facebook-f"></i></span>
<span class="iconbox iconmedium rounded-circle text-info"><i class="fab fa-twitter"></i></span>
<span class="iconbox iconlarge rounded-circle text-danger"><i class="fab fa-google"></i></span>
</p>
    
<script type="text/plain" class="language-markup"><!-- bordered icons -->
<span class="iconbox iconsmall rounded-circle text-primary"><i class="fab fa-facebook-f"></i></span>
<span class="iconbox iconmedium rounded-circle text-info"><i class="fab fa-twitter"></i></span>
<span class="iconbox iconlarge rounded-circle text-danger"><i class="fab fa-google"></i></span></script>
    
<br/>
    
<p>Background Icons:</p>

<p>
<span class="iconbox iconsmall rounded-circle bg-primary text-white shadow border-0"><i class="fas fa-cart-arrow-down"></i></span> 
<span class="iconbox iconmedium rounded-circle bg-warning text-white shadow border-0"><i class="fas fa-coffee"></i></span> 
<span class="iconbox iconlarge rounded-circle bg-success text-white shadow border-0"><i class="fa fa-book-reader"></i></span>
</p>
    
<script type="text/plain" class="language-markup"><!-- background icons -->
<span class="iconbox iconsmall rounded-circle bg-primary text-white shadow border-0"><i class="fas fa-cart-arrow-down"></i></span> 
<span class="iconbox iconmedium rounded-circle bg-warning text-white shadow border-0"><i class="fas fa-coffee"></i></span> 
<span class="iconbox iconlarge rounded-circle bg-success text-white shadow border-0"><i class="fa fa-book-reader"></i></span></script>
    
<!----------------------------------------------------------------------
modals
------------------------------------------------------------------------>
    
<h2>Modals</h2>
<p><button type="button" class="btn btn-primary w-100" data-toggle="modal" data-target="#exampleModalCenter">
Basic vertical center </button></p>
    
<!-- Modal Type 1 -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header border-0">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="pb-4 pr-4 pl-4 text-center">
					<h3 class="heading mt-4">Basic Modal</h3>
					<p>
						 Do not keep silent when your own ideas and values are being attacked. If a dictatorship ever comes to this country, it will be by the fault of those who keep silent.
					</p>
					<p>
						<em class="text-muted">You can add any HTML in the body.</em>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
    
    
<script type="text/plain" class="language-markup"><!-- button triggering modal -->
<button type="button" class="btn btn-primary w-100" data-toggle="modal" data-target="#exampleModalCenter">
Basic vertical center </button>

<!-- The modal itself -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header border-0">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="pb-4 pr-4 pl-4 text-center">
					<img src="assets/img/favicon.ico">
					<h3 class="heading mt-4">Basic Modal</h3>
					<p>
						 Do not keep silent when your own ideas and values are being attacked. If a dictatorship ever comes to this country, it will be by the fault of those who keep silent.
					</p>
					<p>
						<em class="text-muted">You can add any HTML in the body.</em>
					</p>
				</div>
			</div>
		</div>
	</div>
</div></script>   

        

<!----------------------------------------------------------------------
pagination
------------------------------------------------------------------------>
    
<h2>Pagination</h2>
    
<nav aria-label="Page navigation example">
<ul class="pagination">
	<li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-left"></i></a></li>
	<li class="page-item"><a class="page-link" href="#">1</a></li>
	<li class="page-item active"><a class="page-link" href="#">2</a></li>
	<li class="page-item"><a class="page-link" href="#">3</a></li>
	<li class="page-item"><a class="page-link" href="#">4</a></li>
	<li class="page-item"><a class="page-link" href="#">5</a></li>
	<li class="page-item"><a class="page-link" href="#">6</a></li>
	<li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a></li>
</ul>
</nav>
    
    
<script type="text/plain" class="language-markup"><!-- pagination -->
<nav aria-label="Page navigation example">
<ul class="pagination">
	<li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-left"></i></a></li>
	<li class="page-item"><a class="page-link" href="#">1</a></li>
	<li class="page-item active"><a class="page-link" href="#">2</a></li>
	<li class="page-item"><a class="page-link" href="#">3</a></li>
	<li class="page-item"><a class="page-link" href="#">4</a></li>
	<li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a></li>
</ul>
</nav></script>
    
<!----------------------------------------------------------------------
popovers
------------------------------------------------------------------------>
    
<h2>Popovers</h2>
    
<div class="alert alert-dark mb-5">
    Options:
    <ul>
    <li>Placement: <code>data-placement="top/right/bottom/left"</code></li>
    </ul>
</div>
    
<div class="alert alert-dark mb-5">
Call: <code>$(function () {
$('[data-toggle="popover"]').popover()
})
$('.popover-dismiss').popover({
  trigger: 'focus'
})</code>
</div>
    
<div class="mb-4">
    <h4 class="mb-4 h5">Click me</h4>
    <a tabindex="0" data-placement="top" class="btn btn-light" role="button" data-toggle="popover" data-trigger="focus" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="Dismissible popover">On Top</a>
    <a tabindex="0" data-placement="right" class="btn btn-light" role="button" data-toggle="popover" data-trigger="focus" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="Dismissible popover">On Right</a>
    <a tabindex="0" data-placement="bottom" class="btn btn-light" role="button" data-toggle="popover" data-trigger="focus" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="Dismissible popover">On Bottom</a>
    <a tabindex="0" data-placement="left" class="btn btn-light" role="button" data-toggle="popover" data-trigger="focus" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="Dismissible popover">On Left</a>
</div>
    
    
<script type="text/plain" class="language-markup"><!-- popover -->
<a tabindex="0" data-placement="top" class="btn btn-light" role="button" data-toggle="popover" data-trigger="focus" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="Dismissible popover">On Top</a>
<a tabindex="0" data-placement="right" class="btn btn-light" role="button" data-toggle="popover" data-trigger="focus" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="Dismissible popover">On Right</a>
<a tabindex="0" data-placement="bottom" class="btn btn-light" role="button" data-toggle="popover" data-trigger="focus" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="Dismissible popover">On Bottom</a>
<a tabindex="0" data-placement="left" class="btn btn-light" role="button" data-toggle="popover" data-trigger="focus" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="Dismissible popover">On Left</a></script>
    
 
    
<!----------------------------------------------------------------------
tables
------------------------------------------------------------------------>
    
<h2>Table</h2>
    
<table class="table">
<thead class="thead-dark">
<tr>
	<th scope="col">
		 #
	</th>
	<th scope="col">
		 First
	</th>
	<th scope="col">
		 Last
	</th>
	<th scope="col">
		 Handle
	</th>
</tr>
</thead>
<tbody>
<tr>
	<th scope="row">
		 1
	</th>
	<td>
		 Mark
	</td>
	<td>
		 Otto
	</td>
	<td>
		 @mdo
	</td>
</tr>
<tr>
	<th scope="row">
		 2
	</th>
	<td>
		 Jacob
	</td>
	<td>
		 Thornton
	</td>
	<td>
		 @fat
	</td>
</tr>
<tr>
	<th scope="row">
		 3
	</th>
	<td>
		 Larry
	</td>
	<td>
		 the Bird
	</td>
	<td>
		 @twitter
	</td>
</tr>
</tbody>
</table>
    
    
    
<script type="text/plain" class="language-markup"><!-- table -->
<table class="table">
<thead class="thead-dark">
<tr>
	<th scope="col"> #      </th>
	<th scope="col"> First	</th>
	<th scope="col"> Last	</th>
	<th scope="col"> Handle	</th>
</tr>
</thead>
<tbody>
<tr>
	<th scope="row"> 1	</th>
	<td> Mark </td>
	<td> Otto </td>
	<td> @mdo  </td>
</tr>
<tr>
	<th scope="row"> 2	</th>
	<td> Jacob	  </td>
	<td> Thornton </td>
	<td> @fat          </td>
</tr>
<tr>
	<th scope="row"> 3	</th>
	<td> Larry    </td>
	<td> the Bird </td>
	<td> @twitter  </td>
</tr>
</tbody>
</table></script>
    
<!----------------------------------------------------------------------
 tooltips
------------------------------------------------------------------------>
    
<h2>Tooltips</h2>    
<div class="alert alert-dark mb-5">
    Options:
    <ul>
    <li>Placement: <code>data-placement="top/right/bottom/left"</code></li>
    </ul>
</div>
    
<div class="alert alert-dark mb-5">
Call: <code>
$(function () {
$('[data-toggle=&quot;tooltip&quot;]').tooltip()
})
</code>
</div>
   
<div class="mb-4">
<button type="button" class="btn btn-light" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top">
On top </button>
<button type="button" class="btn btn-light" data-toggle="tooltip" data-placement="right" title="" data-original-title="Tooltip on right">
On right </button>
<button type="button" class="btn btn-light" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Tooltip on bottom">
On bottom </button>
<button type="button" class="btn btn-light" data-toggle="tooltip" data-placement="left" title="" data-original-title="Tooltip on left">
On left </button>
    </div>

    
<script type="text/plain" class="language-markup"><!-- tooltips -->
<button type="button" class="btn btn-light" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top">
On top </button>

<button type="button" class="btn btn-light" data-toggle="tooltip" data-placement="right" title="" data-original-title="Tooltip on right">
On right </button>

<button type="button" class="btn btn-light" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Tooltip on bottom">
On bottom </button>

<button type="button" class="btn btn-light" data-toggle="tooltip" data-placement="left" title="" data-original-title="Tooltip on left">
On left </button></script>

    
    
</div><!-- End docs -->
</div>
</div>
</div>
<!-- End DOCS -->
    

<!--------------------------------------
FOOTER
--------------------------------------->
<footer class="bg-light pb-5 pt-4">
<div class="container">
	<div class="row justify-content-center text-center">
		<div class="col-md-12">			
			<span class="d-block mt-3 text-muted">©
			<script>document.write(new Date().getFullYear())</script>
			 <a target="_blank" href="https://www.wowthemes.net/mundana-free-html-bootstrap-template/">Mundana Theme</a>  by WowThemes.net.
            </span>
		</div>
	</div>
</div>
</footer>
    
    
</main>
<!--- end main -->
    
    
<!--------------------------------------
JAVASCRIPTS
--------------------------------------->    
<script src="./assets/js/vendor/jquery.min.js" type="text/javascript"></script>
<script src="./assets/js/vendor/popper.min.js" type="text/javascript"></script>
<script src="./assets/js/vendor/bootstrap.min.js" type="text/javascript"></script>
<script src="./assets/js/functions.js" type="text/javascript"></script>
    
<!-- Docs -->
<script src="./assets/js/vendor/prism.js" type="text/javascript"></script>
<script src="./assets/js/vendor/bootstrap-toc.js" type="text/javascript"></script>
<script>
    $(function() {
      new ClipboardJS('.btn');
      var navSelector = '#toc';
      var $myNav = $(navSelector);
      Toc.init({
          $nav: $('#toc'),
          $scope: $('#docsarea')
        });
      $('body').scrollspy({
        target: navSelector
      });        
    });
</script>

    

<!-- Tooltips -->
<script> $(function () { $('[data-toggle="tooltip"]').tooltip() }) </script>
    
<!-- Popovers -->    
<script> 
$(function () {
$('[data-toggle="popover"]').popover()
})
$('.popover-dismiss').popover({
  trigger: 'focus'
})
</script>

</body>
</html><?php /**PATH C:\xampp\htdocs\HackSick!\HackSick!\resources\views/docs.blade.php ENDPATH**/ ?>