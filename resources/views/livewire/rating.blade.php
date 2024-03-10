<div>
        <div class="product-detail-second-wrap-review">
            <div class="detail-second-wrap-review-text">
                <h6>{{count($total)}} reviews for {{$product_name}}</h6>
            </div>
            @foreach($total as $totals)
            <div class="detail-second-wrap-review-flex">
                <div class="detail-second-wrap-review-img">
                    <img src="{{asset('front/asset/images/user.png')}}" alt="">
                </div>
                <div class="detail-second-wrap-review-feature">
                    <ul>
                        <li>
                            <i class="fa-solid fa-star"></i>
                        </li>
                        <li>
                            <i class="fa-solid fa-star"></i>
                        </li>
                        <li>
                            <i class="fa-solid fa-star"></i>
                        </li>
                        <li>
                            <i class="fa-solid fa-star"></i>
                        </li>
                        <li>
                            <i class="fa-solid fa-star"></i>
                        </li>
                    </ul>
                    <h6>{{$totals->review_name}} - <span>{{ \Carbon\Carbon::parse($totals->created_at)->format('D-m-Y') }}</span>                    </h6>
                    <p>{{$totals->review_message}}</p>
                </div>
            </div>
            @endforeach
        </div> 
        <div class="product-detail-second-wrap-review1">
            <div class="detail-second-wrap-review-text1">
                <h6>Your rating *</h6>
            </div>
            <div class="detail-second-wrap-review-text1">
                <ul>
                    <li><i class="fa-solid fa-star"></i></li>
                </ul>
                <ul>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                </ul>
                <ul>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                </ul>
                <ul>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                </ul>
                <ul>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                    <li><i class="fa-solid fa-star"></i></li>
                </ul>
            </div>
        </div>
        <div wire:loading wire:target="submit">
            Submiting Review
        </div>
        <div class="product-detail-second-wrap-review2">
            <form wire:submit.prevent="add_rating" method="POST">
                @csrf
            <div class="second-wrap-review2-feild">
                <h6>Your review *</h6>
                <textarea wire:model.live="rating_message"></textarea>
            </div>
            <div class="second-wrap-review2-feild">
                <h6>Your Name *</h6>
                <input type="text" wire:model.live="rating_name" placeholder="">
            </div>
            <div class="second-wrap-review2-feild">
                <h6>Your Email *</h6>
                <input type="email" wire:model.live="rating_email" placeholder="">
            </div>
            <div class="checkout-first-wrap-checkbox">
                <div class="form-group">
                    <input type="checkbox" id="two">
                    <label for="two">Save my name, email, and website in this browser for the next time I comment.</label>
                </div>
            </div>
            <div class="second-wrap-review2-feild-btn">
                <button wire:click="submit" type="submit">Submit</button>
            </div>
        </form>
        </div>
    
</div>
