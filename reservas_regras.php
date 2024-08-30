<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Reservas</title>
</head>
<body class="fundofixo">



<nav class="navbar navbar-expanded-md navbar-fixed-top navbar-light navbar-inverse">
 
    <div class="container-fluid">
        <!-- Agrupamento Mobile -->
        <div class="navbar-header">
           
            <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#menupublico">
                <span class="sr-only">Toggle Navegation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
 
            <a href="index.php" class="navbar-brand">
                <img src="img/logo2-2.png" alt="logotipo 27records">
            </a>
            
            
 
        </div>
        <!-- Fecha agrupamento Mobile -->
        <!-- nav direita -->
 
        <div class="collapse navbar-collapse" id="menupublico">
            <ul class="nav navbar-nav navbar-right">
                <li class="active">
                    <a href="index.php">
                    <span class="glyphicon glyphicon-home"></span>
                    </a>
                </li>
                <li><a href="index.php#destaques">DESTAQUES</a></li>
                <li><a href="index.php#produtos">PRODUTOS</a></li>
                <!-- Dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">TIPOS
                    <span class="caret"></span>
                    </a>
                    <!-- Example single danger button -->
                    <ul class="dropdown-menu">
                        <?php foreach($rows_tipos as $row){?>
                            <li> <a href="produtos_por_tipo.php?id_tipo=<?php echo $row[0].'&rotulo='.$row[2];?>"><?php echo $row[2] ?></a> </li>
                        <?php }?>
                    </ul>
                </li>
                <!-- Fim do dropdown -->
                <li><a href="index.php#contato">CONTATO</a></li>
                <!-- Inicio formulario busca -->
                <form action="produtos_busca.php" method="get" name="form-busca"
                    id="form-busca" class="navbar-form navbar-left" role="search">
                        <div class="input-group">
                            <input type="search" name="buscar" id="buscar" size="9" class="form-control"
                            aria-label="search" placeholder="Buscar produto" required>
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit">
                                    <span class="glyphicon glyphicon-search"></span>
                                </button>
                                </button>
                            </div>
                        </div>
                </form>
                <li class="active">
                    <a href="admin/index.php">
                        <span class="glyphicon glyphicon-user">&nbsp;ENTRAR</span>
                    </a>
                </li>

                <li class="active">
                    <a href="admin/cadastro_cliente.php">
                        <span class="glyphicon glyphicon-user">&nbsp;CADASTRE-SE</span>
                    </a>
                </li> 
            </ul>
        </div>
    </div>
 
</nav>

<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------ -->
<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------ -->
<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------ -->
<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------ -->

<main class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-offset-2 col-sm-6  col-md-8">
            <h2 class="breadcrumb text-danger">
                <a href="index.php">
                    <button class="btn btn-danger">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </button>
                </a>
                Finalizando pedido de reserva
            </h2>
            <div class="thumbnail">
                <div class="alert alert-danger" role="alert">
                    <form action="Reservas.php" method="post"
                    name="form_Reservas" enctype="multipart/form-data"
                    id="form_Reservas">

                    <div class="h1d"><h1>Regras da casa</h1></div>    
                        <div class="input-group">
                           <span class="input-group-addon">
                                <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
                           </span>
                           <textarea  name="regras" id="regras"
                                cols="20" rows="5"
                                class="form-control"
                                required readonly>
                           
1: O Cliente deve fazer o pedido de reserva no mínimo 36 horas antes da data desejada .
2: A data só pode ser agendada em até no maxímo 60 dias, após o pedido de reserva finalizado.
3: O pedido de reserva pode ser feito apenas uma vez por dia, Para um mesmo cpf. 
                            </textarea>
                        </div>


                        <br>
                    </form>
                </div>
            </div>
        </div>
    </div>


<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------ -->
<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------ -->
<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------ -->
<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------ -->
