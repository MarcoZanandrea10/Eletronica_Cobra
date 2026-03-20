<?php $base = '/ELETRONICA_COBRA'; ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <!-- FOOTER -->
    <footer class="footer">
        <div class="footer_margens">
            <div class="footer_grid">
                <!-- COL 1: Logo -->
                <div class="footer_col">
                    <a class="footer_logo">
                        <img src="<?= $base ?>/img_padrao/mascote_cobra.png" alt="Logo Eletrônica Cobra" width="40" height="40">
                        <span class="footer_nome">ELETRÔNICA <b>COBRA</b></span>
                    </a>

                    <p class="footer_texto">
                        Sua loja de confiança para instrumentos musicais há mais de 40 anos.
                    </p>

                    <div class="footer_redes_sociais">
                        <a href="https://www.instagram.com/cobrainstrumentosmusicais/" target="_blank" rel="noopener">
                            <img class="btn_rede_sociais" src="<?= $base ?>/icons/instagram.png" alt="Ícone do Instagram" width="40"
                                height="40">
                        </a>
                        <a href="https://www.facebook.com/cobrainstrumentosmusicais?locale=pt_BR" target="_blank"
                            rel="noopener">
                            <img class="btn_rede_sociais" src="<?= $base ?>/icons/facebook.png" alt="Ícone do Facebook" width="40"
                                height="40">
                        </a>
                        <a href="https://www.tiktok.com/@eletronica.cobra" target="_blank" rel="noopener">
                            <img class="btn_rede_sociais" src="<?= $base ?>/icons/tiktok.png" alt="Ícone do TikTok" width="40"
                                height="40">
                        </a>
                    </div>
                </div>  

                <!-- COL 2: Sobre Nós -->
                <!-- ARRUMAR ESSA MERDA QUE ESTA TUDO ERRADO!!! -->
                <!-- nao esta encontrado o caminho correto -->
                <div class="footer_col">
                    <h4 class="footer_titulo">Sobre Nós</h4>
                    <ul class="footer_lista">
                        <li><a href="<?= $base ?>/footer/nossa_historia.php">Nossa História</a></li>
                        <li><a href="<?= $base ?>/footer/nossa_equipe.php">Nossa Equipe</a></li>
                        <li><a href="<?= $base ?>/footer/nosso_ambiente.php">Nosso Ambiente</a></li>
                    </ul>
                </div>

                <!-- COL 3: Categorias -->
                <!-- ajeitar isso depois -->
                <!-- colocar todas as categorias e 5 do lado e 5 do outro -->
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