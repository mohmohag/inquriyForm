<?php
namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InquiryController extends Controller
{

       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $inquiry = inquiry::orderBy('id','DESC')->paginate(5);
        dd($inquiry);

        return view('admin.aboutus.index',compact('aboutus','works','peoples'));

    }
  }
