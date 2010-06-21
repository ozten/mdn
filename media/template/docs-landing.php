<?php include "./inc/template.php"; 
head(
  $title = 'Docs | Mozilla Developer Network',
  $pageid = 'docs', 
  $bodyclass = 'section-docs',
  $headerclass = ''
); ?>
<section id="content">
<div class="wrap sidebar">
  <section id="content-main" role="main">
    <form id="doc-search" method="get" action="#">
      <p>
        <input type="text" id="q-docs" name="q-docs" placeholder="Search MDN Documentation"> 
        <select id="doc-filter" name="filter">
          <option value="" selected="selected" disabled="disabled">Filter by tag&hellip;</option>
          <option>Option</option>
          <option>Option</option>
        </select>
        <button type="submit">Search</button>
      </p>
    </form>
  
    <section class="section-intro boxed">
      <header class="head">
        <img src="/img/icn-web-med.png" alt="" width="58" height="58" />
        <h2>Popular Topics for <span class="web">Web</span> Developers</h2>
        <p>List of main documentation topics for web developers summary goes here.</p>
      </header>
      <ul id="doc-topics">
        <li>
          <h3><a href="#"><img src="/img/fpo55.png" alt="fpo55" width="55" height="55" /> HTML</a></h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </li>
        <li>
          <h3><a href="#"><img src="/img/fpo55.png" alt="fpo55" width="55" height="55" /> HTML5</a></h3>
          <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </li>
        <li>
          <h3><a href="#"><img src="/img/fpo55.png" alt="fpo55" width="55" height="55" /> JavaScript</a></h3>
          <p>Duis aute irure.</p>
        </li>
        <li>
          <h3><a href="#"><img src="/img/fpo55.png" alt="fpo55" width="55" height="55" /> CSS</a></h3>
          <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </li>
        <li>
          <h3><a href="#"><img src="/img/fpo55.png" alt="fpo55" width="55" height="55" /> DOM</a></h3>
          <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </li>
        <li>
          <h3><a href="#"><img src="/img/fpo55.png" alt="fpo55" width="55" height="55" /> Ajax</a></h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </li>
      </ul>
      
      <header class="subhead">
        <h2>Technology Glossary for <span class="web">Web</span> Developers</h2>
        <p>A comprehensive list of terms to assist web developers copy goes here.</p>
      </header>
      <ul id="glossary">
        <li>
          <h3><a href="#">Occaecat cupidatat non proident</a></h3>
          <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <ul>
            <li><a href="#">Ullamco laboris nisi</a></li>
            <li><a href="#">Sed do eiusmod tempor elit</a></li>
            <li><a href="#">Consectetur adipisicing elit.</a></li>
            <li><a href="#">Labore et dolore</a></li>
            <li><a href="#">Minim veniam</a></li>
            <li><a href="#">Eiusmod tempor incididunt</a></li>
            <li><a href="#">Dolor sit amet</a></li>
            <li><a href="#">Aliquip ex ea commodo consequat</a></li>
            <li><a href="#">Tempor incididunt</a></li>
          </ul>
        </li>
        <li>
          <h3><a href="#">Culpa qui officia deserunt mollit anim</a></h3>
          <p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea <a href="#">commodo consequat</a>.</p>
        </li>
        <li>
          <h3><a href="#">Occaecat cupidatat non proident</a></h3>
          <p>Lorem ipsum dolor sit amet, consectetur <a href="#">adipisicing elit</a>, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </li>
        <li>
          <h3><a href="#">Occaecat cupidatat non proident</a></h3>
          <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.</p>
          <ul>
            <li><a href="#">Aliquip ex ea commodo consequat</a></li>
            <li><a href="#">Tempor incididunt</a></li>
            <li><a href="#">Ullamco laboris nisi</a></li>
            <li><a href="#">Sed do eiusmod tempor elit</a></li>
            <li><a href="#">Consectetur adipisicing elit.</a></li>
            <li><a href="#">Eiusmod tempor incididunt</a></li>
            <li><a href="#">Dolor sit amet</a></li>
            <li><a href="#">Labore et dolore</a></li>
          </ul>
        </li>
      </ul>
    </section><!-- /.section-intro -->
    
    <section id="other-sections">
      <header>
        <h3>Get involved in the <a href="#" class="mobile">Mobile</a>, <a href="#" class="addons">Add-ons</a> &amp; <a href="#" class="apps">Applications</a> Developer Communities:</h3>
        <p>Leads to the different section dashboards summary goes here</p>
      </header>
      <div class="boxed">
        <div class="section">
          <h4><a href="#" class="mobile"><img src="/img/icn-mobile-sm.png" alt="" width="44" height="44" /> Mobile</a></h4>
          <ul>
            <li><a href="#">Firefox Mobile for developers</a></li>
            <li><a href="#">Detecting device orientation</a></li>
            <li><a href="#">Using geolocation</a></li>
          </ul>
          <p class="lead">Quick Links to <a href="#">Mobile</a> Dashboard Content.</p>
        </div>
        <div class="section">
          <h4><a href="#" class="addons"><img src="/img/icn-addons-sm.png" alt="" width="44" height="44" /> Add-ons</a></h4>
          <ul>
            <li><a href="#">AMO Developer Hub</a></li>
            <li><a href="#">Extensions</a></li>
            <li><a href="#">Plugins</a></li>
            <li><a href="#">Jetpack</a></li>
            <li><a href="#">Themes</a></li>
            <li><a href="#">Search engine plugins</a></li>
          </ul>
          <p class="lead">Quick Links to <a href="#">Add-ons</a> Dashboard Content.</p>
        </div>
        <div class="section">
          <h4><a href="#" class="apps"><img src="/img/icn-apps-sm.png" alt="" width="44" height="44" /> Applications</a></h4>
          <ul>
            <li><a href="#">Participating in the Mozilla project</a></li>
            <li><a href="#">Using Mozilla code in other projects</a></li>
            <li><a href="#">Localization</a></li>
            <li><a href="#">Quality Assurance</a></li> 
          </ul>
          <p class="lead">Quick Links to <a href="#">Applications</a> Dashboard Content.</p>
        </div>
      </div>
    </section>
  </section><!-- /#content-main -->
  
  <aside id="content-sub" role="complementary">

    <div class="module" id="top-contribs">
      <h3 class="mod-title">Top Docs Contributors</h3>
      <ol class="gallery">
        <li><a href="#" title="Leia Organa"><img src="/img/fpo55.png" alt="Leia Organa" width="32" height="32" /></a></li>
        <li><a href="#" title="Han Solo"><img src="/img/fpo55.png" alt="Han Solo" width="32" height="32" /></a></li>
        <li><a href="#" title="Obi-Wan Kenobi"><img src="/img/fpo55.png" alt="Obi-Wan Kenobi" width="32" height="32" /></a></li>
        <li><a href="#" title="Lando Calrissian"><img src="/img/fpo55.png" alt="Lando Calrissian" width="32" height="32" /></a></li>
        <li><a href="#" title="Boba Fett"><img src="/img/fpo55.png" alt="Boba Fett" width="32" height="32" /></a></li>
        <li><a href="#" title="Darth Vader"><img src="/img/fpo55.png" alt="Darth Vader" width="32" height="32" /></a></li>
        <li><a href="#" title="Luke Skywalker"><img src="/img/fpo55.png" alt="Luke Skywalker" width="32" height="32" /></a></li>
        <li><a href="#" title="Yoda"><img src="/img/fpo55.png" alt="Yoda" width="32" height="32" /></a></li>
      </ol>
    </div>
    
    <div class="module hot" id="most-active">
      <h3 class="mod-title">Most Active Docs</h3>
      <ul class="hfeed">
        <li class="hentry">
          <h5 class="category"><a href="#" rel="tag" class="apps">Applications</a></h5>
          <h4 class="entry-title"><a href="#">Lorem ipsum dolor sit amet</a></h4>
          <p class="entry-summary">Nam dui mi, tincidunt quis, accumsan porttitor&hellip;</p>
          <p class="entry-meta">Created by: <cite class="author vcard"><a href="#" class="url fn">Jay Patel</a></cite></p>
          <p class="entry-meta">Filed under: <a href="#" rel="tag">Firefox</a>, <a href="#" rel="tag">Thunderbird</a>, <a href="#" rel="tag">Seamonkey</a></p>
        </li>
        <li class="hentry">
          <h5 class="category"><a href="#" rel="tag" class="addons">Add-ons</a></h5>
          <h4 class="entry-title"><a href="#">Fusce pellentesque suscipit nibh</a></h4>
          <p class="entry-summary">Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore tincidunt&hellip;</p>
          <p class="entry-meta">Modified by: <cite class="author vcard"><a href="#" class="url fn">Morgamic</a></cite></p>
          <p class="entry-meta">Filed under: <a href="#" rel="tag">Operator</a>, <a href="#" rel="tag">microformats</a></p>
        </li>
      </ul>
    </div>
    
    <div class="module hfeed" id="doc-of-the-day">
      <h3 class="mod-title">Doc Of The Day</h3>
      <div class="hentry">
        <h5 class="category"><a href="#" rel="tag" class="apps">Applications</a></h5>
        <h4 class="entry-title"><a href="#">Lorem ipsum dolor sit amet</a></h4>
        <p class="entry-summary">Nam dui mi, tincidunt quis, accumsan porttitor&hellip;</p>
        <p class="entry-meta">Modified by: <cite class="author vcard"><a href="#" class="url fn">Jay Patel</a></cite> on <abbr class="updated" title="2010-06-07">Monday, June 7, 2010</abbr></p>
        <p class="entry-meta">Filed under: <a href="#" rel="tag">Firefox</a>, <a href="#" rel="tag">Thunderbird</a>, <a href="#" rel="tag">Seamonkey</a></p>
      </div>
    </div>
    
    <div class="module" id="tools">
      <h3 class="mod-title">Tools</h3>
      <p class="mod-intro">Handcrafted by the community. These tools are tailor-made to assist developers everyday.</p>
      <ul>
        <li class="item">
          <h5 class="category"><a href="#" class="addons">Add-ons</a></h5>
          <h4><a href="#"><img src="/img/icn-tool-firebug.png" alt="" width="32" height="32" /> Firebug 1.5.3</a></h4>
          <p class="meta">Created by: <a href="#">Joe Hewitt</a>, <a href="#">johnjbarton</a>, <a href="#">robcee</a>, <a href="#">FirebugWorkingGroup</a></p>
        </li>
        <li class="item">
          <h5 class="category"><a href="#" class="addons">Add-ons</a></h5>
          <h4><a href="#"><img src="/img/icn-tool-devtoolbar.png" alt="" width="32" height="32" /> Web Developer 1.1.8</a></h4>
          <p class="meta">Created by: <a href="#">chrispederick</a></p>
        </li>
      </ul>
    </div>
    
    <div class="module" id="support">
      <h3 class="mod-title">Community Support</h3>
      <ul>
        <li><a href="#" class="support-forums">Developer Forums</a></li>
        <li><a href="#" class="support-tech">Technical Support</a></li>
        <li><a href="#" class="support-news">Support via a Newsreader</a></li>
        <li><a href="#" class="support-groups">Support via Google Groups</a></li>
      </ul>
    </div>

  </aside><!-- /#content-sub -->

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
</section>

<?php foot(); ?>
