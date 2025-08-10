# 🚗 BidnRide - Online Car Auction Platform

<p align="center">
    <img src="https://img.shields.io/badge/Laravel-11.35-red?style=for-the-badge&logo=laravel" alt="Laravel Version">
    <img src="https://img.shields.io/badge/PHP-8.2+-blue?style=for-the-badge&logo=php" alt="PHP Version">
    <img src="https://img.shields.io/badge/Bootstrap-5.3-purple?style=for-the-badge&logo=bootstrap" alt="Bootstrap">
    <img src="https://img.shields.io/badge/License-MIT-green?style=for-the-badge" alt="License">
</p>

BidnRide is an innovative online car auction platform designed to streamline the process of buying and selling premium, luxury, and collectible vehicles worldwide. Built with modern web technologies, it provides a secure and user-friendly marketplace that connects car enthusiasts globally.

## ✨ Features

### 🏎️ **Auction System**
- **Live Auctions**: Real-time bidding with countdown timers
- **Reserve System**: Reserve price management for sellers
- **Global Reach**: International buyers and sellers
- **Weekly Cycles**: Fast-turnaround auction schedule

### 👤 **User Management**
- **Secure Authentication**: Laravel Breeze-powered login/registration
- **Email Verification**: Account verification system
- **User Profiles**: Customizable user profiles
- **Favorites**: Wishlist functionality for preferred vehicles

### 🌐 **Modern Interface**
- **Responsive Design**: Mobile-first approach
- **Bootstrap 5**: Modern, clean UI components
- **Tailwind CSS**: Utility-first styling
- **Alpine.js**: Reactive frontend interactions

### 🔒 **Security & Performance**
- **Laravel Framework**: Industry-standard security practices
- **SQLite/MySQL**: Flexible database options
- **Pest Testing**: Modern PHP testing framework
- **Vite Build**: Fast development and optimized production builds

## 🚀 Quick Start

### Prerequisites
- PHP 8.2 or higher
- Composer
- Node.js and NPM
- SQLite (default) or MySQL

### Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/ibtisamafzal/BidnRide.git
   cd BidnRide
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install JavaScript dependencies**
   ```bash
   npm install
   ```

4. **Environment setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Database setup**
   ```bash
   php artisan migrate
   ```

6. **Build assets**
   ```bash
   npm run build
   ```

7. **Start development server**
   ```bash
   php artisan serve
   npm run dev
   ```

Visit `http://localhost:8000` to see the application.

## 🏗️ Project Structure

```
BidnRide/
├── app/
│   ├── Http/Controllers/     # Application controllers
│   │   ├── PageController.php
│   │   ├── AuthController.php
│   │   └── ProfileController.php
│   ├── Models/              # Eloquent models
│   └── View/Components/     # Blade components
├── resources/
│   ├── views/              # Blade templates
│   │   ├── pages/          # Static pages
│   │   ├── auth/           # Authentication views
│   │   └── layouts/        # Layout templates
│   ├── css/                # Stylesheets
│   └── js/                 # JavaScript files
├── routes/
│   ├── web.php             # Web routes
│   └── auth.php            # Authentication routes
├── database/
│   ├── migrations/         # Database migrations
│   └── seeders/           # Database seeders
└── public/
    └── assets/            # Static assets
```

## 🎯 Key Routes

| Route | Description |
|-------|-------------|
| `/` | Homepage with featured auctions |
| `/auctions` | Live auction listings |
| `/about` | Company information |
| `/faq` | Frequently asked questions |
| `/team` | Team information |
| `/login` | User authentication |
| `/register` | User registration |
| `/dashboard` | User dashboard (protected) |

## 💎 Technology Stack

| Category | Technology |
|----------|------------|
| **Backend** | Laravel 11.35, PHP 8.2+ |
| **Frontend** | Bootstrap 5.3, Tailwind CSS, Alpine.js |
| **Database** | SQLite (default), MySQL support |
| **Build Tools** | Vite, NPM, Composer |
| **Testing** | Pest PHP |
| **Authentication** | Laravel Breeze |

## 🌟 Business Value

### Target Market
- **Primary**: Luxury and classic car enthusiasts
- **Secondary**: General vehicle buyers and sellers
- **Geographic**: Global marketplace

### Competitive Advantages
- **Lower Fees**: Reduced costs vs traditional auction houses
- **Global Network**: Worldwide buyer/seller community
- **Premium Focus**: Curated selection of quality vehicles
- **Digital Experience**: Modern, intuitive interface
- **Fast Turnaround**: Efficient weekly auction cycles

## 📈 Development Status

### ✅ Completed
- [x] Laravel application foundation
- [x] User authentication system
- [x] Responsive UI framework
- [x] Basic auction display pages
- [x] Static content pages

### 🚧 In Development
- [ ] Real-time bidding functionality
- [ ] Payment processing integration
- [ ] Advanced search and filtering
- [ ] Admin panel for auction management
- [ ] Image upload and management
- [ ] Mobile app development

## 🔗 Links

- **Live Demo**: [https://dressmall.pk/Bid%20&%20Ride/Bid-n-Ride/](https://dressmall.pk/Bid%20&%20Ride/Bid-n-Ride/)
- **Documentation**: [PROJECT_SUMMARY.md](PROJECT_SUMMARY.md)

## 📄 License

The BidnRide platform is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## 🤝 Contributing

Contributions are welcome! Please feel free to submit a Pull Request.