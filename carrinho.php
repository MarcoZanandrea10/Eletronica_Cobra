<?php
$base = '/Cobra';
?>

<div class="carrinho_overlay" id="carrinhoOverlay">
    <aside class="carrinho_lateral" id="carrinhoLateral" aria-label="Carrinho de compras">
        <div class="carrinho_topo">
            <div class="carrinho_topo_texto">
                <h2>Seu carrinho</h2>
                <p>Revise seus produtos antes de finalizar a compra</p>
            </div>

            <button type="button" class="fechar_carrinho" id="fecharCarrinho" aria-label="Fechar carrinho">
                &times;
            </button>
        </div>

        <div class="carrinho_conteudo">
            <div class="item_carrinho">
                <div class="item_carrinho_imagem_box">
                    <img src="<?= $base ?>/img_padrao/mascote_cobra.png" alt="Violão Yamaha C40" class="item_carrinho_img">
                </div>

                <div class="item_carrinho_info">
                    <h3>Violão Yamaha C40</h3>
                    <p class="item_carrinho_categoria">Cordas</p>
                    <p class="item_carrinho_preco">R$ 899,90</p>

                    <div class="item_carrinho_acoes">
                        <div class="controle_quantidade">
                            <button type="button" aria-label="Diminuir quantidade">-</button>
                            <span>1</span>
                            <button type="button" aria-label="Aumentar quantidade">+</button>
                        </div>

                        <button type="button" class="remover_item">Remover</button>
                    </div>
                </div>
            </div>

            <div class="item_carrinho">
                <div class="item_carrinho_imagem_box">
                    <img src="<?= $base ?>/img_padrao/mascote_cobra.png" alt="Teclado Casio CT-S200" class="item_carrinho_img">
                </div>

                <div class="item_carrinho_info">
                    <h3>Teclado Casio CT-S200</h3>
                    <p class="item_carrinho_categoria">Teclas</p>
                    <p class="item_carrinho_preco">R$ 1.199,90</p>

                    <div class="item_carrinho_acoes">
                        <div class="controle_quantidade">
                            <button type="button" aria-label="Diminuir quantidade">-</button>
                            <span>1</span>
                            <button type="button" aria-label="Aumentar quantidade">+</button>
                        </div>

                        <button type="button" class="remover_item">Remover</button>
                    </div>
                </div>
            </div>

            <div class="item_carrinho">
                <div class="item_carrinho_imagem_box">
                    <img src="<?= $base ?>/img_padrao/mascote_cobra.png" alt="Microfone Shure SM58" class="item_carrinho_img">
                </div>

                <div class="item_carrinho_info">
                    <h3>Microfone Shure SM58</h3>
                    <p class="item_carrinho_categoria">Áudio</p>
                    <p class="item_carrinho_preco">R$ 649,90</p>

                    <div class="item_carrinho_acoes">
                        <div class="controle_quantidade">
                            <button type="button" aria-label="Diminuir quantidade">-</button>
                            <span>1</span>
                            <button type="button" aria-label="Aumentar quantidade">+</button>
                        </div>

                        <button type="button" class="remover_item">Remover</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="carrinho_rodape">
            <div class="carrinho_resumo">
                <div class="linha_resumo">
                    <span>Subtotal</span>
                    <strong>R$ 2.749,70</strong>
                </div>

                <div class="linha_resumo">
                    <span>Frete</span>
                    <span>A calcular</span>
                </div>
            </div>

            <div class="carrinho_botoes">
                <button type="button" class="btn_finalizar">Finalizar compra</button>
                <button type="button" class="btn_ver_carrinho">Ver carrinho completo</button>
            </div>
        </div>
    </aside>
</div>

<style>
    #carrinhoContainer .carrinho_overlay {
        position: fixed;
        inset: 0;
        background: rgba(0, 0, 0, 0.45);
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.3s ease, visibility 0.3s ease;
        z-index: 9998;
    }

    #carrinhoContainer .carrinho_overlay.ativo {
        opacity: 1;
        visibility: visible;
    }

    #carrinhoContainer .carrinho_lateral {
        position: absolute;
        top: 0;
        right: 0;
        width: 430px;
        max-width: 100%;
        height: 100%;
        background: #ffffff;
        box-shadow: -10px 0 30px rgba(0, 0, 0, 0.18);
        transform: translateX(100%);
        transition: transform 0.3s ease;
        display: flex;
        flex-direction: column;
    }

    #carrinhoContainer .carrinho_lateral.ativo {
        transform: translateX(0);
    }

    #carrinhoContainer .carrinho_topo {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        gap: 16px;
        padding: 22px 20px;
        border-bottom: 1px solid #e9e9e9;
    }

    #carrinhoContainer .carrinho_topo_texto h2 {
        margin: 0 0 6px;
        font-size: 22px;
        color: #111;
    }

    #carrinhoContainer .carrinho_topo_texto p {
        margin: 0;
        font-size: 14px;
        color: #666;
    }

    #carrinhoContainer .fechar_carrinho {
        background: none;
        border: none;
        font-size: 30px;
        line-height: 1;
        cursor: pointer;
        color: #222;
        padding: 0;
    }

    #carrinhoContainer .carrinho_conteudo {
        flex: 1;
        overflow-y: auto;
        padding: 20px;
        display: flex;
        flex-direction: column;
        gap: 18px;
    }

    #carrinhoContainer .item_carrinho {
        display: grid;
        grid-template-columns: 90px 1fr;
        gap: 14px;
        padding-bottom: 18px;
        border-bottom: 1px solid #efefef;
    }

    #carrinhoContainer .item_carrinho_imagem_box {
        width: 90px;
        height: 90px;
        border-radius: 10px;
        background: #f5f5f5;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
    }

    #carrinhoContainer .item_carrinho_img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    #carrinhoContainer .item_carrinho_info h3 {
        margin: 0 0 6px;
        font-size: 16px;
        color: #111;
    }

    #carrinhoContainer .item_carrinho_categoria {
        margin: 0 0 8px;
        font-size: 13px;
        color: #777;
    }

    #carrinhoContainer .item_carrinho_preco {
        margin: 0 0 12px;
        font-size: 16px;
        font-weight: bold;
        color: #111;
    }

    #carrinhoContainer .item_carrinho_acoes {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 10px;
        flex-wrap: wrap;
    }

    #carrinhoContainer .controle_quantidade {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    #carrinhoContainer .controle_quantidade button {
        width: 32px;
        height: 32px;
        border: 1px solid #d0d0d0;
        background: #fff;
        border-radius: 8px;
        cursor: pointer;
        font-size: 18px;
    }

    #carrinhoContainer .controle_quantidade span {
        min-width: 20px;
        text-align: center;
        font-size: 15px;
        font-weight: 600;
    }

    #carrinhoContainer .remover_item {
        background: none;
        border: none;
        color: #c62828;
        cursor: pointer;
        font-size: 14px;
        padding: 0;
    }

    #carrinhoContainer .carrinho_rodape {
        padding: 20px;
        border-top: 1px solid #e9e9e9;
        display: flex;
        flex-direction: column;
        gap: 18px;
        background: #fff;
    }

    #carrinhoContainer .carrinho_resumo {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    #carrinhoContainer .linha_resumo {
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-size: 15px;
        color: #222;
    }

    #carrinhoContainer .linha_resumo strong {
        font-size: 18px;
    }

    #carrinhoContainer .carrinho_botoes {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    #carrinhoContainer .btn_finalizar,
    #carrinhoContainer .btn_ver_carrinho {
        width: 100%;
        padding: 14px 16px;
        border-radius: 10px;
        cursor: pointer;
        font-size: 15px;
        font-weight: 700;
        transition: 0.2s ease;
    }

    #carrinhoContainer .btn_finalizar {
        background: #111;
        color: #fff;
        border: none;
    }

    #carrinhoContainer .btn_finalizar:hover {
        background: #000;
    }

    #carrinhoContainer .btn_ver_carrinho {
        background: #fff;
        color: #111;
        border: 1px solid #111;
    }

    #carrinhoContainer .btn_ver_carrinho:hover {
        background: #f7f7f7;
    }

    body.carrinho_aberto {
        overflow: hidden;
    }
</style>

<script>
    (function() {
        if (window.carrinhoInicializado) return;
        window.carrinhoInicializado = true;

        function abrirCarrinho() {
            const overlay = document.getElementById('carrinhoOverlay');
            const lateral = document.getElementById('carrinhoLateral');

            if (!overlay || !lateral) return;

            overlay.classList.add('ativo');
            lateral.classList.add('ativo');
            document.body.classList.add('carrinho_aberto');
        }

        function fecharCarrinho() {
            const overlay = document.getElementById('carrinhoOverlay');
            const lateral = document.getElementById('carrinhoLateral');

            if (!overlay || !lateral) return;

            overlay.classList.remove('ativo');
            lateral.classList.remove('ativo');
            document.body.classList.remove('carrinho_aberto');
        }

        document.addEventListener('click', function(event) {
            if (event.target.id === 'fecharCarrinho') {
                fecharCarrinho();
            }

            if (event.target.id === 'carrinhoOverlay') {
                fecharCarrinho();
            }
        });

        window.abrirCarrinhoLateral = abrirCarrinho;
        window.fecharCarrinhoLateral = fecharCarrinho;
    })();
</script>