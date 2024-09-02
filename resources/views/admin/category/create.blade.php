<x-admin-layout containerTitle="Tipos de negócios - Criar">
    @csrf
    <form action="{{route('category.store')}}" method="POST" class="d-flex flex-column form w-100 my-3">
        <div class="card-body d-flex flex-column col-12 col-md-4 mx-auto ">
            <label class="form-label" for="name">Nome da categoria</label>
            <input class="form-control mb-4" type="text" name="name" id="name" required placeholder="Ex: Casa, Apartamento, Cobertura, Sobrado ..." autofocus>
            <!-- @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror -->
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </form>
</x-admin-layout>