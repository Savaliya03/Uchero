# 🌱 Uchero Garden - Gardening E-commerce Platform

## Project Overview

**Uchero Garden** is a PHP-based full-stack dynamic web application designed to promote and support home and professional gardening. It includes components like an admin panel, content modules, and user-friendly interfaces for e-commerce functionality. The platform serves as both a gardening marketplace and an educational hub, offering users tools, seeds, planting tips, and care guides.

---

## 🔧 Project Functionality

### 1. User Module
- 🔐 **User Registration/Login:** Secure account creation and login system.
- 👤 **Profile Management:** Users can update their details and view order history.
- 🛒 **Cart & Checkout:** Add products to the cart and proceed to checkout.
- 📦 **Order Tracking:** View placed orders and track delivery status.

### 2. Product Module
- 🪴 **Browse Products:** Users can view categories like:
  - Flowers
  - Pots
  - Fertilizers
  - Garden Tools
- 📚 **Product Details:** Each product includes name, price, image, description, use-case, planting time, and care instructions.
- 🔎 **Search & Filter:** Users can search products by name, category, or care tips.

### 3. Admin Module
- ➕ **Add/Edit/Delete Products:** Admin can manage inventory through the dashboard.
- 📊 **View Orders & Customers:** Admin can view placed orders and user info.
- 📦 **Stock Management:** Keep track of product quantities and update availability.
- 📝 **Add Gardening Tips:** Admin can upload gardening tutorials and tips.

### 4. Gardening Information Center
- 📖 **Learn Gardening:** Includes information about:
  - How to use each product
  - When and how to plant
  - Watering and care schedules
- 🧠 **FAQs & Blogs:** Common questions and seasonal gardening blogs.

### 5. Responsive UI
- 📱 **Mobile Friendly:** Smooth experience on all devices using Tailwind CSS.
- 🧭 **Navigation:** Clean navbar with active link highlighting and easy section navigation.

---

## ✨ Key Features

| Feature                     | Description |
|----------------------------|-------------|
| 🛍️ Product Marketplace     | Buy pots, plants, tools, fertilizers with full guidance |
| 🧠 Gardening Knowledge Base | Learn what to plant, when to plant, and how to care     |
| 👨‍🌾 User-Friendly Dashboard | Easy management for both users and admins              |
| 📷 Image-Based Listings     | Visual product display for easier decision making       |
| 🔐 Secure Login System      | Handles login, registration, and password protection     |
| 🔄 Dynamic Cart System      | Add/remove products, see total price before purchase     |
| 🌐 SEO-Ready                | Searchable content with detailed product tags            |
| 📦 Order Management         | Track and manage your orders easily                     |

---

## 🏗️ Tech Stack

- **Frontend:** HTML, CSS, Tailwind CSS, JavaScript  
- **Backend:** PHP  
- **Database:** MySQL (via PhpMyAdmin)  
- **Server:** XAMPP / Apache  
- **Tools:** Visual Studio Code, Git, GitHub  

---

## 📁 Folder Structure

- `admin/` - Contains administrative interface and backend management files for site administration.
- `content/` - Holds the main content files for the website.
- `footer/` - Footer section files for the website.
- `header/` - Header section files for the website.
- `pics/` - Image assets used throughout the website.
- `index.php` - The main entry point of the website.
- `garden.sql` - SQL database file for setting up the project's database schema and initial data.

---

## ⚙️ Setup and Installation

1. Ensure you have a web server with PHP support installed (e.g., XAMPP, WAMP).
2. Import the `garden.sql` file into your MySQL database to set up the necessary tables and initial data.
3. Place the Uchero project folder in your web server's root directory (e.g., `htdocs` for XAMPP).
4. Configure your database connection settings in the appropriate configuration files (likely inside `admin/` or `content/` folders).
5. Access the website via `http://localhost/Uchero/` in your web browser.

---

## 📦 Database

The `garden.sql` file contains the database schema and initial data required for the project. Make sure to import it before running the application.

---

## 🤝 Contributing

Contributions are welcome!  
Fork the repository and submit pull requests for any improvements or bug fixes.

---

## 🧾 License

Specify your project's license here (e.g., MIT License).

---

## 📬 Contact

For questions or support, feel free to contact the project maintainer.

