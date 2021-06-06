<section class="page-section" id="contact">
    <div class="container">
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">
            FALE CONOSCO
        </h2>
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <form id="contactForm" name="sentMessage" novalidate="novalidate">
                    
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>
                                Nome
                            </label>
                            <input class="form-control" id="name" type="text" placeholder="Nome" required="required" data-validation-required-message="Por favor, digite seu nome." />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>
                                E-mail
                            </label>
                            <input class="form-control" id="email" type="email" placeholder="E-mail" required="required" data-validation-required-message="Por favor, digite seu endereço de e-mail." />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>
                                Número de Telefone
                            </label>
                            <input class="form-control" id="phone" type="tel" placeholder="Número de Telefone" required="required" data-validation-required-message="Por favor, digite seu número de telefone." />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                        
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                <label>
                                    Mensagem
                                </label>
                                <textarea class="form-control" id="message" rows="5" placeholder="Mensagem" required="required" data-validation-required-message="Por favor, digite sua mensagem."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        
                        <br/>
                        
                        <div id="success"></div>
                        
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioEmAndamento">
                            <button class="btn btn-primary btn-xl" id="sendMessageButton">
                                Enviar
                            </button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</section>