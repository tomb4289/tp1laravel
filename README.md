# TechPro Laptop - Product Presentation Website

A static website built with Laravel for presenting the TechPro Laptop product. This project demonstrates the use of Laravel's Blade templating system, routing, controllers, and form handling.

**GitHub Repository:** [https://github.com/tomb4289/tp1laravel](https://github.com/tomb4289/tp1laravel)

## Features

- **Responsive Design**: Modern, mobile-friendly interface
- **Blade Templates**: Master template with individual page views
- **Form Handling**: Contact form with POST method and data processing
- **Custom Styling**: Professional CSS design with gradient backgrounds
- **Multiple Pages**: Home, About, Features, and Contact pages

## Project Structure

```
product-website/
├── app/Http/Controllers/
│   └── ProductController.php      # Main controller with all page methods
├── public/
│   ├── css/
│   │   └── styles.css            # Custom CSS styles
│   └── js/
│       └── scripts.js            # JavaScript for enhanced UX
├── resources/views/
│   ├── master.blade.php          # Master template
│   ├── home.blade.php            # Home page
│   ├── about.blade.php           # About page
│   ├── features.blade.php        # Features page
│   └── contact.blade.php         # Contact page with form
└── routes/
    └── web.php                   # Route definitions
```

## Routes

- `/` - Home page
- `/home` - Home page (alternative route)
- `/about` - About page
- `/features` - Features page
- `/contact` - Contact page (GET)
- `/contact` - Contact form submission (POST)

## Installation & Setup

1. **Prerequisites**: Ensure you have PHP 8.1+ and Composer installed
2. **Install Dependencies**: Run `composer install`
3. **Environment Setup**: Copy `.env.example` to `.env` and configure
4. **Generate Key**: Run `php artisan key:generate`
5. **Start Server**: Run `php artisan serve`

## Usage

1. Start the Laravel development server:
   ```bash
   php artisan serve
   ```

2. Open your browser and navigate to `http://localhost:8000`

3. Navigate through the different pages:
   - Home page with product highlights
   - About page with company information
   - Features page with detailed specifications
   - Contact page with inquiry form

## Form Functionality

The contact form includes:
- Name (required)
- Email (required)
- Phone (required)
- Company (optional)
- Quantity needed (required dropdown)
- Message (required)

When submitted, the form data is processed by the `contactForm` method in `ProductController` and displayed back to the user.


## Technologies Used

- **Laravel 12**: PHP framework
- **Blade**: Templating engine
- **Bootstrap 5**: CSS framework
- **Font Awesome**: Icons
- **Google Fonts**: Typography (Lora, Open Sans)