@extends('Frontend.Layouts.master')
@section('title', 'signup')
@section('content')
<div class="container">
	<div id="content">
		
		<form action="{{ url()->current() }}" method="post" class="beta-form-checkout">
			<div class="row">
				<div class="col-sm-3"></div>
				<div class="col-sm-6">
					<h4>Đăng kí</h4>
					<div class="space20">&nbsp;</div>

					@csrf
					<div class="form-block">
						<label for="email">Địa chỉ email</label>
						<input type="email" id="email" name="email" required>
					</div>

					<div class="form-block">
						<label for="your_last_name">Tên:</label>
						<input type="text" id="your_last_name" name="name" required>
					</div>

					<div class="form-block">
						<label for="adress">Địa chỉ:</label>
						<input type="text" id="adress" value="Street Address" name="address">
					</div>


					<div class="form-block">
						<label for="phone">Số điện thoại:</label>
						<input type="text" id="phone" name="phone" required>
					</div>
					<div class="form-block">
						<label for="phone">Mật khẩu:</label>
						<input type="password" id="phone" name="password" required>
					</div>
					<div class="form-block">
						<label for="phone">Nhập lại mật khẩu:</label>
						<input type="password" id="phone" name="rePassword" required>
					</div>
					<div class="form-block text-center">
						<button type="submit" class="btn btn-primary btn-lg">Đăng kí</button>
					</div>
				</div>
				<div class="col-sm-3"></div>
			</div>
		</form>
	</div> <!-- #content -->
</div> <!-- .container -->
@endsection