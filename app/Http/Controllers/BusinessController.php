<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BusinessController extends Controller
{
  public function getAllBusinesses() {
    $data = DB::table('businesses')->get();
        return view('business.business_table', [  'data' => $data
        ]);
  }

    public function getBusiness($id) {
      $data = DB::table('businesses')->where('id', $id)->get();
      return view('business.business_details', [  'data' => $data
        ]);
    }

    public function updateBusiness($id, Request $request) {
      DB::table('businesses')->where('id', '=', $id)->update(
        [	'bus_name' => $request->input('bus_name'),
          'category_id' => $request->input('category_id'),
          'bus_description' => $request->input('bus_description'),
          'postal_code' => $request->input('postal_code'),
        ]
      );
      return back();
    }

    public function deleteBusiness($id) {
      DB::table('businesses')->where('id', '=', $id)->delete();
      return redirect()->route('businesses');
    }
    //
    // public function createUser() {
    //
    // }
}
