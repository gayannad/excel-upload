# Laravel import data from csv

### Task Description:

- Laravel application that allows users to upload an Excel file 
- Upon uploading, read the contents of the Excel file and store the data in a database.

## Requirements

- PHP  >=8.2
- Laravel 12
- Composer
- Mysql or Sqlite


## Installation & configurations

1. **Clone the repo**
   ```bash
   git clone https://github.com/gayannad/excel-upload.git
   cd excel-upload


2. **Install dependencies**
   ```bash
   composer install


3. **Configure environment**
   ```bash
    cp .env.example .env
    php artisan key:generate

4. **Run migrations and seeders**
   ```bash
    php artisan migrate

5. **Serve the app**
   ```bash
    php artisan serve

6. **Run queue worker**
   ```bash
    php artisan queue:work


   
