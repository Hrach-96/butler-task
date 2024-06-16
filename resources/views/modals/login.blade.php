<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title textBlack">Log in</h5>
          <img src="{{url('assets/images/icons/close.png')}}" data-dismiss="modal" class="customStyleCursor closeLoginModal" aria-label="Close" alt="img"/>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ route('login',['lang'=>getLanguage()]) }}">
            @csrf
            <div class="row mb-3">
                <div class="col-md-12">
                    <input id="email" type="email" class="form-control inputBackground @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email address">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-12">
                    <input id="password" type="password" class="form-control inputBackground @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                </div>
                <div class="col-md-12 text-right text-muted mt-3">
                  @if (Route::has('password.request'))
                      <!-- <a class="btn btn-link text-muted" href="{{ route('password.request') }}"> -->
                      {{ __('Forgot Your Password?') }}
                      <!-- </a> -->
                  @endif
                </div>
                <div class="col-md-12 text-center mt-4 text-muted">
                   Don't have an account? <span class='openSignupModal customStyleCursor themeColorText font-weight-bold' data-toggle="modal" data-target="#signupModal">Sign Up</span>
                </div>
            </div>
            <div class="row mb-0">
                <div class="col-md-12 p-3">
                    <button type="submit" class="btn text-white backgroundStyleColor w-100">
                        {{ __('Log in') }}
                    </button>
                </div>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>