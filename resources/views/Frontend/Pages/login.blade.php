@extends('Frontend.Layouts.master')
@section('title', 'login')
@section('content')
	<div class="container">
		<div id="content">
			
			<form action="{{ url()->current() }}" method="post" class="beta-form-checkout">
				<div class="row">
					<div class="col-sm-3">
						@if ($errors->any())
							<div class="alert alert-danger" style="margin-top:12px">
								<div>
									@foreach ($errors->all() as $error)
										<span><i class="fa-solid fa-exclamation"></i> {{ $error }}</span>
									@endforeach
								</div>
							</div>
                    	@endif
						@if (session('error')) 
							<div class="row">
								<div class="alert alert-danger">
									{{ session('error') }}
								</div>
							</div>
						@endif
					</div>
					<div class="col-sm-6">
						<h4>Đăng nhập</h4>
						<div class="space20">&nbsp;</div>

						@csrf
						<div class="form-block">
							<label for="email">Email address*</label>
							<input type="email" id="email" name="email" required>
						</div>
						<div class="form-block">
							<label for="phone">Password*</label>
							<input type="password" id="phone" name="password" required>
						</div>
						<div class="form-block">
							<button type="submit" class="btn btn-primary">Đăng nhập</button>
						</div>
					</div>
					<div class="col-sm-3"></div>
				</div>
			</form>
		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection