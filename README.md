# Hostel Management System - NIT Kurukshetra

A comprehensive web-based hostel management system designed for NIT Kurukshetra to streamline hostel operations, student management, and administrative tasks.

## 🏢 Overview

This Hostel Management System is a PHP-based web application that provides a complete solution for managing hostel operations at NIT Kurukshetra. The system facilitates efficient management of student records, room allocations, mess details, leave requests, complaints, and notifications.

## ✨ Features

### 👨‍💼 Admin Features
- **Dashboard**: Comprehensive admin dashboard with system overview
- **Student Management**: View, search, and manage student details
- **Hostel Management**: Manage both male and female hostels
- **Mess Management**: Upload mess menus and bills
- **Leave Requests**: Review and manage student leave applications
- **Complaints**: View and respond to student complaints
- **Notifications**: Create and manage system-wide notifications

### 👨‍🎓 Student Features
- **Profile Management**: View and edit personal details
- **Room Details**: Check room allocation and hostel information
- **Mess Details**: View mess menus and bills
- **Leave Application**: Apply for leave with proper documentation
- **Complaint System**: Raise complaints and track responses
- **Notifications**: View important announcements

## 🛠️ Technology Stack

- **Frontend**: HTML5, CSS3, JavaScript
- **Backend**: PHP
- **Database**: MySQL/MariaDB
- **Server**: Apache (XAMPP/WAMP recommended)

## 📋 Prerequisites

Before running this application, ensure you have:

- PHP 7.4 or higher
- MySQL 5.7 or higher / MariaDB 10.4 or higher
- Apache Web Server
- Web browser (Chrome, Firefox, Safari, etc.)

## 🚀 Installation & Setup

### 1. Clone the Repository
```bash
git clone https://github.com/yourusername/Hostel-Management-System.git
cd Hostel-Management-System
```

### 2. Database Setup
1. Start your MySQL/MariaDB server
2. Create a new database named `hmsnitkkr`
3. Import the database schema:
   ```sql
   mysql -u root -p hmsnitkkr < SQL/hmsnitkkr.sql
   ```

### 3. Configuration
1. Open `partials/db_connect.php`
2. Update the database configuration if needed:
   ```php
   define('LOCALHOST','localhost');
   define('DB_USERNAME','root');
   define('DB_PASSWORD','your_password');
   define('DB_NAME','hmsnitkkr');
   ```

### 4. Web Server Setup
1. Copy the project folder to your web server directory:
   - **XAMPP**: `htdocs/Hostel-Management-System`
   - **WAMP**: `www/Hostel-Management-System`
   - **LAMP**: `/var/www/html/Hostel-Management-System`

2. Start your web server (Apache)

### 5. Access the Application
Open your web browser and navigate to:
```
http://localhost/Hostel-Management-System/
```

## 📁 Project Structure

```
Hostel-Management-System/
├── admin/                  # Admin panel files
│   ├── dashboard.php
│   ├── student_details.php
│   ├── complains.php
│   └── ...
├── students/              # Student portal files
│   ├── student_profile.php
│   ├── room_details.php
│   ├── applyleave.php
│   └── ...
├── css/                   # Stylesheets
├── js/                    # JavaScript files
├── image/                 # Images and media files
├── partials/              # Common PHP components
│   └── db_connect.php
├── SQL/                   # Database schema
│   └── hmsnitkkr.sql
├── uploads/               # File upload directories
│   ├── notifications/
│   ├── mess_bill/
│   └── menu/
├── index.php              # Landing page
├── signin.php             # Login page
├── signup.php             # Registration page
└── README.md
```

## 🗄️ Database Schema

The system uses the following main tables:

- **admin**: Admin credentials
- **students**: Student information and credentials
- **fhostels**: Female hostel details
- **mhostels**: Male hostel details
- **leaverequest**: Student leave applications
- **student_complains**: Student complaints and responses
- **notifications**: System notifications

## 🔐 Default Login Credentials

### Admin Access
- Navigate to: `http://localhost/Hostel-Management-System/admin/login.php`
- Use the credentials set up in your database

### Student Access
- Navigate to: `http://localhost/Hostel-Management-System/signin.php`
- Register as a new student or use existing credentials

## 🤝 Contributing

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## 📝 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 🐛 Known Issues

- Ensure proper file permissions for upload directories
- Update the SITEURL in `db_connect.php` for production deployment

## 📞 Support

For support and queries, please contact:
- Email: [your-email@example.com]
- GitHub Issues: [Create an issue](https://github.com/yourusername/Hostel-Management-System/issues)

## 🙏 Acknowledgments

- NIT Kurukshetra for the inspiration
- PHP community for excellent documentation
- Contributors and testers

---

**Made with ❤️ for NIT Kurukshetra**