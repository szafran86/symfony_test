# symfony_test

To run the symfony_test aplication fallow this steps:

1. Clone this repository to your local
2. Set your database info in .env file
  
    `DATABASE_URL="mysql://[YOUR_USERNAME]:[YOUR_PASSWORD]@[HOST]:[PORT]/[YOUR_DB_NAME]"`
    
3. In terminal go to your project directory and run:

    1. `composer install`
    2. `php bin/console doctrine:database:create`
    3. `php bin/console doctrine:migrations:migrate`
    4. `php bin/console doctrine:fixtures:load`
    5. `symfony serve`
    
4. Open your browser and navigate to `http://localhost:8000/`.  

5. To login as Admin User go to `http://localhost:8000/login` and use below data:
    - login: **`admin@admin.pl`**
    - password: **`admin`**
    
Done!
    
