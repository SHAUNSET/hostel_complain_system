# 🏨 Hostel Complaint Management System
 
> A role-based complaint tracking web application for hostel administration — built with PHP, MySQL, and Apache via XAMPP.
 
---
 
## 🔍 Overview
 
The **Hostel Complaint Management System** streamlines the process of submitting, tracking, and resolving hostel-related complaints. Students can log in to submit complaints and monitor their status in real time, while administrators have a centralized dashboard to review and resolve all open issues.
 
---
 
## ✨ Features
 
### 👨‍🎓 Student Module
| Feature | Description |
|---|---|
| Registration | Create a new student account |
| Secure Login | Session-based authentication with role detection |
| Submit Complaint | File a new complaint directly from the dashboard |
| Complaint History | View all personally submitted complaints |
| Status Tracking | Monitor real-time `Pending` / `Resolved` status |
| Auto Login | Persistent session until manual logout |
 
### 👨‍💼 Admin Module
| Feature | Description |
|---|---|
| Secure Login | Dedicated admin authentication |
| View All Complaints | Centralized view of every student complaint |
| One-Click Resolve | Mark complaints as resolved instantly |
| Real-Time Updates | Status changes reflected immediately |
| Admin Dashboard | Clean overview for complaint management |
 
---
 
## 🛠️ Tech Stack
 
| Layer | Technology |
|---|---|
| **Frontend** | HTML5, CSS3 |
| **Backend** | PHP |
| **Database** | MySQL |
| **Server** | Apache (via XAMPP) |
| **Environment** | localhost — ports `80` (HTTP) & `3306` (MySQL) |
 
---
 
## 📂 Project Structure
 
```
hostel_complain/
│
├── index.php               # Entry point — login page (session-aware)
├── register.html           # Student registration form
├── register.php            # Handles registration logic
├── login.php               # Authentication & session creation
│
├── student.php             # Student dashboard
├── admin.php               # Admin dashboard
│
├── complaint.php           # Complaint submission form
├── submit_complaint.php    # Inserts complaint record into DB
├── my_complaints.php       # Student's personal complaint history
│
├── resolve.php             # Marks a complaint as resolved
├── logout.php              # Destroys session & redirects
│
├── style.css               # Global stylesheet
└── database.sql            # Database schema reference
```
 
---
 
## 🗄️ Database Design
 
### `users` Table
```sql
CREATE TABLE users (
    id         INT AUTO_INCREMENT PRIMARY KEY,
    username   VARCHAR(100)  NOT NULL,
    password   VARCHAR(100)  NOT NULL,
    role       VARCHAR(20)   NOT NULL
);
```
 
### `complaints` Table
```sql
CREATE TABLE complaints (
    id          INT AUTO_INCREMENT PRIMARY KEY,
    username    VARCHAR(100)  NOT NULL,
    complaint   TEXT          NOT NULL,
    status      VARCHAR(50)   DEFAULT 'Pending',
    created_at  TIMESTAMP     DEFAULT CURRENT_TIMESTAMP
);
```
 
---
 
## 🔐 Authentication Flow
 
```
Register ──► Login ──► Session Created ──► Dashboard (Student / Admin)
```
 
- Session stores both `username` and `role`
- Automatic redirect to the appropriate dashboard based on role
- Session persists until the user explicitly logs out
---
 
## ⚙️ Functional Flow
 
### 👨‍🎓 Student Flow
 
```
Login
  └─► Student Dashboard
        └─► Submit Complaint  ──►  Stored in DB  [Status: Pending]
        └─► My Complaints     ──►  Live status updates
```
 
### 👨‍💼 Admin Flow
 
```
Login
  └─► Admin Dashboard
        └─► View All Complaints
              └─► Click Resolve  ──►  Status updated to [Resolved]
```
 
### 🔄 Complaint Lifecycle
 
```
[ Pending ]  ──────(Admin Action)──────►  [ Resolved ]
```
 
> Default status is set at the database level via `DEFAULT 'Pending'`.  
> Admin triggers `resolve.php` to update the status.  
> Students see the change reflected immediately on their dashboard.
 
---
 
## 🚀 Getting Started
 
### Prerequisites
- [XAMPP](https://www.apachefriends.org/) installed on your machine
### Installation
 
**1. Clone or download the project**
```bash
git clone https://github.com/your-username/hostel_complain.git
```
 
**2. Move the project to the XAMPP web root**
```
C:\xampp\htdocs\hostel_complain\
```
 
**3. Start XAMPP services**
- Open the XAMPP Control Panel
- Start **Apache** and **MySQL**
**4. Import the database**
- Open [phpMyAdmin](http://localhost/phpmyadmin)
- Create a new database named `hostel_complain`
- Import `database.sql` from the project root
**5. Launch the application**
```
http://localhost/hostel_complain/
```
 
---
 
## 🧠 Key Concepts Demonstrated
 
- PHP session management
- MySQL CRUD operations
- Prepared statements for SQL injection prevention
- Role-based access control (RBAC)
- GET vs POST request handling
- Server–client architecture
- Apache + MySQL interaction via XAMPP
- MVC-inspired separation of logic and presentation
---
 
## 🔮 Future Improvements
 
- [ ] Password hashing with **bcrypt**
- [ ] Hardened admin authentication
- [ ] Complaint **categories & tags**
- [ ] File / image upload support for complaints
- [ ] Email notifications on status change
- [ ] Dark mode UI
- [ ] REST API backend version
---
 
## 📊 Project Status
 
| Component | Status |
|---|---|
| Backend logic | ✅ Complete |
| Authentication system | ✅ Working |
| Role-based access | ✅ Implemented |
| Admin dashboard | ✅ Functional |
| Complaint lifecycle | ✅ Working |
| UI / Styling | 🔧 Under refinement |
 
