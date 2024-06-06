# TodoList Application

## Table of Contents

- [Introduction](#introduction)
- [Features](#features)
- [Architecture](#architecture)
- [Usage](#usage)
- [File Structure](#file-structure)
- [Contributing](#contributing)
- [License](#license)

## Introduction

The TodoList application is a simple task management system that helps users manage their daily tasks. It is built using PHP, follows the MVC architecture, and employs object-oriented programming principles to ensure modularity and maintainability.

## Features

- Add, update, and delete tasks.
- Mark tasks as completed.
- View all tasks or filter by completed status.
- Responsive design.

## Architecture

The application follows the MVC (Model-View-Controller) architecture:

- **Model**: Handles the data and business logic.
- **View**: Manages the presentation layer and user interface.
- **Controller**: Acts as an intermediary between Model and View, handling user input and updating the Model and View accordingly.
## Usage
Add Task: Enter the task details in the provided form and click "Add Task".
Update Task: Click on the task you want to update, modify the details, and save.
Delete Task: Click the delete button next to the task you want to remove.
Mark as Completed: Click the checkbox next to the task to mark it as completed.

##File Structure

todolist-mvc-oop-php/
│
├── config/
│   └── Database.php        # Database configuration
│
├── controllers/
│   └── TodoController.php  # Controller for handling requests
│
├── models/
│   └── Task.php            # Model for task data
│
├── views/
│   ├── templates/
│   │   ├── header.php      # Header template
│   │   └── footer.php      # Footer template
│   └── todos/
│       └── index.php       # Main view for displaying tasks
│
├── public/
│   ├── css/
│   │   └── styles.css      # CSS styles
│   └── index.php           # Entry point
│
├── .gitignore              # Git ignore file
├── README.md               # This file
└── composer.json           # Composer dependencies
##Contributing

Contributions are welcome! Please fork the repository and submit a pull request with your changes. Ensure your code follows the project's coding standards and includes appropriate tests.

##License

This project is licensed under the MIT License. See the LICENSE file for details
