# AURA-website

AURA - Reveal The Beauty of Skin

Introduction

Welcome to AURA! This website is dedicated to showcasing our exclusive range of skincare products crafted with clean, non-toxic ingredients designed for everyone. Whether you're looking for our latest collections, bestsellers, or special offers, AURA has you covered.


Features


1.Responsive Design: Optimized for a seamless experience across all devices.

2.Product Showcase: View featured collections, offers, and bestsellers.

3.Dynamic Navigation: Easy access to all sections, including Home, Collection, Shop, Offers, Blog, and more.

4.Search Functionality: Quickly locate specific products using the search feature.

5.User Engagement: Subscribe to newsletters and stay updated with new launches and collections.

6.Secure Shopping: Compatible with all major payment methods for a safe shopping experience.





Sections



1.Hero Section: Highlights our brand's mission and key product offerings with stunning visuals.

2.Collections: Displays curated collections with enticing deals.

3.Shop: A carousel showcasing bestsellers and products under $25.

4.Offers: Special promotions, including a countdown for limited-time deals.

5.Blog: Explore articles, stories, and updates related to skincare and the AURA brand.

6.Footer: Company details, quick links, and social media integration.



Setup Instructions



1.Download or clone the project repository.

2.Ensure all assets (images, CSS, JavaScript) are correctly linked and stored in the /assets/ directory.

3.Use a local server (like VS Code's Live Server or XAMPP) to preview the website.




Technologies Used


1.HTML: Structure and content.

2.CSS: Styling, responsiveness, and aesthetics.

3.JavaScript: Interactivity and functionality.

4.Google Fonts: Urbanist font integration.

5.Ionicons: Icons for user actions and navigation.







 
 
 
 ⚙️ Setup Instructions

 1. How to Import the Database

1. Start **XAMPP** or **WAMP** and make sure **MySQL** is running.
2. Open **phpMyAdmin** in your browser:  
   `http://localhost/phpmyadmin`
3. Click **"New"**, then enter a database name (e.g., `your_project_db`) and click **Create**.
4. Select the new database, then go to the **Import** tab.
5. Click **Choose File** and select the `database.sql` file from this project.
6. Click **Go** to import the database structure and data.

---

 2. How to Run the Project Using XAMPP/WAMP

1. Start **Apache** and **MySQL** from the XAMPP/WAMP control panel.
2. Copy the entire project folder (e.g., `project/`) into:
   - `C:\xampp\htdocs\` (for XAMPP)  
   - or `C:\wamp\www\` (for WAMP)
3. Open your browser and visit:  
   `http://localhost/project/`  
   *(Replace `project` with your folder name if different.)*

---



- Make sure your `includes/db.php` file contains the correct database connection settings:
  ```php
  $conn = new mysqli('localhost', 'root', '', 'your_project_db');



