<?php

namespace App\Http\Controllers\bakery;

use App\Http\Controllers\Controller;
use App\Models\Users;
use App\Models\Books;
use App\Models\Orders;
use App\Models\Order_details;
use App\Models\Bookstores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DetailsController extends Controller
{
   public function details(Request $request, $id){
      $books = Books::find($id);
      return view('bakery.Details.bookdetail' , compact('books'));
   }

   public function add_cart(Request $request, $id) {
      if (!$request->session()->has('cart')) {
         $request->session()->put('cart' , []);
      }

      $this->validate($request , [
         'quantity'
      ]);

      $books = Books::find($id);
      $arr = $request->session()->get('cart');
      $id = 0 - count($arr);
      $bookstore = Bookstores::find($books['bookstore_id']);

      $book_id = false;
      foreach ($arr as $key => $value) {
         if ($value["book_id"] == $books["id"]) {
            $book_id = $key;
         }
         if ($value['id'] > $id) $id = $value["id"];
      }

      if ($book_id == false) {
         $arr[] = [
            'id'=>$id ,
            'book_id'=>$books['id'] ,
            'book_name'=>$books['book_name'] ,
            'author'=>$books['author'] ,
            'image'=>$books['image'] , 
            'quantity'=>$request->quantity ,
            'price'=>$books['price'] ,
            'bookstore_name'=>$bookstore['bookstore_name'] ,
            'books_stock'=>$books['quantity']
         ];
      }
      else {
         $arr[$book_id] = [
            'id'=>$arr[$book_id]['id'] ,
            'book_id'=>$books['id'] ,
            'book_name'=>$books['book_name'] ,
            'author'=>$books['author'] ,
            'image'=>$books['image'] , 
            'quantity'=>$arr[$book_id]["quantity"] + $request->quantity ,
            'price'=>$books['price'] ,
            'bookstore_name'=>$bookstore['bookstore_name'] ,
            'books_stock'=>$books['quantity']
         ];
      }
      $request->session()->put('cart' , $arr);

      return redirect()->route('cart')->with('success' , 'Added successfully');
   }
}
