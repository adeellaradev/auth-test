# Project Setup Instructions

Follow these steps to get the project up and running on your local environment.


First, clone the public repository to your local machine:

```bash
git clone https://github.com/adeellaradev/auth-test
```
Navigate into the project directory and install the necessary dependencies using Composer:

``composer install
``

After running composer install, you'll need to set up your environment file:

```bash
cp .env.example .env
```
Open the .env file and add your required settings, including:
```bash
RECAPTCHAV3_SITEKEY=your-site-key
RECAPTCHAV3_SECRET=your-site-secret
```
To generate these keys, go to the Google reCAPTCHA Console and register your domain. Make sure to add your domain in the console for the reCAPTCHA to work correctly.
## 2. Database Credentials
Don't forget to configure your database settings in the ``.env`` file:

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your-database-name
DB_USERNAME=your-database-username
DB_PASSWORD=your-database-password
```
## 3.  Run Necessary Commands
Once your ``.env`` file is set up, run the database migrations and some other neccsary commands:
```bash
php artisan key:generate
php artisan optimize:clear
php artisan migrate
```
