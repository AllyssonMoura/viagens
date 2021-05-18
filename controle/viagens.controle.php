<?php
session_start();
include '../modelo/viagens.class.php';

if (isset($_POST['nome'])&&
    isset($_POST['email'])&&
    isset($_POST['cpf'])&&
    isset($_POST['idade'])&&
    isset($_POST['origem'])&&
    isset($_POST['seldestino'])&&
    isset($_POST['selquantidadepassagem'])&&
    isset($_POST['rdhospedagem'])&&
    isset($_POST['seldiaida'])&&
    isset($_POST['selmesida'])&&
    isset($_POST['rdformapagamento'])) {

      $viagens = new Viagens();

      $viagens->nome = $_POST['nome'];
      $viagens->email = $_POST['email'];
      $viagens->cpf = $_POST['cpf'];
      $viagens->idade = $_POST['idade'];
      $viagens->origem = $_POST['origem'];
      $viagens->destino = $_POST['seldestino'];
      $viagens->quantidadePassagem = $_POST['selquantidadepassagem'];
      $viagens->hospedagem = $_POST['rdhospedagem'];
      $viagens->diaIda = $_POST['seldiaida'];
      $viagens->mesIda = $_POST['selmesida'];
      $viagens->formaPagamento = $_POST['rdformapagamento'];

      $_SESSION ['mensagem'] = 'Pedido relizado com sucesso!';
      $_SESSION ['viagens'] = serialize ($viagens);

      header ("location:../visao/contato.resposta.php");
    } else {
      ("location:../visao/viagens.erro.php");
    }
 ?>
