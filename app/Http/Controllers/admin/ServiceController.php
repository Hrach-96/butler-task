<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ServiceMainCategories;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ServiceController extends Controller
{
    protected $layoutFolder = "pages.admin.services.main_category";
    public function dashboard(){
        return view("{$this->layoutFolder}.dashboard");
    }
    public function service_main_category_list(){
        $userInfo = Auth::user();
        if($userInfo->userType == 'admin'){
            $serviceMainCategories = ServiceMainCategories::where('user_id',$userInfo['id'])->get();
        }
        else{
            $serviceMainCategories = ServiceMainCategories::all();
        }
        return view("{$this->layoutFolder}.list",compact('serviceMainCategories'));
    }
    public function service_main_category_add(Request $request){
        
        if($request->isMethod('post')){
            $validate = Validator::make($request->all(),[
                'name'=>'required',
            ]);
            if($validate->fails()){
                return redirect()->back();
            }
            ServiceMainCategories::create([
                'name' => $request->name,
                'user_id' => Auth::id(),
            ]);
            return redirect()->route('service.main.category.list');
        }
        return view("{$this->layoutFolder}.add");
    }
    public function service_main_category_delete(Request $request){
        $category = ServiceMainCategories::findOrFail($request->id);
        if($category){
            $category->delete();
            return redirect()->back();
        }
    }
    public function service_main_category_edit(Request $request){
        $category = ServiceMainCategories::where('id',$request->id)->first();
        if($request->isMethod('post')){
            $validate = Validator::make($request->all(),[
                'name'=>'required',
            ]);
            if($validate->fails()){
                return redirect()->back();
            }
            $category->name = $request->name;
            $category->save();
            return redirect()->route('service.main.category.list');
        }
        return view("{$this->layoutFolder}.edit",compact('category'));
    }
}
