<?php wp_head(); ?>
<main>
        <div class="first-view">
            <div class="wrap">
                <h1 class="first-view-ttl">インタビュー</h1>
                <p class="first-view-sub-ttl">INTERVIEW</p>
            </div>
        </div>
        <div class="interview">
            <div class="wrap">
                <section class="interview-sec">
                    <div class="interview-img">
                        <img src="<?php echo get_template_directory_uri(); ?>.'/img/5179514_s.jpg'" alt="">
                    </div>
                    <div class="inteview-content">
                        <p class="interview-class">営業戦略部</p>
                        <h2 class="interview-name">山本太郎</h2>
                        <p class="interview-text">営業第一チーム</p>
                        <p class="interview-text">2020年12月入社</p>
                        <p class="interview-more">
                            <a href="interview-person.html">view more ▶︎</a> 
                        </p>
                    </div>
                </section>
                <section class="interview-sec">
                    <div class="inteview-content">
                        <p class="interview-class">マーケティング部</p>
                        <h2 class="interview-name">仲間次郎</h2>
                        <p class="interview-text">広告運用チーム</p>
                        <p class="interview-text">2020年10月入社</p>
                        <p class="interview-more">
                            <a href="interview-person.html">view more ▶︎</a> 
                        </p>
                    </div>
                    <div class="interview-img">
                        <img src="<?php echo get_template_directory_uri(); ?>.'/img/5179514_s.jpg'" alt="">
                    </div>
                </section>
                <section class="interview-sec">
                    <div class="interview-img">
                        <img src="<?php echo get_template_directory_uri(); ?>.'/img/5179514_s.jpg'" alt="">
                    </div>
                    <div class="inteview-content">
                        <p class="interview-class">技術開発部</p>
                        <h2 class="interview-name">小宮吾郎</h2>
                        <p class="interview-text">開発チーム</p>
                        <p class="interview-text">2020年10月入社</p>
                        <p class="interview-more">
                            <a href="interview-person.html">view more ▶︎</a> 
                        </p>
                    </div>
                </section>
                <section class="interview-sec">
                    <div class="inteview-content">
                        <p class="interview-class">営業戦略部</p>
                        <h2 class="interview-name">白石光代</h2>
                        <p class="interview-text">営業第二チーム</p>
                        <p class="interview-text">2019年11月入社</p>
                        <p class="interview-more">
                            <a href="interview-person.html">view more ▶︎</a> 
                        </p>
                    </div>
                    <div class="interview-img">
                        <img src="<?php echo get_template_directory_uri(); ?>.'/img/5179514_s.jpg'" alt="">
                    </div>
                </section>
                <section class="interview-sec">
                    <div class="interview-img">
                        <img src="<?php echo get_template_directory_uri(); ?>.'/img/5179514_s.jpg'" alt="">
                    </div>
                    <div class="inteview-content">
                        <p class="interview-class">人事部</p>
                        <h2 class="interview-name">柿本珠子</h2>
                        <p class="interview-text">広報チーム</p>
                        <p class="interview-text">2019年1月入社</p>
                        <p class="interview-more">
                            <a href="interview-person.html">view more ▶︎</a> 
                        </p>
                    </div>
                </section>
                <section class="interview-sec">
                    <div class="inteview-content">
                        <p class="interview-class">営業戦略部</p>
                        <h2 class="interview-name">山口太一</h2>
                        <p class="interview-text">営業第三チーム</p>
                        <p class="interview-text">2021年4月入社</p>
                        <p class="interview-more">
                            <a href="interview-person.html">view more ▶︎</a> 
                        </p>
                    </div>
                    <div class="interview-img">
                        <img src="<?php echo get_template_directory_uri(); ?>.'/img/5179514_s.jpg'" alt="">
                    </div>
                </section>
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
                            <a href="<?php echo esc_url(home_url('/environment.php')); ?>">働く環境</a>
                        </h3>
                        <p>environment</p>
                    </section>
                </div>
            </div>
        </div>
    </main>
<?php wp_footer(); ?>