<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="resources/css/common.css">
    <title>Exciting-Life</title>
</head>
<body>
    <header class="header">
        <h1 class="header-ttl">
        <a href="index.blade.php">ExcitingLife</a>
    </header>
    <nav class="header-nav">
        <ul class="header-nav-list">
            <li class="header-nav-item">
                <a href="index.blade.php">ホーム</a>
            </li>
            <li class="header-nav-item">
                <a href="service.blade.php">事業内容</a>
            </li>
            <li class="header-nav-item">
                <a href="news.blade.php">ニュース</a>
            </li>
            <li class="header-nav-item">
                <a href="company.blade.php">会社概要</a>
            </li>
            <li class="header-nav-item">
                <a href="recruit.blade.php">採用情報</a>
            </li>
            <li class="header-nav-item">
                <a href="contact.blade.php">お問い合わせ</a>
            </li>
        </ul>
    </nav>
    <form action="/" method="post">
    @csrf
    <label>会社名</label><br>
    <input type="text" name="company"><br>
    <label>名前</label><br>
    <input type="text" name="name"><br>
    <label>メールアドレス</label><br>
    <input type="email" name="email"><br>
    <label>お問い合わせ</label><br>
    <input type="text" name="text"><br>
    <input type="submit" value="送信">
    </form>
</body>
</html>