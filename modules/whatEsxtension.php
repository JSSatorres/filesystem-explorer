<?php
function isaFolder($archivo){
  
        $extension = pathinfo($archivo, PATHINFO_EXTENSION);
        // print_r($extension);
        switch ($extension) {
            case 'txt':
                echo "<li class='txt'>" . $archivo . "</li>";
                break;
                case 'img':
                    echo "<li class='img'>" . $archivo . "</li>";
                    break;
            }
    }
