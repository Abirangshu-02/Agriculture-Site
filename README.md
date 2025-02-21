# Agriculture Website - Laravel

This is a Laravel-based agriculture website designed to showcase various agricultural items along with a contact form for customer inquiries. The site is integrated with a SQLite database for efficient management of customer contact submissions.

## Features

- **Product Showcase:** Displays various agricultural products in an organized and responsive manner.
- **Customer Contact Form:** Allows customers to submit inquiries, which are stored in the database.
- **Database Integration:** The website is connected to a SQLite database to store contact submissions and other dynamic content.
- **Responsive Design:** Optimized for desktop and mobile views for a seamless user experience.

## Installation

### Requirements

- PHP 7.4 or higher
- Composer
- Laravel 8.x or higher
- MySQL or compatible database

### Steps to Install

1. **Clone the repository:**

   ```bash
   git clone https://github.com/your-username/agriculture-website.git
2. **Navigate to the project directory:**
   ```bash
   cd agriculture-website
3. **Install dependencies using Composer:**
   ````bash
   composer install
4. **Configure .env file for database settings:**
   Open the .env file and update the following environment variables for your database connection:
   - DB_CONNECTION=mysql
   - DB_HOST=127.0.0.1
   - DB_PORT=3306
   - DB_DATABASE=your_database_name
   - DB_USERNAME=your_database_username
   - DB_PASSWORD=your_database_password
5. **Generate the application key:**
   ````bash
   php artisan key:generate
6. **Run database migrations:**
   ````bash
   php artisan migrate
7. **Serve the application:**
   ````bash
   php artisan serve

## Usage
- Contact Form: Visitors can fill out the contact form, which will be saved in the database. You can view and manage inquiries through the admin panel or directly through the database.
- Product Listings: Showcase and categorize agricultural items effectively.

## License
This project is licensed under the MIT License - see the LICENSE file for details.

## Acknowledgements
- Laravel for providing a great PHP framework.
- Bootstrap or Tailwind for front-end styling.
- SQLite for database management.

**For more information, please feel free to reach out via the contact form on the website.**
- This README provides all the necessary steps for installation, usage, and contributing, along with a clear description of the features. Adjust any project-specific details (like database settings or package dependencies) to suit your project.
