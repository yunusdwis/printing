@if ($products->hasPages())
    <div class="page-nav-wrap mt-5 text-center">
        <ul>
            <!-- Tombol Previous -->
            @if ($products->onFirstPage())
                <li class="disabled"><span><i class="fa-solid fa-chevrons-left"></i></span></li>
            @else
                <li><a class="page-numbers" href="{{ $products->previousPageUrl() }}"><i class="fa-solid fa-chevrons-left"></i></a></li>
            @endif

            <!-- Nomor Halaman -->
            @foreach ($products->links()->elements[0] as $page => $url)
                @if ($page == $products->currentPage())
                    <li><span class="page-numbers active">{{ $page }}</span></li>
                @else
                    <li><a class="page-numbers" href="{{ $url }}">{{ $page }}</a></li>
                @endif
            @endforeach

            <!-- Tombol Next -->
            @if ($products->hasMorePages())
                <li><a class="page-numbers" href="{{ $products->nextPageUrl() }}"><i class="fa-solid fa-chevrons-right"></i></a></li>
            @else
                <li class="disabled"><span><i class="fa-solid fa-chevrons-right"></i></span></li>
            @endif
        </ul>
    </div>
@endif
