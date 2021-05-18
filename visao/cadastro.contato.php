<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>

  <body>
    <form action="../controle/viagens.controle.php" method="post">
      <div class="form-group">
        <label for="formGroupExampleInput">Nome</label>
        <input type="text" class="form-control" name="nome" id="formGroupExampleInput" placeholder="Digite Seu Nome">
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput2">Email</label>
         <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite Seu Email">
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput2">CPF</label>
        <input type="number" class="form-control" name="telefone" id="formGroupExampleInput2" placeholder="Digite Seu Telefone">
      </div>
      <div class="form-group">
        <label for="validationTextarea">Idade</label>
        <input type="number" class="form-control" name="idade" id="formGroupExampleInput2" placeholder="Digite Sua Idade">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </body>

</html>
