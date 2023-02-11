@extends('layouts.admin')

 @section('content')
 <div class="container">
    <div class="row">
       <div class="col-md-12">
               <div class="card">
                       <div class="card-header">
                               <h4>
                                   Details de la categorie
                                   <a href="{{url('categories')}}" class="btn btn-primary float-end btn-sm"> Retour </a>
                               </h4>
                       </div>
                       <div class="card-body">
                          <div class="row">
                            <div class="col-md-4">
                            <div class="p-2 border">
                                       <label for="">Role </label>
                                   </div>
                               </div>
                               <div class="col-md-4">
                                   <div class="p-2 border">
                                       <label for="">Noms </label>

                                   </div>
                                   </div>

                                   <div class="col-md-4">
                                   <div class="p-2 border">
                                       <label for="">Prenoms </label>

                                   </div>
                                   </div>

                                   <div class="col-md-4">
                                   <div class="p-2 border">
                                       <label for=""> Adrresse 1</label>

                                   </div>
                                   </div>

                                   <div class="col-md-4">
                                   <div class="p-2 border">
                                       <label for="">Adrresse 2 </label>

                                   </div>
                                   </div>

                                   <div class="col-md-4">
                                   <div class="p-2 border">
                                       <label for="">ville </label>

                                   </div>
                                   </div>

                                   <div class="col-md-4">
                                   <div class="p-2 border">
                                       <label for="">Pays </label>

                                   </div>
                                   </div>

                                   <div class="col-md-4">
                                   <div class="p-2 border">
                                       <label for="">state </label>

                                   </div>
                                   </div>

                                   <div class="col-md-4">
                                   <div class="p-2 border">
                                       <label for="">Code Pin </label>

                                   </div>
                                   </div>
                           </div>
                          </div>
                       </div>
               </div>
       </div>
    </div>
  </div>
 @endsection
