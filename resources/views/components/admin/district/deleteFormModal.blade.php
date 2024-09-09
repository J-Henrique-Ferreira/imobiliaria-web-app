<!-- recebe um rota e um id do objeto a ser deletado -->

<div class="modal fade" data-bs-backdrop="static" id="modaldelete{{$districtId}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Deletar bairro - {{$name}}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="text-center">
                    <strong>!!</strong>
                    ATENÇÃO VOCÊ ESTÁ DELETANDO UM BAIRRO
                    <strong>!!</strong>
                </p>
                <form action="{{ route('districts.destroy', $districtId) }}" method="POST" class="d-flex flex-column form gap-3">
                    @csrf
                    @method('DELETE')
                    <input class="form-control" type="hidden" name="id" value="{{$districtId}}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" class="btn btn-sm btn-danger">Deletar</button>
                </form>
            </div>
        </div>
    </div>
</div>