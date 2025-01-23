# Network Management System (NMS) Application

A simplified web application built using the Yii 2 Advanced Framework for managing network devices. The application provides basic CRUD operations for devices, user authentication, and real-time status monitoring.

---

## Features

### Device Management

- **Add Device**: Create a new network device with fields such as:
  - Device Name
  - IP Address
  - Device Type (Router, Switch, Firewall)
  - Status (Online/Offline)
- **View Devices**: Display a list of all devices in a tabular format.
- **Edit Device**: Update device information.
- **Delete Device**: Remove a device from the database.

### User Authentication

- Secure login system.
- Restrict access to the device management features for authenticated users only.

### Status Monitoring

- Real-time simulation of device status (Online/Offline).
- Highlights offline devices.

### Responsive Design

- Fully responsive layout using Bootstrap.
- Works on desktops, tablets, and mobile devices.

---

## Technologies Used

- **Framework**: Yii 2 Advanced
- **Languages**: PHP, HTML5, CSS3, JavaScript
- **Frontend**: Bootstrap
- **Database**: MySQL
- **Version Control**: Git

---

## Installation Guide

### Prerequisites

- PHP 7.4 or higher
- Composer
- MySQL or SQLite database
- A web server (e.g., Apache, Nginx)

### Steps

1. **Clone the Repository**:

   ```bash
   git clone <repository_url>
   cd nms
   ```

2. **Install Dependencies**:

   ```bash
   composer install
   ```

3. **Initialize Yii Application**:

   ```bash
   php init
   ```

   - Select `Development` mode.

4. **Configure the Database**:
   Update `common/config/main-local.php` with your database credentials:

   ```php
   'db' => [
       'class' => 'yii\db\Connection',
       'dsn' => 'mysql:host=localhost;dbname=nms',
       'username' => 'root',
       'password' => '',
       'charset' => 'utf8',
   ],
   ```

5. **Run Migrations**:
   Create the required tables:

   ```bash
   php yii migrate
   ```

6. **Start the Application**:
   ```bash
   php yii serve --docroot=backend/web
   ```
   Open the application in your browser at `http://localhost:8080`.

---

## Live Demo

- **URL**: [Live Application Link](#)

---

## Folder Structure

- **Frontend**: Handles public-facing pages (if applicable).
- **Backend**: Handles administrative features like device management.
- **Common**: Shared files, including models and configurations.

---

## Additional Notes

- To log in, use the default user credentials:
  - Username: `admin`
  - Password: `admin` (make sure to update this in production).
- Customize roles and permissions by extending Yii's Role-Based Access Control (RBAC).

---

## License

This project is open-source and available under the [MIT License](LICENSE).
