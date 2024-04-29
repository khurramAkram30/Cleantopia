<div class="modal fade" id="otpModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="border: none;">
        <!-- <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5> -->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row justify-content-center align-items-center">
          <div class="card" style="border: none;">
            <div class="card-body">
              <h4 class="card-title text-center" style="color: #194F90;font-weight: 700;">Enter the Verification Code</h4>
              <h6 style="font-size: 16px;line-height: 25px;font-weight: 500;" class="text-center">Please enter the 6-digit code sent to <br>
              <small id="hashed_number">*******9897</small> to finish the pickup request.</h6>
              <div class="card-text text-center mt-5">
                <!-- <form action="" class="otp-form"> -->
                <div class="otp-form">
                  <input class="otp-field" type="text" name="opt-field[]" maxlength="1">
                  <input class="otp-field" type="text" name="opt-field[]" maxlength="1">
                  <input class="otp-field" type="text" name="opt-field[]" maxlength="1">
                  <input class="otp-field" type="text" name="opt-field[]" maxlength="1">
                  <input class="otp-field" type="text" name="opt-field[]" maxlength="1">
                  <input class="otp-field" type="text" name="opt-field[]" maxlength="1">

                  <!-- Store OTP Value -->
                  <input class="otp-value" type="hidden" name="opt-value">
                  <div class="mt-2 mb-2">
                  <span>Didn’t Receive Anything?<a  id="Resend" style="color:#1C9797;cursor: pointer;">Resend Code</a></span>

                  </div>
                  <div class="content d-flex justify-content-center align-items-center">
                     <div role="alert" class="alert alert-success d-none" id="otp_message"> Verified Successfully</div>
                 </div>
                  <div class="d-block mt-4">
                    <button class="btn" >Cancel</button>
                    <button class="btn btn-primary" style="background-color:#1C9797" id="verify">Verify</button>

                  </div>
                  </div>
                 
                <!-- </form> -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div> -->
    </div>
  </div>
</div>
