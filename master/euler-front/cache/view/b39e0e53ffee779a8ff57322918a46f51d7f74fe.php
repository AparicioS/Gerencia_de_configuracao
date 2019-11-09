<?php
/**
 * Created by PhpStorm.
 * User: aparicio da silva
 * Date: 15/11/2018
 * Time: 16:04
 */

try {
	
        if(!file_exists("manual.pdf")) {
            @unlink($f);
            throw new Exception(" Erro ao gerar o arquivo !  ");
        }
        $fp = fopen("manual.pdf", 'rb');
        header('Content-Type: application/pdf');
        fpassthru($fp);

	} catch(Exception $e) {
	echo $e -> getMessage();
	}

?>