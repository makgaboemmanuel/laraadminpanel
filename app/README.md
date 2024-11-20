
php artisan server --port=8085
php artisan migrate:fresh
open-admin.org/docs/en/installation

composer require open-admin-org/open-admin

php artisan vendor:publish --provider="OpenAdmin\Admin\AdminServiceProvider"

php artisan admin:install

https://open-admin.org/docs/en/quick-start

composer require open-admin-ext/helpers

php artisan admin:import helpers

php artisan admin:import helpers




http://your-host/admin/ in browser,use username admin and password admin to login

create the Repo on Git Cloud

git init

git remote add origin https://github.com/makgaboemmanuel/laraadminpanel.git

git switch --create main 

git add .

git push --set-upstream origin main

git push -u origin main

    

