<?php include 'header.php'; ?>
<?php include 'mail.php'; ?>



<header id="sli-principal">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="img/Banner-1.png" alt="...">
                <div class="carousel-caption">
                    <h1>TITULO</h1>
                    <p>DESCRIÇÃO DO SLIDER</p>
                </div>
            </div>
            <div class="item">
                <img src="img/Banner-2.png" alt="...">
                <div class="carousel-caption">
                    <h1>TITULO</h1>
                    <p>DESCRIÇÃO DO SLIDER</p>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="container">
    <section id="sobre" class="sobre">
        <div class="row">
            <div class="col-md-6 ">
                <div class="titulo">
                    <div class="titulo-img">
                        <img src="img/icon_ver.png">
                    </div>
                    <div class="titulos">
                        <h2>SOBRE</h2>
                        <h1>A ARROYO</h1>
                    </div>
                </div>
                <div class="descricao">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    </p>
                    <a href="#" class="btn btn-custom">SAIBA MAIS</a>
                </div>
            </div>
            <div class="col-md-6">
                <img class="img-responsive" src="http://lorempixel.com/606/370/sports/1/">
            </div>
        </div>
    </section>
</div>

<section id="banner" class="banner">
    <div id="banners" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#banners" data-slide-to="0" class="active"></li>
            <li data-target="#banners" data-slide-to="1"></li>
            <li data-target="#banners" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="img/Banner-1.png" alt="...">
                <div class="carousel-caption">
                    <h1>TITULO</h1>
                    <p>DESCRIÇÃO DO SLIDER</p>
                </div>
            </div>
            <div class="item">
                <img src="img/Banner-2.png" alt="...">
                <div class="carousel-caption">
                    <h1>TITULO</h1>
                    <p>DESCRIÇÃO DO SLIDER</p>
                </div>
            </div>
            <div class="item">
                <img src="img/Banner-2.png" alt="...">
                <div class="carousel-caption">
                    <h1>TITULO</h1>
                    <p>DESCRIÇÃO DO SLIDER</p>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <section id="servicos" class="servicos">
        <div class="titulo">
            <div class="titulo-img">
                <img src="img/icon_ver.png">
            </div>
            <div class="titulos">
                <h2>DE OLHO NOS PETS</h2>
                <h1>GALERIA DE FOTOS</h1>
            </div>
        </div>
       

        <!-- incluindo carousel do instagram -->
        <div class="demo"></div>

    </section>
    <section id="planos" class="planos">
        <div class="titulo">
            <div class="titulo-img">
                <img src="img/icon_ver.png">
            </div>
            <div class="titulos">
                <h2>CONHEÇA</h2>
                <h1>NOSSOS PLANOS</h1>
            </div>
        </div>
        <div class="descricao">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
            </p>
        </div>
        <div class="row">
            <div class="plano col-md-4">
                <div class="titulo">
                    <div class="titulo-img">
                        <i class="fa fa-heart fa-3x"></i>
                    </div>
                    <div class="titulos">
                        <h1>LIGHT</h1>
                        <h2>R$ 64,00 por semana</h2>
                    </div>
                </div>
                <div class="descricao">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    </p>
                </div>
                <a href="#" class="btn btn-custom btn-block">SAIBA MAIS</a> 

            </div>
            <div class="plano col-md-4">
                <div class="titulo">
                    <div class="titulo-img">
                        <i class="fa fa-heart fa-3x"></i>
                    </div>
                    <div class="titulos">
                        <h1>SAMRT</h1>
                        <h2>R$ 64,00 por semana</h2>
                    </div>
                </div>
                <div class="descricao">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    </p>
                </div>
                <a href="#" class="btn btn-custom btn-block">SAIBA MAIS</a> 

            </div>
            <div class="plano col-md-4">
                <div class="titulo">
                    <div class="titulo-img">
                        <i class="fa fa-heart fa-3x"></i>
                    </div>
                    <div class="titulos">

                        <h1>GOLDEN</h1>
                        <h2>R$ 64,00 por semana</h2>
                    </div>
                </div>
                <div class="descricao">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    </p>
                </div>
                <a href="#" class="btn btn-custom btn-block">SAIBA MAIS</a> 

            </div>
        </div>
    </section>
    <section id="contato" class="contato">
        <div class="titulo">
            <div class="titulo-img">
                <img src="img/icon_ver.png">
            </div>
            <div class="titulos">
                <h2>FALE CONOSCO</h2>
                <h1>CONTATO</h1>
            </div>
        </div>
        <div class="descricao">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
            </p>
        </div>
        <div class="mapa">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3821.1715451080404!2d-49.2720662!3d-16.7182903!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935ef0d852052f0f%3A0xb54399790432f7ab!2sArroyo+Pets!5e0!3m2!1spt-BR!2sbr!4v1512645514682" width="100%" height="550" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div class="formulario-contato">
            <div class="row">
                <div class="col-md-8 col-xs-12">
                    <form method="post" action="index.php#formulario" name="formulario-contato" data-toggle="validator" role="form">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="nome" id="nome" value="" placeholder="nome*" required />
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" id="email" value="" placeholder="email*" required
                                           data-error="Por favor, informe um e-mail válido.">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="telefone" id="telefone" value="" placeholder="telefone*" required />
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-sm-10">
                                <div class="form-group">
                                    <textarea class="form-control" id="exampleTextarea" rows="6" 
                                              id="mensagem" name="mensagem" placeholder="mensagem*" required></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class = "botao">
                                <input class = "btn btn-custom" id="submit" name="submit" type = "submit" value = "ENVIAR">
                            </div>
                            <br>
                            <a name="formulario"></a>
                            <div class="mensagem-alerta"><?php echo $msg ?></div>
                        </div>
                    </form>
                </div>

                <div class = "col-md-4 col-xs-12">
                    <div class = "informacoes-contato">

                        <img src="img/icon-local.png">
                        <p>Av. C_264, 177 - Setor NOva Suiça.</p>
                        <p>Goiânia - GO. 74280-220</p>

                        <img src="img/icon-telefone.png">
                        <p>(62) 4004-2017</p>
                        <p>(62) 98223-9339</p>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>

<?php include 'footer.php'; ?>