<?php
$EM_CONF[$_EXTKEY] = array(
    'title' => 'Qbus Extender Test [News-Subclass]',
    'description' => '',
    'category' => '',
    'author' => 'Benjamin Franzke',
    'author_email' => 'bfr@qbus.de',
    'author_company' => 'Qbus GmbH',
    'shy' => '',
    'priority' => '',
    'module' => '',
    'state' => 'alpha',
    'internal' => '',
    'uploadfolder' => '0',
    'createDirs' => '',
    'modify_tables' => '',
    'clearCacheOnLoad' => 0,
    'lockType' => '',
    'version' => '0.1',
    'constraints' => array(
        'depends' => array(
            'extbase' => '6.2',
            'fluid' => '6.2',
            'typo3' => '6.2',
            'news' => '3.0.0',
        ),
        'conflicts' => array(
        ),
        'suggests' => array(
        ),
    ),
    'autoload' => array(
        'psr-4' => array(
            'Qbus\\ExtenderTest\\' => 'Classes',
        ),
    ),
);
?>
