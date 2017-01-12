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

        .detailed-dropdown {
            max-width: 420px;
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

            <p class="small">Detailed Dropdown</p>

            <div class="detailed-dropdown detailed-dropdown--has-triangle">

                <div class="detailed-dropdown__inner">

                    <ul class="detailed-dropdown__list">

                        <h3 class="detailed-dropdown__title">Artists</h3>

                        <li class="detailed-dropdown__item detailed-dropdown__item--has-thumb u-clearfix">

                            <div class="detailed-dropdown__item-thumb detailed-dropdown__item-thumb--circle">

                                <img src="http://placehold.it/65x65" alt="" />

                            </div><!--/.detailed-dropdown__item-thumb-->

                            <div class="detailed-dropdown__item-content">

                                <h2 class="music-heading music-heading__artist"><strong>Chief Keef</strong></h2>

                                <ul class="music-meta">

                                    <li class="music-meta__item">Followers: <strong>1,395</strong></li>

                                    <li class="music-meta__item">Uploads &amp; Re-Ups: <strong>294</strong></li>

                                </ul>

                            </div><!--/.detailed-dropdown__item-content-->

                        </li><!--/.detailed-dropdown__item-->

                    </ul><!--/.detailed-dropdown__list-->

                    <ul class="detailed-dropdown__list">

                        <h3 class="detailed-dropdown__title">Songs</h3>

                        <li class="detailed-dropdown__item detailed-dropdown__item--has-thumb u-clearfix">

                            <div class="detailed-dropdown__item-thumb detailed-dropdown__item-thumb--radius">

                                <img src="http://placehold.it/65x65" alt="" />

                            </div><!--/.detailed-dropdown__item-thumb-->

                            <div class="detailed-dropdown__item-content">

                                <h2 class="music-heading music-heading__artist">Meek Mill</h2>

                                <h2 class="music-heading music-heading__title"><strong>Ooouuu (The Game Diss)</strong></h2>

                                <p class="music-featuring">Feat. <a href="#">Meek Mill</a>, <a href="#">Another Meek Mill</a>, <a href="#">Third Meek Mill</a></p>

                            </div><!--/.detailed-dropdown__item-content-->

                        </li><!--/.detailed-dropdown__item-->

                        <li class="detailed-dropdown__item detailed-dropdown__item--has-thumb u-clearfix">

                            <div class="detailed-dropdown__item-thumb detailed-dropdown__item-thumb--radius">

                                <img src="http://placehold.it/65x65" alt="" />

                            </div><!--/.detailed-dropdown__item-thumb-->

                            <div class="detailed-dropdown__item-content">

                                <h2 class="music-heading music-heading__artist">Meek Mill</h2>

                                <h2 class="music-heading music-heading__title"><strong>Ooouuu (The Game Diss)</strong></h2>

                            </div><!--/.detailed-dropdown__item-content-->

                        </li><!--/.detailed-dropdown__item-->

                    </ul><!--/.detailed-dropdown__list-->

                    <ul class="detailed-dropdown__list">

                        <h3 class="detailed-dropdown__title">Albums</h3>

                        <li class="detailed-dropdown__item detailed-dropdown__item--has-thumb u-clearfix">

                            <div class="detailed-dropdown__item-thumb detailed-dropdown__item-thumb--radius">

                                <img src="http://placehold.it/65x65" alt="" />

                            </div><!--/.detailed-dropdown__item-thumb-->

                            <div class="detailed-dropdown__item-content">

                                <h2 class="music-heading music-heading__artist">Meek Mill</h2>

                                <h2 class="music-heading music-heading__title"><strong>Ooouuu (The Game Diss)</strong></h2>

                                <p class="music-featuring">Feat. <a href="#">Meek Mill</a>, <a href="#">Another Meek Mill</a></p>

                            </div><!--/.detailed-dropdown__item-content-->

                        </li><!--/.detailed-dropdown__item-->

                        <li class="detailed-dropdown__item detailed-dropdown__item--has-thumb u-clearfix">

                            <div class="detailed-dropdown__item-thumb detailed-dropdown__item-thumb--radius">

                                <img src="http://placehold.it/65x65" alt="" />

                            </div><!--/.detailed-dropdown__item-thumb-->

                            <div class="detailed-dropdown__item-content">

                                <h2 class="music-heading music-heading__artist">Meek Mill</h2>

                                <h2 class="music-heading music-heading__title"><strong>Ooouuu (The Game Diss)</strong></h2>

                            </div><!--/.detailed-dropdown__item-content-->

                        </li><!--/.detailed-dropdown__item-->

                    </ul><!--/.detailed-dropdown__list-->

                    <ul class="detailed-dropdown__list">

                        <h3 class="detailed-dropdown__title">Playtlists</h3>

                        <li class="detailed-dropdown__item detailed-dropdown__item--has-thumb u-clearfix">

                            <div class="detailed-dropdown__item-thumb detailed-dropdown__item-thumb--radius">

                                <img src="http://placehold.it/65x65" alt="" />

                            </div><!--/.detailed-dropdown__item-thumb-->

                            <div class="detailed-dropdown__item-content">

                                <h2 class="music-heading music-heading__artist"><strong>Meek Mill</strong></h2>

                                <ul class="music-meta">

                                    <li class="music-meta__iten">Updated: 17 hours ago</li>

                                </ul><!--/.music-meta-->

                            </div><!--/.detailed-dropdown__item-content-->

                        </li><!--/.detailed-dropdown__item-->

                    </ul><!--/.detailed-dropdown__list-->

                </div><!--/.detailed-dropdown__inner-->

            </div><!--/.detailed-dropdown-->

        </div>

    </div><!--/.l-container-->

<?php include('footer.php'); ?>
