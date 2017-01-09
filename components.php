<?php include('header.php'); ?>

    <style type="text/css">
        .comp {
            padding: 30px 0;
        }
        .small {
            font-size: 12px;
            font-weight: 600;
            margin-bottom: 10px;
        }
        .music-artwork {
            float: left;
        }
    </style>

    <div class="l-container">

        <div class="comp">

            <p class="small">Music Interactions</p>

            <div class="music-interactions music-interactions--inline">

                <span class="music-interaction music-interaction--play js-title" data-original-title="Play"><i class="glyphicons play"></i></span>

                <span class="music-interaction music-interaction--fav js-title" data-original-title="Favorite"><i class="glyphicons star"></i></span>

                <span class="music-interaction music-interaction--reup js-title" data-original-title="Re-Up"><i class="glyphicons retweet"></i></span>

                <span class="music-interaction music-interaction--playlist js-title" data-original-title="Add to Playlist"><i class="glyphicons plus"></i></span>

                <span class="music-interaction music-interaction--embed js-title" data-original-title="Embed"><i class="glyphicons embed-close"></i></span>

                <span class="music-interaction music-interaction--twitter js-title" data-original-title="Share on Twitter"><i class="fa fa-twitter"></i></span>

                <span class="music-interaction music-interaction--facebook js-title" data-original-title="Share on Facebook"><i class="fa fa-facebook"></i></span>

            </div><!--/.music-interactions-->

        </div><!--/.comp-->

        <div class="comp">

            <p class="small">Interaction Stats</p>

            <ul class="interaction-stats interaction-stats--inline">

                <li>
                    <i class="glyphicons play"></i> (999k)
                </li>

                <li>
                    <i class="glyphicons star"></i> (2857)
                </li>

                <li>
                    <i class="glyphicons retweet"></i> (38)
                </li>

                <li>
                    <i class="glyphicons plus"></i> (38)
                </li>

            </ul><!--/.music__detail-stats-->

        </div>

        <div class="comp">

            <p class="small">Ranking Stats</p>

            <ul class="ranking-stats ranking-stats--vertical">

                <li class="ranking-stat">
                    <span class="ranking-stat__range">Today</span>
                    <sup>#</sup>24
                </li>

                <li class="ranking-stat">
                    <span class="ranking-stat__range">This Week</span>
                    <sup>#</sup>395
                </li>

                <li class="ranking-stat">
                    <span class="ranking-stat__range">This Month</span>
                    <sup>#</sup>399
                </li>

                <li class="ranking-stat">
                    <span class="ranking-stat__range">All Time</span>
                    <sup>#</sup>2905
                </li>

            </ul>

        </div>

        <div class="comp u-group">

            <p class="small">Music Artwork</p>

            <div class="music-artwork">

                <img src="assets/img/dev/music-artwork.jpg" alt="" />

                <div class="music-artwork__overlay u-text-center">

                    <i class="glyphicons play"></i>

                </div><!--/.music-artwork__overlay-->

            </div>

            <div class="music-artwork music-artwork--large">

                <img src="assets/img/dev/music-artwork.jpg" alt="" />

                <div class="music-artwork__overlay u-text-center">

                    <i class="glyphicons play"></i>

                </div><!--/.music-artwork__overlay-->

            </div>

            <div class="music-artwork music-artwork--large music-artwork--round">

                <img src="assets/img/dev/music-artwork.jpg" alt="" />

            </div>

        </div>

        <div class="comp">

            <p class="small">Titles</p>

            

        </div>

    </div><!--/.l-container-->

<?php include('footer.php'); ?>
