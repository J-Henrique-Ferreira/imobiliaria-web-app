<div class="d-flex align-items-center border p-3 rounded ">
    <div class="d-flex flex-column flex-lg-row gap-2 justify-content-between w-100">
        <div class=""><strong>{{$name}}</strong></div>
        <div>
            @if ($visible)
            Visível
            @else
            Oculto
            @endif
        </div>
    </div>
    <div class="d-flex align-items-center justify-content-end gap-3 w-100">
        <button type="button" class="btn p-1" class="btn btn-sm btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#update{{$objectId}}" data-bs-whatever="@mdo">
            <img src="{{asset('storage/images/icons/edit.png')}}" style="object-fit: contain; width:25px;" alt="Editar">
        </button>
        <button type="button" class="btn p-1" class="btn btn-sm btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#modaldelete{{$objectId}}" data-bs-whatever="@mdo"> <img src="{{asset('storage/images/icons/delete.png')}}" style="object-fit: contain; width:25px;" alt="Deletar">
        </button>
    </div>
</div>