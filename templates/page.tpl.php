<!DOCTYPE html>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="sidbhatt11">
    <link href="http://mozorg.cdn.mozilla.net/media/css/tabzilla-min.css" rel="stylesheet" />
    <script src="http://mozorg.cdn.mozilla.net/tabzilla/tabzilla.js"></script>


<body>
        
    <div id="outer-wrapper">
            <div id="wrapper">

                <header id="masthead">
                <a href="" id="tabzilla">mozilla</a>
                <?php print render($page['header']);  ?>
                    

                </header>

                <hgroup id="main-feature" class="huge">
                    <?php if ($logo): ?>
                      <a href="<?php print $front_page; ?>"><img id="sitelogo" src="<?php print $logo; ?>" alt="LOGO"></a>
                    <?php endif; ?>
                    <?php print $site_name; ?>
                        <br>
				
                <?php 
            if($site_slogan)
            {?>
                    <center><h3><?php print $site_slogan;?></h3></center>
            <?}
                ?>
                    
                </hgroup>
                <div>
                <?php print render($page['left_sidebar']);  ?>
                </div>
                
                <?php print render($page['content']); ?>
                
                <div>
                <?php print render($page['right_sidebar']);  ?>
                </div>


            <footer id="colophon" class="">
                <div class="row">

                    <div class="footer-logo">
                        <a href="/"><img src="http://mozorg.cdn.mozilla.net/media/img/sandstone/footer-mozilla.png" style="max-width:100px;" alt="mozilla"></a>
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
        </div>
</body>
<script>$("#nav-main .toggle").on("click", function () { $("#nav-main-menu").toggle() })</script>