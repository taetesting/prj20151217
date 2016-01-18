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
                                        $aboutContent = wp_trim_words($aboutPage->post_content, 200, '...');
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
                <?php 
                $show = false;
                if ($show == true) { ?>
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
                <?php } ?>
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
                    <a href="/sheet-nhac/" class="category-news-item">SHEET NHẠC</a>
                    <a href="/kien-thuc/" class="category-kt-item">KIẾN THỨC BỔ ÍCH</a>
                    <div class="clearfix"></div>
                </div>
                <?php
                    $argsLatestPost = array(
                                            'post_type' => 'post',
                                            'tax_query' => array(
                                                'relation' => 'AND',
                                                array(
                                                    'taxonomy' => 'category',
                                                    'field'    => 'slug',
                                                    'terms'    => array( 'tin-tuc', 'su-kien'),
                                                    'operator' => 'IN',
                                                ),
                                                array(
                                                    'taxonomy' => 'category',
                                                    'field'    => 'slug',
                                                    'terms'    => array( 'video', 'photo' ),
                                                    'operator' => 'NOT IN',
                                                ),
                                            ),
                                            'orderby' => 'id',
                                            'order'   => 'DESC',
                                            'posts_per_page' => 1,
                                            'offset' => 0
                                        );
                    $queryLatestPost = new WP_Query( $argsLatestPost );
                    if ($queryLatestPost->have_posts()) { 

                        while ($queryLatestPost->have_posts()) {
                            $queryLatestPost->the_post();
                            $latestPostLink = get_the_permalink();
                            $latestPostId   = get_the_ID();
                        ?>

                    <div class="latest-news">
                        <a href="<?=$latestPostLink?>" class="latest-post-title"><h2><?= get_the_title() ?></h2></a>
                        <div class="post-image">
                            <a href="<?=$latestPostLink?>">
                                <?php
                                    if (has_post_thumbnail()) {
                                        echo the_post_thumbnail('full');
                                    } else {
                                        echo '<img src="/wp-content/themes/spacious/img/course-img-2.png">';
                                    }
                                ?>
                            </a>
                        </div>
                        <div class="post-summary">
                            <p>
                            <?php
                                $latestContent = wp_trim_words(get_the_content(), 100, '...'); 
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

                    <?php
                        }
                    }

                    $args = array('numberposts' => '10', 'category' => 4, 'post_type' => 'post');
                    $recentPosts = wp_get_recent_posts($args, OBJECT);
                    // $latestPost     = $recentPosts[0];
                    // $latestPostLink = get_permalink($latestPost->ID);
                    unset($recentPosts[0]);
                ?>
                
                <div class="post-more">
                    <div class="previous-post load-more-post-icon">
                        <a></a>
                    </div>
                    <div class="post-content">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <?php
                                $argsRecentPosts = array(
                                        'post_type' => 'post',
                                        'tax_query' => array(
                                            'relation' => 'AND',
                                            array(
                                                'taxonomy' => 'category',
                                                'field'    => 'slug',
                                                'terms'    => array( 'tin-tuc', 'su-kien'),
                                                'operator' => 'IN',
                                            ),
                                        ),
                                        'post__not_in'   => array($latestPostId),
                                        'orderby'        => 'id',
                                        'order'          => 'DESC',
                                        'posts_per_page' => 10,
                                        'offset'         => 0
                                    );
                                $queryRecentPosts = new WP_Query( $argsRecentPosts );
                                if ($queryRecentPosts->have_posts()) {
                                    $recentPosts = $queryRecentPosts->post_count;
                                    while ($queryRecentPosts->have_posts()) {
                                        $queryRecentPosts->the_post();

                                        $postLink = get_the_permalink();
                                        echo '<div class="swiper-slide post-item-swiper">';
                                        if (has_category('video')) {
                                            $postLink = get_the_content();
                                            echo "<a href=\"{$postLink}\" class=\"fancybox-media video-item-wrapper\"></a>";
                                        } else {
                                            echo "<a href=\"{$postLink}\"></a>";
                                        }

                                        if (has_post_thumbnail()) {
                                            echo the_post_thumbnail('full');
                                        } else {
                                            echo '<img src="' . get_template_directory_uri() . '/img/post-demo-01.jpg" alt="' . $post->post_title . '" />';
                                        }
                                        // echo '</a>';
                                        echo '</div>';
                                    }
                                }
                                ?>
                                <div class="swiper-slide post-item-swiper post-item-swiper-load-more">
                                    <a href="/tin-tuc/">
                                        Nhiều hơn...
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
        <?php include_once( __DIR__ . '/../contact-section.php'); ?>
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