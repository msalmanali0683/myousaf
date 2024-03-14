@extends('layouts/layoutMaster')

@section('title', 'eCommerce Product Add - Apps')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/quill/typography.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/quill/katex.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/quill/editor.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/select2/select2.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/dropzone/dropzone.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/flatpickr/flatpickr.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/tagify/tagify.css')}}" />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/quill/katex.js')}}"></script>
<script src="{{asset('assets/vendor/libs/quill/quill.js')}}"></script>
<script src="{{asset('assets/vendor/libs/select2/select2.js')}}"></script>
<script src="{{asset('assets/vendor/libs/dropzone/dropzone.js')}}"></script>
<script src="{{asset('assets/vendor/libs/jquery-repeater/jquery-repeater.js')}}"></script>
<script src="{{asset('assets/vendor/libs/flatpickr/flatpickr.js')}}"></script>
<script src="{{asset('assets/vendor/libs/tagify/tagify.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/app-ecommerce-product-add.js')}}"></script>
@endsection

@section('content')
<h4 class="py-3 mb-0">
  <span class="text-muted fw-light">eCommerce /</span><span class="fw-medium"> Add Product</span>
</h4>

<div class="app-ecommerce">

  <!-- Add Product -->
  {{-- <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-3">

    <div class="d-flex flex-column justify-content-center">
      <h4 class="mb-1 mt-3">Add a new Product</h4>
      <p class="text-muted">Orders placed across your store</p>
    </div>
    

  </div> --}}

  <div class="row">

    <!-- First column-->
    <div class="col-12 col-lg-8 offset-2">
      <!-- Product Information -->
      <div class="card mb-4">
        <div class="card-header">
          <h5 class="card-tile mb-0">Product information</h5>
        </div>
        <div class="card-body">
          <div class="mb-3">
            <label class="form-label" for="ecommerce-product-name">Name</label>
            <input type="text" class="form-control" id="ecommerce-product-name" placeholder="Product title" name="productTitle" aria-label="Product title">
          </div>
          <div class="row mb-3">
            <button type="submit" class="btn btn-primary">Publish product</button>
          </div>
          
        </div>
      </div>
    </div>
   
    <!-- /Second column -->
  </div>
  <!-- Product List Table -->
<div class="card">
  <div class="card-header">
    <h5 class="card-title mb-0">Products Details</h5>
    <div class="d-flex justify-content-between align-items-center row py-3 gap-3 gap-md-0">
      {{-- <div class="col-md-4 product_status"></div>
      <div class="col-md-4 product_category"></div>
      <div class="col-md-4 product_stock"></div> --}}
    </div>
  </div>
  <div class="card-datatable table-responsive">
    <table class="datatables-products table">
      <thead class="border-top">
        <tr>
          <th>Product</th>
          <th>Stock</th>
          <th>Total Stock Amount</th>
          <th>actions</th>
        </tr>
      </thead>
    </table>
  </div>
</div>
</div>

@endsection
