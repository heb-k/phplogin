<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revisão PHP + MySQL</title>
    <link rel="stylesheet" href="css/bulma.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/login.css"/>
</head>
<body>
    <section>
       <div>
           <form action="login.php" method="POST">
              <div>
                   <div> 
                       <input type="text" name="usuario" placeholder="Digite seu usuario" autofocus="">
                   </div> 
              </div>
              <div>
                   <div> 
                       <input type="password" name="senha" placeholder="Digite sua senha">
                   </div>
              </div>
              <button type="submit">Entrar</button>
           </form>
       </div>
    </section>
</body>
</html>