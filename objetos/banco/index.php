<?php
require_once 'classes/Cliente.class.php';
require_once 'classes/ContaCorrente.class.php';
require_once 'classes/BancoDB.class.php';
?>
<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Banco Senac</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row" style="margin-top: 50px;">
                <!-- Aqui fica o formulario -->
                <div class="col-6">
                <form method="post" action="cadastrar-conta.php">
                    <fieldset>
                        <legend>Dados do Cliente</legend>
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" name="nome" id="nome" autofocus="on">
                        </div>
                        <div class="form-group">
                            <label for="cpf">CPF</label>
                            <input type="text" class="form-control" name="cpf" id="cpf">
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>Dados da Conta</legend>
                        <div class="form-group">
                            <label for="agencia">Agencia</label>
                            <input type="text" class="form-control" name="agencia" id="agencia">
                        </div>
                        <div class="form-group">
                            <label for="conta">Conta</label>
                            <input type="text" class="form-control" name="conta" id="conta">
                        </div>
                        <div class="form-group">
                            <label for="saldo">Saldo</label>
                            <input type="text" class="form-control" name="saldo" id="saldo">
                        </div>
                    </fieldset>
                    <br>
                    <button type="submit" class="btn btn-success">Cadastrar</button>
                </form>
                </div>
                <!-- Aqui fica a tabela -->
                <div class="col-6">
                    <fieldset>
                        <legend>Lista de Contas</legend>
                        <table class="table table-striped table-hover">
                            <?php
                                $banco = new BancoDB();
                                $contas = $banco->listaTodas();
                            ?>
                            <thead>
                                <tr>
                                    <th>Agencia</th>
                                    <th>Conta</th>
                                    <th>Cliente</th>
                                    <th>CPF</th>
                                    <th>Saldo</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($contas as $conta): ?>
                                    
                                    <tr>
                                    <td><?=$conta->getAgencia();?></td>
                                    <td><?=$conta->getNumero();?></td>
                                    <td><?=$conta->getCliente()->getNome();?></td>
                                    <td><?=$conta->getCliente()->getCpf();?></td>
                                    <td><?=$conta->getSaldo();?></td>
                                    <td>
                                    <form method='post' action="editar-conta.php">
                                     <input type="text" name="agencia" value="<?=$conta->getAgencia();?>">
                                     <input type="text" name="numero" value="<?=$conta->getNumero();?>">
                                     <input type="text" name="nome" value="<?=$conta->getCliente()->getNome();?>">
                                     <input type="text" name="cpf" value="<?=$conta->getCliente()->getCpf();?>">
                                     <input type="text" name="saldo" value="<?=$conta->getSaldo();?>">
                                    <button type="submit" class ="btn btn-primary">
                                    <i class="fas fa-pencil-alt">
                                    </i></button></td>
                                    </form>
                                    <td>
                                        <form method='post' action="excluir-conta.php">
                                        <input type="hidden" name="conta" value="<?=$conta->getNumero();?>">
                                        <button type="submit" class ="btn btn-primary">
                                            <i class="far fa-times-circle"></i>
                                        </button>
                                        </form>
                                    </td>
                                </tr>
                            
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </fieldset>
                    
                </div>
            </div>
        </div>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    </body>
</html>