<div class="small-con">
    <h1>Your Cart</h1>

    <table class="item-table">
        <tr>
            <th>Product</th>
            <th class="quantity">Quantity</th>
            <th>Remove</th>
            <th>Subtotal</th>
        </tr>
        @if (!empty($content))
            @foreach ($content as $item)
                <tr>
                    <td>
                        <div class="product-info">
                            <img src="{{ asset($item['image']) }}" alt="{{ $item['name'] }}" srcset="">
                            <div class="">
                                <p>{{ $item['name'] }}</p>
                                <small>Rs.{{ $item['price'] }}.00</small>
                            </div>
                        </div>
                    </td>
                    <td class="quantity">
                        <button class="change-quantity" wire:click="reduceQuantity({{ $item['id'] }})" id="reduce">
                            < </button>
                                <input type="text" disabled value="{{ $item['qty'] }}">
                                <button class="change-quantity" wire:click="increaseQuantity({{ $item['id'] }})"
                                    id="add">></button>
                    </td>
                    <td><i class="fa-solid fa-trash" wire:click="removeItem({{ $item['id'] }})"
                            style="color: rgb(255, 0 ,0);"></i></td>
                    <td>{{ 'Rs.' . $item['qty'] * $item['price'] }}</td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="4" class="empty">
                    <h1>Cart is Empty!</h1>
                </td>
            </tr>
        @endif
    </table>

    <div class="checkout-section">
        <div class="checkout">
            <div class="description">You're almost there! Please review your items and shipping
                details to ensure everything is correct. By clicking 'Proceed to Checkout', you agree to our terms and
                conditions,
                and your payment will be processed securely. Thank you for choosing Growtopia!
            </div>
            <div class="buttons">
                <button class="checkout-btn" wire:click="clearCart()" id="clear-btn">Clear cart</button>
                <button class="checkout-btn" wire:click="checkOut()" id="proceed-btn">Proceed to Checkout</button>
            </div>
        </div>
        <div class="total">
            <table>
                <tr>
                    <td>Subtotal</td>
                    <td>Rs.{{ $subTotal }}</td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td>Rs.{{ $tax }}</td>
                </tr>
                <tr>
                    <td><b>Total</b></td>
                    <td><b>Rs.{{ $total }}</b></td>
                </tr>
            </table>
        </div>
    </div>
</div>
