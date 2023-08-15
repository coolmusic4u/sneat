@extends('layouts/layoutMaster')

@section('title', ' Horizontal Layouts - Forms')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/flatpickr/flatpickr.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/select2/select2.css')}}" />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/cleavejs/cleave.js')}}"></script>
<script src="{{asset('assets/vendor/libs/cleavejs/cleave-phone.js')}}"></script>
<script src="{{asset('assets/vendor/libs/moment/moment.js')}}"></script>
<script src="{{asset('assets/vendor/libs/flatpickr/flatpickr.js')}}"></script>
<script src="{{asset('assets/vendor/libs/select2/select2.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/form-layouts.js')}}"></script>
@endsection

@section('content')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Data Preparation /</span> Company Information</h4>

<!-- Form with Tabs -->
<div class="row">
  <div class="col">
    <!-- <h6 class="mt-4"> Form with Tabs </h6> -->
    <div class="nav-align-top mb-3">
      <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
          <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#form-tabs-general" role="tab" aria-selected="true">General</button>
        </li>
        <li class="nav-item">
          <button class="nav-link " data-bs-toggle="tab" data-bs-target="#form-tabs-advanced" role="tab" aria-selected="false">Advanced</button>
        </li>
        <li class="nav-item">
          <button class="nav-link" data-bs-toggle="tab" data-bs-target="#form-tabs-social" role="tab" aria-selected="false">Social Links</button>
        </li>
      </ul>
      <div class="tab-content">
        <!-- General Info -->
        <div class="tab-pane fade active show" id="form-tabs-general" role="tabpanel">
          <form>
            <div class="row g-3">
              <div class="col-md-6">
                <div class="row">
                  <label class="col-sm-4 col-form-label text-sm-end" for="formtabs-company-name">Company</label>
                  <div class="col-sm-8">
                    <input type="text" id="formtabs-company-name" class="form-control" placeholder="ABC Sdn Bhd" />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="row">
                  <label class="col-sm-4 col-form-label text-sm-end" for="formtabs-formal-name">Formally Known as</label>
                  <div class="col-sm-8">
                    <input type="text" id="formtabs-formal-name" class="form-control" placeholder="ABC Sdn Bhd" />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="row">
                  <label class="col-sm-4 col-form-label text-sm-end" for="formtabs-company-no-new">New Company No.</label>
                  <div class="col-sm-8">
                    <input type="text" id="formtabs-company-no-new" class="form-control" placeholder="123412341234" />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="row">
                  <label class="col-sm-4 col-form-label text-sm-end" for="formtabs-company-no-old">Old Company No.</label>
                  <div class="col-sm-8">
                    <input type="text" id="formtabs-company-no-old" class="form-control" placeholder="1234567-A" />
                  </div>
                </div>
              </div>
              
              <div class="col-md-6">
                <div class="row">
                  <label class="col-sm-4 col-form-label text-sm-end" for="collapsible-address">Address</label>
                  <div class="col-sm-8">
                    <textarea name="collapsible-address" class="form-control" id="collapsible-address" rows="4" placeholder="16, Jalan Razak"></textarea>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <div class="row">
                    <label class="col-sm-4 col-form-label text-sm-end" for="collapsible-pincode">Pincode</label>
                    <div class="col-sm-8">
                      <input type="text" id="collapsible-pincode" class="form-control" placeholder="56000" />
                    </div>
                  </div>
                </div>
                <div class="mb-3">
                  <div class="row">
                    <label class="col-sm-4 col-form-label text-sm-end" for="collapsible-city">City</label>
                    <div class="col-sm-8">
                      <input type="text" id="collapsible-city" class="form-control" placeholder="Cheras" />
                    </div>
                  </div>
                </div>
              </div>
 
              <div class="col-md-6">
                <div class="row">
                  <label class="col-sm-4 col-form-label text-sm-end" for="collapsible-state">State</label>
                  <div class="col-sm-8">
                    <select id="collapsible-state" class="select2 form-select" data-allow-clear="true">
                      <option value="">Select</option>
                      <option value="Johor">Johor</option>
                      <option value="Kedah">Kedah</option>
                      <option value="Kelantan">Kelantan</option>
                      <option value="Melaka">Melaka</option>
                      <option value="Negeri Sembilan">Negeri Sembilan</option>
                      <option value="Pahang">Pahang</option>
                      <option value="Perak">Perak</option>
                      <option value="Pulau Pinang">Pulau Pinang</option>
                      <option value="Perlis">Perlis</option>
                      <option value="Sabah">Sabah</option>
                      <option value="Sarawak">Sarawak</option>
                      <option value="Selangor">Selangor</option>
                      <option value="Terengganu">Terengganu</option>
                      <option value="Kuala Lumpur">Kuala Lumpur</option>
                      <option value="Labuan">Labuan</option>
                      <option value="Putrajaya">Putrajaya</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="row">
                  <label class="col-sm-4 col-form-label text-sm-end" for="formtabs-country">Country</label>
                  <div class="col-sm-8">
                    <select id="formtabs-country" class="select2 form-select" data-allow-clear="true">
                      <option value="">Select</option>
                      <option value="Malaysia">Malaysia</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="row">
                  <label class="col-sm-4 col-form-label text-sm-end" for="formtabs-business-phone">Business Phone</label>
                  <div class="col-sm-8">
                    <input type="text" id="formtabs-business-phone" class="form-control phone-mask" placeholder="012 345 6789" aria-label="012 345 6789" />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="row">
                  <label class="col-sm-4 col-form-label text-sm-end" for="formtabs-mobile">Mobile Phone</label>
                  <div class="col-sm-8">
                    <input type="text" id="formtabs-mobile" class="form-control phone-mask" placeholder="012 345 6789" aria-label="012 345 6789" />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="row">
                  <label class="col-sm-4 col-form-label text-sm-end" for="formtabs-fax">Fax No</label>
                  <div class="col-sm-8">
                    <input type="text" id="formtabs-fax" class="form-control phone-mask" placeholder="012 345 6789" aria-label="012 345 6789" />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="row">
                  <label class="col-sm-4 col-form-label text-sm-end" for="formtabs-email">Email</label>
                  <div class="col-sm-8">
                    <input type="text" id="formtabs-email" class="form-control" placeholder="admin@admin.com" aria-label="admin@admin.com" />
                  </div>
                </div>
              </div>
              
            </div>
            <div class="row mt-4">
              <div class="col-md-6">
                <div class="row justify-content-end">
                  <div class="col-sm-8">
                    <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                    <button type="reset" class="btn btn-label-secondary">Cancel</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
        <!-- Account Details -->
        <div class="tab-pane fade" id="form-tabs-advanced" role="tabpanel">

          <form>
            
            <div class="row g-3">

              <!-- Accounting Standard -->
              <div class="col-md-6 mb-4">
                <div class="card">
                  <h5 class="card-header">Accounting Standard</h5>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md mb-md-0 mb-2">
                        <div class="form-check custom-option custom-option-icon">
                          <label class="form-check-label custom-option-content" for="customRadioIcon1">
                            <span class="custom-option-body">
                              <!-- <i class="bx bx-rocket"></i> -->
                              <span class="custom-option-title">PERS</span>
                              <small> Private Entity Reporting Standard</small>
                            </span>
                            <input name="customRadioIconGroup1" class="form-check-input" type="radio" value="" id="customRadioIcon1" />
                          </label>
                        </div>
                      </div>
                      <div class="col-md mb-md-0 mb-2">
                        <div class="form-check custom-option custom-option-icon">
                          <label class="form-check-label custom-option-content" for="customRadioIcon2">
                            <span class="custom-option-body">
                              <!-- <i class="bx bx-user"></i> -->
                              <span class="custom-option-title"> MPERS </span>
                              <small> Malaysia Private Entity Reporting standard </small>
                            </span>
                            <input name="customRadioIconGroup1" class="form-check-input" type="radio" value="" id="customRadioIcon2" checked/>
                          </label>
                        </div>
                      </div>
                      <div class="col-md">
                        <div class="form-check custom-option custom-option-icon">
                          <label class="form-check-label custom-option-content" for="customRadioIcon3">
                            <span class="custom-option-body">
                              <!-- <i class="bx bx-crown"></i> -->
                              <span class="custom-option-title"> MFRS </span>
                              <small>Malaysia Financial Reporting Standard</small>
                            </span>
                            <input name="customRadioIconGroup1" class="form-check-input" type="radio" value="" id="customRadioIcon3" />
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Audit Programme -->
              <div class="col-md-6 mb-4">
                <div class="card">
                  <h5 class="card-header">Audit Programme Selection</h5>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md mb-md-0 mb-2">
                        <div class="form-check custom-option custom-option-icon">
                          <label class="form-check-label custom-option-content" for="customRadioIcon4">
                            <span class="custom-option-body">
                              <!-- <i class="bx bx-rocket"></i> -->
                              <span class="custom-option-title">Small Size</span>
                              <small> Ideal for small businesses or dormant companies.</small>
                            </span>
                            <input name="customRadioIconGroup2" class="form-check-input" type="radio" value="" id="customRadioIcon4" />
                          </label>
                        </div>
                      </div>
                      <div class="col-md mb-md-0 mb-2">
                        <div class="form-check custom-option custom-option-icon">
                          <label class="form-check-label custom-option-content" for="customRadioIcon5">
                            <span class="custom-option-body">
                              <!-- <i class="bx bx-user"></i> -->
                              <span class="custom-option-title">Medium Size</span>
                              <small> Best suited for medium-sized enterprises.</small>
                            </span>
                            <input name="customRadioIconGroup2" class="form-check-input" type="radio" value="" id="customRadioIcon5" checked/>
                          </label>
                        </div>
                      </div>
                      <div class="col-md">
                        <div class="form-check custom-option custom-option-icon">
                          <label class="form-check-label custom-option-content" for="customRadioIcon6">
                            <span class="custom-option-body">
                              <!-- <i class="bx bx-crown"></i> -->
                              <span class="custom-option-title"> Large Size</span>
                              <small>Audit programme tailored for large corporations.</small>
                            </span>
                            <input name="customRadioIconGroup2" class="form-check-input" type="radio" value="" id="customRadioIcon6" />
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>   

              <!-- Nature of expenses -->
              <div class="col-md-6 mb-4">
                <div class="card">
                  <h5 class="card-header">Expenses Presentation</h5>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md mb-md-0 mb-2">
                        <div class="form-check custom-option custom-option-icon">
                          <label class="form-check-label custom-option-content" for="customRadioIcon7">
                            <span class="custom-option-body">
                              <!-- <i class="bx bx-rocket"></i> -->
                              <span class="custom-option-title">By Nature</span>
                              <small> Expenses break down into categories such as wages and salaries</small>
                            </span>
                            <input name="customRadioIconGroup3" class="form-check-input" type="radio" value="" id="customRadioIcon7" />
                          </label>
                        </div>
                      </div>
                      <div class="col-md mb-md-0 mb-2">
                        <div class="form-check custom-option custom-option-icon">
                          <label class="form-check-label custom-option-content" for="customRadioIcon8">
                            <span class="custom-option-body">
                              <!-- <i class="bx bx-user"></i> -->
                              <span class="custom-option-title"> By Function </span>
                              <small> Group expenses into cost of sales, distribution costs,etc</small>
                            </span>
                            <input name="customRadioIconGroup3" class="form-check-input" type="radio" value="" id="customRadioIcon8" checked/>
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Cash flow -->
              <div class="col-md-6 mb-4">
                <div class="card">
                  <h5 class="card-header">Cash Flow Statement</h5>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md mb-md-0 mb-2">
                        <div class="form-check custom-option custom-option-icon">
                          <label class="form-check-label custom-option-content" for="customRadioIcon9">
                            <span class="custom-option-body">
                              <!-- <i class="bx bx-rocket"></i> -->
                              <span class="custom-option-title">Indirect Method</span>
                              <small> Starts with net income and then adjusts for the effects of non-cash transactions</small>
                            </span>
                            <input name="customRadioIconGroup4" class="form-check-input" type="radio" value="" id="customRadioIcon9"  checked/>
                          </label>
                        </div>
                      </div>
                      <div class="col-md mb-md-0 mb-2">
                        <div class="form-check custom-option custom-option-icon">
                          <label class="form-check-label custom-option-content" for="customRadioIcon10">
                            <span class="custom-option-body">
                              <!-- <i class="bx bx-user"></i> -->
                              <span class="custom-option-title">Direct Method</span>
                              <small> It presents major classes of gross cash receipts and gross cash payments.</small>
                            </span>
                            <input name="customRadioIconGroup4" class="form-check-input" type="radio" value="" id="customRadioIcon10"/>
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>  

              <div class="col-md-6">
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="card-title header-elements">
                      <h5 class="m-0 me-2">Manufacturing Company</h5>
                      <div class="card-title-elements ms-auto">
                        <label class="switch switch-primary switch-sm me-0">
                          <input type="checkbox" class="switch-input" />
                          <span class="switch-toggle-slider">
                            <span class="switch-on"></span>
                            <span class="switch-off"></span>
                          </span>
                          <span class="switch-label"></span>
                        </label>
                      </div>
                    </div>
                    <p class="card-text">Enable this to allow additional account grouping for cost of sales item such as factory overhead or labour cost. </p>
                  </div>
                </div>
              </div>

              
              <div class="col-md-6">
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="card-title header-elements">
                      <h5 class="m-0 me-2">Housing Developer Account</h5>
                      <div class="card-title-elements ms-auto">
                        <label class="switch switch-primary switch-sm me-0">
                          <input type="checkbox" class="switch-input" />
                          <span class="switch-toggle-slider">
                            <span class="switch-on"></span>
                            <span class="switch-off"></span>
                          </span>
                          <span class="switch-label"></span>
                        </label>
                      </div>
                    </div>
                    <p class="card-text">Enable this to comply with reporting requirement under Housing Development (Control and Licensing) Act 1966 </p>
                  </div>
                </div>
              </div>
 
 
            </div>
            <!-- <div class="row mt-4">
              <div class="col-md-6">
                <div class="row justify-content-end">
                  <div class="col-sm-8">
                    <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                    <button type="reset" class="btn btn-label-secondary">Cancel</button>
                  </div>
                </div>
              </div>
            </div> -->
          </form>
        </div>
        <!-- Social Links -->
        <div class="tab-pane fade" id="form-tabs-social" role="tabpanel">
          <form>
            <div class="row g-3">
              <div class="col-md-6">
                <div class="row">
                  <label class="col-sm-4 col-form-label text-sm-end" for="formtabs-twitter">Twitter</label>
                  <div class="col-sm-8">
                    <input type="text" id="formtabs-twitter" class="form-control" placeholder="https://twitter.com/abc" />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="row">
                  <label class="col-sm-4 col-form-label text-sm-end" for="formtabs-facebook">Facebook</label>
                  <div class="col-sm-8">
                    <input type="text" id="formtabs-facebook" class="form-control" placeholder="https://facebook.com/abc" />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="row">
                  <label class="col-sm-4 col-form-label text-sm-end" for="formtabs-google">Google+</label>
                  <div class="col-sm-8">
                    <input type="text" id="formtabs-google" class="form-control" placeholder="https://plus.google.com/abc" />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="row">
                  <label class="col-sm-4 col-form-label text-sm-end" for="formtabs-linkedin">Linkedin</label>
                  <div class="col-sm-8">
                    <input type="text" id="formtabs-linkedin" class="form-control" placeholder="https://linkedin.com/abc" />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="row">
                  <label class="col-sm-4 col-form-label text-sm-end" for="formtabs-instagram">Instagram</label>
                  <div class="col-sm-8">
                    <input type="text" id="formtabs-instagram" class="form-control" placeholder="https://instagram.com/abc" />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="row">
                  <label class="col-sm-4 col-form-label text-sm-end" for="formtabs-quora">Quora</label>
                  <div class="col-sm-8">
                    <input type="text" id="formtabs-quora" class="form-control" placeholder="https://quora.com/abc" />
                  </div>
                </div>
              </div>
            </div>
            <div class="row mt-4">
              <div class="col-md-6">
                <div class="row justify-content-end">
                  <div class="col-sm-8">
                    <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                    <button type="reset" class="btn btn-label-secondary">Cancel</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection