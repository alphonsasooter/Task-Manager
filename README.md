# Student Portal — PHP & MySQL CRUD Web App

A clean and beginner-friendly **Student Portal** web application built with **PHP**, **MySQL**, and **Bootstrap**.  
This project demonstrates core backend concepts like authentication, database CRUD operations, session handling, and secure searching using prepared statements.

---

## ✨ Features

- Admin Login & Logout (Session Based)
- Student Management (CRUD)
  - Add Student
  - View Students List
  - Edit Student
  - Delete Student
- Search Students (name, email, phone, course)
- Responsive UI using Bootstrap
- MySQL Database Integration

---

## 🧰 Tech Stack

- **Frontend:** HTML, CSS, Bootstrap
- **Backend:** PHP (mysqli)
- **Database:** MySQL
- **Local Server:** XAMPP (Apache + MySQL)

---

## 📁 Project Structure

task-manager/
│── auth/
│ ├── login.php
│ ├── logout.php
│
│── config/
│ ├── db.php
│
│── dashboard/
│ ├── index.php
│ ├── add_student.php
│ ├── edit_student.php
│ ├── delete_student.php
│
│── index.php
│── Dockerfile
│── README.md


---

## ⚙️ Setup (Local with XAMPP)

### 1) Install XAMPP
Install XAMPP and make sure these modules are available:
- Apache
- MySQL

---

### 2) Move Project into `htdocs`
Copy the folder into:

C:\xampp\htdocs\


Example:

C:\xampp\htdocs\task-manager


---

### 3) Start Services
Open XAMPP Control Panel and start:
- ✅ Apache
- ✅ MySQL

---

### 4) Create Database
Open phpMyAdmin:

http://localhost/phpmyadmin


Create a database named:

task_manager


---

### 5) Create Tables
Inside the `task_manager` database, run the following SQL:

#### `students` table
```sql
CREATE TABLE IF NOT EXISTS students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    phone VARCHAR(20) NOT NULL,
    course VARCHAR(100) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
admins table
CREATE TABLE IF NOT EXISTS admins (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
6) Insert Default Admin User
Run this SQL:

INSERT INTO admins (username, password)
VALUES (
  'admin',
  '$2y$10$uYHq7HqT8U5QqgKJ8Q1r3e5z7fOQkq3V1w6m9bqj3qQwq1oPzY1n2'
);
Default Login:

Username: admin

Password: admin123

▶️ Run the Application
Open in browser:

http://localhost/task-manager/auth/login.php
🔐 Security Notes
Passwords are stored using password_hash()

Login verification uses password_verify()

Search uses prepared statements to reduce SQL injection risk

Remove test files before deployment (example: hash.php)

🌍 Deployment
This project can be deployed using:

Railway (PHP + MySQL.

🚀 Future Improvements (Optional)
Pagination for students list

Upload student profile photo

Admin change password feature

Role-based access (admin / staff)

Export student list (CSV/PDF)

👤 Author
Alphonsa Sooter
GitHub: https://github.com/alphonsasooter

