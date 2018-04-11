<?php

  function get_mx($domain){

    getmxrr($domain, $mx_record, $weight);
   
    for( $i=0; $i < count($mx_record); $i++ ){
    echo $mx_record[$i]."  ".$weight[$i]."\n";
    }
  }
?>
