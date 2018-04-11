<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
  </head>
  <body>
    <?php
        require_once './dns_records.php';

        $tmp = $_REQUEST['text'];
        $ans=get_mx($tmp);

        for( $i=0; $i < count($ans); $i++){
          echo $ans[$i]."<br>\n";
        }
    ?>
  </body>
</html>