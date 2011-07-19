<?php

$package->license = 'GPL';
$compatible->license = 'GPL';

/**
 * Extra package.xml settings such as dependencies.
 * More information: http://pear.php.net/manual/en/pyrus.commands.make.php#pyrus.commands.make.packagexmlsetup
 */
/**
 * for example:
$package->dependencies['required']->package['pear2.php.net/PEAR2_Autoload']->save();
$package->dependencies['required']->package['pear2.php.net/PEAR2_Exception']->save();
$package->dependencies['required']->package['pear2.php.net/PEAR2_MultiErrors']->save();
$package->dependencies['required']->package['pear2.php.net/PEAR2_HTTP_Request']->save();

$compatible->dependencies['required']->package['pear2.php.net/PEAR2_Autoload']->save();
$compatible->dependencies['required']->package['pear2.php.net/PEAR2_Exception']->save();
$compatible->dependencies['required']->package['pear2.php.net/PEAR2_MultiErrors']->save();
$compatible->dependencies['required']->package['pear2.php.net/PEAR2_HTTP_Request']->save();
*/

$package->dependencies['required']->package['pear.erebot.net/Erebot_Module_TriggerRegistry']->save();
$package->dependencies['required']->package['pear.erebot.net/Erebot_Module_IrcTracker']->save();
$compatible->dependencies['required']->package['pear.erebot.net/Erebot_Module_TriggerRegistry']->save();
$compatible->dependencies['required']->package['pear.erebot.net/Erebot_Module_IrcTracker']->save();

