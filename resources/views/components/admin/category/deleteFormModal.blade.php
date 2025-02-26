<div class="modal fade" data-bs-backdrop="static" id="modaldelete{{$id}}" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Deletar categoria de imóvel - {{$name}}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="text-center">ATENÇÃO VOCÊ ESTÁ DELETANTO UMA CATEGORIA DE IMÓVEL</p>
                <form action="{{ route('category.destroy', $id) }}" method="POST" class="d-flex flex-column form gap-3">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">Deletar</button>
                </form>
            </div>
        </div>
    </div>
</div>