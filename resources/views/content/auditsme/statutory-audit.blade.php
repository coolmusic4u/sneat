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
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Data Preparation /</span> Statutory Audit</h4>


<!-- Form with Tabs -->
<div class="row">
  <div class="col">
    <!-- <h6 class="mt-4"> Form with Tabs </h6> -->
    <div class="nav-align-top mb-3">
      <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
          <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#form-tabs-1" role="tab" aria-selected="true">Director</button>
        </li>
        <li class="nav-item">
          <button class="nav-link " data-bs-toggle="tab" data-bs-target="#form-tabs-2" role="tab" aria-selected="false">Auditor</button>
        </li>
        <li class="nav-item">
          <button class="nav-link" data-bs-toggle="tab" data-bs-target="#form-tabs-3" role="tab" aria-selected="false">Alternate Director</button>
        </li>
        <li class="nav-item">
          <button class="nav-link" data-bs-toggle="tab" data-bs-target="#form-tabs-4" role="tab" aria-selected="true">Shareholder</button>
        </li>
        <li class="nav-item">
          <button class="nav-link " data-bs-toggle="tab" data-bs-target="#form-tabs-5" role="tab" aria-selected="false">Secretary</button>
        </li>
        <li class="nav-item">
          <button class="nav-link" data-bs-toggle="tab" data-bs-target="#form-tabs-6" role="tab" aria-selected="false">Register Office</button>
        </li>
        <li class="nav-item">
          <button class="nav-link" data-bs-toggle="tab" data-bs-target="#form-tabs-7" role="tab" aria-selected="true">Bank</button>
        </li>
        <li class="nav-item">
          <button class="nav-link " data-bs-toggle="tab" data-bs-target="#form-tabs-8" role="tab" aria-selected="false">Others</button>
        </li>
        <li class="nav-item">
          <button class="nav-link" data-bs-toggle="tab" data-bs-target="#form-tabs-9" role="tab" aria-selected="false">Share Menu</button>
        </li>
      </ul>
      <div class="tab-content">
        <!-- Personal Info -->
        <div class="tab-pane fade active show" id="form-tabs-1" role="tabpanel">
          <!-- Scrollable -->
          <div class="card">
            <h5 class="card-header">Scrollable Table</h5>
            <div class="card-datatable text-nowrap">
              <table class="dt-scrollableTable table table-bordered">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Email</th>
                    <th>City</th>
                    <th>Date</th>
                    <th>Salary</th>
                    <th>Age</th>
                    <th>Experience</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
              </table>
            </div>
          </div>
          <!--/ Scrollable -->
        </div>
        <!-- Personal Info -->
        <div class="tab-pane fade show" id="form-tabs-2" role="tabpanel">
          <form>
            <div class="row g-3">
              <div class="col-md-6">
                <div class="row">
                  <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-first-name">First Name</label>
                  <div class="col-sm-9">
                    <input type="text" id="formtabs-first-name" class="form-control" placeholder="John" />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="row">
                  <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-last-name">Last Name</label>
                  <div class="col-sm-9">
                    <input type="text" id="formtabs-last-name" class="form-control" placeholder="Doe" />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="row">
                  <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-country">Country</label>
                  <div class="col-sm-9">
                    <select id="formtabs-country" class="select2 form-select" data-allow-clear="true">
                      <option value="">Select</option>
                      <option value="Australia">Australia</option>
                      <option value="Bangladesh">Bangladesh</option>
                      <option value="Belarus">Belarus</option>
                      <option value="Brazil">Brazil</option>
                      <option value="Canada">Canada</option>
                      <option value="China">China</option>
                      <option value="France">France</option>
                      <option value="Germany">Germany</option>
                      <option value="India">India</option>
                      <option value="Indonesia">Indonesia</option>
                      <option value="Israel">Israel</option>
                      <option value="Italy">Italy</option>
                      <option value="Japan">Japan</option>
                      <option value="Korea">Korea, Republic of</option>
                      <option value="Mexico">Mexico</option>
                      <option value="Philippines">Philippines</option>
                      <option value="Russia">Russian Federation</option>
                      <option value="South Africa">South Africa</option>
                      <option value="Thailand">Thailand</option>
                      <option value="Turkey">Turkey</option>
                      <option value="Ukraine">Ukraine</option>
                      <option value="United Arab Emirates">United Arab Emirates</option>
                      <option value="United Kingdom">United Kingdom</option>
                      <option value="United States">United States</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-6 select2-primary">
                <div class="row">
                  <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-language">Language</label>
                  <div class="col-sm-9">
                    <select id="formtabs-language" class="select2 form-select" multiple>
                      <option value="en" selected>English</option>
                      <option value="fr" selected>French</option>
                      <option value="de">German</option>
                      <option value="pt">Portuguese</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="row">
                  <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-birthdate">Birth Date</label>
                  <div class="col-sm-9">
                    <input type="text" id="formtabs-birthdate" class="form-control dob-picker" placeholder="YYYY-MM-DD" />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="row">
                  <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-phone">Phone No</label>
                  <div class="col-sm-9">
                    <input type="text" id="formtabs-phone" class="form-control phone-mask" placeholder="658 799 8941" aria-label="658 799 8941" />
                  </div>
                </div>
              </div>
            </div>
            <div class="row mt-4">
              <div class="col-md-6">
                <div class="row justify-content-end">
                  <div class="col-sm-9">
                    <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                    <button type="reset" class="btn btn-label-secondary">Cancel</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
        <!-- Personal Info -->
        <div class="tab-pane fade show" id="form-tabs-3" role="tabpanel">
          <form>
            <div class="row g-3">
              <div class="col-md-6">
                <div class="row">
                  <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-first-name">First Name</label>
                  <div class="col-sm-9">
                    <input type="text" id="formtabs-first-name" class="form-control" placeholder="John" />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="row">
                  <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-last-name">Last Name</label>
                  <div class="col-sm-9">
                    <input type="text" id="formtabs-last-name" class="form-control" placeholder="Doe" />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="row">
                  <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-country">Country</label>
                  <div class="col-sm-9">
                    <select id="formtabs-country" class="select2 form-select" data-allow-clear="true">
                      <option value="">Select</option>
                      <option value="Australia">Australia</option>
                      <option value="Bangladesh">Bangladesh</option>
                      <option value="Belarus">Belarus</option>
                      <option value="Brazil">Brazil</option>
                      <option value="Canada">Canada</option>
                      <option value="China">China</option>
                      <option value="France">France</option>
                      <option value="Germany">Germany</option>
                      <option value="India">India</option>
                      <option value="Indonesia">Indonesia</option>
                      <option value="Israel">Israel</option>
                      <option value="Italy">Italy</option>
                      <option value="Japan">Japan</option>
                      <option value="Korea">Korea, Republic of</option>
                      <option value="Mexico">Mexico</option>
                      <option value="Philippines">Philippines</option>
                      <option value="Russia">Russian Federation</option>
                      <option value="South Africa">South Africa</option>
                      <option value="Thailand">Thailand</option>
                      <option value="Turkey">Turkey</option>
                      <option value="Ukraine">Ukraine</option>
                      <option value="United Arab Emirates">United Arab Emirates</option>
                      <option value="United Kingdom">United Kingdom</option>
                      <option value="United States">United States</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-6 select2-primary">
                <div class="row">
                  <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-language">Language</label>
                  <div class="col-sm-9">
                    <select id="formtabs-language" class="select2 form-select" multiple>
                      <option value="en" selected>English</option>
                      <option value="fr" selected>French</option>
                      <option value="de">German</option>
                      <option value="pt">Portuguese</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="row">
                  <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-birthdate">Birth Date</label>
                  <div class="col-sm-9">
                    <input type="text" id="formtabs-birthdate" class="form-control dob-picker" placeholder="YYYY-MM-DD" />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="row">
                  <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-phone">Phone No</label>
                  <div class="col-sm-9">
                    <input type="text" id="formtabs-phone" class="form-control phone-mask" placeholder="658 799 8941" aria-label="658 799 8941" />
                  </div>
                </div>
              </div>
            </div>
            <div class="row mt-4">
              <div class="col-md-6">
                <div class="row justify-content-end">
                  <div class="col-sm-9">
                    <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                    <button type="reset" class="btn btn-label-secondary">Cancel</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
        <!-- Personal Info -->
        <div class="tab-pane fade show" id="form-tabs-4" role="tabpanel">
          <form>
            <div class="row g-3">
              <div class="col-md-6">
                <div class="row">
                  <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-first-name">First Name</label>
                  <div class="col-sm-9">
                    <input type="text" id="formtabs-first-name" class="form-control" placeholder="John" />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="row">
                  <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-last-name">Last Name</label>
                  <div class="col-sm-9">
                    <input type="text" id="formtabs-last-name" class="form-control" placeholder="Doe" />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="row">
                  <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-country">Country</label>
                  <div class="col-sm-9">
                    <select id="formtabs-country" class="select2 form-select" data-allow-clear="true">
                      <option value="">Select</option>
                      <option value="Australia">Australia</option>
                      <option value="Bangladesh">Bangladesh</option>
                      <option value="Belarus">Belarus</option>
                      <option value="Brazil">Brazil</option>
                      <option value="Canada">Canada</option>
                      <option value="China">China</option>
                      <option value="France">France</option>
                      <option value="Germany">Germany</option>
                      <option value="India">India</option>
                      <option value="Indonesia">Indonesia</option>
                      <option value="Israel">Israel</option>
                      <option value="Italy">Italy</option>
                      <option value="Japan">Japan</option>
                      <option value="Korea">Korea, Republic of</option>
                      <option value="Mexico">Mexico</option>
                      <option value="Philippines">Philippines</option>
                      <option value="Russia">Russian Federation</option>
                      <option value="South Africa">South Africa</option>
                      <option value="Thailand">Thailand</option>
                      <option value="Turkey">Turkey</option>
                      <option value="Ukraine">Ukraine</option>
                      <option value="United Arab Emirates">United Arab Emirates</option>
                      <option value="United Kingdom">United Kingdom</option>
                      <option value="United States">United States</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-6 select2-primary">
                <div class="row">
                  <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-language">Language</label>
                  <div class="col-sm-9">
                    <select id="formtabs-language" class="select2 form-select" multiple>
                      <option value="en" selected>English</option>
                      <option value="fr" selected>French</option>
                      <option value="de">German</option>
                      <option value="pt">Portuguese</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="row">
                  <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-birthdate">Birth Date</label>
                  <div class="col-sm-9">
                    <input type="text" id="formtabs-birthdate" class="form-control dob-picker" placeholder="YYYY-MM-DD" />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="row">
                  <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-phone">Phone No</label>
                  <div class="col-sm-9">
                    <input type="text" id="formtabs-phone" class="form-control phone-mask" placeholder="658 799 8941" aria-label="658 799 8941" />
                  </div>
                </div>
              </div>
            </div>
            <div class="row mt-4">
              <div class="col-md-6">
                <div class="row justify-content-end">
                  <div class="col-sm-9">
                    <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                    <button type="reset" class="btn btn-label-secondary">Cancel</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
        <!-- Personal Info -->
        <div class="tab-pane fade show" id="form-tabs-5" role="tabpanel">
          <form>
            <div class="row g-3">
              <div class="col-md-6">
                <div class="row">
                  <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-first-name">First Name</label>
                  <div class="col-sm-9">
                    <input type="text" id="formtabs-first-name" class="form-control" placeholder="John" />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="row">
                  <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-last-name">Last Name</label>
                  <div class="col-sm-9">
                    <input type="text" id="formtabs-last-name" class="form-control" placeholder="Doe" />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="row">
                  <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-country">Country</label>
                  <div class="col-sm-9">
                    <select id="formtabs-country" class="select2 form-select" data-allow-clear="true">
                      <option value="">Select</option>
                      <option value="Australia">Australia</option>
                      <option value="Bangladesh">Bangladesh</option>
                      <option value="Belarus">Belarus</option>
                      <option value="Brazil">Brazil</option>
                      <option value="Canada">Canada</option>
                      <option value="China">China</option>
                      <option value="France">France</option>
                      <option value="Germany">Germany</option>
                      <option value="India">India</option>
                      <option value="Indonesia">Indonesia</option>
                      <option value="Israel">Israel</option>
                      <option value="Italy">Italy</option>
                      <option value="Japan">Japan</option>
                      <option value="Korea">Korea, Republic of</option>
                      <option value="Mexico">Mexico</option>
                      <option value="Philippines">Philippines</option>
                      <option value="Russia">Russian Federation</option>
                      <option value="South Africa">South Africa</option>
                      <option value="Thailand">Thailand</option>
                      <option value="Turkey">Turkey</option>
                      <option value="Ukraine">Ukraine</option>
                      <option value="United Arab Emirates">United Arab Emirates</option>
                      <option value="United Kingdom">United Kingdom</option>
                      <option value="United States">United States</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-6 select2-primary">
                <div class="row">
                  <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-language">Language</label>
                  <div class="col-sm-9">
                    <select id="formtabs-language" class="select2 form-select" multiple>
                      <option value="en" selected>English</option>
                      <option value="fr" selected>French</option>
                      <option value="de">German</option>
                      <option value="pt">Portuguese</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="row">
                  <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-birthdate">Birth Date</label>
                  <div class="col-sm-9">
                    <input type="text" id="formtabs-birthdate" class="form-control dob-picker" placeholder="YYYY-MM-DD" />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="row">
                  <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-phone">Phone No</label>
                  <div class="col-sm-9">
                    <input type="text" id="formtabs-phone" class="form-control phone-mask" placeholder="658 799 8941" aria-label="658 799 8941" />
                  </div>
                </div>
              </div>
            </div>
            <div class="row mt-4">
              <div class="col-md-6">
                <div class="row justify-content-end">
                  <div class="col-sm-9">
                    <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                    <button type="reset" class="btn btn-label-secondary">Cancel</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
        <!-- Personal Info -->
        <div class="tab-pane fade show" id="form-tabs-6" role="tabpanel">
          <form>
            <div class="row g-3">
              <div class="col-md-6">
                <div class="row">
                  <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-first-name">First Name</label>
                  <div class="col-sm-9">
                    <input type="text" id="formtabs-first-name" class="form-control" placeholder="John" />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="row">
                  <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-last-name">Last Name</label>
                  <div class="col-sm-9">
                    <input type="text" id="formtabs-last-name" class="form-control" placeholder="Doe" />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="row">
                  <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-country">Country</label>
                  <div class="col-sm-9">
                    <select id="formtabs-country" class="select2 form-select" data-allow-clear="true">
                      <option value="">Select</option>
                      <option value="Australia">Australia</option>
                      <option value="Bangladesh">Bangladesh</option>
                      <option value="Belarus">Belarus</option>
                      <option value="Brazil">Brazil</option>
                      <option value="Canada">Canada</option>
                      <option value="China">China</option>
                      <option value="France">France</option>
                      <option value="Germany">Germany</option>
                      <option value="India">India</option>
                      <option value="Indonesia">Indonesia</option>
                      <option value="Israel">Israel</option>
                      <option value="Italy">Italy</option>
                      <option value="Japan">Japan</option>
                      <option value="Korea">Korea, Republic of</option>
                      <option value="Mexico">Mexico</option>
                      <option value="Philippines">Philippines</option>
                      <option value="Russia">Russian Federation</option>
                      <option value="South Africa">South Africa</option>
                      <option value="Thailand">Thailand</option>
                      <option value="Turkey">Turkey</option>
                      <option value="Ukraine">Ukraine</option>
                      <option value="United Arab Emirates">United Arab Emirates</option>
                      <option value="United Kingdom">United Kingdom</option>
                      <option value="United States">United States</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-6 select2-primary">
                <div class="row">
                  <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-language">Language</label>
                  <div class="col-sm-9">
                    <select id="formtabs-language" class="select2 form-select" multiple>
                      <option value="en" selected>English</option>
                      <option value="fr" selected>French</option>
                      <option value="de">German</option>
                      <option value="pt">Portuguese</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="row">
                  <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-birthdate">Birth Date</label>
                  <div class="col-sm-9">
                    <input type="text" id="formtabs-birthdate" class="form-control dob-picker" placeholder="YYYY-MM-DD" />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="row">
                  <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-phone">Phone No</label>
                  <div class="col-sm-9">
                    <input type="text" id="formtabs-phone" class="form-control phone-mask" placeholder="658 799 8941" aria-label="658 799 8941" />
                  </div>
                </div>
              </div>
            </div>
            <div class="row mt-4">
              <div class="col-md-6">
                <div class="row justify-content-end">
                  <div class="col-sm-9">
                    <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                    <button type="reset" class="btn btn-label-secondary">Cancel</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
        <!-- Personal Info -->
        <div class="tab-pane fade show" id="form-tabs-7" role="tabpanel">
          <form>
            <div class="row g-3">
              <div class="col-md-6">
                <div class="row">
                  <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-first-name">First Name</label>
                  <div class="col-sm-9">
                    <input type="text" id="formtabs-first-name" class="form-control" placeholder="John" />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="row">
                  <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-last-name">Last Name</label>
                  <div class="col-sm-9">
                    <input type="text" id="formtabs-last-name" class="form-control" placeholder="Doe" />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="row">
                  <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-country">Country</label>
                  <div class="col-sm-9">
                    <select id="formtabs-country" class="select2 form-select" data-allow-clear="true">
                      <option value="">Select</option>
                      <option value="Australia">Australia</option>
                      <option value="Bangladesh">Bangladesh</option>
                      <option value="Belarus">Belarus</option>
                      <option value="Brazil">Brazil</option>
                      <option value="Canada">Canada</option>
                      <option value="China">China</option>
                      <option value="France">France</option>
                      <option value="Germany">Germany</option>
                      <option value="India">India</option>
                      <option value="Indonesia">Indonesia</option>
                      <option value="Israel">Israel</option>
                      <option value="Italy">Italy</option>
                      <option value="Japan">Japan</option>
                      <option value="Korea">Korea, Republic of</option>
                      <option value="Mexico">Mexico</option>
                      <option value="Philippines">Philippines</option>
                      <option value="Russia">Russian Federation</option>
                      <option value="South Africa">South Africa</option>
                      <option value="Thailand">Thailand</option>
                      <option value="Turkey">Turkey</option>
                      <option value="Ukraine">Ukraine</option>
                      <option value="United Arab Emirates">United Arab Emirates</option>
                      <option value="United Kingdom">United Kingdom</option>
                      <option value="United States">United States</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-6 select2-primary">
                <div class="row">
                  <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-language">Language</label>
                  <div class="col-sm-9">
                    <select id="formtabs-language" class="select2 form-select" multiple>
                      <option value="en" selected>English</option>
                      <option value="fr" selected>French</option>
                      <option value="de">German</option>
                      <option value="pt">Portuguese</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="row">
                  <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-birthdate">Birth Date</label>
                  <div class="col-sm-9">
                    <input type="text" id="formtabs-birthdate" class="form-control dob-picker" placeholder="YYYY-MM-DD" />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="row">
                  <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-phone">Phone No</label>
                  <div class="col-sm-9">
                    <input type="text" id="formtabs-phone" class="form-control phone-mask" placeholder="658 799 8941" aria-label="658 799 8941" />
                  </div>
                </div>
              </div>
            </div>
            <div class="row mt-4">
              <div class="col-md-6">
                <div class="row justify-content-end">
                  <div class="col-sm-9">
                    <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                    <button type="reset" class="btn btn-label-secondary">Cancel</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
        <!-- Personal Info -->
        <div class="tab-pane fade show" id="form-tabs-8" role="tabpanel">
          <form>
            <div class="row g-3">
              <div class="col-md-6">
                <div class="row">
                  <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-first-name">First Name</label>
                  <div class="col-sm-9">
                    <input type="text" id="formtabs-first-name" class="form-control" placeholder="John" />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="row">
                  <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-last-name">Last Name</label>
                  <div class="col-sm-9">
                    <input type="text" id="formtabs-last-name" class="form-control" placeholder="Doe" />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="row">
                  <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-country">Country</label>
                  <div class="col-sm-9">
                    <select id="formtabs-country" class="select2 form-select" data-allow-clear="true">
                      <option value="">Select</option>
                      <option value="Australia">Australia</option>
                      <option value="Bangladesh">Bangladesh</option>
                      <option value="Belarus">Belarus</option>
                      <option value="Brazil">Brazil</option>
                      <option value="Canada">Canada</option>
                      <option value="China">China</option>
                      <option value="France">France</option>
                      <option value="Germany">Germany</option>
                      <option value="India">India</option>
                      <option value="Indonesia">Indonesia</option>
                      <option value="Israel">Israel</option>
                      <option value="Italy">Italy</option>
                      <option value="Japan">Japan</option>
                      <option value="Korea">Korea, Republic of</option>
                      <option value="Mexico">Mexico</option>
                      <option value="Philippines">Philippines</option>
                      <option value="Russia">Russian Federation</option>
                      <option value="South Africa">South Africa</option>
                      <option value="Thailand">Thailand</option>
                      <option value="Turkey">Turkey</option>
                      <option value="Ukraine">Ukraine</option>
                      <option value="United Arab Emirates">United Arab Emirates</option>
                      <option value="United Kingdom">United Kingdom</option>
                      <option value="United States">United States</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-6 select2-primary">
                <div class="row">
                  <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-language">Language</label>
                  <div class="col-sm-9">
                    <select id="formtabs-language" class="select2 form-select" multiple>
                      <option value="en" selected>English</option>
                      <option value="fr" selected>French</option>
                      <option value="de">German</option>
                      <option value="pt">Portuguese</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="row">
                  <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-birthdate">Birth Date</label>
                  <div class="col-sm-9">
                    <input type="text" id="formtabs-birthdate" class="form-control dob-picker" placeholder="YYYY-MM-DD" />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="row">
                  <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-phone">Phone No</label>
                  <div class="col-sm-9">
                    <input type="text" id="formtabs-phone" class="form-control phone-mask" placeholder="658 799 8941" aria-label="658 799 8941" />
                  </div>
                </div>
              </div>
            </div>
            <div class="row mt-4">
              <div class="col-md-6">
                <div class="row justify-content-end">
                  <div class="col-sm-9">
                    <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                    <button type="reset" class="btn btn-label-secondary">Cancel</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
        <!-- Personal Info -->
        <div class="tab-pane fade show" id="form-tabs-9" role="tabpanel">
          <form>
            <div class="row g-3">
              <div class="col-md-6">
                <div class="row">
                  <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-first-name">First Name</label>
                  <div class="col-sm-9">
                    <input type="text" id="formtabs-first-name" class="form-control" placeholder="John" />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="row">
                  <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-last-name">Last Name</label>
                  <div class="col-sm-9">
                    <input type="text" id="formtabs-last-name" class="form-control" placeholder="Doe" />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="row">
                  <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-country">Country</label>
                  <div class="col-sm-9">
                    <select id="formtabs-country" class="select2 form-select" data-allow-clear="true">
                      <option value="">Select</option>
                      <option value="Australia">Australia</option>
                      <option value="Bangladesh">Bangladesh</option>
                      <option value="Belarus">Belarus</option>
                      <option value="Brazil">Brazil</option>
                      <option value="Canada">Canada</option>
                      <option value="China">China</option>
                      <option value="France">France</option>
                      <option value="Germany">Germany</option>
                      <option value="India">India</option>
                      <option value="Indonesia">Indonesia</option>
                      <option value="Israel">Israel</option>
                      <option value="Italy">Italy</option>
                      <option value="Japan">Japan</option>
                      <option value="Korea">Korea, Republic of</option>
                      <option value="Mexico">Mexico</option>
                      <option value="Philippines">Philippines</option>
                      <option value="Russia">Russian Federation</option>
                      <option value="South Africa">South Africa</option>
                      <option value="Thailand">Thailand</option>
                      <option value="Turkey">Turkey</option>
                      <option value="Ukraine">Ukraine</option>
                      <option value="United Arab Emirates">United Arab Emirates</option>
                      <option value="United Kingdom">United Kingdom</option>
                      <option value="United States">United States</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-6 select2-primary">
                <div class="row">
                  <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-language">Language</label>
                  <div class="col-sm-9">
                    <select id="formtabs-language" class="select2 form-select" multiple>
                      <option value="en" selected>English</option>
                      <option value="fr" selected>French</option>
                      <option value="de">German</option>
                      <option value="pt">Portuguese</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="row">
                  <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-birthdate">Birth Date</label>
                  <div class="col-sm-9">
                    <input type="text" id="formtabs-birthdate" class="form-control dob-picker" placeholder="YYYY-MM-DD" />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="row">
                  <label class="col-sm-3 col-form-label text-sm-end" for="formtabs-phone">Phone No</label>
                  <div class="col-sm-9">
                    <input type="text" id="formtabs-phone" class="form-control phone-mask" placeholder="658 799 8941" aria-label="658 799 8941" />
                  </div>
                </div>
              </div>
            </div>
            <div class="row mt-4">
              <div class="col-md-6">
                <div class="row justify-content-end">
                  <div class="col-sm-9">
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
