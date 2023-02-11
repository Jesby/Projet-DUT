@extends('layouts.admin')
 
 @section('content')
    <div class="card">
         <div class="card-header">
              <h4>Ajouter une categorie</h4>
         </div>
        <div class="card-body">
            <form action="{{url('insert-category')}}" method="POST" enctype="multipart/form-data">@csrf
            @csrf 
                  <div class="row">
                      <div class="col-md-6 mb-3">
                          <label for="">Name</label>
                           <input type="text" class="form control" name="name" require>
                      </div>
                      <div class="col-md-6 mb-3" require>
                          <label for="">slug</label>
                           <input type="text" class="form control" name="slug" require>
                      </div>
                            <div class="col-md-12 mb-3">
                            <label for="">Description</label>
                            <textarea name="description"  rows="3" class="form-control" require ></textarea>
                      </div>
                      <div class="col-md-6 mb-3">
                          <label for="">status</label>
                           <input type="checkbox" name="status" require>
                      </div>
                      <div class="col-md-6 mb-3">
                          <label for="">popular</label>
                           <input type="checkbox" name="popular" require>
                      </div>
    
                      </div>
                            <div class="col-md-12 mb-3">
                            <label for="">meta title</label>
                            <textarea type="text"  class="form-control" name="meta_title" require></textarea>
                      </div>
                      <div class="col-md-12 mb-3">
                      <label for="">meta keywords</label>
                            <textarea name="meta_keywords"  rows="3" class="form-control" require ></textarea>
                      </div>
                      <div class="col-md-12 mb-3">
                      <label for="">meta description</label>
                            <textarea name="meta_descrip"  rows="3" class="form-control" require></textarea>
                      </div>
                      <div class="col-md-12 mb-3">
                      <label for="">Entrer une image de la categorie</label>
                           <input type="file" name="images" class="form-control" require>
                      </div>
                      <div class="col-md-12 mb-3">
                           <button  type="submit" class="btn btn-primary" >submit</button>
                      </div>
                  </div>
            </form>
        </div>
    </div>

 @endsection