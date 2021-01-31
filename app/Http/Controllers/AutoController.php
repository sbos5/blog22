<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Auto;
use App\Form\AutoFormBuilder;
use Kris\LaravelFormBuilder\FormBuilder;
class AutoController extends Controller
{
 
    public function index() 
    {
       $auto=Auto::all();
        return view('auto\show_auto',compact('auto'));
    }
    //
    public function show(int $id) 
    {
       $auto=Auto::find($id);
        return view('auto\show',compact('auto'));
    }
    public function ddelete(int $id) 
    {
       Auto::find($id)->delete();
       $auto=Auto::all();
         return view('auto\show_auto',compact('auto'));
    }
    
     public function create(FormBuilder $formBuilder, Request $request)
    {
        $form = $formBuilder->create('App\Form\AutoFormBuilder', [
            'method' => 'POST',
           'url' => route('auto_store')
            
       ]);
       

        return view('auto\auto_cr', compact('form'));
    }
     public function store(Request $request)
{
    
         Auto::create([
        'marka' => $request->input('marka'),
        'model' => $request->input('model'),
        'segment_id'=>$request->input('segment_id') ,     
    ]);

    return redirect('show');
}
     public function update(FormBuilder $formBuilder, Request $request,int $id)
    {
         $auto1=Auto::find($id);
        $form = $formBuilder->create('App\Form\AutoFormBuilder', [
            'method' => 'Post',
           'url' => route('auto_ed'),
            'model'=>$auto1,
            
       ]);
       

        return view('auto\auto_up', compact('form'));
    }
    public function up(Request $request) 
    {
             $auto1 =Auto::find($request->input('id'));
            $auto1->marka = $request->input('marka');
            $auto1->model      = $request->input('model');
            $auto1->segment_id =$request->input('segment_id');
           // $auto1->method="update";
            $auto1->save();
        return redirect('show');
    }
    
      
    }
    

