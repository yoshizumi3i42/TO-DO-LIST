<?php
// タイムゾーンを設定
date_default_timezone_set('Asia/Tokyo');
$date = date("Y/m/d H:i:s");
$filename = 'toukou_1.txt'; /*保存先にファイル名を$filenameに代入*/

    $fp = fopen($filename,'a'); /*ファイルを追記モードで開く*/

    fwrite($fp,$date."\n"); /*情報をファイルに書き込む*/

    fclose($fp); /*ファイルを閉じる*/
?>

<?php
$fp = fopen('data.csv', 'a+b');
$num = count( file('toukou_1.txt')); /*ファイルのデータの行数をかぞえて＄numに代入*/
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    fputcsv($fp, [$_POST['name'], $_POST['soudan'],$_POST['class'],$date,$num]);
    rewind($fp);
}
while ($row = fgetcsv($fp)) {
    $rows[] = $row;
}
fclose($fp);
?>

<!DOCTYPE html>
<html lang="bb">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="csss/style.css" rel="stylesheet" type="text/css" media="all">
    <script src="jss/script.js" defer></script>
    <script src="jss/kanrisyayou.js" defer></script>
	<title>掲示板</title>
    <meta name="desdription" content="掲示板"/>
</head>
<body>
<div class="heder">
<div class="top"><a href="http://localhost/test/test.php">トップ画面</a></div>
<div class="hyou"><a href="http://localhost/test/test.php">TO DOリスト</a></div>
<div class="mypage"><a href="http://localhost/test/test.php">マイページ</a></div>
</div>

<div id="loading">
		<img class="spinner" src="images/loading.gif" alt="" />
 </div>
<div class="main">
<form action="" method="Kanri">
    <div class="kanri"><span class="kanri">管理者用</span><input type="text" name="kanri" value="" id="kanri">
    <input id="kanribtn" type="button" value="実行" onclick="alertButton()" disabled></div><br>
    </form>
  <div class="title">
    <h1>掲示板</h1>
    <img class="titlepng" src="images/9278.png" width="200px" height="100px">
  </div>
  <div class="form">
<section>
    <div class="Form">
    <h2>新規投稿</h2>
    <form action="" method="post">
        <div class="name"><span class="label">名前：</span><input type="text" name="name" value="" id="name"></div><br>
        <div class="name"><span class="Class">クラス：</span><input type="text" name="class" value="" id="class"></div><br>
        <div class="name"><span class="text">相談内容：</span><textarea name="soudan" cols="30" rows="3" maxlength="500" wrap="hard" id="textarea"></textarea></div> <br>
        
        <input id="btn" type="submit" value="送信する" disabled>
</form>
</div>
</section>
  <img class="formpng" src="images/9277.png" width="800px" height="270px">
</div>
<section class="toukou">
    <h2>相談一覧</h2>
<?php if (!empty($rows)): ?>
    <ur>
<?php foreach ($rows as $row): ?>
    <?=$row[3]?>
    <li><?=$row[4]?>   <?=$row[1]?> (<?=$row[2]?>、<?=$row[0]?>)</li>
    <p></p>

<?php endforeach; ?>
    </ul>
<?php else: ?>   
    <p>相談の投稿はまだありません</p>
<?php endif; ?>
</section>

</section>
</div>
<p id="page-top"><a href="#">Page Top</a></p>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
</body>
</html>