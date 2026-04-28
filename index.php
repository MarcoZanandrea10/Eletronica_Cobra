<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eletronica Cobra</title>
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="styles/animacoes.css">
    <!-- criar script para style responsivo -->
    <link rel="icon" href="img/img_padrao/mascote_cobra.png">
</head>


<body>
    <?php require 'header.php'; ?>

    <!-- IMAGEM FUNDO DA LOGO -->
    <section class="banner">
        <div class="banner_container">
            <div class="logo animar-load animar-load-delay-1">
                <img src="img/img_padrao/logo completa branca.png" alt="Nome do site" class="logo_img">
            </div>
        </div>
    </section>

    <!-- CATEGORIAS -->
    <section class="categorias">
        <div class="categorias_container">
            <button class="categorias_seta categorias_seta_esq" type="button">‹</button>

            <div class="categorias_lista" id="categoriasScroll">
                <a class="categorias_card" href="#audio">Áudio</a>
                <a class="categorias_card" href="#caixa_som">Caixa de Som</a>
                <a class="categorias_card" href="#cordas">Cordas</a>
                <a class="categorias_card" href="#teclas">Teclas</a>
                <a class="categorias_card" href="#percussao">Percussão</a>
                <a class="categorias_card" href="#sopro">Sopro</a>
                <a class="categorias_card" href="#infantil">Infantil</a>
                <a class="categorias_card" href="#bags">Bags</a>
                <a class="categorias_card" href="#caixa_ambiente">Som Ambiente</a>
                <a class="categorias_card" href="#acessorios">Acessórios</a>
            </div>

            <button class="categorias_seta categorias_seta_dir" type="button">›</button>
        </div>
    </section>

    <!-- PRODUTOS -->
    <!-- depois adicionar um for com php para criar automatico os cards e puxar do bd os produtos -->
    <section class="produtos" id="produtos">

        <!-- PROMOÇÕES -->
        <div class="produtos_container">
            <button class="produtos_seta promocoes_seta_esq" type="button">‹</button>

            <div class="produtos_container_topo">
                <div class="produtos_container_titulo">
                    <h2 class="produtos_titulo">Promoções</h2>
                    <a class="produtos_ver_mais" href="#">Ver mais</a>
                </div>
            </div>

            <div class="produtos_container_itens" id="promocoesScroll">
                <a class="produto_card" href="#">
                    <div class="produto_badge produto_badge_promo">-10%</div>

                    <div class="produto_img">
                        <img src="img/img_produtos/violao1.png" alt="Produto">
                    </div>

                    <div class="produto_info">
                        <span class="produto_nome">Pedal Overdrive</span>
                        <span class="produto_preco">
                            <span class="produto_preco_antigo">R$2.399,00</span>
                            <span class="produto_preco_novo">R$ 2.119,00</span>
                        </span>

                        <div class="produto_pagamento">
                            <span class="produto_parcelado">
                                EM ATÉ 10X SEM JUROS
                            </span>
                            <span class="produto_pix">
                                R$ 1.181,50 À VISTA NO PIX
                            </span>
                        </div>
                    </div>

                    <div class="produto_acoes">
                        <button class="produto_btn">Comprar</button>
                    </div>
                </a>
            </div>

            <button class="produtos_seta promocoes_seta_dir" type="button">›</button>
        </div>

        <!-- NOVIDADES -->
        <div class="produtos_container">
            <button class="produtos_seta novidades_seta_esq" type="button">‹</button>

            <div class="produtos_container_topo">
                <div class="produtos_container_titulo">
                    <h2 class="produtos_titulo">Novidades</h2>
                    <a class="produtos_ver_mais" href="#">Ver mais</a>
                </div>
            </div>

            <div class="produtos_container_itens" id="novidadesScroll">
                <a class="produto_card" href="#">
                    <div class="produto_badge produto_badge_novo">NOVO</div>

                    <div class="produto_img">
                        <img src="img/img_produtos/bateria2.png" alt="Produto">
                    </div>

                    <div class="produto_info">
                        <span class="produto_nome">Microfone Condensador</span>
                        <span class="produto_preco">R$ 4.089,00</span>

                        <div class="produto_pagamento">
                            <span class="produto_parcelado">
                                EM ATÉ 10X SEM JUROS
                            </span>
                            <span class="produto_pix">
                                R$ 4.000,50 À VISTA NO PIX
                            </span>
                        </div>
                    </div>

                    <div class="produto_acoes">
                        <button class="produto_btn">Comprar</button>
                    </div>
                </a>
            </div>

            <button class="produtos_seta novidades_seta_dir" type="button">›</button>
        </div>
    </section>

    <!-- MARCAS -->
    <section class="marcas">
        <p class="marcas_titulo">Compre por marca</p>
        <div class="marcas_container">
            <button class="marcas_seta marcas_seta_esq" type="button" aria-label="Ver marcas anteriores">‹</button>

            <div class="marcas_lista" id="marcasScroll" aria-label="Marcas">
                <a class="marca_item" href="#">
                    <img src="img/marcas/casio.png" height="120px" width="auto">
                </a>

                <a class="marca_item" href="#">
                    <img src="img/marcas/tagima.png" height="40px" width="auto">
                </a>

                <a class="marca_item" href="#">
                    <img src="img/marcas/yamaha.png" height="40px" width="auto">
                </a>

                <a class="marca_item" href="#">
                    <img src="img/marcas/akg.png" height="100px" width="auto">
                </a>

                <a class="marca_item" href="#">
                    <img src="img/marcas/crafter.png" height="100px" width="auto">
                </a>

                <a class="marca_item" href="#">
                    <img src="img/marcas/giannini.png" height="130px" width="auto">
                </a>

                <a class="marca_item" href="#">
                    <img src="img/marcas/frahm.png" height="50px" width="auto">
                </a>

                <a class="marca_item" href="#">
                    <img src="img/marcas/borne.png" height="50px" width="auto">
                </a>

                <a class="marca_item" href="#">
                    <img src="img/marcas/takamine.png" height="60px" width="auto">
                </a>

                <a class="marca_item" href="#">
                    <img src="img/marcas/behringer.png" height="60px" width="auto">
                </a>

                <a class="marca_item" href="#">
                    <img src="img/marcas/jbl.png" height="80px" width="auto">
                </a>

                <a class="marca_item" href="#">
                    <img src="img/marcas/shure.png" height="40px" width="auto">
                </a>

                <a class="marca_item" href="#">
                    <img src="img/marcas/michael.png" height="100px" width="auto">
                </a>

                <a class="marca_item" href="#">
                    <img src="img/marcas/kadosh.png" height="50px" width="auto">
                </a>
            </div>

            <button class="marcas_seta marcas_seta_dir" type="button" aria-label="Ver próximas marcas">›</button>
        </div>
    </section>

    <!-- SOBRE -->
    <section class="sobre" id="sobre">
        <div class="sobre_container">
            <div class="sobre_topo animar animar_preparado animar_cima">
                <h2 class="sobre_titulo">Sobre a <b>Eletrônica Cobra</b></h2>
                <p class="sobre_subtitulo">
                    Há mais de 40 anos conectando pessoas à música em todo o Brasil, com paixão por instrumentos e
                    compromisso em oferecer uma experiência de compra de verdade.
                </p>
            </div>

            <div class="beneficios_container">
                <div class="beneficio animar animar_preparado animar_cima delay-1">
                    <div class="beneficio_icone">
                        <img src="icons/nota_musical.png" alt="Nota Musical" width="30" height="30">
                    </div>
                    <h3 class="beneficio_titulo">Variedade</h3>
                    <p class="beneficio_texto">Milhares de produtos das<br>melhores marcas do mercado</p>
                </div>

                <div class="beneficio animar animar_preparado animar_cima delay-2">
                    <div class="beneficio_icone">
                        <img src="icons/distintivo.png" alt="Ícone de Qualidade" width="30" height="30">
                    </div>
                    <h3 class="beneficio_titulo">Qualidade</h3>
                    <p class="beneficio_texto">Instrumentos testados e<br>aprovados por profissionais</p>
                </div>

                <div class="beneficio animar animar_preparado animar_cima delay-3">
                    <div class="beneficio_icone">
                        <img src="icons/relogio.png" alt="Ícone de Entrega Rápida" width="30" height="30">
                    </div>
                    <h3 class="beneficio_titulo">Entrega Rápida</h3>
                    <p class="beneficio_texto">Receba seus produtos com<br>segurança e rapidez</p>
                </div>

                <div class="beneficio animar animar_preparado animar_cima delay-4">
                    <div class="beneficio_icone">
                        <img src="icons/coracao.png" alt="Ícone de Coração" width="30" height="30">
                    </div>
                    <h3 class="beneficio_titulo">Paixão</h3>
                    <p class="beneficio_texto">Atendimento feito por músicos<br>para músicos</p>
                </div>
            </div>

            <div class="sobre_amp animar animar_preparado animar_baixo delay-2">
                <div class="amp_grade">
                    <div class="amp_item">
                        <div class="amp_num"><span class="amp_red">40</span>+</div>
                        <div class="amp_label">Anos de Experiência</div>
                    </div>
                    <div class="amp_item">
                        <div class="amp_num"><span class="amp_red">5000</span>+</div>
                        <div class="amp_label">Clientes Satisfeitos</div>
                    </div>
                    <div class="amp_item">
                        <div class="amp_num"><span class="amp_red">1000</span>+</div>
                        <div class="amp_label">Produtos em Estoque</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTATO -->
    <section class="contato" id="contato">
        <div class="contato_container">
            <div class="contato_grid">
                <!-- contato esquerda (mapa) -->
                <div class="animar animar_preparado animar_esquerda">
                    <h2 class="contato_titulo">Entre em <b>Contato</b></h2>
                    <p class="contato_subtitulo">
                        Estamos prontos para ajudar você a encontrar o instrumento perfeito!
                        Visite nossa loja ou envie uma mensagem.
                    </p>

                    <div class="mapa_container animar animar_preparado animar_cima delay-1">
                        <div class="mapa_container_topo">
                            <div class="mapa_titulo">Nossa loja</div>
                            <a class="mapa_link" href="https://maps.app.goo.gl/TSSWCdQ3NmGyscZQ6" target="_blank"
                                rel="noopener">
                                Abrir no Google Maps →
                            </a>
                        </div>

                        <div class="mapa">
                            <iframe title="Mapa da loja Eletrônica Cobra"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3534.65935585806!2d-52.2725839!3d-27.6350649!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94e3138a6bcd1dd9%3A0xf24c998ece4995bc!2sCobra%20Instrumentos%20Musicais%20e%20Eletr%C3%B4nica!5e0!3m2!1spt-BR!2sbr!4v1769733603501!5m2!1spt-BR!2sbr">
                            </iframe>
                        </div>
                    </div>

                    <div class="contato_whatsapp animar animar_preparado animar_cima delay-2">
                        <a class="frase_whatsapp">Ficou alguma dúvida?</a>
                        <a class="btn_whatsapp whatsapp_link" target="_blank" rel="noopener">
                            <img src="icons/whatsapp.png" alt="Ícone do WhatsApp" width="20" height="20">
                            <span>Nos chame no WhatsApp</span>
                        </a>
                    </div>
                </div>

                <!-- contato direita (formulário) -->
                <div class="animar animar_preparado animar_direita">
                    <div class="form">
                        <h3>Envie a sua <b>mensagem</b></h3>

                        <form method="post" class="form_contato">
                            <label>
                                Nome
                                <input type="text" name="nome" placeholder="Seu nome" required>
                            </label>
                            <label>
                                Email
                                <input type="email" name="email" placeholder="exemplo@email.com" required>
                            </label>
                            <label>
                                Telefone
                                <input type="tel" name="telefone" placeholder="(54) 99999-9999">
                            </label>
                            <label>
                                Mensagem
                                <textarea name="mensagem" rows="5" maxlength="350" placeholder="Como podemos ajudar?"
                                    required></textarea>
                            </label>
                            <button type="submit" class="btn_enviar_msg">Enviar Mensagem</button>
                        </form>

                        <p class="form_observacao">Responderemos o mais rápido possível em horário comercial.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- BTN WPP FIXO NA PÁGINA -->
    <a class="btn_whatsapp_fixo whatsapp_link" target="_blank">
        <img src="icons/whatsapp.png" alt="Ícone do WhatsApp" width="30" height="30">
    </a>

    <?php require 'footer/footer.php'; ?>

    <script src="styles/animacoes.js"></script>

    <script>
        // envia msg no wpp ao clicar no btn
        const telefone = "555491862723";
        const mensagem = "Olá! Vim pelo site e gostaria de tirar uma dúvida.";
        document.querySelectorAll(".whatsapp_link").forEach(btn => {
            btn.href = `https://wa.me/${telefone}?text=${encodeURIComponent(mensagem)}`;
        });

        // setas para barra de rolagem 
        function iniciarSetas(scrollId, setaEsqClass, setaDirClass) {
            const scroller = document.getElementById(scrollId);
            const btnEsq = document.querySelector(setaEsqClass);
            const btnDir = document.querySelector(setaDirClass);

            if (!scroller || !btnEsq || !btnDir) return;

            function atualizarSetas() {
                const max = scroller.scrollWidth - scroller.clientWidth;
                btnEsq.classList.toggle("is_disabled", scroller.scrollLeft <= 2);
                btnDir.classList.toggle("is_disabled", scroller.scrollLeft >= max - 2);
            }

            function passoScroll() {
                return Math.max(240, Math.floor(scroller.clientWidth * 0.65));
            }

            btnEsq.addEventListener("click", () => {
                scroller.scrollBy({
                    left: -passoScroll(),
                    behavior: "smooth"
                });
            });

            btnDir.addEventListener("click", () => {
                scroller.scrollBy({
                    left: passoScroll(),
                    behavior: "smooth"
                });
            });

            scroller.addEventListener("scroll", atualizarSetas);
            window.addEventListener("resize", atualizarSetas);

            atualizarSetas();
        }

        iniciarSetas("categoriasScroll", ".categorias_seta_esq", ".categorias_seta_dir");
        iniciarSetas("marcasScroll", ".marcas_seta_esq", ".marcas_seta_dir");
        iniciarSetas("promocoesScroll", ".promocoes_seta_esq", ".promocoes_seta_dir");
        iniciarSetas("novidadesScroll", ".novidades_seta_esq", ".novidades_seta_dir");
    </script>
</body>

</html>