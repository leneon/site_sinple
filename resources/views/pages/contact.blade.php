@extends('layouts.master')

@section('content')

		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<h3 class="breadcrumb-header">Contactez-Nous</h3>
						<ul class="breadcrumb-tree">
							<li><a href="{{ route('accueil') }}">Home</a></li>
							<li class="active">Contact</li>
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<div class="col-md-7">
						<!-- Billing Details -->
						<div class="billing-details">
							<div class="section-title">
								<h3 class="title">Envoyez-Nous un Message</h3>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="first-name" placeholder="First Name">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="last-name" placeholder="Last Name">
							</div>
							<div class="form-group">
								<input class="input" type="email" name="email" placeholder="Email">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="address" placeholder="Address">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="city" placeholder="City">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="country" placeholder="Country">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="zip-code" placeholder="ZIP Code">
							</div>
							<div class="form-group">
								<input class="input" type="tel" name="tel" placeholder="Telephone">
							</div>

						</div>
						<!-- /Billing Details -->
						<!-- Order notes -->
						<div class="order-notes">
							<textarea class="input" placeholder="Order Notes"></textarea>
						</div>
						<!-- /Order notes -->
					</div>

					<!-- Order Details -->
					<div class="col-md-5 order-details">
						<div class="section-title text-center">
							<h3 class="title">Infos</h3>
						</div>
						<div class="order-summary">
                            <div class="container">
                                <ul class="header-links pull-left">
                                    <li><a href="#"><i class="fa fa-phone"></i> +228 90 69 47 93</a></li><br>
                                    <li><a href="#"><i class="fa fa-envelope-o"></i> sherinashoping@email.com</a></li><br>
                                    <li><a href="#"><i class="fa fa-map-marker"></i> Totsi</a></li><br>
                                </ul>
                                <ul class="header-links pull-right">
                                    <li><a href="#"><i class="fa fa-dollar"></i> fCFA</a></li>
                                    <li><a href="#"><i class="fa fa-user-o"></i> Mon compte</a></li>
                                </ul>
                            </div>
						</div>

						<a href="#" class="primary-btn order-submit">Place order</a>
					</div>
					<!-- /Order Details -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

@endsection
