<?php

namespace App\Http\Controllers;

use App\Models\Classs;
use Illuminate\Http\Request;

class ClasssController extends Controller
{
    public function index()
    {
        $user = Classs::get();
        return response()->json($user, 200);
    }
    public function create(Request $request)
    {
        $user = Classs::create($request->all());
        if ($user) {
            # code...
            return response()->json($user, 200);
        }
        return response()->json(['error' => "حدث خطاء اثناء انشاء السيشن لم يتم انشائه تحقق من البينات واعد امحاولة"], 200);
    }
    public function delete(string $id)
    {
        $class = Classs::find($id);
        if ($class) {
            $class->delete();
            return response()->json(['delete' => "تم حذف السيشن"], 200);
        }
        return response()->json(['error' => "لم يتم حذف السيشن"], 200);
    }
}
