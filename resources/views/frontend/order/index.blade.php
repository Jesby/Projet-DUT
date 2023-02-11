@extends('layouts.frontend')

@section('title')
    My Orders
@endsection

@section('content')
       <div class="container py-3">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-head">
                      <h3> Mon Ordre
                        <!-- <a href="{{url('order-history')}}" class="btn btn-warning">Nouveau Pv</a> -->
                      </h3>  
                    </div>
                    <div class="card body">
                    <table class="table table-bordered">
                     <thead>
                        <tr>
                            <th>Numero de Suivi</th>
                            <th>Prix Total</th>
                            <th>status</th>
                            <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($orders as $item)
                        <tr>
                            <td>{{$item->tracking_no}}</td>
                            <td>{{$item->prix_total}}</td>
                            <td>{{$item->stutus == '0' ? 'Payer' : 'En attente'}}</td>
                            <td>
                                <a href="{{ url('viewordre/'.$item->id)}}" class="btn btn-primary">Voir</a>
                            </td>
                        </tr>
                        @endforeach
                     </tbody>
                </table>
                    </div>
                </div>
                
            </div>
        </div>
       </div>

@endsection