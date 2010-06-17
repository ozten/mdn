<?php include "./inc/template.php"; 
head(
  $title = 'Generic Content | Mozilla Developer Network',
  $pageid = '', 
  $bodyclass = '',
  $headerclass = ''
); ?>
<section id="content" class="sidebar">
<div class="wrap">

  <section id="content-main" role="main">
    <h1 class="page-title">Lorem ipsum dolor sit amet</h1>
    <p>Lorem ipsum dolor sit amet, <em>consectetur adipisicing</em> elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <ul>
      <li><a href="unvisited">Unvisited Link</a></li>
      <li><a href="http://google.com">Visited Link</a>
        <ul>
          <li>Nested list</li>
          <li>Nested list</li>
        </ul>
      </li>
      <li>Third item</li>
    </ul>
    <h2>Second Level Heading</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <ol>
      <li>Ordered list</li>
      <li>Second item
        <ol>
          <li>Nested list</li>
          <li>Nested list</li>
        </ol>
      </li>
      <li>Third item</li>
    </ol>
    <h3>Third Level Heading</h3>
    <blockquote>
      <p>Block quotation dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </blockquote>
    <h4>Fourth Level Heading</h4>
    <dl>
      <dt>Definition Term</dt>
      <dd>Definition data sit amet labore et dolore magna aliqua.</dd>
    </dl>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </section>
  
  <aside id="content-sub" role="complementary">
    <p>Sidebar</p>
  </aside>

</div>
</section>
<?php foot(); ?>
