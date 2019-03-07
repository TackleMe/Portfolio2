<?php
  $fp = fopen("info2.txt", "r");
  $line = array();

  if ($fp) {
    while (!feof($fp)) {
      $line[] = fgets($fp);
    }
    fclose($fp);
  }
?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>テニスサークル交流会</title>
  </head>
  <body>
    <h1>テニスサークル交流会</h1>
    <h2>お知らせ</h2>
    <?php
      if (count($line) > 0) {
        for ($i=0; $i < count($line); $i++) {
          if ($i == 0) {
            echo '<h3>' . $line[0] . '</h3>';
          } else {
            echo $line[$i] . '<br>';
          }
        }
      } else {
        echo 'お知らせはありません。';
      }
    ?>
  </body>
</html>


<!-- <!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>掲示板</title>
  </head>
  <body>
    <h1>掲示板</h1>
    <form action="" method="post">
      名前: <input type="text" name="name" value=""><br>
      本文: <input type="text" name="text" value=""><br>
      <button type="submit">投稿</button>
     <label for="my_name">お名前: </label>
     <input type="text" id="my_name" name="my_name" maxlength="255" value="">
     <input type="submit" value="送信する">
    </form>
  </body>
</html> -->





























