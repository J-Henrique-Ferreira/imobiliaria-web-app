<!-- recebe um rota e um id do objeto a ser deletado -->

<div class="modal fade" data-bs-backdrop="static" id="modaldelete{{$cityId}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Deletar cidade - {{$name}}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="text-center">ATENÇÃO VOCÊ ESTÁ DELETANTO UMA CIDADE</p>
                <form action="{{ route('cities.destroy', $cityId) }}" method="POST" class="d-flex flex-column form gap-3">
                    @csrf
                    @method('DELETE')
                    <input class="form-control" type="hidden" name="id" value="{{$cityId}}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" class="btn btn-sm btn-danger">Deletar</button>
                </form>
            </div>
        </div>
    </div>
</div>