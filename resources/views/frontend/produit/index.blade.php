@extends('layouts.frontend')

@section('title')
{{$category->name}}
@endsection

@section('content')
        <!-- Ici on affiche les produits par Categories -->
<div class="py container-fluid mt-3">
        <div class="row">
           <h2 > {{$category->name}} </h2>
                @foreach($produits as $prods)
                  <div class="col-md-3 mb-3" >         
                    <div class="card">
                      <a href="{{url('view-categorie/'.$prods->slug.'/'.$prods->slug)}}">
                          <img src="{{asset('images/prod/'.$prods->images)}}" alt="Denim Jeans" width="200px" style="width:50%">
                            <h5>{{$prods->name}}</h5>
                                 <div>
                                    <p>
                                          {{$prods->description}}  
                                    </p>
                                 </div>
                                  <div>
                                    <span class="float-start text-success" style="margin-left:10px;"> {{$prods->selling_price}}Fcfa </span>
                                     <span class="float-end text-danger" style="margin-right:10px;"> <s> {{$prods->original_price}}</s>Fcfa</span>
                                  </div>                                                  
                         </a>      
                       </div>                                  
                    </div>  
                @endforeach                     
           </div>
      </div>
@endsection