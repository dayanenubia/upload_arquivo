
<!DOCTYPE html>
<html>
<head> 
  <meta charset="UTF-8">
  <link href="css/estiloform.css" rel="stylesheet" type="text/css" /> 
</head>
</script>
<body>
<div id="geral">
  <section id="conteudo">
		  <table>
			 <tr>
				<td> 	
					<?php
					//pasta que os arquivos serão salvas
					$pasta = 'uploads/';
					//nome tempórario do arquivo
					$tmpName = $_FILES['arquivo']['tmp_name'];
					//nome original do arquivo 
					$name = $_FILES['arquivo']['name'];
					if(!empty($name)){
						
						//realizar envio do arquivo
						if(move_uploaded_file($tmpName, $pasta . $name)){
							echo"Arquivo enviado com sucesso!";
						}else{
							echo"Arquivo não foi possivel ser enviado!";
						}
					} else {
						echo"Selecione o arquivo a ser enviado";
					}
					?>
				<br/>
					<a href="index.php">Voltar</a>
				</div>

				</td>
			 </tr>
		  </table>	 	
  </section>
</div>
</body>
</html>












