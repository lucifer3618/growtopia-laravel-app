<div class="container review-container">
    <div class="rating-title">
        <img src="{{ asset('images/products/title-star.png') }}" alt="">
        <div class="rating-title-name">
            <h1>Product Review Display</h1>
        </div>
    </div>
    <div class="review-heading mb-5">
        <div class="overall-rating heading-item">
            <div class="total-reviews">
                <img class="title-img" src="{{ asset('images/products/radio-1.png') }}" alt="radio-1">
                <h3 class="total-reviews-title">Overall Rating</h3>
            </div>
            <h1>{{ round($averageStars, 1) }}<small>/5</small></h1>
            <div class="total-stars">
                @for ($i = 1; $i <= 5; $i++)
                    <span class="star" style="color: {{ $i <= floor($averageStars) ? 'gold' : 'gray' }};">
                        ★
                    </span>
                @endfor
            </div>
            <div class="num-total">{{ $count }} Reviews</div>
        </div>

        @if ($count !== 0)
            <div class="rating-brakdown heading-item">
                <div class="breakdown">
                    <img class="title-img" src="{{ asset('images/products/radio-2.png') }}" alt="radio-2">
                    <h3 class="breakdown-title">Rating Brakdown</h3>
                </div>
                <div class="progress-bars">
                    <div class="stars">
                        <p class="stars-title">5</p>
                        <img src="{{ asset('images/products/star.png') }}" class="star-img" alt="star-img">
                        <progress value="{{ ($fiveStars / $count) * 100 }}" max="100"></progress>
                        <div class="count">{{ $fiveStars }}</div>
                    </div>
                    <div class="stars">
                        <p class="stars-title">4</p>
                        <img src="{{ asset('images/products/star.png') }}" class="star-img" alt="star-img">
                        <progress value="{{ ($fourStars / $count) * 100 }}" max="100"></progress>
                        <div class="count">{{ $fourStars }}</div>
                    </div>
                    <div class="stars">
                        <p class="stars-title">3</p>
                        <img src="{{ asset('images/products/star.png') }}" class="star-img" alt="star-img">
                        <progress value="{{ ($threeStars / $count) * 100 }}" max="100"></progress>
                        <div class="count">{{ $threeStars }}</div>
                    </div>
                    <div class="stars">
                        <p class="stars-title">2</p>
                        <img src="{{ asset('images/products/star.png') }}" class="star-img" alt="star-img">
                        <progress value="{{ ($twoStars / $count) * 100 }}" max="100"></progress>
                        <div class="count">{{ $twoStars }}</div>
                    </div>
                    <div class="stars">
                        <p class="stars-title">1</p>
                        <img src="{{ asset('images/products/star.png') }}" class="star-img" alt="star-img">
                        <progress value="{{ ($oneStars / $count) * 100 }}" max="100"></progress>
                        <div class="count">{{ $oneStars }}</div>
                    </div>
                </div>
            </div>
        @else
            <div class="rating-brakdown heading-item">
                <div class="breakdown">
                    <img class="title-img" src="{{ asset('images/products/radio-2.png') }}" alt="radio-2">
                    <h3 class="breakdown-title">Rating Brakdown</h3>
                </div>
                <div class="progress-bars">
                    <div class="stars">
                        <p class="stars-title">5</p>
                        <img src="{{ asset('images/products/star.png') }}" class="star-img" alt="star-img">
                        <progress value="0" max="100"></progress>
                        <div class="count">{{ $fiveStars }}</div>
                    </div>
                    <div class="stars">
                        <p class="stars-title">4</p>
                        <img src="{{ asset('images/products/star.png') }}" class="star-img" alt="star-img">
                        <progress value="0" max="100"></progress>
                        <div class="count">{{ $fourStars }}</div>
                    </div>
                    <div class="stars">
                        <p class="stars-title">3</p>
                        <img src="{{ asset('images/products/star.png') }}" class="star-img" alt="star-img">
                        <progress value="0" max="100"></progress>
                        <div class="count">{{ $threeStars }}</div>
                    </div>
                    <div class="stars">
                        <p class="stars-title">2</p>
                        <img src="{{ asset('images/products/star.png') }}" class="star-img" alt="star-img">
                        <progress value="0" max="100"></progress>
                        <div class="count">{{ $twoStars }}</div>
                    </div>
                    <div class="stars">
                        <p class="stars-title">1</p>
                        <img src="{{ asset('images/products/star.png') }}" class="star-img" alt="star-img">
                        <progress value="0" max="100"></progress>
                        <div class="count">{{ $oneStars }}</div>
                    </div>
                </div>
            </div>
        @endif

        <div class="give-rating heading-item">
            <h2>Have Something to say?</h2>
            @auth
                <button class="btn btn-primary review-btn" data-bs-toggle="modal" data-bs-target="#exampleModal"
                    data-bs-whatever="@mdo" wire:click="updateSelect('create')">Write a Review</button>
            @endauth
            @guest
                Please <a href="{{ route('login') }}">log in</a> to add a review!
            @endguest
        </div>
    </div>

    @foreach ($reviews as $review)
        <div class="review card p-2 my-2">
            <div class="card-body">
                <div class="identify">
                    <div class="user-img">
                        <img src="{{ $review->user->getImageUrl() }}" alt="" srcset="">
                    </div>
                    <div class="names">
                        <h5 class="card-title">{{ $review->user->firstname . ' ' . $review->user->lastname }}</h5>
                        <div class="username"><i class="fa-solid fa-at simbol"></i>{{ $review->user->name }}</div>
                        <div class="time" wire:poll.10s>{{ $review->created_at->diffForHumans() }}</div>
                    </div>
                    <div class="star-rating">
                        @for ($i = 1; $i <= 5; $i++)
                            <span class="star" style="color: {{ $i <= $review->star_rating ? 'gold' : 'gray' }};">
                                ★
                            </span>
                        @endfor
                    </div>
                    @auth
                        @if ($review->user->id === Auth::user()->id)
                            <div class="controll-btn">
                                <button class="btn btn-danger update" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal" data-bs-whatever="@mdo"
                                    wire:click="updateSelect({{ $review->id }})">Update</button>
                                <button class="btn btn-danger delete ms-3"
                                    wire:click="removeReview({{ $review }})">Delete</button>
                            </div>
                        @endif
                    @endauth
                </div>
                <p class="rating-card-text card-text">{{ $review->review_text }}
                </p>
            </div>
        </div>
    @endforeach

    <div class="paginate mt-5">
        {{ $reviews->links('livewire::bootstrap', data: ['scrollTo' => false]) }}
    </div>
</div>
