# Week 3 – Day 3: MVC Architecture

## Objective
Understand Laravel's Model-View-Controller architecture by building a Student CRUD application.

## Features
- List, view, create, edit, and delete students
- Validate form input
- Paginate the student list

## MVC components
- Model: `app/Models/Student.php`
- Views: `resources/views/students/`
- Controller: `app/Http/Controllers/StudentController.php`

## Setup
This folder contains files to copy into an existing Laravel application; it is not a complete Laravel installation.

1. Copy the contents of `mvc-architecture/` into the root of your Laravel project, preserving directory structure.
2. Configure your database connection in `.env`.
3. Run `php artisan migrate`.
4. Start the server with `php artisan serve`.
5. Visit `http://127.0.0.1:8000/students`.

## CRUD routes
| Method | URI | Action |
|---|---|---|
| GET | `/students` | List students |
| GET | `/students/create` | Show create form |
| POST | `/students` | Store student |
| GET | `/students/{student}` | Show student |
| GET | `/students/{student}/edit` | Show edit form |
| PUT/PATCH | `/students/{student}` | Update student |
| DELETE | `/students/{student}` | Delete student |

## Notes
- The migration filename has a timestamp so Laravel can discover it.
- `$fillable` protects mass assignment.
- Forms use CSRF protection and method spoofing for PUT and DELETE.
- The resource route registers the standard CRUD endpoints.

## Technologies
PHP, Laravel, Eloquent ORM, Blade, HTML, SQL, Git, GitHub
