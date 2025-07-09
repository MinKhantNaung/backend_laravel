# Laravel API Backend - Image Upload & Paginated Gallery (Sanctum Auth)

This is the backend API for an image upload and gallery project built with Laravel. It is designed to work with the Vue frontend found in this repo:  
👉 [Frontend Vue Repository](https://github.com/MinKhantNaung/frontend_vue_gallery)

The goal of this project is to help developers learn how to build and integrate a full-stack application using a Vue frontend and a Laravel API backend, with authentication, pagination, and route protection.

---

## ⚙️ Features

- 🔐 **Laravel Sanctum** authentication (session-based using CSRF cookies)
- 📤 **Image upload** endpoint with file validation and storage
- 📄 **Paginated image listing** API
- 🧪 **Simple auth-protected routes** for actions
- 🧼 Guest and auth middleware protection

---

## 🧠 What You’ll Learn

- How to configure Laravel Sanctum for SPA (Session + CSRF based) auth
- How to handle login, register, logout with Laravel for frontend SPAs
- How to build and return paginated API resources
- How to protect API routes with `auth:sanctum` middleware

---

## 📁 Web Routes (CSRF Protected - Session Auth via Sanctum)

| Method | Route            | Description                 | Middleware     |
|--------|---------------------|-----------------------------|----------------|
| POST   | /register           | Register new user           | guest          |
| POST   | /login              | Login user                  | guest          |
| POST   | /logout             | Logout user                 | auth   |

---

## 📁 API Routes (Prefixed with /api)

| Method | Route            | Description                 | Middleware     |
|--------|---------------------|-----------------------------|----------------|
| GET   | /api/images           | Get paginated image list          | auth:sanctum          |
| POST   | /api/images              | Upload image                  | auth:sanctum          |
| DELETE   | /api/images/{image}             | Delete image                 | auth:sanctum   |

## 🔧 Project Setup
This Laravel project is an API-only backend, so you do not need to install or use Node.js or npm.

```bash
git clone https://github.com/MinKhantNaung/backend_laravel_gallery.git
```

```bash
cd backend_laravel_gallery
```

```bash
composer install
```

```bash
cp .env.example .env
```
Edit your .env file to match your database and app configuration nano .env # or edit manually
```bash
php artisan key:generate
```
```bash
php artisan migrate
```
```bash
php artisan serve
```
