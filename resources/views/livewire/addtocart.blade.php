<div>
    <div class="product-detail-first-wrap-text7">
        
        <form wire:submit="addToCart">
            @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        
        @if(session()->has('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <div wire:loading>
            Product Adding to Cart...
        </div>
            @csrf
            <div class="date-time">
                <div id="field1">
                    <button type="button" id="sub" class="minus">-</button>
                    <input type="number" wire:model.live="qty" value="1" class="quantity" min="1" max="10"/>
                    <button type="button" id="add" class="plus">+</button>
                </div>
            </div>
            <div class="product-detail-first-wrap-btn5">
                <button type="submit">Add to Cart</button>
            </div>
        </form>
    </div>
</div>
