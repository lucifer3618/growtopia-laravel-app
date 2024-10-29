
<form enctype="multipart/form-data" action="{{ route('contact.store') }}" class="contact-form" id="contact-form" method="POST">
    @csrf

    <div class="input-wrapper">
      <input type="text" name="firstname" autocomplete="off" id="firstName" class="contact-input">
      <label for="FirstName">First name</label>
      <i class="icon fa fa-address-card"></i>
      <div class="error" id="firstName-error"></div>
    </div>

    <div class="input-wrapper">
      <input type="text" name="lastname" autocomplete="off" id="lastName" class="contact-input">
      <label for="LastName">Last name</label>
      <i class="icon fa fa-address-card"></i>
      <div class="error" id="lastName-error"></div>
    </div>

    <div class="input-wrapper w-100">
      <input type="text" name="phone" autocomplete="off" id="phone" class="contact-input">
      <label for="Phone">Phone Number</label>
      <i class="icon fa-solid fa-phone"></i>
      <div class="error" id="phone-error"></div>
    </div>

    <div class="input-wrapper w-100">
      <input type="text" name="email" autocomplete="off" id="email" class="contact-input">
      <label for="Email">Email</label>
      <i class="icon fa fa-envelope"></i>
      <div class="error" id="email-error"></div>
    </div>

    <div class="input-wrapper textarea w-100">
      <textarea name="message" id="msg" autocomplete="off" class="contact-input"></textarea>
      <label for="Message">Message</label>
      <i class="icon fa fa-inbox"></i>
      <div class="error" id="msg-error"></div>
    </div>

    <div class="contact-buttons w-100">
      <button class="button upload">
        <span>
          <i class="fa fa-paperclip"></i> Add Attachment
        </span>
        <input type="file" name="doc" accept="image/*, application/pdf">
      </button>
      <input type="submit" value="Send Message" class="button">
    </div>

  </form>
