@extends('customers.layouts.app')
@section('title', 'Product')
@section('content')

<section class="mt-5">
    <div class="container">

        <div class="row">
        <!-- sidebar -->
            <div class="col-lg-3">
                <!-- Toggle button -->
                <button
                        class="btn btn-outline-secondary mb-3 w-100 d-lg-none"
                        type="button"
                        data-mdb-toggle="collapse"
                        data-mdb-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                        >
                <span>Show filter</span>
                </button>
                <!-- Collapsible wrapper -->
                <div class="collapse card d-lg-block mb-5" id="navbarSupportedContent">
                <div class="accordion" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button
                                class="accordion-button text-dark bg-light"
                                type="button"
                                data-mdb-toggle="collapse"
                                data-mdb-target="#panelsStayOpen-collapseOne"
                                aria-expanded="true"
                                aria-controls="panelsStayOpen-collapseOne"
                                >
                        Related items
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne">
                        <div class="accordion-body">
                        <ul class="list-unstyled">
                            @foreach ( $categories as $category )
                                <li><a href="#" class="text-dark">{{ $category->name }}</a></li>
                            @endforeach
                        </ul>
                        </div>
                    </div>
                    </div>
                    <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button
                                class="accordion-button text-dark bg-light"
                                type="button"
                                data-mdb-toggle="collapse"
                                data-mdb-target="#panelsStayOpen-collapseTwo"
                                aria-expanded="true"
                                aria-controls="panelsStayOpen-collapseTwo"
                                >
                        Brands
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo">
                        <div class="accordion-body">
                        <div>
                            <!-- Checked checkbox -->
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked1" checked />
                            <label class="form-check-label" for="flexCheckChecked1">Mercedes</label>
                            <span class="badge badge-secondary float-end">120</span>
                            </div>
                            <!-- Checked checkbox -->
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked2" checked />
                            <label class="form-check-label" for="flexCheckChecked2">Toyota</label>
                            <span class="badge badge-secondary float-end">15</span>
                            </div>
                            <!-- Checked checkbox -->
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked3" checked />
                            <label class="form-check-label" for="flexCheckChecked3">Mitsubishi</label>
                            <span class="badge badge-secondary float-end">35</span>
                            </div>
                            <!-- Checked checkbox -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked4" checked />
                                <label class="form-check-label" for="flexCheckChecked4">Nissan</label>
                                <span class="badge badge-secondary float-end">89</span>
                            </div>
                            <!-- Default checkbox -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                <label class="form-check-label" for="flexCheckDefault">Honda</label>
                                <span class="badge badge-secondary float-end">30</span>
                            </div>
                            <!-- Default checkbox -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                <label class="form-check-label" for="flexCheckDefault">Suzuki</label>
                                <span class="badge badge-secondary float-end">30</span>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button
                                class="accordion-button text-dark bg-light"
                                type="button"
                                data-mdb-toggle="collapse"
                                data-mdb-target="#panelsStayOpen-collapseThree"
                                aria-expanded="false"
                                aria-controls="panelsStayOpen-collapseThree"
                                >
                        Price
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree">
                        <div class="accordion-body">
                        <div class="range">
                            <input type="range" class="form-range" id="customRange1" />
                        </div>
                        <div class="row mb-3">
                            <div class="col-6">
                            <p class="mb-0">
                                Min
                            </p>
                            <div class="form-outline">
                                <input type="number" id="typeNumber" class="form-control" />
                                <label class="form-label" for="typeNumber">$0</label>
                            </div>
                            </div>
                            <div class="col-6">
                            <p class="mb-0">
                                Max
                            </p>
                            <div class="form-outline">
                                <input type="number" id="typeNumber" class="form-control" />
                                <label class="form-label" for="typeNumber">$1,0000</label>
                            </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-white w-100 border border-secondary">apply</button>
                        </div>
                    </div>
                    </div>
                    <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button
                                class="accordion-button text-dark bg-light"
                                type="button"
                                data-mdb-toggle="collapse"
                                data-mdb-target="#panelsStayOpen-collapseFour"
                                aria-expanded="false"
                                aria-controls="panelsStayOpen-collapseFour"
                                >
                        Size
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingThree">
                        <div class="accordion-body">
                        <input type="checkbox" class="btn-check border justify-content-center" id="btn-check1" checked autocomplete="off" />
                        <label class="btn btn-white mb-1 px-1" style="width: 60px;" for="btn-check1">XS</label>
                        <input type="checkbox" class="btn-check border justify-content-center" id="btn-check2" checked autocomplete="off" />
                        <label class="btn btn-white mb-1 px-1" style="width: 60px;" for="btn-check2">SM</label>
                        <input type="checkbox" class="btn-check border justify-content-center" id="btn-check3" checked autocomplete="off" />
                        <label class="btn btn-white mb-1 px-1" style="width: 60px;" for="btn-check3">LG</label>
                        <input type="checkbox" class="btn-check border justify-content-center" id="btn-check4" checked autocomplete="off" />
                        <label class="btn btn-white mb-1 px-1" style="width: 60px;" for="btn-check4">XXL</label>
                        </div>
                    </div>
                    </div>
                    <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button
                                class="accordion-button text-dark bg-light"
                                type="button"
                                data-mdb-toggle="collapse"
                                data-mdb-target="#panelsStayOpen-collapseFive"
                                aria-expanded="false"
                                aria-controls="panelsStayOpen-collapseFive"
                                >
                        Ratings
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse show" aria-labelledby="headingThree">
                        <div class="accordion-body">
                        <!-- Default checkbox -->
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked />
                            <label class="form-check-label" for="flexCheckDefault">
                            <i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            </label>
                        </div>
                        <!-- Default checkbox -->
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked />
                            <label class="form-check-label" for="flexCheckDefault">
                            <i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-secondary"></i>
                            </label>
                        </div>
                        <!-- Default checkbox -->
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked />
                            <label class="form-check-label" for="flexCheckDefault">
                            <i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-secondary"></i>
                            <i class="bi bi-star-fill text-secondary"></i>
                            </label>
                        </div>
                        <!-- Default checkbox -->
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked />
                            <label class="form-check-label" for="flexCheckDefault">
                            <i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-secondary"></i><i class="bi bi-star-fill text-secondary"></i>
                            <i class="bi bi-star-fill text-secondary"></i>
                            </label>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <!-- sidebar -->
            <!-- content -->
            <div class="col-lg-9">
                <header class="d-sm-flex align-items-center border-bottom mb-4 pb-3">
                <strong class="d-block py-2">{{ $products->count() }} Items found </strong>

                <div class="ms-auto">
                    <select class="form-select d-inline-block w-auto border pt-1">
                        <option value="0">Best match</option>
                        <option value="1">Recommended</option>
                        <option value="2">High rated</option>
                        <option value="3">Randomly</option>
                    </select>
                    <div class="btn-group shadow-0 border">
                        <a href="#" class="btn btn-light" title="List view">
                            <i class="fa fa-bars fa-lg"></i>
                        </a>
                        <a href="#" class="btn btn-light active" title="Grid view">
                            <i class="fa fa-th fa-lg"></i>
                        </a>
                    </div>
                </div>
                </header>

                <div class="row">
                    @foreach ( $products as $product )    
                    <div class="col-lg-4 col-md-12 mb-4">
                        <div class="card">
                        <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
                            data-mdb-ripple-color="light">
                            <a href="{{ route('product.show', ['id' => $product->id]) }}">
                                <img src="{{ $product->images }}" class="w-100" style="height: 264px" />
                            </a>
                            <a href="#!">
                                <div class="mask">
                                    <div class="d-flex justify-content-start align-items-end h-100">
                                    <h5><span class="badge bg-primary ms-2">New</span></h5>
                                    </div>
                                </div>
                                <div class="hover-overlay">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </div>
                            </a>
                        </div>
                        <div class="card-body">
                            <a href="{{ route('product.show', ['id' => $product->id]) }}" class="text-reset">
                                <h6 class="card-title mb-3">{{ $product->name }}</h6>
                            </a>
                            <a href="#" class="text-reset">
                                <p>{{ $product->category->name }}</p>
                            </a>
                            <div>
                                <span class="text-danger"><s>$49.99</s></span>
                                <span class="mb-3 h6">${{ $product->price_base }}</span>
                            </div>
                            <div>
                                <button data-id="{{ $product->id }}" class="add-to-cart btn btn-primary shadow-0 me-1">Add to cart</button>
                                <button class="btn btn-light border icon-hover px-2 pt-2"><i class="bi bi-heart text-danger px-1"></i></button>
                            </div>
                        </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <hr />

                <!-- Pagination -->
                <nav aria-label="Page navigation example" class="d-flex justify-content-center mt-3">
                    {{ $products->links() }}
                </nav>
                <!-- Pagination -->
            </div>
        </div>
    </div>            
</section>
@endsection