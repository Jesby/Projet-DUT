@extends('layouts.admin')
 
 @section('content')
    <div class="card">
         <div class="card-header">
              <h4>Ajouter un produit</h4>
         </div>
        <div class="card-body">
            <form action="{{url('update-produit/'.$produits->id)}}" method="POSTT" enctype="multipart/form-data">@csrf
            @csrf 
            @method('PUT')
                  <div class="row">
                      <div class="col-md-12">
                      <select class="form-select mb-3">
                        <option value=""> {{ $produits->category->name}}</option>
                      </select>
                      </div>
                      <div class="col-md-6 mb-3">
                          <label for="">Name</label>
                           <input type="text" class="form control" value="{{ $produits->name}}" name="name">
                      </div>
                      <div class="col-md-6 mb-3">
                          <label for="">slug</label>
                           <input type="text" class="form control" value="{{ $produits->slug}}" name="slug">
                      </div>
                      <div class="col-md-12 mb-3">
                                <label for="">small_description</label>
                                <textarea type="text"  class="form-control" value="{{ $produits->small_description}}" name="small_description" ></textarea>
                      </div>
                      <div class="col-md-12 mb-3">
                                <label for="">description</label>
                                <textarea type="text"  class="form-control"  value="{{ $produits->description}}" name="description" ></textarea>
                      </div>
                      <div class="col-md-6 mb-3">
                          <label for="">status</label>
                           <input type="checkbox"  {{ $produits->status ? 'checked':''}}" name="status">
                      </div>
                      <div class="col-md-6 mb-3">
                          <label for="">trending</label>
                           <input type="checkbox" {{ $produits->trending== "1" ? 'checked':'' }} name="trending" >
                      </div>
    
                      </div>
                      <div class="col-md-12 mb-3">
                                <label for=""> Prix Original</label>
                                <input type="number"  class="form-control" value="{{ $produits->original_price}}" name="original_price" />
                      </div>
                      <div class="col-md-12 mb-3">
                                <label for=""> Selling prix</label>
                                <input type="number"  class="form-control"  value="{{ $produits->selling_price}}" name="selling_price" />
                      </div>
                      
                      <div class="col-md-12 mb-3">
                      <label for="">quantite</label>
                            <input type="number" name="quantite" value="{{ $produits->quantite}}" class="form-control" />
                      </div>
                      <div class="col-md-12 mb-3">
                      <label for="">taxe</label>
                            <input type="number" name="taxe" value="{{ $produits->taxe}}" class="form-control" />
                      </div>
                      <div class="col-md-12 mb-3">
                      <label for="">meta_title</label>
                            <textarea name="meta_title"  value="{{ $produits->meta_title}}" rows="3" class="form-control" ></textarea>
                      </div>
                      <div class="col-md-12 mb-3">
                      <label for="">meta keywords</label>
                            <textarea name="meta_keywords" value="{{ $produits->meta_keywords}}" rows="3" class="form-control" ></textarea>
                      </div>
                      <label for="">meta description</label>
                            <textarea name="meta_description"  value="{{ $produits->meta_description}}" rows="3" class="form-control" ></textarea>
                      </div>
                      @if($produits->images)
                           <img src="{{asset('images/prod/'.$produits->images) }}" alt="">
                      @endif  
                      <div class="col-md-12 mb-3">
                      <label for="">Entrer une image du produit</label> 
                      <input type="file" name="images" class="form-control " >  
                      </div>
                      <div class="col-md-12 mb-3">
                           <button  type="submit" class="btn btn-primary"  >update</button>
                      </div>
                  </div>
            </form>
        </div>
    </div>
 @endsection