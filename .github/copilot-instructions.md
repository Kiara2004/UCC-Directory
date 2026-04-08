# UCC IT Progressive Web App - Development Guide

## Project Overview
This is a Progressive Web App (PWA) for the University of the Commonwealth Caribbean (UCC) Information Technology Department. It provides students with:
- Faculty/Staff Directory
- Course Information
- Admission Requirements  
- Social Media Integration
- Email FAB (Floating Action Button)

## Technology Stack
- **Frontend**: HTML, CSS, JavaScript (Vue.js via Vite)
- **Backend**: Laravel PHP Framework
- **Database**: SQLite (default) or MySQL
- **PWA**: erag/laravel-pwa package
- **Build Tool**: Vite

## Installation & Setup

### Prerequisites
- PHP 8.1+
- Composer 2.0+
- Node.js 18+ (for Vite)

### Install Dependencies
```bash
composer install
npm install
```

### Generate Application Key
```bash
php artisan key:generate
```

### Run Migrations
```bash
php artisan migrate
```

### Build Assets
```bash
npm run build
# OR for development with watch mode:
npm run dev
```

### Start Development Server
```bash
php artisan serve
# Server runs on http://localhost:8000
```

## Project Structure

```
resources/
├── views/          # Blade templates
├── css/           # Stylesheets  
└── js/            # JavaScript components

app/
├── Http/
│  └── Controllers/    # API endpoints
├── Models/           # Eloquent models
└── Providers/        # Service providers

database/
├── migrations/       # Database schema
└── seeders/         # Sample data

routes/
├── api.php          # API routes
└── web.php          # Web routes

public/             # Static assets & PWA manifest
```

## Key Features Implementation

### 1. Faculty/Staff Directory
- **Route**: `/directory`
- **Database**: `staff` table with fields: id, name, email, phone, photo_url
- **Features**: 
  - Click to call (tel: links)
  - Click to email (mailto: links)
  - Photo gallery

### 2. Courses
- **Route**: `/courses`
- **Database**: `courses` table
- **Fields**: code, name, credits, prerequisites, description
- **Sample Data**: 10 courses provided via seeder

### 3. Admissions
- **Route**: `/admissions`
- **Content**: Admission requirements and external link to UCC application page
- **Static Page**: Render as blade template

### 4. Social Media
- **Route**: `/social`
- **Integration**: Embed Facebook, Twitter, Instagram feeds
- **Method**: iFrame or official embed codes

### 5. Email FAB
- **Location**: Floating action button (bottom-right)
- **Action**: Opens email client to HOD email
- **Implementation**: Simple mailto: link in layout

## PWA Configuration

### Install PWA Package
```bash
composer require erag/laravel-pwa
```

### Publish Assets
```bash
php artisan vendor:publish --provider="Erag\LaravelPwa\LaravelPwaServiceProvider"
```

### Key PWA Features
- Offline functionality (Service Worker)
- Installable app (Web App Manifest)
- Responsive design
- Push notifications support

### Configuration File
- Edit `config/pwa.php` to customize:
  - App name and short name
  - App icon
  - Theme colors
  - Start URL

## Database Setup

### Create Migrations
```bash
# Staff directory
php artisan make:model Staff -m

# Courses
php artisan make:model Course -m
```

### Run Seeders
```bash
php artisan db:seed
```

## API Endpoints (if needed)
- `GET /api/staff` - Get all staff
- `GET /api/staff/{id}` - Get specific staff
- `GET /api/courses` - Get all courses
- `GET /api/courses/{id}` - Get specific course

## Deployment Checklist
- [ ] Configure `.env` with production database
- [ ] Run `php artisan optimize:clear`
- [ ] Set `APP_DEBUG=false`
- [ ] Generate new `APP_KEY`
- [ ] Run `npm run build`
- [ ] Set up HTTPS (required for PWA)
- [ ] Configure service worker caching strategy

## Development Notes
- Use `npm run dev` during development for HMR
- Commit `.env.example` but not `.env`
- Test PWA features in Chrome DevTools (Lighthouse tab)
- Use Chrome/Edge for best PWA testing

## Presentation Details
- **Date**: April 12, 2026
- **Time**: 8:00 PM
- **Duration**: 10 minutes per duo
- **Lecturer**: Otis Osbourne
- **Weight**: 40%