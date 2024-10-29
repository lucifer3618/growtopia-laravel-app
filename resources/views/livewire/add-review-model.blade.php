<div class="modal fade mt-5" wire:ignore id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Whats' on your mind?</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="submitReview">
                    <div class="mb-3">
                        <div class="star-component wire:ignore">
                            @for ($i = 1; $i <= 5; $i++)
                                <span class="star" id="star_{{ $i }}" data-index="{{ $i }}"
                                    {{-- style="color: {{ $i <= 4 ? 'gold' : 'gray' }};"> --}} wire:click="setRating({{ $i }})">★
                                </span>
                            @endfor
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Message:</label>
                        <textarea class="form-control" wire:model="reviewText" placeholder="Share your thoughts..." rows="5"
                            cols="50" id="message-text"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                <button wire:click="submitReview({{ $product }})" type="button" data-bs-dismiss="modal"
                    class="btn btn-primary send-btn">Send
                    message</button>
            </div>
        </div>
    </div>
</div>
