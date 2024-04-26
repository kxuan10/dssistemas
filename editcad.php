<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <?php
    include "conexao.php";
    $id = $_GET['id'] ?? '';
    $sql = "SELECT * FROM usuario WHERE id = $id ";

    $dados = mysqli_query($conexao,$sql);
    $linha = mysqli_fetch_assoc($dados);

    ?>
  <div class="container">
    <div class="row">
      <div class="col">
        <h1>Cadastre-se</h1>
        <form action="cad.php" method="post">
          <div class="mb-3">
            <label for="nome" class="form-label">Nome Completo</label>
            <input type="text" class="form-control" name="nome" required value="<?php echo $linha['nome']; ?>">


            <label for="endereco" class="form-label">Endereço</label>
            <input type="text" class="form-control" name="endereco" value="<?php echo $linha['endereco']; ?>">


            <label for="telefone" class="form-label">Telefone</label>
            <input type="text" class="form-control" name="telefone" value="<?php echo $linha['telefone']; ?>">
            

            <label for="data" class="form-label">Data de Nascimento</label>
            <input type="text" class="form-control" name="telefone" value="<?php echo $linha['data']; ?>">
            
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" name="telefone" value="<?php echo $linha['email']; ?>">
            
            <label for="senha" class="form-label">Senha</label>
            <input type="text" class="form-control" name="telefone" value="<?php echo $linha['senha']; ?>">
             <br>

            <input type="submit" class="btn btn-success">


          </div>

        </form>
        <a href="inicio.php" class=" btn btn-info">Voltar ao Inicio</a>




      </div>

    </div>
  </div>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>