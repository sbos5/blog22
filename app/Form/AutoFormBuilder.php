<?php

namespace App\Form;
use App\Models\Segment;
use Kris\LaravelFormBuilder\Form;
use App\Form\SegmentFormBuilder;
class AutoFormBuilder extends Form
{
    public function buildForm()
    {
      
        $this
            ->add('id','hidden')    
            ->add('marka', 'text')
            ->add('model', 'text')
            ->add('segment_id', 'entity', [
                'class' => 'App\Models\Segment',
               'property'=>'segment',
               
                ]) 
            ->add('submit','submit');
    }
}
