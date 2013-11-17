<?php

namespace Boyhagemann\Text\FormElement;

use Boyhagemann\Form\Element\Hidden;

class Wysiwyg extends Hidden
{
    protected $view = 'text::element.wysiwyg';

    protected $attributes = array(
        'class' => 'wysiwyg'
    );

}