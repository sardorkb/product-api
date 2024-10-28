# Product API

## Description
A Laravel-based API for managing products with user authentication and audit logging.  

**Created for interview by Sardorjon Mirzakarimov**

## Requirements
- PHP >= 8.0
- Composer
- Laravel 10
- MySQL

## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/sardorkb/product-api.git

2. Change to project repository
cd product-api

3. Install dependencies
    -composer install

4. Copy the example environment file and update the environment variables
    -cp .env.example .env

5. Generate the application key
    -php artisan key:generate

6. Run migrations
    -php artisan migrate

## Seeding the Database
    -php artisan db:seed


## API Response Examples

### User Authentication
![User Authentication Response](public/screenshots/login.png)
![User Authentication Response](public/screenshots/logout.png)

### Product Management

#### Create Product
![Create Product Response](public/screenshots/CreateProduct.png)

#### Get All Products
![Get Products Response](public/screenshots/getAllProduct.png)

#### Get Product by Id
![Get Product by Id Response](public/screenshots/getproductbyid.png)

#### Update Product
![Update Product Response](public/screenshots/updateProduct.png)

#### Delete Product
![Delete Product Response](public/screenshots/deleteProduct.png)

### Audit Logging
![Audit Logging Response](public/screenshots/auditlog.png)
