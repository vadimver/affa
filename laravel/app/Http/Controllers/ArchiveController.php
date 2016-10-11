<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

use App\Http\Requests;

use App\Affair;
use Auth;

class ArchiveController extends Controller
{
  public function index()
  {
      $user_id = Auth::user()->id;
      $date = date('Y-m-d');

      $data = [
        'menu_archive' => 'menu_active',
        'menu_affairs' => 'menu',
        'menu_new' => 'menu',
        'place' => "Today",
        'arch' => 'archive',
        'title' => 'Archive',
        'aff' => Affair::where('status','!=', 'process')
                         ->where('user_id', $user_id)->paginate(12)
      ];
      return view('archive', $data);
  }

  public function week()
  {
    $user_id = Auth::user()->id;
    $time_start = date("Y-m-d");

    $time_finish = date( "Y-m-d", strtotime( "$time_start -7 day" ) );

      $data = [
        'menu_archive' => 'menu_active',
        'menu_affairs' => 'menu',
        'menu_new' => 'menu',
        'title' => 'Week archive',
        'arch' => 'archive',
        'place' => 'Week',
        'aff' => Affair::whereBetween('target', [$time_start, $time_finish])
                         ->where('status','!=', 'process')
                         ->where('user_id', $user_id)->paginate(12)
      ];

      return view('archive', $data);
  }

  public function month()
  {
    $user_id = Auth::user()->id;
    $time_start = date("Y-m-d");

    $time_finish = date( "Y-m-d", strtotime( "$time_start -1 month" ) );

      $data = [
        'menu_archive' => 'menu_active',
        'menu_affairs' => 'menu',
        'menu_new' => 'menu',
        'title' => 'Month archive',
        'arch' => 'archive',
        'place' => '30 days',
        'aff' => Affair::whereBetween('target', [$time_start, $time_finish])
                         ->where('status','!=', 'process')
                         ->where('user_id', $user_id)->paginate(12)
      ];

      return view('archive', $data);
  }

  public function all()
  {
      $user_id = Auth::user()->id;
      $data = [
        'menu_archive' => 'menu_active',
        'menu_affairs' => 'menu',
        'menu_new' => 'menu',
        'title' => 'All archive',
        'arch' => 'archive',
        'place' => 'All time',
        'aff' => Affair::where('status','!=', 'process')
                         ->where('user_id', $user_id)->paginate(12)
      ];

      return view('archive', $data);
  }

  public function destroy($id)
  {
  $affa=Affair::find($id);
  $affa->delete();
  return back();
  }
}
