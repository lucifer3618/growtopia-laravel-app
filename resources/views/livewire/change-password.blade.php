<form wire:submit.prevent="updatePassword" class="password-change-form">
    @csrf
      <div class="mb-3">
        <label for="InputOldPassword" class="form-label">Old Password</label>
        <input type="password" name="currentPass" wire:model.defer="currentPass" class="form-control" id="oldPassInput" aria-describedby="emailHelp">
        @error('currentPass')
          <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="InputPassword1" class="form-label">Password</label>
        <input type="password" name="password" wire:model.defer="password" class="form-control" id="inputPassword1">
        @error('password')
          <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="InputPassword2" class="form-label"> Confirm Password</label>
        <input type="password" wire:model.defer="password_confirmation" name="password_confirmation" class="form-control" id="inputPassword2">
        @error('password_confirmation')
          <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>
      <button type="submit" class="btn btn-primary change-btn">Change Password</button>
</form>
