<?php include 'header.php'; ?>
<?php include 'mail.php'; ?>
<?php include 'functions.php'; ?>

<!--testando commit git agencia alca-->

<section class="sli-principal">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img class="img-responsive hidden-xs" src="img/slide-creche.jpg" alt="crech-daycare">
                <span class="hidden-sm hidden-md hidden-lg" style="background-image: url('img/slide-creche.jpg')"></span>
                <div class="carousel-caption">
                    <h1>CRECHE DAYCARE</h1>
                    <p>O serviço de Daycare dá ao seu melhor amigo um dia de diversão com muito conforto e
                        equilíbrio. As atividades são programadas considerando o nível de energia e o porte físico dos
                        cães que recebem cuidados específicos na alimentação, atividade física e descanso.</p>
                </div>
            </div>
            <div class="item">
                <img class="img-responsive  hidden-xs" src="img/slide-baia.jpg" alt="hotel sem gaiolas ou baias">
                <span class="hidden-sm hidden-md hidden-lg" style="background-image: url('img/slide-baia.jpg')"></span>
                <div class="carousel-caption">
                    <h1>HOTEL SEM GAIOLAS OU BAIAS</h1>
                    <p>Enquanto o dono viaja, termina a reforma da casa, ou tem qualquer outro motivo que o
                        impeça de ficar com seu pet e não quer que ele fique muito tempo em espaços pequenos, o
                        hotel Arroyo recebe os clientes de quatro patas em um ambiente 100% livre, sem gaiolas ou
                        baias, dando carinho e atenção até que ele possa voltar para casa.</p>
                </div>
            </div>
            <div class="item">
                <img class="img-responsive hidden-xs" src="img/slide-natacao.jpg" alt="natação">
                <span class="hidden-sm hidden-md hidden-lg" style="background-image: url('img/slide-natacao.jpg')"></span>
                <div class="carousel-caption">
                    <h1>NATAÇÃO</h1>
                    <p>Em uma big piscina de 35m monitores e veterinários desenvolvem atividades recreativas, de
                        fisioterapia, para perda dos quilinhos extras ou só para se refrescar mesmo num dia de muito
                        calor e baixa humidade.</p>
                </div>
            </div>
            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>

<section id="sobre" class="sobre">
    <div class="container">
        <div class="row">
            <div class="col-md-6 ">
                <div class="titulo">
                    <div class="titulo-img">
                        <img src="img/icon_ver.png">
                    </div>
                    <div class="titulos">
                        <h2>SOBRE</h2>
                        <h1>A ARROYO PETS</h1>
                    </div>
                </div>
                <div class="descricao">
                    <p>Nós sabemos que a rotina agitada muitas vezes impede vocês de dedicar o tempo que gostariam aos seus cães, sendo assim, decidimos agitar a nossa rotina em benefício deles.</p>

                    <p>Nossos melhores amigos precisam se movimentar para atingir um nível de energia estável, saudável, por isso nosso objetivo é levar qualidade de vida ao seu cão através de estímulos físicos e mentais.</p>

                    <p>A paixão pelos pets é o combustível que move a Arroyo Pets. Seu cão merece essa experiência!</p>
                    </p>
                    <a href="sobre.php" class="btn btn-custom">SAIBA MAIS</a>
                </div>
            </div>
            <div class="col-md-6">
                <img class="img-responsive" src="img/sobre-home.jpg" width="100%">
            </div>
        </div>
    </div>
</section>

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
                <img class="img-responsive" src="img/slide-training.jpg" alt="training básico">
                <div class="carousel-caption">
                    <h1>TRAINING BÁSICO</h1>
                    <p>Despertando nos cães o desejo de aprender, o método de adestramento inteligente é 
                        fundamentado em estímulos positivos e recompensas.</p>
                </div>
            </div>
            <div class="item">
                <img class="img-responsive" src="img/slide-taxidog.jpg" alt="taxidog">
                <div class="carousel-caption">
                    <h1>TAXIDOG</h1>
                    <p>Levamos e buscamos seu amigo de quatro patas na ida e volta para casa com toda segurança e 
                        o conforto de um veículo com ar condicionado e todo preparado para o transporte deles.</p>
                </div>
            </div>
            <div class="item">
                <img class="img-responsive" src="img/slide-monitoramento.jpg" alt="monitoramento online">
                <div class="carousel-caption">
                    <h1>MONITORAMENTO ONLINE</h1>
                    <p>Os donos de pets hospedados em regime de creche ou hotel contam com o conforto
                        acompanhar as rotinas online 24h com câmeras que mostram toda a área externa e até o
                        ambiente reservado para o descanso onde o piso é antiderrapante e a cobertura com
                        tratamento antirruído.</p>
                </div>
            </div>
            <!-- Controls -->
            <a class="left carousel-control" href="#banners" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#banners" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>


<section id="servicos" class="servicos">
    <div class="container">
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
       <?php  /**
        $insta = instagram();
        if ($insta) {
            $html = '';
            $count = 0;
            foreach ($insta as $results):
                $count++;
                $html .= '<a class="instagram-img"  href="' . $results->link . '" title="" target="_blank">';
                $html .= '<img width="290" height="290" src="' . $results->images->low_resolution->url . '" class="img-responsive" alt="">';
                $html .= '</a>';
                if ($count >= 8) {
                    break;
                }
            endforeach;
            echo $html;
        }*/
        ?>
    </div>
</section>
<section id="planos" class="planos">
    <div class="container">
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
                    <div class="titulo-back">
                        <p>L</p>
                    </div>
                    <div class="titulo-plano">
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
                <a href="planos.php" class="btn btn-custom btn-block">SAIBA MAIS</a> 

            </div>
            <div class="plano col-md-4">
                <div class="titulo">
                    <div class="titulo-back">
                        <p>S</p>
                    </div>
                    <div class="titulo-plano">
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
                <a href="planos.php" class="btn btn-custom btn-block">SAIBA MAIS</a> 

            </div>
            <div class="plano col-md-4">
                <div class="titulo">
                    <div class="titulo-back">
                        <p>G</p>
                    </div>
                    <div class="titulo-plano">
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
                <a href="planos.php" class="btn btn-custom btn-block">SAIBA MAIS</a> 
            </div>
        </div>
</section>

<section id="contato" class="contato">
    <div class="container">
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
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3821.1715451080404!2d-49.2720662!3d-16.7182903!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935ef0d852052f0f%3A0xb54399790432f7ab!2sArroyo+Pets!5e0!3m2!1spt-BR!2sbr!4v1512645514682" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
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
                        <div class="row">
                            <div class = "dados-contato col-xs-4 col-sm-2">
                                <img class="img-responsive" src="img/icon-local.png">
                            </div>
                            <div class="dados-contato col-xs-8 col-sm-10">
                                <p>Av. C_264, 177 - Setor Nova Suiça.</p>
                                <p>Goiânia - GO. 74280-220</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="dados-contato col-xs-4 col-sm-2">
                                <img class="img-responsive" src="img/icon-telefone.png">
                            </div>
                            <div class = "dados-contato col-xs-8 col-sm-10">
                                <p>(62) 4004-2017</p>
                                <p>(62) 98223-9339</p>
                            </div>
                        </div>
                        <div class="redes-sociais col-xs-12">
                            <a href="#"><img src="img/FB.png"></a>
                            <a href="#"><img src="img/ig.png"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include 'footer.php'; ?>