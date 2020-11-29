## Steps to get the app
1. Clone the app to a local system directory
2. Checkout to the <strong>master</strong> branch
3. Update the database credentials in .env file
4. Run <strong>php artisan key:generate</strong> to get the env key
5. Give write permission to storage/ directory manually or by running <strong>chmod -R 777 storage</strong>
6. Run <strong>composer install</strong> to install all the dependencies
7. Run <strong>php artisan migrate</strong> to 
8. Run <strong>php artisan db:seed --class=CousrseSeeder</strong>. This will seed all the demo courses to the table
9. Run <strong>php artisan db:seed --class=StudentSeeder</strong>. This will seed all the demo students to the table
10. Finally run <strong>php artisan serve</strong> to start the Laravel server
11. Visit <strong>http://localhost:8000</strong> to see the application
