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
                    include "config_upload.php";

                    $tamanho_bytes = $_FILES['arquivo']['size'];
                    $extensoes = strrchr($_FILES['arquivo']['name'], '.'); // Pega a extensão do arquivo
                    $pasta = 'uploads/';
                    $tmpName = $_FILES['arquivo']['tmp_name'];
                    $name = $_FILES['arquivo']['name'];
                    
                    if (!empty($name)) {
                        // Verifica se a opção de sobrescrever está ativada
                        if ($sobrescrever == "nao" && file_exists($pasta.$name)) {
                            echo "Arquivo já existe!";
                            exit;
                        }
                        
                        // Verifica se a extensão do arquivo é permitida
                        if ($limitar_extensao == "sim" && !in_array($extensoes, $extensao)) {
                            echo "Extensão de arquivo inválida!";
                            exit;
                        }
                        
                        // Verifica se o tamanho do arquivo é permitido
                        if ($limitar_tamanho == "sim" && $tamanho_bytes > $tamanho_maximo) {
                            echo "Tamanho de arquivo inválido!";
                            exit;
                        }
                        
                        // Move o arquivo para a pasta desejada
                        if (move_uploaded_file($tmpName, $pasta.$name)) {
                            echo "Arquivo enviado com sucesso!";
                        } else {
                            echo "Erro ao enviar arquivo!";
                        }
                    } else {
                        echo "Nenhum arquivo enviado!";
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