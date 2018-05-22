<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

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

    public function getDesignLibrary()
    {
        return view('admin.pages.designlibrary');
    }

    public function getFAQ()
    {
        return view('admin.pages.faq');
    }

    public function upload(Request $request)
    {
        $this->validate($request, [

            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        $image = $request->file('file');

        $input['imagename'] = time().'.'.$image->getClientOriginalExtension();

        // $destinationPath = '../../public_html/nymbl.io/dashboard/library';
        $destinationPath = '../../nymbl.io/dashboard/library/'.(auth()->user()->id+10000000);

        $image->move($destinationPath, $input['imagename']);

        return back()->with('success','Image Upload successful');
    }

    public function download()
    {
        $dir = '../../nymbl.io/dashboard/library/'.(auth()->user()->id+10000000);
        $files1 = array_values(array_diff(scandir($dir), array('..', '.')));
        $filecount = 0;
        $files = glob($dir . "*");
        if ($files){
        $filecount = count($files);
        }
        // print_r($files1);
        echo '{
            "meta": {
                "page": 1,
                "pages": 1,
                "perpage": -1,
                "total": '.count($files1).',
                "sort": "asc",
                "field": "RecordID"
            },
            "data": [';
        $result='';
        for($i=0; $i<count($files1)-1; $i++) {
            $result=$result.'{
                "RecordID": 1,
                "img_url": "'.$dir.'/'.$files1[$i].'",
                "OrderID": "61715-075",
                "Country": "China",
                "ShipCountry": "CN",
                "ShipCity": "Tieba",
                "ShipName": "Collins, Dibbert and Hoeger",
                "ShipAddress": "746 Pine View Junction",
                "CompanyEmail": "nsailor0@livejournal.com",
                "CompanyAgent": "Nixie Sailor",
                "CompanyName": "Gleichner, Ziemann and Gutkowski",
                "Currency": "CNY",
                "Notes": "imperdiet nullam orci pede venenatis non sodales sed tincidunt eu felis fusce posuere felis sed lacus morbi",
                "Department": "Outdoors",
                "Website": "irs.gov",
                "Latitude": 35.0032213,
                "Longitude": 102.913526,
                "ShipDate": "2\/12\/2018",
                "PaymentDate": "2016-04-27 23:53:15",
                "TimeZone": "Asia\/Chongqing",
                "TotalPayment": "$246154.65",
                "Status": 3,
                "Type": 2,
                "Actions": null
            },';
        }
        $result=$result.'{
                "RecordID": 1,
                "img_url": "'.$dir.'/'.$files1[count($files1)-1].'",
                "OrderID": "61715-075",
                "Country": "China",
                "ShipCountry": "CN",
                "ShipCity": "Tieba",
                "ShipName": "Collins, Dibbert and Hoeger",
                "ShipAddress": "746 Pine View Junction",
                "CompanyEmail": "nsailor0@livejournal.com",
                "CompanyAgent": "Nixie Sailor",
                "CompanyName": "Gleichner, Ziemann and Gutkowski",
                "Currency": "CNY",
                "Notes": "imperdiet nullam orci pede venenatis non sodales sed tincidunt eu felis fusce posuere felis sed lacus morbi",
                "Department": "Outdoors",
                "Website": "irs.gov",
                "Latitude": 35.0032213,
                "Longitude": 102.913526,
                "ShipDate": "2\/12\/2018",
                "PaymentDate": "2016-04-27 23:53:15",
                "TimeZone": "Asia\/Chongqing",
                "TotalPayment": "$246154.65",
                "Status": 3,
                "Type": 2,
                "Actions": null
            }';
        echo $result.'    
             ]
         }';
    }
}
