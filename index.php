<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eletronica Cobra</title>
    <link rel="stylesheet" href="styles/index.css">
    <!-- criar script para style responsivo -->
    <link rel="icon" type="image/png" href="img_padrao/mascote_cobra.png">
</head>


<body>
    <?php include 'header.php'; ?>

    <!-- IMAGEM FUNDO DA LOGO -->
    <section class="banner">
        <div class="banner_container">
            <div class="logo">
                <img src="img_padrao/logo completa branca.png" alt="Nome do site" class="logo_img">
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
                        <img src="img_produtos/produto3.png" alt="Produto">
                    </div>

                    <div class="produto_info">
                        <span class="produto_nome">Pedal Overdrive</span>
                        <span class="produto_preco">
                            <span class="produto_preco_antigo">R$ 399,00</span>
                            <span class="produto_preco_novo">R$ 319,00</span>
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
                        <img src="img_produtos/produto4.png" alt="Produto">
                    </div>

                    <div class="produto_info">
                        <span class="produto_nome">Microfone Condensador</span>
                        <span class="produto_preco">R$ 489,00</span>

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
                    <img src="marcas/jbl.png" height="80px" width="auto">
                </a>

                <a class="marca_item" href="#">
                    <img src="marcas/casio.png" height="120px" width="auto">
                </a>

                <a class="marca_item" href="#">
                    <img src="marcas/tagima.png" height="40px" width="auto">
                </a>

                <a class="marca_item" href="#">
                    <img src="marcas/yamaha.png" height="40px" width="auto">
                </a>

                <a class="marca_item" href="#">
                    <img src="marcas/akg.png" height="100px" width="auto">
                </a>

                <a class="marca_item" href="#">
                    <img src="marcas/crafter.png" height="100px" width="auto">
                </a>

                <a class="marca_item" href="#">
                    <img src="marcas/giannini.png" height="130px" width="auto">
                </a>

                <a class="marca_item" href="#">
                    <img src="marcas/frahm.png" height="50px" width="auto">
                </a>

                <a class="marca_item" href="#">
                    <img src="marcas/borne.png" height="50px" width="auto">
                </a>

                <a class="marca_item" href="#">
                    <img src="marcas/takamine.png" height="60px" width="auto">
                </a>

                <a class="marca_item" href="#">
                    <img src="marcas/behringer.png" height="60px" width="auto">
                </a>

                <a class="marca_item" href="#">
                    <img src="marcas/shure.png" height="40px" width="auto">
                </a>

                <a class="marca_item" href="#">
                    <img src="marcas/michael.png" height="100px" width="auto">
                </a>

                <a class="marca_item" href="#">
                    <img src="marcas/kadosh.png" height="50px" width="auto">
                </a>
            </div>

            <button class="marcas_seta marcas_seta_dir" type="button" aria-label="Ver próximas marcas">›</button>
        </div>
    </section>

    <!-- SOBRE -->
    <section class="sobre" id="sobre">
        <div class="sobre_container">
            <div class="sobre_topo">
                <h2 class="sobre_titulo">Sobre a <b>Eletrônica Cobra</b></h2>
                <p class="sobre_subtitulo">
                    Há mais de 40 anos conectando pessoas à música em todo o Brasil, com paixão por instrumentos e
                    compromisso em oferecer uma experiência de compra de verdade.
                </p>
            </div>

            <div class="beneficios_container">
                <div class="beneficio">
                    <div class="beneficio_icone">
                        <img src="icons/nota_musical.png" alt="Nota Musical" width="30" height="30">
                    </div>
                    <h3 class="beneficio_titulo">Variedade</h3>
                    <p class="beneficio_texto">Milhares de produtos das<br>melhores marcas do mercado</p>
                </div>

                <div class="beneficio">
                    <div class="beneficio_icone">
                        <img src="icons/distintivo.png" alt="Ícone de Qualidade" width="30" height="30">
                    </div>
                    <h3 class="beneficio_titulo">Qualidade</h3>
                    <p class="beneficio_texto">Instrumentos testados e<br>aprovados por profissionais</p>
                </div>

                <div class="beneficio">
                    <div class="beneficio_icone">
                        <img src="icons/relogio.png" alt="Ícone de Entrega Rápida" width="30" height="30">
                    </div>
                    <h3 class="beneficio_titulo">Entrega Rápida</h3>
                    <p class="beneficio_texto">Receba seus produtos com<br>segurança e rapidez</p>
                </div>

                <div class="beneficio">
                    <div class="beneficio_icone">
                        <img src="icons/coracao.png" alt="Ícone de Coração" width="30" height="30">
                    </div>
                    <h3 class="beneficio_titulo">Paixão</h3>
                    <p class="beneficio_texto">Atendimento feito por músicos<br>para músicos</p>
                </div>
            </div>

            <div class="sobre_amp">
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
                <div>
                    <h2 class="contato_titulo">Entre em <b>Contato</b></h2>
                    <p class="contato_subtitulo">
                        Estamos prontos para ajudar você a encontrar o instrumento perfeito!
                        Visite nossa loja ou envie uma mensagem.
                    </p>

                    <div class="mapa_container">
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

                    <div class="contato_whatsapp">
                        <a class="frase_whatsapp">Ficou alguma dúvida?</a>
                        <a class="btn_whatsapp whatsapp_link" target="_blank" rel="noopener">
                            <img src="icons/whatsapp.png" alt="Ícone do WhatsApp" width="20" height="20">
                            <span>Nos chame no WhatsApp</span>
                        </a>
                    </div>
                </div>

                <!-- contato direita (formulário) -->
                <div>
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

    <!-- FOOTER -->
    <footer class="footer">
        <div class="footer_margens">
            <div class="footer_grid">
                <!-- COL 1: Logo -->
                <div class="footer_col">
                    <a class="footer_logo">
                        <img src="img_padrao/mascote_cobra.png" alt="Logo Eletrônica Cobra" width="40" height="40">
                        <span class="footer_nome">ELETRÔNICA <b>COBRA</b></span>
                    </a>

                    <p class="footer_texto">
                        Sua loja de confiança para instrumentos musicais há mais de 40 anos.
                    </p>

                    <div class="footer_redes_sociais">
                        <a href="https://www.instagram.com/cobrainstrumentosmusicais/" target="_blank" rel="noopener">
                            <img class="btn_rede_sociais" src="icons/instagram.png" alt="Ícone do Instagram" width="40"
                                height="40">
                        </a>
                        <a href="https://www.facebook.com/cobrainstrumentosmusicais?locale=pt_BR" target="_blank"
                            rel="noopener">
                            <img class="btn_rede_sociais" src="icons/facebook.png" alt="Ícone do Facebook" width="40"
                                height="40">
                        </a>
                        <a href="https://www.tiktok.com/@eletronica.cobra" target="_blank" rel="noopener">
                            <img class="btn_rede_sociais" src="icons/tiktok.png" alt="Ícone do TikTok" width="40"
                                height="40">
                        </a>
                    </div>
                </div>

                <!-- COL 2: Links rápidos -->
                <div class="footer_col">
                    <h4 class="footer_titulo">Links Rápidos</h4>
                    <ul class="footer_lista">
                        <li><a href="#">Início</a></li>
                        <li><a href="#produtos">Produtos</a></li>
                        <li><a href="#sobre">Sobre Nós</a></li>
                        <li><a href="#contato">Contato</a></li>
                    </ul>
                </div>

                <!-- COL 3: Categorias -->
                <!-- ajeitar isso depois -->
                <div class="footer_col footer_col_categorias">
                    <h4 class="footer_titulo">Categorias</h4>
                    <ul class="footer_lista">
                        <li><a href="#">Áudio</a></li>
                        <li><a href="#">Caixa de Som</a></li>
                        <li><a href="#">Cordas</a></li>
                        <li><a href="#">Teclas</a></li>
                        <li><a href="#">Percussão</a></li>
                        <li><a href="#">Acessórios</a></li>
                    </ul>
                </div>

                <!-- COL 4: Horarios -->
                <div class="footer_col">
                    <h4 class="footer_titulo">Horário de Funcionamento</h4>
                    <ul class="footer_lista">
                        <li>Segunda a Sexta: 08:30h - 12h | 13:30h - 18h</li>
                        <li>Sábado: 8h - 12h</li>
                        <li>Domingo: Fechado</li>
                    </ul>
                </div>

                <!-- COL 5: Contato + Pagamento -->
                <div class="footer_col">
                    <h4 class="footer_titulo">Contato</h4>
                    <ul class="footer_lista">
                        <li>Av. Comandante Kramer, 78 - Centro, Erechim - RS</li>
                        <li>(54) 3321-3833</li>
                        <li></li>
                    </ul>

                    <h4 class="footer_titulo footer_titulo_espacamento">Formas de Pagamento</h4>
                    <div class="footer_pagamentos" aria-label="Formas de pagamento">
                        <span class="icon_pagamento_footer">Dinheiro</span>
                        <span class="icon_pagamento_footer">PIX</span>
                        <span class="icon_pagamento_footer">Crédito</span>
                        <span class="icon_pagamento_footer">Débito</span>
                        <span class="icon_pagamento_footer">12x</span>
                    </div>
                </div>
            </div>

            <hr class="linha_footer">

            <div class="direitos_footer">
                <p>© 2026 Eletrônica Cobra. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>
</body>

</html>

<script>

    // envia msg no wpp ao clicar no btn
    const telefone = "555491862723";
    const mensagem = "Olá! Vim pelo site e gostaria de tirar uma dúvida.";
    document.querySelectorAll(".whatsapp_link").forEach(btn => {
        btn.href = `https://wa.me/${telefone}?text=${encodeURIComponent(mensagem)}`;
    });

    //REVER O PQ ESTA BUGADO, SO DA PRA USAR AS SETAS DAS MARCAS QUANDO RECARREGAR A PAGINA !!!
    //SETAS DAS CATEGORIAS ESTAO CORRETAS.
    // barra de rolagem categorias e marcas
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
            scroller.scrollBy({ left: -passoScroll(), behavior: "smooth" });
        });

        btnDir.addEventListener("click", () => {
            scroller.scrollBy({ left: passoScroll(), behavior: "smooth" });
        });

        scroller.addEventListener("scroll", atualizarSetas);
        window.addEventListener("resize", atualizarSetas);

        atualizarSetas();
    }

    iniciarSetas("categoriasScroll", ".categorias_seta_esq", ".categorias_seta_dir");
    iniciarSetas("marcasScroll", ".marcas_seta_esq", ".marcas_seta_dir");

    //novos
    iniciarCarrossel("promocoesScroll", ".promocoes_seta_esq", ".promocoes_seta_dir");
    iniciarCarrossel("novidadesScroll", ".novidades_seta_esq", ".novidades_seta_dir");

</script>