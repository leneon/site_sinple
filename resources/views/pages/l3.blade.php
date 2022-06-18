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
                                <li class="active">Niveaux L3</li>
                            </ul>
                        </div>
                    </div>
                    <!-- /row -->

                </div>
                <!-- /container -->
            </div>
            <!-- /BREADCRUMB -->

<div class="container">
<h3 class="breadcrumb-header">Liste des Interfaces</h3><br>
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Service ID</th>
                <th>Type de Service</th>
                <th>Niveau de Service</th>
                <th>IP</th>
                <th>PORT</th>
                <th>QOS</th>
              </tr>
        </thead>
        <tbody>
            @foreach ($l3s as $l3)

            <tr>
            <td>{{ $loop->index+1 }} </td>
            <td>{{ $l3->client->service_id }}</td>
            <td>{{ $l3->client->type_service }}</td>
            <td>{{ $l3->client->niveau_service }}</td>
            <td>{{ $l3['ip'] }}</td>
            <td>{{ $l3['port'] }}</td>
            <td>{{ $l3['qos'] }}</td>
            </tr>



        @endforeach

        </tbody>
    </table>



  </div>
  <br><br><br>

@endsection
