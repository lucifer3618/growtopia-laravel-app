<div class="delete-container">
    <div class="heading">
        <h1>Deleting the Account?</h1>
    </div>
    <div class="info">
        <p class="para"><b>Deleting your account is permanent.</b> Once you delete your account, all of your data,
            including your order history, saved addresses, payment information, and wishlist, will
            be permanently removed. There is no way to recover this information.</p>
        <p class="confirmation">Are you sure you want to delete your account?</p>
        <form action="{{ route('profile.destroy', $user->id) }}" class="delete-form" method="POST" id="accountDeleteForm">
            @csrf
            <div class="form-group">
                <small id="" class="form-text text-muted">If you sure, type "DELETE".</small>
                <input type="text" class="form-control" id="delete-input" aria-describedby="" placeholder="" required>
            </div>
            <button type="submit" onclick="validateDelete()" class="btn btn-danger delete-btn">Delete Account</button>
        </form>
    </div>
</div>
