<?php wp_head(); ?>
<main>
        <div class="first-view">
            <div class="wrap">
                <h1 class="first-view-ttl">ニュース</h1>
                <p class="first-view-sub-ttl">NEWS</p>
            </div>
        </div>
        <div class="news-item">
            <div class="wrap">
            <?php if (have_posts()) :  while(have_posts()):the_post(); ?>
                <div class="news-content">
                    <div class="news-content-top">
                        <p class="news-content-top-date"><?php echo get_the_date('Y-m-d'); ?></p>
                        <p class="news-content-top-text"><?php the_category(', '); ?></p>
                    </div>
                    <div class="news-content-down">
                        <h2 class="news-content-down-ttl"><?php the_title(); ?></h2>
                        <div class="news-content-down-text">
                            <?php the_content(); ?>
                        </div>
                        <div class="news-content-item">
                            <a href="news.html">return</a>
                            <a href="#">top</a>
                            <a href="news-item.html">next</a>
                        </div>
                    </div>
                </div>
            <?php endwhile; endif; ?>
                <div class="news-content-item">
                    <a href="news.html">return</a><?php previous_post_link('%link','古い記事へ'); ?><!-- ３つともわからない -->
                    <a href="#">top</a>
                    <a href="news-item.html">next</a><?php next_post_link('%link','新しい記事へ'); ?>
                </div>
            </div>
        </div>
    </main>
<?php wp_footer(); ?>