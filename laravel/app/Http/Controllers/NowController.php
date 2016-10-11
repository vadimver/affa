<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use App\Affair;


class NowController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }

  public function now()
  {
      $user_id = Auth::user()->id;
      $time = date("Y-m-d");
      $time_finish = date( "Y-m-d", strtotime( "$time -365 day" ) );

      $data = [
        'menu_archive' => 'menu',
        'menu_affairs' => 'menu_active',
        'menu_new' => 'menu',
        'title' => 'Today affairs',
        'place' => 'Today',
        'aff' => Affair::whereBetween('target', [$time_finish, $time])
                         ->where('status', 'process')
                         ->where('user_id', $user_id)->paginate(12)
      ];

      return view('now', $data);
  }


  public function week()
  {
    $user_id = Auth::user()->id;
    $time_start = date("Y-m-d");

    $time_finish = date( "Y-m-d", strtotime( "$time_start +7 day" ) );

      $data = [
        'menu_archive' => 'menu',
        'menu_affairs' => 'menu_active',
        'menu_new' => 'menu',
        'title' => 'Week affairs',
        'place' => 'Week',
        'aff' => Affair::whereBetween('target', [$time_start, $time_finish])
                         ->where('status', 'process')
                         ->where('user_id', $user_id)->paginate(12)
      ];

      return view('now', $data);
  }

  public function month()
  {
    $user_id = Auth::user()->id;
    $time_start = date("Y-m-d");

    $time_finish = date( "Y-m-d", strtotime( "$time_start +30 day" ) );

      $data = [
        'menu_archive' => 'menu',
        'menu_affairs' => 'menu_active',
        'menu_new' => 'menu',
        'title' => 'Month affairs',
        'place' => '30 days',
        'aff' => Affair::whereBetween('target', [$time_start, $time_finish])
                         ->where('status', 'process')
                         ->where('user_id', $user_id)->paginate(12)
      ];

      return view('now', $data);
  }

  public function all()
  {
      $user_id = Auth::user()->id;
      $data = [
        'menu_archive' => 'menu',
        'menu_affairs' => 'menu_active',
        'menu_new' => 'menu',
        'title' => 'All time affairs',
        'place' => 'All time',
        'aff' => Affair::where('status', 'process')
                         ->where('user_id', $user_id)->paginate(12)
      ];

      return view('now', $data);
  }

  public function destroy($id)
  {
  $affa=Affair::find($id);
  $affa->delete();
  return back();
  }

  public function complied(Request $request,$id){

         $a = Affair::find($id);

         $a->status = 'complied';

         $a->save();
         return redirect('/now');
  }

  public function fail(Request $request,$id){

         $a = Affair::find($id);

         $a->status = 'fail';

         $a->save();
         return redirect('/now');
  }


}
