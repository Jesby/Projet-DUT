<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
class FrontendContoller extends Controller
{
   public function index()

    {
         $featured = Product::where('trending','1')->take('15')->get();
         $trending = Category::where('popular','1')->take('15')->get();
         $prod = Product::where('trending','1')->take('1')->get();
          return view('frontend.index', compact('featured','trending','prod'));
    }

    public function categorie()
    {
        $category = Category::where('status','0')->get();
        $featured = Product::where('trending','1')->take('15')->get();

        return view('frontend.catego', compact('category','featured'));
    }

       public function viewcategorie($slug)
        {
          if(Category::where('slug', $slug)->exists())
           {
              $category =  Category::where('slug',$slug)->first();

               $produits = Product::where('cate_id', $category->id)->where('status','0')->get();
                 return view('frontend.produit.index', compact('category','produits'));
          }
         else
          {
              return redirect('/')->with('status', "Slug doesnot exists");
          }

     }

    public function produitview($cate_slug, $prod_slug)
    {
      $produits = Product::where('slug' , $prod_slug)->first();
      $feature = Product::where('trending','1')->take('15')->get();
       $trendin = Category::where('popular','1')->take('15')->get();
        if(Category::where('slug', $cate_slug)->exists())
          {
              if(Product::where('slug', $prod_slug)->exists())
                  {
                    // $produits = Product::where('slug' , $prod_slug)->first();
                      return view('frontend.produit.view', compact('produits','feature'));
                  }
                    else{
                      //return redirect('/')->with('status', "the link was broken");
                    // return view('frontend.produit.view', compact('produits'));
                  }
            }
            else
              {
                 //return redirect('/')->with('status', "No such Category is found");
                 return view('frontend.produit.view', compact('produits','feature'));
              }
    }
}
