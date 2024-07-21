@if ($paginator->hasPages())
<div>
    <p class="small ">
        {!! __('Exibindo de') !!}
        <span class="fw-semibold">{{ $paginator->firstItem() }}</span>
        {!! __('à') !!}
        <span class="fw-semibold">{{ $paginator->lastItem() }}</span>
        {!! __('para os') !!}
        <span class="fw-semibold">{{ $paginator->total() }}</span>
        {!! __('registros') !!}
    </p>
</div>
@endif