<?php

namespace App;

use Kris\LaravelFormBuilder\Form;

class klasa extends Form
{
    public function buildForm()
    {
        $this
                
            ->add('name', 'text')
            ->add('profil', 'text')
            ->add('submit','submit');
    }
}
