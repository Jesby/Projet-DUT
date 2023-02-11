@extends('layouts.frontend')

@section('title')
    Mon Pannier
@endsection

@section('content')
     <div class="container-fluid">
        <div class="product-big-title-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="product-bit-title text-center">
                            <h2>Panier d'achat</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

         <h6 class="mb-0">
             <a href="{{url('/')}}">Home </a>/
             <a href="{{url('cart')}}">Cart </a>/
         </h6>


 </div>


 <div class="container">
    @if($cartitem->count() > 0)
    <div class="single-product-area p-0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-content-right">
                        <div class="woocommerce">
                            <form method="post" action="#">
                                <table cellspacing="0" class="shop_table cart">
                                    <thead>
                                        <tr>
                                            <th>&nbsp;</th>
                                            <th>&nbsp;</th>
                                            <th>Product</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $total = 0; @endphp
                                        @foreach( $cartitem as $item)
                                        <tr class="cart_item product_data">
                                            <td class="product-remove">
                                                <a title="Remove this item" class="remove" href="#">×</a>
                                            </td>

                                            <td class="product-thumbnail">
                                                <img width="145" height="145" alt="poster_1_up" class="shop_thumbnail" src="{{asset('images/prod/'.$item->produits->images)}}">
                                            </td>

                                            <td >
                                                {{$item->produits->name}}
                                            </td>

                                            <td >
                                                <span class="amount">{{$item->produits->selling_price}} Fcfa</span>
                                            </td>

                                            <td class="row p-5">
                                                    <input type="hidden" class="prod_id" value="{{$item->prod_id}}" >
                                                    @if($item->produits->quantite >= $item->prod_qty)
                                                            <div class="col-3 container-fluid p-0 order-1"><button class="btn success bg-success changeQuantity decrement-btn w-100 m-0">-</button></div>
                                                            <div class="col-6 container-fluid p-0 order-2"><input type="text" name="quantite" class="form-control text-center mb-3 qtyinput w-100 m-0" value="{{$item->prod_qty}}"></div>
                                                            <div class="col-3 container-fluid p-0 order-3"><button class="btn info bg-info changeQuantity increment-btn w-100 m-0">+</button></div>
                                                       @php $total += $item->produits->selling_price*$item->prod_qty ; @endphp
                                                       @else
                                                       <h5>
                                                           Stock Finis
                                                       </h5>
                                                    @endif
                                            </td>

                                            <td class="product-subtotal">
                                                <div class="col-md-2 ms-auto">
                                                    <button class="btn btn-danger delete-cart-item">
                                                    <i class="fa fa-trash"></i>
                                                  </button>
                                              </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="actions" colspan="6">
                                                <div class="product-option-shop float-start">
                                                    <div class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="{{url ('checkout')}}">Prix Total : {{$total}} Fcfa</div>
                                                </div>

                                                <div class="product-option-shop float-end">
                                                    <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="{{url ('checkout')}}">Acheter</a>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                @else
                                <div class="card-body text-center">
                                    <h2>
                                        <i class="fa fa-shopping-cart"></i>
                                        Votre pannier est vide !!!
                                        <a href="{{url ('categorie')}}" class="btn btn-outline-success float-end">
                                        Commencer vos Achats
                                    </a>
                                    </h2>
                                </div>
                              @endif
                            </form>
                            <div class="single-product-area p-0">
                                <div class="zigzag-bottom"></div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="single-sidebar">
                                                <h2 class="sidebar-title">Search Products</h2>
                                                <form action="#">
                                                    <input type="text" placeholder="Search products...">
                                                    <input type="submit" value="Search">
                                                </form>
                                            </div>
                                        </div>

                                        <div class="col-md-8">
                                            <div class="related-products-wrapper">
                                                <h2 class="related-products-title">Ajouter un produit</h2>

                                                <div class="related-products-carousel">
                                                    @foreach ($prod as $item)
                                                    <div class="single-product">
                                                        <div class="product-f-image">
                                                            <img src="{{asset('images/prod/'.$item->images)}}" alt="">
                                                            <div class="product-hover">
                                                                <a href="{{url('view-categorie/'.$item->slug.'/'.$item->slug)}}" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                                                <a href="{{url('view-categorie/'.$item->slug.'/'.$item->slug)}}" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                                            </div>
                                                        </div>

                                                        <h2><a href="">Samsung gallaxy note 4</a></h2>

                                                        <div class="product-carousel-price">
                                                            <ins>$400.00</ins>
                                                        </div>

                                                    </div>
                                                    @endforeach
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>







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
  </body>
</html>
@endsection
