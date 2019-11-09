<?php
/**
 * Created by PhpStorm.
 * User: aparicio da silva
 * Date: 15/11/2018
 * Time: 16:06
 */
require_once('.\util\LatexTemplate.php');
require_once('.\model\ModelArquivo.php');

try {

	ModelArquivo::grava('.\Arquivos/', 'anexo_iv_requerimento_de_orientacao.tex','anexo4.tex');
	LatexTemplate::download('.\Arquivos/','anexo4.tex', 'requerimento_de_orientacao.pdf');
	} catch(Exception $e) {
    echo $e -> getMessage();
	}

?>