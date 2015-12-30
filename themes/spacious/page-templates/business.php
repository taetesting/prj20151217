<?php
/**
 * Template Name: Business Template
 *
 * Displays the Business Template of the theme.
 *
 * @package ThemeGrill
 * @subpackage Spacious
 * @since Spacious 1.0
 */
?>

<?php get_header(); ?>
<div id="content" class="clearfix">
    <?php 
    if( is_active_sidebar( 'spacious_business_page_top_section_sidebar' ) ) {
        // Calling the business page top section sidebar if it exists.
        if ( !dynamic_sidebar( 'spacious_business_page_top_section_sidebar' ) ):
        endif;
    }

    if( is_active_sidebar( 'spacious_business_page_middle_section_left_half_sidebar' ) || is_active_sidebar( 'spacious_business_page_middle_section_right_half_sidebar' )) {
    ?>
    <!-- <div class="clearfix"> -->
        <div class="tg-one-half">
            <?php
            // Calling the business page middle section left half sidebar if it exists.
            if ( !dynamic_sidebar( 'spacious_business_page_middle_section_left_half_sidebar' ) ):
            endif;
            ?>
        </div>
        <div class="tg-one-half tg-one-half-last">
            <?php
            // Calling the business page middle section right half sidebar if it exists.
            if ( !dynamic_sidebar( 'spacious_business_page_middle_section_right_half_sidebar' ) ):
            endif;
            ?>
        </div>
    <div class="clearfix"></div>
    <?php
    }

    if( is_active_sidebar( 'spacious_business_page_bottom_section_sidebar' ) ) {
        // Calling the business page bottom section sidebar if it exists.
        if ( !dynamic_sidebar( 'spacious_business_page_bottom_section_sidebar' ) ):
        endif;
    }
    ?>
        <section id="gioi-thieu" class="section default">
            <div class="inner-wrap">
                <div class="section-header">
                    <h3>TRUNG TÂM ÂM NHẠC PHANXICO</h3>
                </div>
                <div class="about-first">
                    <div class="about-first-text">
                        
                            <?php
                                $pages = get_posts(
                                    array(
                                        'name'      => 'gioi-thieu',
                                        'post_type' => 'page'
                                    )
                                );
                                $existAbout = false;
                                if (count($pages)) {
                                    $aboutPage = $pages[0];
                                    if (!empty($aboutPage->post_content)) {
                                        echo '<span class="about-summary clearfix">';
                                        // echo $aboutPage->post_content;
                                        $aboutContent = wp_trim_words($aboutPage->post_content, 100, '...');
                                        // $aboutContent = preg_replace('/<img[^>]+./', '', $aboutPage->post_content);
                                        // $aboutContent = strip_tags(strip_shortcodes($aboutPage->post_content));
                                        echo $aboutContent;
                                        echo '</span>';
                                        echo '<a class="readmore" href="' . get_permalink($aboutPage->ID) . '">READ MORE</a>';
                                        $existAbout = true;
                                    }
                                }
                                if (!$existAbout) { ?>
                                    <p>Lời ngỏ!</p>
                                    <p>TRUNG TÂM ÂM NHẠC PHANXICO được thành lập từ tháng 3 / 2009. Với mục đích đưa âm nhạc đến gần hơn với mọi người, là nơi giải trí, thư giản gặp gỡ và dao lưu sau một ngày làm việc mệt nhọc. Cho tới nay Trung Tâm rất vinh dữ đã đào tạo được gần 2 ngàn học viên từ những em 5, 6 tuổi cho tới những học sinh, sinh viên, các dấng tung niên hay những cô chú lớn tuổi…. Đặc biệt TRUNG TÂM PHANXCO rất vui mừng khi mỗi năm TRUNG TÂM đã đào tạo khoảng 15 học viên thi đậu vào các trường âm nhac TP, cùng với những giải thưởng cấp Phường, Quận các các em học sinh. Đó là niềm hạnh phúc và là thành quả...</p>
                                <?php }
                            ?>
                        
                        <!-- <a class="readmore" href="#">READ MORE</a> -->
                            <!-- <img src="wp-content/themes/spacious/img/readmore.png" /> -->
                    </div>
                    <div class="about-first-video">
                        <!-- <div class="about-video-thumb"> -->
                            <a href="https://www.youtube.com/embed/4LZGip1L1js?autoplay=1" class="various fancybox.iframe"></a>
                            <iframe width="444" height="250" src="https://www.youtube.com/embed/4LZGip1L1js" frameborder="0" allowfullscreen></iframe>
                        <!-- </div> -->
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="about-second">
                    <div class="video-wrapper">
                        <!-- <div class="tg-one-third small-margin about-second-video"> -->
                        <div class="about-second-video">
                            <a href="https://www.youtube.com/embed/4LZGip1L1js?autoplay=1" class="video-link various fancybox.iframe">
                            </a>
                            <iframe width="380" height="214" src="https://www.youtube.com/embed/4LZGip1L1js" frameborder="0" allowfullscreen></iframe>
                        </div>
                        <div class="about-second-video">
                            <a href="https://www.youtube.com/embed/4LZGip1L1js?autoplay=1" class="video-link various fancybox.iframe">
                            </a>
                            <iframe width="380" height="214" src="https://www.youtube.com/embed/4LZGip1L1js" frameborder="0" allowfullscreen></iframe>
                        </div>
                        <div class="about-second-video">
                            <a href="https://www.youtube.com/embed/4LZGip1L1js?autoplay=1" class="video-link various fancybox.iframe">
                            </a>
                            <iframe width="380" height="214" src="https://www.youtube.com/embed/4LZGip1L1js" frameborder="0" allowfullscreen></iframe>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </section>
        <section id="chuong-trinh-hoc" class="section default">
            <div class="inner-wrap">
                <div class="section-header">
                    <h3>CHƯƠNG TRÌNH HỌC</h3>
                </div>
                <div class="course">
                    <div class="course-wrapper">
                    <?php
                        $args       = array('posts_per_page' => 6, 'orderby' => 'rand', 'category' => 3);
                        $courses    = get_posts($args);
                        $time       = 0;
                        $courseAttr = array(
                                array('right', 'right', 'left'),
                                array('left', 'left', 'right'),
                        );
                        $iAttr            = rand(0, 1);
                        $smallCourseItems = '';
                        foreach ($courses as $key => $course) {
                            $time++;
                            if ($time%2) {
                                $currAttr = $courseAttr[$iAttr];
                                $iAttr    = !$iAttr;
                            }
                            $coursePermalink = get_permalink($course->ID);
                            ?>
                            <a class="course-item" href="<?= $coursePermalink ?>">
                                <div class="course-item-content course-item-img course-item-<?= $currAttr[0] ?>">
                                    <?php
                                    if (has_post_thumbnail($course->ID)) {
                                        $courseImage = get_the_post_thumbnail($course->ID, 'full');
                                        echo $courseImage;
                                    } else {
                                        echo '<img src="/wp-content/themes/spacious/img/course-img-1.png" />';
                                    }
                                    // <img src="/wp-content/themes/spacious/img/course-img-1.png" />
                                    ?>
                                </div>
                                <div class="course-item-arrow course-item-arrow-<?= $currAttr[1] ?>"></div>
                                <div class="course-item-content course-item-txt course-item-<?= $currAttr[2] ?>">
                                    <div class="course-item-text">
                                        <?= $course->post_title; ?>
                                    </div>
                                </div>
                            </a>

                        <?php
                            $smallItemColor    = $time%2 ? 'orange' : 'grey';
                            $smallCourseItems .= "<a class=\"course-item-small bg-{$smallItemColor}\" href=\"{$coursePermalink}\">"
                                              . $courseImage
                                              . "<span>{$course->post_title}</span>"
                                              . '</a>';

                        }
                    ?>
                        <!-- <a class="course-item" href="#">
                            <div class="course-item-content course-item-img course-item-right">
                                <img src="/wp-content/themes/spacious/img/course-img-1.png" />
                            </div>
                            <div class="course-item-arrow course-item-arrow-orange"></div>
                            <div class="course-item-content course-item-txt course-item-left">
                                <div class="course-item-text">
                                    KHÓA THANH NHẠC CƠ BẢN
                                </div>
                            </div>
                        </a> -->
                        <!-- <a class="course-item" href="#">
                            <div class="course-item-content course-item-img course-item-left">
                                <img src="/wp-content/themes/spacious/img/course-img-1.png" />
                            </div>
                            <div class="course-item-arrow course-item-arrow-grey"></div>
                            <div class="course-item-content course-item-txt course-item-right">
                                <div class="course-item-text">
                                    GUITAR
                                </div>
                            </div>
                        </a> -->
                        <!-- <a class="course-item">
                            <div class="course-item-content course-item-img course-item-left">
                                <img src="/wp-content/themes/spacious/img/course-img-1.png" />
                            </div>
                            <div class="course-item-arrow course-item-arrow-grey"></div>
                            <div class="course-item-content course-item-txt course-item-right">
                                <div class="course-item-text">
                                    GUITAR
                                </div>
                            </div>
                        </a>
                        <a class="course-item">
                            <div class="course-item-content course-item-img course-item-right">
                                <img src="/wp-content/themes/spacious/img/course-img-1.png" />
                            </div>
                            <div class="course-item-arrow course-item-arrow-orange"></div>
                            <div class="course-item-content course-item-txt course-item-left">
                                <div class="course-item-text">
                                    THANH NHẠC
                                </div>
                            </div>
                        </a> -->
                        <div class="clearfix"></div>
                    </div>
                    <div class="course-wrapper-small">
                        <?=$smallCourseItems?>
                    </div>
                </div>
            </div>
        </section>
        <section id="tin-tuc-su-kien" class="section default">
            <div class="inner-wrap">
                <div class="section-header">
                    <h3>TIN TỨC & SỰ KIỆN</h3>
                </div>
                <div class="category-news">
                    <a href="#" class="category-news-item">SHEET NHẠC</a>
                    <a href="#" class="category-kt-item">KIẾN THỨC BỔ ÍCH</a>
                    <div class="clearfix"></div>
                </div>
                <?php
                    $args = array('numberposts' => '5', 'category' => 4, 'post_type' => 'post');
                    $recentPosts = wp_get_recent_posts($args, OBJECT);
                    $latestPost  = $recentPosts[0];
                    unset($recentPosts[0]);
                    $latestPostLink = get_permalink($latestPost->ID);
                ?>
                <div class="latest-news">
                    <a href="<?=$latestPostLink?>" class="latest-post-title"><h2><?= $latestPost->post_title ?></h2></a>
                    <div class="post-image">
                        <a href="<?=$latestPostLink?>">
                            <?php
                                if (has_post_thumbnail($latestPost->ID)) {
                                    echo get_the_post_thumbnail($latestPost->ID, 'full');
                                } else {
                                    echo '<img src="/wp-content/themes/spacious/img/course-img-2.png">';
                                }
                            ?>
                        </a>
                    </div>
                    <div class="post-summary">
                        <p>
                        <?php
                            $latestContent = wp_trim_words($latestPost->post_content, 100, '...'); 
                            if (!empty($latestContent)) {
                                echo $latestContent;
                            } else {
                                echo 'Nội dung đang được cập nhật...';
                            }
                        ?>
                        </p>
                        <!-- <p>Đàn ghi-ta (tiếng Pháp: guitare; tiếng Anh: guitar), còn được biết đến dưới cái tên Tây Ban cầm (西班琴), vốn xuất xứ là một nhạc cụ có cách đây hơn 5000 năm (loại ghi-ta cổ), sau này người Tây Ban Nha mới cải tiến nó thành đàn ghi-ta ngày nay. Đàn ghi-ta ngày nay có 6 dây, tuy nhiên vẫn tồn tại những loại đàn ghi-ta có 4, 7, 8, 10 và 12 dây.</p> -->
                        <a href="<?=$latestPostLink?>" class="readmore">READ MORE</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="post-more">
                    <div class="previous-post load-more-post-icon">
                        <a></a>
                    </div>
                    <div class="post-content">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <?php
                                foreach ($recentPosts as $post) {
                                    $postLink = get_permalink($post->ID);
                                    echo '<div class="swiper-slide post-item-swiper">';
                                    echo '<a href="' . $postLink . '">';
                                    if (has_post_thumbnail($post->ID)) {
                                        echo get_the_post_thumbnail($post->ID, 'full');
                                    } else {
                                        echo '<img src="' . get_template_directory_uri() . '/img/post-demo-01.jpg" alt="' . $post->post_title . '" />';
                                    }
                                    echo '</a>';
                                    echo '</div>';
                                }
                                ?>
                                <div class="swiper-slide post-item-swiper">
                                    <a href="#">
                                        <img src="<?= get_template_directory_uri() ?>/img/post-demo-01.jpg">
                                    </a>
                                </div>
                                <div class="swiper-slide post-item-swiper">
                                    <a href="#">
                                        <img src="<?= get_template_directory_uri() ?>/img/post-demo-02.jpg">
                                    </a>
                                </div>
                                <div class="swiper-slide post-item-swiper">
                                    <a href="#">
                                        <img src="<?= get_template_directory_uri() ?>/img/post-demo-03.jpg">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="next-post load-more-post-icon">
                        <a></a>
                    </div>
                    <div class="clearfix"></div>
                    
                </div>
            </div>

            <!-- Initialize Swiper -->
            <script>
                var swiper = new Swiper('.swiper-container', {
                    pagination: '.swiper-pagination',
                    slidesPerView: 3,
                    // paginationClickable: true,
                    spaceBetween: 5,
                    nextButton: '.next-post',
                    prevButton: '.previous-post',
                });
                
            </script>
        </section>
        <!-- <section id="gallery" class="section default">
            <div class="inner-wrap">
                <div class="section-header">
                    <h3>GALLERY</h3>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>
        </section> -->
        <section id="lien-he" class="section default">
            <div class="inner-wrap">
                <div class="section-header">
                    <h3 class="same-logo-color">LIÊN HỆ</h3>
                </div>
                <div class="contact-form">
                    <?php echo do_shortcode("[contact-form-7 id='25' title='Index Contact Form']"); ?>
                </div>
            </div>
        </section>
        <section id="info-map" class="section default">
            <div class="contact-info">
                <div class="contact-info-logo"></div>
                <!-- <div class="contact-info-line"></div> -->
                <div class="contact-info-addr">
                    <p>449/94 Sư Vạn Hạnh ( nối dài ), Phường 12, Quận 10, TP.Hồ Chí Minh</p>
                    <div class="contact-info-phone">08 3862 5703</div>
                </div>
            </div>
            <div class="contact-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d2771.5082145459023!2d106.66629413954291!3d10.772618528010373!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e0!4m0!4m3!3m2!1d10.772503!2d106.6677811!5e0!3m2!1svi!2s!4v1450747773113" width="100%" height="323" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="clearfix"></div>
        </section>
        <div class="clearfix"></div>
    </div>
    <style type="text/css">
    .menu-item-home a {
        color: #fff !important;
    }
    .menu-item-home a:hover, .menu-item-home:first-child a {
        color: #ee5a35 !important;
    }
    </style>
<?php get_footer(); ?>