<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Datas;
use Illuminate\Validation\Rules\RequiredIf;

class DatasController extends Controller
{
    public function index() {
        $datas = Datas::all();
    
        return view('datas', ['datas' => $datas]);
    }
    public function add() {
        return view('add');
    }
    public function create(Request $request){
        Datas::create([
            'codigo' => $request->input('codigo'),
            'descripcion' => $request->input('descripcion'),
            'cantidad' => $request->input('cantidad'),
            'precio' => $request->input('precio'),
            ]);
    
            return redirect('/');
    
    }
    public function edit($id){
        $datas = Datas::find($id);
        
        return view('edit', ['datas' => $datas]);
    }
    public function update(Datas $datas, Request $request){
        
        $datas->update([
            'codigo' => $request->input('codigo'),
            'descripcion' => $request->input('descripcion'),
            'cantidad' => $request->input('cantidad'),
            'precio' => $request->input('precio'),
        ]);

        return redirect('/'); 
    }
    public function destroy($id)
    {
        $datas = Datas::find($id);

        $datas->delete();

        return redirect('/');
    }
}
