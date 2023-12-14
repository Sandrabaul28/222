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
    public function delete($id)
    {
        $record = Record::find($id);

        if ($record) {
            $record->delete();
            return redirect()->route('records.allrecords')->with('success', 'Records deleted successfully');
        } else {
            return redirect()->route('records.allrecords')->with('error', 'Records not found');
        }
    }
    public function edit(Request $request)
    {
        $record = record::find($request->id);

        return view('admin.records.edit', [
            'pagetitle' => 'Edit',
            'title' => 'Edit | Admin',
            'record' => $record
        ]);
    }
     public function update(Request $request)
    {
        $storeRecord = Record::find($request->id);
        $storeRecord->title = $request->title;
        $storeRecord->description = $request->description;
        $storeRecord->date = $request->date;
        $storeRecord->category = $request->category;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $target_dir = "images/records/";
            $target_file = $target_dir . uniqid() . '_' . basename($image->getClientOriginalName());
            $image->move($target_dir, $target_file);
            $storeRecord->img = $target_file;
        }

        if ($storeRecord->save()) {
            return redirect()->back()->with('success', 'Records updated successfully');
        } else {
            return redirect()->back()->with('error', 'Failed to update records');
        }
    }

    public function view(Request $request)
    {   
        $record = Record::where('id', $request->id)->first();
        return view('admin.records.view',[
            'title' => 'View | Admin',
            'pagetitle' => 'View | Admin',
            'record' => $record
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
        $saveRecords = new Record();
        $saveRecords->title = $request->title;
        $saveRecords->description = $request->description;
        $saveRecords->date = $request->date;
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
        
        $saveRecords->category = $request->category;

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

