# Project Title

A brief description of your project. Explain what it does and its main features.

## Table of Contents
- [Requirements](#requirements)
- [Installation](#installation)
- [Usage](#usage)
- [Features](#features)
- [Contributing](#contributing)
- [License](#license)

## Requirements
- PHP ^8.2
- Laravel Framework ^11.31
- Composer

## Installation

1. **Clone the Repository**
   ```bash
   git clone https://github.com/ganimalqudhaifi/ultra-voucher.git
   cd ultra-voucher
   ```

2. **Install Laravel Dependencies**
   ```bash
   composer install
   ```

3. **Setup Environment File**
   - Copy the example environment file:
   ```bash
   cp .env.example .env
   ```

   - Generate the application key:
   ```bash
   php artisan key:generate
   ```

4. **Configure the Database**
   - Update the `.env` file with your database configuration.

5. **Run Migrations**
   ```bash
   php artisan migrate
   ```

6. **Run the Development Server**
   ```bash
   php artisan serve
   ```

## Usage
Access the application by navigating to `http://localhost` in your browser.

## Features
- Articles and Categories management via Eloquent models.
- Inertia.js for modern page transitions and state management.
- Support for further extensibility with Laravel's powerful middleware and routing.

## Contributing

1. **Fork the Repository**
2. **Create a New Branch**
   ```bash
   git checkout -b <branch-name>
   ```
3. **Make Your Changes**
4. **Commit Your Changes**
   ```bash
   git commit -m "Description of changes"
   ```
5. **Push to the Branch**
   ```bash
   git push origin <branch-name>
   ```
6. **Submit a Pull Request**

## License
This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.