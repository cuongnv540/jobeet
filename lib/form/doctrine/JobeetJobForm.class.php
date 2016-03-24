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

  public function embedForms($params=array())
  {
    $this->embedExtendedJobInformationForm($params);
  }

  private function embedExtendedJobInformationForm($params)
  {
    $extendedJobInformation = Doctrine_Query::create()
      ->select('*')
      ->from("ExtendedJobInformation e")
      ->andWhere('e.job_id = ?', $this->getObject()->id)
      ->fetchOne();

    if (!$extendedJobInformation)
    {
      $extendedJobInformation = new ExtendedJobInformation();
    }

    $extendedJobInformationForm = new ExtendedJobInformationForm($extendedJobInformation);
    $extendedJobInformationForm->useFields(
      array(
        'title',
        'content',
    ));

    $extendedJobInformationForm->widgetSchema->setLabel('title', 'Title');
    $extendedJobInformationForm->widgetSchema->setLabel('content', 'Content');

    $this->embedForm('extended_job_infomation', $extendedJobInformationForm);
    $this->widgetSchema->setLabel('extended_job_infomation', 'Extended Area');
  }

  protected function doSave($con = null)
  {
    $extendedJobInformationForm = $this->getEmbeddedForm('extended_job_infomation');
    $extendedJobInformation = $extendedJobInformationForm->getObject();

    $job = $this->getObject();

    $extendedJobInformation->JobeetJob = $job;
    $extendedJobInformation->created_by = 'hihi1';

    parent::doSave($con);
  }
}
