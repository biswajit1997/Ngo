<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $id = Auth::user()->id;
        $data = User::where('id', $id)->first();
        $response = User::get();
        $deta  = [];
        foreach ($response as $item) {
            if ($item->role == 'ngo') {
                $deta[] = $item;
            }
        }
        return view('home', compact('data', 'deta'));
    }
    public function update(Request $request)
    {
        $id = Auth::user()->id;
        $org_ic_pdf = $request->org_ic_pdf->store('org_ic_pdf', 'public');
        $mip_pdf = $request->mip_pdf->store('mip_pdf', 'public');
        $org_logo = $request->org_logo->store('org_logo', 'public');
        $res = User::where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'district' => $request->district,
            'organization_name' => $request->organization_name,
            'organization_address' => $request->organization_address,
            'org_ic_pdf' => $org_ic_pdf,
            'address' => $request->address,
            'mobile' => $request->mobile,
            'mip_pdf' => $mip_pdf,
            'wp_number' => $request->wp_number,
            'md_org' => $request->md_org,
            'gender' => $request->gender,
            'org_logo' => $org_logo,

        ]);
        if ($res) {
            $data = User::where('id', $id)->first();
            return view('home', compact('data'));
        }
    }
    public function search(Request $request)
    {
        $id = Auth::user()->id;
        $data = User::where('id', $id)->first();
        $res = User::where('district', $request->dist)->get();
        $deta =[];
        foreach ($res as $item) {
            if ($item->role == 'ngo') {
                $deta[] = $item;
            }
        }
        return view('home', ['response' => $res,'data'=>$data,'deta'=>$deta]);
    }
     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Session::put('undo', $id);
        
        $res = User::destroy($id);
        if($res){
            return redirect()->back()->with(['message' => 'delete Successfull', 'alert' => 'alert-success']);
        
           }else{
            return redirect()->back()->with(['message' => 'delete faield', 'alert' => 'alert-danger']);
        
           }
    }

    public function restore($id){
       $res= User::withTrashed()
        ->where('id', $id)
        ->restore();
        $id = Auth::user()->id;
        $data = User::where('id', $id)->first();
        $response = User::get();
        $deta  = [];
        foreach ($response as $item) {
            if ($item->role == 'ngo') {
                $deta[] = $item;
            }
        }
       
        if($res){
            Session::forget('undo');
            return redirect()->route('home')->with(['message' => 'Restore Successfull', 'alert' => 'alert-success']);
        }
    }
}
