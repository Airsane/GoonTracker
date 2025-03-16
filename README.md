# GoonTracker

GoonTracker is a web application built with Laravel that helps track goons in escape from tarkov

## 🚀 Features

- Login via discord auth
- Track goon
- View goon stats
- Autoupdated spawn chance

## 🛠️ Tech Stack

- **Backend:** Laravel 12.x
- **Database:** MySQL/PostgreSQL
- **Authentication:** Laravel's built-in authentication

## 📋 Prerequisites

- PHP >= 8.1
- Composer
- Node.js & NPM
- MySQL/PostgreSQL

## 🔧 Installation

1. Clone the repository
```bash
git clone https://github.com/airsane/GoonTracker.git
```

2. Install PHP dependencies
```bash
composer install
```

3. Install NPM dependencies
```bash
npm install
```

4. Create environment file
```bash
cp .env.example .env
```

5. Generate application key
```bash
php artisan key:generate
```

6. Configure your database in the .env file
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=goontracker
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

7. Run database migrations
```bash
php artisan migrate
```

8. Start the development server
```bash
php artisan serve
```

9. In a separate terminal, compile assets
```bash
npm run dev
```

## 🔑 Environment Variables

Make sure to set up the following environment variables in your .env file:

- `APP_NAME`
- `APP_ENV`
- `APP_KEY`
- `DB_CONNECTION`
- `DB_HOST`
- `DB_PORT`
- `DB_DATABASE`
- `DB_USERNAME`
- `DB_PASSWORD`

## 🤝 Contributing

Contributions are welcome! Please feel free to submit a Pull Request.

## 📝 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 👥 Authors

- Your Name (@airsane)

## 🙏 Acknowledgments

- Laravel Team for the amazing framework
- All contributors who participate in this project
