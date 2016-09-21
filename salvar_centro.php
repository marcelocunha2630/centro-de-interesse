<html>
	<head>
	<meta charset="utf-8"></meta>
	<script type="text/javascript" src="js/jquery-1.12.3.min.js"></script>
	<link href="bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet" />
	<script src="bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
	<link href="css/estilo.css" rel="stylesheet" />
	<title>Inserir Centro </title>
</head>
<body>
	<div id="container" class="container	">
		<header class="jumbotron teste">
        
<?php
	
	
	$nome = $_POST['camponome'];
	$descricao=  $_POST['campodescricao'];
	$inicio = $_POST['campoinicio'];
	$termino = $_POST['campotermino'];
	$orientador = $_POST['campoorientador'];
	$qtdvagas = $_POST['campoqtdvagas'];
	$tipo = $_POST['campotipo'];
	
	
	
	/*configurco de enderecmento do bnco de ddos*/
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	
	$conexao = mysql_connect($servidor, $usuario, $senha);
	
	/*verifica se a conexao realmente foi criada*/
	/*se (nao conexao) entao, ou seja, conexao e falsa*/
	if (!$conexao) {
		echo "Não foi possível connectar ao servidor";
		exit;
	}else{/*senao*/ 
		echo "<h1>Conectou!</h1>";
	}
	
	/*configurco de acesso o banco de dados*/
	$nome_banco = "bd_centro_interesse";
	
	/*Selecione o banco de dados ou morra*/
	$banco = mysql_select_db($nome_banco, $conexao) or die ("Não foi possível conectar ao banco de dados");
	
	mysql_query("SET NAMES 'utf8'");
	mysql_query('SET character_set_connection=utf8');
	mysql_query('SET character_set_client=utf8');
	mysql_query('SET character_set_results=utf8');
	
	$resultado = mysql_query ("INSERT INTO tb_centro_interesse VALUES ('', '$nome', '$descricao', '$inicio', '$termino', '$orientador', $qtdvagas, $tipo)");


	echo "<h1> Inscrição realizada 	<br /> com sucesso</h1>";
	
	echo "<a href='projetocentro.html'> Clique aqui para cadastrar um novo centro </a>";
	
	/*Encerra a conexao*/
	mysql_close();
?>
		</header>		
	</div>
<body>
</html>