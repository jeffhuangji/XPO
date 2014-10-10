  <div id="page-wrapper">
    <?php print render($page['navigation']); ?>
    
    <div id="page">
    <div id="header" class="container">
      <div class="row clearfix">
        <div class="col-md-12 logo">
          <p><a href="/" title="Home"><img src="/sites/all/themes/xpo/images/logo.png" style="width:190px" /></a>
          <span class="site-slogan"><?php print $site_slogan; ?></span></p>
        </div>
        <?php print render($page['header']); ?>
      </div>
    </div> 


    <?php print $messages; ?>

    <div id="main-wrapper">
      <?php if ($breadcrumb): ?>
        <div id="breadcrumb" class="container"><?php print $breadcrumb; ?></div>
      <?php endif; ?>

      <div id="main" class="container clearfix">
        <?php if ($page['left']): ?>
          <div id="sidebar-left" class="sidebar col-md-2">
            <div>
              <?php print render($page['left']); ?>
            </div>
          </div>
        <?php endif; ?>

        <div id="content" class="col-md-8">
          <?php print render($title_prefix); ?>
          <?php if ($title && !$is_front): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
          <?php print render($title_suffix); ?>

          <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>

          <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>

          <?php print render($page['content']); ?>
        </div>


        <?php if ($page['right']): ?>
          <div id="sidebar-right" class="sidebar col-md-2">
            <?php print render($page['right']); ?>
          </div>
        <?php endif; ?>

      </div>
    </div>

    <div id="marketing" class="container">
      <?php print render($page['marketing']); ?>
    </div>

    <div id="footer" class="container">
      <?php print render($page['footer']); ?>
    </div>

  </div></div> 
