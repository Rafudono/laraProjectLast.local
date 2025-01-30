@if ($paginator->hasPages())
        <div class="tm-prev-next-wrapper">

            @if ($paginator->onFirstPage())
            <a class="mb-2 tm-btn tm-btn-primary tm-prev-next disabled tm-mr-20" aria-disabled="true">
                {!! __('pagination.previous') !!}
            </a>
            @else
            <a href="{{ $paginator->previousPageUrl() }}" class="mb-2 tm-btn tm-btn-primary tm-prev-next tm-mr-20" rel="prev">
                {!! __('pagination.previous') !!}
            </a>
            @endif

            @if ($paginator->hasMorePages())
            <a class="mb-2 tm-btn tm-btn-primary tm-prev-next" href="{{ $paginator->nextPageUrl() }}" rel="next">{!! __('pagination.next') !!}</a>
            @else
            <a class="mb-2 tm-btn tm-btn-primary tm-prev-next disabled" aria-disabled="true">
                {!! __('pagination.next') !!}
            </a>
            @endif
        </div>
@endif
