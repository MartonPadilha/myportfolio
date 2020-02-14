<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1" />
    <meta charSet="utf-8" />
    <title>Marton Padilha - Desenvolvedor Web</title>
    <link rel="stylesheet" href="{{url(mix('site/css/style.css'))}}" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div id="__next">
        <div>
            <div>
                <section class="navbar">
                    <div class="container">
                        <div class="menu"><img alt="Logo Marton" class="logo" src="assets/images/mp_op.jpeg" /></div>
                        <img alt="imagem de fundo" class="p1-fundo" src="assets/images/fundo1.png" /></div>
                </section>
            </div>
            <div>
                <section class="content1">
                    <div class="container">
                        <div class="dados-content1">
                            <h1 class="titulo-dados-content1"> Desenvolvedor </h1>
                            <h1 class="titulo-dados-content1"> Web </h1>
                            <h3 class="sobre-dados-content1">
                                @if (date('H') >= 6 && date('H') <= 12)
                                    Bom dia!
                                @elseif(date('H') > 12 && date('H') <= 18)
                                    Boa Tarde!
                                @else
                                    Boa Noite!
                                @endif
                            Eu trabalho como desenvolvedor web, programador PHP e WordPress, na criação de sites e sistemas web. </h3>
                        </div>
                    </div>
                    <div class="container">
                        <div>
                            <button class="btn-primary" id="btn-curriculo" target="_blank"></i> CURRÍCULO</button>
                            <a href="#contact"><button class="btn-secundary">CONTATO</button></a>
                        </div>
                    </div><img alt="imagem do fundo do site" class="p2-fundo" src="assets/images/fundo2.png" /></section>
            </div>
            <div>
                <section class="content2">
                    <div class="container">
                        <div class="item-content2"><img alt="icone de desenvolvimento front-end" class="img-item-content2" src="assets/images/front.png" />
                            <h1 class="titulo-item-content2"> Dev. Front - End </h1>
                            <h3 class="sub-titulo-item-content2"> HTML - CSS - JS </h3></div>
                        <div class="item-content2"><img alt="icone de design UI e UX" class="img-item-content2" src="assets/images/mobile.png" />
                            <h1 class="titulo-item-content2"> Dev. Mobile </h1>
                            <h3 class="sub-titulo-item-content2"> Flutter</h3></div>
                        <div class="item-content2"><img alt="icone de linguagens de programação" class="img-item-content2" src="assets/images/html-coding.png" />
                            <h1 class="titulo-item-content2"> Dev. Back - End </h1>
                            <h3 class="sub-titulo-item-content2"> PHP (Laravel) - Java </h3></div>
                    </div>
                </section>
            </div>
            <div>
                <section class="content3">
                    <div class="container">
                        <div class="dados">
                            <h1 class="titulo-mim-content3">Sobre mim :)</h1>
                            <h2 class="subtitulo-content3">Conheça quem você está contratando.</h2>
                            <h3 class="sobre-mim-content3">Meu nome é Marton, sou gaúcho da cidade de Panambi, tenho 22 anos, sou formando em Sistemas para Internet pelo IFFar - Campus Panambi. Entre em contato comigo e conheça mais sobre mim.</h3></div>
                        <div class="img-content-3"><img alt="Imagem de pessoas desenvolvendo um projeto" class="img-content3" src="assets/images/imagemcontent3.png" /></div>
                    </div>
                </section>
            </div>
            <div>
                <section class="Content4">
                    <div class="container">
                        <h1 class="titulo-content4">Projetos</h1>
                        <h3 class="sub-titulo-content4">Conheça alguns dos meus trabalhos recém lançados</h3></div>
                    <div class="imagens-projetos"><img alt="imagem de um projeto" class="img-projeto" src="assets/images/samsung.jpg" /><img alt="imagem de um projeto" class="img-projeto" src="assets/images/sparito.jpg" /></div>
                    <div class="container-btn-content4">
                        <button class="btn-primary-content4"><i class="fab fa-dribbble"></i> Mais Projetos</button>
                    </div>
                </section>
            </div>
            <div>
                <section class="footer" id="footer">
                    <div class="container">
                        <h1 class="titulo-contato" id="contact">Contato</h1>
                        <h3 class="sub-titulo-contato">Aqui você pode entrar em contato  comigo </h3>
                        <div class="footer-social-icons">
                            <ul class="social-icons">
                                <li><a href="" class="social-icon"> <i class="fa fa-whatsapp"></i></a></li>
                                <li><a href="" class="social-icon"> <i class="fa fa-linkedin"></i></a></li>
                                <li><a href="" class="social-icon"> <i class="fa fa-github"></i></a></li>
                            </ul>
                        </div>
                        {{-- <div class="container-icones-contato"><img alt="imagem do whatsapp" class="icones-redes" src="assets/images/whatsapp.png" /><img alt="imagem do facebook" class="icones-redes" src="assets/images/facebook.png" /><img alt="imagem do linkedIn" class="icones-redes" src="assets/images/linkedin.png" /></div> --}}
                    </div>
                </section>
            </div>
        </div>
    </div>
</body>

</html>
