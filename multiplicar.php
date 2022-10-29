parte 1
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

parte 2

<?php
     for ($column = 1; $column <= 7 ; $column++) 
         echo nl2br("\t $column");

    for ($row = 1; $row <= 7 ; $row++){
        
        echo nl2br("\n $row");
        
        for ($column = 1; $column <= 7 ; $column++){
            $result = $column;

            if ($column === 1) {
                $result = $row;
              }

            if ($column >= 1) {
                $result = $row * $column;
              }
            echo nl2br("\t $result");
      
        }
    }
?>

parte 3

<?php
     for($column = 1; $column <= 7; $column++) 
     echo nl2br("\t $column");


     for($row = 2; $row <= 7; $row++){
        
        echo nl2br("\n $row");

        
        for ($column = 2; $column <= 7; $column++){
            $result = $column;
            if ($column === 0){
                $result = $row;
              }

            if ($column >= 1){
                $result = $row * $column;
              }
            echo nl2br("\t $result");
        
      
        }
     }
     
?>
