# Docker-LEMP

A ready-to-use Docker configuration for setting up a LEMP (Linux, Nginx, MySQL, PHP) stack. It is tailored for quick deployment of development environments, ensuring consistency and ease of use.


## Features

- **Nginx**: Latest Nginx server setup for handling web requests.
- **PHP**: PHP environment configured with necessary extensions and settings.
- **MySQL**: MySQL database for data storage.
- **Easy Configuration**: Environment variables and configurations can be easily adjusted in the `.env` file and Nginx configuration.
- **Docker-Compose Integration**: Simplified orchestration and management of services using Docker Compose.

---

> ##### ⚠️ Do Not Use in a Production Environment
> This Docker-LEMP stack is configured for local development environments only. It lacks several critical security measures, optimisations, and configurations necessary for a safe and efficient production environment. Do not deploy this setup in a production scenario.

---

## Setup

1. **Clone the Repository**: Start by cloning this repository to your local machine.
   
   ```bash
   git clone https://github.com/jtay/docker-lemp
   ```
   ```
   cd docker-lemp
   ```

2. **Environment Configuration**: Copy the `.env.sample` file to a new file named `.env`.

   ```bash
   cp .env.sample .env
   ```

   > ##### 🔧 Customisation 
   >Edit the `.env` file to set your project configurations like ports, hostname, and MySQL settings.

3. **Build and Run**: Use Docker Compose to build and run the containers.

   ```bash
   docker-compose build --no-cache
   ```
   ```
   docker-compose up -d
   ```
4.  **Stop Containers**: Use Docker Compose to stop the containers.
    ```bash
    docker-compose down
    ```
## Usage

After setting up, your LEMP stack will be running with:

- **Nginx** serving your web content on the configured HTTP port (default port `80`).
- **PHP** for processing PHP scripts.
- **MySQL** accessible on the configured MySQL port (default port `3306`).
- **PHPMyAdmin** for easily accessing MySQL via a web interface (default `http://localhost:8080`).

Access the sample application via the `src/public`. You can start adding your PHP files to the `src/public` directory and they will be served by Nginx at [http://localhost/](http://localhost/)

## Default Environment Variables

Accessible and editable via `.env` the root of the repository

**Nginx + PHP**
- `PROJECT_ROOT=src/` *The root of your PHP project*
- `WEB_ROOT=src/public/` *Directory index.php file would typically sit*


- `HTTP_HOSTNAME=localhost`*The hostname given to Nginx*
- `HTTP_PORTS=80:80` *Ports that Nginx exposes itself to*

**PHPMyAdmin + MySQL**
- `PMA_HOSTNAME=phpmyadmin` *Default PHPMyAdmin hostname*
- `PMA_PORTS=8080:80` *Default PHPMyAdmin ports*


- `MYSQL_HOSTNAME=mysql` *Default MySQL hostname `mysql` (instead of localhost!)*
- `MYSQL_PORTS=3306:3306` *Default MySQL ports `3306`*
- `MYSQL_ROOT_PASSWORD=tiger` *Default MySQL root user password `tiger`*
- `MYSQL_USER=user` *Default MySQL username `user`*
- `MYSQL_PASS=pass` *Default MySQL password `pass`*
- `MYSQL_DATABASE=docker` *Default MySQL database name `docker`*



---

> #### ⚠️ **No HTTPS**
> This configuration does not include HTTPS setup. It is intended for local development and testing purposes only. Without HTTPS, the traffic is not encrypted, which is not suitable for handling sensitive data or any production-level deployment.

---
