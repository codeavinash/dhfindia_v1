@if ($paginator->hasPages())
    <nav class="pagination-container f jc ac">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <span class="pagination-previous-link f jc ac pagination-no-next">
                {!! __('pagination.previous') !!}
            </span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="pagination-previous-link f jc ac">
                {!! __('pagination.previous') !!}
            </a>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="pagination-previous-link f jc ac">
                {!! __('pagination.next') !!}
            </a>
        @else
            <span class="pagination-previous-link f jc ac pagination-no-next">
                {!! __('pagination.next') !!}
            </span>
        @endif
    </nav>
@endif
