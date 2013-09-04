<html>
	<head>
		<title> Standard Document </title>
		<link rel="stylesheet" type="text/css" href="standard.css">
                <link rel="stylesheet" type="text/css" href="escritorio.css">
	</head>
	<body>
		<div class = "principal">
			<div style = "position:relative; width:980px; height:230px;">
				
				<div class = "banner">
					<img src="imagens/perca-medo-ser-feliz-anamaria-767-11279.jpg" width="980px" height="236px" alt="Primeira Foto">
				</div>

				<ul id = "nav">
					<li> <a href = "index.php"> HOME </a> </li>
					<li> <a href = "produtos.php"> PRODUTOS </a> </li>
					<li> <a href = "contato.php"> CONTATO </a> </li>
					<li> <a href = "escritorio.php"> ESCRITORIO VIRTUAL </a> </li>
					<li> <a href = "sobre.html"> SOBRE </a></li>
				</ul>
				<form id="busca">
					<input type="text" value=" buscar" name="busca" />
					<input type="submit" value="OK" id="submit" />
				</form>
			</div>
			
			<img src = "imagens/scan.png" width = "980px" height = "50px" title = "teste" alt = "teste">
			
			<div id = "texto">
                            <h2> Seja Bem Vindo ao Escritorio Virtual </h2>
                            <form id = 'logon'>
                                <fieldset>
                                    <legend id = 'entrar'> Entrar </legend>
                                    <label id = 'texto01'> Login </label>
                                    <input type = 'text' id = 'field_user'> <br>
                                    <label id = 'texto02'> Password </label>
                                    <input type = 'password' id = 'field_pass'>
                                    <input type = 'submit' id = 'confirm' value = 'Entrar' >

                                    <div id = 'opcoes'>
                                        <a href = '#'> Esqueceu a senha? </a> <br>
                                        <a href = 'cadastro.php'> N&abreve;o &eacute; Cadastrado? </a>
                                    </div>
                                </fieldset>
                            </form>
			</div>
			
			<div id = "imagens">
				
			</div>
			
			<div id = "creditos">
				<p>Copyright &copy; 2013 - <b>Text</b> <span> Produtos Naturais </span> </p>
			</div>
		</div>
	</body>
</html>

