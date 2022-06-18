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
							<li class="active">Utilisateurs</li>
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
                <h4 >La Modification de mon Profile</h4>
				<div class="row">

					<div class="">
						<!-- Billing Details -->
						<div class="billing-details col-md-12">
							<div class="section-title">
							</div>
                            <form action="" method="post">

                            <div class="form-group col-md-6">
                                <label for="nom">Nom</label>
                                <input type="input" class="form-control" id="nom" placeholder="Entrer votre nom">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="prenom">Prénom</label>
                                <input type="input" class="form-control" id="prenom" placeholder="Votre prenom">
                            </div>

                            <div class="form-group col-md-12">
                                <label for="email">E-mail</label>
                                <input type="email" class="form-control" id="email" placeholder="E-mail ">
                            </div>


							<div class="form-group col-md-6">
                                <label for="password">mot de Passe</label>
								<input class="form-control form-control" type="password" name="password" placeholder="Mot de passe">
							</div>

							<div class="form-group col-md-6">
                                <label for="password_comfirm">Comfiration mot de passe</label>
								<input class="form-control" type="password" name="password_comfirm" placeholder="Comfirmation mot de passe" >
							</div>
                            <div class="form-group col-md-12">
                                <label for="image">Image de Profile</label>
								<input class="form-control" type="file" name="image" placeholder="Image">
							</div>


                            <div class="row form-group col-md-12">
                                <div class="col-md-2">
                                    <button class="btn-success btn-lg col-md-12 " type="submit">Modifier</button>
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
