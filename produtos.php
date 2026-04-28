<?php $base = '/Cobra'; ?>

<?php
$pagina_atual = isset($_GET['pagina']) ? intval($_GET['pagina']) : 1;

if ($pagina_atual < 1) {
    $pagina_atual = 1;
}

$limite_por_pagina = 20;
$inicio = ($pagina_atual - 1) * $limite_por_pagina;

$busca = isset($_GET['busca']) ? trim($_GET['busca']) : '';
$categoria = isset($_GET['categoria']) ? trim($_GET['categoria']) : '';
$marca = isset($_GET['marca']) ? trim($_GET['marca']) : '';
$ordenar = isset($_GET['ordenar']) ? trim($_GET['ordenar']) : '';

$produtos = [
    [
        'nome' => 'Violão Tagima Dallas',
        'categoria' => 'Cordas',
        'marca' => 'Tagima',
        'preco' => 799.90,
        'preco_antigo' => 899.90,
        'imagem' => 'img_padrao/produto_teste.png',
        'badge' => 'OFERTA'
    ],
    [
        'nome' => 'Teclado Yamaha PSR',
        'categoria' => 'Teclas',
        'marca' => 'Yamaha',
        'preco' => 1899.90,
        'preco_antigo' => '',
        'imagem' => 'img_padrao/produto_teste.png',
        'badge' => 'NOVO'
    ],
    [
        'nome' => 'Microfone Shure Dinâmico',
        'categoria' => 'Áudio',
        'marca' => 'Shure',
        'preco' => 489.90,
        'preco_antigo' => '',
        'imagem' => 'img_padrao/produto_teste.png',
        'badge' => ''
    ],
    [
        'nome' => 'Caixa de Som JBL Ativa',
        'categoria' => 'Caixas',
        'marca' => 'JBL',
        'preco' => 1599.90,
        'preco_antigo' => 1749.90,
        'imagem' => 'img_padrao/produto_teste.png',
        'badge' => 'OFERTA'
    ],
    [
        'nome' => 'Guitarra Michael Stratocaster',
        'categoria' => 'Cordas',
        'marca' => 'Michael',
        'preco' => 1099.90,
        'preco_antigo' => '',
        'imagem' => 'img_padrao/produto_teste.png',
        'badge' => ''
    ],
    [
        'nome' => 'Pedal Overdrive Borne',
        'categoria' => 'Acessórios',
        'marca' => 'Borne',
        'preco' => 319.90,
        'preco_antigo' => 399.90,
        'imagem' => 'img_padrao/produto_teste.png',
        'badge' => 'PROMO'
    ],
    [
        'nome' => 'Ukulele Giannini Soprano',
        'categoria' => 'Cordas',
        'marca' => 'Giannini',
        'preco' => 249.90,
        'preco_antigo' => '',
        'imagem' => 'img_padrao/produto_teste.png',
        'badge' => ''
    ],
    [
        'nome' => 'Fone AKG Profissional',
        'categoria' => 'Áudio',
        'marca' => 'AKG',
        'preco' => 699.90,
        'preco_antigo' => 799.90,
        'imagem' => 'img_padrao/produto_teste.png',
        'badge' => 'OFERTA'
    ],
    [
        'nome' => 'Contrabaixo Tagima TW',
        'categoria' => 'Cordas',
        'marca' => 'Tagima',
        'preco' => 1399.90,
        'preco_antigo' => '',
        'imagem' => 'img_padrao/produto_teste.png',
        'badge' => ''
    ],
    [
        'nome' => 'Cajon Acústico Profissional',
        'categoria' => 'Percussão',
        'marca' => 'Michael',
        'preco' => 399.90,
        'preco_antigo' => '',
        'imagem' => 'img_padrao/produto_teste.png',
        'badge' => ''
    ],
    [
        'nome' => 'Mesa de Som Behringer',
        'categoria' => 'Áudio',
        'marca' => 'Behringer',
        'preco' => 1299.90,
        'preco_antigo' => 1499.90,
        'imagem' => 'img_padrao/produto_teste.png',
        'badge' => 'OFERTA'
    ],
    [
        'nome' => 'Bag para Violão',
        'categoria' => 'Acessórios',
        'marca' => 'Kadosh',
        'preco' => 129.90,
        'preco_antigo' => '',
        'imagem' => 'img_padrao/produto_teste.png',
        'badge' => ''
    ],
];

$produtos_filtrados = [];

foreach ($produtos as $produto) {
    $passou_filtro = true;

    if ($busca != '' && stripos($produto['nome'], $busca) === false) {
        $passou_filtro = false;
    }

    if ($categoria != '' && $produto['categoria'] != $categoria) {
        $passou_filtro = false;
    }

    if ($marca != '' && $produto['marca'] != $marca) {
        $passou_filtro = false;
    }

    if ($passou_filtro) {
        $produtos_filtrados[] = $produto;
    }
}

if ($ordenar == 'menor_preco') {
    usort($produtos_filtrados, function ($a, $b) {
        if ($a['preco'] == $b['preco']) {
            return 0;
        }

        return ($a['preco'] < $b['preco']) ? -1 : 1;
    });
}

if ($ordenar == 'maior_preco') {
    usort($produtos_filtrados, function ($a, $b) {
        if ($a['preco'] == $b['preco']) {
            return 0;
        }

        return ($a['preco'] > $b['preco']) ? -1 : 1;
    });
}

if ($ordenar == 'nome') {
    usort($produtos_filtrados, function ($a, $b) {
        return strcmp($a['nome'], $b['nome']);
    });
}

$total_produtos = count($produtos_filtrados);
$total_paginas = ceil($total_produtos / $limite_por_pagina);

if ($total_paginas < 1) {
    $total_paginas = 1;
}

if ($pagina_atual > $total_paginas) {
    $pagina_atual = $total_paginas;
    $inicio = ($pagina_atual - 1) * $limite_por_pagina;
}

$produtos_pagina = array_slice($produtos_filtrados, $inicio, $limite_por_pagina);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eletronica Cobra</title>
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="<?= $base; ?>/styles/produtos.css">
    <link rel="icon" href="<?= $base; ?>/img/img_padrao/mascote_cobra.png">
</head>


<body>
    <?php require 'header.php'; ?>

    <main class="catalogo">
        <section class="catalogo_topo">
            <div class="catalogo_margens">
                <h1>Produtos</h1>
            </div>
        </section>

        <section class="catalogo_margens catalogo_area">
            <aside class="catalogo_filtros">
                <div class="catalogo_filtros_topo">
                    <h2>Filtros</h2>
                    <a href="produtos.php">Limpar</a>
                </div>

                <form method="GET" class="catalogo_form">
                    <label>
                        Buscar produto
                        <input type="text" name="busca" placeholder="Ex: violão" value="<?= htmlspecialchars($busca); ?>">
                    </label>

                    <label>
                        Categoria
                        <select name="categoria">
                            <option value="">Todas</option>
                            <option value="Cordas" <?= $categoria == 'Cordas' ? 'selected' : ''; ?>>Cordas</option>
                            <option value="Teclas" <?= $categoria == 'Teclas' ? 'selected' : ''; ?>>Teclas</option>
                            <option value="Áudio" <?= $categoria == 'Áudio' ? 'selected' : ''; ?>>Áudio</option>
                            <option value="Caixas" <?= $categoria == 'Caixas' ? 'selected' : ''; ?>>Caixas</option>
                            <option value="Percussão" <?= $categoria == 'Percussão' ? 'selected' : ''; ?>>Percussão</option>
                            <option value="Acessórios" <?= $categoria == 'Acessórios' ? 'selected' : ''; ?>>Acessórios</option>
                        </select>
                    </label>

                    <label>
                        Marca
                        <select name="marca">
                            <option value="">Todas</option>
                            <option value="Tagima" <?= $marca == 'Tagima' ? 'selected' : ''; ?>>Tagima</option>
                            <option value="Yamaha" <?= $marca == 'Yamaha' ? 'selected' : ''; ?>>Yamaha</option>
                            <option value="Shure" <?= $marca == 'Shure' ? 'selected' : ''; ?>>Shure</option>
                            <option value="JBL" <?= $marca == 'JBL' ? 'selected' : ''; ?>>JBL</option>
                            <option value="Michael" <?= $marca == 'Michael' ? 'selected' : ''; ?>>Michael</option>
                            <option value="Borne" <?= $marca == 'Borne' ? 'selected' : ''; ?>>Borne</option>
                            <option value="Giannini" <?= $marca == 'Giannini' ? 'selected' : ''; ?>>Giannini</option>
                            <option value="AKG" <?= $marca == 'AKG' ? 'selected' : ''; ?>>AKG</option>
                            <option value="Behringer" <?= $marca == 'Behringer' ? 'selected' : ''; ?>>Behringer</option>
                            <option value="Kadosh" <?= $marca == 'Kadosh' ? 'selected' : ''; ?>>Kadosh</option>
                        </select>
                    </label>

                    <label>
                        Ordenar
                        <select name="ordenar">
                            <option value="">Padrão</option>
                            <option value="menor_preco" <?= $ordenar == 'menor_preco' ? 'selected' : ''; ?>>Menor preço</option>
                            <option value="maior_preco" <?= $ordenar == 'maior_preco' ? 'selected' : ''; ?>>Maior preço</option>
                            <option value="nome" <?= $ordenar == 'nome' ? 'selected' : ''; ?>>Nome</option>
                        </select>
                    </label>

                    <button type="submit">Aplicar filtros</button>
                </form>
            </aside>

            <section class="catalogo_conteudo">
                <div class="catalogo_resultado_topo">
                    <h2>Produtos disponíveis</h2>

                    <span class="catalogo_resultado_qtd">
                        <?= $total_produtos; ?> produto<?= $total_produtos != 1 ? 's' : ''; ?> encontrado<?= $total_produtos != 1 ? 's' : ''; ?>
                    </span>
                </div>

                <?php if (count($produtos_pagina) == 0) { ?>
                    <div class="catalogo_vazio">
                        <h3>Nenhum produto encontrado</h3>
                        <p>Tente alterar os filtros para encontrar outros produtos.</p>
                    </div>
                <?php } else { ?>
                    <div class="catalogo_grid">
                        <?php foreach ($produtos_pagina as $produto) { ?>
                            <article class="catalogo_card">
                                <?php if ($produto['badge'] != '') { ?>
                                    <span class="catalogo_badge">
                                        <?= htmlspecialchars($produto['badge']); ?>
                                    </span>
                                <?php } ?>

                                <a href="#" class="catalogo_img">
                                    <?php if ($produto['imagem'] != '') { ?>
                                        <img src="<?= htmlspecialchars($produto['imagem']); ?>" alt="<?= htmlspecialchars($produto['nome']); ?>">
                                    <?php } else { ?>
                                        <span>Imagem do produto</span>
                                    <?php } ?>
                                </a>

                                <div class="catalogo_info">
                                    <span class="catalogo_categoria">
                                        <?= htmlspecialchars($produto['categoria']); ?> • <?= htmlspecialchars($produto['marca']); ?>
                                    </span>

                                    <h3>
                                        <a href="#">
                                            <?= htmlspecialchars($produto['nome']); ?>
                                        </a>
                                    </h3>

                                    <div class="catalogo_preco">
                                        <?php if ($produto['preco_antigo'] != '') { ?>
                                            <span class="catalogo_preco_antigo">
                                                R$ <?= number_format($produto['preco_antigo'], 2, ',', '.'); ?>
                                            </span>
                                        <?php } ?>

                                        <strong>
                                            R$ <?= number_format($produto['preco'], 2, ',', '.'); ?>
                                        </strong>
                                    </div>

                                    <div class="catalogo_pagamento">
                                        <span>EM ATÉ 10X SEM JUROS</span>
                                        <b>R$ <?= number_format($produto['preco'] * 0.95, 2, ',', '.'); ?> À VISTA NO PIX</b>
                                    </div>
                                </div>

                                <div class="catalogo_acoes">
                                    <button type="button">Comprar</button>
                                </div>
                            </article>
                        <?php } ?>
                    </div>

                    <?php if ($total_paginas > 1) { ?>
                        <nav class="catalogo_paginacao">
                            <?php if ($pagina_atual > 1) { ?>
                                <?php
                                $params = $_GET;
                                $params['pagina'] = $pagina_atual - 1;
                                ?>
                                <a href="?<?= http_build_query($params); ?>">Anterior</a>
                            <?php } ?>

                            <?php for ($i = 1; $i <= $total_paginas; $i++) { ?>
                                <?php
                                $params = $_GET;
                                $params['pagina'] = $i;
                                ?>
                                <a href="?<?= http_build_query($params); ?>" class="<?= $pagina_atual == $i ? 'ativo' : ''; ?>">
                                    <?= $i; ?>
                                </a>
                            <?php } ?>

                            <?php if ($pagina_atual < $total_paginas) { ?>
                                <?php
                                $params = $_GET;
                                $params['pagina'] = $pagina_atual + 1;
                                ?>
                                <a href="?<?= http_build_query($params); ?>">Próxima</a>
                            <?php } ?>
                        </nav>
                    <?php } ?>
                <?php } ?>
            </section>
        </section>
    </main>

    <!-- BTN WPP FIXO NA PÁGINA -->
    <a class="btn_whatsapp_fixo whatsapp_link" target="_blank">
        <img src="icons/whatsapp.png" alt="Ícone do WhatsApp" width="30" height="30">
    </a>

    <?php require __DIR__ . '/footer/footer.php'; ?>
</body>

</html>