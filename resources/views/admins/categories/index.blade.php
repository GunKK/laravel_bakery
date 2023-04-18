@extends('admins.layouts.app')
@section('title', 'manage category')
@section('content')
<div id="main" class="main">

    <div class="pagetitle">
      <h1>Data Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
          <li class="breadcrumb-item">Category</li>
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
                    <th scope="col">Description</th>
                    <th scope="col">Status</th>
                    <th scope="col">Updated_at</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ( $categories as $category )
                    
                  <tr>
                    <th scope="row">{{ $category->id }}</th>
                    <td>{{ $category->name }}</td>
                    <td><img src="{{ $category->images }}" width="50px" class="rounded-circle" alt=""></td>
                    <td>
                      @if ($category->active == 1)
                        <span class="text-success">Active</span>
                      @else                     
                        <span class="text-secondary">Non</span>
                      @endif
                    </td>
                    <td>{{ $category->updated_at }}</td>
                    <td>
                      <a href="{{ route('category.edit', ['id' => $category->id]) }}" class="btn btn-sm btn-warning mb-1 w-100">Edit</a>
                      <form action="{{ route('category.destroy', $category->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm w-100" type="submit" title="Delete">Delete</button>
                      </form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              <!-- End Table with stripped rows -->
              <div>
                {{ $categories->links() }}
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

  </div><!-- End #main -->    
@endsection