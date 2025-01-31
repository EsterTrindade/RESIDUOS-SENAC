<?php
    namespace PHP\ProjetoEco;

    class Pessoa{
        protected string $nome;
        protected int $email;

        public function __construct(string $nome, int $email)
        {
            $this->nome = $nome;
            $this->email = $email;
        }//Fim do método

        public function __get(string $variavel):mixed
        {
            return $this->variavel;
        }//Fim do get

        public function __set(string $variavel, string $novoDado):void
        {
            $this->variavel = $novoDado;
        }//Fim do Set

        public function imprimir():string
        {
            return "<br>Nome: ".$this->nome.
                   "<br>E-mail: ".$this->email;
        }//Fim do Método


    }//Fim da classe Pessoa

    


?>