@extends('layouts.frontend')

@section('title')
    Ma Listes
@endsection

@section('content')
 <div class="py-3 mb-4 shadow-sm bg-warning border-top">
     <div class="container">
         <h6 class="mb-0">
             <a href="{{url('/')}}">Home </a>/
             <a href="{{url('wishlist')}}">Cart </a>/
         </h6>
     </div>

 </div>


 <div class="container my-3">
     <div class="card shadow ">
        <div class="card-body">
        @if($liste->count() > 0)
             
        <div class="card-body">
             @foreach($liste as $item)
             <div class="row product_data">
                <div class="row">
                 <div class="col-md-2">
                     <img src="{{asset('images/prod/'.$item->produits->images)}}" width="50px"  height="50px" alt="image ici">
                 </div>

                 <div class="col-md-2">
                     <h5>
                          {{$item->produits->name}}
                     </h5>
                 </div>
                 <div class="col-md-2">
                     <h6>
                          {{$item->produits->selling_price}} Fcfa
                     </h6>
                 </div>
                 <div class="col-md-2">
                     <h6>
                     <input type="hidden" class="prod_id" value="{{$item->prod_id}}" >
                        @if($item->produits->quantite >= $item->prod_qty)
                         
                            <h6 class=""> present dans le stock</h6>
                           @else
                           <h5>
                               Out of Stock
                           </h5>
                        @endif  
                     </h6>
                 </div>
                    <div class="col-md-4">
                         <button class="btn btn-success addToCartBtn ">
                             add pannier
                            <i class="fa fa-shopping-cart"></i>
                            </button>
                            <button class="btn btn-danger">
                                supprimer
                            <i class="fa fa-trash"></i>
                            </button>
                        </div>  
                        
                    
                 
                    </div>     
            @endforeach
            </div>
        @else
          <h4>Pas de produits dans votre liste</h4>
        @endif
        </div>
     </div>
 </div>

@endsection