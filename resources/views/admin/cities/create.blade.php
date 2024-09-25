<x-layouts.admin containerTitle="Cidades - Nova cidade">
    @if (isset($toastMessage))
        @component('components.site.toastMessage', ['toastMessage' => $toastMessage])
        @endComponent
    @endif

    <div class="accordion-item">
        <div id="AddDistrict-collapseOne" class="accordion-collapse collapse show">
            <div class="accordion-body">
                @csrf
                <form action="{{ route('cities.store') }}" method="POST" class="d-flex flex-column form w-100 my-3">
                    <div class="card-body d-flex flex-column col-12 col-md-4 mx-auto ">
                        <label class="form-label" for="">Nome da Cidade</label>
                        <input class="form-control mb-4" type="text" name="name" required>
                        <!-- @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror -->
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-layouts.admin>
