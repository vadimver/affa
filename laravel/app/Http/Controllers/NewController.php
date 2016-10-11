<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Affair;

class NewController extends Controller
{
  public function index()
  {
    $data = [
      'menu_archive' => 'menu',
      'menu_affairs' => 'menu',
      'menu_new' => 'menu_active',
      'title' => 'Edit affair'
    ];

      return view('new',$data);

  }

  public function store(Request $request)
   {
       $this->validate($request, [
        'text' => 'required|min:5',
        'sign' => 'required',
        'target' => 'required'
       ]);

       $a = new Affair;

       $a->title = $request->title;
       $a->text = $request->text;
       $a->sign = $request->sign;
       $a->user_id = $request->user_id;
       $a->status = 'process';

       $target = $request->target;
       $a->target = date("Y-m-d", strtotime($target));


       $a->save();
       return redirect('/now');
   }

   public function update(Request $request,$id)
    {
        $this->validate($request, [
          'text' => 'required|min:5',
          'sign' => 'required',
          'target' => 'required'
        ]);

        $a = Affair::find($id);

        $a->title = $request->title;
        $a->text = $request->text;
        $a->sign = $request->sign;
        $a->user_id = $request->user_id;

        $a->save();
        return redirect('/now');
    }

  public function edit($id)
  {
    $data = [
      'menu_archive' => 'menu',
      'menu_affairs' => 'menu',
      'menu_new' => 'menu_active',
      'title' => 'Edit affair'
    ];

   $edit = Affair::find($id);

   return view('edit',$data)->with('info', $edit);
  }
}
