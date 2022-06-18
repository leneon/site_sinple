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
                                <li class="active">Clients</li>
                            </ul>
                        </div>
                    </div>
                    <!-- /row -->
                </div>
                <!-- /container -->
            </div>
            <!-- /BREADCRUMB -->

<div class="container">
    <p><a href="{{ route('client.create') }}" class="btn btn-success active" role="button" data-bs-toggle="button" aria-pressed="true">Ajouter un nouveau client</a></p><br>

    <table class="table">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Service ID</th>
                <th>Type de Service</th>
                <th>Niveau de Service</th>
                <th>VLAN</th>
                <th>Routeur</th>
                <th>Site</th>
                <th><th>Actions</th></th>
              </tr>
        </thead>
        <tbody>
            @foreach ($clients as $client)

            <tr>
            <td>{{ $loop->index+1 }} </td>
            <td>{{ $client['service_id'] }}</td>
            <td>{{ $client['type_service'] }}</td>
            <td><a href="{{ route('client.show',['client'=>$client]) }}"  class="btn btn-secondary active col-md-8" role="button"  data-bs-toggle="button" aria-pressed="true">{{ $client['niveau_service'] }} </a></td>
            <td>{{ $client['vlan'] }}</td>
            <td>{{ $client['routeur'] }}</td>
            <td>{{ $client['site'] }}</td>
            <td><td><a href="{{ route('client.edit',compact('client')) }}" class="btn btn-primary active col-md-10" role="button" data-bs-toggle="button" aria-pressed="true">Modifier </a> </td><td><a href="{{ route('client.destroy',compact('client')) }}" class="btn btn-danger active col-md-8" role="button" data-bs-toggle="button" aria-pressed="true">Supprimer</a></td></td>
            </tr>



        @endforeach

        </tbody>
    </table>



  </div>
  <br><br>

@endsection
