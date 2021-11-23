@extends('layouts.user')
@section('content')

<section id="cart_items">
	<div class="container">
		@include('layouts.user.breadcrumb')

		<!-- <div class="register-req">
			<p>Làm ơn đăng ký hoặc đăng nhập để thanh toán giỏ hàng và xem lại lịch sử mua hàng</p>
		</div> -->
		<!--/register-req-->

		<div class="shopper-informations">
			<div class="row">				
				<div class="col-sm-12 clearfix">
					<div class="bill-to">
						<p>Điền thông tin mua hàng</p>
						<div class="form-one">
							<form method="POST" action="{{URL::to('/order-place-ajax')}}">
								{{csrf_field()}}
								<label> Tên người dùng: </label>
								<input type="text" name="shipping_name" class="shipping_name" value="{{$users->username}}" required="">
								<label> Email: </label>
								<input type="text" name="shipping_email" class="shipping_email" value="{{$users->email}}" required="">
								<label> Địa chỉ: </label>
								<input type="text" name="shipping_address" class="shipping_address" value="{{$users->address}}" required="">
								<label> Điện thoại: </label>
								<input type="text" name="shipping_phone" class="shipping_phone" value="{{$users->phone}}" required="">
								<textarea name="shipping_notes" class="shipping_notes" placeholder="Ghi chú đơn hàng của bạn" rows="5"></textarea>
							
								<div class="">
										<div class="form-group">
										<label for="exampleInputPassword1">Chọn hình thức thanh toán:</label> 
											<!-- <select name="payment_select"  class="form-control input-sm m-bot15 payment_select">
												<option value="delivery">Tiền mặt</option>
											</select> -->
											<span>
												<label><input type="radio" value="delivery" name="payment_select" checked="checked"> Tiền mặt</label>
											</span>
											<span>
												<label><input type="radio" value="online" name="payment_select"> Momo</label>
											</span>
									</div>
								</div>
								<input type="submit" value="Xác nhận đơn hàng" name="send_order" class="btn btn-primary btn-sm send_order">
							</form>
							<form>
							
							<!-- <div class="form-group">
								<label for="exampleInputPassword1">Chọn thành phố</label>
									<select name="city" id="city" class="form-control input-sm m-bot15 choose city">
								
										<option value="">--Chọn tỉnh thành phố--</option>
	
								</select>
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Chọn quận huyện</label>
									<select name="province" id="province" class="form-control input-sm m-bot15 province choose">
										<option value="">--Chọn quận huyện--</option>
										
								</select>
							</div>
								<div class="form-group">
								<label for="exampleInputPassword1">Chọn xã phường</label>
									<select name="wards" id="wards" class="form-control input-sm m-bot15 wards">
										<option value="">--Chọn xã phường--</option>   
								</select>
							</div>
							
							
							<input type="button" value="Tính phí vận chuyển" name="calculate_order" class="btn btn-primary btn-sm calculate_delivery">


							</form> -->

						</div>
						
					</div>
				</div>				
			</div>
		</div>
	</div>
</section> <!--/#cart_items-->

@endsection