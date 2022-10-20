  <?php
//display errors
ini_set("display_erros", 1);

error_reporting(E_ALL);

function criarArrayAleatorio($n){

    $array = array();
    for($i=0; $i < $n; $i++){
        $array[$i] = rand(0, 100);
    
    }

        return $array;
}

?>
