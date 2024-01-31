# LEMP Stack Quickstart: Dockerized Development Environment

Welcome to this instructional guide, aimed at providing an accessible entry point for individuals who are just starting their journey in web development. It focuses on setting up a LEMP stack, which includes Linux, Nginx, MySQL, and PHP, using Docker. This repository is designed to make the process of configuring a web server environment as straightforward as possible, catering to the needs of beginners looking for a practical approach to learn and implement these technologies. By emphasizing simplicity and practicality, it serves as a foundational resource for acquiring the skills necessary to manage web servers and develop web applications.

## Key Features

- **Fast Setup**: Deploy a complete LEMP stack with a single command.
- **Nginx**: Pre-configured Nginx server for serving web content efficiently.
- **PHP Support**: PHP environment ready with essential extensions.
- **MySQL**: Integrated MySQL for your database needs.
- **Flexible Configuration**: Easily customizable `.env` and Nginx settings.
- **Docker Compose**: Streamlined service orchestration and management.

> ⚠️ **Development Use Only**: This setup is optimized for development environments. It lacks security and performance configurations for production use.

## Getting Started

Follow these simple steps to get your LEMP stack running:

1. **Clone This Repository**
   ```bash
   git clone https://github.com/jtay/beginner-lemp-stack-with-phpmyadmin.git
   cd beginner-lemp-stack-with-phpmyadmin
   ```

2. **Set Up Environment**
   Copy `.env.sample` to `.env` and adjust settings to fit your project.
   ```bash
   cp .env.sample .env
   ```

3. **Launch the Stack**
   Use Docker Compose to build and start your services.
   ```bash
   docker-compose up -d
   ```

4. 🎉 **Congratulations!** Your web server can be viewed at [http://localhost/](http://localhost/)


### Stopping the web server
   ```bash
   docker-compose down
   ```

## How to Use

Your LEMP environment is now ready:

- **Web Server**: Nginx is serving on port `80`.
- **PHP Processing**: PHP is configured and ready.
- **Database**: MySQL is available on port `3306`.
- **Database Management**: PHPMyAdmin accessible at `http://localhost:8080`.

Start by adding PHP files to `src/public` to have them served by Nginx at [http://localhost/](http://localhost/).

## Configuration Details

Your environment settings are easily adjustable in the `.env` file at the root:

- **Project and Web Root**: Set the paths for your PHP project and where your `index.php` resides.
- **Service Hostnames and Ports**: Configure hostnames and ports for Nginx, PHPMyAdmin, and MySQL.
- **Database Settings**: Default MySQL credentials and database name provided for immediate use.

> ⚠️ **Note on Security**: This setup does not include HTTPS. It's intended for local testing and not recommended for handling sensitive information.

---

This repository was created to simplify the early stages of web development for newcomers, providing an easy way to set up a LEMP stack with Docker. Whether you're learning web development or need a quick environment for testing, this resource is tailored to get you started with minimal hassle.
