<div class="woocommerce-notices-wrapper wow fadeInUp" data-wow-delay=".3s">
    <p>
        Showing <span>{{ $products->count() }}</span> of {{ $totalProducts }} Results
    </p>

    <div class="form-clt">
        <form 
            action="{{ request()->routeIs('shop.category') ? route('shop.category', ['id' => request()->route('id')]) : route('shop') }}" 
            method="GET">
            <div class="nice-select" tabindex="0">
                <span class="current">
                    @switch($sortOption)
                        @case('oldest')
                            Terlama
                            @break
                        @case('popular')
                            Paling populer
                            @break
                        @case('expensive')
                            Paling mahal
                            @break
                        @case('cheap')
                            Paling murah
                            @break
                        @default
                            Terbaru
                    @endswitch
                </span>
                <ul class="list">
                    <li data-value="latest" class="option {{ $sortOption === 'latest' ? 'selected focus' : '' }}" onclick="sortShop('latest')">
                        Terbaru
                    </li>
                    <li data-value="oldest" class="option {{ $sortOption === 'oldest' ? 'selected focus' : '' }}" onclick="sortShop('oldest')">
                        Terlama
                    </li>
                    <li data-value="popular" class="option {{ $sortOption === 'popular' ? 'selected focus' : '' }}" onclick="sortShop('popular')">
                        Paling populer
                    </li>
                    <li data-value="expensive" class="option {{ $sortOption === 'expensive' ? 'selected focus' : '' }}" onclick="sortShop('expensive')">
                        Paling mahal
                    </li>
                    <li data-value="cheap" class="option {{ $sortOption === 'cheap' ? 'selected focus' : '' }}" onclick="sortShop('cheap')">
                        Paling murah
                    </li>
                </ul>
            </div>
            @if (request()->routeIs('shop.category'))
                <input type="hidden" name="category_id" value="{{ request()->route('id') }}">
            @endif
            <input type="hidden" name="sort" id="sortInput" value="{{ $sortOption }}">
        </form>
    </div>
</div>

<script>
    function sortShop(option) {
        document.getElementById('sortInput').value = option;
        document.querySelector('.form-clt form').submit();
    }
</script>
