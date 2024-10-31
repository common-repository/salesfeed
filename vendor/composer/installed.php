<?php return array(
    'root' => array(
        'name' => 'pronamic/wp-salesfeed',
        'pretty_version' => 'dev-main',
        'version' => 'dev-main',
        'reference' => 'aaf7e511ce6f7eb030c19ace3cec783b41a7be68',
        'type' => 'wordpress-plugin',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => false,
    ),
    'versions' => array(
        'composer/installers' => array(
            'pretty_version' => 'v1.12.0',
            'version' => '1.12.0.0',
            'reference' => 'd20a64ed3c94748397ff5973488761b22f6d3f19',
            'type' => 'composer-plugin',
            'install_path' => __DIR__ . '/./installers',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'pronamic/wp-salesfeed' => array(
            'pretty_version' => 'dev-main',
            'version' => 'dev-main',
            'reference' => 'aaf7e511ce6f7eb030c19ace3cec783b41a7be68',
            'type' => 'wordpress-plugin',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'roundcube/plugin-installer' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => '*',
            ),
        ),
        'shama/baton' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => '*',
            ),
        ),
    ),
);
