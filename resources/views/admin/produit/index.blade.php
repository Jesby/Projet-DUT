@extends('layouts.admin')

 @section('content')

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
                           <th>Categorie</th>
                           <th>Quantites</th>
                           <th>Prix de Vente</th>
                           <th>Images</th>
                           <th>Action</th>

                       </tr>
                   </thead>
                   <tbody>
                    @foreach($produit as $item)
                       <tr class="w-100 m-0">
                        <td>{{$item->name}}</td>
                           <td>{{$item->category->name}}</td>
                            @if ($item->count() < 5)
                            <td class="text-success">{{$item->quantite}} </td>
                            @else
                                  @if ($item->count() < 5)
                                       <td class="text-danger">{{$item->quantite}} </td>
                                   @endif
                            @endif
                            <td>{{$item->quantite}}</td>
                           <td>{{$item->selling_price}} Fcfa</td>


                           <td>
                                <img src="{{asset('images/prod/'.$item->images)}}" class="cate-image w-50 h-50  "  alt="images here">
                            </td>
                            <td>
                                <a href=""  class="btn btn-success">Voir</a>
                                <a href="{{ url ('edit-produit/'.$item->id)}}"  class="btn btn-primary">Edit</a>
                                <a href="{{ url ('delete-produit/'.$item->id)}}" class="btn btn-danger">Delete</a>
                            </td>
                       </tr>
                       @endforeach
                   </tbody>
               </table>
        </div>
    </div>
 @endsection
