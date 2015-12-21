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
    <style>
    
    .section-header h3 {
        padding-bottom: 10px;
        line-height: 40px;
        position: relative;
        display: inline-block;
        font-size: 30px;
        text-transform: uppercase;
        margin-top: 0px;
        margin-bottom: 0px;
    }
    .about-first-text {
        float: left;
        width: 69.4581282%;
        margin: 0 2.46305419%;
        padding: 0px 0px 30px;
    }
    .about-first-video {
        float: right;
        width: 23.1527094%;
    }
    .about-video-thumb {
        /*width: 300px;*/
        /*height: 225px;*/
        min-height: 50px;
        border: 1px solid red;
    }
    </style>
        <section id="gioi-thieu">
            <div class="section-header">
                <h3>TRUNG TÂM ÂM NHẠC PHANXICO</h3>
            </div>
            <div class="about-first">
                <div class="about-first-text">
                    <p>Lời ngỏ!</p>
                    <br/>
                    <p>TRUNG TÂM ÂM NHẠC PHANXICO được thành lập từ tháng 3 / 2009. Với mục đích đưa âm nhạc đến gần hơn với mọi người, là nơi giải trí, thư giản gặp gỡ và dao lưu sau một ngày làm việc mệt nhọc. Cho tới nay Trung Tâm rất vinh dữ đã đào tạo được gần 2 ngàn học viên từ những em 5, 6 tuổi cho tới những học sinh, sinh viên, các dấng tung niên hay những cô chú lớn tuổi…. Đặc biệt TRUNG TÂM PHANXCO rất vui mừng khi mỗi năm TRUNG TÂM đã đào tạo khoảng 15 học viên thi đậu vào các trường âm nhac TP, cùng với những giải thưởng cấp Phường, Quận các các em học sinh. Đó là niềm hạnh phúc và là thành quả...</p>
                </div>
                <div class="about-first-video">
                    <div class="about-video-thumb"></div>
                </div>
            </div>
            <div class="about-second">
                <div class="tg-one-third"></div>
                <div class="tg-one-third"></div>
                <div class="tg-one-third"></div>
            </div>
            <div class="clearfix"></div>
        </section>
        <section id="chuong-trinh-hoc">
            <h3>CHƯƠNG TRÌNH HỌC</h3>
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
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </section>
        <section id="tin-tuc-su-kien">
            <h3>TIN TỨC & SỰ KIỆN</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </section>
        <section id="gallery">
            <h3>GALLERY</h3>
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
        </section>
        <section id="lien-he">
            <h3>LIÊN HỆ</h3>
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
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </section>
        <div class="clearfix"></div>
    </div>

<?php get_footer(); ?>