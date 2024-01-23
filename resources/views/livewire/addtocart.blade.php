<div>
    <div class="product-detail-first-wrap-text7">
        <form wire:submit.prevent="addToCart">
            <div class="date-time">
                <div id="field1">
                    <button type="button" id="sub" class="minus">-</button>
                    <input type="number" wire:model="qty" value="1" class="quantity" min="1" max="10" />
                    <button type="button" id="add" class="plus">+</button>
                </div>
            </div>
            <div class="product-detail-first-wrap-btn5">
                <button type="submit">Add to Cart</button>
            </div>
        </form>
    </div>
</div>
