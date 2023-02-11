@extends('layouts.frontend')

@section('title')
    Checkout
@endsection

@section('content')
        <div class="container-fluid mt-5">
            <form action="{{url('place-order')}}" method="POST">
                {{csrf_field()}}
            <div class="row">

                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h6>
                                Basic Details
                            </h6>
                            <hr>
                            <div class="row checkout-form">
                                <div class="col-md-6">
                                    <label for="Noms de famille"> Entrer votre noms de Famille</label>
                            <input type="text" class="form-control" value="{{ Auth::user()->name}}" name="noms" placeholder="Entrer votre prenom" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="Prenoms"> Entrer votre Prenoms </label>
                                    <input type="text" class="form-control"  value="{{ Auth::user()->prenoms}}" name="prenoms" placeholder="Entrer votre prenom" required>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="email"> Entrer votre Email </label>
                                    <input type="email" class="form-control"  value="{{ Auth::user()->email}}" name="email" placeholder="Entrer votre Email" required>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="number"> Entrer votre numero de telephone  </label>
                                    <input type="text" class="form-control"  value="{{ Auth::user()->phone}}" name="number" placeholder="Entrer votre numero de telephone" required>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="adresse1"> Entrer votre Address 1  </label>
                                    <input type="text" class="form-control"   value="{{ Auth::user()->address1}}" name="addresse1" placeholder="Entrer votre numero de premiere adresse" required>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="adresse2"> Entrer votre Address 2  </label>
                                    <input type="text" class="form-control"   value="{{ Auth::user()->address2}}" name="addresse2" placeholder="Entrer votre deuxieme adresse" required>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="ville"> Entrer votre ville  </label>
                                    <input type="text" class="form-control"  value="{{ Auth::user()->ville}}" name="ville" placeholder="Entrer votre ville" required>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="state"> Entrer votre state  </label>
                                    <input type="text" class="form-control"  value="{{ Auth::user()->state}}" name="residence" placeholder="Entrer votre State" required>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="pays"> Entrer votre pays  </label>
                                    <input type="text" class="form-control"  value="{{ Auth::user()->pays}}" name="pays" placeholder="Entrer votre pays" required>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="ville"> Entrer votre Code Pin </label>
                                    <input type="text" class="form-control"  value="{{ Auth::user()->pincode}}" name="codepin" placeholder="Entrer votre code Pin" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                      <div class="card">

                          <div class="card-body">
                              <h6>Ordre de details</h6>
                              <hr>
                              <table class="table table-sprited table-bordered">
                              @if($CartItems->count() > 0)
                                  <thead>
                                      <tr>
                                          <td>Name</td>
                                          <td>Quantite</td>
                                          <td>Prix Unitaire</td>
                                          <td>Prix Total</td>
                                          <td>images</td>
                                      </tr>
                                  </thead>
                                  <tbody>

                                      @foreach($CartItems as $item)
                                      <tr>
                                          <td> {{$item->produits->name}}</td>
                                          <td>{{$item->prod_qty}}</td>

                                         <td>{{$item->produits->selling_price}} Fcfa</td>
                                         <td>{{$item->produits->selling_price*$item->prod_qty}} Fcfa</td>

                                            <td>
                                                <img src="{{ asset('images/prod/'.$item->produits->images)}}"  alt="image du produit" style="width: 40px;">

                                            </td>

                                     </tr>

                                       @endforeach

                                  </tbody>
                              </table>
                              <h4 class="px-2">prix total : <span class="float-end">{{$prix_total}} Fcfa</span></h4>
                              <button type="submit" class="btn btn-primary float-end" >Enregistrer</button>

                          </div>
                          <br>
                          <div id="paypal-button-container"></div>
                        @else
                        <div class="card-body text-center">
                            <h3>Pas de produit dans votre pannier</h3>
                        </div>
                        @endif
                      </div>
                   </div>
                </div>
            </form>
        </div>
 @endsection
 @section('scripts')
     <script src="https://www.paypal.com/sdk/js?client-id=AbqQSy0qB0mASKtxJr6tTreEvjfWU-4hLzsK1zwUJXPCUz2lT31oNRCkr08TikrTIjDcp4lXGPVw5Bpl"></script>
     <script>
  paypal.Buttons({
  createOrder: function(data, actions) {
    // This function sets up the details of the transaction, including the amount and line item details.
    return actions.order.create({
      purchase_units: [{
        amount: {
          value: '$item->produits->selling_price*$item->prod_qty'
        }
      }]
    });
  },
  onApprove: function(data, actions) {
    // This function captures the funds from the transaction.
    return actions.order.capture().then(function(details) {
      // This function shows a transaction success message to your buyer.
    //   alert('Transaction completed by ' + details.payer.name.given_name);

        var noms = $('.noms').val();
        var prenoms = $('.prenoms').val();
        var email = $('.email').val();
        var number = $('.number').val();
        var addresse1 = $('.addresse1').val();
        var addresse2 = $('.addresse2').val();
        var ville = $('.ville').val();
        var residence = $('.residence').val();
        var pays = $('.pays').val();
        var codepin = $('.codepin').val();
      $.ajax({
                method: "POST",
                url: "/place-order",
                    data:{

                                'noms':reponse.noms,
                                'prenoms':prenoms,
                                'email':email,
                                'number':number,
                                'addresse1':addresse1,
                                'addresse2':addresse2,
                                'ville':ville,
                                'residence':residence,
                                'pays':pays,
                                'codepin':codepin,
                                // 'payement_mode':"Paid by paypal",
                                // 'payement_id':details.id,
                    },
                        success: function(response)
                        {
                            swal(response.status);
                        }
                   });
              });
  }
}).render('#paypal-button-container');
//This function displays payment buttons on your web page.

</script>
 @endsection
