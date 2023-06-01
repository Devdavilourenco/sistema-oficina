 <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <meta charset="UTF-8"> <!-- comment -->
      <title>HOME</title>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    
      <script>
          
          
  $(document).ready(function(){
    $('.collapsible').collapsible();
  });
          </script>
    
    </head>

    <body>
       
        <?php
         include './menu.php';
        ?> 
        
        <div class="container">
            <H4>CADASTRO DE CLIENTE</H4>
             <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">add_circle</i>
          <input id="icon_prefix" type="text" class="validate">
          <label for="icon_prefix">First Name</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">phone</i>
          <input id="icon_telephone" type="tel" class="validate">
          <label for="icon_telephone">Telephone</label>
        </div>
      </div>
    </form>
  </div>
                
            </div>
            
            
           
           
             <button class="btn waves-effect  waves-light btn-flat" type="submit" name="action">Submit
                  <i class="material-icons right">send</i>
  </button>
            
        </form>
        
         </div>
        
         
         
         
         
        
          <div class="collapsible-header active"><i class="material-icons">place</i>Second</div>
        
          
          <script>
              $(document).ready(function(){
    $('.collapsible').collapsible();
  });
              </script>
          
          
          
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js">
      $(document).ready(function(){
    $('.collapsible').collapsible();
  });
      
      </script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>