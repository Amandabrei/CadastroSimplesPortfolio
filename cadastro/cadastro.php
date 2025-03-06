<?php
  if(isset($_POST['submit']))
  //  {
  //    print_r('Nome:'. $_POST['name']);
  //     print_r('<br>');
  //     print_r('Descrição:' . $_POST['descricao']);
  //     print_r('<br>');
  //     print_r('Data do Projeto:' . $_POST['data_projeto']);
  //   }  
    include_once ('config.php');

    $nome = $_POST['name'];
    $descricao = $_POST['descricao'];
    $data_projeto = $_POST['data_projeto'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, descricao, data_projeto) VALUES
    ('$nome', '$descricao', '$data_projeto')");

?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Meu Portfólio</title>
</head>
<h1>Bem-vindo ao Meu Portfólio</h1>
<body>
    <div class="box">
        <form action="cadastro.php" method="POST">  
        <fieldset>
                <legend><b>Projetos</b></legend>
            <br>
            <div class="inputBox">
                <input type="text" name="name" id="nome" class="inputUser" required>
                <label for="nome" class="labelInput">Nome do Projeto</label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="text" name="descricao" id="descricao" class="inputUser" required>
                <label for="descricao" class="labelInput">Descição do Projeto</label>
            </div>     
            <br>
            <div class="inputBox">
                <label for="data_projeto"><b>Data do Projeto</b></label>
                <input type="date" name="data_projeto" id="data_projeto" required>
            </div>     
            <br><br>
            <input type="submit" name="submit" id="submit">       
                    
        </fieldset>  
        </form> 
    </div>
        
</body>
</html>