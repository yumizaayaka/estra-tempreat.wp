<?php wp_head(); ?>
<main>
        <div class="first-view">
            <div class="wrap">
                <h1 class="first-view-ttl">私たちについて</h1>
                <p class="first-view-sub-ttl">ABOUT</p>
                <p class="first-view-text">新しい教育の常識を作り<br>多くの人に幸せを届ける</p>
            </div>
        </div>
        <div class="second-view">
            <div class="second-view-top-border"></div>
            <div class="second-view-text">
                <div class="wrap">
                    estraが大切にすることは、教育のDX化で日本の教育を変革すること<br>日本の教育にコーチングを普及し、自発的に目標達成ができる人材を育成する
                </div>
            </div>
            <div class="second-view-bottom-border"></div>
        </div>
        <div class="about-content">
            <div class="wrap">
                <h1 class="about-content-ttl">私たちが大切にしている3つのこと</h1>
                <div class="about-content-group">
                    <section class="about-content-sec">
                        <h2 class="about-content-sec-ttl">失敗を恐れない</h2>
                        <p class="about-content-text">ー私たちが大切にしている「成長」のためには失敗は必要ですー</p>
                    </section>
                    <section class="about-content-sec">
                        <h2 class="about-content-sec-ttl">オープンなコミュニケーション</h2>
                        <p class="about-content-text">ー組織の成長のためなら、時には厳しいことも発言することが重要ですー</p>
                    </section>
                    <section class="about-content-sec">
                        <h2 class="about-content-sec-ttl">メンバーの多様性</h2>
                        <p class="about-content-text">ー男女問わず、学生〜社会人まで様々なバックグラウンドを持ったメンバーが働いていますー</p>
                    </section>
                </div>
            </div>
        </div>
        <div class="about-group">
            <div class="wrap">
                <div class="about-flex">
                    <section class="about-group-sec">
                        <h3 class="about-group-sec-ttl">
                            <a href="<?php echo esc_url(home_url()); ?>.'/member.php'">設立メンバー</a>
                        </h3>
                        <p>member</p>
                    </section>
                    <section class="about-group-sec">
                        <h3 class="about-group-sec-ttl">
                            <a href="<?php echo esc_url(home_url('/philosophy.php')); ?>">経営理念</a>
                        </h3>
                        <p>philosophy </p>
                    </section>
                    <section class="about-group-sec">
                        <h3 class="about-group-sec-ttl">
                            <a href="./company.html">会社概要</a>
                        </h3>
                        <p>company </p>
                    </section>
                    <section class="about-group-sec">
                        <h3 class="about-group-sec-ttl">
                            <a href="./greething.html">代表挨拶</a>
                        </h3>
                        <p>greething</p>
                    </section>
                </div>
            </div>
        </div>
    </main>
<?php wp_footer(); ?>