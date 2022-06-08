@if ($paginator->hasPages())

<nav aria-label="Page navigation example">
	<ul class="pagination">

		@if ($paginator->onFirstPage())
		<li class="page-item disabled"><a class="page-link" href="#">Anterior</a></li>
		@else
		<li class="page-item"><a class="page-link" href="{{ $paginator->previousPageUrl() }}">Anterior</a></li>
		@endif

		{{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="page-item disabled" aria-disabled="true"><span>{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active" aria-current="page"><span class="page-link">{{ $page }}</span></li>
                        @else
                            <li><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
            <li class="page-item"><a class="page-link" href="{{ $paginator->nextPageUrl() }}">Siguiente</a></li>
            @else
                <li class="page-item disabled"><a class="page-link" href="{{ $paginator->nextPageUrl() }}">Siguiente</a></li>
            @endif
	</ul>
</nav>
@endif