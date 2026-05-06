<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eletrônica Cobra</title>
    <link rel="stylesheet" href="../styles/index.css">
    <link rel="stylesheet" href="../styles/animacoes.css">
    <link rel="icon" href="../img/img_padrao/mascote_cobra.png">
    <style>
        :root {
            --vermelho: #ED1C24;
            --vermelho-escuro: #BE0000;
            --cinza-claro: #D1D3D4;
        }

        .historia {
            background: white;
            padding: 50px 0 90px;
        }

        .historia_margens {
            margin: 0 auto;
            width: min(1180px, calc(100% - 48px));
        }

        .historia_topo {
            text-align: center;
            margin-bottom: 55px;
        }

        .historia_subtitulo {
            color: var(--vermelho);
            text-transform: uppercase;
            display: block;
            font-weight: 700;
            font-size: 0.9rem;
            letter-spacing: 2px;
            margin: 30px 0 10px;
        }

        .historia_topo h1 {
            font-family: "Orbitron", Arial, Helvetica, sans-serif;
            color: #111;
            font-size: 2.8rem;
            margin: 0 0 18px;
        }

        .historia_topo p {
            color: #555;
            margin: 0 auto;
            max-width: 780px;
            line-height: 1.8;
            font-size: 1.05rem;
        }

        .historia_linha {
            display: grid;
            align-items: center;
            gap: 48px;
            margin-bottom: 70px;
            grid-template-columns: 1fr 1fr;
        }

        .historia_linha_invertida .historia_texto {
            order: 2;
        }

        .historia_linha_invertida .historia_foto {
            order: 1;
        }

        .historia_texto h2 {
            font-family: "Orbitron", Arial, Helvetica, sans-serif;
            color: var(--vermelho);
            font-size: 2rem;
            margin: 0 0 22px;
        }

        .historia_texto p {
            color: #555;
            font-size: 1rem;
            line-height: 1.85;
            margin: 0 0 18px;
        }

        .historia_foto {
            background: #f3f3f3;
            overflow: hidden;
            box-shadow: 0 12px 28px rgba(0, 0, 0, 0.10);
            min-height: 330px;
            border-radius: 22px;
        }

        .historia_foto img {
            display: block;
            object-fit: cover;
            width: 100%;
            height: 100%;
            min-height: 330px;
            border-radius: 24px;
        }
    </style>
</head>

<body>
    <?php require __DIR__ . '/../header.php'; ?>

    <main class="historia">
        <section class="historia_margens">
            <div class="historia_topo">
                <span class="historia_subtitulo">Nossa história</span>
                <h1>Eletrônica Cobra</h1>
                <p>
                    Há mais de 40 anos, a Eletrônica Cobra faz parte da história da música na região,
                    atendendo músicos, estudantes, bandas, igrejas, escolas e apaixonados por instrumentos musicais.
                </p>
            </div>

            <div class="historia_linha">
                <div class="historia_texto">
                    <h2>O começo de uma trajetória musical</h2>

                    <p>
                        A história da Eletrônica Cobra começou anos atrás, de forma simples, com muito trabalho,
                        dedicação e uma forte ligação com o universo da música.
                    </p>

                    <p>
                        Desde o início, a loja nasceu com o propósito de oferecer instrumentos, acessórios,
                        equipamentos de som e um atendimento próximo para quem buscava qualidade e confiança.
                    </p>
                </div>

                <div class="historia_foto">
                    <img src="../img/img_footer/loja1.jpeg" alt="Foto Eletrônica Cobra">
                </div>
            </div>

            <div class="historia_linha historia_linha_invertida">
                <div class="historia_texto">
                    <h2>Crescendo junto com a região</h2>

                    <p>
                        Com o passar do tempo, a Cobra foi crescendo junto com seus clientes. Muitos músicos
                        que compraram seus primeiros instrumentos na loja continuaram voltando ao longo dos anos,
                        acompanhando a evolução da empresa e fazendo parte dessa caminhada.
                    </p>

                    <p>
                        A loja se tornou uma referência para quem procura instrumentos musicais, acessórios,
                        equipamentos e orientação na hora de escolher o produto ideal.
                    </p>
                </div>

                <div class="historia_foto">
                    <img src="../img/img_footer/loja2.jpeg" alt="Foto Eletrônica Cobra">
                </div>
            </div>

            <div class="historia_linha">
                <div class="historia_texto">
                    <h2>Mais de quatro décadas de confiança</h2>

                    <p>
                        Hoje, com mais de 40 anos de história, a Eletrônica Cobra é uma loja consolidada na região,
                        reconhecida pela tradição, pela variedade de produtos e pelo cuidado no atendimento.
                    </p>

                    <p>
                        Mesmo acompanhando as mudanças do mercado musical, a Cobra mantém sua essência:
                        atender bem, valorizar a música e construir uma relação de confiança com cada cliente.
                    </p>
                </div>

                <div class="historia_foto">
                    <img src="../img/img_footer/loja3.jpeg" alt="Foto Eletrônica Cobra">
                </div>
            </div>
        </section>
    </main>

    <?php require __DIR__ . '/footer.php'; ?>
</body>

</html>