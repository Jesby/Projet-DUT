
<nav id="sidebar" class="">
            <div class="sidebar-header">
                <h3>Administrateur</h3>
            </div>

            <ul class="list-unstyled components text-dark">
            <li class=" ">
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="text-dark">Tableau de bord</a>
                    
                </li>
               
                
                <li class="nav-item {{ Request::is('categories') ? 'active': ''}} ">
                    <a href="{{ url ('categories')}}" data-toggle="collapse" aria-expanded="false" class="text-dark">Categories</a>
                    
                </li>
                <li class="nav-item {{ Request::is('add-category') ? 'active': ''}} ">
                    <a href="{{ url ('add-category')}}" data-toggle="collapse" aria-expanded="false" class="text-dark">Ajouter une Categore</a>
                    
                </li>
                 
                <li class="nav-item {{ Request::is('produit') ? 'active': ''}} ">
                    <a href="{{ url ('produit')}}" data-toggle="collapse" aria-expanded="false" class="text-dark">Produits</a>
                    
                </li>
                <li class="nav-item {{ Request::is('add-produit') ? 'active': ''}} ">
                    <a href="{{ url ('add-produit')}}" data-toggle="collapse" aria-expanded="false" class="text-dark">Ajouter un produit</a>
                    
                </li>
                <li class="nav-item {{ Request::is('produit') ? 'active': ''}} ">
                    <a href="{{ url ('users')}}" data-toggle="collapse" aria-expanded="false" class="text-dark">Liste des Utilisateurs</a>
                    
                </li>
                <li class="nav-item {{ Request::is('produit') ? 'active': ''}} ">
                    <a href="{{ url ('orders')}}" data-toggle="collapse" aria-expanded="false" class="text-dark">Proccess Verbal</a>
                    
                </li>
               
            </ul>

            <ul class="list-unstyled CTAs" >
                <li>
                    
                </li>
                <li>
                    
                </li>
            </ul>
        </nav>
        

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>