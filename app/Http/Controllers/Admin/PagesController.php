<?php

namespace App\Http\Controllers\Admin;

use App\Models\Upload;

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

    public function getAbout()
    {
        return view('admin.pages.about');
    }

    public function getPrivacy()
    {
        return view('admin.pages.privacy');
    }

    public function getTerms()
    {
        return view('admin.pages.terms');
    }

    public function getBilling()
    {
        return view('admin.pages.billing');
    }

    public function getAPIV1()
    {
        $obj = [
            'id' => auth()->user()->id,
            'email' => auth()->user()->email
        ];
        echo json_encode($obj);
    }
    public function upload(Request $request)
    {
        $this->validate($request, [

            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        $image = $request->file('file');
        
        $input['imagename'] = pathinfo($image->getClientOriginalName(),PATHINFO_FILENAME);//$image->getClientOriginalExtension()
        $input['imageext'] = pathinfo($image->getClientOriginalName(),PATHINFO_EXTENSION);
        $destinationPath = 'library/'.(auth()->user()->id+10000000);

        //$count = Upload::where('userid', '=', auth()->user()->id)->where('image_name', '=', $image->getClientOriginalName())->count();
        // $destinationPath = '../../public_html/nymbl.io/dashboard/library';
        $newpath = $destinationPath.'/'.$input['imagename'].'.'.$input['imageext'];
        $newname = $input['imagename'].'.'.$input['imageext'];
        $counter = 0;
        while (file_exists($newpath)) {
            $newname = $input['imagename'] .'('. $counter .').'. $input['imageext'];
            $newpath = $destinationPath.'/'.$newname;
            $counter++;
        }
        $image->move($destinationPath, $newname);
        $upload =  Upload::create([
            'userid' => (auth()->user()->id),
			'image_name' => $newname
        ]);
        return back()->with('success','Image Upload successful');
    }

    public function download()
    {
        $dir = 'library/'.(auth()->user()->id+10000000);
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
                "id":'. $i.',
                "img_url": "'.$dir.'/'.$files1[$i].'",
                "filename": "'.$files1[$i].'",
                "Country": "China",
                "ShipCountry": "CN",
                "ShipCity": "Jim Brown",
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
                "id":'. $i.',
                "img_url": "'.$dir.'/'.$files1[count($files1)-1].'",
                "filename": "'.$files1[$i].'",
                "OrderID": "61715-075",
                "Country": "China",
                "ShipCountry": "CN",
                "ShipCity": "Jim Brown",
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
