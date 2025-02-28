<div class="modal fade" data-bs-backdrop="static" id="update{{$id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Editar categoria - {{$name}}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('category.update', $id) }}" method="POST" class="d-flex flex-column form gap-3">
                    @csrf
                    @method('PUT')
                    <label for="name" class="form-label">Nome da categoria</label>
                    <input class="form-control" type="text" name="name" id="name" value="{{$name}}" required>
                    <input type="hidden" name="id" value="{{$id}}" required>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" name="visible" @if ($visible)checked @endif>
                        <label class="form-check-label" for="flexSwitchCheckDefault">Visibilidade</label>
                    </div>
                    <button type="submit" class="btn btn-sm btn-primary">Atualizar</button>
                </form>
            </div>
        </div>
    </div>
</div>