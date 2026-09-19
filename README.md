<a name="readme-top"></a>

# Technical Summative Assessment 1: Module 1 and Module 2

A simple task management system made for IT0049 - Web System Technologies using CodeIgniter 4 and MySQL.

## Overview

This project is a small task management system that allows users to view tasks and user information.

It uses CodeIgniter 4, MVC architecture, and a MySQL database.

## Pages

* `/` - Shows today's tasks
* `/tasks` - Shows all tasks
* `/profile` - Shows the demo user's information
* `/about` - Shows information about the developer

## Features

* Displays today's tasks
* Displays all tasks from the database
* Displays one demo user
* Uses MySQL for storing data
* Uses CodeIgniter Models, Controllers, and Views

## File Structure

```text
WebSys-Tasks
├── app
│   ├── Config
│   │   └── Routes.php
│   ├── Controllers
│   │   ├── Pages.php
│   │   ├── Tasks.php
│   │   └── Profile.php
│   ├── Models
│   │   ├── TaskModel.php
│   │   └── UserModel.php
│   └── Views
│       ├── home.php
│       ├── tasks.php
│       ├── profile.php
│       └── about.php
├── database
│   └── tasks_management.sql
├── public
├── writable
├── composer.json
└── README.md
```

## Technologies

* PHP
* CodeIgniter 4
* MySQL
* Composer
* HTML

## Installation

Clone the repository:

```bash
git clone https://github.com/CestinaLover/WebSys-Tasks-Management.git
```

Go to the project folder:

```bash
cd WebSys-Tasks-Management
```

Install dependencies:

```bash
composer install
```

Set up the `.env` file with your database information.

Start the CodeIgniter server:

```bash
php spark serve
```

Open:

```text
http://localhost:8080/
```

## Database

The project uses MySQL with two tables:

* `tasks`
* `users`

The database export is included in:

```text
database/tasks_management.sql
```

## Developer

Aldous Exequiel S. Damaso
