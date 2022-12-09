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
                <h2>Add Category</h2>
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
              <li class="breadcrumb-item active" aria-current="page">Add Category
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
                <h6 class="mb-25">Add Category</h6>
              <div class="input-style-1">
                  <input type="text" name="name" placeholder="Category Name" />
              </div>
              <div class="input-style-2">
                  <input type="text" name="slug" placeholder="Slug" />
              </div>
              <div class="input-style-1">
                  <textarea placeholder="Description" rows="5"></textarea>
              </div>
              <div class="input-style-2">
                  <label>Category Image</label>
                  <input type="file" name="image" />
              </div>
              <div class="text-end">
                  <a href="#0" class="main-btn primary-btn rounded-md btn-hover">Submit</a>
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
