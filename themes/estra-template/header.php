!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Klee+One&family=Sawarabi+Mincho&family=Shippori+Mincho:wght@500&display=swap" rel="stylesheet">
    <title>estra</title>
    <?php wp_head(); ?>
    
</head>
<body>
    <header class="header">
        <h1 class="header-ttl">
            <a href="<?php echo esc_url(home_url('/')); ?>">estra</a>
        </h1>
        <nav class="header-nav">
            <ul class="header-nav-list">
                <li class="header-nav-item">
                    <a class="header-nav-item-ttl" href="about/index.html">about</a>
                    <p>私たちについて</p>
                </li>
                <li class="header-nav-item">
                    <a class="header-nav-item-ttl" href="<?php echo esc_url(home_url('/news.php')); ?>">news</a>
                    <p>ニュース</p>
                </li>
                <li class="header-nav-item">
                    <a class="header-nav-item-ttl" href="<?php echo esc_url(home_url('/service.php')); ?>">service</a>
                    <p>サービス</p>
                </li>
                <li class="header-nav-item">
                    <a class="header-nav-item-ttl" href="<?php echo esc_url(home_url('/recruit.php')); ?>">recruit</a>
                    <p>採用情報</p>
                </li>
                <li class="header-nav-item">
                    <a class="header-nav-item-ttl" href="<?php echo esc_url(home_url('/privacy.php')); ?>">privacy</a>
                    <p>プライバシー保護</p>
                </li>
                <li class="header-nav-item-contact">
                    <a class="header-nav-item-ttl" href="<?php echo esc_url(home_url('/contact.php')); ?>">お問い合わせ</a>
                </li>
            </ul>
        </nav>

        <div class="menu" id="menu">
            <span class="menu-line-top"></span>
            <span class="menu-line-center"></span>
            <span class="menu-line-bottom"></span>
        </div>
        <nav class="menu-nav" id="menu-nav">
            <ul class="menu-nav-list">
                <li class="menu-nav-item">
                    <a href="about/index.html">about</a>
                </li>
                <li class="menu-nav-item">
                    <a href="<?php echo esc_url(home_url('/news.php')); ?>">news</a>
                </li>
                <li class="menu-nav-item">
                    <a href="<?php echo esc_url(home_url('/service.php')); ?>">service</a>
                </li>
                <li class="menu-nav-item">
                    <a href="<?php echo esc_url(home_url('/recruit.php')); ?>">recruit</a>
                </li>
                <li class="menu-nav-item">
                    <a href="<?php echo esc_url(home_url('/privacy.php')); ?>">privacy</a>
                </li>
                <li class="menu-nav-item">
                    <a href="<?php echo esc_url(home_url('/contact.php')); ?>">contact</a>
                </li>
            </ul>
        </nav>
    </header>