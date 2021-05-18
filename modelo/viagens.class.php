<?php
class Viagens {

  private $nome;
  private $email;
  private $cpf;
  private $idade;
  private $origem;
  private $destino;
  private $quantidadePassagem;
  private $diaIda;
  private $mesIda;
  private $hospedagem;
  private $formaPagamento;

  public function __construct() {

  }

	public function __get($atributo) {
		return $this->$atributo;
	}

	public function __set($atributo,$valor) {
		$this->$atributo = $valor;
	}

  public function calcularViagem() {
    if ($this->destino == 'Baía do Sancho, Fernando de Noronha') {
      return $this->quantidadePassagem * 385.00;
    } else if ($this->destino == 'Praia dos Nativos, Bahia') {
      return $this->quantidadePassagem * 300.00;
    } else if ($this->destino == 'Praia de Antunes, Alagoas') {
      return $this->quantidadePassagem * 295.99;
    } else if ($this->destino == 'Canoa Quebrada, Ceará') {
      return $this->quantidadePassagem * 290.00;
    } else if ($this->destino == 'Porto de Galinhas, Pernambuco') {
      return $this->quantidadePassagem * 305.95;
    } else if ($this->destino == 'Praia do Amor, Rio Grande do Norte') {
      return $this->quantidadePassagem * 299.99;
    } else if ($this->destino == 'Ilha de Boipeba, Bahia') {
      return $this->quantidadePassagem * 405.99;
    } else {
      return $this->quantidadePassagem * 300.99;//Barra Grande, Piauí
    }
  }

  public function diaDaIda() {
    if ($this->dataIda == '1') {
      return "1";
    } else if ($this->dataIda == '2') {
      return "2";
    } else if ($this->dataIda == '3') {
      return "3";
    } else if ($this->dataIda == '4') {
      return "4";
    } else if ($this->dataIda == '5') {
      return "5";
    } else if ($this->dataIda == '6') {
      return "6";
    } else if ($this->dataIda == '7') {
      return "7";
    } else if ($this->dataIda == '8') {
      return "8";
    } else if ($this->dataIda == '9') {
      return "9";
    } else if ($this->dataIda == '10') {
      return "10";
    } else if ($this->dataIda == '11') {
      return "11";
    } else if ($this->dataIda == '12') {
      return "12";
    } else if ($this->dataIda == '13') {
      return "13";
    } else if ($this->dataIda == '14') {
      return "14";
    } else if ($this->dataIda == '15') {
      return "15";
    } else if ($this->dataIda == '16') {
      return "16";
    } else if ($this->dataIda == '17') {
      return "17";
    } else if ($this->dataIda == '18') {
      return "18";
    } else if ($this->dataIda == '19') {
      return "19";
    } else if ($this->dataIda == '20') {
      return "20";
    } else if ($this->dataIda == '21') {
      return "21";
    } else if ($this->dataIda == '22') {
      return "22";
    } else if ($this->dataIda == '23') {
      return "23";
    } else if ($this->dataIda == '24') {
      return "24";
    } else if ($this->dataIda == '25') {
      return "25";
    } else if ($this->dataIda == '26') {
      return "26";
    } else if ($this->dataIda == '27') {
      return "27";
    } else if ($this->dataIda == '28') {
      return "28";
    } else if ($this->dataIda == '29') {
      return "29";
    } else if ($this->dataIda == '30') {
      return "30";
    } else {
      return "31";
    }
  }

  public function mesDaIda() {
    if ($this->mesIda == 'Janeiro') {
      return "Janeiro";
    } else if ($this->mesIda == 'Fevereiro') {
      return "Fevereiro";
    } else if ($this->mesIda == 'Março') {
      return "Março";
    } else if ($this->mesIda == 'Abril') {
      return "Abril";
    } else if ($this->mesIda == 'Maio') {
      return "Maio";
    } else if ($this->mesIda == 'Junho') {
      return "Junho";
    } else if ($this->mesIda == 'Julho') {
      return "Julho";
    } else if ($this->mesIda == 'Agosto') {
      return "Agosto";
    } else if ($this->mesIda == 'Setembro') {
      return "Setembro";
    } else if ($this->mesIda == 'Outubro') {
      return "Outubro";
    } else if ($this->mesIda == 'Novembro') {
      return "Novembro";
    } else {
      return "Dezembro";
    }
  }

  public function calcularValorTotal() {
    if ($this->hospedagem == 'Sim') {
      return $this->calcularViagem() + 150.00;
    } else {
      return $this->calcularViagem();
    }
  }

  public function mostrarData() {
    return date ("d/m/Y");
  }

  public function mostrarHora() {
    return date ('H:i');
  }

  public function codigoPromocional() {
    $numeros = range (1, 50);
    $letras = range ("A", "Z");

    shuffle ($numeros);
    shuffle ($letras);

    return $letras[5]."".$numeros[5]."".$letras[0]."".$numeros[0];
  }

  public function __toString() {
    return '<center>Data do Pedido: '.$this->mostrarData().'</center>'.
           '<center>Hora do Pedido: '.$this->mostrarHora().'</center>'.
           '<center>Insira Esse Código Para Promoção de 10% na Próxima Compra: '.$this->codigoPromocional().'</center>'.
           '<br>Nome: '.$this->nome.'<br>'.
           '<br>Email: '.$this->email.'<br>'.
           '<br>CPF: '.$this->cpf.'<br>'.
           '<br>Idade: '.$this->idade.'<br>'.
           '<br>Origem: '.$this->origem.'<br>'.
           '<br>Destino: '.$this->destino.'<br>'.
           '<br>Quantidade de Passagens: '.$this->quantidadePassagem.'<br>'.
           '<br>Valor da(s) Passagem(ns): '.$this->calcularViagem().'<br>'.
           '<br>Hospedagem: '.$this->hospedagem.'<br>'.
           '<br>Forma de Pagamento: '.$this->formaPagamento.'<br>'.
           '<br>Valor Total: R$ '.$this->calcularValorTotal().'<br>'.
           '<br>Dia de Ida: '.$this->diaDaIda().
           '<br>Mês de Ida: '.$this->mesDaIda();
  }
}
 ?>
