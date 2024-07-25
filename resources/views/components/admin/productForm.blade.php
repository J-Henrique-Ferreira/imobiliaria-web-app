<form method="POST" action="{{$actionProp}}">
    @csrf
    @method($methodProp)
    <div class="d-flex flex-column flex-md-row gap-4">
        <div class="col-12 col-md-6 d-md-flex flex-column gap-3">
            <div class="pb-2 mb-4 fs-5 border-bottom">
                Negócio
            </div>
            <div class="d-flex flex-column flex-md-row gap-3">
                <div class="w-100">
                    <label for="category_id" class="form-label">Tipo De Imóvel</label>
                    <select id="category_id" name="category_id" class="form-select">
                        <option selected>Casa</option>
                        <option>Casa em condomíno</option>
                        <option>Sobrado</option>

                        <option>Apartamento</option>
                        <option>Apartamento Garden</option>
                        <option>Duplex</option>
                        <option>Loft</option>

                        <option>Cobertura</option>
                        <option>Loja</option>
                        <option>Depósito</option>
                        <option>Pavilhão</option>

                        <option>Predio Comercial</option>
                        <option>Salas Conjuntas</option>
                        <option>Apartamento</option>
                        <option>Sala comercial</option>

                        <option>Terreno</option>
                        <option>Garagem</option>
                    </select>
                </div>

                <div class="w-100">
                    <label for="business_id" class="form-label">Tipo De Negócio</label>
                    <select id="business_id" name="business_id" class="form-select">
                        <option selected value="">Selecione</option>
                        <option>Aluguel</option>
                        <option>Venda</option>
                    </select>
                </div>

                <div class="w-100">
                    <label for="value" name="value" class="form-label">Valor</label>
                    <input type="number" class="form-control" id="value">
                </div>
            </div>

            <div class="py-2 my-4 fs-5 border-bottom">
                Endereço
            </div>

            <div class="d-flex flex-column flex-md-row gap-3">
                <div class="w-100">
                    <label for="address_city_id" class="form-label">Cidade</label>
                    <select id="address_city_id" name="address_city_id" class="form-select form-control">
                        <option selected value="">Selecione</option>
                        <option>Taquara</option>
                        <option>Parobé</option>
                        <option>Igrejinha</option>
                        <option>Três Coroas</option>
                        <option>Gramado</option>
                        <option>Canela</option>
                        <option>Rolante</option>
                        <option>São Leopoldo</option>
                    </select>
                </div>

                <div class="w-100">
                    <label for="address_district_id" class="form-label">Bairro</label>
                    <select id="address_district_id" name="address_district_id" class="form-select">
                        <option selected value="">Selecione</option>
                        <option>Parobé</option>
                        <option>Igrejinha</option>
                        <option>Três Coroas</option>
                        <option>Gramado</option>
                        <option>Canela</option>
                        <option>Rolante</option>
                        <option>São Leopoldo</option>
                    </select>
                </div>
            </div>

            <div class="d-flex flex-column flex-md-row gap-3 mt-md-0 mt-3">
                <div class="w-100">
                    <label for="address_street" class="form-label">Rua</label>
                    <input type="text" class="form-control" id="address_street" name="address_street">
                </div>

                <div class="w-100">
                    <label for="address_number" class="form-label">Número</label>
                    <input type="number" class="form-control" id="address_number" name="address_number">
                </div>
            </div>

            <div class="py-2 my-4 fs-5 border-bottom">
                Informações complementares
            </div>

            <div class="d-flex gap-3 mb-3">
                <div class="w-100">
                    <label for="bedroom" class="form-label">Quartos</label>
                    <input type="number" class="form-control" id="bedroom" name="bedroom">
                </div>
                <div class="w-100">
                    <label for="bathroom" class="form-label">Banheiros</label>
                    <input type="number" class="form-control" id="bathroom" name="bathroom">
                </div>
            </div>

            <div class="d-flex gap-3 mb-3">
                <div class="w-100">
                    <label for="area_size" class="form-label">Área - mt²</label>
                    <input type="number" class="form-control" id="area_size" name="area_size">
                </div>
                <div class="w-100">
                    <label for="parking_space" class="form-label">Vagas</label>
                    <input type="number" class="form-control" id="parking_space" name="parking_space">
                </div>
            </div>

            <div class="d-flex gap-3 mb-3">
                <div class="w-100">
                    <label for="iptu" class="form-label">IPTU</label>
                    <input type="number" class="form-control" id="iptu" name="iptu">
                </div>
                <div class="w-100">
                    <label for="condominium" class="form-label">Condomínio</label>
                    <input type="number" class="form-control" id="condominium" name="condominium">
                </div>
            </div>
        </div>

        <div class="w-100 d-md-flex flex-column gap-3">
            <div class="">
                <label class="form-label" for="description">
                    Descrição
                </label>
                <textarea class="form-control" name="description" id="description" cols="40" rows="8"></textarea>
            </div>

            <div style="margin-top: 22px;">
                <label class="form-label" for="images_list_url">
                    Imagens
                </label>
                <input onchange="reativeListFiles()" class="form-control mb-3" type="file" name="images_list_url" id="images_list_url" multiple>
                <div class="d-flex flex-column gap-3 overflow-y-scroll  navbar-nav-scroll p-2" style="max-height: 400px;" id="preview_images"></div>
            </div>
        </div>
    </div>
    <div class="col-12 text-center mt-4">
        <button type="submit" class="col-12 col-sm-4 btn btn-primary">Salvar</button>
    </div>
</form>

<script>
    function reativeListFiles() {
        var inputFiles = document.getElementById('files_input');
        var previewImages = document.getElementById('preview_images');
        var files = inputFiles.files;

        previewImages.innerHTML = ''; // Limpa a lista de imagens antes de adicionar novas

        for (let i = 0; i < files.length; i++) {
            const file = files[i];
            const reader = new FileReader();

            console.log(reader);
            // return;

            reader.onload = function(event) {
                const container = document.createElement("div");
                const imgFile = document.createElement('img');
                const deletButton = document.createElement("button");

                container.className = "d-flex justify-content-between align-items-center gap-2 w-100 border border-1 border-secondary border-opacity-50 p-3 rounded"

                imgFile.src = event.target.result;
                imgFile.alt = 'Imagem ' + i; // Adiciona um texto alternativo para acessibilidade
                imgFile.style.width = '120px'; // Define uma largura máxima para a imagem
                imgFile.style.maxHeight = '120px';
                imgFile.className = "object-fit-contain rounded img img-fluid"

                deletButton.innerHTML = "<img class='img-fluid zoom_card object-fit-contain' style='max-width: 22px;' src='https://cdn-icons-png.freepik.com/512/6861/6861362.png' alt='deletar'>";
                deletButton.type = "button";
                deletButton.className = "btn"
                deletButton.style.height = "40px"


                container.appendChild(imgFile);
                container.appendChild(deletButton);

                previewImages.appendChild(container); // Adiciona a imagem à lista de pré-visualização
            };

            reader.readAsDataURL(file); // Lê o arquivo como URL de dados
        }
    }
</script>