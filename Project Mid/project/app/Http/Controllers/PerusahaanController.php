<?php

namespace App\Http\Controllers;

use App\Models\Perusahaan;
use Illuminate\Http\Request;

class PerusahaanController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    function searching(Request $request){
        $data = Perusahaan::find($request->Name);
        return view('editKaryawan',['data'=>$data]);
    }

    function updatedata(Request $request){
        $request->validate([
            'Name' => 'required|min:5|max:20',
            'Age' => 'required|numeric|min:21|',
            'Address' => 'required|min:10|max:40',
            'Phone' => 'required|regex:/^08/|min:9|max:12'
        ], [
            'Name.required' => 'Name field cannot be empty.',
            'Name.min' => 'Name must contain at least 5 characters or more.',
            'Name.max' => 'Name must not exceed 20 characters.',

            'Address.required' => 'Address field cannot be empty.',
            'Address.min' => 'Address must contain at least 10 characters or more.',
            'Address.max' => 'Address must not exceed 40 characters.',

            'Age.required' => 'Age field cannot be empty.',
            'Age.min' => 'Age must be greater than 20',
            
            'Phone.required' => 'Phone field cannot be empty.',
            'Phone.regex' => 'Phone Number must be start by 08',
            'Phone.min' => 'Phone Number must contain 9-12 numbers',
            'Phone.max' => 'Phone Number must contain 9-12 numbers'
        ]);

        $data = Perusahaan::find($request->id);
        $data->Name=$request->Name;
        $data->Age=$request->Age;
        $data->Address=$request->Address;
        $data->Phone=$request->Phone;
        $data->save();
        return redirect('get-books');
    }

    function list(){
        $data = Perusahaan::all();
        return view('editKaryawan',['members'=>$data]);
    }

    function delete($id){
        $data = Perusahaan::find($id);
        $data->delete();
        return redirect('get-books');
    }

    function showdata(Request $request, $id){
        $data = Perusahaan::find($id);
        return view('editKaryawan',['data'=>$data]);
    }

    public function getValidate() {
        return view('createKaryawan');
    }
      
    public function postValidate(Request $request) {
        $request->validate([
            'Name' => 'required|min:5|max:20',
            'Age' => 'required|numeric|min:21|',
            'Address' => 'required|min:10|max:40',
            'Phone' => 'required|regex:/^08/|min:9|max:12'
        ], [
            'Name.required' => 'Name field cannot be empty.',
            'Name.min' => 'Name must contain at least 5 characters or more.',
            'Name.max' => 'Name must not exceed 20 characters.',

            'Address.required' => 'Address field cannot be empty.',
            'Address.min' => 'Address must contain at least 10 characters or more.',
            'Address.max' => 'Address must not exceed 40 characters.',

            'Age.required' => 'Age field cannot be empty.',
            'Age.min' => 'Age must be greater than 20',
            
            'Phone.required' => 'Phone field cannot be empty.',
            'Phone.regex' => 'Phone Number must be start by 08',
            'Phone.min' => 'Phone Number must contain 9-12 numbers',
            'Phone.max' => 'Phone Number must contain 9-12 numbers'
        ]);

        Perusahaan::create([
            'Name' => $request->Name,
            'Age' => $request->Age,
            'Address' => $request->Address,
            'Phone' => $request->Phone,
        ]);
        return redirect('get-books');
    }

    public function index()
    {
        return view('createKaryawan');
    }

    // public function getEmployee(){
    //     $perusahaans = Perusahaan::all();
    //     return view('viewEmployee', ['perusahaans' => $perusahaans]);
    // }

    public function getEmployee(Request $request){
        if($request->has('search')){
            $perusahaans = Perusahaan::where('Name','LIKE','%'.$request->search.'%')->orderBy('Name','ASC')->get();
        } else {
            $perusahaans = Perusahaan::orderBy('Name','ASC')->get();
        }
        return view('viewEmployee', ['perusahaans' => $perusahaans]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Perusahaan  $perusahaan
     * @return \Illuminate\Http\Response
     */
    public function show(Perusahaan $perusahaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Perusahaan  $perusahaan
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Perusahaan  $perusahaan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Perusahaan $perusahaan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Perusahaan  $perusahaan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perusahaan $perusahaan)
    {
        //
    }
}
