<?php
    function calcularMedia($n1, $n2, $n3){
        $media = ($n1 + $n2 + $n3) / 3; 
    }
    function verificarSituacao($media){
        if($media >= 7){
            echo "Você foi aprovado";
        }else{
            echo "Você foi reprovado";
        }
    }
    calcularMedia("7", "7", "7");
?>