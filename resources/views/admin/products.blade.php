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
                <h2>Products</h2>
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
                    <li class="breadcrumb-item active" aria-current="page">
                      Products
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
            <!-- end col -->
          </div>
          <!-- end row -->
        </div>
        <div class="tables-wrapper">
          <div class="row">
            <div class="col-lg-12">
              <div class="card-style mb-30">
                <h6 class="mb-10">Recently added</h6>
                <div class="table-wrapper table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>
                          <h6>#</h6>
                        </th>
                        <th>
                          <h6>Email</h6>
                        </th>
                        <th>
                          <h6>Phone No</h6>
                        </th>
                        <th>
                          <h6>Company</h6>
                        </th>
                        <th>
                          <h6>Action</h6>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="min-width">
                          <div class="lead">
                            {{-- <div class="lead-image">
                              <img src="assets/images/lead/lead-1.png" alt="" />
                            </div> --}}
                            <div class="lead-text">
                              <p>Courtney Henry</p>
                            </div>
                          </div>
                        </td>
                        <td class="min-width">
                          <p><a href="#0">yourmail@gmail.com</a></p>
                        </td>
                        <td class="min-width">
                          <p>(303)555 3343523</p>
                        </td>
                        <td class="min-width">
                          <p>UIdeck digital agency</p>
                        </td>
                        <td>
                          <div class="action">
                            <button class="text-danger">
                              <i class="lni lni-trash-can"></i>
                            </button>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <!-- end table -->
                </div>
              </div>
              <!-- end card -->
            </div>
            <!-- end col -->
          </div>
          <!-- end row -->
        </div>

      </div>
    </section>
  </main>
@endsection
