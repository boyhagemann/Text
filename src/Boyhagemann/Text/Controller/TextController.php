<?php

namespace Boyhagemann\Text\Controller;

use Boyhagemann\Form\FormBuilder;

class TextController extends \BaseController
{
	public function textarea($text)
	{
		return $text;
	}

	public function textareaConfig(FormBuilder $fb)
	{
		$fb->textarea('text')->label('Text')->required();
	}

	public function heading($text)
	{
		return $text;
	}

	public function headingConfig(FormBuilder $fb)
	{
		$fb->select('heading')->label('Heading')->choices(array('h1' => 'Biggest', 'h2' => 'Big', 'h3' => 'Medium'));
		$fb->textarea('text')->label('Text')->required();
	}
}

