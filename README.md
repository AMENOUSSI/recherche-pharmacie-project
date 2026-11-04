# Recherche Pharmacie

A Laravel web application for browsing pharmacies and products, with authenticated tools for managing pharmacy and product records. The project also includes user, role, and permission management.

## Tech stack

- PHP 8.1+ and Laravel 10
- MySQL (default database configuration)
- Vue 3, Laravel Splade, and Vite
- Tailwind CSS

## Requirements

Install PHP 8.1 or later, Composer, Node.js with npm, and a MySQL-compatible database.

## Getting started

1. Clone the repository and install dependencies:

   ```bash
   composer install
   npm ci
   ```

2. Create your local environment file and generate an application key:

   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

3. Update the database settings in `.env` (`DB_DATABASE`, `DB_USERNAME`, and `DB_PASSWORD`) to match your local database, then run migrations:

   ```bash
   php artisan migrate
   ```

4. Start the frontend asset watcher and Laravel development server in separate terminals:

   ```bash
   npm run dev
   ```

   ```bash
   php artisan serve
   ```

   Open the URL shown by `php artisan serve` in your browser.

To create a production frontend build, run `npm run build`.

## Tests

Run the Laravel test suite with:

```bash
php artisan test
```

## License

The application is marked MIT-licensed in `composer.json`. See the repository for license details.
