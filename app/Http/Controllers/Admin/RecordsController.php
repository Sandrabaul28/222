<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Record;

class RecordsController extends Controller
{
    public function addRecords()
    {
    	return view('admin.records.addRecords',[
    		'title' => 'Add Records | Admin',
    		'pagetitle' => 'Add Records | Admin'

    	]);
    }
    public function category()
    {
        return view('admin.records.category',[
            'title' => 'Category | Admin',
            'pagetitle' => 'Category | Admin'

        ]);
    }
    public function allrecords()
    {
        $records = Record::OrderBy('id','ASC')
                        ->paginate(10);

        return view('admin.records.allrecords',[
            'pagetitle' => 'ALL RECORDS',
            'title' => 'ALL RECORDS',
            'records' => $records
        ]);
    }
    public function store(Request $request)
    {
        $saveRecords = new record;
        $saveRecords->title = $request->title;
        $saveRecords->description = $request->description;
        $saveRecords->date = $request->date;
        $saveRecords->files  = $request->files;
         // Check if the file was uploaded without errors
            if ($_FILES["image"]["error"] == UPLOAD_ERR_OK) {
                
                // Specify the directory where you want to save the uploaded file
                $target_dir = "images/records/";
                
                // Create the directory if it doesn't exist
                if (!file_exists($target_dir)) {
                    mkdir($target_dir, 0777, true);
                }

                // Get the temporary name of the file
                $temp_name = $_FILES["image"]["tmp_name"];
                
                // Generate a unique name for the file
                $target_file = $target_dir . uniqid() . '_' . basename($_FILES["image"]["name"]);
                
                // Move the file to the desired location
                if (move_uploaded_file($temp_name, $target_file)) {
                    $saveRecords->img =  $target_file;
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            } else {
                echo "Error: " . $_FILES["image"]["error"];
            }
        $saveRecords->files  = $request->files;


        if ($saveRecords->save()) {
            return redirect()->back();
        }
    }
    public function searchtitle(Request $resquest)
    {
        $record = Record::where('title', $resquest->title)->first();
        return json_encode($record);
    }
}

