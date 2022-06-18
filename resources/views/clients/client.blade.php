@extends('layouts.master')

@section('content')
<br><br>
<div class="container">

    <div class=" panel panel-default">
        <div class="panel-heading text-center">
            <h3>Client {{ $client['service_id'] }}</h3>
        </div>
        @if ($client['niveau_service']=="L2")

        <div class="panel-body ">Ce client Utilise un type de servie <b>{{ $client['type_service'] }}</b> qui à un niveau <b>L2</b> dont dispose un <b>{{ $client->l2[0]['service'] }}</b> qui est <b><i>{{ $client->l2[0]['value'] }}</i></b></div>

        @else
                <div class="panel-body ">Ce client Utilise un type de servie <b>{{ $client['type_service'] }}</b> qui à un niveau <b>L3</b> dont dispose un <i><b><b>Interface</b></i><br>
                    <br>
                    <div class="form-group">
                        <label class="col-md-1">IP    </label>:  {{ $client->l3[0]->ip }}  <br>
                    </div>
                    <div class="form-group">
                        <label class="col-md-1">PORT  </label>:  {{ $client->l3[0]->port }}  <br>
                    </div>
                    <div class="form-group">
                        <label class="col-md-1">QOS   </label>:  {{ $client->l3[0]->qos }}  <br>
                    </div>

                </div>
        @endif
    </div>
    <br><br><br>
    <a type="boutton" class="btn btn-primary col-md-2" href="{{ route('client.index') }}">Retour</a type="boutton"><br><br><br><br>
</div>


@endsection
