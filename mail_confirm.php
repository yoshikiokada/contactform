<!doctype html>
<html lang="ja">

<head>
    <meta charset="utf-8">
<title>お問い合わせフォームを作る</title>>
 <link rel="stylesheet" type="text/CSS" href="style2.css">
</html>

<body>
    <h1>お問い合わせ内容確認</h1>

    <div class="confirm">
        <p>お問い合わせ内容はこちらで宜しいでしょうか？
            <br>よろしければ「送信する」ボタンを押してください。
        </P>
        <p>名前
            <br>
            <?php echo $_post['name'];?>
        </P>

        <p>メールアドレス
            <br>
            <?php echo $_post['mail'];?>
        </p>

        <p>年齢
            <br>
            <?php echo $_post['age']."歳";?>
        </p>

        <p>コメント
            <br>
            <?php echo $_post['comments'];?>
        </p>

        <form action="index.html">
            <input type="submit" class="button1" value="戻って修正する"/>
        </form>

        <form action="insert.php" method="post">
            <imput type="submit" class="button2" value="登録する"/>
            <input type="hidden" value="<?php echo $_POST['name'];?>" name="name">
            <input type="hidden" value="<?php echo $_POST['mail'];?>" name="mail">
            <input type="hidden" value="<?php echo $_POST['age'];?>" name="age">
            <input type="hidden" value="<?php echo $_POST['commentS'];?>" name="comments">
        </form>
    </div>
</body>
</html>