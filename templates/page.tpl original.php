<!DOCTYPE html>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">  	
			
<body id="home" class="html-ltr sand">
    <div class="container-fluid">
	<div class="row-fluid" >
	<!--- side title and slogan -->	
		<div class="span12">
			
			<div class= "span9" id="tittle">
				<?php if ($site_name || $site_slogan): ?>
				<div id="name-and-slogan">
				<?php if ($site_name): ?>
				<?php if ($title): ?>
				<div id="site-name">
					<a id="site-name-node" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><?php print $site_name; ?></a>
				</div>
				<?php else: /* Use h1 when the content title is empty */ ?>
				<h1 id="site-name">
				<?php print $site_name; ?>
				</h1>
				<?php endif; ?>
				<?php endif; ?>

				<?php if ($site_slogan): ?>
				<div id="site-slogan">
				<h2><?php print $site_slogan; ?></h2>
				</div>
				<?php endif; ?>

				</div> <!-- /#name-and-slogan -->
				<?php endif; ?>
			</div>
				<!---end side title and slogan -->
			<a id="tabzilla" href="http://www.mozilla.org/"><div ID="top_mozilla" class="span2"></div></a>	
				
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
	
      </div>
    <?php endif; ?>
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
						<!-- login Menu -->
					<div id="login_menu">
						<ul> <h3> Meta</h3>				
							<?php if ($user->uid == 0) : ?>
							<li><a href="<?php print $front_page; ?>user/register">register</a></li>
							<li><a href="<?php print $front_page; ?>user/login">Login</a></li>
							<li><a href="<?php print $front_page; ?>user/password">Forgotyour password</a></li>
							<?php else: ?>
										
							<li><a href="<?php print $front_page; ?>user/logout">Logout</a></li>
							<?php endif; ?>	
							<?php print render($page['Home_login']); ?>
						</ul>
					</div> 
					</div>
				</div>
		


		
	</div>


            <footer id="colophon" class="">
                <div class="row">

                    <div class="footer-logo">
                        <a href="/"><img src="../img/sandstone/footer-mozilla.png" alt="mozilla"> <span class="footer-logo-india">India</span></a>
                        <p>Have feedback? <a href="https://github.com/MozillaIndia/homepage/issues">File a bug</a>.
                    </div>

                    <div class="footer-license">
                        <p>
                        </p>
                    </div>
                    <ul class="footer-nav">
                        <li><a href="http://www.mozilla.org/about/">About</a></li>
                        <li><a href="http://www.mozilla.org/mission/">Mission</a></li>
                        <li><a href="http://blog.mozillaindia.org">Blog</a></li>
                        <li><a href="http://devs.mozillaindia.org/leaderboard">Leaderboard</a></li>
                    </ul>
                    <ul class="footer-nav">
                        <li><a href="http://twitter.com/MozillaIN">Twitter</a></li>
                        <li><a href="http://www.facebook.com/mozillaindia">Facebook</a></li>
                        <li><a href="http://flickr.com/photos/mozillaindia/">Flickr</a></li>
                        <li><a href="http://youtube.com/user/MozillaIndia">Youtube</a></li>
                        <li><a href="https://plus.google.com/103052563100386898416" rel="publisher">Google+</a></li> 
                    </ul>

                </div>
            </footer>
        </div>
</body>
<!--<script src="//www.mozilla.org/tabzilla/media/js/tabzilla.js"></script>_->
------------------------------
                <?php if ($main_menu): ?>
                  <nav id="nav-main" role="navigation">
                    <span class="toggle" role="button" aria-controls="nav-main-menu" tabindex="0">Menu</span>
                    
                      
                    <?php print theme('links__system_main_menu', array(
                          'links' => $main_menu,
                          'attributes' => array(
                            'id' => 'nav-main-menu'
                          )
                        )); ?>
                  </nav>                
                <?php endif; ?>