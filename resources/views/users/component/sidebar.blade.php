<div class="shop-main-sidebar">
<div class="single-sidebar-widget">
    <div class="wid-title">
        <h4>Search Here</h4>
    </div>
    <div class="search_widget">
        <form action="{{ route('shop.search') }}" method="GET">
            <input type="text" name="keyword" placeholder="Search here" value="{{ old('keyword', $keyword ?? '') }}">
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
                                <h4>Filter by Tag</h4>
                            </div>
                            <div class="shop-widget-tag">
                                <span>Tag 1</span>
                                <span>Tag 2</span>
                                <span>Tag 3</span>
                            </div>
                        </div>
                    </div>


