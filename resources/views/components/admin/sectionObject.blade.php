<div class="d-flex align-items-center border p-3 rounded ">
    <div class="d-flex flex-column flex-lg-row gap-2 justify-content-between w-100">
        <div class="">{{$name}}</div>
        <div>
            @if ($visible)
            Visível
            @else
            Oculto
            @endif
        </div>
    </div>
    <div class="d-flex align-items-center justify-content-end gap-2  w-100">
        <button type="button" class="btn" class="btn btn-sm btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#update{{$cityId}}" data-bs-whatever="@mdo">
            <img src="{{asset('storage/images/icons/edit.png')}}" style="object-fit: contain; width:35px;" alt="Editar">
        </button>
        <button type="button" class="btn" class="btn btn-sm btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#modaldelete{{$cityId}}" data-bs-whatever="@mdo"> <img src="{{asset('storage/images/icons/delete.png')}}" style="object-fit: contain; width:35px;" alt="Deletar">
        </button>
    </div>
</div>