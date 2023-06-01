<!DOCTYPE html>
<html>
    <head>
        <script><!-- comment -->
            function ok(){
            setTimeout("window.location='cad_cliente.php'");
            }
            
            function erro(){
            setTimeout("window.location='cad'");
            }
            
            
            </script>
        
        <!--Import Google Icon Font-->
        <meta charset="UTF-8"> <!-- comment -->
        <title>HOME</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>

        
        
        <?php include './menu.php'; ?> 

        <div class="container">
            <h6 class="blue-text lighten-2">Cliente que será cadastrado</h6>
        </div>
        
        <div class="container">
            <table>
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Senha</th>
                        <th>CPF</th>
                        <th>RG</th>
                        <th>Telefone</th>
                        <th>Edereço</th>
                    </tr>
                </thead>
                <?php 
                $nome     = $_POST['nome'];
                $email    = $_POST['email'];
                $senha    = $_POST['senha'];
                $cpf      = $_POST['cpf'];
                $rg       = $_POST['rg'];
                $telefone = $_POST['telefone'];
                $endereco = $_POST['endereco'];
                echo '   
                 <tbody>
                    <tr>
                        <td>' . $nome . '</td>
                        <td>' . $email . '</td>
                        <td>' . $senha . '</td>
                        <td>' . $cpf . '</td>
                        <td>' . $rg . '</td>
                        <td>' . $telefone . '</td>
                        <td>' . $endereco . '</td>
                    </tr>
                 </tbody> ';
                include './conexao.php';
 $inserir = $conn ->query("INSERT INTO cliente   VALUES
     (0,'$nome','$email','$senha','$cpf','$rg','$telefone','$endereco')");      

 if($inserir){
     echo  '<script>ok()<script>';
     echo" <hr><br><p>Cliente cadastrado com sucesso!! <br><hr>";
 }else{
     echo" <hr><br><p>Cliente não cadastrado<br><hr>";
 }
 ?>
     </table>
        </div>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
</html>