@extends('layouts.frontend')

@section('title')
 Category
@endsection

@section('content')

     <!-- End header area -->
    <div class="site-branding-area p-0" style="padding:0px;">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="single-sidebar" style="margin-bottom: 0%;">
                        <h2 class="sidebar-title" style="margin-bottom: 0px;">Recherche Produit</h2>
                        <form action="">
                            <input type="text" placeholder="Search products...">
                            <input type="submit" value="Search">
                        </form>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="shopping-item">
                        <a href="cart.html">Cart - <span class="cart-amunt">$100</span> <i class="fa fa-shopping-cart"></i> <span class="product-count">5</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End site branding area -->

    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

            </div>
        </div>
    </div> <!-- End mainmenu area -->

    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Categorie</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="single-product-area p-0">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                @foreach( $category as $cate)
                <div class="col-md-3 col-sm-6">
                    <a href="{{url('view-categorie/'.$cate->slug)}}">
                    <div class="single-shop-product p-0" style="margin-top: 0%">
                        <div class="product-upper">
                            <img src="{{asset('images/cath/'.$cate->images)}}" alt="">
                        </div>
                        <h2>{{$cate->name}}</h2>


                        <div class="product-option-shop">
                            <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="{{url('view-categorie/'.$cate->slug)}}"></a>
                        </div>
                    </div>
                </div>
                </a>
                @endforeach
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="product-pagination text-center">
                        <nav>
                          <ul class="pagination">
                            <li>
                              <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                              </a>
                            </li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                              <a href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                              </a>
                            </li>
                          </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>


    </div> <!-- End site branding area -->

    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

            </div>
        </div>
    </div> <!-- End mainmenu area -->

    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Tout nos produits</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="single-product-area p-1">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                @foreach($featured as $item)
                <div class="col-md-3 col-sm-6">
                    <div class="single-shop-product">
                        <a href="{{url('view-categorie/'.$item->slug.'/'.$item->slug)}}">
                        <div class="product-upper">
                            <img src="{{asset('images/prod/'.$item->images)}}" alt="">
                        </div>
                        <h2><a href="{{url('view-categorie/'.$item->slug.'/'.$item->slug)}}">{{$item->name}}</a></h2>
                        <div class="product-carousel-price">
                        <ins>{{$item->selling_price}} Fcfa</ins> <del>{{$item->original_price}} Fcfa</del>
                        </div>

                        <div class="product-option-shop">
                            <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="{{url('view-categorie/'.$item->slug.'/'.$item->slug)}}">Ajouter </a>
                        </div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="product-pagination text-center">
                        <nav>
                          <ul class="pagination">
                            <li>
                              <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                              </a>
                            </li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                              <a href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                              </a>
                            </li>
                          </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
