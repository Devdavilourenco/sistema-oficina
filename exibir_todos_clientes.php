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
                    <li><a class="blue-text lighten-4">Área do Cliente</a></li>
                    
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
        
            
        
        
        
           
            <table class="bordered light">
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
                    </tr>
                </thead
                
                <tbody>
                     <?php
                       include './conexao.php';
                       
                       
                       $sql = "SELECT * FROM cliente";
                       $resultado = mysqli_query($conn, $sql);
                       while ($dados = mysqli_fetch_array($resultado)) {
                           ?>
                             <tbody>
                                 <tr>
                                    <td><?php  echo $dados['id'] ?> </td>
                                    <td><?php  echo $dados['nome'] ?> </td>
                                    <td><?php  echo $dados['email'] ?> </td>
                                    <td><?php  echo $dados['senha'] ?> </td>
                                    <td><?php  echo $dados['cpf'] ?> </td>
                                    <td><?php  echo $dados['rg'] ?> </td>
                                    <td><?php  echo $dados['telefone'] ?> </td>
                                    <td><?php  echo $dados['endereco'] ?> </td>
                                    <td><i class="blue-text material-icons">edit</i>
                                    <td><i class="blue-text material-icons">delete</i>
                                    <td><i class="blue-text material-icons">dehaze</i>
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
