
  @extends('layouts.admin')
   @section('title')
      Proccess Verbal
   @endsection
  @section('content')

   <div class="container">
     <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">

                    <h2 class="card-title">IMPRIMER</h2>
                    <p class="card-title-desc">
                        <a href="{{url('order-history')}}" class="btn btn-warning float-end"> Historiques des Pv</a>
                    </p>

                    <table id="datatable-buttons"
                        class="table table-striped table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                       <thead>
                        <tr>
                            <th>Date</th>
                            <th>Numero de suivi</th>
                            <th>Prix Total</th>
                            <th>status</th>
                            <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($orders as $item)
                        <tr>
                            <td>{{ date('d-m-y', strtotime($item->created_at))}}</td>
                            <td>{{$item->tracking_no}}</td>
                            <td>{{$item->prix_total}}</td>
                            <td>{{$item->stutus == '0' ? 'En attente' : 'complete'}}</td>
                            <td>
                                <a href="{{ url('admin/viewordre/'.$item->id)}}" class="btn btn-primary">Voir</a>
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
