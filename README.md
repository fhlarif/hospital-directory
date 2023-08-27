## Getting Started

_Notes on Requirements:_

1. Minimum PHP 8.1 and above.
2. NPM and Composer installed with the latest version
3. If errors occurred during `composer install` or `npm install`, then remove the `package-lock.json` file and `composer.lock` file. If `vendor` or `node_modules` folders existed, remove them as well. Then perform the `install` command for `composer` and `npm`.

```bash
git clone https://github.com/fhlarif/hospital-directory.git
```

```bash
cd hospital-directory
```

```bash
cp .env.example .env
```

_**Note**: Make sure the .env file is modify to your local dev environment. For database, we are using MySQL._
_Example:_

_Connecting to MySQL_

```bash
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=remedy
DB_USERNAME=root
DB_PASSWORD=secret
```

```bash
composer install
```

```bash
npm install
```

```bash
php artisan key:generate
```

```bash
npm run build
```

_Migrate the tables:_

```bash
php artisan migrate
```

_Visit the url:_

```bash
http://localhost/hospital-directory/public
```
