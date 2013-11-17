<?php

namespace Boyhagemann\Text\FormElement;

use Boyhagemann\Form\Element\Hidden;

class Wysiwyg extends Hidden
{
    protected $view = 'text::element.test';

    protected $attributes = array(
        'class' => 'wysiwyg'
    );

}