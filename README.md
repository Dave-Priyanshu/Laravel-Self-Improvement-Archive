### **Project Name Suggestion:**
**EloCRUD-Laravel**

---

# EloCRUD-Laravel: A Simple Laravel CRUD Application with Eloquent ORM

![Laravel](https://img.shields.io/badge/Laravel-11.x-red.svg) ![PHP](https://img.shields.io/badge/PHP-8.3-blue.svg) ![Eloquent](https://img.shields.io/badge/Eloquent-ORM-orange.svg)

## 🚀 Introduction
**EloCRUD-Laravel** is a basic CRUD application built using Laravel's Eloquent ORM. It demonstrates how to handle CRUD (Create, Read, Update, Delete) operations using resource controllers and seed fake data with the help of Faker. This project includes a basic layout extended across multiple views for a clean and structured UI.

---

## 📂 Project Structure
- **Controllers**: We have utilized a resource controller for handling CRUD operations.
- **Views**: Simple Blade templates (adduser, home, updateuser, viewuser) are used for displaying user information and forms.
- **Layout**: The main layout file is extended in all view files for a consistent design across the app.

---

## ✨ Features
- **Resource Controller**: Simplifies the CRUD logic using Laravel's resourceful routes and methods.
- **Eloquent ORM**: Leverages the powerful Eloquent ORM for interacting with the database.
- **Faker Library**: Used `fake()` method to generate dummy data for users.
- **Blade Templating**: Clean and reusable Blade templates for UI rendering.
  
---

## 🛠️ Installation & Setup

### 1. Clone the repository
```bash
git clone https://github.com/your-username/EloCRUD-Laravel.git
```

### 2. Install dependencies
```bash
composer install
```

### 3. Configure the `.env` file
Copy the `.env.example` file to `.env` and update your database credentials:
```bash
cp .env.example .env
php artisan key:generate
```

### 4. Migrate the database
Run the migration command to create the necessary tables:
```bash
php artisan migrate
```

### 5. Seed fake data
Use the following command to seed the database with dummy data:
```bash
php artisan db:seed
```

### 6. Start the development server
Run the development server using Artisan:
```bash
php artisan serve
```

## 📄 Routes
The following routes are generated by Laravel’s resource controller for managing user data, by the use of the following command you will be able to see all the routes:

```bash
$ php artisan route:list --name=user
```

| **Method** | **URI**               | **Action**                       | **Route Name**        | **Description**                                               |
|------------|-----------------------|----------------------------------|-----------------------|---------------------------------------------------------------|
| GET        | /user                 | UserController@index             | user.index            | Displays a list of all users.                                  |
| POST       | /user                 | UserController@store             | user.store            | Stores a new user in the database.                             |
| GET        | /user/create          | UserController@create            | user.create           | Shows the form to create a new user.                           |
| GET        | /user/{user}          | UserController@show              | user.show             | Displays details for a specific user.                          |
| PUT/PATCH  | /user/{user}          | UserController@update            | user.update           | Updates an existing user's details in the database.            |
| DELETE     | /user/{user}          | UserController@destroy           | user.destroy          | Deletes a specific user from the database.                     |
| GET        | /user/{user}/edit     | UserController@edit              | user.edit             | Shows the form to edit an existing user's information.          |

---

## 📦 Technology Stack
- **Laravel 11.x**: The latest version of Laravel, a robust PHP framework for building modern web applications.
- **Eloquent ORM**: Laravel's native ORM, allowing seamless interaction with the database using an active record pattern.
- **Blade**: A clean and simple templating engine, which enables you to structure your views efficiently.
- **Faker**: A library used to generate fake data for testing purposes, making it easier to seed large datasets during development.

---

## 📸 Screenshots
1. **Home Page**: A list of all users with options to view, update, or delete.
2. **Add New User**: A simple form to add users.
3. **Update User**: A form to update user details.
---

### **Icons Credit:**
Icons by [Shields.io](https://shields.io/).

