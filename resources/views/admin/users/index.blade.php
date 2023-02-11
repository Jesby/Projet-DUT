@extends('layouts.admin')

 @section('content')

 <script>
    $(document).ready(function () {
        $('#example').DataTable();
    });

    </script>
 <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h2 class="card-title">IMPRIMER</h2>
                <p class="card-title-desc">
                </p>

                <table id="datatable-buttons"
                    class="table table-striped table-bordered dt-responsive nowrap"
                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                   <thead>
                       <tr>
                           <th>Noms</th>
                           <th>Mail</th>
                           <th>Numero de Telephones</th>
                           <th>Action</th>

                       </tr>
                   </thead>
                   <tbody>
                    @foreach($user as $item)
                       <tr class="w-100 m-0">
                           <td>{{$item->name.' '.$item->noms}}</td>
                           <td>{{$item->email}}</td>
                           <td>{{$item->phone}}</td>
                            <td>
                                <a href="{{ url ('view-users/'.$item->id)}}"  class="btn btn-success">Details</a>
                                <a href="" class="btn btn-danger">Delete</a>
                            </td>
                       </tr>
                       @endforeach
                   </tbody>
               </table>
        </div>
    </div>
    {{-- <div class="card">
        <div class="card-header">
                <h4>
                    Liste des Utilisateurs
                </h4>
        </div>
        <div class="card-body">
               <table class="table">
                   <thead>
                       <tr>
                           <th>Id</th>
                            <th>Name</th>
                           <th>Email</th>
                           <th>Phone</th>
                           <th>Action</th>
                       </tr>
                   </thead>
                   <tbody>
                       @foreach($user as $item)
                       <tr>
                           <th>{{$item->id}}</th>
                           <th>{{$item->name.' '.$item->noms}}</th>
                           <th>{{$item->email}}</th>
                           <th>{{$item->phone}}</th>
                           <th>
                                <img src="{{asset('images/prod/'.$item->images)}}" class="cate-image"  alt="images here">
                            </th>
                            <th>
                                <a href="{{ url ('view-users/'.$item->id)}}"  class="btn btn-primary btn-sm">View </a>
                            </th>
                       </tr>
                       @endforeach
                   </tbody>
               </table>

        </div>
    </div> --}}


 @endsection
