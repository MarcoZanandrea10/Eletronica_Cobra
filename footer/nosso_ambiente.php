<?php require __DIR__ . '/../header.php'; ?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eletronica Cobra</title>
    <link rel="stylesheet" href="../styles/index.css">
    <link rel="stylesheet" href="../styles/animacoes.css">
    <link rel="icon" href="../img_padrao/mascote_cobra.png">
    <style>
        :root {
            --vermelho: #ED1C24;
            --vermelho-escuro: #BE0000;
            --cinza-claro: #D1D3D4;
        }

        .ambiente {
            background: #fff;
            padding: 40px 0 90px;
        }

        .ambiente_margens {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 24px;
        }

        .ambiente_topo {
            padding: 40px 0 30px;
        }

        .ambiente_subtitulo {
            display: block;
            margin-bottom: 10px;
            font-size: 0.95rem;
            font-weight: 600;
            letter-spacing: 2px;
            color: var(--vermelho);
            text-transform: uppercase;
        }

        .ambiente_topo h1 {
            font-family: "Orbitron", Arial, Helvetica, sans-serif;
            color: black;
            margin: 0;
            font-size: 2.8rem;
        }

        .ambiente_intro {
            padding: 30px 0 70px;
        }

        .ambiente_intro_grid {
            display: grid;
            grid-template-columns: 1.2fr 1fr;
            gap: 35px;
            align-items: center;
        }

        .ambiente_intro_texto h2 {
            font-family: "Orbitron", Arial, Helvetica, sans-serif;
            font-size: 1.8rem;
            color: var(--vermelho);
            margin-bottom: 18px;
        }

        .ambiente_intro_texto p {
            font-size: 1rem;
            color: #555;
            line-height: 1.8;
            margin-bottom: 16px;
        }

        .ambiente_intro_imagem {
            border-radius: 22px;
            overflow: hidden;
            box-shadow: 0 12px 28px rgba(0, 0, 0, 0.10);
            min-height: 380px;
            background: #f3f3f3;
        }

        .ambiente_intro_imagem img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .ambiente_galeria {
            padding: 10px 0 20px;
        }

        .ambiente_titulo_bloco {
            margin-bottom: 35px;
            text-align: center;
        }

        .ambiente_titulo_bloco span {
            display: block;
            margin-bottom: 10px;
            font-size: 0.95rem;
            font-weight: 700;
            letter-spacing: 2px;
            color: var(--vermelho);
            text-transform: uppercase;
        }

        .ambiente_titulo_bloco h2 {
            font-family: "Orbitron", Arial, Helvetica, sans-serif;
            font-size: 2rem;
            color: #111;
            margin-bottom: 12px;
        }

        .ambiente_titulo_bloco p {
            color: #666;
            font-size: 1rem;
            margin: 0;
        }

        .ambiente_fotos_grid {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr;
            gap: 20px;
        }

        .ambiente_foto {
            min-height: 260px;
            border-radius: 22px;
            overflow: hidden;
            background: #f3f3f3;
            box-shadow: 0 10px 24px rgba(0, 0, 0, 0.08);
            transition: transform 0.25s ease;
        }

        .ambiente_foto:hover {
            transform: translateY(-4px);
        }

        .ambiente_foto_grande {
            grid-row: span 2;
            min-height: 540px;
        }

        .ambiente_foto img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }
    </style>
</head>

<body>
    <main class="ambiente">
        <section class="ambiente_topo">
            <div class="ambiente_margens">
                <span class="ambiente_subtitulo">ELETRÔNICA COBRA</span>
                <h1>Nosso Ambiente</h1>
            </div>
        </section>

        <section class="ambiente_intro">
            <div class="ambiente_margens ambiente_intro_grid">
                <div class="ambiente_intro_texto">
                    <h2>Um espaço feito para músicos e apaixonados por som</h2>
                    <p>
                        Na Eletrônica Cobra, buscamos oferecer muito mais do que produtos.
                        Nosso ambiente foi pensado para proporcionar uma experiência agradável,
                        organizada e inspiradora para cada cliente que entra na loja.
                    </p>
                    <p>
                        Aqui você encontra instrumentos, acessórios e equipamentos em um espaço
                        preparado para atender desde iniciantes até músicos mais experientes.
                    </p>
                </div>

                <div class="ambiente_intro_imagem">
                    <img src="<?= $base ?>/img_padrao/ambiente_loja_1.jpg" alt="Ambiente interno da loja">
                </div>
            </div>
        </section>

        <section class="ambiente_galeria">
            <div class="ambiente_margens">
                <div class="ambiente_titulo_bloco">
                    <span>CONHEÇA A LOJA</span>
                    <h2>Alguns espaços do nosso ambiente</h2>
                    <p>
                        Um pouco da estrutura, dos detalhes e da atmosfera da Eletrônica Cobra.
                    </p>
                </div>

                <div class="ambiente_fotos_grid">
                    <div class="ambiente_foto ambiente_foto_grande">
                        <img src="<?= $base ?>/img_padrao/ambiente2.jpg" alt="Foto da loja">
                    </div>

                    <div class="ambiente_foto">
                        <img src="<?= $base ?>/img_padrao/ambiente3.jpg" alt="Foto da loja">
                    </div>

                    <div class="ambiente_foto">
                        <img src="<?= $base ?>/img_padrao/ambiente4.jpg" alt="Foto da loja">
                    </div>

                    <div class="ambiente_foto">
                        <img src="<?= $base ?>/img_padrao/ambiente5.jpg" alt="Foto da loja">
                    </div>

                    <div class="ambiente_foto">
                        <img src="<?= $base ?>/img_padrao/ambiente6.jpg" alt="Foto da loja">
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php require __DIR__ . '/footer.php'; ?>
</body>

</html>