<?php /* Template Name: Gallery Page */ ?>

<?php get_header(); ?>

    <?php do_action( 'spacious_before_body_content' ); ?>
    <style type="text/css">
        #masthead {
            background-color: #fff;
        }
        #featured-slider {
            background-color: #f4f3f3;
        }
        #header-text-nav-container {
            position: relative;
        }
        .header-post-title-class {
            font-size: 25px;
            text-transform: uppercase;
        }
        #content {
            padding: 0 20px;
        }
        .entry-meta {
            display: none;
        }
        .share-area {
            height: 40px;
        }
        .fb-share-button {

        }
        /*.fb-share-button iframe {
            height: 40px !important;
            width: 100px !important;
        }
        .fb-share-button iframe div.pluginButton {
            height: 30px !important;
            width: 90px !important;
        }*/
        section#lien-he .section-header {
            margin: 0 0 20px 0;
        }
    </style>
    <!-- <div id="primary"> -->
        <!-- <div id="content" class="clearfix"> -->
            <?php while ( have_posts() ) : the_post(); ?>

                <?php //get_template_part( 'content', 'page' ); ?>

                <?php
                    $pageContent = get_the_content();
                    // $items = shortcode_atts(array('id'=>'no id', 'att'=>'XYZ'), do_shortcode($pageContent), 'print_gllr');
                    // var_dump($items);
                    
                ?>

                <div class="inner-wrap">
                    <div class="gallery-category">
                        <a href="#" class="gallery-cate-item-wrapper">
                            <div class="gallery-cate-item gallery-photo">HÌNH ẢNH</div>
                        </a>
                        <a href="#" class="gallery-cate-item-wrapper">
                            <div class="gallery-cate-item gallery-video">VIDEO</div>
                        </a>
                        <div class="clearfix"></div>
                    </div>
                    <div class="gallery-content">
                        <?php echo do_shortcode('[print_gllr id=72]'); ?>
                        <!-- <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><img class="gallery-photo-item" src="http://dummyimage.com/720x480/4f64ff/fff.png&text=Example-720*480" /></div>
                                <div class="swiper-slide"><img class="gallery-photo-item" src="http://dummyimage.com/720x480/4f64ff/fff.png&text=Example-720*480" /></div>
                                <div class="swiper-slide"><img class="gallery-photo-item" src="http://dummyimage.com/720x480/4f64ff/fff.png&text=Example-720*480" /></div>
                                <div class="swiper-slide"><img class="gallery-photo-item" src="http://dummyimage.com/720x480/4f64ff/fff.png&text=Example-720*480" /></div>
                                <div class="swiper-slide"><img class="gallery-photo-item" src="http://dummyimage.com/720x480/4f64ff/fff.png&text=Example-720*480" /></div>
                                <div class="swiper-slide"><img class="gallery-photo-item" src="http://dummyimage.com/720x480/4f64ff/fff.png&text=Example-720*480" /></div>
                                <div class="swiper-slide"><img class="gallery-photo-item" src="http://dummyimage.com/720x480/4f64ff/fff.png&text=Example-720*480" /></div>
                                <div class="swiper-slide"><img class="gallery-photo-item" src="http://dummyimage.com/720x480/4f64ff/fff.png&text=Example-720*480" /></div>
                                <div class="swiper-slide"><img class="gallery-photo-item" src="http://dummyimage.com/720x480/4f64ff/fff.png&text=Example-720*480" /></div>
                                <div class="swiper-slide"><img class="gallery-photo-item" src="http://dummyimage.com/720x480/4f64ff/fff.png&text=Example-720*480" /></div>
                                <div class="swiper-slide"><img class="gallery-photo-item" src="http://dummyimage.com/720x480/4f64ff/fff.png&text=Example-720*480" /></div>
                                <div class="swiper-slide"><img class="gallery-photo-item" src="http://dummyimage.com/720x480/4f64ff/fff.png&text=Example-720*480" /></div>
                                <div class="swiper-slide"><img class="gallery-photo-item" src="http://dummyimage.com/720x480/4f64ff/fff.png&text=Example-720*480" /></div>
                                <div class="swiper-slide"><img class="gallery-photo-item" src="http://dummyimage.com/720x480/4f64ff/fff.png&text=Example-720*480" /></div>
                                <div class="swiper-slide"><img class="gallery-photo-item" src="http://dummyimage.com/720x480/4f64ff/fff.png&text=Example-720*480" /></div>
                                <div class="swiper-slide"><img class="gallery-photo-item" src="http://dummyimage.com/720x480/4f64ff/fff.png&text=Example-720*480" /></div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div> -->
                    </div>
                </div>
                <style type="text/css">
                    .swiper-container {
                        width: 100%;
                        height: 460px;
                        margin-left: auto;
                        margin-right: auto;
                    }
                    .swiper-wrapper {
                        height: 400px;
                    }
                    .swiper-slide {
                        text-align: center;
                        font-size: 18px;
                        background: #fff;
                        height: 185px;
                        /* Center slide text vertically */
                        display: -webkit-box;
                        display: -ms-flexbox;
                        display: -webkit-flex;
                        display: flex;
                        -webkit-box-pack: center;
                        -ms-flex-pack: center;
                        -webkit-justify-content: center;
                        justify-content: center;
                        -webkit-box-align: center;
                        -ms-flex-align: center;
                        -webkit-align-items: center;
                        align-items: center;
                        /*border: 1px solid #504f4f;*/
                        box-sizing: border-box;
                        overflow: hidden;
                    }
                    </style>
                </style>
                <!-- Initialize Swiper -->
                <script>
                var swiper = new Swiper('.swiper-container', {
                    pagination: '.swiper-pagination',
                    slidesPerView: 4,
                    slidesPerColumn: 2,
                    paginationClickable: true,
                    spaceBetween: 20
                });
                </script>
                <?php
                    do_action( 'spacious_before_comments_template' );
                    // If comments are open or we have at least one comment, load up the comment template
                    // if ( comments_open() || '0' != get_comments_number() )
                    //  comments_template();                    
                do_action ( 'spacious_after_comments_template' );
                ?>

            <?php endwhile; ?>

        <!-- </div> --><!-- #content -->
    <!-- </div> --><!-- #primary -->
    
    <?php spacious_sidebar_select(); ?>

    <?php do_action( 'spacious_after_body_content' ); ?>

<?php get_footer(); ?>