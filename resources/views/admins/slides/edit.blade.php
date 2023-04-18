@extends('admins.layouts.app')
@section('title', 'update slide # {{ $slide->id }}')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Form Elements</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
          <li class="breadcrumb-item">Slide</li>
          <li class="breadcrumb-item active">Update #{{ $slide->id }}</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">General Form Elements</h5>

              <!-- General Form Elements -->
              <form action="{{ route('slide.update', ['id' => $slide->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Tên</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" value="{{ $slide->name }}">
                  </div>
                </div>

                <div class="text-center mb-3">
                    <img src="{{ $slide->images }}" width="300px" />
                </div>

                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Link image</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="images" value="{{ $slide->images }}">
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Submit Button</label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Save</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>
      </div>
    </section>

</main><!-- End #main -->  
@endsection