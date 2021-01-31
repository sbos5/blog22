<?php

namespace App\Form;

use Kris\LaravelFormBuilder\Form;

class FormKlasaBilder extends Form
{
    public function buildForm()
    {
          $this
                
            ->add('name', 'text')
            ->add('profil', 'text')
            ->add('submit','submit');
    }
}
