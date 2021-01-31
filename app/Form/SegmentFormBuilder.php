<?php

namespace App\Form;
use App\Models\Segment;
use Kris\LaravelFormBuilder\Form;

class SegmentFormBuilder extends Form
{
    public function buildForm()
    {
        $this
            ->add ('id','hidden') 
            ->add('segment', 'text')
            ->add('submit','submit');
    }
}
