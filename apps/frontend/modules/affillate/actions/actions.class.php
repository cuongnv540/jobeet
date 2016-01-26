<?php

/**
 * affillate actions.
 *
 * @package    jobeet
 * @subpackage affillate
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class affillateActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->jobeet_affiliates = Doctrine_Core::getTable('JobeetAffiliate')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->jobeet_affiliate = Doctrine_Core::getTable('JobeetAffiliate')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->jobeet_affiliate);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new JobeetAffiliateForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new JobeetAffiliateForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($jobeet_affiliate = Doctrine_Core::getTable('JobeetAffiliate')->find(array($request->getParameter('id'))), sprintf('Object jobeet_affiliate does not exist (%s).', $request->getParameter('id')));
    $this->form = new JobeetAffiliateForm($jobeet_affiliate);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($jobeet_affiliate = Doctrine_Core::getTable('JobeetAffiliate')->find(array($request->getParameter('id'))), sprintf('Object jobeet_affiliate does not exist (%s).', $request->getParameter('id')));
    $this->form = new JobeetAffiliateForm($jobeet_affiliate);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($jobeet_affiliate = Doctrine_Core::getTable('JobeetAffiliate')->find(array($request->getParameter('id'))), sprintf('Object jobeet_affiliate does not exist (%s).', $request->getParameter('id')));
    $jobeet_affiliate->delete();

    $this->redirect('affillate/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $jobeet_affiliate = $form->save();

      $this->redirect('affillate/edit?
Deprecated: preg_replace(): The /e modifier is deprecated, use preg_replace_callback instead in /var/www/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php on line 362

Call Stack:
    0.0002     233848   1. {main}() /var/www/jobeet/symfony:0
    0.0026     465920   2. include('/var/www/jobeet/lib/vendor/symfony/lib/command/cli.php') /var/www/jobeet/symfony:14
    0.0585    5631976   3. sfSymfonyCommandApplication->run() /var/www/jobeet/lib/vendor/symfony/lib/command/cli.php:20
    0.0600    5640240   4. sfTask->runFromCLI() /var/www/jobeet/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.0601    5642280   5. sfBaseTask->doRun() /var/www/jobeet/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.0639    6169280   6. sfDoctrineGenerateModuleTask->execute() /var/www/jobeet/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    0.0675    6855144   7. sfDoctrineGenerateModuleTask->executeGenerate() /var/www/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:98
    0.0677    6872880   8. sfGeneratorManager->generate() /var/www/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:117
    0.0687    7061144   9. sfModelGenerator->generate() /var/www/jobeet/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    0.1912    9130536  10. sfGenerator->generatePhpFiles() /var/www/jobeet/lib/vendor/symfony/lib/generator/sfModelGenerator.class.php:61
    0.2856   11340904  11. sfGenerator->evalTemplate() /var/www/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.2860   11367616  12. require('/var/www/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/actions/actions.class.php') /var/www/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.2883   11377336  13. include('/var/www/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/parts/processFormAction.php') /var/www/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/actions/actions.class.php:30
    0.2883   11377336  14. sfModelGenerator->getPrimaryKeyUrlParams() /var/www/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/parts/processFormAction.php:11
    0.2883   11377744  15. sfDoctrineGenerator->getColumnGetter() /var/www/jobeet/lib/vendor/symfony/lib/generator/sfModelGenerator.class.php:173
    0.2883   11377744  16. sfInflector::camelize() /var/www/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/generator/sfDoctrineGenerator.class.php:100
    0.2883   11378232  17. sfToolkit::pregtr() /var/www/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.2883   11379224  18. preg_replace() /var/www/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:362


Deprecated: preg_replace(): The /e modifier is deprecated, use preg_replace_callback instead in /var/www/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php on line 362

Call Stack:
    0.0002     233848   1. {main}() /var/www/jobeet/symfony:0
    0.0026     465920   2. include('/var/www/jobeet/lib/vendor/symfony/lib/command/cli.php') /var/www/jobeet/symfony:14
    0.0585    5631976   3. sfSymfonyCommandApplication->run() /var/www/jobeet/lib/vendor/symfony/lib/command/cli.php:20
    0.0600    5640240   4. sfTask->runFromCLI() /var/www/jobeet/lib/vendor/symfony/lib/command/sfSymfonyCommandApplication.class.php:76
    0.0601    5642280   5. sfBaseTask->doRun() /var/www/jobeet/lib/vendor/symfony/lib/task/sfTask.class.php:97
    0.0639    6169280   6. sfDoctrineGenerateModuleTask->execute() /var/www/jobeet/lib/vendor/symfony/lib/task/sfBaseTask.class.php:68
    0.0675    6855144   7. sfDoctrineGenerateModuleTask->executeGenerate() /var/www/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:98
    0.0677    6872880   8. sfGeneratorManager->generate() /var/www/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/task/sfDoctrineGenerateModuleTask.class.php:117
    0.0687    7061144   9. sfModelGenerator->generate() /var/www/jobeet/lib/vendor/symfony/lib/generator/sfGeneratorManager.class.php:113
    0.1912    9130536  10. sfGenerator->generatePhpFiles() /var/www/jobeet/lib/vendor/symfony/lib/generator/sfModelGenerator.class.php:61
    0.2856   11340904  11. sfGenerator->evalTemplate() /var/www/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.2860   11367616  12. require('/var/www/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/actions/actions.class.php') /var/www/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.2883   11377336  13. include('/var/www/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/parts/processFormAction.php') /var/www/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/actions/actions.class.php:30
    0.2883   11377336  14. sfModelGenerator->getPrimaryKeyUrlParams() /var/www/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/parts/processFormAction.php:11
    0.2883   11377744  15. sfDoctrineGenerator->getColumnGetter() /var/www/jobeet/lib/vendor/symfony/lib/generator/sfModelGenerator.class.php:173
    0.2883   11377744  16. sfInflector::camelize() /var/www/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/generator/sfDoctrineGenerator.class.php:100
    0.2883   11378232  17. sfToolkit::pregtr() /var/www/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.2883   11379224  18. preg_replace() /var/www/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:362

id='.$jobeet_affiliate->getId());
    }
  }
}
