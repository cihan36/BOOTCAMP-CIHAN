<?php

function print_film_from($nbr){

        switch($nbr){

            case 3:
                echo "Les trois freres\n";
                break;

            case 6:
                echo "Sixieme sens\n";
                break;
            
            case 0:
                echo "28 jours plus tard\n";
                break;
            default:
                echo "Je ne connais pas.\n";
        }

}

?>