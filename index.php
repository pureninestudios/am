<?php include('header.php'); ?>

    <div class="l-container">

        <?php include('modules/module-partner.php'); ?>

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
