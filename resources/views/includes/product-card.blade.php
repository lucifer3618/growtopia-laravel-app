@foreach ($products as $product)
<div class="col {{ strtolower($product->category) }}">
    <div class="card">
        <img src="{{ asset($product->getImageURL()) }}" class="card-img-top product-image" alt="{{ $product->name }}">
        <div class="card-body">
            <h4 class="card-title">{{ $product->name }}</h4>
            <p class="card-text">{{ $product->sub_text }}.</p>
        </div>
        <div class="inter d-flex justify-content-around mb-4">
            <h3 class="price">Rs.{{ $product->price }}/=</h3>
            <button class="btn btn-primary">Add to Cart</button>
        </div>
    </div>
</div>
@endforeach
