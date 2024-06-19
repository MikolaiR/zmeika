@if ($paginator->lastPage() > 1)
    <div class="action-bar-inner mt-30">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <nav class="pagination-wrap mb-10 mb-sm-0">
                    <ul class="pagination">
                        <!-- Previous Page Link -->
                        @if ($paginator->onFirstPage())
                            <li class="disabled"><span>&laquo;</span></li>
                        @else
                            <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev">&laquo;</a></li>
                        @endif

                        <!-- Pagination Elements -->
                        @foreach ($elements as $element)
                            <!-- "Three Dots" Separator -->
                            @if (is_string($element))
                                <li class="disabled"><span>{{ $element }}</span></li>
                            @endif

                            <!-- Array Of Links -->
                            @if (is_array($element))
                                @foreach ($element as $page => $url)
                                    @if ($page == $paginator->currentPage())
                                        <li class="active"><span>{{ $page }}</span></li>
                                    @else
                                        <li><a href="{{ $url }}">{{ $page }}</a></li>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach

                        <!-- Next Page Link -->
                        @if ($paginator->hasMorePages())
                            <li><a href="{{ $paginator->nextPageUrl() }}" rel="next">&raquo;</a></li>
                        @else
                            <li class="disabled"><span>&raquo;</span></li>
                        @endif
                    </ul>
                </nav>
            </div>
            <div class="col-sm-6 text-center text-sm-right">
                <p>{{ $paginator->firstItem() }}–{{ $paginator->lastItem() }} из {{ $paginator->total() }} результатов</p>
            </div>
        </div>
    </div>
@endif

