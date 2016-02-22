<?php

/**
 * ExtendedJobInformation form base class.
 *
 * @method ExtendedJobInformation getObject() Returns the current form's model object
 *
 * @package    jobeet
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseExtendedJobInformationForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'job_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('JobeetJob'), 'add_empty' => false)),
      'title'      => new sfWidgetFormTextarea(),
      'content'    => new sfWidgetFormTextarea(),
      'created_by' => new sfWidgetFormInputText(),
      'updated_by' => new sfWidgetFormInputText(),
      'created_at' => new sfWidgetFormDateTime(),
      'updated_at' => new sfWidgetFormDateTime(),
      'deleted_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'job_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('JobeetJob'))),
      'title'      => new sfValidatorString(array('max_length' => 1000, 'required' => false)),
      'content'    => new sfValidatorString(array('max_length' => 1000, 'required' => false)),
      'created_by' => new sfValidatorString(array('max_length' => 32, 'required' => false)),
      'updated_by' => new sfValidatorString(array('max_length' => 32, 'required' => false)),
      'created_at' => new sfValidatorDateTime(),
      'updated_at' => new sfValidatorDateTime(),
      'deleted_at' => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('extended_job_information[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ExtendedJobInformation';
  }

}
