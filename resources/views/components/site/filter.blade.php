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
        <button class="btn tab-btn active rounded-3" id="btnComprar" onclick="setBusiness('compra')">Comprar</button>
        <button class="btn tab-btn rounded-3" id="btnAlugar" onclick="setBusiness('aluguel')">Alugar</button>
    </div>

    <form id="form-busca">
        @csrf
        @method('POST')

        <div class="row g-3">
            <div class="col-md-4">
                Tipo de imóvel
                <div class="dropdown" onclick="(
                    getSelectsDatas('category', this)
                    )">
                    <button class="btn btn-white dropdown-toggle w-100 border border-1 d-flex
                        justify-content-between align-items-center bg-white" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false" data-bs-auto-close="outside">
                        Todos
                    </button>
                    <ul class="dropdown-menu w-100 p-0 border border-1 border-dark overflow-hidden">
                        <label class="p-1 px-2 border-bottom border-2 w-100 d-flex gap-2 dropdown-item">
                            <input type="checkbox" id="todos" value="todos" checked>
                            Todos
                        </label>

                        @foreach ($filterDatas['categories'] as $category)
                            <label for="category-{{$category->name}}"
                                class="p-1 px-2 border-bottom border-1 w-100 d-flex gap-2 dropdown-item">
                                <input type="checkbox" name="{{$category->name}}" id="category-{{$category->name}}"
                                    value="{{$category->name}}" checked>
                                {{$category->name}}
                            </label>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="col-md-4">
                Cidade
                <div class="dropdown" onclick="(
                getSelectsDatas('cities', this)
                )">
                    <button class="btn btn-white dropdown-toggle w-100 border border-1 d-flex justify-
                        content-between align-items-center bg-white" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false" data-bs-auto-close="outside">
                        Todos
                    </button>
                    <ul class="dropdown-menu w-100 p-0 border border-1 border-dark overflow-hidden">
                        <label class="p-1 px-2 border-bottom border-2 w-100 d-flex gap-2 dropdown-item">
                            <input type="checkbox" id="todos" value="todos" checked>
                            Todos
                        </label>

                        @foreach ($filterDatas['cities'] as $city)
                            <label for="city-{{$city->name}}"
                                class="p-1 px-2 border-bottom border-1 w-100 d-flex gap-2 dropdown-item">
                                <input type="checkbox" name="{{$city->name}}" id="city-{{$city->name}}"
                                    value="{{$city->name}}" checked>
                                {{$city->name}}
                            </label>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="col-md-4">
                Bairro
                <div class="dropdown" onclick="getSelectsDatas('districts', this)">
                    <button class="btn btn-white dropdown-toggle w-100 border border-1 d-flex
                        justify-content-between align-items-center bg-white" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false" data-bs-auto-close="outside" id="dropdown-button-districts">
                        Todos
                    </button>
                    <ul class="dropdown-menu w-100 p-0 border border-1 border-dark overflow-hidden"
                        id="address_district_dropdown_list">
                        <label class="p-1 px-2 border-bottom border-2 w-100 d-flex
                        gap-2 dropdown-item">
                            <input type="checkbox" id="todos" value="value" checked>
                            Todos
                        </label>
                    </ul>
                </div>
            </div>
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
    const checkboxListDistrictElement = window.document.getElementById("address_district_dropdown_list");

    document.querySelectorAll('.tab-btn').forEach(button => {
        button.addEventListener('click', function () {
            document.querySelectorAll('.tab-btn').forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');
        });
    });

    let formDatas = {
        category: ["todos"],
        cities: ["todos"],
        districts: ["todos"],
        business: ["compra"]
    }

    function setBusiness(business) {
        formDatas.business = business;
        console.log(formDatas);
        return;
    }

    // passa valores para a o estado que armazena os dados do form
    function setFormValues(fieldName, elements) {
        const checkboxList = [...elements.querySelectorAll('input[type="checkbox"]')];
        const checkedList = checkboxList.filter((checkboxElementDatas) => {
            return checkboxElementDatas.checked;
        })

        formDatas[fieldName] = checkedList.map((checkedElement) => {
            return checkedElement.value;
        });


        if ((fieldName === 'category' || fieldName === 'cities') && formDatas[fieldName][0] === "todos") {
            formDatas[fieldName] = ['todos'];
        }

        console.log(
            // checkboxList,
            // checkedList,
            // fieldName,
            // elements,
            formDatas
        );
    }

    function getSelectsDatas(fieldName, elements) {
        const checkboxes = [...elements.querySelectorAll('input[type="checkbox"]')];
        const allCheckboxInput = checkboxes[0]; // O checkbox "Todos"
        const otherCheckboxes = Array.from(checkboxes).slice(1); // Os outros checkboxes

        // marca todos - desmarca todos - com base no valor do primeiro select
        allCheckboxInput.addEventListener('change', () => {
            const isChecked = allCheckboxInput.checked;
            otherCheckboxes.forEach((checkbox) => {
                checkbox.checked = isChecked;
            });
        });

        otherCheckboxes.forEach((checkbox) => {
            checkbox.addEventListener('change', () => {
                const allChecked = otherCheckboxes.every(cb => cb.checked);
                // Marca "Todos" se todos os outros estiverem marcados
                allCheckboxInput.checked = allChecked;
                // Desmarca "Todos" se qualquer outro for desmarcado
                if (!checkbox.checked) {
                    allCheckboxInput.checked = false;
                }
            });
        });

        setTimeout(() => {
            console.log("Executou 'setFormValues' lguns segundos");
            setFormValues(fieldName, elements);
            fieldName === 'cities' ? findDistrictsByCityId() : null;
            formDatas.cities[0] === 'todos' ? clearDistrictsCheckbox() : null
        }, 100);
    }


    async function findDistrictsByCityId() {
        // marcou mais de uma cidade portanto não marca os bairros
        if (formDatas.cities.length > 1 || formDatas.cities[0] === "todos" || formDatas.cities.length === 0) {
            console.log("marcou mais de uma cidade portanto não marca os bairros");
            editDistrictTextButtonDropdown("Todos")
            return;
        }

        editDistrictTextButtonDropdown("Buscando...")

        const token = document.querySelector('input[name="_token"]').value;
        var getDistrictsUrl = "/api/getdistricts" + "?id=&&name=" + formDatas.cities[0] + '&&json=1';
        console.log(getDistrictsUrl);
        var districtsList = [];

        try {
            await fetch(getDistrictsUrl, {
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
                    return createDistrictListOptions(data);
                })
        } catch (error) {
            console.error(error)
        }


        editDistrictTextButtonDropdown("Selecione")
    }


    function createDistrictListOptions(districts) {
        var options = `
            <label for="district-todos"
                class="p-1 px-2 border-bottom border-1 w-100 d-flex gap-2 dropdown-item">
                <input type="checkbox" id="district-todos" value="todos" checked>
                   Todos
            </label>`;

        districts.forEach(district => {

            options += `
            <label for="district-${district.name}"
                class="p-1 px-2 border-bottom border-1 w-100 d-flex gap-2 dropdown-item">
                <input type="checkbox" id="district-${district.name}" value="${district.name}" checked>
                    ${district.name}
            </label>
            `;
        });
        checkboxListDistrictElement.innerHTML = options;
    }


    function clearDistrictsCheckbox() {
        checkboxListDistrictElement.innerHTML = `
            <label for="district-todos"
                class="p-1 px-2 border-bottom border-1 w-100 d-flex gap-2 dropdown-item">
                <input type="checkbox" id="district-todos" value="todos" checked>
                   Todos
            </label>`;
    }

    function editDistrictTextButtonDropdown(text) {
        let buttoneElement = window.document.getElementById("dropdown-button-districts");
        buttoneElement.innerHTML = text;
    }
</script>