  <div id="page-wrapper">
  <div id="page" class="container">

    <div id="header" class="row">
      <div class="col-md-12 clearfix">
        <?php print render($page['header']); ?>
        <?php print render($page['navigation']); ?>
      </div>
    </div> 

    <?php if ($breadcrumb): ?>
      <div id="breadcrumb" class="row"><?php print $breadcrumb; ?></div>
    <?php endif; ?>

    <?php print $messages; ?>

    <div id="main-wrapper" class="row">
      <div id="main" class="clearfix">

        <?php if ($page['left']): ?>
          <div id="sidebar-left" class="sidebar col-md-3">
            <div>
              <?php print render($page['left']); ?>
            </div>
          </div>
        <?php endif; ?>

        <div id="content" class="col-md-6">
          <?php print render($title_prefix); ?>
          <?php if ($title && !$is_front): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
          <?php print render($title_suffix); ?>

          <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>

          <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>

          <?php print render($page['content']); ?>
        </div>


        <?php if ($page['right']): ?>
          <div id="sidebar-right" class="sidebar col-md-3">
            <?php print render($page['right']); ?>
          </div>
        <?php endif; ?>

      </div>
    </div>

    <div id="marketing" class="row">
      <?php print render($page['marketing']); ?>
    </div>

    <div id="footer" class="row">
      <?php print render($page['footer']); ?>
    </div>

  </div></div> 
