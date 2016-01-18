<?php /* Template Name: Custom Posts Page */ ?>

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
            a.gallery-cate-item-wrapper {
                cursor: pointer;
            }
            /*.fancybox-wrap {
                width: 100% !important;
                left: 0 !important;
            }*/
            .entry-title a:hover {
                color: #ee5a35 !important;
            }
            .post-thumbnail img {
                height: 200px;
                width: auto;
            }
            /*article.post {
                border-bottom: 2px solid #dcdcdc;
                margin: 0 0 40px 0;
                padding: 0 0 20px 0;
            }*/
        </style>
        <div class="inner-wrap">
        <?php
            $cate = $_GET['cat'];
            // var_dump($cate);
            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
            $args = array(
                        'post_type' => 'post',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'category',
                                'field'    => 'slug',
                                'terms'    => array( $cate ),
                                'operator' => 'IN',
                            )
                        ),
                        'orderby'        => 'id',
                        'order'          => 'DESC',
                        'posts_per_page' => 5,
                        'paged'          => $paged
                    );
            $queryPosts = new WP_Query( $args );
            if ($queryPosts->have_posts()) { 
                while ($queryPosts->have_posts()) {
                    $queryPosts->the_post();
                    ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                        <header class="entry-header">
                            <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
                        </header><!-- .entry-header -->

                        <?php theme_post_thumbnail(); ?>

                        <div class="entry-content">
                            <?php
                                /* translators: %s: Name of current post */
                                the_content();
                            ?>
                        </div><!-- .entry-content -->

                    </article>
                    <?
                }
            } else {
                echo "Thông tin bài viết đang được cập nhật";
            }
        ?>
        <?php
        if (function_exists("pagination")) {
            pagination($queryPosts->max_num_pages);
        }
        ?>
        
    <?php do_action( 'spacious_after_body_content' ); ?>
        </div>
<?php get_footer(); ?>