<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Support\Facades\File;
class ProduittController extends Controller
{
    public function index()
    {
        $produit = Product::all();
        return view('admin.produit.index', compact('produit'));
    }
    public function add()
    {
        $category = Category::all();

        return view('admin.produit.add',compact('category') );
    }

    public function insert(Request $request)
    {
        $produit = new Product();
         
        if($request->hasFile('images'))
              {
                  $file = $request->File('images');
                  $ext = $file->getClientOriginalExtension();
                  $filename = time().'.'.$ext;
                 $file->move('images/prod/',$filename);
                  $produit->images = $filename;
             }
                $produit->cate_id = $request->input('cate_id');
                $produit->name = $request->input('name');
                $produit->slug = $request->input('slug');
                $produit->small_description = $request->input('small_description');
                $produit->description = $request->input('description');
                $produit->status = $request->input('status') == TRUE ? '1':'0';
                $produit->trending = $request->input('trending') == TRUE ? '1':'0';
                $produit->meta_title = $request->input('meta_title');
                $produit->original_price = $request->input('original_price');
                $produit->selling_price = $request->input('selling_price');
                $produit->quantite = $request->input('quantite');
                $produit->taxe = $request->input('taxe');
                $produit->meta_description = $request->input('meta_description');
                $produit->meta_keywords = $request->input('meta_keywords');
                $produit->save();
                return redirect('produit')->with('status', 'produit ajoute avec success');
        }
         
           public function edit($id)
            {
               $produits = Product::find($id);

               return view('admin.produit.edit',compact('produits'));
            }  

            public function update(Request $request, $id)
            {
                $produit = Product::find($id);

                if($request->hasFile('images'))
                {
                        $path = 'images/prod/'.$produit->image;
                        if(File::exists($path))
                        {
                            File::delete($path);  
                        }
                            $file = $request->file('images');
                            $ext = $file->getClientOriginalExtension();
                            $filename = time().'.'.$ext;
                            $file->move('images/prod/',$filename);
                            $category->images = $filename;
                }
                
                $produit->name = $request->input('name');
                $produit->slug = $request->input('slug');
                $produit->small_description = $request->input('small_description');
                $produit->description = $request->input('description');
                $produit->status = $request->input('status') == TRUE ? '1':'0';
                $produit->trending = $request->input('trending') == TRUE ? '1':'0';
                $produit->meta_title = $request->input('meta_title');
                $produit->original_price = $request->input('original_price');
                $produit->selling_price = $request->input('selling_price');
                $produit->quantite = $request->input('quantite');
                $produit->taxe = $request->input('taxe');
                $produit->meta_description = $request->input('meta_description');
                $produit->meta_keywords = $request->input('meta_keywords');
                $produit->update();
                return redirect('produit')->with('status', 'produit modifier avec success');

            }
             
          public function destroy($id)
          {
            $produits = Product::find($id);
            $path = 'images/prod/'.$produits->image;
                        if(File::exists($path))
                        {
                            File::delete($path);  
                        }
                        $produits->delete();
          return redirect('produit')->with('status', 'produit supprimé avec success');
            
          }  
    }
