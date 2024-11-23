
# Medischedule - Backend

This repository contains the backend implementation of an *Appointment System*, built with **Laravel**. It provides a RESTful API to manage and serve data for the scheduling system.

## Features
- Manage plans, specialties, hospitals, patients, and doctors.
- Generate and manage doctor schedules.
- Book, search, and cancel appointments.
- Generate various reports and analytics.

## Getting Started

### Requirements
- PHP 8.1+
- Composer
- MySQL (or another supported database)
- Laravel 10+

### Setup
1. Clone the repository:
   ```bash
   git clone https://github.com/thvinhas/medischedule-backend.git
   cd medischedule-backend
   ```

2. Install dependencies:
   ```bash
   composer install
   ```

3. Copy and configure environment variables:
   ```bash
   cp .env.example .env
   ```
    - Configure database credentials in `.env`.

4. Generate application key:
   ```bash
   php artisan key:generate
   ```

6. Start the development server:
   ```bash
   php artisan serve
   ```

## API Endpoints

### Plans
- `GET /api/plans` - List all plans.
- `POST /api/plans` - Create a new plan.
- `POST /api/plans` - Create a new plan.



## Contributing
Contributions are welcome! Please follow these steps:
1. Fork the repository.
2. Create a feature branch: `git checkout -b feature-name`.
3. Commit changes: `git commit -m "Add feature"`.
4. Push the branch: `git push origin feature-name`.
5. Open a Pull Request.

## License
This project is licensed under the MIT License.
