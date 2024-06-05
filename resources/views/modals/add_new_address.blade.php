<div class="modal fade" id="addNewAddressModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-bottom-0">
        <h5 class="modal-title textBlack">Please enter your address</h5>
          <img src="{{url('assets/images/icons/close.png')}}" data-dismiss="modal" class="customStyleCursor closeLoginModal" aria-label="Close" alt="img"/>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="row mb-2">
                <div class="col-12">
                    <input id="email" type="text" class="form-control inputBackground " name="street" placeholder="Street">
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-12">
                    <input id="text" type="text" class="form-control inputBackground " name="building_name" placeholder="Building name">
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-6">
                    <input id="text" type="text" class="form-control inputBackground " name="building_name" placeholder="Floor">
                </div>
                <div class="col-6">
                    <input id="text" type="text" class="form-control inputBackground " name="building_name" placeholder="Apt, suite nr.">
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-12">
                  <select class='form-control'>
                    <option>Select building type</option>
                    <option>Building 1</option>
                    <option>Building 2</option>
                    <option>Building 3</option>
                  </select>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-6">
                    <input id="text" type="text" class="form-control inputBackground " name="building_name" placeholder="Apt Nickname">
                </div>
                <div class="col-6">
                    <input id="text" type="text" class="form-control inputBackground " name="building_name" placeholder="Zip code">
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-6">
                    <input id="text" type="text" class="form-control inputBackground " name="building_name" placeholder="City">
                </div>
                <div class="col-6">
                    <input id="text" type="text" class="form-control inputBackground " name="building_name" placeholder="Country">
                </div>
            </div>
            <div class="row mb-0">
                <div class="col-12 p-3">
                    <button type="submit" class="btn text-white backgroundStyleColor w-100">
                        Save
                    </button>
                </div>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>