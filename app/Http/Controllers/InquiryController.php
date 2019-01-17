<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Inquiry;
use Mail;
use Illuminate\Support\Facades\Session;


class InquiryController extends Controller
{
  protected $request;

    public function __construct(Request $request) {
        $this->request = $request;
    }


    //
    public function input(){

          return view('inquiry.input');
}
public function back(){

  if(Session::has('me')){
    $inquiry = Session::get('me');
    return view('inquiry.back')->with('inquiryform',$inquiry);
}

    }

    public function confirm(Request $request)
    {
  Session::put('me', $request->all());

      // $inquiryform = $this->request->all();
      $validator = Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required',
                'url' => 'required',
                'message' => 'required',

            ]);

            if ($validator->fails()) {
                return redirect('inquiry/input')
                              ->withErrors($validator)
                            ->withInput
                            ();
            } else{

              $inquiry = new Inquiry;
                          $inquiry->name       = $request->name;
                          $inquiry->email      =$request->email;
                          $inquiry->url       = $request->url;
                          $inquiry->detail       = $request->message;
                          $inquiry->gender = $request->gender;
                          $inquiry->save();
                          //$data = array('name'=>"Virat Gandhi");

                            return view('inquiry.confirm')->with('inquiryform',$inquiry);

}
}





    public function store(Request $request){
    //   Mail::send('inquiry.mail
    //     ',
    //     array(
    //         'name' => $request->get('name'),
    //         'email' => $request->get('email'),
    //         'user_message' => $request->get('message')
    //     ), function($message)
    // {
    //
    //     $message->to('love.yoyohoho@gmail.com', 'Admin')->subject('TODOParrot Feedback');
    // });

        return view('inquiry.complete');


   }



}
