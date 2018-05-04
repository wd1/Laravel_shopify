<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{

    public function getDashboard()
    {
        
        return view('admin.pages.dashboard');
    }
	
	public function getBlank()
    {
        return view('admin.pages.blank');
    }

    public function upload(Request $request)
    {
        $this->validate($request, [

            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);


        $image = $request->file('file');

        $input['imagename'] = time().'.'.$image->getClientOriginalExtension();

        $destinationPath = '../../public_html/nymbl.io/dashboard/library';

        $image->move($destinationPath, $input['imagename']);

        return back()->with('success','Image Upload successful');
    }
}
