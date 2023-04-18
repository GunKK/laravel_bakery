@extends('admins.layouts.app')
@section('title', 'create product')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Form Elements</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Product</li>
          <li class="breadcrumb-item active">Create</li>
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
              <form action="{{ route('product.store') }}" method="post">
                @csrf
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Tên</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="name">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Link image</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="images">
                  </div>
                </div>
                
                <div class="row mb-3">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Mô tả sản phẩm</label>
                    <textarea class="tinymce-editor" name="description">
                        <p>Mô tả sản phẩm</p>
                        <p>Bánh trái cây <strong>100%</strong> từ thiên nhiên, không chất bảo quản</p>
                    </textarea><!-- End TinyMCE Editor -->
                </div>
                <!-- TinyMCE Editor -->

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Danh mục</label>
                    <div class="col-sm-10">
                      <select class="form-select" aria-label="Default select example">
                        <option selected>Open this select category</option>
                        @foreach ( $categories as $category )
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                      </select>
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