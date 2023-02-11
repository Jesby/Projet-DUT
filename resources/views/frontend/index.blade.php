@extends('layouts.frontend')

@section('title')
    welcome to E-Mc
@endsection
@section('content')
  <body>
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>ACCUEIL</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="slider-area">
            <!-- Slider -->
            <div class="single-sidebar" style="margin-bottom: 0%;">
                <h2 class="sidebar-title" style="margin-bottom: 0px;">Recherche Produit</h2>
                <form action="">
                    <input type="text" placeholder="Search products..." id="searchProd" oninput="searchprod()">
                    {{-- <input type="submit" value="Search"> --}}
                </form>
            </div>
            <div class="" id="liste_produits">

            </div>

            <div class="block-slider block-slider4 p-0">
                <h3 class="section-title p-0" style="margin-bottom: 0px;">Produits populaires</h3>
                <ul class="" id="bxslider-home4">
                    <div class="maincontent-area">
                        <div class="zigzag-bottom"></div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">

                                    <div class="latest-product p-0">

                                        <div class="product-carousel p-0">

                                            @foreach($featured as $item)
                                            <div class="single-product">
                                                <div class="product-f-image">
                                                    <img src="{{asset('images/prod/'.$item->images)}}" alt="">
                                                    <div class="product-hover">
                                                        <a href="{{url('view-categorie/'.$item->slug.'/'.$item->slug)}}" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add panier</a>
                                                        <a href="{{url('view-categorie/'.$item->slug.'/'.$item->slug)}}" class="view-details-link"><i class="fa fa-link"></i> plus details</a>
                                                    </div>
                                                </div>

                                                <h2 class="text-primary">{{$item->name}}</h2>

                                                <div class="product-carousel-price text-primary text-center">
                                                    <ins>{{$item->selling_price}} Fcfa</ins>
                                                </div>
                                            </div>
                                            @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- End main content area -->
            </div>
            <!-- ./Slider -->
    </div> <!-- End slider area -->

    <div class="promo-area">
        <div class="zigzag-bottom"></div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo1">
                        <i class="fa fa-refresh"></i>
                        <p>30 Days return</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo2">
                        <i class="fa fa-truck"></i>
                        <p>Free shipping</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo3">
                        <i class="fa fa-lock"></i>
                        <p>Secure payments</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo4">
                        <i class="fa fa-gift"></i>
                        <p>New products</p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End promo area -->
      <h2 class="section-title">Nos Produits</h2>
    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <div class="product-carousel p-0">
                            @foreach($featured as $item)
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="{{asset('images/prod/'.$item->images)}}" alt="">
                                    <div class="product-hover">
                                        <a href="{{url('view-categorie/'.$item->slug.'/'.$item->slug)}}" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="{{url('view-categorie/'.$item->slug.'/'.$item->slug)}}" class="view-details-link"><i class="fa fa-link"></i> plus details</a>
                                    </div>
                                </div>

                                <h2><a href="{{url('view-categorie/'.$item->slug.'/'.$item->slug)}}">{{$item->name}}</a></h2>

                                <div class="product-carousel-price">
                                    <ins>{{$item->selling_price}}</ins>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End main content area -->
    <h3 class="section-title p-0" style="margin-bottom: 0px;">Categories</h3>
    <div class="brands-area  p-0">

        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="brand-wrapper">
                        <div class="brand-list">
                            @foreach($trending as $cath)
                              <img src="{{asset('images/cath/'.$cath->images)}}" alt=""/>
                              @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End brands area -->

    <div class="product-widget-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Meilleur Produit</h2>
                        <a href="" class="wid-view-more">Acheter</a>
                        <div class="single-wid-product">
                            <img src="" alt="" class="product-thumb">
                            <h2></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$400.00</ins> <del>$425.00</del>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Meilleurs Categories </h2>
                        <a href="#" class="wid-view-more">Voir plus </a>
                        <div class="single-wid-product">
                            {{-- <a href="single-product.html"><img src="{{asset('images/prod/'.$item->images)}}" alt="" class="product-thumb"></a> --}}
                            <h2><a href="single-product.html">Sony playstation microsoft</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$400.00</ins> <del>$425.00</del>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Nouveaux Produits</h2>
                        <a href="#" class="wid-view-more">View All</a>

                            <div class="single-wid-product">
                                {{-- <a href="single-product.html"><img src="{{asset('images/prod/'.$item->images)}}" alt="" class="product-thumb"></a> --}}
                                <h2><a href="single-product.html">Apple new i phone 6</a></h2>
                                <div class="product-wid-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product-wid-price">
                                    <ins>$400.00</ins> <del>$425.00</del>
                                </div>
                            </div>

                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End product widget area -->



    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>

    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <!-- jQuery sticky menu -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>

    <!-- jQuery easing -->
    <script src="js/jquery.easing.1.3.min.js"></script>

    <!-- Main Script -->
    <script src="js/main.js"></script>

    <!-- Slider -->
    <script type="text/javascript" src="js/bxslider.min.js"></script>
    <script type="text/javascript" src="js/script.slider.js"></script>
  </body>
</html>

@endsection
@section('scripts')
<script>
    let state = 0;
    function searchprod(){
        // search
        state = 1;
        $('#liste_produits').removeClass('d-none');
        $('#liste_produits').load('components/listproduits/' + $('#searchProd').val(), function(){});
    }

    setInterval(() => {
        if($('#search').val() == ''){
            if(state == 1){
                $('#liste_produits').addClass('d-none');
                state = 0;
            }
        }
    }, 1000);
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
    items:6
}
}
})
</script>
@endsection -->
@section('content')

@include('layouts.inc.footer')

@endsection
