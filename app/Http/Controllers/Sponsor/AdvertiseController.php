<?php

namespace App\Http\Controllers\Sponsor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class AdvertiseController extends Controller
{
    public function Show(Request $request){

       $userId = $request->session()->get('user_id');
       $spId = DB::table('sponsors')
        ->where('user_id',$userId)
        ->where('status',1)
        ->first();
        //dd($spId);

       $allAdvertise = DB::table('sponsor_banners')
        //->where('sponsor_Id', $spId)
        ->where('status', 1)
        ->get();
        // $allAdvertise = "test";
        // dd($allAdvertise);
        return view('Sponsor.ListofAdvertise')
        ->with('title', 'All Advertise | Sponsor')
        ->with('allAdvertise', $allAdvertise);

    }
    public function CreateAdd(Request $request){

        $userId = $request->session()->get('user_id');

        $sp = DB::table('sponsors')
        ->where('user_id',$userId)
        ->where('status',1)
        ->first();

        $validator = Validator::make($request->all(), [
            'advertise_title' => 'required|min:5',
            'image' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with([
                'error' => true,
                'message' => 'Required data missing.'
            ]);
        }else{

            $image = $request->file('image');
            $image_name=$image->getClientOriginalName();
            $image_ext=$image->getClientOriginalExtension();
            $image_new_name =strtoupper(Str::random(6));
            $image_full_name=$image_new_name.'.'.$image_ext;
            $upload_path='images/Sponsor/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            $imageData='images/Sponsor/'.$image_full_name;

            
            $data=array();
            $data['title']=$request->advertise_title;
            $data['image']=$imageData;
            $data['sponsor_Id']=$sp->id;
            $data['status']='2';

            $insert = DB::table('sponsor_banners')->insert($data);

            if($insert){
                return redirect()->back()->with([
                    'error' => false,
                    'message' => 'Create Successfully'
                ]);
            }else{
                return redirect()->back()->with([
                    'error' => true,
                    'message' => 'Something going wrong'
                ]);
            }
        }


    }

    public function UpdateAddInfo(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'editAddId' => 'required',
            'editTitle' => 'required|min:5',
            'editImage' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with([
                'error' => true,
                'message' => 'Required data missing.'
            ]);
            
        } else {

            $image = $request->file('editImage');
            $image_name=$image->getClientOriginalName();
            $image_ext=$image->getClientOriginalExtension();
            $image_new_name =strtoupper(Str::random(6));
            $image_full_name=$image_new_name.'.'.$image_ext;
            $upload_path='images/Sponsor/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            $imageData='images/Sponsor/'.$image_full_name;



            $add_id = $request->input('editAddId');
            //dd($imageData);
            
            $data=array();
            $data['title']=$request->input('editTitle');
            $data['image']=$imageData;
            $data['status']='2';
            

            $update= DB::table('sponsor_banners')
                            ->where('id',$add_id)
                            ->update($data);

                            
            if ($update) {
                return redirect()->back()->with([
                    'error' => false,
                    'message' => 'Edit successfully.'
                ]);
            } else {
                return redirect()->back()->with([
                    'error' => true,
                    'message' => 'Something went wrong.'
                ]);
            }
        }
        
    }

    public function UpdateStatus(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'status' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error' => true,
                'message' => 'Required data missing.'
            ]);
        } else {
            $id = $request->input('id');
            
            $data=array();
            $data['status']=$request->input('status');

            $update= DB::table('sponsor_banners')
                            ->where('id',$id)
                            ->update($data);

            if ($update) {
                return response()->json([
                    'error' => false,
                    'message' => 'Update successfully.'
                ]);
            } else {
                return response()->json([
                    'error' => true,
                    'message' => 'Something went wrong.'
                ]);
            }
        }
    }

    public function AddvetiseDelete(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error' => true,
                'message' => 'Required data missing.'
            ]);
        } else {
            $id = $request->input('id');

            $removed=DB::table('sponsor_banners')->where('id', $id)->delete();

            if ($removed) {
                return response()->json([
                    'error' => false,
                    'message' => 'Delete successfully.'
                ]);
            } else {
                return response()->json([
                    'error' => true,
                    'message' => 'Something went wrong.'
                ]);
            }
        }
    }

}
