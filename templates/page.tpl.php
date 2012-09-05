<?php

/**
 * @file
 * Mozilla's theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template normally located in the
 * modules/system directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/Mozilla.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 * - $hide_site_name: TRUE if the site name has been toggled off on the theme
 *   settings page. If hidden, the "element-invisible" class is added to make
 *   the site name visually hidden, but still accessible.
 * - $hide_site_slogan: TRUE if the site slogan has been toggled off on the
 *   theme settings page. If hidden, the "element-invisible" class is added to
 *   make the site slogan visually hidden, but still accessible.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['header']: Items for the header region.
 * - $page['featured']: Items for the featured region.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['content']: The main content of the current page.
 * - $page['right_sidebar']: Items for the right sidebar.
 * - $page['triptych_middle']: Items for the middle triptych.
 * - $page['triptych_last']: Items for the last triptych.
 * - $page['footer_firstcolumn']: Items for the first footer column.
 * - $page['footer_secondcolumn']: Items for the second footer column.
 * - $page['footer_thirdcolumn']: Items for the third footer column.
 * - $page['footer_fourthcolumn']: Items for the fourth footer column.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see Mozilla_process_page()
 * @see html.tpl.php
 */
?>
<!DOCTYPE html>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">  
	<!-- Using CSS and JS from Twitter Bootstrap !-->
	<link href="assets/css/bootstrap.css" rel="stylesheet">	
	<link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
	<link rel="shortcut icon" href="assets/ico/favicon.ico">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">	
	<!-- Own CSS,you can edit your gamil photo here -->
		
<body>		
	<div class="row-fluid" >
	<!--- side title and slogan -->	
		<div class="span12">		
			<div class= "span10" id="tittle">
				<?php if ($site_name || $site_slogan): ?>
				<div id="name-and-slogan"<?php if ($hide_site_name && $hide_site_slogan) { print ' class="element-invisible"'; } ?>>
				<?php if ($site_name): ?>
				<?php if ($title): ?>
				<div id="site-name"<?php if ($hide_site_name) { print ' class="element-invisible"'; } ?>>
				<strong>
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
				</strong>
				</div>
				<?php else: /* Use h1 when the content title is empty */ ?>
				<h1 id="site-name"<?php if ($hide_site_name) { print ' class="element-invisible"'; } ?>>
				<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
				</h1>
				<?php endif; ?>
				<?php endif; ?>

				<?php if ($site_slogan): ?>
				<div id="site-slogan"<?php if ($hide_site_slogan) { print ' class="element-invisible"'; } ?>>
				<?php print $site_slogan; ?>
				</div>
				<?php endif; ?>

      </div> <!-- /#name-and-slogan -->
    <?php endif; ?>
				</div>
				<!---end side title and slogan -->
				<div class="span2" id="top_mozilla"><a id="tabzilla" href="http://www.mozilla.org/">Mozilla</a></div>
		</div>
	 <?php if ($main_menu): ?>
      <div id="main_menu" class="span12">
        <?php print theme('links__system_main_menu', array(
          'links' => $main_menu,
          'attributes' => array(
            'id' => 'main-menu-links',
            'class' => array('links', 'clearfix'),
          ),
          'heading' => array(
            'text' => t('Main menu'),
            'level' => 'h2',
            'class' => array('element-invisible'),
          ),
        )); ?>
	<?php endif; ?>
      </div>
				<div class="row-fluid">
					<div class="span8" id="content">
						<?php print render($title_prefix); ?>
						<?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
						<?php print render($title_suffix); ?>
						<?php if (!empty($tabs['#primary'])): ?><div class="tabs-wrapper"><?php print render($tabs); ?></div><?php endif; ?>
						<?php print render($page['help']); ?>
						<?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
						<?php print render($page['content']); ?>
					</div>
					<div class="span4" id="right_sidebar">
						 <?php print render($page['right_sidebar']);  ?>
					</div>
				</div>
		


		
	</div>
</body>
<footer class="row-fluid">
	<div class="span12">
		<div class="span3" id="footer-wrap">
			<p id="foot-logo">
				<a class="logo" href="http://mozilla.org" rel="external">Mozilla</a>
			</p>
		</div>
		<div class="span4">
			<p id="colophon">
				Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
			</p>
		</div>
		<div class="span4">
			<nav id="nav-meta">
			  <ul role="navigation">
				<li><a href="http://www.mozilla.org/contact/" rel="external">Contact Us</a></li>
				<li><a href="http://www.mozilla.org/en-US/privacy" rel="external">Privacy Policy</a></li>
				<li><a href="http://www.mozilla.org/about/legal.html" rel="external">Legal Notices</a></li>
				<li><a href="http://www.mozilla.org/legal/fraud-report/index.html" rel="external">Report Trademark Abuse</a></li> 
			  </ul>
			</nav>
		</div>
	</div>

</footer>
<script src="//www.mozilla.org/tabzilla/media/js/tabzilla.js"></script>
