<?php

$vendorDir = dirname(__DIR__);

return array (
  'abexto/yii2-logeia-common' => 
  array (
    'name' => 'abexto/yii2-logeia-common',
    'version' => '9999999-dev',
  ),
  'abexto/yii2-logeia-doctrine-common' => 
  array (
    'name' => 'abexto/yii2-logeia-doctrine-common',
    'version' => '9999999-dev',
    'alias' => 
    array (
      '@abexto/logeia/yii/common' => $vendorDir . '/abexto/yii2-logeia-doctrine-common/src',
      '@abexto/logeia/yii/common/tests' => $vendorDir . '/abexto/yii2-logeia-doctrine-common/tests',
    ),
  ),
);
