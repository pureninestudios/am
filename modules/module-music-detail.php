<div class="music__detail u-group">

    <div class="music-interactions music__detail-interactions">

        <span class="music-interaction music-interaction--play js-title" data-original-title="Play"><i class="glyphicons play"></i></span>

        <span class="music-interaction music-interaction--fav js-title" data-original-title="Favorite"><i class="glyphicons star"></i></span>

        <span class="music-interaction music-interaction--reup js-title" data-original-title="Re-Up"><i class="glyphicons retweet"></i></span>

        <span class="music-interaction music-interaction--playlist js-title" data-original-title="Add to Playlist"><i class="glyphicons plus"></i></span>

        <span class="music-interaction music-interaction--embed js-title" data-original-title="Embed"><i class="glyphicons embed-close"></i></span>

        <span class="music-interaction music-interaction--twitter js-title" data-original-title="Share on Twitter"><i class="fa fa-twitter"></i></span>

        <span class="music-interaction music-interaction--facebook js-title" data-original-title="Share on Facebook"><i class="fa fa-facebook"></i></span>

    </div><!--/.music-interactions-->

    <div class="music__detail-top">

        <div class="music__detail-image">

            <img src="assets/img/dev/music-artwork.jpg" alt="" />

            <div class="music__detail-overlay u-text-center">

                <i class="glyphicons play"></i>

            </div><!--/.music__detail-overlay-->

        </div><!--/.music__detail-image-->

        <div class="music__detail-content">

            <p class="music__detail-reup-label"><i class="glyphicons retweet"></i> Re-upped by Macli, Dave N.</p>

            <h2 class="music__detail-heading music__detail-heading--artist u-trunc">Hoodrich Pablo Juan</h2>

            <h3 class="music__detail-heading music__detail-heading--title u-trunc">I'll Be Damned</h3>

            <?php /*
            <p class="music__detail-featuring">Feat. <a href="#">Dave Edwards</a>, <a href="#">Migos</a>, <a href="#">Juan Uribe</a></p>
            */ ?>

            <ul class="music__detail-meta">

                <li class="u-trunc music__detail-meta--featuring">
                    <strong>Feat. <a href="#">Dave Edwards</a>, <a href="#">Migos</a>, <a href="#">Juan Uribe</a></strong>
                </li>

                <li class="u-trunc">
                    Producer: <a href="#">Stood Beats</a>
                </li>

                <li class="u-trunc">
                    Added on Jul 07, 2017 by <a href="#">VeronicaVega</a>
                </li>

                <?php /*
                <li class="u-trunc">
                    Genre: <a href="#">Electronic</a>
                </li>
                */ ?>

            </ul><!--/.music__detail-meta-->

            <ul class="music__detail-stats u-inline-list">

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

        </div><!--/.music__detail-content-->

    </div><!--/.music__detail-top-->

    <div class="music__detail-waveform-wrap waveform-wrap">

        <?php include('modules/module-example-waveform.php'); ?>

        <span class="waveform__elapsed waveform__time">1:12</span>

        <span class="waveform__duration waveform__time">4:29</span>

    </div><!--/.waveform-wrap-->

</div><!--/.music__detail-->
