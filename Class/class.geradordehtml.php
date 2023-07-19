<?php
require_once("class.Aluno.php");
require_once("class.Disciplina.php");
//Objetivo de exercício é de explicar classes estáticas

class GeradorDeHTML
{
    public static function select($values, $idValue, $descValue, $controlName, $controlID = '', $controlClass = '')
    {
        $control = "<select class='$controlClass' id='$controlID' nome='$controlName'>\n";

        foreach ($values as $item) {
            $control .= "\t<option value='" .
                $item[$idValue] . "'>" . $item[$descValue] . "</option>\n";
        }

        $control .= "</select>";

        return $control;
    }
}



$aluno = new Aluno();
$array = $aluno->listarAlunos();

#dumpF($array);

echo GeradorDeHTML::select($array, 'idaluno', 'nmAluno', 'select01');

$disciplina = new Disciplina();
$arrayD = $disciplina->ListarDisciplinas();

#dumpF($array);

echo GeradorDeHTML::select($arrayD, 'iddisciplina', 'dsdisciplina', 'select02');