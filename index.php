<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
            function chargerClasse ($classe){
                require $classe . '.class.php'; // On inclue la classe correspondante au paramètre passé
            }
            
            spl_autoload_register ('chargerClasse'); // On enregistre la fonction en autoload 
                                                    //pour qu'elle soit appelée dès 
                                                    //qu'on instanciera une classe non déclarée
            $test = new testPHPClass();
            
            $test->AfficheText();
            $test->Calcul();
            
        ?>
    </body>
</html>
