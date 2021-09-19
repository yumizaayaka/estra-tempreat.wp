<?php wp_head(); ?>
<main>
        <div class="first-view">
            <div class="wrap">
                <h1 class="first-view-ttl">お問い合わせ</h1>
                <p class="first-view-sub-ttl">CONTACT</p>
            </div>
        </div>
        <div class="contact">
            <div class="wrap">
                <h2 class="contact-ttl">フォームからのお問い合わせ<?php echo $slug; ?></h2><!-- 固定ページのタイトル -->
                <p class="contact-text">記入内容の確認後、2~3営業日以内にご連絡させていただきます。</p>
                <div class="contact-form">
                    <form action="contact.html" method="POST">
                        <div class="form-item">
                            <label>名前</label>
                            <input type="text" name="name"><input type="text" name="name">
                        </div>
                        <div class="form-item">
                            <label>フリガナ</label>
                            <input type="text" name="furigana"><input type="text" name="furigana">
                        </div>
                        <div class="form-item">
                            <label>メールアドレス </label>
                            <input type="email" name="email">
                        </div>
                        <div class="form-item">
                            <label>郵便番号</label>
                            <input type="text" name="postalcode">
                        </div>
                        <div class="form-item">
                            <label>住所</label>
                            <input type="text" name="address">
                        </div>
                        <div class="form-item-last">
                            <label><p>問い合わせ内容</p></label>
                            <input type="radio" name="recruit">中途採用に関して<input type="radio" name="recruit">新卒採用に関して<input type="radio" name="recruit">その他のお問い合せ
                            <textarea name="comment" cols="30" rows="10"></textarea>
                        </div>
                        <div class="submit">
                            <input type="submit" value="送信">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
<?php wp_footer(); ?>