@extends('templates.login.base')


@section('head')

	@include('templates.admin.css.sweetalert')

@endsection()

@section('content')

	{!! Form::open(['route' => 'post_login', 'method' => 'POST','name'=>'form','id'=>'form', 'class' => 'form-horizontal']) !!}
	
		<div class="row">

			<div class="col-md-4 col-md-offset-4">

				<div class="panel panel-default">

					<div class="panel-heading"><h2>Login Form</h2></div>

					<div class="panel-body">

							<div class="form-group">

		                        <div class="col-xs-12">

									<input type="text" name="email" id="email" class="form-control" placeholder="Email Username">

		                        </div>

							</div>

							<div class="form-group">

		                        <div class="col-xs-12">

									<input type="password" name="password" id="password " class="form-control" id="exampleInputPassword1" placeholder="Password">

		                        </div>

							</div>

							<div class="form-group">

								<div class="col-xs-12">

									<a href="extras-forgotpassword.html" class="pull-left">Forgot password?</a>

								</div>

							</div>

							<div class="panel-footer">

								<div class="clearfix">

								

									<input type="submit" id="submit" name="" class="btn btn-primary pull-left" value="Entrar">

									@include('elements.html.loader',
									[
										'loader_id'=>'loader'
									])

								</div>

							</div>

					</div>

				</div>

			</div>

		</div>

 {!! Form::Close() !!}

@endsection()

@section('validate')

	@include('validations.login')

@endsection()

@section('footer')


	@include('templates.admin.js.sweetalert')

	@include('templates.admin.js.resource')

	@include('templates.admin.js.jquery_validate')

	@include('templates.admin.js.form_validate')

@endsection()
