@extends('layouts.frontend')

@section('title',$produits->name)

     @section('content')
                         </head>
                             <body>
                                <div class="product-big-title-area">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="product-bit-title text-center">
                                                    <h2>Consulter</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <div class="single-product-area">
                                <div class="zigzag-bottom"></div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="single-sidebar">
                                                <h2 class="sidebar-title">Recherche Produit</h2>
                                                <form action="">
                                                    <input type="text" placeholder="Search products...">
                                                    <input type="submit" value="Search">
                                                </form>
                                            </div>

                                            <div class="single-sidebar">
                                                <h2 class="sidebar-title">Produits</h2>
                                                <div class="thubmnail-recent">
                                                    <img src="img/product-thumb-1.jpg" class="recent-thumb" alt="">
                                                    <h2><a href="">Sony Smart TV - 2015</a></h2>
                                                    <div class="product-sidebar-price">
                                                        <ins>$700.00</ins> <del>$100.00</del>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-8">
                                            <div class="product-content-right">
                                                <div class="product-breadcroumb">
                                                    <a href="#">Collections</a>
                                                    <a href="#">{{$produits->category->name}}</a>
                                                    <li class="breadcrumb-item active" aria-current="page">{{$produits->name}}</li>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="product-images">
                                                            <div class="product-main-img">
                                                                <img class="card-img-top" src="{{asset('images/prod/'.$produits->images)}}"  alt="Card image cap">
                                                            </div>

                                                            <div class="product-gallery">
                                                                <img src="img/product-thumb-1.jpg" alt="">

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <div class="product-inner">
                                                            <h2 class="product-name">{{$produits->name}}</h2>
                                                            <div class="product-inner-price">
                                                                <ins>{{$produits->selling_price}}Fcfa </ins> <del><s> {{$produits->original_price}}</s>Fcfa</del>
                                                            </div>

                                                            <main role="main">
                                                                <div class="container-fluid">
                                                                    <div class="row justify-content-between product_data">

                                                                        <div class="col-7">
                                                                             @if($produits->trending == '1')
                                                                                {{-- <p>
                                                                                    <label for="" class="btn btn-cart my-2 btn-block bg-danger text-white float-end">Tendance</label>
                                                                                </p> --}}
                                                                             @endif
                                                                            <h1 class="jumbotron-heading"></h1>
                                                                                     <div>
                                                                                        <h6>
                                                                                            <span class=" text-success" style="margin-left:none;"> </span>
                                                                                            <span class=" text-danger" style="margin-left:200px;"> </span>
                                                                                        </h6>
                                                                                     </div>


                                                                            <div class="mt-4">
                                                                                <p class="lead text-muted">{{$produits->description}}</p>
                                                                            </div>
                                                                            <hr>
                                                                               <div class="mb-2">
                                                                                    @if($produits->quantite > 0)
                                                                                        <div class="badge bg-success">
                                                                                                En stock
                                                                                        </div>
                                                                                         @else
                                                                                        <div class="badge bg-danger">
                                                                                             Pas en stock
                                                                                        </div>
                                                                                 @endif
                                                                                </div>
                                                                                     <div class="row mt-3">
                                                                                        <div class="col-md-3">
                                                                                            <input type="hidden" class="prod_id" value="{{$produits->id}}" >
                                                                                              <label for="Quantity">Quantite</label>
                                                                                                <div class="w-100 align-items-center input-group text-center mb-1 row justify-content-center  container-fluid" >
                                                                                                    <div class="col-md-2 container-fluid">
                                                                                                        <button class="btn success bg-success decrement-btn">-</button>
                                                                                                    </div>
                                                                                                    <div class="col-md-8 container-fluid">
                                                                                                        <input type="text" name="quantite" class="form-control text-center mb-3 qtyinput w-100" value="1">
                                                                                                    </div>
                                                                                                    <div class="col-md-2 container-fluid">
                                                                                                        <button class="btn info bg-info mb-3 increment-btn">+</button>
                                                                                                    </div>


                                                                                                             @if($produits->quantite > 0)
                                                                                                                <div class=" badge bg-success" style="">
                                                                                                                     <!-- En stock -->
                                                                                                                 <a href="#" class="btn btn-cart btn-block bg-success text-white addToCartBtn"><i class="fas fa-shopping-cart"></i>Ajouter au Panier </a>
                                                                                                                </div>
                                                                                                             @endif
                                                                                                        </div>
                                                                                                </div>
                                                                                            <br>

                                                                                             <!-- <a href="#" class="btn btn-cart my-2 btn-block addtoliste bg-primary text-white"><i class="fas fa-shopping-cart"></i> Ajouter a la liste</a> -->
                                                                                    </p>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                         <div class="mt-4">
                                                                             <div class="container-fluid col-md-12  text-center">
                                                                                <div class="card-body">
                                                                                      {{$produits->meta_description}}
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                </div>




                                                               </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </main>

                                                            <div class="product-inner-category">
                                                                <p>Category: <a href="">Summer</a>. Tags: <a href="">awesome</a>, <a href="">best</a>, <a href="">sale</a>, <a href="">shoes</a>. </p>
                                                            </div>

                                                            <div role="tabpanel">
                                                                <ul class="product-tab" role="tablist">
                                                                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>
                                                                    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Reviews</a></li>
                                                                </ul>
                                                                <div class="tab-content">
                                                                    <div role="tabpanel" class="tab-pane fade in active" id="home">
                                                                        <h2> Description du produit</h2>
                                                                        <p></p>

                                                                        <p></p>
                                                                    </div>
                                                                    <div role="tabpanel" class="tab-pane fade" id="profile">
                                                                        <h2>Reviews</h2>
                                                                        <div class="submit-review">
                                                                            <p><label for="name">Name</label> <input name="name" type="text"></p>
                                                                            <p><label for="email">Email</label> <input name="email" type="email"></p>
                                                                            <div class="rating-chooser">
                                                                                <p>Your rating</p>

                                                                                <div class="rating-wrap-post">
                                                                                    <i class="fa fa-star"></i>
                                                                                    <i class="fa fa-star"></i>
                                                                                    <i class="fa fa-star"></i>
                                                                                    <i class="fa fa-star"></i>
                                                                                    <i class="fa fa-star"></i>
                                                                                </div>
                                                                            </div>
                                                                            <p><label for="review">Your review</label> <textarea name="review" id="" cols="30" rows="10"></textarea></p>
                                                                            <p><input type="submit" value="Submit"></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

@endsection

@section('scripts')
    <script>
            $('.featured-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            // dots:false,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:7
                }
            }
        })
    </script>
  @endsection

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
