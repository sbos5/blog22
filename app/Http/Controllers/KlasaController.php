<?php

namespace App\Http\Controllers;
use App\Form\FormKlasaBilder;
use Illuminate\Http\Request;
use Illuminate\Http\Reesponse;
use Kris\LaravelFormBuilder\FormBuilder;
use App\Models\kLasa;
use Illuminate\Routing\Controller;


class KlasaController extends Controller

  {
    
     /* Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $klasa= klasa::all();
      return view('base',compact('klasa'));
    }
    
   public function created(FormBuilder $formBuilder, Request $request)
    {
        $form = $formBuilder->create('App\Form\FormKLasaBilder', [
            'method' => 'POST',
           'url' => route('klasa')
            
       ]);
        klasa::create(['name'=>'1C',
             'profil'=>'match']);

        return view('klas', compact('form'));
     //  if(($_POST['surname']!=null) &&( $_POST['name']!=null))
        
        // Person::create(response(['name', 'surname']));
        
        
    }
}

