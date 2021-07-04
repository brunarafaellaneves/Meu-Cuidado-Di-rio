<?php include 'session/log_verification.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Meu Cuidado Diário</title>
        
        <!-- Configurações de cabeçalho -->
        <?php include 'header_configs.php'; ?>
        <script type="text/javascript">
            function abrir(id) {
                var el = document.getElementById(id);
                    if (el.style.display == "block")
                        el.style.display = "none";
                    else
                        el.style.display = "block";
            }
</script>
    </head>
    <body id="page-top">
        <!-- Barra de Navegação -->
        <?php include 'index_nav.php'; ?>
        <section class="page-section portfolio" id="portfolio"><br>
            <h2 class="page-section-heading text-center text-uppercase text-secondary tr"> MEU PERFIL </h2>
                
            <?php
            include 'bd/conexaogeral.php';
            $email=$_SESSION['email'];
            $stmt = $conn->prepare('SELECT * FROM usuario WHERE email = :email');
            $stmt->execute(array('email' => $email));

            while($row = $stmt->fetch()) {
                $nome = $row['nome'];
                $email = $row['email'];
                $senha = $row['senha'];
            }
            ?>
            
            <h3> Nome:  </h3> 
            <h5> <?php print($nome); ?> 
                <input type="button" value="Editar" onclick="abrir('1');"> 
                <div id="1" style='display:none'> 
                    <form  method="post" action="bd/edita_dados.php">
                    <input type="text" value="<?php print($nome); ?>" name="nomeanterior" style='display:none'>
                    <label style="color:red"> Digite o novo nome:</label><br>
                        <input type="text" name="nomenovo"><br>
                        <input type="submit" value="enviar">
                    </form>
                </div>
            <?php if ($_SESSION["nomealterado"] == 'true'): ?>
                        <br><p style="color:darkgreen"> Nome alterado com sucesso.</p>
            <?php endif; $_SESSION["nomealterado"] = 'false'; ?>
             </h5><br>
             
             
            <h3> Email:  </h3> 
            <h5> <?php print($email); ?> 
                <input type="button" value="Editar" onclick="abrir('2');"> 
                <div id="2" style='display:none'> 
                    <form  method="post" action="bd/edita_dados.php"> 
                    <label style="color:red"> Digite o novo E-mail:</label><br>
                        <input type="text" value="<?php print($email); ?>" name="emailanterior" style='display:none'>
                        <input type="text" name="emailnovo"><br>
                        <input type="submit" value="enviar">
                    </form>
                </div>
            <?php if ($_SESSION["emailalterado"] == 'true'): ?>
                        <br><p style="color:darkgreen"> Email alterado com sucesso.</p>
            <?php endif; $_SESSION["emailalterado"] = 'false'; ?>
            </h5><br>
            
            <h3> Senha:  </h3> 
            <h5> 
                <input type="button" value="Alterar" onclick="abrir('3');"> 
                <div id="3" style='display:none'> 
                    <form  method="post" action="bd/edita_dados.php"> 
                        <label style="color:red"> Digite a senha anterior:</label><br>
                        <input type="password" name="senhaanterior"><br>
                        <label style="color:red"> Digite a nova senha:</label><br>
                        <input type="password" name="senhanova"><br>
                        <input type="submit" value="enviar">
                    </form>
                </div>
            
            <?php if ($_SESSION["senhaalterada"] == 'true'): ?>
                        <br><p style="color:darkgreen"> Senha alterada com sucesso.</p>
            <?php endif; $_SESSION["senhaalterada"] = 'false'; ?>
            
            <?php if ($_SESSION["senhaerrada"] == 'true'): ?>
                        <br><p style="color:red"> Senha anterior incorreta.</p>
            <?php endif; $_SESSION["senhaerrada"] = 'false'; ?>
            
            </h5><br>
            
            <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#excluirconta">
                    <h2 style='color:red!important' class="text-center text-uppercase text-sections"> Excluir conta </h2>
            </div>
        
        <div class="portfolio-modal modal fade" id="excluirconta" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal1Label">Deseja excluir a conta?</h2>
                                    <div class="divider-custom">
                                        <button data-dismiss="modal" aria-label="Close"> Não </button>
                                        <a href="bd/excluir_conta.php"><button> Sim </button></a>
                                    </div>
                                    <p class="mb-5">Estamos melhorando nossas funcionalidades. Continua com a gente :( </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        </section>
    
        <!-- Rodapé e configurações finais -->
        <?php include 'rodape.php'; ?>
        </body>
    </html>
        