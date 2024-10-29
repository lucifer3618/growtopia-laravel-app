<div>
    <form enctype="multipart/form-data" action="{{ route('profile.update', Auth::user()->id) }}" method="POST" class="row g-3 mx-md-5 form" novalidate>
        @csrf
        <div class="col-md-12 text-center user-img">
            <img src="{{ $user->getImageURL() }}" id="photo" alt="" srcset="">
            <input type="file"  name="image" id="file">
            <label for="file" id="uploadBtn">
                <i class="fas fa-camera"></i>
            </label>
        </div>

        <div class="col-md-6">
          <label for="validationCustom01" class="form-label">First name</label>
          <input type="text" name="firstname" class="form-control" id="" value="{{ $user->firstname }}" required>
          @error('firstname')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="col-md-6">
          <label for="validationCustom02" class="form-label">Last name</label>
          <input type="text" name="lastname" class="form-control" id="" value="{{ $user->lastname }}" required>
          @error('lastname')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="col-md-6">
            <label for="validationCustom02" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="disabledInput" value="{{ $user->email }}" disabled>
        </div>

        <div class="col-md-6">
            <label for="validationCustom02" class="form-label">NIC</label>
            <input type="text" name="nic" class="form-control" id="disabledInput" value="{{ $user->nic }}" disabled>
        </div>

        <div class="col-md-12">
          <label for="validationCustomUsername" class="form-label">Username</label>
          <div class="input-group has-validation">
            <span class="input-group-text" id="">@</span>
            <input type="text" name="username" value="{{ $user->name }}" class="form-control" id="" aria-describedby="inputGroupPrepend" required>
          </div>
          @error('username')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="col-md-12">
          <label for="validationCustom03" class="form-label">City</label>
          <input type="text" name="city" value="{{ $user->city }}" class="form-control" id="" required>
          @error('city')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="col-md-5">
          <label for="validationCustom04" class="form-label">Province</label>
          <select class="form-select" name="province" id="" required>
            <option selected disabled value="">Choose...</option>
            @foreach ($provinces as $key => $province)
              <option value="{{ $key }}" {{ ($user->province===$key) ? 'selected' : "" }}>{{ $province }}</option>
            @endforeach
          </select>
          @error('province')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="col-md-5">
          <label for="validationCustom05" class="form-label">Zip</label>
          <input type="text" name="zip" class="form-control" value="{{ $user->zip }}" id="validationCustom05" required>
          @error('zip')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="col-12 mt-5">
          <button class="btn btn-primary" type="submit">Update Profile</button>
        </div>
    </form>
</div>
