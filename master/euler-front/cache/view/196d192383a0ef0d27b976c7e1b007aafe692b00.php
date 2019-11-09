<?php
/**
 * Created by PhpStorm.
 * User: aparicio da silva
 * Date: 14/11/2018
 * Time: 16:22
 */

require_once('.\util\LatexTemplate.php');


try {
    //$_POST
    if($_POST['int']==3){}
        LatexTemplate::download('.\Arquivos/','anexo4.tex', 'termo_de_compromisso.pdf');
} catch(Exception $e) {
    echo $e -> getMessage();
}

?>