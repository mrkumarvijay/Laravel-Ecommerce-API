
# Laravel E-commerce API with CRUD functionality

This is a simple Laravel API with CRUD functionality for managing products in an E-commerce shopping website. The API is built using PHP, MySQL, Laravel and Git.

## Requirements
To run this API, you will need the following installed on your system:

    PHP 7.3 or later
    MySQL 5.7 or later
    Composer
    Laravel
    Git
## Installation

1. Clone this repository using Git:

       git clone https://github.com/mrkumarvijay/laravel-ecommerce-api.git

2. Change into the project directory:

       cd laravel-ecommerce-api

3. Install the required packages using Composer:

       composer install

4. Create a new MySQL database for the project.

5. Create a copy of the .env.example file and rename it to .env:

       cp .env.example .env

6. Update the database configuration settings in the .env file with your database credentials:

       DB_DATABASE=ecom
       DB_USERNAME=root
       DB_PASSWORD=

7. Generate a new application key:

        php artisan key:generate

8. Run the database migrations to create the necessary tables:

        php artisan migrate

9. Seed the database with some sample data (optional):

        php artisan db:seed

10. Start the Laravel development server:

        php artisan serve

11. You can now access the API by visiting http://localhost:8000/api/products in your web browser or using a tool like Postman.

## API Endpoints

This API exposes the following endpoints for managing products:

    GET /api/products: Fetch all products
    GET /api/products/{id}: Fetch a single product by ID
    POST /api/products: Create a new product
    PUT /api/products/{id}: Update an existing product by ID
    DELETE /api/products/{id}: Delete a product by ID

## Database Structure

The MySQL database for this project consists of a single table called products with the following fields:

    id: Unique identifier for the product (integer)
    name: Name of the product (string)
    description: Description of the product (string)
    price: Price of the product (float)
    quantity: Quantity of the product in stock (integer)
    created_at: Timestamp of when the product was created (datetime)
    updated_at: Timestamp of when the product was last updated (datetime)

## License

This project is licensed under the MIT License. See the LICENSE file for details.

git init
git add .
git commit -m "first commit"
git branch -M main
git remote add origin https://github.com/mrkumarvijay/Laravel-Ecommerce-API.git
git push -u origin main