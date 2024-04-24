<div class="container">
    <h1>Busca de Imóveis</h1>
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="tipoImovel">Tipo de Imóvel:</label>
                <select class="form-control" id="tipoImovel">
                    <option value="">Selecione</option>
                    <option value="casa">Casa</option>
                    <option value="apartamento">Apartamento</option>
                    <option value="terreno">Terreno</option>
                    <!-- Adicione mais opções conforme necessário -->
                </select>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="modalidade">Modalidade:</label>
                <select class="form-control" id="modalidade">
                    <option value="">Todos</option>
                    <option value="aluguel">Aluguel</option>
                    <option value="venda">Venda</option>
                    <!-- Adicione mais opções conforme necessário -->
                </select>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="preco">Faixa de Preço:</label>
                <input type="range" class="form-control-range" id="preco" min="500" max="12000" step="500" value="500">
                <output for="preco" id="precoOutput">R$ 0</output>
            </div>
        </div>
    </div>
    <button class="btn btn-primary" onclick="buscarImoveis()">Buscar</button>
</div>

<script>
    var precoOutput = document.getElementById('precoOutput');
    var precoInput = document.getElementById('preco');

    precoInput.addEventListener('input', function() {
        precoOutput.textContent = 'R$ ' + precoInput.value;
    });

    function buscarImoveis() {
        var tipoImovel = document.getElementById("tipoImovel").value;
        var modalidade = document.getElementById("modalidade").value;
        var preco = document.getElementById("preco").value;

        // Aqui você pode implementar a lógica para buscar os imóveis com base nos valores dos campos de filtro
        console.log("Tipo de Imóvel: " + tipoImovel + ", Modalidade: " + modalidade + ", Faixa de Preço: R$ " + preco);
        // Exemplo de ação: redirecionar para uma página de resultados com os parâmetros de busca
        // window.location.href = "resultados.html?tipoImovel=" + tipoImovel + "&modalidade=" + modalidade + "&preco=" + preco;
    }
</script>