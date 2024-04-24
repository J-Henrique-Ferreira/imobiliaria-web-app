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




<div class="hero-search-content" data-select2-id="17">

    <div style="margin-bottom: 10px;">
        <form name="search_code" action="" method="post" class="form_search_code_header">
            <input class="input_search_code_index" name="Codigo" type="text" style="border-radius: 5px; border: none; border: 1px solid #dce3e8;" placeholder="Busca por código" required="">
            <button style="padding-top: 2px; padding-bottom: 2px; border-radius: 5px; border: none; background-color: #fcb812; color: #fff; cursor: pointer;">Buscar por Código</button>
        </form>
    </div>

    <form name="wc_imobi_filter" method="post" class="wc_imobi_filter_form" data-select2-id="16">
        <div class="row">

            <div class="col-lg-3 col-md-3 col-sm-12 small-padd">
                <div class="form-group">
                    <div class="input-with-icon">

                        <select id="business" name="Operacao" class="form-control j_operacao select2-hidden-accessible" data-select2-id="business" tabindex="-1" aria-hidden="true">
                            <option value="" data-select2-id="4">Todos:</option>
                            <option value="P/ALUGUEL" data-select2-id="19">Alugar</option>
                            <option value="P/VENDA" data-select2-id="20">Comprar</option>
                        </select><span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" data-select2-id="3" style="width: 278px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-business-container"><span class="select2-selection__rendered" id="select2-business-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Negócio</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                        <i class="far fa-handshake"></i>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-12 small-padd">
                <div class="form-group">
                    <div class="input-with-icon b-l b-r">
                        <select id="realtytype" value="Tipo" class="form-control j_type select2-hidden-accessible" data-select2-id="realtytype" tabindex="-1" aria-hidden="true">
                            <optgroup label="Todos">
                                <option value="" data-select2-id="6">
                                    Todos
                                </option>
                            </optgroup>
                            <optgroup label="Residencial">
                                <option data-tipo="Apartamento" data-subtipo="Apartamento Padrao" data-categoria="Padrao">Apartamento</option>
                                <option data-tipo="Apartamento" data-subtipo="Apartamento Padrao" data-categoria="Cobertura">Cobertura</option>
                                <option data-tipo="Apartamento" data-subtipo="Apartamento Padrao" data-categoria="Cobertura Duplex">Cobertura Duplex</option>
                                <option data-tipo="Apartamento" data-subtipo="Apartamento Padrao" data-categoria="Cobertura Triplex">Cobertura Triplex</option>
                                <option data-tipo="Casa" data-subtipo="Casa Padrao">Casa</option>
                                <option data-tipo="Casa" data-subtipo="Casa de Condominio">Casa de Condomínio</option>
                                <option data-tipo="Flat/Aparthotel">Flat/Loft/Aparthotel</option>
                                <option data-tipo="Terreno">Terreno</option>
                            </optgroup>
                            <optgroup label="Comercial">
                                <option data-tipo="Comercial/Industrial" data-subtipo="Conjunto Comercial/Sala">Sala</option>
                                <option data-tipo="Comercial/Industrial" data-subtipo="Loja/Salao">Loja</option>
                                <option data-tipo="Comercial/Industrial" data-subtipo="Predio Inteiro">Prédio inteiro</option>
                                <option data-tipo="Comercial/Industrial" data-subtipo="Casa Comercial">Casa</option>
                            </optgroup>
                        </select><span class="select2 select2-container select2-container--default select2-container--focus" dir="ltr" data-select2-id="5" style="width: 276px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-realtytype-container"><span class="select2-selection__rendered" id="select2-realtytype-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Tipo do Imóvel</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>

                        <i class="fas fa-briefcase"></i>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-12 small-padd">
                <div class="form-group">
                    <div class="input-with-icon">

                        <select id="district" name="Bairro" class="form-control j_district select2-hidden-accessible" data-select2-id="district" tabindex="-1" aria-hidden="true">
                            <option value="" data-select2-id="8">Todos</option>
                            <option value="Recreio dos bandeirantes">Recreio dos Bandeirantes</option>
                            <option value="Barra da tijuca">Barra da Tijuca</option>
                            <option value="Vargem grande">Vargem Grande</option>
                            <option value="Vargem pequena">Vargem Pequena</option>
                            <option value="Alto da boa vista">Alto da boa vista</option>
                            <option value="Andaraí">Andaraí</option>
                            <option value="Anil">Anil</option>
                            <option value="Bangu">Bangu</option>
                            <option value="Barra de guaratiba">Barra de guaratiba</option>
                            <option value="Barra do piraí">Barra do piraí</option>
                            <option value="Botafogo">Botafogo</option>
                            <option value="Cabo frio">Cabo frio</option>
                            <option value="Camorim">Camorim</option>
                            <option value="Campo grande">Campo grande</option>
                            <option value="Catete">Catete</option>
                            <option value="Centro">Centro</option>
                            <option value="Copacabana">Copacabana</option>
                            <option value="Cosme velho">Cosme velho</option>
                            <option value="Curicica">Curicica</option>
                            <option value="Flamengo">Flamengo</option>
                            <option value="Freguesia (jacarepaguá)">Freguesia (jacarepaguá)</option>
                            <option value="Gávea">Gávea</option>
                            <option value="Glória">Glória</option>
                            <option value="Guaratiba">Guaratiba</option>
                            <option value="Ilha de guaratiba">Ilha de guaratiba</option>
                            <option value="Indeterminado">Indeterminado</option>
                            <option value="Ipanema">Ipanema</option>
                            <option value="Itanhangá">Itanhangá</option>
                            <option value="Jacarepaguá">Jacarepaguá</option>
                            <option value="Jardim botânico">Jardim botânico</option>
                            <option value="Jardim europa">Jardim europa</option>
                            <option value="Joá">Joá</option>
                            <option value="Lagoa">Lagoa</option>
                            <option value="Laranjeiras">Laranjeiras</option>
                            <option value="Leblon">Leblon</option>
                            <option value="Maracanã">Maracanã</option>
                            <option value="Paciência">Paciência</option>
                            <option value="Parque das palmeiras">Parque das palmeiras</option>
                            <option value="Pechincha">Pechincha</option>
                            <option value="Pedra de guaratiba">Pedra de guaratiba</option>
                            <option value="Praça seca">Praça seca</option>
                            <option value="Residencial jardim do cascalho">Residencial jardim do cascalho</option>
                            <option value="Santa cruz">Santa cruz</option>
                            <option value="Santo cristo">Santo cristo</option>
                            <option value="São conrado">São conrado</option>
                            <option value="São francisco xavier">São francisco xavier</option>
                            <option value="Sepetiba">Sepetiba</option>
                            <option value="Taquara">Taquara</option>
                            <option value="Tijuca">Tijuca</option>
                            <option value="Urca">Urca</option>
                            <option value="Vila da penha">Vila da penha</option>
                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="7" style="width: 278px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-district-container"><span class="select2-selection__rendered" id="select2-district-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Bairro</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>

                        <i class="ti-location-pin"></i>
                    </div>
                </div>
            </div>

            <div class="col-lg-1 col-md-1 col-sm-12 small-padd">
                <div class="form-group">
                    <a title="Busca Avançada" role="button" class="ad-search collapsed" data-toggle="collapse" href="#advance-search" aria-expanded="false" aria-controls="advance-search"><i class="ti-align-center"></i></a>
                </div>
            </div>

            <div class="col-lg-2 col-md-2 col-sm-12 small-padd">
                <div class="form-group">
                    <a href="https://www.phdimobiliaria.com.br/filtro" class="btn search-btn">Buscar</a>
                </div>

                <span class="div_total_imobi" style="display: none;">Resultados: <span class="j_total_imobi" style="font-weight: bold;"> </span> </span>
            </div>

        </div><!-- END row -->
    </form>
    <div class="collapse" id="advance-search" aria-expanded="false" role="banner" style="">

        <!-- row -->
        <div class="row">

            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="form-group">
                    <div class="input-with-icon">
                        <select id="bedrooms" name="bedrooms" class="form-control j_bedrooms select2-hidden-accessible" data-select2-id="bedrooms" tabindex="-1" aria-hidden="true">
                            <option value="" data-select2-id="2">Todos</option>
                            <option value="1" data-select2-id="9">1</option>
                            <option value="2" data-select2-id="10">2</option>
                            <option value="3" data-select2-id="11">3</option>
                            <option value="4" data-select2-id="12">4</option>
                            <option value="5" data-select2-id="13">5 ou mais</option>
                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="14" style="width: 100px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-bedrooms-container"><span class="select2-selection__rendered" id="select2-bedrooms-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Quartos</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>

                        <i class="fas fa-bed"></i>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="form-group">
                    <div class="input-with-icon">
                        <input type="text" class="form-control mask_price j_min_price" name="min_price" value="" placeholder="Preço min">
                        <i class="ti-money"></i>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="form-group">
                    <div class="input-with-icon">
                        <input type="text" class="form-control mask_price j_max_price" name="max_price" value="" placeholder="Preço max">
                        <i class="ti-money"></i>
                    </div>
                </div>
            </div>

        </div>
        <!-- /row -->

        <!-- row -->
        <div class="row">

            <div class="col-lg-12 col-md-12 col-sm-12 mt-5">
                <h4 class="text-dark">Particularidades</h4>
                <ul class="no-ul-list third-row">
                    <li>
                        <input id="Churrasqueira" class="checkbox-custom j_Churrasqueira" type="checkbox" name="check">
                        <label for="Churrasqueira" class="checkbox-custom-label">Churrasqueira</label>
                    </li>
                    <li>
                        <input id="permuta" class="checkbox-custom j_permuta" type="checkbox" name="check">
                        <label for="permuta" class="checkbox-custom-label">Permuta</label>
                    </li>
                    <li>
                        <input id="portaria_24horas" class="checkbox-custom j_portaria_24horas" type="checkbox" name="check">
                        <label for="portaria_24horas" class="checkbox-custom-label">Portaria 24h</label>
                    </li>
                    <li>
                        <input id="Sauna" class="checkbox-custom j_Sauna" type="checkbox" name="check">
                        <label for="Sauna" class="checkbox-custom-label">Sauna</label>
                    </li>
                    <li>
                        <input id="play_ground" class="checkbox-custom j_play_ground" type="checkbox" name="check">
                        <label for="play_ground" class="checkbox-custom-label">PlayGround</label>
                    </li>
                    <li>
                        <input id="salao_festa" class="checkbox-custom j_salao_festa" type="checkbox" name="check">
                        <label for="salao_festa" class="checkbox-custom-label">Salão Festa</label>
                    </li>
                    <li>
                        <input id="Piscina" class="checkbox-custom j_Piscina" type="checkbox" name="check">
                        <label for="Piscina" class="checkbox-custom-label">Piscina</label>
                    </li>
                </ul>
            </div>

        </div>
        <!-- /row -->

    </div>

</div>