<x-layouts.admin containerTitle="Tipos de negócios - Criar">
    <form action="{{route('business.update')}}" method="POST" class="d-flex flex-column form w-100 my-3">
        @csrf
        @method('PUT')
        <div class="card-body d-flex flex-column col-12 col-md-4 mx-auto ">
            <label class="form-label" for="">Nome tipo de negócio</label>
            <input class="form-control mb-4" type="text" name="name" required placeholder="Ex: Aluguel, Venda, Aluguel-Temporada">
            <!-- @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror -->
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </form>
</x-layouts.admin>