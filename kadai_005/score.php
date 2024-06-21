<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>

<body>
  <p>
    <?php
    $sun = 80 + 60 + 55 + 40 + 100 + 25 + 80 + 95 + 30 + 60;
    $avg = $sun / 10;
    
    echo '合計点'. $sun;
    echo '<br>';
    echo '平均点'. $avg;
?>
  </p>
</body>

</html>