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
<?php
include 'reservas_regras.php';
include 'conn/connect.php';
if($_POST){

        $comemorativa = $_POST['com_id'];
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $quantidade = $_POST['quantidade'];
        $data = $_POST['dataHora'];
        $desconto = $_POST['desconto'];

        $reserva = "insert reserva (com_id, nome, cpf, email, telefone, quant_pessoa, date, desconto) values ($comemorativa, '$nome','$cpf','$email','$telefone','$quantidade', '$data', '$desconto')";
        $resultado = $conn->query($reserva);

}

$listaExp = $conn->query("select * from comemorativa order by exp");
$rowExp = $listaExp -> fetch_assoc();
$numLinhas = $listaExp->num_rows;

?>

<main class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-offset-2 col-sm-6  col-md-8">
            <h2 class="breadcrumb text-danger">
                <a href="index.php">
                    <button class="btn btn-danger">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </button>
                </a>
                RESeRVAS COM 30% DE DESCONTO
            </h2>
            <div class="thumbnail">
                <div class="alert alert-danger" role="alert">
                    <form action="Reservas.php" method="post"
                    name="form_Reservas" enctype="multipart/form-data"
                    id="form_Reservas">

                    <div class="h1d"><h1>FAÇA A SUA AQUI</h1></div>

                    <label for="nome">Nome e sobrenome:</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                            </span>
                            <input type="text" name="nome" id="nome"
                                class="form-control" placeholder="Digite o nome completo"
                                maxlength="100" required>
                        </div>  
                              
                            <label for="cpf">CPF:</label>    
                        <div class="input-group">
                           <span class="input-group-addon">
                                <span class="glyphicon glyphicon-comment" aria-hidden="true"></span>
                           </span>
                           <input type="text" name="cpf" id="cpf"
                                class="form-control" placeholder="Digite seu CPF"
                                maxlength="100" required>
                        </div>  
                       
                        <label for="email">Email:</label>    
                        <div class="input-group">
                           <span class="input-group-addon">
                                <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                           </span>
                           <input type="text" name="email" id="email"
                                class="form-control" placeholder="Digite seu email"
                                maxlength="100" required>
                        </div>
                       
                        <label for="telefone">Telefone:</label>    
                        <div class="input-group">
                           <span class="input-group-addon">
                                <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
                           </span>
                           <input type="text" name="telefone" id="telefone"
                                class="form-control" placeholder="Digite seu numero de telefone"
                                maxlength="100" required>
                        </div>

                        <label for="quantidade">Quantidade de Pessoas:</label>    
                        <div class="input-group">
                           <span class="input-group-addon">
                                <span class="glyphicon glyphicon-comment" aria-hidden="true"></span>
                           </span>
                           <input type="number" name="quantidade" id="quantidade"
                                class="form-control" placeholder="Insira a quantidade de pessoas"
                                maxlength="100" required min="0" step="1" >
                        </div>



                        <label for="com_id">Data Comemorativa:</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-tasks" aria-hidden="true"></span>
                            </span>
                            <select name="com_id" id="com_id" class="form-control" required>
                                <?php do{?>
                                    <option value="<?php echo $rowExp['id'] ?>">
                                        <?php echo $rowExp['exp'] ?>
                                    </option>
                                <?php }while($rowExp = $listaExp->fetch_assoc());?>
                            </select>
                        </div>




                        <label for="dataHora">Data e Hora:</label>    
                        <div class="input-group">
                           <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
                           </span>
                           <input type="datetime-local" name="dataHora" id="dataHora"
                                class="form-control" placeholder="Insira em qual dia ou horario você gostaria de fazer a reserva"
                                maxlength="100" required>
                        </div>


                        <label for="desconto">Desconto:</label>    
                        <div class="input-group">
                           <span class="input-group-addon">
                                <span class="glyphicon glyphicon-tags" aria-hidden="true"></span>
                           </span>
                           <input name="desconto" id="desconto"
                                class="form-control"  value="30%"
                                maxlength="100" readonly/>
                        </div>


                        <br>
                        <a href="admin/reserva_lista.php">
                            <input type="submit" name="enviar" id="enviar" class="btn btn-danger btn-block" value="finalizar pedido de reserva">
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>

<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------ -->
<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------ -->
<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------ -->
<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------ -->


    <div class="row panel-footer fundo-rodape">
        <!-- area de localização -->
        <div class="col-sm-6 col-md-4">
            <div class="panel-footer" style="background: none;" >
                <img src="img/logo-27records.png" alt="logo-27records" >
                <br>
                <i><strong> A melhor churrascaria da zona Leste</strong></i>
                <address>
                    <i>Avenida Itaquera, 8266 - Itaquera - São Paulo - SP - CEP 08295000</i>
                    <br>
                    <span class="glyphicon glyphicon-phone-alt"></span>
                    &nbsp;(11) 9836-81410
                    <br>
                    <span class="glyphicon glyphicon-envelope"></span>
                    &nbsp;
                    <a href="mailto:contato@27records.com.br?subject=Contato do Site&cc=27records@gmail.com">
                        contato@27records.com.br
                    </a>
                </address>
                <div class="embed-responsive embed-responsive-4by3">
                    <!-- local para iframe -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.7955725611723!2d-46.45904632376065!3d-23.539853960804123!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce66bf222d207b%3A0x1939a901dce47f36!2sAv.%20Itaquera%2C%208266%20-%20Vila%20Carmosina%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2008295-000!5e0!3m2!1spt-PT!2sbr!4v1722520829806!5m2!1spt-PT!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <!-- fim iframe -->
                </div>
            </div>
        </div>
        <!-- final area de localozação -->
        <div class="col-sm-6 col-md-4">
            <div class="panel-footer">
                <h4>Links</h4>
                <ul class="nav nav-pills nav-stacked">
                    <li>
                        <a href="index.php#home" class="text-danger">
                            <span class="glyphicon glyphicon-home" aria-hidden="true">&nbsp;Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="index.php#destaques" class="text-danger">
                            <span class="glyphicon glyphicon-ok-sign" aria-hidden="true">&nbsp;Destaques</span>
                        </a>
                    </li>
                    <li >
                        <a href="index.php#produtos" class="text-danger">
                            <span class="glyphicon glyphicon-cutlery" aria-hidden="true">&nbsp;Produtos</span>
                        </a>
                    </li>
                    <li >
                        <a href="index.php#contato" class="text-danger">
                            <span class="glyphicon glyphicon-envelope" aria-hidden="true">&nbsp;Contato</span>
                        </a>
                    </li>
                    <li >
                        <a href="admin/index.php" class="text-danger">
                            <span class="glyphicon glyphicon-user" aria-hidden="true">&nbsp;Administração</span>
                        </a>
                    </li>
  <!-- ------------------------------------------------------------------------------------------------------------------------------------------------ -->
                    
  
                    <!-- <li >
                        <a href="Reservas.php" class="text-danger">
                            <h2><span class="glyphicon glyphicon-calendar" aria-hidden="true">&nbsp;Reservar<img src="img/30off.png" alt="30% 0ff"></span></h2>
                        </a>
                    </li> -->


  <!-- ------------------------------------------------------------------------------------------------------------------------------------------------ -->
                </ul>
            </div>
        </div>
        <!-- area de contatos -->
        <div class="col-sm-6 col-md-4">
            <div class="panel-footer" style="background: none;">
                <h4>Contato</h4>
                <form action="rodape_contato_envia.php" name="form_contato" id="form_contato" method="post">
                    <p>
                        <span class="input-group">
                            <span class="input-group-addon" id="basic-addon1">
                                <span class="glyphicon glyphicon-user"></span>
                            </span>
                            <input type="text" name="nome_contato" placeholder="digite seu nome" aria-describedby="basic-addon1" class="form-control" required>
                        </span>
                    </p>
                    <p>
                        <span class="input-group">
                            <span class="input-group-addon" id="basic-addon2">
                                <span class="glyphicon glyphicon-envelope"></span>
                            </span>
                            <input type="text" name="email_contato" placeholder="digite seu email" aria-describedby="basic-addon2" class="form-control" required>
                        </span>
                    </p>
                    <p>
                        <span class="input-group">
                            <span class="input-group-addon" id="basic-addon3">
                                <span class="glyphicon glyphicon-pencil"></span>
                            </span>
                            <textarea name="comentario_contato" cols="30" rows="5" placeholder="digite seu comentário" aria-describedby="basic-addon3" class="form-control" required>
                            </textarea>
                        </span>
                    </p>
                    <p>
                        <button class="btn btn-danger btn-block" aria-label="enviar" role="button">
                            Enviar
                            <span class="glyphicon glyphicon-send" aria-hidden="true"></span>
                        </button>
                    </p>
                </form>  
            </div>
        </div>
        <div class="col-sm-12">
            <div class="panel-footer" style="background: none;">
                <h6 class="text-danger text-center">
                    Desenvolvido por OnTech&trade; 2024
                    <br>
                    <a href="https://www.27record.com.br" target="_blank">27records.com.br</a>
                </h6>
            </div>
        </div>
    </div>
</main>