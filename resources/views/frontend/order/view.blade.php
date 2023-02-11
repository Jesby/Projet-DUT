@extends('layouts.frontend')

@section('title')
    My Orders
@endsection

@section('content')
       <div class="container py-3">
        <div class="row ">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-head  bg-primary "><h2 class="text-white mt-3 text-center"> Ordre de vue</h2>
                       <a href="{{url('my-orders')}}" class="btn btn-warning text-white float-end mb-4"> Back  </a>
                    </div>
                    <div class="card body">
                        <div class="row">
                             <h4>Details de l'acheteur </h4>
                             <hr>
                             <div class="col-md-6 ordre-details">
                                <label for=""> Noms </label>
                                <div class="border p-2"> {{$order->noms}}</div>
                                <label for="">Prenoms </label>
                                <div class="border p-2"> {{$order->prenoms}}</div>
                                <label for=""> Email </label>
                                <div class="border p-2"> {{$order->email}}</div>
                                <label for=""> Numero </label>
                                <div class="border p-2"> {{$order->phone}}</div>
                                <label for=""> Adresse  complete</label>
                                <div class="border p-2"> 
                                    {{$order->addresse1}}, <br>
                                    {{$order->addresse1}}, <br>
                                    {{$order->ville}},      <br>
                                    {{$order->residence}},   <br>
                                    {{$order->pays}},       <br>
                                    <label for=""> Zip Code </label>
                                <div class="border p-2"> {{$order->codepin}}</div>

                                </div>
                             </div>
                             <div class="col-md-6">
                             <h4>Details du Produit </h4>
                             <table class="table table-bordered">
                     <thead>
                        <tr>
                            <th>Noms</th>
                            <th>Quantite</th>
                            <th>Price</th>
                            <th>Images</th>
                        </tr>
                     </thead>
                     <tbody>
                             @foreach($order->ordersitem as $item)
                            <td>
                                  {{$item->prod->name}}
                            </td>
                            <td>
                                  {{$item->quantite}}
                            </td>
                            <td>
                                  {{$item->price}}
                            </td>
                            <td>
                                <img src="{{ asset('images/prod/'.$item->prod->images)}}"  alt="image du produit" style="width: 80px;">
                                    
                            </td>
                            
                        </tr>
                           @endforeach
                     </tbody>
   
                </table>
                <h4 class="px-2">prix total : <span class="float-end">{{$order->prix_total}} Fcfa</span></h4>
                   
                
                             </div>
                            

                        </div>
                  
                    </div>
                </div>
               
            </div>
        </div>
       </div>

@endsection