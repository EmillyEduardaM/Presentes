<?php

include './model/Conexao.class.php';
include './model/lista.class.php';
include './model/produto.class.php';
include './model/usuario.php';
include './control/controller.php';

$c = new Controller();

$c->index();

if($c->cadastroIndex) echo $c->cadastroIndex;
if($c->loginIndex) echo $c->loginIndex;

?>
teste
<!doctype html>
<html>
  <head>
    <meta charset="UTF-8">
      <title></title>
  </head>
  <body>
     <form method="POST">
                <h2><!-- comment -->
                    <strong>Efetue o login</strong><!-- comment -->
                </h2><!-- comment -->
                <hr><!-- comment -->
                <p><input type="email" name="email" placeholder="Digite seu email" required/></p><!-- comment -->
                <p><input type="password" name="senha" placeholder="Digite sua senha" required/></p>
                <label class ="checkbox"><!-- comment -->
                    <input type="checkbox" name="lembrete"> Lembrar Senha</label>
                <p><button name="login" type="submit">Entrar</button></p>               
            </form>
        </section>
        
        <section class="col-md-6">
            <form method="POST">
                <hr>
                <h2>
                    <strong> Cadastre-se agora</strong><!-- comment -->
                </h2><!-- comment -->
                <hr><!-- comment -->
                <p><input type="email" name="email" placeholder="Digite seu email" required/></p><!-- comment -->
                <p><input type="nome" name="nome" placeholder="Digite seu nome" required/></p>
                <p><input type="password" name="senha" placeholder="Digite sua senha" required/></p>
                <p><button name="cadastrar" type="submit">Cadastrar</button></p>
             </form>
        </section>
            </div>
        
        <section class="row clearfix">
            <hr><!-- comment -->
            <h2><strong>Como criar sua própria lista</strong><!-- comment -->
            </h2>
            <hr><!-- comment -->
            <div>
            <div>
                <img alt="tutorial_1" src="bootstrap/img/index/tutorial_1.jpg"><!-- comment -->
            </div>
            <div>
                <p>
                   Texto Explicativo 
                </p><!-- comment -->
            </div>
            </div>
            <hr>
        </section>
    </div>
    </body>
</html>