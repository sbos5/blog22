<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Segment;
use App\Form\SegmentFormBuilder;
use Kris\LaravelFormBuilder\FormBuilder;

use Illuminate\Routing\Controller;
class SegmentController extends Controller
{
    public function index()
    {
      $segm=Db::table('segments')->get(); 
      return view('segment/s_show', compact('segm'));
    }
      public function created(FormBuilder $formBuilder, Request $request)
    {
        $form = $formBuilder->create('App\Form\SegmentFormBuilder', [
            'method' => 'POST',
           'url' => route('stored')
            
       ]);
       

        return view('segment\s_st', compact('form'));
    }
      public function deleted($id)
      {
          $segm=DB::table('segments')->delete($id);
                  
          return view('segment/s_show');
          
      }
       public function stored(Request $request)
       {
              Segment::create([
        
        'segment'=>$request->input('segment') ,     
    ]);

    return redirect('/segm');
           
       }
       public function edit()
       {
           
       }
}
