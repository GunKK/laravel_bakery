<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
        <a class="nav-link " href="index.html">
            <i class="bi bi-grid"></i>
            <span>Dashboard</span>
        </a>
    </li><!-- End Dashboard Nav -->

    <li class="nav-item">
        <a class="nav-link collapsed" href="#">
            <i class="bi bi-cash-coin"></i>
            <span>Doanh thu</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#section-category" data-bs-toggle="collapse" href="#">
            <i class="bi bi-book"></i><span>Danh mục</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="section-category" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
            <a href="{{ route('category.index') }}">
                <i class="bi bi-circle"></i><span>Danh sách</span>
            </a>
            </li>
            <li>
                <a href="{{ route('category.create') }}l">
                    <i class="bi bi-circle"></i><span>Thêm</span>
                </a>
            </li>
        </ul>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#section-product" data-bs-toggle="collapse" href="#">
            <i class="bi bi-cup-hot"></i><span>Sản phẩm</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="section-product" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
            <a href="{{ route('product.index') }}">
                <i class="bi bi-circle"></i><span>Danh sách</span>
            </a>
            </li>
            <li>
                <a href="{{ route('product.create') }}">
                    <i class="bi bi-circle"></i><span>Thêm</span>
                </a>
            </li>
        </ul>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#section-slide" data-bs-toggle="collapse" href="#">
            <i class="bi bi-postcard"></i><span>Banner</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="section-slide" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
            <a href="{{ route('slide.index') }}">
                <i class="bi bi-circle"></i><span>Danh sách</span>
            </a>
            </li>
            <li>
                <a href="{{ route('slide.create') }}">
                    <i class="bi bi-circle"></i><span>Thêm</span>
                </a>
            </li>
        </ul>
    </li>

</ul>

</aside>