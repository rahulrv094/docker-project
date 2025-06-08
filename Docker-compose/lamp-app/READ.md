```markdown
# 🚀 LAMP Stack Web App (Dockerized)

This project demonstrates a simple **LAMP stack** using **Docker Compose**, featuring:

- **NGINX** as the web server  
- **PHP-FPM** to run PHP scripts  
- **MySQL** as the database  
- A basic **Login/Register** PHP app  
- (Optional) **phpMyAdmin** for database GUI access  

## 🗂️ Project Structure

```

lamp-app/
├── docker-compose.yml
├── nginx/
│   └── default.conf
├── php/
│   ├── Dockerfile
│   ├── db.php
│   ├── index.php
│   ├── login.php
│   └── register.php

````

## 🛠️ Setup Instructions

### 1. Clone the repository

```bash
git clone https://github.com/your-username/lamp-docker-project.git
cd lamp-docker-project
````

### 2. Start the Docker containers

```bash
docker-compose up --build -d
```

### 3. Access the app

* Web App: [http://localhost:8080](http://localhost:8080)
* (Optional) phpMyAdmin: [http://localhost:8081](http://localhost:8081)

  * **Username:** `root`
  * **Password:** `root`

## 🧪 Create MySQL `users` Table

You must manually create the `users` table in the MySQL database the first time.

### Option A: Using phpMyAdmin

```sql
CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(255) UNIQUE NOT NULL,
  password TEXT NOT NULL
);
```

### Option B: Using Docker CLI

```bash
docker exec -it <mysql-container-name> bash
mysql -u root -p
# enter password: root
USE myapp;
# then run the SQL above
```

## 🧩 Features

* Register and login functionality
* Password hashing (bcrypt)
* Configurable via Docker Compose
* Easy to extend for sessions, logout, etc.

## 📦 Requirements

* Docker
* Docker Compose

## 📌 TODOs (Optional Enhancements)

* Add logout and session handling
* Add error messages and validation
* Use a `.env` file for secrets
* Mount SQL file for automatic DB init

```
