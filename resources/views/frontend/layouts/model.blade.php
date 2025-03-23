<div class="search-bar mt-4" >
    <div class="input-group">
        <input type="text" class="form-control" placeholder="Search by Service, Category..." data-toggle="modal" data-target="#travelSearchModal" style="border-radius: 50px;">
        <button class="btn btn-light" data-target="#travelSearchModal" data-toggle="modal" type="button">
            <i class="fas fa-search"></i>
        </button>
    </div>
</div>
<div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="userModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-0">
                <div class="modal-title-wrapper">
                    <i class="fas fa-spa me-2"></i>
                    <h5 class="modal-title" id="userModalLabel">Welcome to Relaxation Haven!</h5>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center py-4">
                <h3 class="section-title">Book and Manage Your Appointments</h3>

                <p class="my-4">Already have an account?</p>

                <a href="{{ route('login') }}" class="btn btn-login w-75 mb-4">
                    <i class="fas fa-sign-in-alt me-2"></i> LOGIN
                </a>

                <p class="mb-3">Don't have an account yet?</p>

                <a href="{{ route('signup') }}" class="btn btn-signup w-75">
                    <i class="fas fa-user-plus me-2"></i> SIGN UP
                </a>

                <div class="benefits-section mt-5">
                    <h6 class="benefits-title">Member Benefits:</h6>
                    <ul class="benefits-list">
                        <li><i class="fas fa-check-circle"></i> Easy appointment booking</li>
                        <li><i class="fas fa-check-circle"></i> Special member discounts</li>
                        <li><i class="fas fa-check-circle"></i> Loyalty rewards program</li>
                        <li><i class="fas fa-check-circle"></i> Personalized treatment recommendations</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- -----Modal search------------- -->
<div class="modal fade mt-4 pt-4" id="travelSearchModal" tabindex="-1" aria-labelledby="travelSearchModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content mModalContent mx-auto">
            <div class="modal-header mModalHeader">
                <h5 class="modal-title mModalTitle" id="travelSearchModalLabel">Escort Search</h5>
                <button type="button" class="close badge badge-danger bg-danger" data-dismiss="modal"
                    aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body mModalBody">
                <form id="searchForm">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <select class="form-control" id="category" name="category">
                                <option value="call-girls">Call Girls
                                </option><option value="massages">Massages
                                </option><option value="male-escorts">Male Escorts
                                </option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="mSearchInput">
                                <input type="text" placeholder="Search .." name="search" id="search" class="form-control"
                                    id="destination" name="destination">
                                {{-- <i class="fas fa-search"></i> --}}
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <select class="form-control" id="state" name="state">
                                <option value="">All Regions</option>
                                @foreach (App\Models\State::where('country_id',101)->get(); as $state)
                                    <option value="{{ $state->id }}">{{ $state->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <select class="form-control" id="city" name="city">
                                <option value="">All Cities</option>
                            </select>
                        </div>
                    </div>
                    <div class="mActionButtons d-flex float-end">
                        <button type="submit" class="btn btn-primary float-end" id="mSearchButton">Search</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>