<style>
    .pagination {
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 30px;
    }

    .pagination a {
        font-size: 24px;
        padding: 10px 15px;
        margin: 0 10px;
        text-decoration: none;
        color: #E5E5E5;
        background-color: #2E3939;
        border: 2px solid #444444;
        border-radius: 5px;
        transition: background-color 0.15s ease-in-out, color 0.15s ease-in-out;
    }

    .pagination a:hover {
        background-color: #5B6E6E;
        color: #F2F2F2;
        border-color: #F2F2F2;
    }

    .pagination li:first-child, .pagination li:last-child {
        display: none;
    }

    .pagination .active a {
        background-color: #5B6E6E;
        color: #F2F2F2;
        border-color: #F2F2F2;
    }

    .pagination .disabled a {
        background-color: #5B6E6E;
        color: #F2F2F2;
        border-color: #F2F2F2;
        pointer-events: none;
    }

    .pagination .dots {
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0 10px;
        font-size: 24px;
        color: #E5E5E5;
    }

    .pagination .dots:before, .pagination .dots:after {
        content: "";
        display: inline-block;
        margin: 0 5px;
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background-color: #E5E5E5;
    }

</style>

@if ($paginator->hasPages())
    <div class="pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="disabled"><a>&lt;</a></li>
        @else
            <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev">&lt;</a></li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <div class="dots">{{ $element }}</div>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="active"><a>{{ $page }}</a></li>
                    @else
                        <li><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li><a href="{{ $paginator->nextPageUrl() }}" rel="next">&gt;</a></li>
        @else
            <li class="disabled"><a>&gt;</a></li>
        @endif
    </div>
@endif
