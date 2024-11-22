the script in discussion will be accessed via a REST API endpoint, in this project this is the endpoint below:
- http://127.0.0.1:8085/api/runBackgroundJob
- the endpoint performs the POST operation passing the data to the script via the controller of the Laravel Application 

The System requirements:
    Postman
    VS Studio Code
    PHP 7.4
    Composer version 2.0.11 2021-02-24 14:57:23
    Xampp 

Please run the commands below in sequence

composer create-project laravel/laravel laraadminpanel 8.0 
php artisan server --port=8085
php artisan migrate:fresh
open-admin.org/docs/en/installation

composer require open-admin-org/open-admin

php artisan vendor:publish --provider="OpenAdmin\Admin\AdminServiceProvider"

php artisan admin:install

open the following website from the browser:  https://open-admin.org/docs/en/quick-start

Run the commands below as well in sequence

composer require open-admin-ext/helpers

php artisan admin:import helpers

php artisan admin:import helpers

To log into the Admin Panel, open the following endpoint: 
    http://your-host/admin/ in browser,use username admin and password admin to login


php artisan make:controller JobExecuteController
    create the class: Job and add the methods: 
        saveFile
        downloadFiles 
        uploadFiles
        getter methods for all the private fields as well as the contructor


# please change the directory name throught the variable: log_directory



create the Repo on Git Cloud

git init

git remote add origin https://github.com/makgaboemmanuel/laraadminpanel.git

git switch --create main 

git add .

git push --set-upstream origin main

git push -u origin main

Please amend the variabe: $log_directory inside the file: code_solution/Job.php to point to your local destination      

Best case scenarion would be screenshare and present the solution
