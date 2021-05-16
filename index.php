<?php
    require './conn.php';

    //Recebe todos os dados do Formulário em um array $post
    $post = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    $select = $conn->query("SELECT * FROM cadastro");
    
    //Se não está vazio o campo nome
    // Valida se tem dados no campo nome. Aceita os outros
    //campos como vazios
    if(!empty($post['nome'])){
        //print_r($post);
        $nome = $post['nome'];
        $email = $post['email'];
        $fone = $post['fone'];
        //echo 'nome:'; echo $nome; echo $email; echo $fone;
        
        $sql = "INSERT INTO cadastro (nome, email, fone) VALUES ( '$nome', '$email', '$fone')";
        if (mysqli_query($conn, $sql)){
            echo "Novo cadstro feito";
        } else {
            echo "Error:" . $sql . "<br>" . mysqli_error($conn);
        }
        Mysqli_close($conn);


    }

    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud: Php7 e MySql</title>
</head>
<body>
<h1>Crud PHP7 e MySql</h1>

<form action="" method="post">
<label for="nome">Nome</label>
<input type="text" name="nome" id="nome" value="">
<br>
<label for="email">E-mail</label>
<input type="text" name="email" id="email" value="">
<br>
<label for="fone">Telefone</label>
<input type="text" name="fone" id="fone" value="">
<br>
<input type="submit" value="Gravar">

</form>
<br>
<br>
<hr>
<table border='1' width="100%">
    <tr>
        <th>#</th>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Fone</th>
    </tr>
    
        <?php
        //A função mysqli_fetch_assoc() é usada para retornar uma matriz associativa representando a próxima linha no conjunto de resultados 
        //representado pelo parâmetro result, aonde cada chave representa o nome de uma coluna do conjunto de resultados.
        //Em outras palavras, retorna cada linha da busca no Banco de Dados.
           while($linhas = $select->fetch_assoc()){  
        ?>
    <tr>
            <td><?=$linhas['id'] ?></td>
            <td><?=$linhas['nome'] ?></td>
            <td><?=$linhas['email'] ?></td>
            <td><?=$linhas['fone'] ?></td>
    </tr>
    <?php } ?>
</table>
    
</body>
</html>