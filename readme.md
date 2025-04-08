# Simple Login System

A lightweight full-stack login and registration system using PHP, MySQL, HTML/CSS, and JavaScript. This project was and used as my mini portfolio

---

##

- **Frontend**: HTML, CSS, JavaScript
- **Backend**: PHP (XAMPP)
- **Database**: MySQL (query.sql)

## Features

- User registration & login
- Role-based access: `mahasiswa` and `dosen`
- Session handling and logout
- Simple front-end form validation
- Responsive design (basic)

## How to Run

1. Install [XAMPP]
2. Place this project folder inside the `htdocs` directory.
3. Start Apache and MySQL via the XAMPP Control Panel.
4. Open `http://localhost/phpmyadmin` and import the `query.sql` file to create the database and tables.
5. rename `config_example.php` to `config.php`and replace the placeholder
6. Visit `http://localhost/your-folder-name/index.php` in your browser.
7. Register a new user and then Login

## Files

| File                 | Description                                                  |
| -------------------- | ------------------------------------------------------------ |
| `index.php`          | Landing page                                                 |
| `login_register.php` | Login and registration handling                              |
| `dosen_page.php`     | Page for `dosen` users                                       |
| `mahasiswa_page.php` | Page for `mahasiswa` users                                   |
| `logout.php`         | Ends user session                                            |
| `config.php`         | Database connection                                          |
| `script.js`          | Basic JS validation                                          |
| `style.js`           | Styling logic (optional; move to `.css` for better practice) |
| `query.sql`          | SQL file to set up the database                              |
