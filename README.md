# Research Publication Website

The **Research Publication website** is a Laravel-based web application designed to help academic departments at **NUST University** publish, manage, and organize their internal research papers in a central online repository.  
This system provides a structured, searchable, and user-friendly environment where research papers can be uploaded by departments and easily accessed by faculty, students, and researchers.

This repository serves as a **public developer reference**, offering insights into how university-level research publishing platforms can be built using Laravel.

---

## 🎯 Project Purpose

Universities often produce hundreds of research papers every year, but lack a unified platform to publish and showcase them.  
This portal was created to:

- Provide a centralized place for departments to publish research  
- Ensure consistent formatting and metadata for each publication  
- Give students and faculty easy access to academic work  
- Maintain long-term archives of internal research outputs  

The system supports departmental autonomy while maintaining a consistent, professional presentation of academic publications.

---

## 🧩 Key Features

### 📄 Research Paper Publishing
- Upload research papers in **PDF format**
- Add metadata:
  - Title  
  - Authors  
  - Publication Year  
  - Department  
  - Research Category  
  - Abstract  
  - Keywords  
- SEO-friendly URLs for each paper
- Public-to-internal visibility control

### 🔍 Search & Filter
- Full-text title and keyword-based search
- Filters for:
  - Department  
  - Year  
  - Category  
- Quick PDF view/download buttons

### 🏫 Department-Based Management
- Each department manages its own publications
- Department coordinators can upload, edit, and remove papers
- Access control based on user role

### 👨‍🏫 Author Profiles
- Optional author listing with:
  - Name  
  - Department  
  - Profile information  
  - List of authored papers  

### 📊 Admin Dashboard
- Overview of total papers, authors, and categories
- User management (Admins & Department Coordinators)
- Activity logs (optional depending on configuration)

### 📁 File & Storage Handling
- Secure Laravel storage for PDFs  
- MIME validation  
- Automatic folder structuring  

---

## 🛠️ Tech Stack (Laravel Version)

- **Laravel 9.x** (Built in 2023)
- **PHP 8.0+**
- **MySQL 5.7 / 8**
- **Blade Templates**
- **Bootstrap 5 / Tailwind (depending on final UI)**
- **Laravel Storage** for PDF handling
- **Eloquent ORM**

---

## 🔒 Security Features

- Role-based authentication (Admin / Department Coordinator)
- Laravel Sanctum / session-based login
- CSRF protection (default Laravel middleware)
- File validation (PDF size, type, MIME)
- Sanitized and validated form input
- Restricted routes using middleware

---

## 👨‍💻 My Contribution

As the full-stack developer, my responsibilities included:

- Building the complete system using **Laravel 9**  
- Designing the **database schema** for papers, categories, departments, and authors  
- Creating **upload workflows** for research papers with PDF storage  
- Developing **search functionality and advanced filters**  
- Implementing **admin and department coordinator roles**  
- Designing UI layouts for public browsing and admin management  
- Deploying and configuring the system on university hosting  
- Ensuring fast performance and easy maintainability  

This project demonstrates my ability to develop **academic-grade publication systems** and manage structured content at scale.

---

## 🧱 Installation & Setup (For Developers)

### Requirements
- PHP 8.0+
- Composer
- MySQL 5.7 / 8
- Laravel 9.x
- Apache/Nginx

### Setup Steps
1. Clone the repository  
   ```bash
   git clone https://github.com/<your-username>/NUST-Research-Portal.git
