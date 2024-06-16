<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title textBlack">Sign up</h5>
          <img src="{{url('assets/images/icons/close.png')}}" data-dismiss="modal" class="customStyleCurso closeSignupModal" aria-label="Close" alt="img"/>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ route('register',['lang'=>getLanguage()]) }}">
            @csrf
            <div class="row mb-3">
                <div class="col-md-12">
                    <input id="signup_name" type="text" class="form-control inputBackground" name="name" required placeholder="Name">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-12">
                    <input id="signup_email" type="signup_email" class="form-control inputBackground" name="email" required placeholder="Email address">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-12">
                    <input id="signup_password" type="password" class="form-control inputBackground" name="password" required placeholder="Password">
                </div>
                <div class="col-md-12 mt-3">
                    <input id="password-confirm" type="password" class="form-control inputBackground" name="password_confirmation" required placeholder="Repeat Password">
                </div>
                <div class="col-md-12 text-center mt-4 text-muted">
                   Have an account? <span class='openLoginModal customStyleCursor themeColorText font-weight-bold' data-toggle="modal" data-target="#loginModal">Log in</span>
                </div>
            </div>
            <div class="row mb-0">
                <div class="col-md-12 p-3">
                    <button type="submit" class="btn text-white backgroundStyleColor w-100">
                        Sign up
                    </button>
                </div>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>