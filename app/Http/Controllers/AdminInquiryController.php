<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Inquiry;
use Mail;
use Illuminate\Support\Facades\Session;


class AdminInquiryController extends Controller
{
  /**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function index(Request $request)
{
   $inquiry = inquiry::orderBy('id','ASC')->paginate(20);

   return view('admin.inquiry.index',compact('inquiry'));

}

public function autoComplete(Request $request) {
      $query = $request->get('term','');


      $products=inquiry::where('name','LIKE','%'.$query.'%')->get();

      $data=array();

      foreach ($products as $product) {
              $data[]=array('value'=>$product->name,'id'=>$product->id);
      }
      if(count($data))
           return $data;
      else
          return ['value'=>'No Result Found','id'=>''];
  }

/**
 * Display the specified resource.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function detail($id)
{
    $inquiry = inquiry::find($id);
    return view('admin.inquiry.detail',compact('inquiry'));
}



}
