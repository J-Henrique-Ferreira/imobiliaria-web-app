<div class="container shadow rounded-3 p-3">
    <span class="fw-medium fs-4">Buscador de Imóveis</span>
    <div class="row gap-2 mt-3">
        <div class="col-md-3">
            <div class="form-group">
                <label for="preco" class="text-secondary">Local:</label>
                <select class="form-control" id="preco">
                    <option value="">Todos</option>
                    <option value="">Porto Alegre</option>
                    <option value="">Gravataí</option>
                    <option value="">Parobé</option>
                    <option value="">Taquara</option>
                    <option value="">Rolante</option>
                    <!-- Adicione mais opções conforme necessário -->
                </select>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="tipoImovel" class="text-secondary">Tipo De Imóvel:</label>
                <select class="form-control" id="tipoImovel">
                    <option value="">Todos</option>
                    <option value="casa">Casa</option>
                    <option value="apartamento">Apartamento</option>
                    <option value="terreno">Terreno</option>
                    <!-- Adicione mais opções conforme necessário -->
                </select>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="modalidade" class="text-secondary">Tipo De Negócio:</label>
                <select class="form-control" id="modalidade">
                    <option value="">Todos</option>
                    <option value="aluguel">Aluguel</option>
                    <option value="venda">Venda</option>
                    <!-- Adicione mais opções conforme necessário -->
                </select>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="preco" class="text-secondary">Faixa De Preço:</label>
                <select class="form-control" id="preco">
                    <option value="">Selecione</option>
                    <option value="0-500">Até R$ 500</option>
                    <option value="501-1000">R$ 501 - R$ 1000</option>
                    <option value="1001-1500">R$ 1001 - R$ 1500</option>
                    <!-- Adicione mais opções conforme necessário -->
                </select>
            </div>
        </div>
    </div>
    <button class="btn btn-primary mt-3" onclick="buscarImoveis()">Buscar</button>

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