<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plano premium plus - Falalo</title>
    <meta name="description" content="Assinatura Premium Plus, Chatbot Falalo">

    <?php include '../../header.php'; ?>

    <main class="main-1">
        <h1 class="bottom-m">Estamos quase lá, <span class="texto-destaque">conclua</span> seu pedido</h1>

        <p class="nome-plano-checkout bottom-p">Plano: <strong>Premium +</strong></p>

        <hr class="aviso-p bottom-p">

        <span class="aviso-p bottom-gg">Selecione a assinatura</span>

        <section class="escolha-tempo-assinatura">

            <div class="tempo-assinatura tempo-selecionado bottom-m" id="opcao-1-checkout" >
                <div class="topo-tempo-assinatura bottom-m">
                    <span></span>
                    <p>12 MESES</p>
                </div>

                <div class="preco-assinatura-mensal">R$ 253,94/mês</div>
                <div class="preco-assinatura-total">Total R$ 3.047,28</div>

                <span class="economize-plano">Economize 14.5%</span>

            </div>

            <div class="tempo-assinatura bottom-m" id="opcao-2-checkout">
                <div class="topo-tempo-assinatura bottom-m">
                    <span></span>
                    <p>6 MESES</p>
                </div>

                <div class="preco-assinatura-mensal">R$ 267,30/mês</div>
                <div class="preco-assinatura-total">Total R$ 1.603,80</div>

            </div>

            <div class="tempo-assinatura bottom-m" id="opcao-3-checkout">
                <div class="topo-tempo-assinatura bottom-m">
                    <span></span>
                    <p>MENSAL</p>
                </div>

                <div class="preco-assinatura-mensal">R$ 297,00/mês</div>

            </div>

        </section>

        <h2 class="bottom-m">Crie sua conta</h2>

        <script type="text/javascript" src="//email.falalo.com/form/generate.js?id=3"></script>

    </main>

    <?php include '../../footer.php'; ?>

    <script>
        const selectElement = document.getElementById('mauticform_input_capplanopremiumplus_tempo_do_plano');
        const buttonOpcao1 = document.getElementById('opcao-1-checkout');
        const buttonOpcao2 = document.getElementById('opcao-2-checkout');
        const buttonOpcao3 = document.getElementById('opcao-3-checkout');

        // Eventos de click
        buttonOpcao1.addEventListener('click', () => {
            selectElement.value = '12-meses';
            buttonOpcao1.classList.add('tempo-selecionado');
            buttonOpcao2.classList.remove('tempo-selecionado');
            buttonOpcao3.classList.remove('tempo-selecionado');
        });

        buttonOpcao2.addEventListener('click', () => {
            selectElement.value = '6-meses';
            buttonOpcao1.classList.remove('tempo-selecionado');
            buttonOpcao2.classList.add('tempo-selecionado');
            buttonOpcao3.classList.remove('tempo-selecionado');
        });

        buttonOpcao3.addEventListener('click', () => {
            selectElement.value = 'mensal';
            buttonOpcao1.classList.remove('tempo-selecionado');
            buttonOpcao2.classList.remove('tempo-selecionado');
            buttonOpcao3.classList.add('tempo-selecionado');
        });
    </script>

</body>

</html>