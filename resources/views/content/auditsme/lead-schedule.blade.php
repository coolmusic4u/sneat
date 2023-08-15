@extends('layouts/layoutMaster')

@section('title', 'Tables - Basic Tables')

@section('content')
 <!-- <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">Home</li>
  </ol>
</nav>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Library</li>
  </ol>
</nav> 

<nav aria-label="breadcrumb"  style="font-size: 1.4em;">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Audit work</a></li>
    <li class="breadcrumb-item"><a href="#">Asset</a></li>
    <li class="breadcrumb-item active" aria-current="page">Property, Plant and Equipment</li>
  </ol>
</nav>  -->


<h4 class="fw-bold"><span class="text-muted fw-light">Asset /</span> Property, Plant and Equipment</h4>

<ul class="nav nav-pills flex-column flex-md-row">
      <li class="nav-item"><a class="nav-link active" href="">Main Lead</a></li>
      <li class="nav-item"><a class="nav-link" href="">Anaytical Review</a></li>
      <li class="nav-item"><a class="nav-link" href="">Note Disclosure</a></li>
      <li class="nav-item"><a class="nav-link" href="">Audit Programme</a></li>
</ul>

<ul class="nav nav-pills flex-column flex-md-row mb-3">
      <li class="nav-item"><a class="nav-link" href="">Asset Listing</a></li>
      <li class="nav-item"><a class="nav-link" href="">Sublead 2</a></li>
      <li class="nav-item"><a class="nav-link" href="">Sublead 3</a></li>
      <div class="btn-group dropend">
      <button type="button" class="btn btn-primary btn-icon rounded-pill dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false"><i class="bx bx-dots-vertical-rounded"></i></button>
        <ul class="dropdown-menu" style="">
          <li><a class="dropdown-item" href="javascript:void(0);">Copy Last Year Schedule</a></li>
          <li><a class="dropdown-item" href="javascript:void(0);">Sampling Data</a></li>
          <li><a class="dropdown-item" href="javascript:void(0);">PPE Worksheet</a></li>
          <li><a class="dropdown-item" href="javascript:void(0);">Loan Worksheet</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="javascript:void(0);">Rearrange Sequences</a></li>
        </ul>
      </div>
</ul>


<!-- Complex Headers -->
<div class="card">
  <!-- <h5 class="card-header">Property Plant and Equipment</h5> -->
  <div class="card-datatable text-nowrap">
    <table class="dt-complex-header table table-bordered table-sm">
      <thead>
        <tr>
          <th rowspan="2">Account Name</th>
          <th colspan="4">Current Year</th>
          <th colspan="1">Comparative Year</th>
          <th rowspan="2">Remarks</th>
          <th rowspan="2">Action</th>
        </tr>
        <tr>
          <th>Unaudited</th>
          <th>Debit</th>
          <th>Credit</th>
          <th>Audited</th>
          <th class="border-1">Audited</th>
        </tr>
      </thead>

      <tbody>
        <tr class="odd">
            <td class="sorting_1">Motor Vehicle</td>
            <td>4,500.00</td>
            <td></td>
            <td></td>
            <td>4,500.00</td>
            <td>4,500.00</td>
            <td></td>
            <td>
              <div class="d-inline-block">
                  <a href="javascript:;" class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></a>
                  <div class="dropdown-menu dropdown-menu-end m-0">
                    <a href="javascript:;" class="dropdown-item">Details</a><a href="javascript:;" class="dropdown-item">Archive</a>
                    <div class="dropdown-divider"></div>
                    <a href="javascript:;" class="dropdown-item text-danger delete-record">Delete</a>
                  </div>
              </div>
              <a href="javascript:;" class="btn btn-sm btn-icon item-edit"><i class="bx bxs-edit"></i></a>
            </td>
        </tr>
        <tr class="even">
            <td class="sorting_1">Accum. Depreciation of Motor Vehicle</td>
            <td>450.00</td>
            <td></td>
            <td></td>
            <td>450.00</td>
            <td>450.00</td>
            <td></td>
            <td>
              <div class="d-inline-block">
                  <a href="javascript:;" class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></a>
                  <div class="dropdown-menu dropdown-menu-end m-0">
                    <a href="javascript:;" class="dropdown-item">Details</a><a href="javascript:;" class="dropdown-item">Archive</a>
                    <div class="dropdown-divider"></div>
                    <a href="javascript:;" class="dropdown-item text-danger delete-record">Delete</a>
                  </div>
              </div>
              <a href="javascript:;" class="btn btn-sm btn-icon item-edit"><i class="bx bxs-edit"></i></a>
            </td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="row">
   <div class="col-sm-12 col-md-6">
      
   </div>
   <div class="col-sm-12 col-md-6">
      <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_1_paginate">
         <ul class="pagination">
              
         </ul>
      </div>
   </div>
</div>
</div>
<!--/ Complex Headers -->


<div class="card-body">
        <form class="form-repeater">
          <hr>
            <div class="btn-group dropend">
                <button type="button" class="btn btn-primary btn-icon rounded-pill dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false"><i class="bx bx-dots-vertical-rounded"></i></button>
                <ul class="dropdown-menu" style="">
                  <li><a class="dropdown-item" href="javascript:void(0);">Text Comment</a></li>
                  <li><a class="dropdown-item" href="javascript:void(0);">Column Editor</a></li>
                  <li><a class="dropdown-item" href="javascript:void(0);">Attachments</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="javascript:void(0);">Rearrange Sequences</a></li>
                </ul>
              </div>
        </form>
      </div>
@endsection
