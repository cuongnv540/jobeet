<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('affillate/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?
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
    0.2451    9135320  11. sfGenerator->evalTemplate() /var/www/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.2459    9166280  12. require('/var/www/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/_form.php') /var/www/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.2841   11371416  13. sfModelGenerator->getPrimaryKeyUrlParams() /var/www/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/_form.php:8
    0.2841   11371728  14. sfDoctrineGenerator->getColumnGetter() /var/www/jobeet/lib/vendor/symfony/lib/generator/sfModelGenerator.class.php:169
    0.2841   11371776  15. sfInflector::camelize() /var/www/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/generator/sfDoctrineGenerator.class.php:100
    0.2841   11372264  16. sfToolkit::pregtr() /var/www/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.2841   11373256  17. preg_replace() /var/www/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:362


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
    0.2451    9135320  11. sfGenerator->evalTemplate() /var/www/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.2459    9166280  12. require('/var/www/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/_form.php') /var/www/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.2841   11371416  13. sfModelGenerator->getPrimaryKeyUrlParams() /var/www/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/_form.php:8
    0.2841   11371728  14. sfDoctrineGenerator->getColumnGetter() /var/www/jobeet/lib/vendor/symfony/lib/generator/sfModelGenerator.class.php:169
    0.2841   11371776  15. sfInflector::camelize() /var/www/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/generator/sfDoctrineGenerator.class.php:100
    0.2841   11372264  16. sfToolkit::pregtr() /var/www/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.2841   11373256  17. preg_replace() /var/www/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:362

id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          &nbsp;<a href="<?php echo url_for('affillate/index') ?>">Back to list</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'affillate/delete?
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
    0.2451    9135320  11. sfGenerator->evalTemplate() /var/www/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.2459    9166280  12. require('/var/www/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/_form.php') /var/www/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.2848   11371416  13. sfModelGenerator->getPrimaryKeyUrlParams() /var/www/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/_form.php:29
    0.2848   11371728  14. sfDoctrineGenerator->getColumnGetter() /var/www/jobeet/lib/vendor/symfony/lib/generator/sfModelGenerator.class.php:169
    0.2848   11371776  15. sfInflector::camelize() /var/www/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/generator/sfDoctrineGenerator.class.php:100
    0.2848   11372264  16. sfToolkit::pregtr() /var/www/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.2848   11373256  17. preg_replace() /var/www/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:362


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
    0.2451    9135320  11. sfGenerator->evalTemplate() /var/www/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.2459    9166280  12. require('/var/www/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/_form.php') /var/www/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.2848   11371416  13. sfModelGenerator->getPrimaryKeyUrlParams() /var/www/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/_form.php:29
    0.2848   11371728  14. sfDoctrineGenerator->getColumnGetter() /var/www/jobeet/lib/vendor/symfony/lib/generator/sfModelGenerator.class.php:169
    0.2848   11371776  15. sfInflector::camelize() /var/www/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/generator/sfDoctrineGenerator.class.php:100
    0.2848   11372264  16. sfToolkit::pregtr() /var/www/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.2848   11373256  17. preg_replace() /var/www/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:362

id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form ?>
    </tbody>
  </table>
</form>
