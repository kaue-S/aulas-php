<?php
    define("ESCOLA", "Senac");
    $curso = "Téc. Informática para internet";
    $tecnologias = ["HTML", "CSS", "JS", "PHP"];

    function verificaIdade(int $idade):string {
        return $idade >= 18 ? "Maior" : "menor";
    }
?>