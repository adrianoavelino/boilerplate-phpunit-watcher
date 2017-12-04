<?php
namespace TDD;

class OlaMundo
{

    public function ola($mensagem = "Ola Mundo, ", $nome = "PHPUnit")
    {
        return $mensagem . $nome;
    }
}
