<h1>Jobeet affiliates List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Url</th>
      <th>Email</th>
      <th>Token</th>
      <th>Is active</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($jobeet_affiliates as $jobeet_affiliate): ?>
    <tr>
      <td><a href="<?php echo url_for('affillate/show?
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
    0.2323    9134608  11. sfGenerator->evalTemplate() /var/www/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.2328    9170880  12. require('/var/www/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php') /var/www/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.2331    9172952  13. sfModelGenerator->getPrimaryKeyUrlParams() /var/www/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php:19
    0.2331    9173360  14. sfDoctrineGenerator->getColumnGetter() /var/www/jobeet/lib/vendor/symfony/lib/generator/sfModelGenerator.class.php:173
    0.2331    9173360  15. sfInflector::camelize() /var/www/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/generator/sfDoctrineGenerator.class.php:100
    0.2331    9173848  16. sfToolkit::pregtr() /var/www/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.2331    9174840  17. preg_replace() /var/www/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:362


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
    0.2323    9134608  11. sfGenerator->evalTemplate() /var/www/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.2328    9170880  12. require('/var/www/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php') /var/www/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.2331    9172952  13. sfModelGenerator->getPrimaryKeyUrlParams() /var/www/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php:19
    0.2331    9173360  14. sfDoctrineGenerator->getColumnGetter() /var/www/jobeet/lib/vendor/symfony/lib/generator/sfModelGenerator.class.php:173
    0.2331    9173360  15. sfInflector::camelize() /var/www/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/lib/generator/sfDoctrineGenerator.class.php:100
    0.2331    9173848  16. sfToolkit::pregtr() /var/www/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.2331    9174840  17. preg_replace() /var/www/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:362

id='.$jobeet_affiliate->getId()) ?>"><?php echo $jobeet_affiliate->get
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
    0.2323    9134608  11. sfGenerator->evalTemplate() /var/www/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.2328    9170880  12. require('/var/www/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php') /var/www/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.2338    9172952  13. sfInflector::camelize() /var/www/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php:19
    0.2338    9173440  14. sfToolkit::pregtr() /var/www/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.2338    9174432  15. preg_replace() /var/www/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:362


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
    0.2323    9134608  11. sfGenerator->evalTemplate() /var/www/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.2328    9170880  12. require('/var/www/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php') /var/www/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.2338    9172952  13. sfInflector::camelize() /var/www/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php:19
    0.2338    9173440  14. sfToolkit::pregtr() /var/www/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.2338    9174432  15. preg_replace() /var/www/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:362

Id() ?></a></td>
      <td><?php echo $jobeet_affiliate->get
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
    0.2323    9134608  11. sfGenerator->evalTemplate() /var/www/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.2328    9170880  12. require('/var/www/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php') /var/www/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.2344    9172952  13. sfInflector::camelize() /var/www/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php:22
    0.2344    9173440  14. sfToolkit::pregtr() /var/www/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.2344    9174432  15. preg_replace() /var/www/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:362


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
    0.2323    9134608  11. sfGenerator->evalTemplate() /var/www/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.2328    9170880  12. require('/var/www/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php') /var/www/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.2344    9172952  13. sfInflector::camelize() /var/www/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php:22
    0.2344    9173440  14. sfToolkit::pregtr() /var/www/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.2344    9174432  15. preg_replace() /var/www/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:362

Url() ?></td>
      <td><?php echo $jobeet_affiliate->get
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
    0.2323    9134608  11. sfGenerator->evalTemplate() /var/www/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.2328    9170880  12. require('/var/www/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php') /var/www/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.2349    9172952  13. sfInflector::camelize() /var/www/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php:22
    0.2349    9173440  14. sfToolkit::pregtr() /var/www/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.2349    9174432  15. preg_replace() /var/www/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:362


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
    0.2323    9134608  11. sfGenerator->evalTemplate() /var/www/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.2328    9170880  12. require('/var/www/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php') /var/www/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.2349    9172952  13. sfInflector::camelize() /var/www/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php:22
    0.2349    9173440  14. sfToolkit::pregtr() /var/www/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.2349    9174432  15. preg_replace() /var/www/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:362

Email() ?></td>
      <td><?php echo $jobeet_affiliate->get
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
    0.2323    9134608  11. sfGenerator->evalTemplate() /var/www/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.2328    9170880  12. require('/var/www/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php') /var/www/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.2355    9189336  13. sfInflector::camelize() /var/www/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php:22
    0.2355    9189824  14. sfToolkit::pregtr() /var/www/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.2355    9190816  15. preg_replace() /var/www/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:362


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
    0.2323    9134608  11. sfGenerator->evalTemplate() /var/www/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.2328    9170880  12. require('/var/www/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php') /var/www/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.2355    9189336  13. sfInflector::camelize() /var/www/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php:22
    0.2355    9189824  14. sfToolkit::pregtr() /var/www/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.2355    9190816  15. preg_replace() /var/www/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:362

Token() ?></td>
      <td><?php echo $jobeet_affiliate->get
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
    0.2323    9134608  11. sfGenerator->evalTemplate() /var/www/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.2328    9170880  12. require('/var/www/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php') /var/www/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.2361    9189336  13. sfInflector::camelize() /var/www/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php:22
    0.2361    9189824  14. sfToolkit::pregtr() /var/www/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.2361    9190816  15. preg_replace() /var/www/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:362


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
    0.2323    9134608  11. sfGenerator->evalTemplate() /var/www/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.2328    9170880  12. require('/var/www/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php') /var/www/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.2361    9189336  13. sfInflector::camelize() /var/www/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php:22
    0.2361    9189824  14. sfToolkit::pregtr() /var/www/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.2361    9190816  15. preg_replace() /var/www/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:362

IsActive() ?></td>
      <td><?php echo $jobeet_affiliate->get
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
    0.2323    9134608  11. sfGenerator->evalTemplate() /var/www/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.2328    9170880  12. require('/var/www/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php') /var/www/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.2366    9189336  13. sfInflector::camelize() /var/www/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php:22
    0.2366    9189824  14. sfToolkit::pregtr() /var/www/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.2366    9190816  15. preg_replace() /var/www/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:362


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
    0.2323    9134608  11. sfGenerator->evalTemplate() /var/www/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.2328    9170880  12. require('/var/www/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php') /var/www/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.2366    9189336  13. sfInflector::camelize() /var/www/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php:22
    0.2366    9189824  14. sfToolkit::pregtr() /var/www/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.2366    9190816  15. preg_replace() /var/www/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:362

CreatedAt() ?></td>
      <td><?php echo $jobeet_affiliate->get
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
    0.2323    9134608  11. sfGenerator->evalTemplate() /var/www/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.2328    9170880  12. require('/var/www/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php') /var/www/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.2437    9205720  13. sfInflector::camelize() /var/www/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php:22
    0.2437    9206208  14. sfToolkit::pregtr() /var/www/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.2437    9207200  15. preg_replace() /var/www/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:362


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
    0.2323    9134608  11. sfGenerator->evalTemplate() /var/www/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:67
    0.2328    9170880  12. require('/var/www/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php') /var/www/jobeet/lib/vendor/symfony/lib/generator/sfGenerator.class.php:84
    0.2437    9205720  13. sfInflector::camelize() /var/www/jobeet/lib/vendor/symfony/lib/plugins/sfDoctrinePlugin/data/generator/sfDoctrineModule/default/template/templates/indexSuccess.php:22
    0.2437    9206208  14. sfToolkit::pregtr() /var/www/jobeet/lib/vendor/symfony/lib/util/sfInflector.class.php:32
    0.2437    9207200  15. preg_replace() /var/www/jobeet/lib/vendor/symfony/lib/util/sfToolkit.class.php:362

UpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('affillate/new') ?>">New</a>
