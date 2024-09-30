@php
    $imgPath = asset('storage/images/icons/' . ($toastMessage["status"] ?? "error") . '.png');
@endphp

<div id="toast_message" class="toast-container position-fixed top-0 mx-4" style="right: 0; margin-top: 70px;">
    <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
            <strong class="me-auto">
                <img class="object-fit-contain" style="width: 30px;" src="{{$imgPath}}" alt="{{$imgPath}}">
            </strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            {{$toastMessage["message"]}}
        </div>
    </div>
</div>

<script>
    const toastElement = document.getElementById('toast_message')

    setTimeout(() => {
        toastElement.classList.add("d-none");
    }, 6500);
</script>