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

<div align="center">

### ⭐ Show Your Support

If you find this project helpful, please give it a ⭐!
<p align="center">

<img src="https://img.shields.io/github/stars/alphonsasooter/Task-Manager?label=STARS&style=for-the-badge"/>
<img src="https://img.shields.io/github/forks/alphonsasooter/Task-Manager?label=FORKS&style=for-the-badge"/>
<img src="https://img.shields.io/github/watchers/alphonsasooter/Task-Manager?label=WATCHERS&style=for-the-badge"/>

</p>

</div>

___

<p align="center">
  Built with ❤️ using PHP, MySQL, and Bootstrap
</p>

<p align="center">
  Made in 2024
</p>

---

<div align="center">

![Made with PHP](https://img.shields.io/badge/Made%20with-PHP-777BB4?style=for-the-badge&logo=php)
![Powered by MySQL](https://img.shields.io/badge/Powered%20by-MySQL-4479A1?style=for-the-badge&logo=mysql)
![Bootstrap](https://img.shields.io/badge/Styled%20with-Bootstrap-7952B3?style=for-the-badge&logo=bootstrap)

</div>
