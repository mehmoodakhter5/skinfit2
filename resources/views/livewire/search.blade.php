<div>
    <div class="header-desktop-search-main">
        <div class="header-desktop-search-icon">
            <i class="fa-solid fa-magnifying-glass"></i>
        </div>
        <div class="header-desktop-search-icon-feild">
            <input type="text" wire:model.live="searchtext" placeholder="Search your Favorite Products">
        </div>
        @if(count($product) > 0)
        <div class="header-desktop-searchsuggestion">
            <ul>
                @foreach ($product as $products)
                    <li wire:key="{{ $products->id }}"><a href="{{url('product/'.$products->product_slug)}}">{{$products->product_name}}</a></li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
</div>
