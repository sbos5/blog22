<?php

namespace App\Form;

use Kris\LaravelFormBuilder\Form;

class FormPersonsBilder extends Form
{
    public function buildForm()
    {
        $this
                
            ->add('name', 'text')
            ->add('surname', 'text')
            ->add('submit','submit');
    }
}
