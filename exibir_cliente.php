<!DOCTYPE html>
<html>
    <head>
        <!--Import Google Icon Font-->
        <meta charset="UTF-8"> <!-- comment -->
        <title>Exibir Clientes</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>

        <nav>
            <div class="nav-wrapper blue light">
                <ul  class="left blue-text lighten-3">
                    <li><a class="black-text lighten-4">Área do Cliente</a></li>
                    <li><a href="sass.html">Pesq DATA</a></li>
                    <li><a href="badges.html">Pesq CPF</a></li>
                    <li><a href="collapsible.html">Pesq RG</a></li>
                </ul>
                <ul id="nav-mobile" class="right blue-text lighten-3">
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container">
            <p>
            <h6>Clientes Cadastrados</h6>
        </p>
        
            <div class="row">
                <div class="col s6">
            <form action="exibir_cliente.php" method="post">
                <label>Nome de pesquisa: </label>
                <input type="text" name="pesquisa">
                </div>  
                 <div class="col s6">
                <button class="btn waves-effect waves-light" type="submit" name="action">Pesquisa
                <i class="material-icons right">send</i>
                </button>
            </form>
            </div>
        </div>
        
        
        
           
            <table class="bordered highlight">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOME</th>
                        <th>E-MAIL</th>
                        <th>SENHA</th>
                        <th>CPF</th>
                        <th>RG</th>
                        <th>TELEFONE</th>
                        <th>ENDEREÇO</th>
                        <th>EDITAR</th>
                        <th>REMOVER</th>
                        <th>DETALHE</th>
                        <th>Criar OS</th>
                    </tr>
                </thead
                
                <tbody>
                     <?php
                       include './conexao.php';
                       
                       $pesquisa = $_POST['pesquisa'];
                       echo 'Nome Pesquisado:<div class="red-text">' .$pesquisa ."</div> <br>";
                       
                       
                       $sql = "SELECT * FROM cliente WHERE nome='$pesquisa'";
                       $resultado = mysqli_query($conn, $sql);
                       while ($dados = mysqli_fetch_array($resultado)) {
                           ?>
                             <tbody>
                                 <tr>
                                    <td><?php  echo $dados['id'] ?> </td>
                                    <td class="red-text"><?php  echo $dados['nome'] ?> </td>
                                    <td><?php  echo $dados['email'] ?> </td>
                                    <td><?php  echo $dados['senha'] ?> </td>
                                    <td><?php  echo $dados['cpf'] ?> </td>
                                    <td><?php  echo $dados['rg'] ?> </td>
                                    <td><?php  echo $dados['telefone'] ?> </td>
                                    <td><?php  echo $dados['endereco'] ?> </td>
                                    <td><i class="blue-text material-icons" title="Editar">edit</i>
                                    <td><i class="blue-text material-icons" title="Remover">delete</i>
                                    <td><i class="blue-text material-icons" title="Detalhes OS">dehaze</i>
                                    <td><i class="red-text material-icons" title="Adcionar OS">control_point</i>
 </td>
                                 </tr>
                                 <?php  } ?>
                              </tbody>
                          
                         
                       
                    
                    
                </tbody>
                
            </table>    
    
    
    
    
    </div>
        
        
        

        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
</html>
