<?php
/*
Template Name: about-member
*/
?>
<?php get_header(); ?>
<main>
        <div class="first-view">
            <div class="wrap">
                <h1 class="first-view-ttl">設立メンバー</h1>
                <p class="first-view-sub-ttl">MEMBER</p>
            </div>
        </div>
        <div class="member">
            <div class="wrap">
                <div class="member-top">
                    <img src="<?php echo get_template_directory_uri().'/img/4731966_s.jpg'; ?>" alt="">
                    <div class="member-content">
                        <h3 class="member-name">山田太朗</h3>
                        <p class="member-sub-name">Taro Yamada</p>
                        <p class="member-text">代表取締役CEO</p>
                    </div>
                </div>
                <div class="member-down">
                    <section class="member-list">
                        <img src="<?php echo get_template_directory_uri().'/img/4731966_s.jpg'; ?>" alt="">
                        <div class="member-content">
                            <h3 class="member-name">河本次郎</h3>
                            <p class="member-sub-name">Jiro Kawamopto</p>
                            <p class="member-text">COO</p>
                        </div>
                    </section>
                    <section class="member-list">
                        <img src="<?php echo get_template_directory_uri().'/img/4731966_s.jpg'; ?>" alt="">
                        <div class="member-content">
                            <h3 class="member-name">佐藤三郎</h3>
                            <p class="member-sub-name">Saburou Satou</p>
                            <p class="member-text">Director</p>
                        </div>
                    </section>
                    <section class="member-list">
                        <img src="<?php echo get_template_directory_uri().'/img/4731966_s.jpg'; ?>" alt="">
                        <div class="member-content">
                            <h3 class="member-name">村本四郎</h3>
                            <p class="member-sub-name">Siro Muramoto</p>
                            <p class="member-text">Adviser</p>
                        </div>
                    </section>
                    <section class="member-list">
                        <img src="<?php echo get_template_directory_uri().'/img/4731966_s.jpg'; ?>" alt="">
                        <div class="member-content">
                            <h3 class="member-name">市川吾郎</h3>
                            <p class="member-sub-name">Goro Ichikawa</p>
                            <p class="member-text">Engineer</p>
                        </div>
                    </section>
                    <section class="member-list">
                        <img src="<?php echo get_template_directory_uri().'/img/4731966_s.jpg'; ?>" alt="">
                        <div class="member-content">
                            <h3 class="member-name">黒川六郎</h3>
                            <p class="member-sub-name">Rokurou Kurokawa</p>
                            <p class="member-text">Engineer</p>
                        </div>
                    </section>
                    <section class="member-list">
                        <img src="<?php echo get_template_directory_uri().'/img/4731966_s.jpg'; ?>" alt="">
                        <div class="member-content">
                            <h3 class="member-name">赤城奈々</h3>
                            <p class="member-sub-name">Nana Akagi</p>
                            <p class="member-text">Designer</p>
                        </div>
                    </section>
                    <section class="member-list">
                        <img src="<?php echo get_template_directory_uri().'/img/4731966_s.jpg'; ?>" alt="">
                        <div class="member-content">
                            <h3 class="member-name">渋井初穂</h3>
                            <p class="member-sub-name">Hatsue Sibui</p>
                            <p class="member-text">Partner</p>
                        </div>
                    </section>
                    <section class="member-list">
                        <img src="<?php echo get_template_directory_uri().'/img/4731966_s.jpg'; ?>" alt="">
                        <div class="member-content">
                            <h3 class="member-name">櫻井九郎</h3>
                            <p class="member-sub-name">Kurou Sakurai</p>
                            <p class="member-text">Art Director</p>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <div class="about-group">
            <div class="wrap">
                <div class="about-flex">
                    <section class="about-group-sec">
                        <h3 class="about-group-sec-ttl">
                            <a href="<?php echo esc_url(home_url('/about-member')); ?>">設立メンバー</a>
                        </h3>
                        <p>member</p>
                    </section>
                    <section class="about-group-sec">
                        <h3 class="about-group-sec-ttl">
                            <a href="<?php echo esc_url(home_url('/about-philosophy')); ?>">経営理念</a>
                        </h3>
                        <p>philosophy </p>
                    </section>
                    <section class="about-group-sec">
                        <h3 class="about-group-sec-ttl">
                            <a href="<?php echo esc_url(home_url('/about-company')); ?>">会社概要</a>
                        </h3>
                        <p>company </p>
                    </section>
                    <section class="about-group-sec">
                        <h3 class="about-group-sec-ttl">
                            <a href="<?php echo esc_url(home_url('/about-greething')); ?>">代表挨拶</a>
                        </h3>
                        <p>greething</p>
                    </section>
                </div>
            </div>
        </div>
    </main>
<?php get_footer(); ?>
