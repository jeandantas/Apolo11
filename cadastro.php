<html>
	<head>
		<title> Tex Produtos Naturais | Para uma Vida Saud�vel </title>               
                <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
		<link href='http://fonts.googleapis.com/css?family=Stalinist+One' rel='stylesheet' type='text/css'>
                <link rel="stylesheet" type="text/css" href="css/cadastro.css">
	</head>
	<body>
            <h2>Formulário de Cadastro</h2>
            <hr>
            <form name ="cadastro" action="prcessaCadastro.php" method="POST">

                <label> Nome </label> 
                <input type ="text" name ="nome">



                <label> Sobrenome </label> 
                <input type ="text" name ="sobrenome"> 

                <br>

                <label> CPF </label> 
                <input type ="text" name ="login"> 



                <label> Endereço </label> 
                <input type ="text" name ="endereco">  

                <br>

                <label> Sexo </label>
                <select>
                    <option> Masculino </option>
                    <option> Feminino </option>
                    <option> Indeciso </option>
                </select> 



                <label> E-mail </label> 
                <input type ="text" name ="email"> <br>

                <br>

                <label> Senha </label> 
                <input type ="password" name ="senha">



                <label> Repetir Senha </label> 
                <input type ="password" name ="rsenha">

                <br>
                <input type="submit" name="Submit"  value="Cadastrar" />
            </form>
            <hr>
	</body>
</html>

