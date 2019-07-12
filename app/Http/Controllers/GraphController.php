<?php

namespace App\Http\Controllers;
use App\User;
use DB;
use Illuminate\Http\Request;

class GraphController extends Controller
{

    public function showGraphData() {

      $users = DB::table('users')->get(['id', 'nick', 'referrerNickId']);
      $mapping = [];
      $nodes = [];
      $links = [];

      foreach ($users as $user) {
        $mapping[$user->id] = $user->nick;
        $temp = array("id" => $user->nick);
        array_push($nodes, $temp);
      }

      foreach ($users as $user) {

        if($user->referrerNickId != 0) {
            $temp = array("source" => $mapping[$user->referrerNickId], "target" => $user->nick);
            array_push($links, $temp);
        }

      }

      // dd(json_encode($nodes));
      // dd(json_encode($links));

      return view('graph-data', compact('nodes', 'links'));

    }

    public function showGraphData2() {
      dd("Hello");
    }
}
