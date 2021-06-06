<?php include("log_verification.php");?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Cadastro - Meu Cuidado Diário</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="index.html">Meu Cuidado Diário</a>
                <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </nav>
        <header class="masthead bg-primary text-white text-center">
 
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">CADASTRO</h2><br>
        </header>

        </section>
        <section id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <form id="contactForm" method="POST" action="bd/conexao_cadastro.php" name="sentMessage" novalidate="novalidate">
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>E-mail</label>
                                    <input class="form-control" id="email" type="email" placeholder="E-mail" required="required" data-validation-required-message="Por favor, digite seu endereço de e-mail." />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>E-mail</label>
                                        <input class="form-control" id="nome" type="name" placeholder="Nome" required="required" data-validation-required-message="Por favor, digite seu nome." />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Senha</label>
                                    <input class="form-control" id="senha" type="password" placeholder="Senha" required="required" data-validation-required-message="Por favor, digite sua senha." />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <br />
                            <div id="success"></div>
                            <div class="portfolio-item mx-auto"><button class="btn btn-primary btn-xl" type="submit">CADASTRAR</button></div><br>
                        </form>
                        <p class="principal">JÁ É CADASTRADO(A)? <a href="login.php">LOGIN</a></p>
                    </div>
                </div>
            </div>
            
            <br>
        </section>
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Projeto para a disciplina de Prática Profissional - ADS (2021), desenvolvido por Bruna Rafaella para a Instituição de ensino UNINASSAU</small></div>
        </div>
        <div class="scroll-to-top d-lg-none position-fixed">
            <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a>
        </div>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>

