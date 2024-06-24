<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>

<body>
  <p>
  <?php
  function sort_2way($order) {
    // ソートする配列を定義
    $num = array(15, 4, 18, 23, 10);
    
    // 昇順または降順のソートを実行
    if ($order === true) {
      echo '昇順にソートします。<br>';
      sort($num);
    } elseif ($order === false) {
      echo '降順にソートします。<br>';
      rsort($num);
    }

    // ソート結果を表示
    foreach ($num as $val) {
      echo $val . "<br>";
    }
  }

  // 関数を呼び出す (ここでは例として昇順を指定)
  sort_2way(true);
  sort_2way(false);
  ?>
  </p>
</body>

</html>