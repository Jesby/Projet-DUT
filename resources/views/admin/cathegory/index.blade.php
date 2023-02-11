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
                           <th>Id</th>
                           <th>Name</th>
                           <th>Description</th>
                           <th>Images</th>
                           <th>Action</th>
                       </tr>
                   </thead>
                   <tbody>
                       @foreach($category as $item)
                       <tr class="w-100 m-0">
                           <td>{{$item->id}}</td>
                           <td>{{$item->name}}</td>
                           <td style="width:10px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">{{$item->slug}}</td>
                           <td>
                                <img src="{{asset('images/cath/'.$item->images)}}" class="cate-image w-50 h-50  "  alt="images here">
                            </td>
                            <td>
                                <a href="{{ url('voir-prod/'.$item->id)}}"  class="btn btn-success">Voir</a>
                                <a href="{{ url('edit-prod/'.$item->id)}}"  class="btn btn-primary">Edit</a>
                                <a href="{{ url('delete-category/'.$item->id)}}" class="btn btn-danger">Delete</a>
                            </td>
                       </tr>
                       @endforeach
                   </tbody>
               </table>
        </div>
    </div>
    @endsection
