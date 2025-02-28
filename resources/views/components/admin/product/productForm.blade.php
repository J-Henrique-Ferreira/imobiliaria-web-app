<form method="POST" action="{{$actionProp}}" enctype="multipart/form-data">
    @csrf
    @method($methodProp)
    <div class=" d-flex flex-column flex-md-row gap-4">
        <div class="col-12 col-md-6 d-md-flex flex-column gap-3">
            <div class="pb-2 mb-4 fs-5 border-bottom">
                Negócio
            </div>
            <div class="d-flex flex-column flex-md-row gap-3">
                <div class="w-100">
                    <label
                    for="category_id" class="form-label">Tipo De Imóvel</label>
                    <select id="category_id" name="category_id" class="form-select" required>
                        <option value="null">Selecione</option>
                        @foreach ($categoriesList as $key => $category)
                        <option
                        @if (isset($product) && ($product->category->id == $category->id) || old("category_id") == $category->id )
                        selected
                        @endif
                        value="{{$category['id']}}">
                            {{$category['name']}}
                        </option>
                        @endforeach
                    </select>
                </div>

                <div class="w-100">
                    <label for="business_id" class="form-label">Tipo De Negócio</label>
                    <select id="business_id" name="business_id" class="form-select" required>
                        <option selected>Selecione</option>
                        @foreach ($businessList as $key => $business)
                        <option
                            @if (isset($product) && ($product->business->id == $business->id) || old("business_id") == $business->id)
                                selected
                            @endif
                        value="{{$business['id']}}">
                            {{$business['name']}}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="w-100">
                    <label for="value" name="value" class="form-label">Valor</label>
                    <input name="value" type="number" class="form-control" id="value" value="{{
    old('value') ??
    isset($product) ? $product->value : ''
                    }}" required>
                </div>
            </div>

            <div class="py-2 my-4 fs-5 border-bottom">
                Endereço
            </div>

            <div class="d-flex flex-column flex-md-row gap-3">
                <div class="w-100">
                    <label for="address_city_id" class="form-label">Cidade</label>
                    <select value="2" id="address_city_id" name="address_city_id" class="form-select form-control"
                        onchange="findDistrictsByCityId(this.value)" required>
                        <option>Selecione</option>
                        @foreach ($citiesList as $key => $city)
                        <option @if (
        isset($product) && ($product->city->id == $city->id) ||
        old("address_city_id") == $city->id
    ) selected @endif value="{{$city['id']}}">
                            {{$city['name']}}
                        </option>
                        @endforeach
                    </select>
                </div>

                <div class="w-100">
                    <label for="address_district_id" class="form-label">Bairro</label>
                    <select id="address_district_id" name="address_district_id" class="form-select" required>
                        <option selected>Selecione</option>

                        @if (isset($districtsList))
                        @foreach ($districtsList as $key => $district)
                        <option @if (
                                ($product->address_district_id == $district->id) ||
                                old("address_district_id") == $district->id
                            ) selected @endif value="{{$district->id}}">
                                                {{$district['name']}}
                                            </option>
                                            @endforeach
                        @endif
                    </select>
                </div>
            </div>

            <div class="d-flex flex-column flex-md-row gap-3 mt-md-0 mt-3">
                <div class="w-100">
                    <label for="address_street" class="form-label">Rua</label>
                    <input type="text" class="form-control" id="address_street" name="address_street" value="{{
    old('address_street') ??
    isset($product) ? $product->address_street : ''
                    }}" required>
                </div>
                <div class="w-100">
                    <label for="address_number" class="form-label">Número</label>
                    <input type="number" class="form-control" id="address_number" name="address_number" value="{{
    old('address_number') ??
    isset($product) ? $product->address_number : ''
                    }}" required>
                </div>
            </div>
            <div class="py-2 my-4 fs-5 border-bottom">
                Informações complementares
            </div>
            <div class="d-flex gap-3 mb-3">
                <div class="w-100">
                    <label for="bedroom" class="form-label">Quartos</label>
                    <input type="number" class="form-control" id="bedroom" name="bedroom" value="{{
    old('bedroom') ??
    isset($product) ? $product->bedroom : ''
                        }}" required>
                </div>
                <div class="w-100">
                    <label for="bathroom" class="form-label">Banheiros</label>
                    <input type="number" class="form-control" id="bathroom" name="bathroom" value="{{
    old('bathroom') ??
    isset($product) ? $product->bathroom : ''
                            }}" required>
                </div>
            </div>
            <div class="d-flex gap-3 mb-3">
                <div class="w-100">
                    <label for="area_size" class="form-label">Área - mt²</label>
                    <input type="number" class="form-control" id="area_size" name="area_size" value="{{ old('area_size') ??
    isset($product) ? $product->area_size : ''
                                }}" required>
                </div>
                <div class="w-100">
                    <label for="parking_space" class="form-label">Vagas</label>
                    <input type="number" class="form-control" id="parking_space" name="parking_space" value="{{
    old('parking_space') ??
    isset($product) ? $product->parking_space : ''
                            }}" required>
                </div>
            </div>
            <div class="d-flex gap-3 mb-3">
                <div class="w-100">
                    <label for="iptu" class="form-label">IPTU</label>
                    <input type="number" class="form-control" id="iptu" name="iptu" value="{{old('iptu') ?? isset($product) ? $product->iptu : ''
                        }}" required>
                </div>
                <div class="w-100">
                    <label for="condominium" class="form-label">Condomínio</label>
                    <input type="number" class="form-control" id="condominium" name="condominium" value="{{
    old('condominium') ??
    isset($product) ? $product->condominium : ''
                            }}" required>
                </div>
            </div>
        </div>
        <div class="w-100 d-md-flex flex-column gap-3">
            <div class="">
                <label class="form-label" for="description">
                    Descrição
                </label>

                <x-admin.product.ckeditor oldValues="{{old('description') ?? isset($product) ? $product->description : ''
                    }}">
                </x-admin.product.ckeditor>
            </div>
            <div style="margin-top: 22px;">
                <label class="form-label" for="images_list_url">
                    Imagens
                </label>
                <input onchange="reativeListFiles()" class="form-control mb-3" type="file" multiple
                    name="images_list_url[]" id="images_list_url"
                    @if (!isset($product->images_list_url))
                    required
                    @endif
                    >
                <div class="d-flex flex-column gap-3 overflow-y-scroll navbar-nav-scroll p-3 border rounded" style="height: 470px;"
                    id="preview_images">

                    @if (isset($product->images_list_url))
                        @foreach ( json_decode($product->images_list_url) as $key => $imgUrl )
                            <div class="d-flex justify-content-between align-items-center gap-2 w-100 shadow border-secondary p-2 rounded">
                                <div class="d-flex justify-content-center rounded p-1" style="width: 200px;height: 140px;background: #e3e3e3;">
                                    <img src=" {{asset("uploads/" .  $imgUrl)}}" alt="Imagem {{$key}} do imóvel" class="object-fit-contain rounded img img-fluid" style="width: auto; height: auto;">
                                </div>
                                <button onclick="openSelectFiles()" type="button" class="btn" style="height: 40px;">
                                    <div class="text-primary"><x-svgs.square-pen></x-svgs.square-pen></div>
                                </button>
                            </div>
                        @endforeach
                    @endif

                </div>
            </div>
        </div>
    </div>
    <div class="col-12 text-center mt-4">
        <button type="submit" class="col-12 col-sm-4 btn btn-primary">Salvar</button>
    </div>
</form>

<script>

    function findDistrictsByCityId(value) {
        var selectDistrict = window.document.getElementById("address_district_id");
        var token = window.document.getElementsByName("_token")[0].value;

        var url = "/dashboard/districts/" + token + "?id=" + value + "&&json=1"

        console.log(url);

        var districtsList = [];

        fetch(url, {
            method: "GET"
        })
            .then(response => {
                if (response.ok) {
                    return response.text();
                }
                throw new Error("Erro ao buscar bairros.");
            })
            .then(data => {
                data = JSON.parse(data);
                console.log(data);
                var options = "";

                data.forEach(district => {
                    options += "<option value='" + district.id + "' >" + district.name + "</option>"
                });

                selectDistrict.innerHTML = options;
            })
    }

    function openSelectFiles() {
        var inputFiles = document.getElementById('images_list_url');
        inputFiles.click();
    }

    function removeFileInList(fileRemoveIndex) {
        var inputFiles = document.getElementById('images_list_url');
        var filesList =  Object.values(inputFiles.files);

        // console.log("Arquivos selecionados antes de deletar algo da lista");
        // console.log(Object.values(filesList));

        const dataTransfer = new DataTransfer();

        for (let i = 0; i < filesList.length; i++) {
            if(i !== fileRemoveIndex) {
                dataTransfer.items.add(filesList[i]);
            }
        };

        inputFiles.files = dataTransfer.files;
        reativeListFiles();
    }

    async function reativeListFiles() {
        var inputFiles = document.getElementById('images_list_url');
        var previewImages = document.getElementById('preview_images');
        var filesList = inputFiles.files;

        var spinnerHTML = "<div class='mx-auto my-5'><div class='spinner-border' role='status' id='image_spinner'><span class='visually-hidden'>Loading...</span></div></div>";

        previewImages.innerHTML = '';
        previewImages.innerHTML =spinnerHTML;

        await new Promise((resolve) => {

            setTimeout(resolve, 800)
        })

        previewImages.innerHTML = '';

        for (let i = 0; i < filesList.length; i++) {
            const file = filesList[i];
            const reader = new FileReader();

            reader.onload = function (event) {
                const container = document.createElement("div");
                const imgContainer = document.createElement("div");
                const imgFile = document.createElement('img');
                const deletButton = document.createElement("button");

                container.className = "d-flex justify-content-between align-items-center gap-2 w-100 shadow border-secondary p-2 rounded"

                imgContainer.className = "d-flex justify-content-center rounded p-1";
                imgContainer.style.width = '200px';
                imgContainer.style.height = '140px';
                imgContainer.style.background="#e3e3e3"

                imgFile.src = event.target.result;
                imgFile.alt = 'Imagem ' + i;
                imgFile.style.width = 'auto';
                imgFile.style.height = 'auto';
                imgFile.className = "object-fit-contain rounded img img-fluid"

                deletButton.innerHTML = "<img class='img-fluid zoom_card object-fit-contain' style='max-width: 22px;' src='https://cdn-icons-png.freepik.com/512/6861/6861362.png' alt='deletar'>";
                deletButton.type = "button";
                deletButton.onclick = function() {
                    removeFileInList(i);
                }
                deletButton.className = "btn"
                deletButton.style.height = "40px"


                imgContainer.appendChild(imgFile);

                container.appendChild(imgContainer);
                container.appendChild(deletButton);

                previewImages.appendChild(container);
            };

            reader.readAsDataURL(file); // Lê o arquivo como URL de dados
        }
    }

</script>
