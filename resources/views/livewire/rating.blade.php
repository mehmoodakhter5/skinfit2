<div>
    
        <div class="product-detail-second-wrap-review">
            <div class="detail-second-wrap-review-text">
                <h6>2 reviews for Ogx Shampoo Strength</h6>
            </div>
            <div class="detail-second-wrap-review-flex">
                <div class="detail-second-wrap-review-img">
                    <img src="assets/front/images/user.png" alt="">
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
                    <h6>admin - <span>February 15,2021</span></h6>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the standard type.</p>
                </div>
            </div>

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
        <div wire:loading>
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
                <button type="submit">Submit</button>
            </div>
        </form>
        </div>
    
</div>
