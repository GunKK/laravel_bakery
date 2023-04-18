@extends('admins.layouts.app')
@section('title', 'manage product')
@section('content')
<div id="main" class="main">

    <div class="pagetitle">
      <h1>Data Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Datatables</h5>
              <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p>

              <!-- Table with stripped rows -->
              <table id="table-product" class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Image</th>
                    <th scope="col">Updated_at</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ( $slides as $slide )
                    
                  <tr>
                    <th scope="row">{{ $slide->id }}</th>
                    <td>{{ $slide->name }}</td>
                    <td><img src="{{ $slide->images }}" width="50px" class="rounded-circle" alt=""></td>
                    <td>{{ $slide->updated_at }}</td>
                    <td>
                      <a href="{{ route('slide.edit', ['id' => $slide->id]) }}" class="btn btn-sm btn-warning mb-1 w-100">Edit</a>
                      <form action="{{ route('slide.destroy', $slide->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm w-100" type="submit" title="Delete">Delete</button>
                      </form>
                      {{-- <a href="{{ route('product.destroy', ['id' => $slide->id]) }}" class="btn btn-danger">Delete</a> --}}
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              <!-- End Table with stripped rows -->
              <div>
                {{ $slides->links() }}
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

  </div><!-- End #main -->    
@endsection