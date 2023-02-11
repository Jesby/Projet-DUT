@extends('layouts.admin')
 
 @section('content')
   <div class="container">
     <div class="row">
        <div class="col-md-12">
                <div class="card">
                        <div class="card-header">
                                <h4>
                                    Liste en details des Utilisateurs
                                    <a href="{{url('users')}}" class="btn btn-primary float-end btn-sm"> Retour </a>
                                </h4>
                        </div>
                        <div class="card-body">
                           <div class="row">
                             <div class="col-md-4">
                             <div class="p-2 border">
                                        <label for="">Role </label>
                                            {{$user->role_as == '0' ? 'Utilisateur' : 'Administrateur'}}
                                    </div>
                                </div>  
                                <div class="col-md-4">
                                    <div class="p-2 border">
                                        <label for="">Noms </label>
                                            {{$user->name}}
                                    </div>
                                    </div>

                                    <div class="col-md-4">
                                    <div class="p-2 border">
                                        <label for="">Prenoms </label>
                                            {{$user->prenoms}}
                                    </div>
                                    </div>

                                    <div class="col-md-4">
                                    <div class="p-2 border">
                                        <label for=""> Adrresse 1</label>
                                            {{$user->address1}}
                                    </div>
                                    </div>

                                    <div class="col-md-4">
                                    <div class="p-2 border">
                                        <label for="">Adrresse 2 </label>
                                            {{$user->address2}}
                                    </div>
                                    </div>

                                    <div class="col-md-4">
                                    <div class="p-2 border">
                                        <label for="">ville </label>
                                            {{$user->ville}}
                                    </div>
                                    </div>

                                    <div class="col-md-4">
                                    <div class="p-2 border">
                                        <label for="">Pays </label>
                                            {{$user->pays}}
                                    </div>
                                    </div>

                                    <div class="col-md-4">
                                    <div class="p-2 border">
                                        <label for="">state </label>
                                            {{$user->state}}
                                    </div>
                                    </div>

                                    <div class="col-md-4">
                                    <div class="p-2 border">
                                        <label for="">Code Pin </label>
                                            {{$user->pincode}}
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