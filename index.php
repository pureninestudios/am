<?php include('header.php'); ?>

    <div class="l-container">

        <div class="am-partner u-text-center">

            <a href="#"><img src="assets/img/dev/am-partner.jpg" alt="" style="display: inline-block" /></a>

        </div><!--/.am-partner-->

        <div class="music-feed">

            <h2 class="music-feed__title">Trending Music</h2>

            <ul class="music-feed__filter u-inline-list u-group">

                <li class="music-feed__filter--active">
                    <a href="#">All Genres</a>
                </li>

                <li>
                    <a href="#">Hip Hop</a>
                </li>

                <li>
                    <a href="#">Electronic</a>
                </li>

                <li>
                    <a href="#">Reggae</a>
                </li>

                <li>
                    <a href="#">Podcasts</a>
                </li>

            </ul><!--/.music-feed__filter-->

            <?php include('modules/module-music-detail.php'); ?>

            <?php include('modules/module-music-detail.php'); ?>

            <?php include('modules/module-featured-blocks.php'); ?>

            <?php include('modules/module-music-detail.php'); ?>

            <?php include('modules/module-music-detail.php'); ?>

        </div><!--/.music-feed-->

    </div><!--/.l-container-->

<?php include('footer.php'); ?>
