<?php
class Bolo{
    private $tipo;
    private $nome;
    private $sabor;
    private $peso;
    private $preco;

    private $untada = false;
    

    //Tipo
    public function getTipo() {
        return $this->tipo;
      }

      public function setTipo($tipo) {
        $this->tipo= $tipo;
      }

      //Nome
      public function getNome() {
        return $this->nome;
      }

      public function setNome($nome) {
        $this->nome= $nome;
      }

      //Sabor
      public function getSabor() {
        return $this->sabor;
      }

      public function setSabor($sabor) {
        $this->sabor= $sabor;
      }

      //Peso
      public function getPeso() {
        return $this->peso;
      }

      public function setPeso($peso) {
        $this->peso= $peso;
      }

      //Preço
      public function getPreco() {
        return $this->preco;
      }

      public function setPreco($preco) {
        $this->preco= $preco;
      }

       //UntarForma
      public function getUntada() {
        return $this->untada;
      }

      public function setUntada($untada) {
        $this->untada = $untada;
      }


      public function coberturaAdicionalChocolate()
      {
        print("Bolo com cobertura adicional"); 
        $this ->setPreco($this->getPreco()+15);
      }


      //Inserindo a Massa
      public function inserirMassa()
      {
        if($this -> getUntada() == false)
        {
            print("Forma Não foi Untada, impossivel de colocar a massa.");
        }
        else 
        {
        print("Estou Untada e pronta para assar.");
        }
      }

      //Untar forma
        public function untarForma()
        {
            $this->setUntada($this-> getUntada(true));
            print("Estou Untada.");
        }

        public function limparForma()
        {
            $this->setUntada($this -> getUntada(false));
            print("Forma foi Limpa.");
        }

        public function desinformar()
        {
          print("Estou desenformado");
        }

        public function rechear()
        {
          print("Estou recheando");
        }
}
 ?>