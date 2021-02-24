@if ($paginator->hasPages())
    <nav class="blog-pagination" aria-label="Pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">@lang('pagination.previous')</a>
            @else
                <a class="btn btn-outline-primary" href="{{ $paginator->previousPageUrl() }}" rel="prev">@lang('pagination.previous')</a>
            @endif

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <a class="btn btn-outline-primary" href="{{ $paginator->nextPageUrl() }}" rel="next">@lang('pagination.next')</a>
            @else
                <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">@lang('pagination.next')</a>
            @endif
    </nav>
@endif
