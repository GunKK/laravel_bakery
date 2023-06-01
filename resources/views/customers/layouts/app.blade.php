<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/base.css') }}" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
    @include('customers.layouts.navbar')
  <!-- End Header -->

  <!-- Main -->
    @yield('content')
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <!-- End Footer -->
  @include('customers.layouts.footer')
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('assets/vendor/jquery/jquery-3.6.4.min.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/customer.js') }}"></script>
  <script src="{{ asset('assets/js/activeNav.js') }}"></script>

  @if ($errors->any())
    <script>
      toastr.error('{{ $errors->first() }}');
    </script>
  @endif

  @if (Session::has('error'))
    <script>
      toastr.error("{{ Session::get('error') }}");
    </script>
  @endif

  @if (Session::has('success'))
    <script>
      toastr.success("{{ Session::get('success') }}");
    </script>
  @endif
  
    <script>
      $(document).ready(function() {
        $(".add-to-cart").click(function(e){
          e.preventDefault();
          
          $.ajax({
              url: '{{ route("cart.add") }}',
              method: "POST",
              data: {
                _token: '{{ csrf_token() }}', 
                id: $(this).attr("data-id")
              },
              success: function (response) {
                toastr.success(response.message);;
                $('#header-cart').html(response.header_cart);
              },
              error: function (message) {
                var errors = message.responseJSON;
                console.log(errors);
              }
          });
        });

        // $(".update-cart").click(function (e) {
          $(document).on('click', '.update-cart', function(e) {
          e.preventDefault();
          $.ajax({
            url: '{{ route("cart.update") }}',
            method: "POST",
            data: {
              _token: '{{ csrf_token() }}', 
              id: $(this).attr("data-id"), 
              action: $(this).attr("data-action")
              },
              success: function (response) {
                toastr.success(response.message);;
                $('#header-cart').html(response.header_cart);
                $('#shopping-cart').html(response.shopping_cart);
              }, 
              error: function (message) {
                var errors = message.responseJSON;
                console.log(errors);
              }
          });
        });

        // $(".remove-from-cart").click(function (e) {
          $(document).on('click', '.remove-from-cart', function(e) {
          e.preventDefault();
          console.log($(this));
          if(confirm("Bạn có chắc chắn muốn xóa sản phẩm này ?")) {
            $.ajax({
              url: '{{ route("cart.remove") }}',
              method: "POST",
              data: {
                _token: '{{ csrf_token() }}', 
                id: $(this).attr("data-id")
              },
              success: function (response) {
                toastr.success(response.message);;
                $('#header-cart').html(response.header_cart);
                $('#shopping-cart').html(response.shopping_cart);
              },
              error: function (message) {
                var errors = message.responseJSON;
                console.log(errors);
              }
          }
          );
          }
        });
      });
    </script>
</body>

</html>