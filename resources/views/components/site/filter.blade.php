<style>
    .tab-btn {
        border-radius: 0;
        border: 1px solid #007bff;
        color: #007bff;
        width: 50%;
    }

    .tab-btn.active {
        background-color: #007bff;
        color: white;
        border: none;
    }

    .form-container {
        padding: 20px;
        background: #f8f9fa;
        border-radius: 10px;
    }

    .advanced-search {
        color: #007bff;
        cursor: pointer;
    }

    .tab-btn:hover {
        background-color: #007bff;
        color: white;
    }
</style>


<div id="filter" class="container border border-1 border-secondary border-opacity-50 rounded-3 p-4 pb-4"
    style="background-color: /*#e7e7e7d4*/ #fffffff0; max-width: 860px;">
    <div class="fw-medium fs-4 text-uppercase text-center p-3 pb-4">Encontre seu imóvel</div>
    <div class="d-flex justify-content-center mb-3 gap-2">
        <button class="btn tab-btn active rounded-3" id="btnComprar">Comprar</button>
        <button class="btn tab-btn rounded-3" id="btnAlugar">Alugar</button>
    </div>
    <form>
        <div class="row g-3">
            <labelel class="col-md-4 text-dark text-opacity-75 mb-1">
                Tipo de imóvel
                <select class="form-select">
                    <option selected></option>
                    <option value="1">Casa</option>
                    <option value="2">Apartamento</option>
                </select>
            </labelel>
            <labelel class="col-md-4 text-dark text-opacity-75 mb-1">
                Cidade
                <select class="form-select">
                    <option selected></option>
                    <option value="1">São Paulo</option>
                    <option value="2">Rio de Janeiro</option>
                </select>
            </labelel>
            <label class="col-md-4 text-dark text-opacity-75 mb-1">
                Bairros
                <select class="form-select">
                    <option selected>Todos</option>
                    <option value="1">Opção 1</option>
                    <option value="2">Opção 2</option>
                </select>
            </label>
            <label class="col-md-4 text-dark text-opacity-75 mb-1">
                Código
                <input type="text" class="form-control" placeholder="1234">
            </label>
            <label class="col-md-4 text-dark text-opacity-75 mb-1">
                Valor mínimo
                <select class="form-select">
                    <option selected></option>
                    <option value="1">R$ 100.000</option>
                    <option value="2">R$ 200.000</option>
                </select>
            </label>
            <label class="col-md-4 text-dark text-opacity-75 mb-1">
                Valor máximo
                <select class="form-select">
                    <option selected></option>
                    <option value="1">R$ 300.000</option>
                    <option value="2">R$ 400.000</option>
                </select>
            </label>

        </div>

        <div class="d-none row g-3 mt-1">
            <label class="col-md-4 text-dark text-opacity-75 mb-1">
                Quartos
                <select class="form-select">
                    <option selected></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                </select>
            </label>
            <label class="col-md-4 text-dark text-opacity-75 mb-1">
                Banheiros
                <select class="form-select">
                    <option selected></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                </select>
            </label>
            <labelel class="col-md-4 text-dark text-opacity-75 mb-1">
                Suites
                <select class="form-select">
                    <option selected></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                </select>
            </labelel>
            <label class="col-md-4 text-dark text-opacity-75 mb-1">
                Garagens
                <select class="form-select">
                    <option selected></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                </select>
            </label>
        </div>
        <div class="d-flex justify-content-between align-items-center mt-3">
            <span class="advanced-search">🔍 Busca Avançada</span>
            <button type="submit" class="btn btn-primary col-md-4">Buscar</button>
        </div>
    </form>
</div>

<script>
    var precoOutput = document.getElementById('precoOutput');
    var precoInput = document.getElementById('preco');

    precoInput.addEventListener('input', function () {
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

<script>
    document.querySelectorAll('.tab-btn').forEach(button => {
        button.addEventListener('click', function () {
            document.querySelectorAll('.tab-btn').forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');
        });
    });
</script>

<!--
    <div class="d-flex flex-column flex-lg-row justify-content-center  gap-3 mt-3">
        <div class="form-group w-100 mb-3 mb-lg-0 ">
            <label for="preco" class="text-dark text-opacity-75 mb-1 text-uppercase">Cidade:</label>
            <select class="form-control" id="preco">
                <option value="">Todos</option>
                <option value="">Porto Alegre</option>
                <option value="">Gravataí</option>
                <option value="">Parobé</option>
                <option value="">Taquara</option>
                <option value="">Rolante</option>
                </select>
        </div>
        <div class="form-group w-100 mb-3 mb-lg-0 ">
            <div class="form-group">
                <label for="tipoImovel" class="text-dark text-opacity-75 mb-1 text-uppercase">Tipo De Imóvel:</label>
                <select class="form-control" id="tipoImovel">
                    <option value="">Todos</option>
                    <option value="casa">Casa</option>
                    <option value="apartamento">Apartamento</option>
                    <option value="terreno">Terreno</option>
                </select>
            </div>
        </div>
        <div class="form-group w-100 mb-3 mb-lg-0 ">
            <div class="form-group">
                <label for="modalidade" class="text-dark text-opacity-75 mb-1">Tipo De Negócio:</label>
                <select class="form-control" id="modalidade">
                    <option value="">Todos</option>
                    <option value="aluguel">Aluguel</option>
                    <option value="venda">Venda</option>
                </select>
            </div>
        </div>
        <div class="form-group w-100">
            <div class="form-group">
                <label for="preco" class="text-dark text-opacity-75 mb-1">Faixa De Preço:</label>
                <select class="form-control" id="preco">
                    <option value="">Selecione</option>
                    <option value="0-500">Até R$ 500</option>
                    <option value="501-1000">R$ 501 - R$ 1000</option>
                    <option value="1001-1500">R$ 1001 - R$ 1500</option>
                </select>
            </div>
        </div>

        <button class="btn btn-primary mt-4  mx-lg-0 " style="width: 200px;" onclick="buscarImoveis()">Buscar</button>
    </div>
-->