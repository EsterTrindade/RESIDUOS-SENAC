<?php
    namespace PHP\ProjetoEco;
    require_once('Pessoa.php');
    use PHP\projetoEco\Pessoa;

    class Funcionario{
        protected int $re;
        protected string $senha;
        
        public function __construct(string $nome, string $email, int $re, string $senha)
        {
            $this->re = $re;
            $this->senha = $senha;
        }

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
            return "<br>RE: ".$this->re.
                   "<br>Senha: ".$this->senha;
        }//Fim do Método


        


    }



?>