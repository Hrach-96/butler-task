<div class="modal fade" id="changeLanguageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title textBlack">{{ __('msg.change-language') }}</h5>
          <img src="{{url('assets/images/icons/close.png')}}" data-dismiss="modal" class="customStyleCursor closeLoginModal" aria-label="Close" alt="img"/>
      </div>
      <div class="modal-body">
        <form method='post' action="{{route('change.language')}}" >
          @csrf
          <div class='row'>
            <div class='col-md-4 text-center'>
              <label class="form-check-label" for="usLang">
                <img src="{{url('assets/images/flags/en.png')}}" class='w-100'/>
              </label>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="language" value="en" id="usLang">
              </div>
            </div>
            <div class='col-md-4 text-center'>
              <label class="form-check-label" for="frLang">
                <img src="{{url('assets/images/flags/fr.png')}}" class='w-100'/>
              </label>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="language" value="fr" id="frLang">
              </div>
            </div>
            <div class='col-md-4 text-center'>
              <label class="form-check-label" for="itLang">
                <img src="{{url('assets/images/flags/it.png')}}" class='w-100'/>
              </label>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="language" value="it" id="itLang">
              </div>
            </div>
            <div class='col-md-12'>
              <button type="submit" class="btn mt-3 text-white backgroundStyleColor w-100">
                  Change
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>