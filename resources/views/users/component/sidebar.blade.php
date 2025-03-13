<div class="shop-main-sidebar">
<div class="single-sidebar-widget">
    <div class="wid-title">
        <h4>Search Here</h4>
    </div>
    <div class="search_widget">
        <form action="{{ route('shop.search') }}" method="GET">
            <input type="text" name="keyword" placeholder="Search here" value="{{ request('keyword') }}">
            <button type="submit"><i class="fal fa-search"></i></button>
        </form>
    </div>
</div>

                        <div class="single-sidebar-widget">
    <div class="wid-title">
        <h4>Categories</h4>
    </div>
    <div class="shop-catagory-items">
        <ul>
            @isset($categories)
                @foreach($categories as $category)
                    <li>
                        <a href="{{ route('shop.category', ['id' => $category->id]) }}">
                            <i class="fa-regular fa-chevron-left"></i>
                            {{ $category->category_name }}
                        </a>
                    </li>
                @endforeach
            @else
                <li>No categories available.</li>
            @endisset
        </ul>
    </div>
</div>


                        <div class="single-sidebar-widget">
                        <div class="wid-title">
    <h4>Filter By Price</h4>
</div>
<div class="range__barcustom">
    <form action="{{ route('sidebarshop.filter') }}" method="GET">
        <div class="slider">
            <div class="progress" style="left: 0%; right: 0%;"></div>
        </div>
        <div class="range-input">
            <input 
                type="range" 
                class="range-min" 
                name="min_price" 
                min="1" 
                max="500" 
                value="{{ request('min_price', 1) }}" 
                step="1"
            >
            <input 
                type="range" 
                class="range-max" 
                name="max_price" 
                min="1" 
                max="500" 
                value="{{ request('max_price', 500) }}" 
                step="1"
            >
        </div>
        <div class="range-items">
            <div class="price-input d-flex">
                <div class="field">
                    <span>$</span>
                    <input 
                        type="number" 
                        class="input-min" 
                        name="min_price_display" 
                        value="{{ request('min_price', 1) }}" 
                        step="1" 
                        min="1" 
                        max="500"
                    >
                </div>
                <div class="separators">-</div>
                <div class="field">
                    <span>$</span>
                    <input 
                        type="number" 
                        class="input-max" 
                        name="max_price_display" 
                        value="{{ request('max_price', 500) }}" 
                        step="1" 
                        min="1" 
                        max="500"
                    >
                </div>
                <button type="submit" class="theme-btn border-radius-none">Filter</button>
            </div>
        </div>
    </form>
</div>

</div>    
                        <div class="single-sidebar-widget">
                            <div class="wid-title">
                                <h4>Filter by Tag</h4>
                            </div>
                            <div class="shop-widget-tag">
                                <span>Tag 1</span>
                                <span>Tag 2</span>
                                <span>Tag 3</span>
                            </div>
                        </div>
                    </div>

                    <script>
    const rangeMin = document.querySelector(".range-min");
    const rangeMax = document.querySelector(".range-max");
    const inputMin = document.querySelector(".input-min");
    const inputMax = document.querySelector(".input-max");
    const progress = document.querySelector(".progress");

    const syncValues = () => {
        const minVal = parseInt(rangeMin.value);
        const maxVal = parseInt(rangeMax.value);

        if (maxVal - minVal >= 1) {
            progress.style.left = ((minVal / rangeMin.max) * 100) + "%";
            progress.style.right = (100 - (maxVal / rangeMax.max) * 100) + "%";
            inputMin.value = minVal;
            inputMax.value = maxVal;
        }
    };

    rangeMin.addEventListener("input", syncValues);
    rangeMax.addEventListener("input", syncValues);
    inputMin.addEventListener("input", () => {
        rangeMin.value = inputMin.value;
        syncValues();
    });
    inputMax.addEventListener("input", () => {
        rangeMax.value = inputMax.value;
        syncValues();
    });

    // Initial sync to set progress bar and input values
    syncValues();
</script>