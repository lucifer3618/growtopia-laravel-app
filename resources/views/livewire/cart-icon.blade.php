<button class="d-inline cart">
    <i class="fa fa-cart-shopping"></i>
    @if ($count>0)
        <p class="item-count">{{ $count }}</p>
        @else
        <p class="item-count">0</p>
    @endif
</button>
