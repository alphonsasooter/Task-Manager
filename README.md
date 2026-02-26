# 🎓 Student Portal—PHP & MySQL CRUD Web App

<div align="center">

![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white)
![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)

**A clean and beginner-friendly Student Management System**


![Version](https://img.shields.io/badge/version-1.0.0-blue.svg)
![License](https://img.shields.io/badge/license-MIT-green.svg)
![PHP](https://img.shields.io/badge/PHP-7.4+-blue.svg)
![MySQL](https://img.shields.io/badge/MySQL-5.7+-orange.svg)

</div>


---

## 🎯 Overview

Student Portal is a comprehensive **CRUD (Create, Read, Update, Delete)** web application designed for managing student records efficiently. Built with PHP and MySQL, it demonstrates core backend concepts including authentication, database operations, session handling, and secure data processing.

**Perfect for:**
- 📚 Learning PHP and MySQL basics
- 🎓 School/college projects
- 💼 Portfolio demonstrations
- 🏢 Small institution management

---

## ✨ Features

### 🔐 Authentication & Security
- ✅ **Secure Login System** - Password hashing with `password_hash()`
- ✅ **Session Management** - PHP sessions for user authentication
- ✅ **Protected Routes** - Unauthorized access prevention
- ✅ **Logout Functionality** - Clean session destruction

### 👥 Student Management (CRUD)
- ✅ **Add Student** - Create new student records with validation
- ✅ **View Students** - Display all students in a responsive table
- ✅ **Edit Student** - Update existing student information
- ✅ **Delete Student** - Remove student records with confirmation
- ✅ **Search Students** - Find students by name, email, phone, or course

### 🎨 User Interface
- ✅ **Responsive Design** - Bootstrap-powered mobile-friendly UI
- ✅ **Clean Layout** - Modern and intuitive interface
- ✅ **Alert Messages** - Success/error feedback for all operations
- ✅ **Data Validation** - Client and server-side validation

### 🔒 Security Features
- ✅ **Prepared Statements** - SQL injection prevention
- ✅ **Password Hashing** - Bcrypt encryption for passwords
- ✅ **XSS Protection** - Output sanitization
- ✅ **CSRF Protection** - Session-based security


---

## 🧰 Tech Stack

<table>
<tr>
<td width="50%">

### Frontend
- **HTML5** - Structure and markup
- **CSS3** - Styling and layout
- **Bootstrap 5** - Responsive framework
- **JavaScript** - Client-side validation

</td>
<td width="50%">

### Backend
- **PHP 7.4+** - Server-side scripting
- **MySQLi** - Database connectivity
- **Sessions** - User authentication
- **Prepared Statements** - Security

</td>
</tr>
</table>

### Development Tools
- **XAMPP** - Local development environment (Apache + MySQL)
- **phpMyAdmin** - Database management
- **VS Code** - Code editor (recommended)

---

## 📁 Project Structure

```
student-portal/
│
├── auth/                           # Authentication module
│   ├── login.php                   # Login page and logic
│   └── logout.php                  # Logout handler
│
├── config/                         # Configuration files
│   └── db.php                      # Database connection
│
├── dashboard/                      # Main application
│   ├── index.php                   # Students list & search
│   ├── add_student.php             # Add new student form
│   ├── edit_student.php            # Edit student form
│   └── delete_student.php          # Delete student handler
│
├── assets/                         # Static files (optional)
│   ├── css/
│   │   └── custom.css              # Custom styles
│   ├── js/
│   │   └── main.js                 # Custom scripts
│   └── images/
│       └── logo.png                # Application logo
│
├── includes/                       # Reusable components
│   ├── header.php                  # Common header
│   ├── footer.php                  # Common footer
│   └── functions.php               # Helper functions
│
├── index.php                       # Landing page (redirects to login)
├── Dockerfile                      # Docker configuration (optional)
├── .htaccess                       # Apache configuration
├── .gitignore                      # Git ignore file
└── README.md                       # This file
```

---

## ⚙️ Setup (Local with XAMPP)

### Prerequisites

- Windows/Mac/Linux operating system
- At least 1GB free disk space
- Basic understanding of PHP and MySQL

### Step 1: Install XAMPP

1. **Download XAMPP** from [https://www.apachefriends.org/](https://www.apachefriends.org/)
2. **Install XAMPP** with these modules:
   - ✅ Apache
   - ✅ MySQL
   - ✅ PHP
   - ✅ phpMyAdmin
3. **Complete installation** and note the installation directory
   - Windows: `C:\xampp\`
   - Mac: `/Applications/XAMPP/`
   - Linux: `/opt/lampp/`

### Step 2: Move Project to htdocs

Copy the project folder into XAMPP's `htdocs` directory:

**Windows:**
```
C:\xampp\htdocs\student-portal\
```

**Mac:**
```
/Applications/XAMPP/htdocs/student-portal/
```

**Linux:**
```
/opt/lampp/htdocs/student-portal/
```

### Step 3: Start XAMPP Services

1. Open **XAMPP Control Panel**
2. Start the following services:
   - ✅ **Apache** (Web Server)
   - ✅ **MySQL** (Database Server)

**Verify services are running:**
- Apache: Green "Running" status on port 80
- MySQL: Green "Running" status on port 3306

**Troubleshooting ports:**
- If port 80 is in use, change Apache port in `httpd.conf`
- If port 3306 is in use, change MySQL port in `my.ini`

### Step 4: Create Database

1. **Open phpMyAdmin:**
   ```
   http://localhost/phpmyadmin
   ```

2. **Create a new database:**
   - Click on "New" in the left sidebar
   - Database name: `student_portal`
   - Collation: `utf8mb4_general_ci`
   - Click "Create"

3. **Verify database creation:**
   - You should see `student_portal` in the left sidebar

### Step 5: Create Tables

1. **Select the `student_portal` database**
2. **Click on "SQL" tab**
3. **Run the following SQL queries:**

#### Create `students` Table

```sql
CREATE TABLE IF NOT EXISTS students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    phone VARCHAR(20) NOT NULL,
    course VARCHAR(100) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    INDEX idx_email (email),
    INDEX idx_fullname (fullname)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
```

#### Create `admins` Table

```sql
CREATE TABLE IF NOT EXISTS admins (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(100),
    fullname VARCHAR(100),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    last_login TIMESTAMP NULL,
    INDEX idx_username (username)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
```

#### Create `activity_logs` Table (Optional - for tracking)

```sql
CREATE TABLE IF NOT EXISTS activity_logs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    admin_id INT NOT NULL,
    action VARCHAR(50) NOT NULL,
    description TEXT,
    ip_address VARCHAR(45),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (admin_id) REFERENCES admins(id) ON DELETE CASCADE,
    INDEX idx_admin_id (admin_id),
    INDEX idx_action (action)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
```

### Step 6: Insert Default Admin

Run this SQL to create a default admin account:

```sql
INSERT INTO admins (username, password, email, fullname)
VALUES (
    'admin',
    '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
    'admin@studentportal.com',
    'System Administrator'
);
```

**Default Credentials:**
- **Username:** `admin`
- **Password:** `admin123`

**⚠️ Important:** Change this password after first login!

### Step 7: Configure Database Connection

Edit `config/db.php`:

```php
<?php
// Database configuration
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');  // Default XAMPP MySQL has no password
define('DB_NAME', 'student_portal');

// Create connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Set charset to utf8mb4
$conn->set_charset("utf8mb4");
?>
```

### Step 8: Test the Application

1. **Open your browser**
2. **Navigate to:**
   ```
   http://localhost/student-portal/
   ```
   or
   ```
   http://localhost/student-portal/auth/login.php
   ```

3. **Login with default credentials:**
   - Username: `admin`
   - Password: `admin123`

4. **You should see the dashboard** with an empty students list

---

## 📊 Database Schema

### `students` Table

| Column      | Type           | Description                    |
|-------------|----------------|--------------------------------|
| id          | INT (PK)       | Auto-increment primary key     |
| fullname    | VARCHAR(100)   | Student's full name            |
| email       | VARCHAR(100)   | Student's email (unique)       |
| phone       | VARCHAR(20)    | Student's phone number         |
| course      | VARCHAR(100)   | Enrolled course                |
| created_at  | TIMESTAMP      | Record creation timestamp      |
| updated_at  | TIMESTAMP      | Last update timestamp          |

### `admins` Table

| Column      | Type           | Description                    |
|-------------|----------------|--------------------------------|
| id          | INT (PK)       | Auto-increment primary key     |
| username    | VARCHAR(50)    | Admin username (unique)        |
| password    | VARCHAR(255)   | Hashed password                |
| email       | VARCHAR(100)   | Admin email                    |
| fullname    | VARCHAR(100)   | Admin full name                |
| created_at  | TIMESTAMP      | Account creation timestamp     |
| last_login  | TIMESTAMP      | Last login timestamp           |

### `activity_logs` Table (Optional)

| Column       | Type         | Description                    |
|--------------|--------------|--------------------------------|
| id           | INT (PK)     | Auto-increment primary key     |
| admin_id     | INT (FK)     | Admin who performed action     |
| action       | VARCHAR(50)  | Action type (ADD/EDIT/DELETE)  |
| description  | TEXT         | Action description             |
| ip_address   | VARCHAR(45)  | User's IP address              |
| created_at   | TIMESTAMP    | Action timestamp               |

---

## 📖 Usage

### 1. Login

1. Navigate to `http://localhost/student-portal/auth/login.php`
2. Enter credentials:
   - Username: `admin`
   - Password: `admin123`
3. Click "Login"
4. You'll be redirected to the dashboard

### 2. Add Student

1. Click "Add New Student" button on dashboard
2. Fill in the form:
   - Full Name (required)
   - Email (required, unique)
   - Phone (required)
   - Course (required)
3. Click "Add Student"
4. Success message will appear
5. Student will appear in the list

### 3. View Students

- Dashboard displays all students in a table
- Shows: ID, Full Name, Email, Phone, Course, Actions
- Responsive design adapts to screen size

### 4. Search Students

1. Use the search box on dashboard
2. Enter search term (name, email, phone, or course)
3. Click "Search"
4. Results appear instantly
5. Click "Clear" to show all students

### 5. Edit Student

1. Click "Edit" button next to a student
2. Form pre-fills with current data
3. Modify any fields
4. Click "Update Student"
5. Success message confirms update

### 6. Delete Student

1. Click "Delete" button next to a student
2. Confirm deletion in popup
3. Student record is removed
4. Success message appears

### 7. Logout

1. Click "Logout" in the navigation
2. Session is destroyed
3. Redirected to login page

---

## 🔒 Security Features

### Password Security

```php
// Hashing password (during registration)
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Verifying password (during login)
if (password_verify($input_password, $stored_hash)) {
    // Login successful
}
```

**Benefits:**
- Uses bcrypt algorithm
- Automatic salt generation
- Resistant to rainbow table attacks



---

## 🔗 API Endpoints

Although this is not a REST API, here are the main endpoints:

### Authentication

| Method | Endpoint              | Description        |
|--------|-----------------------|--------------------|
| GET    | `/auth/login.php`     | Login page         |
| POST   | `/auth/login.php`     | Process login      |
| GET    | `/auth/logout.php`    | Logout and destroy |

### Students

| Method | Endpoint                      | Description           |
|--------|-------------------------------|-----------------------|
| GET    | `/dashboard/index.php`        | List all students     |
| GET    | `/dashboard/index.php?search` | Search students       |
| GET    | `/dashboard/add_student.php`  | Add student form      |
| POST   | `/dashboard/add_student.php`  | Create student        |
| GET    | `/dashboard/edit_student.php` | Edit student form     |
| POST   | `/dashboard/edit_student.php` | Update student        |
| GET    | `/dashboard/delete_student.php` | Delete student      |

---

## 🎯 Future Improvements

### 🔜 Planned Features

- [ ] **Pagination** - Handle large student lists efficiently
- [ ] **Profile Photos** - Upload and display student photos
- [ ] **Change Password** - Admin password reset functionality
- [ ] **Email Notifications** - Send emails on student registration
- [ ] **Export Data** - Export students list to CSV/Excel/PDF
- [ ] **Bulk Upload** - Import multiple students from CSV
- [ ] **Role Management** - Multiple admin roles (Admin, Staff, Viewer)
- [ ] **Student Dashboard** - Students can view their own profiles
- [ ] **Attendance Tracking** - Mark and view attendance
- [ ] **Grade Management** - Add and manage student grades
- [ ] **Advanced Search** - Filter by multiple criteria
- [ ] **Dark Mode** - Theme switcher
- [ ] **Mobile App** - React Native or Flutter app
- [ ] **API Integration** - RESTful API for external access
- [ ] **Two-Factor Authentication** - Enhanced security

### 💡 Technical Improvements

- [ ] Convert to MVC architecture (Laravel/CodeIgniter)
- [ ] Add unit tests (PHPUnit)
- [ ] Implement caching (Redis)
- [ ] Add API rate limiting
- [ ] Implement soft deletes
- [ ] Add database migrations
- [ ] Use environment variables (.env)
- [ ] Add logging system
- [ ] Implement queue system for emails
- [ ] Add real-time notifications (WebSocket)

---

## 🤝 Contributing

Contributions are welcome! Here's how you can help:

### How to Contribute

1. **Fork the repository**
   ```bash
   git clone https://github.com/alphonsasooter/Task-Manager.git
   ```

2. **Create a feature branch**
   ```bash
   git checkout -b feature/amazing-feature
   ```

3. **Make your changes**
   - Write clean, commented code
   - Follow existing code style
   - Test thoroughly

4. **Commit your changes**
   ```bash
   git commit -m "Add amazing feature"
   ```

5. **Push to your fork**
   ```bash
   git push origin feature/amazing-feature
   ```

6. **Open a Pull Request**
   - Describe your changes
   - Reference any related issues
   - Wait for review

### Code Style Guidelines

- **PHP:** Follow PSR-12 coding standards
- **HTML:** Use semantic HTML5 elements
- **CSS:** Use BEM naming convention
- **JavaScript:** Use ES6+ features
- **SQL:** Use uppercase for keywords

### Reporting Bugs

Found a bug? Please open an issue with:
- Clear description of the problem
- Steps to reproduce
- Expected vs actual behavior
- Screenshots (if applicable)
- Your environment (OS, PHP version, etc.)

___


## 👤 Author

**Alphonsa Sooter**

- 🌐 GitHub: [@alphonsasooter](https://github.com/alphonsasooter)
- 📧 Email: alphonsasooter@gmail.com

---

## 🙏 Acknowledgments

- **Bootstrap Team** - For the amazing CSS framework
- **PHP Community** - For excellent documentation
- **XAMPP Team** - For the local development environment
- **GitHub** - For hosting this project
- **Stack Overflow** - For countless solutions
- **All Contributors** - Thank you for your contributions!

---

## 📚 Learn More

### PHP Resources
- [PHP Official Documentation](https://www.php.net/docs.php)
- [PHP The Right Way](https://phptherightway.com/)
- [W3Schools PHP Tutorial](https://www.w3schools.com/php/)

### MySQL Resources
- [MySQL Documentation](https://dev.mysql.com/doc/)
- [SQL Tutorial](https://www.sqltutorial.org/)
- [Database Design](https://www.lucidchart.com/pages/database-diagram/database-design)


---

<div align="center">

## ⭐ Show Your Support

If you find this project helpful, please give it a ⭐!

![GitHub stars](https://img.shields.io/github/stars/alphonsasooter/Task-Manager?style=social)
![GitHub forks](https://img.shields.io/github/forks/alphonsasooter/Task-Manager?style=social)
![GitHub watchers](https://img.shields.io/github/watchers/alphonsasooter/Task-Manager?style=social)

**Built with ❤️ using PHP, MySQL, and Bootstrap**

**Made in 2024**

</div>

---

<div align="center">

![Made with PHP](https://img.shields.io/badge/Made%20with-PHP-777BB4?style=for-the-badge&logo=php)
![Powered by MySQL](https://img.shields.io/badge/Powered%20by-MySQL-4479A1?style=for-the-badge&logo=mysql)
![Bootstrap](https://img.shields.io/badge/Styled%20with-Bootstrap-7952B3?style=for-the-badge&logo=bootstrap)

</div>
