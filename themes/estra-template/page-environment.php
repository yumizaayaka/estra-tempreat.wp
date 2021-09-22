<?php
/*
Template Name: enviroment
*/
?>

<?php get_header(); ?>

<main>
        <div class="first-view">
            <div class="wrap">
                <h1 class="first-view-ttl">働く環境</h1>
                <p class="first-view-sub-ttl">ENVIROMENT</p>
            </div>
        </div>
        <div class="environment">
            <img src="img/4786984_s.jpg" alt="">
            <div class="environment-content wrap">
                <h2 class="environment-content-ttl">働きやすい環境を全力で作る</h2>
                <p class="environment-content-text">
                    みんなが働きやすいと感じる環境を全力で作っていきます。
                    <br>全員がベストを尽くし、成長できる研修制度と安心して働ける福利厚生を提案していきます。
                </p>
            </div>
        </div>
        <div class="recruit-group">
            <div class="wrap">
                <div class="recruit-flex">
                    <section class="recruit-group-sec">
                        <h3 class="recruit-group-sec-ttl">
                            <a href="<?php echo esc_url(home_url('/recruit.php')); ?>">採用情報</a>
                        </h3>
                        <p>recruit</p>
                    </section>
                    <section class="recruit-group-sec">
                        <h3 class="recruit-group-sec-ttl">
                            <a href="<?php echo esc_url(home_url('/interview.php')); ?>">インタビュー</a>
                        </h3>
                        <p>environment</p>
                    </section>
                </div>
            </div>
        </div>
    </main>
<?php wp_footer(); ?>