<?php
// $Id: page.tpl.php,v 1.1.2.1 2009/02/24 15:34:45 dvessel Exp $
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>" xmlns:fb="http://www.facebook.com/2008/fbml" >

<head>
  <title><?php print $head_title; ?></title>
  <?php print $head; ?>
  <?php print $styles; ?>
  <?php print $scripts; ?>
</head>

<body class="<?php print $body_classes; ?>">
	<div id="site-header" class="clear-block">
		<div class="container-16">
    	<div id="branding" class="grid-10 clear-block">
	      <?php if ($linked_site_name): ?>
	        <h1 id="site-name"><?php print $linked_site_name; ?></h1>
	      <?php endif; ?>
	    </div>
    
		<?php if ($search_box): ?>
	      <?php $search = module_invoke('views', 'block', 'view', "-exp-search_results-page_1")?>
	      <div id="search-box" class="grid-6 "><?php print $search['content'];//$search_box; ?></div>
	    <?php endif; ?>
	   </div>
	</div>
  <div id="page" class="container-16 clear-block">
<!--
    <div id="site-subheader" class="prefix-1 suffix-1 clear-block">
    <?php if ($mission): ?>
      <div id="mission" class="<?php print ns('grid-14', $header, 7); ?>">
        <?php print $mission; ?>
      </div>
    <?php endif; ?>

    <?php if ($header): ?>
      <div id="header-region" class="region <?php print ns('grid-14', $mission, 7); ?> clear-block">
        <?php print $header; ?>
      </div>
    <?php endif; ?>
    </div>
-->

    <div id="main" class="column grid-10 push-3">
      <div id="main-inner">
				<?php print $breadcrumb; ?>
				<?php if ($mission): ?>
		      <div id="mission">
		        <?php print $mission; ?>
		      </div>
		    <?php endif; ?>
	      <?php if ($title): ?>
	        <h1 class="title" id="page-title"><?php print $title; ?></h1>
	      <?php endif; ?>
	      <?php if ($tabs): ?>
	        <div class="tabs"><?php print $tabs; ?></div>
	      <?php endif; ?>
	      <?php print $messages; ?>
	      <?php print $help; ?>
              <?php if (!empty($content_top)): ?>
                <div id="content-top" class="clear-block">
                  <?php print $content_top; ?>
                </div> <!-- /content-top -->
              <?php endif; ?>
	      <div id="main-content" class="region clear-block">
	        <?php print $content; ?>
	      </div>

	      <?php print $feed_icons; ?>
			</div>
    </div>

  <?php if ($left): ?>
    <div id="sidebar-left" class="column sidebar region grid-3 pull-10">
			<?php if ($linked_logo_img): ?>
        <span id="logo"><?php print $linked_logo_img; ?></span>
      <?php endif; ?>
      <?php print $left; ?>
    </div>
  <?php endif; ?>

  <?php if ($right): ?>
    <div id="sidebar-right" class="column sidebar region grid-3">
      <?php print $right; ?>
    </div>
  <?php endif; ?>

  <?php if (!empty($footer_top)): ?>
    <div id="footer-top-wrapper" class="clear-block">
      <div id="footer-top">
        <?php print $footer_top; ?>
      </div> <!-- /footer-top -->
    </div> <!-- /footer-top-wrapper -->
  <?php endif; ?>

  <div id="footer" class="prefix-1 suffix-1">
    <?php if ($footer): ?>
      <div id="footer-region" class="region grid-14 clear-block">
        <?php print $footer; ?>
      </div>
    <?php endif; ?>

    <?php if ($footer_message): ?>
      <div id="footer-message" class="grid-14">
        <?php print $footer_message; ?>
      </div>
    <?php endif; ?>
  </div>


  </div>
  <?php print $closure; ?>
</body>
</html>
