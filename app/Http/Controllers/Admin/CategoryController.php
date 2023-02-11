<?php

namespace App\Http\Controllers\Admin;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::all();
        return view('admin.cathegory.index', compact('category'));
    }
    public function add()
    {
       return view('admin.cathegory.add');
    }
    public function insert(Request $request)
    {
        $category = new Category();
        // if($request->hasFile('images'))
        //   {
        //       $file = $request->File('images');
        //       $ext = $file->UploadedFile::getClientOriginalExtension();
        //       $filename = time().'.'.$ext;
        //       $file->move('assets/uploads/category/',$filename);
        //       $category->images = $filename;
        //   }
        //   $category->images = $filename;
        // if($request->hasFile('images'))
        // {
        //     $size = $request->file('images')->getSize();
        //     $name = $request->file('images')->getClientOriginalExtension();
        //     $request->file('images')->store('assets/uploads/category');
        // }
        //   $category->images = $size;
        //   $category->images = $name;
        // if($request->hasFile('images'))
        // {
        //      $request->file('images')->getSize();
        //     //  $request->file('images')->getClientOriginalExtension();
        //      $newimages = time() . '-' . $request->name . '.' .$request->images->extension();
        //       $insert = $request-> move(public_path('assets'),$newimages);

        // }
        // $image = $request->input('images');
        // if (request()->hasFile('images')){
        //     $uploadedImage = $request->file('images');
        //     $imageName = time() . '.' . $image->getClientOriginalExtension();
        //     $destinationPath = public_path('/assets/uploads/');
        //     $uploadedImage->move($destinationPath, $imageName);
        //     $image->imagePath = $destinationPath . $imageName;
        // }
        //   $image->images = $request->input('images');
        // //   $category->images = $image;
        // if($request->hasFile('images'))
        //    {
        //          $file = $request->File('images');
        //     //   $size = $request->file('images')->getSize();
        //        $name = $request->file('images')->getClientOriginalExtension();
        //        $img = $request->file('images')->store('public');
        //    }
             if($request->hasFile('images'))
              {
                  $file = $request->File('images');
                  $ext = $file->getClientOriginalExtension();
                  $filename = time().'.'.$ext;
                 $file->move('images/cath/',$filename);
                  $category->images = $filename;
             }
                $category->name = $request->input('name');
                $category->slug = $request->input('slug');
                $category->description = $request->input('description');
                $category->status = $request->input('status') == TRUE ? '1':'0';
                $category->popular = $request->input('popular') == TRUE ? '1':'0';
                $category->meta_title = $request->input('meta_title');
                $category->meta_descrip = $request->input('meta_descrip');
                $category->meta_keywords = $request->input('meta_keywords');
                $category->save();
        return redirect('/dashboard')->with('status','category added successffully');
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.cathegory.edit', compact('category'));
    }
    public function voir($id)
    {
        $category = Category::find($id);
        return view('admin.cathegory.voir', compact('category'));
    }

    public function update(Request $request, $id)

    {
        $category = Category::find($id);
         if($request->hasFile('images'))
         {
             $path = 'images/cath/'.$category->image;
             if(File::exists($path))
              {
                  File::delete($path);
              }
                   $file = $request->file('images');
                   $ext = $file->getClientOriginalExtension();
                   $filename = time().'.'.$ext;
                   $file->move('images/cath/',$filename);
                   $category->images = $filename;
         }
            $category->name = $request->input('name');
            $category->slug = $request->input('slug');
            $category->description = $request->input('description');
            $category->status = $request->input('status') == TRUE ? '1':'0';
            $category->popular = $request->input('popular') == TRUE ? '1':'0';
            $category->meta_title = $request->input('meta_title');
            $category->meta_descrip = $request->input('meta_descrip');
            $category->meta_keywords = $request->input('meta_keywords');
            $category->update();
            return redirect('dashboard')->with('status', 'Cathegory update successefully');

    }

    public function destroy($id)
    {
        $category = Category::find($id);
        if($category->images)
            {
                    $path = 'images/cath/'.$category->image;
                    if(File::exists($path))
                        {
                            File::delete($path);
                        }
            }
        $category->delete();
        return redirect('categories')->with('suppression de la categorie effectué avec success !!!!!');
    }
}
