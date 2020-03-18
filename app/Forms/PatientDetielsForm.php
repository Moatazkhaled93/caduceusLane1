<?php

namespace App\Forms;

use App\Pain;
use Kris\LaravelFormBuilder\Form;

class PatientDetielsForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('frist_name', 'text')
            ->add('last_name', 'text')
            ->add('date_of_birth', 'date')
            ->add('phone', 'number')
            ->add('country', 'select', [
                'choices' => ['egypt' => 'Egypt', 'US' => 'US'],
                'selected' => 'egypt',
                'empty_value' => '=== Select country ==='
            ])
            ->add('occupation', 'text')
            ->add('gender', 'select', [
                'choices' => ['Male' => 'Male', 'Female' => 'Female'],
                'selected' => 'Male',
                'empty_value' => '=== Select gender ==='
            ])
            ->add('email', 'email')
            ->add('pain', 'select', [
                'choices' => ['1' => 'Heart attack', '2' => 'Slipped disc'],
                'selected' => '1',
                'empty_value' => '=== Select pain ==='
            ])
            ->add('submit', 'submit', ['label' => 'Save form'])
            ->add('clear', 'reset', ['label' => 'Clear form']);
    }
}
