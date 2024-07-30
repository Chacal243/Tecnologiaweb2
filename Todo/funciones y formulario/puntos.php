<?php

    $libro=$_GET['libro'];
    $librero=["piter pan","don cangrejo","minion","verdoso","oso"];

    function busca ($libro,$librero)
    {

        foreach($librero as $contrar){
            $solo=($libro==$contrar)?"encontrado":"inexistente";
        }
        return $solo;
    }

    echo "libro: ".busca($libro,$librero);

?>