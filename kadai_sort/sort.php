<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        function sort_2way($array,$order){
          if($order){
            echo '昇順にソートします。<br>';
            sort($array);
          } else {
            echo '降順にソートします。<br>';
            rsort($array);
          }
          foreach($array as $num){
            echo $num . '';
          }
          echo'<br>';
        }
        $nums=[15,4,18,23,10];
        sort_2way($nums,TRUE);
        sort_2way($nums,FALSE);
        ?>
    </p>
</body>

</html>