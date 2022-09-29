<?php
$method = $_POST['methods'];
     if ($method == "liceu") {
        shell_exec("ORICE COMANDA/SE POATE SI MYSQL/MONGODB PT AFISARE");
        echo "Liceul Teoretic Grigore Moisil"; 
        header('Refresh: 4; ./index.html');
    }


     if ($method == "clase") {
        shell_exec("-");
        echo "Clasa X";
        header('Refresh: 4; ./index.html');
    }


        if ($method == "elevi") {
        shell_exec("CE COMANDA DORESTI SA EXECUTI (CAT/LS/SE VA AFISA");
        echo "Martin Grecu - Clasa 12 - Filologie";
        header('Refresh: 4; ./index.html');
    }

        if ($method == "profesori") {
        shell_exec("CE COMANDA DORESTI SA EXECUTI (CAT/LS/SE VA AFISA");
        echo "Daniel Iosif - Profesor Filologie";
        header('Refresh: 4; ./index.html');
    }
        if ($method == "note") {
        shell_exec("CE COMANDA DORESTI SA EXECUTI (CAT/LS/SE VA AFISA");
        echo "Martin Grecu - Nota 8 - Materie Filologie";
        header('Refresh: 4; ./index.html');
    }
 


  


?>
