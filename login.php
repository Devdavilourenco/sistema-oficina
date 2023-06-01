<!DOCTYPE html>
<html>
    <head>

        
                        
        
        
        
                <style type="text/css">
                        html,
                        body {
                            height: 100%;
                        }
                        html {
                            display: table;
                            margin: auto;
                        }
                        body {
                            display: table-cell;
                            vertical-align: middle;
                            background: #4ECDC4;
                        }

                        #login-page {
                            width: 500px;
                        }

                        .card {
                            /*      position: absolute;
                                 left: 50%;
                                 top: 50%;
                                 -moz-transform: translate(-50%, -50%)
                                 -webkit-transform: translate(-50%, -50%)
                                 -ms-transform: translate(-50%, -50%)
                                 -o-transform: translate(-50%, -50%)
                                 transform: translate(-50%, -50%); */
                        }

                    </style>


                    <!--Import Google Icon Font-->
                    <meta charset="UTF-8"> <!-- comment -->
                    <title>HOME</title>
                    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
                    <!--Import materialize.css-->
                    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

                    <!--Let browser know website is optimized for mobile-->
                    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
                </head>

                <body ng-app="mainModule" ng-controller="mainController">



                    <div id="login-page" class="row">
                        <div class="col s12 z-depth-6 card-panel">
                            <form  action="recebe_login.php" method="post" class="login-form">
                                <div class="row">
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">mail_outline</i>
                                        <input class="validate" id="email" type="email" name="email">

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">lock_outline</i>
                                        <input id="password" type="password" name="senha">

                                    </div>
                                </div>
                                <div class="row">          

                                </div>
                                <div class="row">
                                    <div class="input-field col s12">


                                        <button class="btn waves-effect waves-light red" type="submit" name="action">Logar
                                            <i class="material-icons right">send</i>
                                        </button>



                                    </div>
                                </div>

                        </div>

                    </form>
                </div>
            </div> 

            <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
            <script type="text/javascript" src="js/materialize.min.js"></script>
        </body>
    </html>