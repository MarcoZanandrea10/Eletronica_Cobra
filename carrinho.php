<?php
$base = $base ?? '/Cobra';
$modoCarrinho = $modoCarrinho ?? 'pagina';

$itensCarrinho = [
    [
        'nome' => 'Violão Yamaha C40',
        'categoria' => 'Cordas',
        'preco' => 899.90,
        'preco_pix' => 854.90,
        'quantidade' => 1,
        'imagem' => $base . '/img_padrao/mascote_cobra.png'
    ],
    [
        'nome' => 'Teclado Casio CT-S200',
        'categoria' => 'Teclas',
        'preco' => 1199.90,
        'preco_pix' => 1139.90,
        'quantidade' => 1,
        'imagem' => $base . '/img_padrao/mascote_cobra.png'
    ],
    [
        'nome' => 'Microfone Shure SM58',
        'categoria' => 'Áudio',
        'preco' => 649.90,
        'preco_pix' => 617.40,
        'quantidade' => 1,
        'imagem' => $base . '/img_padrao/mascote_cobra.png'
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

    <div class="cobra-cart-backdrop" id="cobraCartBackdrop"></div>

    <aside class="cobra-cart-drawer" id="cobraCartDrawer" aria-hidden="true">
        <div class="cobra-cart-topbar">
            <div>
                <h2>Seu carrinho</h2>
            </div>

            <button type="button" class="cobra-cart-close" id="cobraCartClose" aria-label="Fechar carrinho">
                &times;
            </button>
        </div>

        <div class="cobra-cart-preview-body">
            <div class="cobra-cart-preview-list">
                <?php if ($carrinhoVazio): ?>
                    <div class="cobra-cart-empty-preview">
                        <div class="cobra-cart-empty-icon">🛒</div>
                        <h3>Seu carrinho está vazio</h3>
                        <p>Adicione alguns produtos para vê-los aqui.</p>
                        <a href="<?= $base; ?>/produtos.php" class="cobra-cart-btn">Ver produtos</a>
                    </div>
                <?php else: ?>
                    <?php foreach ($itensCarrinho as $item): ?>
                        <div class="cobra-cart-item">
                            <div class="cobra-cart-thumb">
                                <img src="<?= $item['imagem']; ?>" alt="<?= htmlspecialchars($item['nome']); ?>">
                            </div>

                            <div class="cobra-cart-item-info">
                                <h3><?= htmlspecialchars($item['nome']); ?></h3>
                                <div class="cobra-cart-tag"><?= htmlspecialchars($item['categoria']); ?></div>

                                <p class="cobra-cart-price"><?= formatarPreco($item['preco']); ?></p>
                                <p class="cobra-cart-price-pix"><?= formatarPreco($item['preco_pix']); ?> à vista no PIX</p>

                                <div class="cobra-cart-actions">
                                    <div class="cobra-cart-qty">
                                        <button type="button">-</button>
                                        <span><?= $item['quantidade']; ?></span>
                                        <button type="button">+</button>
                                    </div>

                                    <button type="button" class="cobra-cart-remove">Remover</button>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>

        <div class="cobra-cart-preview-footer">
            <?php if ($carrinhoVazio): ?>
                <div class="cobra-cart-empty-footer">
                    <p>Seu carrinho ainda não tem produtos.</p>
                    <a href="<?= $base; ?>/produtos.php" class="cobra-cart-btn">Começar a comprar</a>
                </div>
            <?php else: ?>
                <div class="cobra-cart-summary">
                    <div class="cobra-cart-row">
                        <span>Subtotal</span>
                        <span><?= formatarPreco($subtotal); ?></span>
                    </div>

                    <div class="cobra-cart-row">
                        <span>PIX</span>
                        <span><?= formatarPreco($subtotalPix); ?></span>
                    </div>

                    <div class="cobra-cart-row">
                        <span>Frete</span>
                        <span>A calcular</span>
                    </div>

                    <div class="cobra-cart-row total">
                        <span>Total</span>
                        <strong><?= formatarPreco($subtotal); ?></strong>
                    </div>
                </div>

                <a href="<?= $base; ?>/carrinho.php" class="cobra-cart-btn">Ver carrinho completo</a>
                <a href="<?= $base; ?>/carrinho.php" class="cobra-cart-btn-secundario">Finalizar compra</a>

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
        <title>Carrinho - Eletrônica Cobra</title>
        <link rel="stylesheet" href="<?= $base; ?>/styles/index.css">
        <link rel="stylesheet" href="<?= $base; ?>/styles/animacoes.css">
        <link rel="stylesheet" href="<?= $base; ?>/styles/carrinho.css">
        <link rel="icon" href="<?= $base; ?>/img_padrao/mascote_cobra.png">
    </head>

    <body>
        <?php require __DIR__ . '/header.php'; ?>

        <main class="cobra-cart-page-main">
            <div class="cobra-cart-page-wrap">
                <section class="cobra-cart-hero">
                    <p class="cobra-cart-kicker">Carrinho Eletrônica Cobra</p>
                    <h1 class="cobra-cart-page-title">Seu setup está quase pronto</h1>
                    <p class="cobra-cart-page-subtitle">
                        Revise seus produtos, confira o resumo do pedido e siga para a finalização.
                        Mantive esta tela com a mesma linguagem visual do restante do site:
                        contraste forte, vermelho em destaque, blocos arredondados e títulos com Orbitron.
                    </p>
                </section>

                <?php if ($carrinhoVazio): ?>
                    <section class="cobra-cart-page-empty">
                        <div class="cobra-cart-page-empty-box">
                            <div class="cobra-cart-empty-icon">🛒</div>
                            <h2>Seu carrinho está vazio</h2>
                            <p>Você ainda não adicionou nenhum produto ao carrinho.</p>
                            <a href="<?= $base; ?>/produtos.php" class="cobra-cart-btn">Ver produtos</a>
                        </div>
                    </section>
                <?php else: ?>
                    <section class="cobra-cart-page-grid">
                        <div class="cobra-cart-page-card cobra-cart-page-list-card">
                            <div class="cobra-cart-page-card-head">
                                <h2>Produtos no carrinho</h2>
                                <span><?= count($itensCarrinho); ?> itens</span>
                            </div>

                            <?php foreach ($itensCarrinho as $item): ?>
                                <article class="cobra-cart-page-item">
                                    <div class="cobra-cart-page-thumb">
                                        <img src="<?= $item['imagem']; ?>" alt="<?= htmlspecialchars($item['nome']); ?>">
                                    </div>

                                    <div class="cobra-cart-page-info">
                                        <h3><?= htmlspecialchars($item['nome']); ?></h3>
                                        <div class="cobra-cart-tag"><?= htmlspecialchars($item['categoria']); ?></div>

                                        <p class="cobra-cart-page-desc">
                                            Produto em modo visual para a montagem inicial da interface.
                                        </p>

                                        <div class="cobra-cart-page-price">
                                            <strong><?= formatarPreco($item['preco']); ?></strong>
                                            <span><?= formatarPreco($item['preco_pix']); ?> à vista no PIX</span>
                                        </div>
                                    </div>

                                    <div class="cobra-cart-page-side">
                                        <div class="cobra-cart-qty">
                                            <button type="button">-</button>
                                            <span><?= $item['quantidade']; ?></span>
                                            <button type="button">+</button>
                                        </div>

                                        <button type="button" class="cobra-cart-remove">Remover</button>
                                    </div>
                                </article>
                            <?php endforeach; ?>
                        </div>

                        <aside class="cobra-cart-page-card cobra-cart-side-box">
                            <h2>Resumo do pedido</h2>

                            <div class="cobra-cart-summary">
                                <div class="cobra-cart-row">
                                    <span>Subtotal</span>
                                    <span><?= formatarPreco($subtotal); ?></span>
                                </div>

                                <div class="cobra-cart-row">
                                    <span>Desconto PIX</span>
                                    <span><?= formatarPreco($subtotal - $subtotalPix); ?></span>
                                </div>

                                <div class="cobra-cart-row">
                                    <span>Frete</span>
                                    <span>A calcular</span>
                                </div>

                                <div class="cobra-cart-row total">
                                    <span>Total</span>
                                    <strong><?= formatarPreco($subtotal); ?></strong>
                                </div>
                            </div>

                            <div class="cobra-cart-coupon">
                                <input type="text" placeholder="Cupom de desconto">
                                <button type="button">Aplicar</button>
                            </div>

                            <a href="#" class="cobra-cart-btn">Finalizar compra</a>
                            <a href="<?= $base; ?>/produtos.php" class="cobra-cart-btn-secundario">Continuar comprando</a>
                        </aside>
                    </section>
                <?php endif; ?>
            </div>
        </main>

        <?php require __DIR__ . '/footer/footer.php'; ?>
    </body>

    </html>
<?php } ?>