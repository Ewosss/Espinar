# Laravel Portfolio CMS

A modern **Laravel-based portfolio website** with a built-in **Content Management System (CMS)** that allows easy management of projects, skills, experiences, and other portfolio content without modifying the source code.

This project is ideal for students, developers, and professionals who want a customizable portfolio with an admin dashboard for content control.

---

## 🚀 Features

* 🔐 Authentication & Authorization (Admin login)
* 📝 CMS Dashboard for managing portfolio content
* 📂 Project Management (CRUD)
* 🧠 Skills & Technologies Management
* 👤 About Me & Profile Section
* 📰 Blog / Articles (optional)
* 🖼️ Image Upload & Media Management
* 🎨 Responsive UI (Bootstrap / Tailwind)
* 🌐 SEO-friendly pages
* ⚙️ Laravel MVC Architecture

---

## 🛠️ Built With

* **Laravel** (PHP Framework)
* **MySQL** (Database)
* **Blade** (Template Engine)
* **Bootstrap / Tailwind CSS** (UI Styling)
* **JavaScript / Alpine.js** (Interactivity)

---

## 📋 Requirements

Before running the project, make sure you have the following installed:

* PHP >= 8.1
* Composer
* MySQL or MariaDB
* Node.js & npm (for frontend assets)
* Git

---

## 📦 Installation

1. **Clone the repository**

```bash
git clone https://github.com/your-username/laravel-portfolio-cms.git
```

2. **Navigate to the project directory**

```bash
cd laravel-portfolio-cms
```

3. **Install PHP dependencies**

```bash
composer install
```

4. **Install frontend dependencies**

```bash
npm install
npm run build
```

5. **Create environment file**

```bash
cp .env.example .env
```

6. **Generate application key**

```bash
php artisan key:generate
```

7. **Configure database**

Update your `.env` file:

```
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

8. **Run migrations and seeders**

```bash
php artisan migrate --seed
```

9. **Start the development server**

```bash
php artisan serve
```

Visit: `http://127.0.0.1:8000`

---

## 🔑 Admin Access

After seeding, you can log in to the admin panel:

* **URL:** `/admin/login`
* **Email:** [admin@example.com](mailto:admin@example.com)
* **Password:** password

> ⚠️ Change the default credentials after first login.

---

## 🧩 CMS Modules

* **Projects** – Manage portfolio projects (title, description, images, links)
* **Skills** – Add and update skills with proficiency levels
* **Experience** – Manage work or academic experience
* **Profile** – Edit personal information and bio
* **Blog** – Publish articles or updates (optional)

---

## 📁 Project Structure (Simplified)

```
app/
 ├── Http/Controllers
 ├── Models
resources/
 ├── views
 │   ├── admin
 │   ├── portfolio
routes/
 ├── web.php
 ├── admin.php
```

---

## 🔒 Security

* CSRF protection enabled
* Password hashing using Laravel Hash
* Role-based access for admin routes

---

## 📈 Future Improvements

* Multi-user roles (Admin / Editor)
* API integration
* Dark mode
* Drag-and-drop CMS editor
* Deployment guide (cPanel / VPS)

---

## 🤝 Contributing

Contributions are welcome!

1. Fork the project
2. Create your feature branch (`git checkout -b feature/new-feature`)
3. Commit changes (`git commit -m 'Add new feature'`)
4. Push to branch (`git push origin feature/new-feature`)
5. Open a Pull Request

---

## 📄 License

This project is open-source and available under the **MIT License**.

---

## 👨‍💻 Author

Developed by **Your Name**
📧 Email: [your-email@example.com](mailto:your-email@example.com)
🌐 Portfolio: your-portfolio-link

---

⭐ If you find this project helpful, please give it a star on GitHub!
