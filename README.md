# POS System (TFA1): From Zero to Four Pages

A four-page Point-of-Sale (POS) website built with CodeIgniter 4. This is the first version of the system: it focuses on routing, controllers, and views, and uses static PHP arrays as a temporary data source (no database yet).

## Course Information

- **Course:** IT0049 – Web System Technologies
- **Activity:** Technical Formative Assessment 1 – From Zero to Four Pages: Your First CodeIgniter Application
- **Student:** Kyle Rianne Andrei Dionio
- **Section:** TC33
- **Professor:** Von Erick Magbitang
- **GitHub:** [ladiesman416/pos-system-tfa1](https://github.com/ladiesman416/pos-system-tfa1)
- **Live Demo:** [https://pos-kyle.gt.tc/?i=1](https://pos-kyle.gt.tc/?i=1)

## Table of Contents

- [Overview](#overview)
- [Features](#features)
- [Pages and Routes](#pages-and-routes)
- [Tech Stack](#tech-stack)
- [Project Structure](#project-structure)
- [How It Works (MVC)](#how-it-works-mvc)

## Overview

This project is the foundation of a basic POS system. It demonstrates how CodeIgniter turns a URL into a page using the Model-View-Controller (MVC) pattern:

- **Routes** decide which controller method runs for a given URL.
- **Controllers** decide what to do and prepare the data.
- **Views** render the HTML that the browser receives.

The Customer Accounts and User Accounts pages loop through a static PHP array exactly the way they will later loop through database results.

## Features

- Four working pages with a shared navigation bar
- Clean routes registered in `app/Config/Routes.php`
- Separate controllers for general pages, customers, and users
- A shared layout view (`layout.php`) reused by every page
- Customer and user listings generated with `foreach` loops over static arrays
- Output escaped with CodeIgniter's `esc()` helper
- Simple CSS styling in `public/css/style.css`
- Default CodeIgniter welcome page and route removed

## Pages and Routes

| URL          | Route Target       | Description                                  |
|--------------|--------------------|----------------------------------------------|
| `/`          | `Pages::index`     | Landing page                                 |
| `/about`     | `Pages::about`     | About page describing the project            |
| `/customers` | `Customers::index` | Customer Accounts: full name, email, phone   |
| `/users`     | `Users::index`     | User Accounts: username, full name, role     |

## Tech Stack

- PHP 8.1 or higher
- CodeIgniter 4 (installed through Composer)
- HTML / CSS for the views
- Composer for dependency management

## Project Structure

Only the files relevant to this activity are listed:

```text
pos-system-tfa1/
├── app/
│   ├── Config/
│   │   └── Routes.php          # Route definitions
│   ├── Controllers/
│   │   ├── Pages.php           # Landing and About pages
│   │   ├── Customers.php       # Customer Accounts (static array)
│   │   └── Users.php           # User Accounts (static array)
│   └── Views/
│       ├── layout.php          # Shared layout and navigation
│       ├── pages/
│       │   ├── home.php        # Landing page view
│       │   └── about.php       # About page view
│       ├── customers/
│       │   └── index.php       # Customer table view
│       └── users/
│           └── index.php       # User table view
├── public/
│   ├── css/
│   │   └── style.css           # Styling
│   └── index.php               # Front controller
├── env                         # Environment template (copy to .env)
├── composer.json
└── README.md
```

## How It Works (MVC)

1. The browser requests a URL such as `/customers`.
2. `app/Config/Routes.php` matches the URL to `Customers::index`.
3. The `Customers` controller builds a static array of customer records.
4. The controller passes the array to the `customers/index` view with `view()`.
5. The view extends `layout.php`, loops through the array with `foreach`, and outputs a table row for each record.
6. The rendered HTML is returned to the browser.