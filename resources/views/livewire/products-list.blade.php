<div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-4 g-4 py-2">
    @foreach ($products as $product)
        <a href="{{ route('product.show', $product) }}">
            <div class="col {{ strtolower($product->category) }}">
                <div class="card">
                    <img src="{{ asset($product->getImageURL()) }}" class="card-img-top product-image"
                        alt="{{ $product->name }}">
                    <div class="card-body">
                        <h4 class="card-title">{{ $product->name }}</h4>
                        <p class="card-text">{{ $product->sub_text }}.</p>
                    </div>
                    <div class="inter d-flex justify-content-around mb-4">
                        <h3 class="price">Rs.{{ $product->price }}/=</h3>
                        <button class="btn btn-primary" wire:click.prevent="addToCart({{ $product->id }})">Add to
                            Cart</button>
                    </div>
                </div>
            </div>
        </a>
    @endforeach

    <div class="paginate ms-4 mt-5">
        {{ $products->links('livewire::bootstrap', data: ['scrollTo' => false]) }}
    </div>
</div>
