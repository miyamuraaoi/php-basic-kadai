<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>

<body>
  <P>
    <?php
    // ソートする配列を宣言
    $nums = [15, 4, 18, 23, 10 ];
    $order = TRUE;

    function sort_2way() {
      echo '昇順にソートします。<br>';

      $fruits = array(15, 4, 18, 23, 10);
      sort($fruits);
      foreach ($fruits as $key => $val) {
        echo  $val . "<br>";
      }
  
      echo '降順にソートします。<br>';
      $fruits = array(15, 4, 18, 23, 10);
      rsort($fruits);
      foreach ($fruits as $key => $val) {
          echo $val . "<br>";
        
      }
    }
    
    sort_2way();
    ?>
  </p>
</body>

</html>