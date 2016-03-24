<?php

/**
 * ExtendedJobInformation form.
 *
 * @package    jobeet
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ExtendedJobInformationForm extends BaseExtendedJobInformationForm
{
  public function configure()
  {
  	$this->validatorSchema['title'] = new sfValidatorString(array('max_length' => 1000, 'required' => true));
  	$this->validatorSchema['content'] = new sfValidatorString(array('max_length' => 1000, 'required' => true));
  }
}
