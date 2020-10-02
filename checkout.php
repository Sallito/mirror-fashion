<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Checout Mirror Fashion</title>
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="css/bootstrap-flatly.css">
        
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">Mirror Fashion</a>
                <button class="navbar-toggle" type="button"
                data-target=".navbar-collapse" data-toggle="collapse">
                <span class="glyphicon glyphicon-align-justify"></span>
                </button>
            </div>
            <ul class="nav navbar-nav collapse navbar-collapse ">
                <li><a href="sobre.php"><span class="glyphicon glyphicon-home"></span> Sobre</a></li>
                <li><a href="#">Ajuda</a></li>
                <li><a href="#">Perguntas frequentes</a></li>
                <li><a href="#">Entre em contato</a></li>
            </ul>
        </nav>
        <style>
            .navbar{
                margin: 0;
            }
        </style>
        <div class="jumbotron">
            <div class="container">
                <h1>Ótima escolha!</h1>

                <p>Obrigado por comprar na Mirror Fashion! 
                Preencha seus dados para efetivar a compra.</p>
            </div>
        </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-lg-3">   
                        <div class="panel panel-success">
                            
                            <div class="panel-heading">
                                <h2 class="panel-title">Sua compra</h2>
                            </div>
                            <div class="panel-body">
                                <img src="img/produtos/foto2-<?= $_POST["cor"] ?>.png" alt="" class="img-thumbnail img-responsive" >
                                <dl>
                                    <dt>Cor</dt>
                                    <dd><?= $_POST["cor"] ?></dd>
                                    <dt>Tamanho</dt>
                                    <dd><?= $_POST['tamanho'] ?></dd>
                                    <dt>Produto</dt>
                                    <dd><?= $_POST['nome']?></dd>
                                    <dt>Preço</dt>
                                    <dd><?= $_POST['preco']?></dd>
                                </dl>
                            </div>
                        </div> 
                    </div>
                    <form action="" class="col-md-8 col-lg-9">
                        <div class="row">
                            <fieldset class="col-md-6">
                                <legend>Dados Pessoais</legend>
                                <div class="form-group">
                                    <label for="nome">Nome Completo</label>
                
                                    <div class="input-group">
                                        <span class="input-group-addon">Aa</span>
                                        <input type="text" class="form-control" id="nome" name="nome" autofocus required>                                    
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">@</span>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="email@exemplo.com">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="cpf">CPF</label>
                                    <input type="text" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00" required>
                                </div>
                                <div class="checkbox">
                                    <label for="">
                                        <input type="checkbox" value="sim" name="span" checked>
                                        Quero receber span da Mirror Fashion
                                    </label>
                                </div>
                            </fieldset>
                            <fieldset class="col-md-6">
                                <legend>Cartão de Crédito</legend>
                                <div class="form-group">
                                    <label for="numero-cartao">Número - CCV</label>
                                    <input type="text" class="form-control" id="numero-cartao" name="numero-cartao">
                                </div>
                                <div class="form-group">
                                    <label for="bandeira-cartao">Bandeira</label>
                                    <select class="form-control" name="bandeira-cartao" id="bandeira-cartao">
                                        <option value="master">Master Card</option>
                                        <option value="visa">Visa</option>
                                        <option value="amex">American Express</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="validade-cartao">Validade</label>
                                    <input type="month" class="form-control" name="validade-cartao" id="validade-cartao">
                                </div>
                            </fieldset>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg pull-right">
                            <span class="glyphicon glyphicon-thumbs-up"></span>    
                            Confirmar Pedido
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.js"></script>
    </body>
</html>