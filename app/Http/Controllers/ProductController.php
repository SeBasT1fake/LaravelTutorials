<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Models\Product;
<<<<<<< HEAD


class ProductController extends Controller
{

=======
class ProductController extends Controller
{
    
>>>>>>> 6f0a968f4393f4b75ca0750dce85cb02e6aaca75


    public function index(): View
    {
        $viewData = [];
        $viewData["title"] = "Products - Online Store";
        $viewData["subtitle"] =  "List of products";
        $viewData["products"] = Product::all();
        return view('product.index')->with("viewData", $viewData);
    }



<<<<<<< HEAD
=======
/** 
   * public function show(string $id): View | RedirectResponse
   * {
   *     // We convert $id to an integer
   *     $id = intval($id);

    *    // Check if the product index exists.
    *    if (!isset(ProductController::$products[$id - 1])) {
     *       return redirect()->route('home.index');
      *  }
*
 *       $viewData = [];
  *      $product = ProductController::$products[$id - 1];
   *     $viewData["title"] = $product["name"] . " - Online Store";
    *    $viewData["subtitle"] = $product["name"] . " - Product information";
     *   $viewData["product"] = $product;

      *  return view('product.show')->with("viewData", $viewData);
    *}
*/
>>>>>>> 6f0a968f4393f4b75ca0750dce85cb02e6aaca75
    public function show(string $id): View
    {
        $viewData = [];
        $product = Product::findOrFail($id);
        $viewData["title"] = $product["name"]." - Online Store";
        $viewData["subtitle"] =  $product["name"]." - Product information";
        $viewData["product"] = $product;
        return view('product.show')->with("viewData", $viewData);
    }



    public function create(): View
    {
        $viewData = []; //to be sent to the view
        $viewData["title"] = "Create product";

        return view('product.create')->with("viewData", $viewData);
    }

    public function save(Request $request): RedirectResponse
    {
        $request->validate([
            "name" => "required",
            "price" => "required"
        ]);
<<<<<<< HEAD
=======
        //dd($request->all());
        //here will be the code to call the model and save it to the database
>>>>>>> 6f0a968f4393f4b75ca0750dce85cb02e6aaca75
        Product::create($request->only(["name","price"]));

        return back();

<<<<<<< HEAD
    }
    public function success(): View
    {
       return view('product.success');
=======
>>>>>>> 6f0a968f4393f4b75ca0750dce85cb02e6aaca75
    }
}
