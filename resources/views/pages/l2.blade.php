@extends('layouts.master')

@section('content')
    		<!-- BREADCRUMB -->
            <div id="breadcrumb" class="section">
                <!-- container -->
                <div class="container">
                    <!-- row -->
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="breadcrumb-header">Service l2</h3>
                            <ul class="breadcrumb-tree">
                                <li><a href="{{ route('home') }}">Accueil</a></li>
                                <li class="active">Niveau L2</li>
                            </ul>
                        </div>
                    </div>
                    <!-- /row -->
                </div>
                <!-- /container -->
            </div>
            <!-- /BREADCRUMB -->

<div class="container">

    <table class="table">

        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Service ID</th>
                <th>Type de Service</th>
                <th>Niveau de Service</th>
                <th>Service utiliser </th>
              </tr>
        </thead>
        <tbody>
            @foreach ($l2s as $l2)

            <tr>
            <td>{{ $loop->index+1 }} </td>
            <td>{{ $l2->client->service_id }}</td>
            <td>{{ $l2->client->type_service }}</td>
            <td>{{ $l2->client->niveau_service }}</td>
            <td>{!! $l2['service']."&nbsp;&nbsp;&nbsp;&nbsp; => &nbsp;&nbsp;&nbsp;&nbsp;".$l2['value']!!} </td>
            </tr>

            @endforeach
        </tbody>

    </table>



  </div>
  <br><br>

@endsection
