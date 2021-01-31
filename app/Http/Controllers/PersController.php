<?php

namespace App\Http\Controllers;
use App\Form\FormPersonsBilder;
use Illuminate\Http\Request;
use Illuminate\Http\Reesponse;
use Kris\LaravelFormBuilder\FormBuilder;
use App\Models\Person;
use Illuminate\Routing\Controller;

class PersController extends Controller
{
   public function created(FormBuilder $formBuilder, Request $request)
    {
        $form = $formBuilder->create('App\Form\FormPersonsBilder', [
            'method' => 'POST',
           'url' => route('person')
            
       ]);
       

        return view('person', compact('form'));
     //  if(($_POST['surname']!=null) &&( $_POST['name']!=null))
        
        // Person::create(response(['name', 'surname']));
         Person::create(['name'=>'jakub',
             'surname'=>'kowal']);
        
    }
}
