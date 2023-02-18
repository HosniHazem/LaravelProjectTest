<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeekDayRowController extends Controller
{
    public function show($id)
    {

        $item =WeekDaysRow::find($id);
        if($item){

        return response()->json(['WeekDaysRow'=>$item,'status' => 200], 200);
        }
    else
    {
    return response()->json(['message'=>'not found','status' => 404], 404);
    }
    }

    public function index()
    {

        $item =WeekDaysRow::all();

        return response()->json(['WeekDaysRow'=>$item,'status' => 200], 200);
    }

    public function store(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'days' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'validate_err' => $validator->getMessageBag(),
            ]);
        } else {
        $item =new WeekDaysRow();
        $item->days=$req->days;
        $item->save();
        return response()->json(['message'=>'done', 'status' => 200]);

        }
    }
    public function update(Request $req,$id)
    {

        $validator = Validator::make($req->all(), [
            'days' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'validate_err' => $validator->getMessageBag(),
            ]);
        } else {
        $item =WeekDaysRow::find($id);

        if($item){
        $item->days=$req->days;
        $item->update();
        return response()->json(['message'=>'done','status' => 200]);
                }
                else
                {
                return response()->json(['message'=>'not done','status' => 404]);
                }
            }
    }
    public function destroy($id)
    {

        $item =WeekDaysRow::find($id);
        if($item){
        $item->delete();
        return response()->json(['message'=>'deleted'], 200);
                }
                else
                {
                return response()->json(['message'=>'not deleted'], 404);
                }
    }
}
