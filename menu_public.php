<?php
 
    include "conn/connect.php";
    $lista_tipos = $conn->query("SELECT * FROM tipos ORDER BY rotulo");
    $rows_tipos = $lista_tipos->fetch_all(); // me traga todos na forma de matriz
 
?>
 
<!-- conteúdo -->
 
<!-- abre a barra de navegação -->
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
                <li><a href="Reservas.php">RESERVAR</a></li>
                <li><a href="./cadastro_cliente.php">CADASTRE-SE</a></li>
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


                    <li class="active">
                    <a href="admin/cadastro_cliente.php">
                        <span class="glyphicon glyphicon-user">&nbsp;CADASTRE-SE</span>
                    </a>

                    
                </li>
                </li>
            </ul>
        </div>
    </div>
 
</nav>
 
 