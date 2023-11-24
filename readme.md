php artisan make:model Contact --migration
php artisan make:model Customer --migration
php artisan make:model Lead --migration
php artisan make:migration create_contacts_table
php artisan make:factory LeadFactory
php artisan make:factory CustomerFactory
php artisan make:seeder LeadsTableSeeder
php artisan make:seeder CustomersTableSeeder
php artisan migrate
php artisan db:seed --class=CustomersTableSeeder
php artisan db:seed --class=LeadsTableSeeder
php artisan make:controller ContactInjectionController
php artisan serve
php artisan make:test testItInjectsLeadToContactsTable


#Steps to follow
add database credentials in env file
db name : machine_test_salesdock

php artisan migrate
php artisan db:seed --class=CustomersTableSeeder
php artisan db:seed --class=LeadsTableSeeder
php artisan serve
http://127.0.0.1:8000/api/contacts?lead_id=1
http://127.0.0.1:8000/api/contacts?customer_id=1


