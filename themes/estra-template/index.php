<?php wp_head(); ?>
    <main>
        <div class="home-first-view">
            <div class="wrap">
                <div class="home-first-view-text">
                    <h1 class="home-first-view-ttl">Commit to the growth for everyone</h1>
                    <p class="home-first-view-subttl">全ての人の成長にコミットする</p>
                </div>
            </div>
        </div>
        <div class="top-content">
            <div class="wrap">
                <h2 class="top-content-ttl">Technology × Coaching</h2>
                <p class="top-content-text">株式会社estraはデジタル化が遅れている教育業界に最新の<br>テクノロジーを導入することによって教育のDXを実現させます
                    <br>独自のオペレーションとコーチングを融合した新しい教育の仕組<br>みにより、一人ひとりに合わせた最適な環境を提供します</p>
            </div>
        </div>
        <div class="news">
            <div class="wrap">
                <div class="news-content">
                    <h3 class="site-ttl">News</h3>

                    <!-- coachetech参考↓　-->
                    <?php if ( have_posts() ) : ?>
                        <?php while ( have_posts() ) : the_post(); ?>
                        <!-- メインループ開始 -->
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        <!-- 個別記事へのリンクの出力 タイトル -->
                                <?php if (!is_category() && has_category()) : ?>
                                    <p class="category-tag">
                                        <?php $postcat = get_the_category();
                                        echo $postcat[0]->name;
                                        ?>
                                    </p>
                                <?php endif; ?>
                        　<!-- カテゴリーの出力 -->
                        <?php endwhile; ?>
                    <?php endif; ?>

                    <!-- 違うサイトのを参考↓　-->
                    <ul>
                    <?php
                        $args = array(
                            'posts_per_page' => 5 // 表示件数の指定
                        );
                        $posts = get_posts( $args );
                        foreach ( $posts as $post ): // ループの開始
                        setup_postdata( $post ); // 記事データの取得
                    ?>
                    <?php
                        endforeach; // ループの終了
                        wp_reset_postdata(); // 直前のクエリを復元する
                    ?>
                    </ul>

                    <p class="news-site">estra 新代々木オフィス昨年12月に移転しました</p>
                    <p class="news-site">コーポレートサイトリニューアルのお知らせ</p>
                    <p class="news-site">新型コロナウイルス感染症に関する対応について</p>
                    <a class="news-more" href="<?php echo esc_url(home_url('/news.php')); ?>">view more</a>
                </div>
            </div>
        </div>

        <div class="service">
            <h3 class="site-ttl">Service</h3>
            <div class="service-contet">
                <div class="service-flex-item">
                    <img class="service-content-item" src="<?php echo get_template_directory_uri(); ?>.'/img/4803612_s.jpg'" alt="">
                    <div class="service-content-text">
                        <h2 class="service-content-ttl">フリーランス特化型プログラミングスクール「COACHTECH」</h2>
                        <p>COACHTECH(コーチテック)はフリーランス特化型のオンラインコーチングプログラミングスクールです。<br>
                            プログラミング未経験の方でも、「独自の学習ノウハウ」でフリーランスエンジニアを目指すことができます。</p>
                    </div>
                </div>
                <div class="service-flex-item">
                    <div class="service-content-text">
                        <h2 class="service-content-ttl">教育機関向け業務効率化支援ツール「Stageee」</h2>
                        <p>Stageee(ステージー)はコーチングに特化した業務効率化支援ツールです。
                            Web会議、面談予約、チャット、学習計画作成、学習状況の把握、教材管理、指導報告書作成といったコーチングにおいて必要な機能が1つにまとまった業務効率化を支えるSaaS<br>
                            </p>
                    </div>
                    <img class="service-content-item order" src="<?php echo get_template_directory_uri(); ?>.'/img/4653784_s.jpg'" alt="">
                </div>
            </div>
            <div class="service-link">
                <a href="<?php echo esc_url(home_url('/service.php')); ?>">view more</a>
            </div>
        </div>
        <div class="recruit">
            <h3 class="site-ttl">Recruit</h3>
            <div class="recruit-flex wrap">
                <div class="recruit-img">
                    <img src="<?php echo get_template_directory_uri(); ?>.'/img/4516865_s.jpg'" alt="">
                </div>
                <div class="recruit-content">
                    <h1 class="recruit-content-ttl">日本の教育を変革する最前線で活躍する人材に</h1>
                    <p>全員がリスクを恐れずにチャレンジし<br>社員一人一人が活躍できる環境をみんなで作り上げる</p>
                </div>
            </div>
            <div class="recruit-information">
                <div class="recruit-text">採用情報について</div>
                <div class="flex-item">
                    <div class="recruit-group">
                        <a class="recruit-group-text" href="<?php echo esc_url(home_url('/recruit.php')); ?>">新卒採用</a>
                    </div>
                    <div class="recruit-group left">
                        <a class="recruit-group-text" href="<?php echo esc_url(home_url('/recruit.php')); ?>">中途採用</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php wp_footer(); ?>