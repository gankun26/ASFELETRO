<?php
    $servername = "localhost";
    $username ="root";
    $password = '';
    $database = "asfeletro";

    $connect = mysqli_connect($servername, $username, $password, $database);

    if(!$connect){
      die("a conexão db falho: ". mysqli_connect_error());
    }


    if(isset($_POST['nome']) && isset($_POST['endereco'])){
        $nome = $_POST['nome'];
        $endereco = $_POST['endereco'];

        $sql = "insert into pedidos (nome, endereco) values ('$nome', '$endereco')";
        $result = $connect->query($sql);
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
      <meta charset="UTF-8">
      <title>contato- full stack eletro</title>
      <link rel="stylesheet" href="./css/estilo.css">
       
       <!-- CSS -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
      integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
       

  </head>
  <body>
      <!---->
    

      <nav class="navbar navbar-dark bg-dark">
           <div class="container">
            <a href="./index.php"><img width="150px" src="./FERREIRA.png" alt="Full Stack Eletro"></a>
            <a href="./produto.php">Produtos</a>
            <a href="./loja.php">Nossas Lojas</a>
            <a href="./contato.php">Contatos</a>
           <div>
         </nav>
      <!---->
     <h2 class="text-danger">Contatos</h2>
     <!---->
     <hr>
     <!---->
     <table border=0 width="100%" cellpadding="20%">
         <tr>
             <td width="50%" align="center">
                 <img src="./email.jpg" width="80px">
                 <font face="Arial" size="4">Contatoeletro@fullstack.com</font>
             </td>
             <!---->
             <td width="50%" align="center">
                <img src="./Whatsapp-logo-pc-600x314.png" width="250px">
                <font face="Arial" size="4">(21)5656-7878</font>
            </td>
         </tr>
     </table>
     <!---->
     <br>
     <br>
     <!---->
       <center>
       <h3>Envie sua reclamação ou sujestão sobre nossa loja, abaixo insira seus dados.</h3>
       </center>
       <form>
       <div class="container">
         <div class="form-group">
           <label for="exampleInputEmaill">Endereço de email</label>
            <input type="email" class="form-control" id="exampleInputEmaill" 
              arial-describedby="emailHelp" placeholder="seu email">
            <small id="emailHelp" class="form-text  text-muted"> Seus Dados seguros Conosco</small> 
         </div>

         <div class="form-group">
           <label for="exampleInputPassword1">Senha</label>
           <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
         </div>

         <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Clique aqui </label><br>
          <button type="submit" class="btn btn-primary">Enviar</button>
         </div>  
         </div>
       </form>
     <!---->
     <br>
     <!---->
     <hr>
     <center>
     <h2 class="h2_contato">Abaixo você pode conferir suas mercadorias!, basta preencher os campos.</h2>
     </center>
     <hr>
     <!---->
       <div class="container">
          <div class="form-group">
           <label for="exampleInputCliente">Cliente</label>
            <input type="email" class="form-control" id="exampleInputCliente" 
              arial-describedby="emailHelp" placeholder="Nome Completo">

              <div class="form-group">
               <label for="exampleInputPassword1">Seus dados(Cpf/Senha)</label>
               <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
             </div>
               <a href="./conexao.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Conferir</a>
            </div>
       </div>
       <!---->
       <hr>
       <center>
       <h2>Realizar Cadastro No sistema!, Basta preencher os campos abaixo.</h2>
       </center>
       <hr>
       <!---->
       <div class="container">
       <form method="post" action="">
       nome:<br>
       <input type="text" name="nome" style="width:500px"><br>
       mensagem:<br>
       <input type="text" name="msg" style="width:500px"><br>
       <br>
       <input type="submit" nome="submit" value="enviar" style="width:505px"><br>
       </form>
       </div>
     <br>

     <?php
           $sql = "select * from pedidos";
           $result = $connect->query($sql);
       
           if($result->num_rows > 0){
             while($rows = $result->fetch_assoc()){
                echo"nome: ", $rows['nome'], "<br>";
                echo"endereco: ", $rows['endereco'], "<br>";
                echo"<hr>" ;
             }
            } else {
             echo"nenhum comentario encontrado";
           }
         ?>

     <br>
     <!---->
     <center>
     <h4 id="fpaga">Formas De Pagamento :</h4>
     <img src="./pagamento.png" alt="Formas De Pagamento">
    </center>
    <!---->
    <center><font face="Arial" size=2>&copy;Recode Pro</font></center>
    <!---->
    
     
  </body>
</html>