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
                        <p>Lời ngỏ!</p>
                        <p>TRUNG TÂM ÂM NHẠC PHANXICO được thành lập từ tháng 3 / 2009. Với mục đích đưa âm nhạc đến gần hơn với mọi người, là nơi giải trí, thư giản gặp gỡ và dao lưu sau một ngày làm việc mệt nhọc. Cho tới nay Trung Tâm rất vinh dữ đã đào tạo được gần 2 ngàn học viên từ những em 5, 6 tuổi cho tới những học sinh, sinh viên, các dấng tung niên hay những cô chú lớn tuổi…. Đặc biệt TRUNG TÂM PHANXCO rất vui mừng khi mỗi năm TRUNG TÂM đã đào tạo khoảng 15 học viên thi đậu vào các trường âm nhac TP, cùng với những giải thưởng cấp Phường, Quận các các em học sinh. Đó là niềm hạnh phúc và là thành quả...</p>
                        <a class="readmore" href="#">
                            <img src="wp-content/themes/spacious/img/readmore.png" />
                        </a>
                    </div>
                    <div class="about-first-video">
                        <div class="about-video-thumb">
                            <iframe width="380" height="214" src="https://www.youtube.com/embed/4LZGip1L1js" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="about-second">
                    <div class="tg-one-third small-margin">
                        <iframe width="380" height="214" src="https://www.youtube.com/embed/4LZGip1L1js" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div class="tg-one-third">
                        <iframe width="380" height="214" src="https://www.youtube.com/embed/4LZGip1L1js" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div class="tg-one-third">
                        <iframe width="380" height="214" src="https://www.youtube.com/embed/4LZGip1L1js" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </section>
        <section id="chuong-trinh-hoc" class="section default">
            <div class="inner-wrap">
                <div class="section-header">
                    <h3>CHƯƠNG TRÌNH HỌC</h3>
                </div>
                <style type="text/css">
                    .course-wrapper {
                        overflow: hidden;
                        height: 600px;
                    }
                    .item-wrapper {
                        position: absolute;
                        left: 0;
                        right: 0;
                        height: 300px;
                        width: 50%;
                    }
                    .item-wrapper .item-img {
                        width: 50%;
                        height: 100%;
                        box-resizing: border-box;
                        border: 1px solid red;
                        position: absolute;
                        overflow: hidden;
                        top: 0;
                        right: 0;
                    }
                    .item-wrapper .item-img img {
                        height: 400px;
                        width: 400px;
                        top: 50%;
                        left: 50%;
                        display: block;
                    }
                    /*@media only screen and (min-width: 1366px)*/
                    @media screen and (max-width: 1308px) {
                        .course-wrapper {
                            margin: 0 auto;
                            position: relative;
                        }
                    }
                </style>
                <div class="course">
                    <div class="course-wrapper">
                        <a href="#" class="item-wrapper">
                            <div class="item-arrow-right"></div>
                            <div class="item-img">
                                <img src="/wp-content/themes/spacious/img/course-img-1.png" />
                            </div>
                            <div class="item-txt">
                                
                            </div>
                        </a>
                        <a href="#" class="item-wrapper">
                            <div class="item-arrow-right"></div>
                            <div class="item-img">
                                <img src="/wp-content/themes/spacious/img/course-img-1.png" />
                            </div>
                            <div class="item-txt">
                                
                            </div>
                        </a>
                        <!-- <div class="first-row">
                            
                            <div class="row-item img-item">
                                
                            </div>
                            <div class="row-item text-item">
                                
                            </div>
                            <div class="row-item img-item">
                                
                            </div>
                        </div> -->
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
                <div class="latest-news">
                    <div class="post-image">
                        <a href="#">
                            <img src="/wp-content/themes/spacious/img/course-img-2.png">
                        </a>
                    </div>
                    <div class="post-summary">
                        <a href="#"><h2>Lịch sử đàn guitar</h2></a>
                        <p>Đàn ghi-ta (tiếng Pháp: guitare; tiếng Anh: guitar), còn được biết đến dưới cái tên Tây Ban cầm (西班琴), vốn xuất xứ là một nhạc cụ có cách đây hơn 5000 năm (loại ghi-ta cổ), sau này người Tây Ban Nha mới cải tiến nó thành đàn ghi-ta ngày nay. Đàn ghi-ta ngày nay có 6 dây, tuy nhiên vẫn tồn tại những loại đàn ghi-ta có 4, 7, 8, 10 và 12 dây.</p>
                        <a href="#" class="readmore">READ MORE</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </section>
        <section id="gallery" class="section default">
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
        </section>
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

<?php get_footer(); ?>