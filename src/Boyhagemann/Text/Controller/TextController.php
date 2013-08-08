<?php

namespace Boyhagemann\Text\Controller;

use Boyhagemann\Crud\CrudController;
use Boyhagemann\Form\FormBuilder;
use Boyhagemann\Model\ModelBuilder;
use Boyhagemann\Overview\OverviewBuilder;

class TextController extends \BaseController
{
	public function text()
	{

	}

	public function textPortlet(FormBuilder $fb)
	{
		$fb->textarea('text')->label('Text')->required();
	}
}

