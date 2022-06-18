@extends('layouts.master')

@section('content')

    		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<h3 class="breadcrumb-header">Service Client</h3>
						<ul class="breadcrumb-tree">
							<li><a href="#">Accueil</a></li>
							<li class="active">Nouveau Client</li>
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

					<div class="">
						<!-- Billing Details -->
						<div class="billing-details col-md-12">
							<div class="section-title">
								<h3 class="title">Création d'un nouveau client</h3>
							</div>
                            <form action="" method="post">

                            <div class="form-group col-md-6">
                                <label for="service_Id">Service Id</label>
                                <input type="input" class="form-control" id="service_Id" placeholder="Service Id">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="type_Service">Type de Service</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option value="ls">LS</option>
                                    <option value="lsi">LSI</option>
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <div class="form-group">
                                    <div class="payment-method">
                                        <div class="input-radio">
                                            <input type="radio" name="payment" id="payment-1">
                                            <label for="payment-1">
                                                <span></span>
                                                Niveau de service L2
                                            </label>
                                            <div class="caption">
                                                <div class="form-group col-md-6">
                                                    <label for="type_Service">Niveau</label>
                                                    <select class="form-control" id="exampleFormControlSelect1">
                                                        <option value="epipe">E-Pipe</option>
                                                        <option value="vpls">VPLS</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-radio">
                                            <input type="radio" name="payment" id="payment-2">
                                            <label for="payment-2">
                                                <span></span>
                                                Niveau de Service L3
                                            </label>
                                            <div class="caption">
                                                <div class="form-group col-md-6">
                                                    <input name="ip" type="input" class="form-control" id="ip" placeholder="Adresse IP">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <input type="input" class="form-control" name="port" id="port" placeholder="Port">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <input type="input" class="form-control" name="qos" id="qos" placeholder="qos">
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <br>
							<div class="form-group col-md-6">
                                <label for="vlan">VLAN</label>
								<input class="form-control" type="text" name="vlan" placeholder="VLAN">
							</div>

							<div class="form-group col-md-6">
                                <label for="routeur">Router</label>
								<input class="form-control form-control" type="text" name="routeur" placeholder="Router">
							</div>

							<div class="form-group col-md-6">
                                <label for="site">Site</label>
								<input class="form-control" type="text" name="site" placeholder="Site">
							</div>


                            <div class="row form-group col-md-12">
                                <div class="col-md-2">
                                    <button class="btn-success btn-lg col-md-12 " type="submit">Ajouter</button>
                                </div>
                                <div class="col-md-2">
                                    <button class="btn-danger btn-lg col-md-12" type="reset">Initalisé</button>
                                </div>
                            </div>

                        </form>


						</div>
						<!-- /Billing Details -->




						{{-- <!-- Order notes -->
						<div class="order-notes">
							<textarea class="input" placeholder="Order Notes"></textarea>
						</div>
						<!-- /Order notes --> --}}

					</div>

				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->



@endsection
