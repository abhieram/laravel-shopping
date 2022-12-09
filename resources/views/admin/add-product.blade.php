@extends('layouts.adminlayout')
@section('content')
  <main class="main-wrapper">
    @include('layouts.partials.adminheader')
    <section class="tab-components">
      <div class="container-fluid">
        <div class="title-wrapper pt-30">
          <div class="row align-items-center">
            <div class="col-md-6">
              <div class="title mb-30">
                <h1>Add Product</h1>
              </div>
            </div>
  <!-- end col -->
      <div class="col-md-6">
        <div class="breadcrumb-wrapper mb-30">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="{{ URL::route('dashboard') }}">Dashboard</a>
                  </li>
              <li class="breadcrumb-item active" aria-current="page">Add Product
                  </li>
            </ol>
              </nav>
        </div>
      </div>
<!-- end col -->
      </div>
<!-- end row -->
      </div>

      <div class="form-elements-wrapper">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <form method="POST" action="" enctype="multipart/form-data">
            <div class="card-style mb-30">
                <h6 class="mb-25">Add Product</h6>
            <div class="input-style-1">
                <input type="text" name="name" placeholder="Product Name" />
            </div>
                <div class="select-style-2">
                <div class="select-position">
              <select>
                  <option value="">Select category</option>
                  <option value="">Mobiles & Accessories</option>
                  <option value="">Laptop & Accessories</option>
                  <option value="">TV & Home appliances </option>
                </select>
            </div>
            </div>
                <div class="input-style-1">
                <input type="text" name="name" placeholder="Selling Price" />
            </div>
                <div class="input-style-1">
                  <input type="text" name="name" placeholder="M R P" />
                </div>
                  <div class="input-style-2">
                  <input type="text" name="slug" placeholder="Slug" />
                </div>
                  <div class="input-style-1">
                <textarea placeholder="Description" rows="5"></textarea>
                </div>
                <div class="form-check form-switch toggle-switch mb-30">
                  <input class="form-check-input" type="checkbox" id="toggleSwitch1" />
                  <label class="form-check-label" for="toggleSwitch1">Cash on Delivery</label>

                </div>
                <div class="input-style-2">
                  <label>Product Image</label>
                  <input type="file" name="image" />
                </div>
                  <div class="text-end">
                  <a href="#0" class="main-btn primary-btn rounded-md btn-hover">Submit</a>
                </div>
              </div>
            </div>
          </form>
        </div>
        </div>
      </div>
      </div>
    </section>
  </main>
@endsection
