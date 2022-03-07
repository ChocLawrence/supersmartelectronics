<?php
namespace Deployer;

require 'recipe/laravel.php';

// Project name
set('application', 'sselectronics');

// Project repository
set('repository', 'git@github.com:ChocLawrence/supersmartelectronics.git');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', true); 

//set('use_relative_symlinks', false);

// Shared files/dirs between deploys 
add('shared_files', []);
add('shared_dirs', []);

// Writable dirs by web server 
add('writable_dirs', []);


// Hosts

host('supersmartelectronics.com')
    ->user('lawrence')
    ->identityFile('~/.ssh/sselectronics_deployerkey')
    ->set('deploy_path', '/var/www/html/sselectronics');    
    
// Tasks

task('build', function () {
    run('cd {{release_path}} && build');
    run('chmod -R 777 {{deploy_path}}/releases/');
});

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

// Migrate database before symlink new release.

before('deploy:symlink', 'artisan:migrate');

