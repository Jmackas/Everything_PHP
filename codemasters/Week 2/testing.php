<?php
    class fruit {
        
      public $brand;
      public $colour = 'red';
        
        public function hello() {
            return "hello";
        }

    }

    $apple = new fruit ();
    $orange = new fruit ();


    echo $apple -> colour;
    echo '<br>';
    echo $orange -> colour;

    
?>
