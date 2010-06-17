<?php include "./inc/template.php"; 
head(
  $title = 'Mozilla Developer Network',
  $pageid = 'home', 
  $bodyclass = '',
  $headerclass = 'major'
); ?>
<header id="welcome-bar">
<div class="wrap">
    <p class="intro" id="welcome-devmo"><span class="leadin">Welcome to the Mozilla Deveoper Network, a.k.a.:</span> 
    <strong class="devmo">DEVMO</strong>
    <a href="#" class="go">Learn the history behind Project <em>Devmo</em></a></p>
    
    <p class="extra" id="welcome-new"><strong>New to MDN?</strong> Want to help make our network even better?<br /> 
    <a href="#" class="go">Here's how to get started</a></p>

    <p class="extra" id="welcome-login"><strong>Already a member?</strong> Customize your profile &amp; fine-tune your participation within MDN.<br /> 
    <a href="#" class="go">Log in</a></p>
</div>
</header>

<section id="content">
<div class="wrap sidebar">
  <section id="content-main" role="main">
  
  <!-- These two scripts are only needed on the home page (or any page featuring the slide show widget). -->
  <script type="text/javascript" src="/js/jquery.cycle.js"></script>
  <script type="text/javascript" src="/js/slideshow.js"></script>
    
  <div id="slideshow">
    <ol id="slide-control">
      <li id="slide1" class="on"><a href="#slide-one" title="First Feature">First Feature</a></li>
      <li id="slide2"><a href="#slide-two" title="Second Feature">Second Feature</a></li>
      <li id="slide3"><a href="#slide-three" title="Third Feature">Third Feature</a></li>
      <li id="slide4"><a href="#slide-four" title="Fourth Feature">Fourth Feature</a></li>
    </ol>
    <ol id="slides">
      <li id="slide-one" class="slide">
        <img src="/img/fpo-slide1.jpg" alt="" width="660">
        <div class="slide-desc">
          <h3>First Feature</h3>
          <h2>A compelling headline to introduce this feature.</h2>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi commodo, ipsum sed pharetra gravida, orci magna rhoncus neque, id pulvinar odio lorem non turpis. Nullam sit amet enim.</p>
          <p class="more"><a href="#" class="button">More</a></p>
        </div>
      </li>
      <li id="slide-two" class="slide">
        <img src="/img/fpo-slide2.jpg" alt="" width="660">
        <div class="slide-desc">
          <h3>Second Feature</h3>
          <h2>A bird in the hand is worth two in the bush.</h2>
          <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.</p>
          <p class="more"><a href="#" class="button">More</a></p>
        </div>
      </li>
      <li id="slide-three" class="slide">
        <img src="/img/fpo-slide3.jpg" alt="" width="660">
        <div class="slide-desc">
          <h3>Third Feature</h3>
          <h2>Early to bed and early to rise makes a man healthy, wealthy, and wise.</h2>
          <p>Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat.</p>
          <p class="more"><a href="#" class="button">More</a></p>
        </div>
      </li>
      <li id="slide-four" class="slide">
        <img src="/img/fpo-slide4.jpg" alt="" width="660">
        <div class="slide-desc">
          <h3>Fourth Feature</h3>
          <h2>Laughter is the best medicine.</h2>
          <p>Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. Nam nulla quam, gravida non, commodo a, sodales sit amet, nisi.</p>
          <p class="more"><a href="#" class="button">More</a></p>
        </div>
      </li>
    </ol>
  </div><!-- /#slideshow -->
  
  <script type="text/javascript">
  // <![CDATA[
  	$(document).ready(function(){
  		$("#slide-control a").focus(function(){ window.focus(this); }); // corrects some weirdness with the slide show bogarting focus and breaking keyboard tabbing through links
  	});
  // ]]>
  </script>
    
    <div id="home-highlights">
      <h2>Highlights From Around the Network</h2>
      
      <div class="tabbed">
        <h3>News &amp; Updates</h3>
        <p class="intro">Highlighted Mozilla Devloper News &amp; Updates</p>
        <ul class="hfeed">
          <li class="hentry">
            <h5 class="category"><a href="#" rel="tag" class="web">Web</a></h5>
            <h4 class="entry-title"><a href="#" rel="bookmark">Integer vitae libero ac risus egestas placerat</a></h4>
            <p class="entry-summary">Sed adipiscing ornare risus. Morbi est est, blandit sit amet, sagittis vel, euismod vel, velit. Pellentesque egestas sem. Suspendisse commodo ullamcorper magna.</p>
            <p class="entry-meta">Modified by: <cite class="author vcard"><a href="#" class="url fn">Han Solo</a></cite> and filed under: <a href="#" rel="tag">CSS3</a>, <a href="#" rel="tag">HTML5</a></p>
          </li>
          <li class="hentry">
            <h5 class="category"><a href="#" rel="tag" class="apps">Applications</a></h5>
            <h4 class="entry-title"><a href="#" rel="bookmark">Lorem ipsum dolor sit amet</a></h4>
            <p class="entry-summary">Ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Aenean dignissim pellentesque felis.</p>
            <p class="entry-meta">Created by: <cite class="author vcard"><a href="#" class="url fn">Jay Patel</a></cite> and filed under: <a href="#" rel="tag">Firefox</a>, <a href="#" rel="tag">Thunderbird</a>, <a href="#" rel="tag">Seamonkey</a></p>
          </li>
          <li class="hentry">
            <h5 class="category"><a href="#" rel="tag" class="addons">Add-ons</a></h5>
            <h4 class="entry-title"><a href="#" rel="bookmark">Aliquam quam lectus, facilisis auctor, ultrices ut, elementum vulputate, nunc</a></h4>
            <p class="entry-summary">Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore tincidunt.</p>
            <p class="entry-meta">Modified by: <cite class="author vcard"><a href="#" class="url fn">Morgamic</a></cite> and filed under: <a href="#" rel="tag">Operator</a>, <a href="#" rel="tag">microformats</a></p>
          </li>
          <li class="hentry">
            <h5 class="category"><a href="#" rel="tag" class="mobile">Mobile</a></h5>
            <h4 class="entry-title"><a href="#" rel="bookmark">Fusce pellentesque suscipit nibh</a></h4>
            <p class="entry-summary">Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</p>
            <p class="entry-meta">Created by: <cite class="author vcard"><a href="#" class="url fn">Boba Fett</a></cite> and filed under: <a href="#" rel="tag">Fennec</a></p>
          </li>
          <li class="hentry">
            <h5 class="category"><a href="#" rel="tag" class="web">Web</a></h5>
            <h4 class="entry-title"><a href="#" rel="bookmark">Donec quis dui at dolor tempor interdum</a></h4>
            <p class="entry-summary">Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. Nam nulla quam, gravida non, commodo a, sodales sit amet, nisi.</p>
            <p class="entry-meta">Created by: <cite class="author vcard"><a href="#" class="url fn">Morgamic</a></cite> and filed under: <a href="#" rel="tag">CSS3</a>, <a href="#" rel="tag">HTML5</a></p>
          </li>
        </ul>

        
        <h3>Events</h3>
        <p class="intro">MDN Events</p>
        <p>Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis. Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. Phasellus pede arcu, dapibus eu, fermentum et, dapibus sed, urna.</p>
        
        <h3>Docs</h3>
        <p class="intro">Documentation</p>
        <p>Morbi interdum mollis sapien. Sed ac risus. Phasellus lacinia, magna a ullamcorper laoreet, lectus arcu pulvinar risus, vitae facilisis libero dolor a purus. Sed vel lacus. Mauris nibh felis, adipiscing varius, adipiscing in, lacinia vel, tellus. Suspendisse ac urna. Etiam pellentesque mauris ut lectus. Nunc tellus ante, mattis eget, gravida vitae, ultricies ac, leo. Integer leo pede, ornare a, lacinia eu, vulputate vel, nisl.</p>

        <h3>Tools</h3>
        <p class="intro">Developer Tools</p>
        <p>Ut convallis, sem sit amet interdum consectetuer, odio augue aliquam leo, nec dapibus tortor nibh sed augue. Integer eu magna sit amet metus fermentum posuere. Morbi sit amet nulla sed dolor elementum imperdiet. Quisque fermentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque adipiscing eros ut libero. Ut condimentum mi vel tellus. Suspendisse laoreet. Fusce ut est sed dolor gravida convallis. Morbi vitae ante. Vivamus ultrices luctus nunc. Suspendisse et dolor. Etiam dignissim. Proin malesuada adipiscing lacus. Donec metus. Curabitur gravida.</p>        
      </div>
    </div>
    
  <script type="text/javascript" src="/js/TabInterface.js"></script>
  <script type="text/javascript">
  // <![CDATA[
    $(document).ready(function(){
      var cabinets = Array();
      var collection = document.getElementsByTagName( '*' );
      var cLen = collection.length;
      for( var i=0; i<cLen; i++ ){
        if( collection[i] &&
            /\s*tabbed\s*/.test( collection[i].className ) ){
          cabinets.push( new TabInterface( collection[i], i ) );
        }
      }
    });
  // ]]>
  </script>
    
  </section>
  
  <aside id="content-sub" role="complementary">

    <div class="module hot" id="hot-content">
      <h3 class="mod-title">Network Trends &amp; Hot Content</h3>
      <p class="mod-intro">Up to date trends and popular content based on number of tags on a given entry/doc/tool. Alphabetical order.</p>
      <ol class="heat-graph">
        <li><span style="width:50%;"><a href="#">Accessory <b>50</b></a></span></li>
        <li><span style="width:80%;"><a href="#">Concept <b>80</b></a></span></li>
        <li><span style="width:100%;"><a href="#">CSS <b>100</b></a></span></li>
        <li><span style="width:6%;"><a href="#">iPad <b>6</b></a></span></li>
        <li><span style="width:17%;"><a href="#">iPhone <b>17</b></a></span></li>
        <li><span style="width:94%;"><a href="#">HTML <b>94</b></a></span></li>
        <li><span style="width:33%;"><a href="#">Operator <b>33</b></a></span></li>
        <li><span style="width:24%;"><a href="#">Prism <b>24</b></a></span></li>
        <li><span style="width:66%;"><a href="#">Property <b>66</b></a></span></li>
        <li><span style="width:10%;"><a href="#">Prototype <b>10</b></a></span></li>
      </ol>
      
      <ul class="hfeed">
        <li class="hentry">
          <h5 class="category"><a href="#" rel="tag" class="addons">Add-ons</a></h5>
          <h4 class="entry-title"><a href="#">Lorem ipsum dolor sit amet</a></h4>
          <p class="entry-meta">Filed under: <a href="#" rel="tag">Operator</a>, <a href="#" rel="tag">microformats</a></p>
        </li>
        <li class="hentry">
          <h5 class="category"><a href="#" rel="tag" class="mobile">Mobile</a></h5>
          <h4 class="entry-title"><a href="#">Fusce pellentesque suscipit nibh</a></h4>
          <p class="entry-meta">Filed under: <a href="#" rel="tag">Fennec</a>, <a href="#">Android</a>, <a href="#" rel="tag">HTML5</a></p>
        </li>
      </ul>
    </div><!-- /hot-content -->
    
    <div class="module" id="mdn-twitter">
      <h3 class="mod-title">MDN on Twitter</h3>
      <p class="mod-intro">Correspondance on Twitter from the Mozilla Developer Community staff.</p>
      <ul class="hfeed">
        <li class="hentry">
          <h4 class="entry-title vcard">@<a href="http://twitter.com/mozillaweb" class="author url fn nickname">mozillaweb</a> from <a href="#" class="category apps">applications</a> says:</h4>
          <p class="entry-content">Check out the hot new features in Firefox 4: <a href="#">http://mzl.la/bOnGEN</a> HTML5 Forms, Web Sockets, CSS transitions, WebGL, WebM, IndexedDB &amp; more</p>
          <p class="entry-meta"><a href="#" rel="bookmark">about 17 hours ago</a> via <a href="#">Twitter for iPhone</a></p>
        </li>
        <li class="hentry">
          <h4 class="entry-title vcard">@<a href="http://twitter.com/mozhacks" class="author url fn nickname">mozhacks</a> from <a href="#" class="category web">web</a> says:</h4>
          <p class="entry-content">Check out these awesome HTML5 demos by @<a href="#">sayrer</a>: <a href="#">http://bit.ly/9ORB4L</a></p>
          <p class="entry-meta"><a href="#" rel="bookmark">11:04 AM Jun 4th</a> via <a href="#">web</a></p>
        </li>
        <li class="hentry">
          <h4 class="entry-title vcard">@<a href="http://twitter.com/mozillaqa" class="author url fn nickname">mozillaqa</a> from <a href="#" class="category web">web</a> says:</h4>
          <p class="entry-content">QMO.next is Live! Take a look at our new site at <a href="http://quality.mozilla.org">http://quality.mozilla.org</a> !!</p>
          <p class="entry-meta"><a href="#" rel="bookmark">7:31 PM Jun 3rd</a> via <a href="#">web</a></p>
        </li>
        <li class="hentry">
          <h4 class="entry-title vcard">@<a href="http://twitter.com/mozhacks" class="author url fn nickname">Mozhacks</a> from <a href="#" class="category mobile">mobile</a> says:</h4>
          <p class="entry-content">Beyond #HTML5: background on our web database work on IndexedDB: <a href="#">http://mzl.la/9bV7y4</a> and a walkthrough: <a href="#">http://mzl.la/cH8Ckw</a></p>
          <p class="entry-meta"><a href="#" rel="bookmark">11:45 AM Jun 1st</a> via <a href="#">web</a></p>
        </li>
      </ul>
      <p id="follow"><a href="#">Follow <b>MDN</b> on Twitter</a></p>
    </div>

  </aside>
</div>
</section><!-- /#content -->

<section id="content-latest">
<div class="wrap">
  
  <div id="latest-forums" class="boxed">
    <header>
      <h3>Latest Discussions from Our Forums:</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </header>
    <ul class="hfeed">
      <li class="hentry">
        <cite class="author vcard"><a href="#" class="url fn"><img src="/img/fpo55.png" alt="" class="photo" width="38" height="38" /> Lando Calrissian</a></cite> 
        wrote <a href="#" class="entry-summary entry-title">Excepteur sint occaecat cupidatat non proident labore et dolore magna&hellip;</a> 
        in <a href="#" rel="tag" class="category mobile">Mobile</a></p>
      </li>
      <li class="hentry">
        <cite class="author vcard"><a href="#" class="url fn"><img src="/img/fpo55.png" alt="" class="photo" width="38" height="38" /> Jay Patel</a></cite> 
        wrote <a href="#" class="entry-summary entry-title">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi commodo, ipsum sed pharetra gravida, orci magna rhoncus neque&hellip;</a> 
        in <a href="#" rel="tag" class="category apps">Applications</a></p>
      </li>
      <li class="hentry">
        <cite class="author vcard"><a href="#" class="url fn"><img src="/img/fpo55.png" alt="" class="photo" width="38" height="38" /> Han</a></cite> 
        wrote <a href="#" class="entry-summary entry-title">Eiusmod tempor incididunt ut labore et dolore magna aliqua in voluptate velit esse cillum&hellip;</a> 
        in <a href="#" rel="tag" class="category addons">Add-ons</a></p>
      </li>
      <li class="hentry">
        <cite class="author vcard"><a href="#" class="url fn"><img src="/img/fpo55.png" alt="" class="photo" width="38" height="38" /> morgamic</a></cite> 
        wrote <a href="#" class="entry-summary entry-title">Duis aute irure dolor in commodo ipsum reprehenderit in voluptate ipsum dolor sit amet, consectetur adipisicing elit velit esse cillum dolore eu fugiat nulla pariatur&hellip;</a> 
        in <a href="#" rel="tag" class="category web">Web</a></p>
      </li>
    </ul>
  </div>
  
  <div id="latest-comments" class="boxed">
    <header>
      <h3>Latest Comments from Our Community:</h3>
      <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
    </header>
    <ul class="hfeed">
      <li class="hentry">
        <cite class="author vcard"><a href="#" class="url fn"><img src="/img/fpo55.png" alt="" class="photo" width="38" height="38" /> Jay Patel</a></cite> 
        wrote <a href="#" class="entry-summary entry-title">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi commodo, ipsum sed pharetra gravida, orci magna rhoncus neque&hellip;</a> 
        in <a href="#" rel="tag" class="category apps">Applications</a></p>
      </li>
      <li class="hentry">
        <cite class="author vcard"><a href="#" class="url fn"><img src="/img/fpo55.png" alt="" class="photo" width="38" height="38" /> morgamic</a></cite> 
        wrote <a href="#" class="entry-summary entry-title">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur&hellip;</a> 
        in <a href="#" rel="tag" class="category web">Web</a></p>
      </li>
      <li class="hentry">
        <cite class="author vcard"><a href="#" class="url fn"><img src="/img/fpo55.png" alt="" class="photo" width="38" height="38" /> Lando Calrissian</a></cite> 
        wrote <a href="#" class="entry-summary entry-title">Excepteur sint occaecat cupidatat non proident&hellip;</a> 
        in <a href="#" rel="tag" class="category mobile">Mobile</a></p>
      </li>
      <li class="hentry">
        <cite class="author vcard"><a href="#" class="url fn"><img src="/img/fpo55.png" alt="" class="photo" width="38" height="38" /> Han</a></cite> 
        wrote <a href="#" class="entry-summary entry-title">Eiusmod tempor incididunt ut labore et dolore magna aliqua in voluptate velit esse cillum&hellip;</a> 
        in <a href="#" rel="tag" class="category addons">Add-ons</a></p>
      </li>
    </ul>
  </div>
    
</div>
</section><!-- /#latest -->

<section id="content-elsewhere">
<div class="wrap">
  
  <header>
    <h2>Elsewhere Around the Network</h2>
    <p id="type-legend"><strong>Legend:</strong> <b class="type doc">Doc</b> <b class="type tool">Tool</b> <b class="type event">Event</b> <b class="type campaign">Campaign/Project</b></p>
  </header>
  <p class="intro">Snappy and short descriptive sentence goes here.</p>

  <div id="sections">
    <div class="mdn-section">
      <h3><a href="#" class="web">Web</a></h3>
      <ul>
        <li>
          <h5 class="type doc">Doc</h5>
          <h4><a href="#">Dolor sit amet, consectetuer adipiscing elit</a></h4>
        </li>
        <li>
          <h5 class="type tool">Tool</h5>
          <h4><a href="#">Aliquam tincidunt mauris eu risus</a></h4>
        </li>
        <li>
          <h5 class="type doc">Doc</h5>
          <h4><a href="#">Cras ornare tristique elit</a></h4>
        </li>
        <li>
          <h5 class="type doc">Doc</h5>
          <h4><a href="#">Ut aliquam sollicitudin leo</a></h4>
        </li>
      </ul>
    </div>
    
    <div class="mdn-section">
      <h3><a href="#" class="mobile">Mobile</a></h3>
      <ul>
        <li>
          <h5 class="type event">Doc</h5>
          <h4><a href="#">Donec quis dui at</a></h4>
        </li>
        <li>
          <h5 class="type tool">Tool</h5>
          <h4><a href="#">Aliquam tincidunt mauris eu risus</a></h4>
        </li>
        <li>
          <h5 class="type doc">Doc</h5>
          <h4><a href="#">Cras ornare tristique elit</a></h4>
        </li>
        <li>
          <h5 class="type campaign">Campaign/Project</h5>
          <h4><a href="#">Ut aliquam sollicitudin leo</a></h4>
        </li>
      </ul>
    </div>
    
    <div class="mdn-section">
      <h3><a href="#" class="addons">Add-ons</a></h3>
      <ul>
        <li>
          <h5 class="type campaign">Campaign</h5>
          <h4><a href="#">Cras iaculis ultricies nulla</a></h4>
        </li>
        <li>
          <h5 class="type tool">Tool</h5>
          <h4><a href="#">Vivamus molestie gravida turpis</a></h4>
        </li>
        <li>
          <h5 class="type event">Event</h5>
          <h4><a href="#">Cras ornare tristique elit</a></h4>
        </li>
        <li>
          <h5 class="type doc">Doc</h5>
          <h4><a href="#">Fusce pellentesque suscipit nibh</a></h4>
        </li>
      </ul>
    </div>
    
    <div class="mdn-section">
      <h3><a href="#" class="apps">Applications</a></h3>
      <ul>
        <li>
          <h5 class="type doc">Doc</h5>
          <h4><a href="#">Consectetuer adipiscing elit</a></h4>
        </li>
        <li>
          <h5 class="type tool">Tool</h5>
          <h4><a href="#">Aliquam tincidunt mauris eu risus</a></h4>
        </li>
        <li>
          <h5 class="type doc">Doc</h5>
          <h4><a href="#">Nam convallis pellentesque nisl</a></h4>
        </li>
        <li>
          <h5 class="type doc">Doc</h5>
          <h4><a href="#">Ut aliquam sollicitudin leo</a></h4>
        </li>
      </ul>
    </div>
    
    <div class="mdn-section">
      <h3><a href="#" class="labs">Labs</a></h3>
      <ul>
        <li>
          <h5 class="type campaign">Campaign/Project</h5>
          <h4><a href="#">Dolor sit amet, consectetuer adipiscing elit</a></h4>
        </li>
        <li>
          <h5 class="type tool">Tool</h5>
          <h4><a href="#">Aliquam tincidunt mauris eu risus</a></h4>
        </li>
        <li>
          <h5 class="type event">Event</h5>
          <h4><a href="#">Cras ornare tristique elit</a></h4>
        </li>
        <li>
          <h5 class="type event">Event</h5>
          <h4><a href="#">Ut aliquam sollicitudin leo</a></h4>
        </li>
      </ul>
    </div>
  </div>
</div>
</section><!-- /#elsewhere -->

<?php foot(); ?>
