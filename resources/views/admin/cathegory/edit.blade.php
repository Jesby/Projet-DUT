@extends('layouts.admin')
 
 @section('content')
    <div class="card">
         <div class="card-header">
              <h4>Edit/update Categorie</h4>
         </div>
        <div class="card-body">
            <form action="{{url('update-category/'.$category->id)}}" method="POST" enctype="multipart/form-data">@csrf
            @method('PUT')
                  <div class="row">
                      <div class="col-md-6 mb-3">
                          <label for="">Name</label>
                           <input type="text" value="{{ $category->name }}" class="form control" name="name">
                      </div>
                      <div class="col-md-6 mb-3">
                          <label for="">slug</label>
                           <input type="text" value="{{ $category->slug }}" class="form control" name="slug">
                      </div>
                            <div class="col-md-12 mb-3">
                            <label for="">Description</label>
                            <textarea name="description" rows="3" class="form-control" >{{ $category->description }}</textarea>
                      </div>
                      <div class="col-md-6 mb-3">
                          <label for="">status</label>
                           <input type="checkbox"  {{ $category->status == "1" ? 'checked':''}} name="status" >
                      </div>
                      <div class="col-md-6 mb-3">
                          <label for="">popular</label>
                           <input type="checkbox" {{ $category->status == "1" ? 'checked':''}}  name="popular" >
                      </div>
    
                      </div>
                            <div class="col-md-12 mb-3">
                            <label for="">meta title</label>
                            <textarea type="text"  class="form-control" name="meta_title" >{{ $category->meta_title }}</textarea>
                      </div>
                      <div class="col-md-12 mb-3">
                      <label for="">meta keywords</label>
                            <textarea name="meta_keywords"  rows="3" class="form-control" >{{ $category->meta_keywords }}</textarea>
                      </div>
                      <div class="col-md-12 mb-3">
                      <label for="">meta description</label>
                            <textarea name="meta_descrip"  rows="3" class="form-control" >{{ $category->meta_descrip }}</textarea>
                      </div>
                        @if($category->images)
                            <img src="{{asset('images/cath/' .$category->images) }}" alt="">
                        @endif  
                      <div class="col-md-12 mb-3">
                      <label for="">Entrer une image de la categorie</label>
                           <input type="file" name="images" class="form-control " value="{{ $category->images }}" >
                      </div>
                      <div class="col-md-12 mb-3">
                           <button  type="submit" class="btn btn-primary"  >submit</button>
                      </div>
                  </div>
            </form>
        </div>
    </div>

 @endsection