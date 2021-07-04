<?php 
include 'session/log_verification.php'; 
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Meu Cuidado Diário</title>
        
        <!-- Configurações de cabeçalho -->
        <?php include 'header_configs.php'; ?>
    </head>
    <body id="page-top">
        <!-- Barra de Navegação -->
        <?php include 'index_nav.php'; ?>

        <section class="page-section portfolio" id="portfolio"><br>
            <h2 class="page-section-heading text-center text-uppercase text-secondary tr">
                O QUE VOCÊ ESTÁ PROCURANDO?
            </h2>
            <div class="container">
                <div class="row justify-content-center">
                    <!-- Funcionalidade 1: "Dicas de Ouro" -->
                    <a href="dicas.php">
                        <div class="col-md-6 col-lg-3 mb-5">
                            <div class="portfolio-item mx-auto" data-toggle="modal">
                                <h2 class="text-center text-uppercase text-sections">
                                    DICAS DE OURO
                                </h2> 
                                <img class="img-fluid" src="assets/img/portfolio/dicas.jpg" alt="" /></a>
                            </div>
                        </div>
                    </a>
                    <!--Funcionalidade 2: "Estou em Crise"-->
                    <div class="col-md-6 col-lg-3 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioEmAndamento">
                            <h2 class="text-center text-uppercase text-sections"> 
                                ESTOU EM CRISE
                            </h2>
                            <img class="img-fluid" src="assets/img/portfolio/game.jpg" alt="" />
                        </div>
                    </div>
                    <!-- Funcionalidade 3: "Alguém pra Conversar" -->
                    <div class="col-md-6 col-lg-3 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioEmAndamento">
                            <h2 class="text-center text-uppercase text-sections"> ALGUÉM PRA CONVERSAR </h2>
                            <img class="img-fluid" src="assets/img/portfolio/conversa.jpg" alt="" />
                        </div>
                    </div>
                    <!-- Funcionalidade 4: "Hora da Pausa" -->
                    <div class="col-md-6 col-lg-3 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioEmAndamento">
                            <h2 class="text-center text-uppercase text-sections"> HORA DA PAUSA </h2>
                            <img class="img-fluid" src="assets/img/portfolio/pausa.jpg" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Sobre o projeto -->
        <?php include 'sobre.php'; ?>
        
        <!-- Sessão - Fale Conosco -->
        <?php include 'mensagem.php'; ?>
        
        
        <!-- Modal - Funcionalidade em Andamento -->
        <div class="portfolio-modal modal fade" id="portfolioEmAndamento" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal1Label">Funcionalidade sendo construída</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <p class="mb-5">Ei... Ainda não estamos preparados para esta ação. Mas em breve teremos novidades!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Rodapé e configurações finais -->
        <?php include 'rodape.php'; ?>
    </body>
</html>