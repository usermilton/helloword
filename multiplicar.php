<?php
     for ($column = 1; $column <= 7 ; $column++) {
         echo $column;
     }
    for ($row = 1; $row <= 7 ; $row++) {
        for ($column = 1; $column <= 7 ; $column++){
            $result = $column;

            if ($column === 1) {
                $result = $row;
              }

            if ($column >= 1) {
                $result = $row * $column;
              }
            echo $result;
      
        }
    }
?>