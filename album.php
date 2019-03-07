<?php
  $images = array();
  $num = 5;

  if ($handle = opendir('./album')) {
    while ($entry = readdir($handle)) {
      if ($entry != "." && $entry != "..") {
        $images[] = $entry;
      }
    }
    closedir($handle);
  }
?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>交流サイト: アルバム</title>
  </head>
  <body>
    <h1>交流サイト: アルバム</h1>
    <p>
      <a href="index.php">トップページに戻る</a>
      <a href="upload.php">写真をアップロードする</a>
    </p>
    <?php
      if (count($images) > 0) {

        $images = array_chunk($images, $num);

        $page = 0;
        if (isset($_GET['page'])  && is_numeric($_GET['page'])) {
          $page = intval($_GET['page']) - 1;
        }
        foreach ($images as $img) {
          echo '<img src= "./album/' . $img . '" height="150">';
        }
      } else {
          echo '<p>画像はまだありません。</p>';
      }
    ?>
  </body>
</html>




















