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
                                <li><a href="{{ route('home') }}">Accueil</a></li>
                                <li class="active">Utilisateurs</li>
                            </ul>
                        </div>
                    </div>
                    <!-- /row -->
                </div>
                <!-- /container -->
            </div>
            <!-- /BREADCRUMB -->

<div class="container">
        <!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<div class="col-md-7">
						<!-- Billing Details -->
						<div class="billing-details">
                            <div class="input-checkbox">
                                    <form action="{{ route('utilisateurs.store') }}" method="post">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                        <input type="checkbox" id="create-account">&nbsp;&nbsp;&nbsp;&nbsp;
                                        <label class="btn btn-primary" for="create-account">
                                            <span></span>
                                            Ajouter un Utilisateur
                                        </label>
                                        <div class="caption">
                                            <p>Le nouveau utilisateur doit se connecter avec son <b>E-mail</b> et un mot de passe <b>1234567890</b> par defaut</p>
                                            <input required class="input" type="email" name="email" placeholder="Entrer un adresse mail"><br><br>
                                            <button type="submit" class="btn btn-success">Ajouter</button>

                                        </div>
                                        </div>
                                    </form>
                            </div>

						</div>
						<!-- /Billing Details -->
					</div>


				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Nom </th>
                <th>Prénom</th>
                <th>Nom d'Utilisateur</th>
                <th>Email</th>
                <th><th>Actions</th></th>
              </tr>
        </thead>
        <tbody>
            @foreach ($utilisateurs as $utilisateur)

            <tr>
            <td>{{ $loop->index+1 }} </td>
            <td>{{ $utilisateur['first_name'] }}</td>
            <td>{{ $utilisateur['last_name'] }}</td>
            <td>{{ $utilisateur['user_name'] }}</td>
            <td>{{ $utilisateur['email'] }}</td>
            <td><td><a href="{{ route('utilisateurs.edit',compact('utilisateur')) }}" class="btn btn-primary active col-md-10" role="button" data-bs-toggle="button" aria-pressed="true">Modifier </a> </td><td><a href="{{ route('utilisateurs.destroy',compact('utilisateur')) }}" class="btn btn-danger active col-md-8" role="button" data-bs-toggle="button" aria-pressed="true">Supprimer</a></td></td>
            </tr>



        @endforeach

        </tbody>
    </table>



  </div>
  <br><br>

@endsection
