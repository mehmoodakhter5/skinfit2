<div>
    <div class="header-desktop-search-main">
        <div class="header-desktop-search-icon">
            <i class="fa-solid fa-magnifying-glass"></i>
        </div>
        <div class="header-desktop-search-icon-feild">
            <input type="text" wire:model.live="searchtext" placeholder="Search your Favorite Products">
        </div>
    </div>
    <ul>
        @if(count($product) > 0)
        @foreach ($product as $products)
            <li wire:key="{{ $products->id }}">{{$products->product_name}}</li>
        @endforeach
        @endif
    </ul>
</div>
