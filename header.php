<?php $base = '/Cobra'; ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= $base ?>/styles/index.css">
    <link rel="stylesheet" href="<?= $base ?>/styles/animacoes.css">
</head>

<body>
    <header class="header">
        <div class="top_promo" id="topPromo">
            <a class="promo_text">
                Pague com <strong>PIX</strong> ou <strong>Cartão</strong> em até <strong>10x</strong> sem juros
            </a>
        </div>

        <div class="header_container">
            <a class="logo" href="<?= $base ?>/index.php">
                <div>
                    <img src="<?= $base ?>/img_padrao/mascote_cobra.png" alt="Logo Eletronica Cobra" width="60" height="60">
                </div>
            </a>

            <div class="barra_pesquisa">
                <div class="box_pesquisa">
                    <img src="<?= $base ?>/icons/lupa.png" alt="Ícone de lupa" class="icon_pesquisa" width="20" height="20">
                    <input type="text" placeholder="Buscar guitarras, baterias, teclados...">
                </div>
            </div>

            <div class="menu">
                <nav class="nav">
                    <a href="<?= $base ?>/index.php">Início</a>

                    <div class="nav_produtos" id="navProdutos">
                        <button class="nav_produtos_btn" type="button" onclick="window.location.href='<?= $base ?>/produtos.php'">Produtos</button>

                        <div class="mega_menu">
                            <div class="mega_menu_conteudo">
                                <div class="mega_menu_categorias">
                                    <button class="menu_categoria ativo" type="button" data-categoria="audio">Áudio</button>
                                    <button class="menu_categoria" type="button" data-categoria="caixa_som">Caixa de Som</button>
                                    <button class="menu_categoria" type="button" data-categoria="cordas">Cordas</button>
                                    <button class="menu_categoria" type="button" data-categoria="teclas">Teclas</button>
                                    <button class="menu_categoria" type="button" data-categoria="percussao">Percussão</button>
                                    <button class="menu_categoria" type="button" data-categoria="sopro">Sopro</button>
                                    <button class="menu_categoria" type="button" data-categoria="infantil">Infantil</button>
                                    <button class="menu_categoria" type="button" data-categoria="bags">Bags</button>
                                    <button class="menu_categoria" type="button" data-categoria="som_ambiente">Som Ambiente</button>
                                    <button class="menu_categoria" type="button" data-categoria="acessorios">Acessórios</button>
                                </div>

                                <div class="mega_menu_produtos">
                                    <div class="categorias_produtos ativo" data-categoria="audio">
                                        <a href="#">Microfones</a>
                                        <a href="#">Mesas de Som</a>
                                        <a href="#">Interfaces</a>
                                        <a href="#">Fones</a>
                                        <a href="#">Monitores</a>
                                        <a href="#">Cabos</a>
                                    </div>

                                    <div class="categorias_produtos" data-categoria="caixa_som">
                                        <a href="#">Caixas Ativas</a>
                                        <a href="#">Caixas Passivas</a>
                                        <a href="#">Subwoofers</a>
                                        <a href="#">Monitores de Palco</a>
                                    </div>

                                    <div class="categorias_produtos" data-categoria="cordas">
                                        <a href="#">Violões</a>
                                        <a href="#">Guitarras</a>
                                        <a href="#">Baixos</a>
                                        <a href="#">Ukuleles</a>
                                        <a href="#">Violinos</a>
                                        <a href="#">Cordas Avulsas</a>
                                        <a href="#">Palhetas</a>
                                        <a href="#">Correias</a>
                                        <a href="#">Capas e Bags</a>
                                    </div>

                                    <div class="categorias_produtos" data-categoria="teclas">
                                        <a href="#">Teclados</a>
                                        <a href="#">Pianos Digitais</a>
                                        <a href="#">Sintetizadores</a>
                                        <a href="#">Controladores</a>
                                        <a href="#">Arranjadores</a>
                                        <a href="#">Suportes</a>
                                        <a href="#">Pedais</a>
                                        <a href="#">Bancos</a>
                                    </div>

                                    <div class="categorias_produtos" data-categoria="percussao">
                                        <a href="#">Baterias</a>
                                        <a href="#">Pratos</a>
                                        <a href="#">Baquetas</a>
                                        <a href="#">Pedais</a>
                                        <a href="#">Peles</a>
                                        <a href="#">Percussão</a>
                                    </div>

                                    <div class="categorias_produtos" data-categoria="sopro">
                                        <a href="#">Saxofones</a>
                                        <a href="#">Flautas</a>
                                        <a href="#">Clarinetes</a>
                                        <a href="#">Trompetes</a>
                                        <a href="#">Gaitas de Boca</a>
                                        <a href="#">Acessórios</a>
                                    </div>

                                    <div class="categorias_produtos" data-categoria="infantil">
                                        <a href="#">Instrumentos Infantis</a>
                                        <a href="#">Brinquedos Musicais</a>
                                        <a href="#">Teclados Infantis</a>
                                    </div>

                                    <div class="categorias_produtos" data-categoria="bags">
                                        <a href="#">Bag para Violão</a>
                                        <a href="#">Bag para Guitarra</a>
                                        <a href="#">Capa para Teclado</a>
                                        <a href="#">Cases</a>
                                    </div>

                                    <div class="categorias_produtos" data-categoria="som_ambiente">
                                        <a href="#">Caixas Ambiente</a>
                                        <a href="#">Amplificadores</a>
                                        <a href="#">Arandelas</a>
                                        <a href="#">Acessórios de Instalação</a>
                                    </div>

                                    <div class="categorias_produtos" data-categoria="acessorios">
                                        <a href="#">Camisetas</a>
                                        <a href="#">Afinadores</a>
                                        <a href="#">Palhetas</a>
                                        <a href="#">Cabos</a>
                                        <a href="#">Suportes</a>
                                        <a href="#">Fontes</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="<?= $base ?>/index.php#sobre">Sobre</a>
                    <a href="<?= $base ?>/index.php#contato">Contato</a>
                </nav>

                <button class="btn_header" type="button" id="abrirCarrinho">
                    <img src="<?= $base ?>/icons/carrinho.png" alt="Ícone do carrinho" width="20" height="20">
                    Carrinho
                </button>

                <button class="btn_header" type="button">
                    <img src="<?= $base ?>/icons/login.png" alt="Ícone do login" width="20" height="20">
                </button>
            </div>
        </div>
    </header>

    <div id="carrinhoContainer"></div>

    <script src="<?= $base ?>/scripts/carrinho.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const menuProdutos = document.getElementById("navProdutos");
            if (!menuProdutos) return;

            const titulo = document.getElementById("megaMenuTitulo");
            const categorias = menuProdutos.querySelectorAll(".menu_categoria");
            const paineis = menuProdutos.querySelectorAll(".categorias_produtos");

            let timeoutFechar;

            const setAtivo = (categoriaId, nomeCategoria) => {
                categorias.forEach(item => item.classList.remove("ativo"));
                paineis.forEach(item => item.classList.remove("ativo"));

                menuProdutos.querySelector(`.menu_categoria[data-categoria="${categoriaId}"]`)?.classList.add("ativo");
                menuProdutos.querySelector(`.categorias_produtos[data-categoria="${categoriaId}"]`)?.classList.add("ativo");

                if (titulo) titulo.textContent = nomeCategoria;
            };

            menuProdutos.addEventListener("mouseenter", () => {
                clearTimeout(timeoutFechar);
                menuProdutos.classList.add("ativo");
            });

            menuProdutos.addEventListener("mouseleave", () => {
                timeoutFechar = setTimeout(() => {
                    menuProdutos.classList.remove("ativo");
                }, 120);
            });

            categorias.forEach(categoria => {
                categoria.addEventListener("mouseenter", () => {
                    setAtivo(categoria.dataset.categoria, categoria.textContent.trim());
                });
            });
        });
    </script>
</body>