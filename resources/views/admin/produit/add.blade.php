@extends('layouts.admin')
 
 @section('content')
    <div class="card">
         <div class="card-header">
              <h4>Ajouter un produit</h4>
         </div>
        <div class="card-body">
            <form action="{{url('insert-produit')}}" method="POST" enctype="multipart/form-data">@csrf
            @csrf 
                  <div class="row">
                      <div class="col-md-12">
                      <select class="form-select mb-3" name="cate_id">
                                <option value=""> Selectionner la Categorie</option>
                                    @foreach( $category as $item)
                                        <option value="{{ $item->id }}"> {{ $item->name }}   </option>
                                    @endforeach   
                      </select>
                      </div>
                      <div class="col-md-6 mb-3">
                          <label for="">Name</label>
                           <input type="text" class="form control" name="name">
                      </div>
                      <div class="col-md-6 mb-3">
                          <label for="">slug</label>
                           <input type="text" class="form control" name="slug">
                      </div>
                      <div class="col-md-12 mb-3">
                                <label for="">small_description</label>
                                <textarea type="text"  class="form-control" name="small_description" ></textarea>
                      </div>
                      <div class="col-md-12 mb-3">
                                <label for="">description</label>
                                <textarea type="text"  class="form-control" name="description" ></textarea>
                      </div>
                      <div class="col-md-6 mb-3">
                          <label for="">status</label>
                           <input type="checkbox" name="status">
                      </div>
                      <div class="col-md-6 mb-3">
                          <label for="">trending</label>
                           <input type="checkbox" name="trending" >
                      </div>
    
                      </div>
                      <div class="col-md-12 mb-3">
                                <label for=""> Prix Original</label>
                                <input type="number"  class="form-control" name="original_price" require/>
                      </div>
                      <div class="col-md-12 mb-3">
                                <label for=""> Selling prix</label>
                                <input type="number"  class="form-control" name="selling_price" require />
                      </div>
                      
                      <div class="col-md-12 mb-3">
                      <label for="">quantite</label>
                            <input type="number" name="quantite" class="form-control" require/>
                      </div>
                      <div class="col-md-12 mb-3">
                      <label for="">taxe</label>
                            <input type="number" name="taxe" class="form-control"  require/>
                      </div>
                      <div class="col-md-12 mb-3">
                      <label for="">meta_title</label>
                            <textarea name="meta_title"  rows="3" class="form-control" require ></textarea>
                      </div>
                      <div class="col-md-12 mb-3">
                      <label for="">meta keywords</label>
                            <textarea name="meta_keywords"  rows="3" class="form-control"  require></textarea>
                      </div>
                      <label for="">meta description</label>
                            <textarea name="meta_description"  rows="3" class="form-control" require ></textarea>
                      </div>
                      <div class="col-md-12 mb-3">
                      <label for="">Entrer une image du produit</label>
                           <input type="file" name="images" class="form-control" require >
                      </div>
                      <div class="col-md-12 mb-3">
                           <button  type="submit" class="btn btn-primary"  >submit</button>
                      </div>
                  </div>
            </form>
        </div>
    </div>
 @endsection