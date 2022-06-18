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
			<div class="container block">

				<div class="row col-md-8 " style="m">
                    <form method="POST" action="{{ route('login') }}">
                        {{ @csrf_field() }}
                        <div class="form-group">
                          <label for="exampleInputEmail1">Email</label>
                          <input type="email" class="form-control" name="email" id="email"  placeholder="Entrer votre email">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Mode de passe</label>
                          <input type="password" class="form-control" name="password" id="password" placeholder="Entrer votre mot de passe">
                        </div>
                        <div class="form-group form-check">
                          <input type="checkbox" name="remember" class="form-check-input" id="remember">
                          <label class="form-check-label" for="exampleCheck1">Garder ma connection</label>
                        </div>
                        <button type="submit" class="btn btn-success">Se Connecter</button>
                      </form>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->



@endsection
