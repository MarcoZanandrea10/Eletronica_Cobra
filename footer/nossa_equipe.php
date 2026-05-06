<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eletronica Cobra</title>
    <link rel="stylesheet" href="../styles/index.css">
    <link rel="stylesheet" href="../styles/animacoes.css">
    <link rel="icon" href="../img/img_padrao/mascote_cobra.png">
    <style>
        :root {
            --vermelho: #ED1C24;
            --vermelho-escuro: #BE0000;
            --cinza-claro: #D1D3D4;
        }

        .equipe {
            background: white;
            padding: 40px 0 90px;
        }

        .equipe_margens {
            margin: 0 auto;
            padding: 0 24px;
            max-width: 1200px;
        }

        .equipe_topo {
            text-align: center;
            padding: 50px 0 0;
        }

        .equipe_topo h1 {
            font-family: "Orbitron", Arial, Helvetica, sans-serif;
            color: black;
            margin: 0;
            font-size: 2.8rem;
        }

        .equipe_intro {
            padding: 30px 0;
        }

        .equipe_intro_texto {
            text-align: center;
            margin: 0 auto 35px;
            max-width: 700px;
        }

        .equipe_intro_texto h2 {
            font-family: "Orbitron", Arial, Helvetica, sans-serif;
            color: var(--vermelho);
            font-size: 1.8rem;
            margin-bottom: 18px;
        }

        .equipe_intro_texto p {
            color: #555;
            margin: 0;
            font-size: 1rem;
            line-height: 1.8;
        }

        .equipe_foto {
            box-shadow: 0 12px 28px rgba(0, 0, 0, 0.10);
            display: flex;
            overflow: hidden;
            align-items: center;
            justify-content: center;
            margin: 0 auto;
            border-radius: 22px;
            min-height: 500px;
            max-width: 1000px;
            background: linear-gradient(135deg, #f7f7f7 0%, #ececec 100%);
        }

        .equipe_foto img {
            display: block;
            object-fit: cover;
            width: 100%;
            height: 100%;
        }
    </style>
</head>

<body>
    <?php require __DIR__ . '/../header.php'; ?>

    <main class="equipe">
        <section class="equipe_topo">
            <div class="equipe_margens">
                <h1>Nossa Equipe</h1>
            </div>
        </section>

        <section class="equipe_intro">
            <div class="equipe_margens">
                <div class="equipe_intro_texto">
                    <h2>Quem faz a Eletrônica Cobra acontecer</h2>
                    <p>
                        Nossa equipe é formada por pessoas que vivem a música no dia a dia e atendem cada cliente 
                        com atenção, carinho e confiança. Aqui, você encontra um atendimento próximo e acolhedor, 
                        feito por quem realmente entende e gosta desse universo.
                    </p>
                </div>

                <!-- depois add foto da equipe aqui -->
                <div class="equipe_foto">
                    <img src="<?= $base ?>/img/img_padrao/equipe.jpg" alt="Foto da equipe">
                </div>
            </div>
        </section>
    </main>

    <?php require __DIR__ . '/footer.php'; ?>
</body>

</html>