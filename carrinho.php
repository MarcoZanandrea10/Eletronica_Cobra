<?php
$base = $base ?? '/Cobra';
$modoCarrinho = $modoCarrinho ?? 'pagina';

// simulação de itens no carrinho
$itensCarrinho = [
    [
        'nome' => 'Guitarra Fender Stratocaster',
        'preco' => 899.90,
        'preco_pix' => 854.90,
        'quantidade' => 1,
        'imagem' => $base . '/img/img_produtos/guitarra1.png'
    ],
    [
        'nome' => 'Guitarra Gibson Les Paul',
        'preco' => 1199.90,
        'preco_pix' => 1139.90,
        'quantidade' => 1,
        'imagem' => $base . '/img/img_produtos/guitarra2.png'
    ],
    [
        'nome' => 'Bateria Pearl Export',
        'preco' => 649.90,
        'preco_pix' => 617.40,
        'quantidade' => 1,
        'imagem' => $base . '/img/img_produtos/bateria1.png'
    ],
];

// $itensCarrinho = [];
$carrinhoVazio = empty($itensCarrinho);

function formatarPreco($valor)
{
    return 'R$ ' . number_format($valor, 2, ',', '.');
}

$subtotal = 0;
$subtotalPix = 0;

foreach ($itensCarrinho as $item) {
    $subtotal += $item['preco'] * $item['quantidade'];
    $subtotalPix += $item['preco_pix'] * $item['quantidade'];
}
?>

<?php if ($modoCarrinho === 'preview') { ?>

    <div class="car_lateral" id="cobraCartBackdrop"></div>

    <aside class="container_car_lateral" id="cobraCartDrawer" aria-hidden="true">
        <div class="footer_carrinho">
            <div>
                <h2>Seu carrinho</h2>
            </div>

            <button type="button" class="fechar_carrinho" id="cobraCartClose">
                &times;
            </button>
        </div>

        <div class="itens_car_lateral">
            <div class="itens_car_lateral_lista">
                <?php if ($carrinhoVazio): ?>
                    <div class="container_car_vazio_lateral">
                        <div class="icon_carrinho">
                            <img src="<?= $base ?>/icons/carrinho_vermelho.png" alt="Ícone do carrinho" width="40" height="40">
                        </div>

                        <h3>Seu carrinho está vazio</h3>
                        <p>Adicione alguns produtos para vê-los aqui.</p>
                        <a href="<?= $base; ?>/produtos.php" class="btn_geral_car">Ver produtos</a>
                    </div>
                <?php else: ?>
                    <?php foreach ($itensCarrinho as $item): ?>
                        <div class="item_car_lateral">
                            <div class="img_item">
                                <img src="<?= $item['imagem']; ?>" alt="<?= htmlspecialchars($item['nome']); ?>">
                            </div>

                            <div class="item_car_lateral_info">
                                <h3><?= htmlspecialchars($item['nome']); ?></h3>

                                <p class="preco_item"><?= formatarPreco($item['preco']); ?></p>
                                <p class="preco_item_pix"><?= formatarPreco($item['preco_pix']); ?> à vista no PIX</p>

                                <div class="btn_car_lateral">
                                    <div class="btn_qtd_car">
                                        <button type="button">-</button>
                                        <a><?= $item['quantidade']; ?></a>
                                        <button type="button">+</button>
                                    </div>

                                    <button type="button" class="btn_remover_item_car">Remover</button>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>

        <div class="container_pagamento_car_lateral">
            <?php if ($carrinhoVazio): ?>
                <div class="car_vazio_box_lateral">
                    <p>Seu carrinho ainda não tem produtos.</p>
                    <a href="<?= $base; ?>/produtos.php" class="btn_geral_car">Começar a comprar</a>
                </div>
            <?php else: ?>
                <div class="container_pagamento_car">
                    <div class="pagamento_item">
                        <a>Subtotal</a>
                        <a><?= formatarPreco($subtotal); ?></a>
                    </div>

                    <div class="pagamento_item">
                        <a>PIX</a>
                        <a><?= formatarPreco($subtotalPix); ?></a>
                    </div>

                    <div class="pagamento_item">
                        <a>Frete</a>
                        <a>A calcular</a>
                    </div>

                    <div class="pagamento_item total">
                        <a>Total</a>
                        <strong><?= formatarPreco($subtotal); ?></strong>
                    </div>
                </div>

                <a href="<?= $base; ?>/carrinho.php" class="btn_geral_car">Ver carrinho completo</a>
                <a href="<?= $base; ?>/carrinho.php" class="btn_geral_car_secundario">Finalizar compra</a>

            <?php endif; ?>
        </div>
    </aside>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            if (window.cobraCartPreviewInit) return;
            window.cobraCartPreviewInit = true;

            const gatilho = document.getElementById('abrirCarrinho');
            const drawer = document.getElementById('cobraCartDrawer');
            const backdrop = document.getElementById('cobraCartBackdrop');
            const fechar = document.getElementById('cobraCartClose');

            if (!gatilho || !drawer || !backdrop) return;

            let timerFechar = null;

            function abrirCarrinho() {
                clearTimeout(timerFechar);
                drawer.classList.add('ativo');
                backdrop.classList.add('ativo');
                drawer.setAttribute('aria-hidden', 'false');
            }

            function fecharCarrinhoComDelay() {
                clearTimeout(timerFechar);
                timerFechar = setTimeout(() => {
                    drawer.classList.remove('ativo');
                    backdrop.classList.remove('ativo');
                    drawer.setAttribute('aria-hidden', 'true');
                }, 160);
            }

            function fecharCarrinhoAgora() {
                clearTimeout(timerFechar);
                drawer.classList.remove('ativo');
                backdrop.classList.remove('ativo');
                drawer.setAttribute('aria-hidden', 'true');
            }

            gatilho.addEventListener('mouseenter', abrirCarrinho);
            gatilho.addEventListener('mouseleave', fecharCarrinhoComDelay);

            drawer.addEventListener('mouseenter', abrirCarrinho);
            drawer.addEventListener('mouseleave', fecharCarrinhoComDelay);

            fechar?.addEventListener('click', fecharCarrinhoAgora);
            backdrop.addEventListener('click', fecharCarrinhoAgora);

            document.addEventListener('keydown', function(evento) {
                if (evento.key === 'Escape') {
                    fecharCarrinhoAgora();
                }
            });
        });
    </script>

<?php } else { ?>
    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Eletrônica Cobra</title>
        <link rel="stylesheet" href="<?= $base; ?>/styles/index.css">
        <link rel="stylesheet" href="<?= $base; ?>/styles/animacoes.css">
        <link rel="stylesheet" href="<?= $base; ?>/styles/carrinho.css">
        <link rel="icon" href="<?= $base; ?>/img/img_padrao/mascote_cobra.png">
    </head>

    <body>
        <?php require __DIR__ . '/header.php'; ?>

        <main>
            <div class="container_car">
                <section class="container_titulo_pedido_car">
                    <p>Seu carrinho</p>
                    <h1>Confira seu pedido</h1>
                    <a>Veja os produtos e finalize sua compra.</a>
                </section>

                <?php if ($carrinhoVazio): ?>
                    <section class="container_car_vazio">
                        <div class="car_vazio_box">
                            <div class="icon_carrinho">
                                <img src="<?= $base ?>/icons/carrinho_vermelho.png" alt="Ícone do carrinho" width="40" height="40">
                            </div>

                            <h2>Seu carrinho está vazio</h2>
                            <p>Você ainda não adicionou nenhum produto ao carrinho.</p>
                            <a href="<?= $base; ?>/produtos.php" class="btn_geral_car">Ver produtos</a>
                        </div>
                    </section>
                <?php else: ?>
                    <section class="container_itens_car">
                        <div class="itens_pedido_car lista_itens_pedido_car">
                            <div class="titulo_itens_pedido_car">
                                <h2>Produtos no carrinho</h2>
                                <a><?= count($itensCarrinho); ?> itens</a>
                            </div>

                            <?php foreach ($itensCarrinho as $item): ?>
                                <article class="container_item_pedido_car">
                                    <div class="img_item_pedido_car">
                                        <img src="<?= $item['imagem']; ?>" alt="<?= htmlspecialchars($item['nome']); ?>">
                                    </div>

                                    <div class="nome_item_pedido_car">
                                        <h3><?= htmlspecialchars($item['nome']); ?></h3>

                                        <div class="preco_item_pedido_car">
                                            <strong><?= formatarPreco($item['preco']); ?></strong>
                                            <a><?= formatarPreco($item['preco_pix']); ?> à vista no PIX</a>
                                        </div>
                                    </div>

                                    <div class="qtd_e_remover_item_car">
                                        <div class="btn_qtd_car">
                                            <button type="button">-</button>
                                            <a><?= $item['quantidade']; ?></a>
                                            <button type="button">+</button>
                                        </div>

                                        <button type="button" class="btn_remover_item_car">Remover</button>
                                    </div>
                                </article>
                            <?php endforeach; ?>
                        </div>

                        <aside class="itens_pedido_car box_itens_pedido_car">
                            <h2>Resumo do pedido</h2>

                            <div class="container_pagamento_car">
                                <div class="pagamento_item">
                                    <a>Subtotal</a>
                                    <a><?= formatarPreco($subtotal); ?></a>
                                </div>

                                <div class="pagamento_item">
                                    <a>Desconto PIX</a>
                                    <a><?= formatarPreco($subtotal - $subtotalPix); ?></a>
                                </div>

                                <div class="pagamento_item">
                                    <a>Frete</a>
                                    <a>A calcular</a>
                                </div>

                                <div class="pagamento_item total">
                                    <a>Total</a>
                                    <strong><?= formatarPreco($subtotal); ?></strong>
                                </div>
                            </div>

                            <div class="cupom_desconto_car">
                                <input type="text" placeholder="Cupom de desconto">
                                <button type="button">Aplicar</button>
                            </div>

                            <a href="#" class="btn_geral_car">Finalizar compra</a>
                            <a href="<?= $base; ?>/produtos.php" class="btn_geral_car_secundario">Continuar comprando</a>
                        </aside>

                        <!-- BTN WPP FIXO NA PÁGINA -->
                        <a class="btn_whatsapp_fixo whatsapp_link" target="_blank">
                            <img src="icons/whatsapp.png" alt="Ícone do WhatsApp" width="30" height="30">
                        </a>

                    </section>
                <?php endif; ?>
            </div>
        </main>

        <?php require __DIR__ . '/footer/footer.php'; ?>
    </body>

    </html>
<?php } ?>