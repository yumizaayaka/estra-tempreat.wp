<?php
/*
Template Name: about-company
*/
?>

<?php get_header(); ?>
<main>
        <div class="first-view">
            <div class="wrap">
                <h1 class="first-view-ttl">会社概要</h1>
                <p class="first-view-sub-ttl">COMPANY</p>
            </div>
        </div>
        <div class="company">
            <div class="company-boder-top"></div>
            <div class="company-content">
                <div class="wrap">
                    <table class="company-table">
                        <tr>
                            <td>企業名</td><td>株式会社estra</td>
                        </tr>
                        <tr>
                            <td>設立</td><td>2019年11月</td>
                        </tr>
                        <tr>
                            <td>所在地</td><td>〒151-0051<br>東京都渋谷区<br>千駄ヶ谷5-8-4<br>第7端穂ビル　4階</td>
                        </tr>
                        <tr>
                            <td>従業員</td><td>56名( 社員6名、業務委託40名インターン生10名）</td>
                        </tr>
                        <tr>
                            <td>事業内容</td><td>教育関連サービス</td>
                        </tr>
                        <tr>
                            <td>取引先銀行</td><td>三井住友銀行、りそな銀行</td>
                        </tr>
                        <tr>
                            <td>資本金</td><td>10,009,000円(2020年11月29日現在 )</td>
                        </tr>
                        <tr>
                            <td>役員</td><td>山田太朗</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="company-boder-down"></div>
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