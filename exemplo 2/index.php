
<!DOCTYPE html>
<html lang="pt-br">
<head> 
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
  <link href="css/estiloform.css" rel="stylesheet" type="text/css" /> 
</head>
<body>
	<div id="tformulario">
	<h1>Enviar Arquivo</h1>

	<!-- serve para indicar para o navegador que nosso formulário irá fazer o envio de arquivos-->
	<form action="saida.php" method="POST" enctype="multipart/form-data">
		<label>Selecione um arquivo: </label>
    <input type="file" name="arquivo"><br/>
    <br/>
		<input type="submit" value="Enviar" class="botao"/>
	</form>
  
	</div>
</body>
</html>


