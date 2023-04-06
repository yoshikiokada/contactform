<?php
Mb_internal_encording("utf8");

$pdo = ner PDO("mysql:dbname=lesson01;host=localhost;","root","");

$pdo->exec("insert into contactform(name,mail,age,comments)
value('".$_POST['name']."','".$_POST['mail']."','".$_POST['age']."','".$_POST['comments']."');");

?>

<!doctype html>
<html lang="ja">

<head>
<meta harset="utf-8">
 <title>お問い合わせフォームを作る</title>
</head>

<body>

 <h1>お問い合わせフォーム</h1>

 <div class="confirm">
    <p>お問い合わせ有難うございました。<br>３営業日以内に担当者よりご連絡差し上げます。
    </p>
</div>

</body>
</html>
