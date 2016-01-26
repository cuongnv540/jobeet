<?php

/**
 * JobeetJob form.
 *
 * @package    jobeet
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class JobeetJobForm extends BaseJobeetJobForm
{
  public function configure()
  {
    $this->useFields(array(
      'category_id',
      'type',
      'company',
      'logo',
      'url',
      'position',
      'location',
      'description',
      'how_to_apply',
      'token',
      'is_public',
      'is_activated',
      'email',
      'expires_at',
    ));

    $this->setWidget('type', new sfWidgetFormChoice(array(
      'choices' => sfConfig::get('app_job_type_job'),
      'expanded' => false,
      'multiple' => false,
    )));

    $this->setValidator('type', new sfValidatorChoice(array(
      'choices' => array_keys(sfConfig::get('app_job_type_job')),
      'required' => true,
    )));

    $this->setValidator('email', new PrValidatorEmail(array(
      'min_length' => 10,
    )));

    $this->widgetSchema->setLabels(array(
      'url' => 'Company url',
      'logo' => 'company logo',
    ));

  }
}
