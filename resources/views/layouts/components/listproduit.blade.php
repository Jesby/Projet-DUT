<h4>
    @foreach ($produits as $produit)
        <div class="row">
            <div class="col-md-3">
            <a href="{{url('view-categorie/'.$produit->slug.'/'.$produit->slug)}}"><h4>{{ $produit->name }}</h4>
                <div>
                    <img src="{{asset('images/prod/'.$produit->images)}}" class="w-15 h-15" alt="">
                </div>
            </a>
        </div>
        </div>
    @endforeach
</h4>