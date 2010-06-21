<?php 
function head(
  $title='Mozilla Student Reps', 
  $pageid='', 
  $bodyclass='',
  $headerclass=''
) { 
?>
<!DOCTYPE html>
<html lang="en-US" dir="ltr" id="developer-mozilla-org">
<head>
  <title><?php echo $title ?></title>
	
	<meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="MSSmartTagsPreventParsing" content="true">
  <meta name="ROBOTS" content="ALL">
  <meta name="Copyright" content="Copyright (c) 2005-<?php echo date(Y); ?> Mozilla.">
  <meta name="Rating" content="General">
  
  <link rel="home" href="/">
  <link rel="copyright" href="#legal-copyright">
  
  <!--[if !IE 6]><!--><link rel="stylesheet" type="text/css" media="screen,projection" href="/css/screen.css"><!--<![endif]-->
  <!--[if lte IE 7]><link rel="stylesheet" type="text/css" media="all" href="/css/ie7.css"><![endif]-->
  <!--[if lte IE 6]><link rel="stylesheet" type="text/css" media="all" href="/css/ie6.css"><![endif]-->
  <link rel="stylesheet" type="text/css" media="print" href="/css/print.css">
  
  <script type="text/javascript" src="/js/jquery-1.4.2.min.js"></script>

  <!--[if IE]>
  <meta http-equiv="imagetoolbar" content="no">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  
</head>
<body id="<?php echo $pageid; ?>" class="<?php echo $bodyclass; ?>" role="document">
<header id="masthead" class="<?php echo $headerclass; ?>">
  <div class="wrap">
    <div id="branding">
    <?php if ($headerclass == 'major') : ?>
      <h1 id="logo"><a href="home.php"><img src="/img/mdn-logo.png" alt="" width="128" height="146"> Mozilla Developer Network</a></h1>
    <?php else : ?>
      <h4 id="logo"><a href="home.php"><img src="/img/mdn-logo-sm.png" alt="" width="62" height="71"> Mozilla Developer Network</a></h4>    
    <?php endif; ?>
      <p id="tagline">A comprehensive, usable &amp; accurate resource for developers using Mozilla Technologies.</p>
    </div>
    
    <div id="utility">
      <p class="user-state"><a href="#">Log in</a> | <a href="#">Become an MDN member</a></p>
      <form id="site-search" method="get" action="#">
        <p><input type="text" role="search" placeholder="Search" id="q" name="q" /> <button type="submit">Search</button></p>
      </form>
    </div>
  
    <nav id="nav">
      <ul id="nav-main" role="navigation">
        <li id="nav-main-web"><a href="section-web.php" class="web">Web</a></li>
        <li id="nav-main-mobile"><a href="section-mobile.php" class="mobile">Mobile</a></li>
        <li id="nav-main-addons"><a href="section-addons.php" class="addons">Add-ons</a></li>
        <li id="nav-main-apps"><a href="section-apps.php" class="apps">Applications</a></li>
      </ul>
  
      <ul id="nav-extra" role="navigation">
        <li id="nav-extra-docs"><a href="docs-landing.php">Docs</a></li>
        <li id="nav-extra-tools"><a href="#">Tools</a></li>
        <li id="nav-extra-community"><a href="#">Community</a></li>
        <li id="nav-extra-labs"><a href="#">Labs</a></li>
      </ul>
    </nav>
  </div>
</header>
<?php } // end head ?>



<?php function foot() { ?>
<section id="footbar">
<div class="wrap">
  <p>Subscribe to our Mailing lists and Newsletters to get the latest updates and announcements from MDN! <a href="#">Learn More &raquo;</a></p>
</div>
</section>
<footer id="site-info" role="contentinfo">
<div class="wrap">
    <div id="legal">
      <img src="/img/mdn-logo-tiny.png" alt="" width="42" height="48">
      <p id="copyright">&copy; <?php echo date('Y'); ?> Mozilla Developer Network</p>
      <p>Content is available under <a href="#">these licenses</a> &bull; <a href="#">About MDN</a> &bull; <a href="#">Help</a></p>
    </div>
    <p class="user-state"><a href="#">Log in</a> | <a href="#">Become an MDN member</a></p>    
</div>
</footer>

</body>
</html>
<?php } // end foot ?>
