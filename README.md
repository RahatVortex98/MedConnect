MedConnect Appointment & Consultation Platform

🌟 Project Overview

The One-Health Appointment & Consultation Platform is a modern, user-centric web application built on the Laravel framework. The core objective is to promote 'Healthy Living' by creating a seamless digital experience that makes healthcare services, consultation, and information accessible and convenient. It serves as the main digital front door for a comprehensive healthcare center.

✨ Key Features

1. User Engagement & Navigation

Hero Section: High-impact landing page with a primary Call-to-Action (CTA) to "Let's Consult", dynamically routing users to the Appointment Booking system.

Quick Service Cards: Prominent, animated access to three core services:

Chat with Doctors: Real-time online consultation portal.

One-Health Protection: Information and enrollment for preventative care plans.

One-Health Pharmacy: Direct access to prescription fulfillment services.

Informational Sections: Dedicated 'Welcome to Your Health Center' and 'Learn More' sections linked to the full About Us page.

2. Technical and UX Highlights

Dynamic Routing: Leverages Laravel's robust routing capabilities (e.g., {{ route('appointment.book') }}) for clean, maintainable, and predictable URLs.

Responsive Design: Fully responsive layout built using a grid system (e.g., Bootstrap or similar utility classes) to ensure optimal viewing and usability across all devices (mobile, tablet, desktop).

Scroll Animations: Integration of the WOW.js library for smooth, scroll-triggered animations (zoomIn, fadeInUp), enhancing the user experience and visual engagement.

🛠️ Technology Stack

Backend Framework: PHP, Laravel (vX.X)

Database: (Placeholder: MySQL/PostgreSQL)

Frontend: HTML5, CSS3, JavaScript

Templating: Laravel Blade Engine

UX/Animations: WOW.js

⚙️ Installation and Setup (Laravel)

Follow these steps to get a local copy of the project running:

Clone the Repository:

git clone [Your Repository URL]
cd one-health-platform


Install Dependencies:

composer install
npm install


Environment Setup:

Copy the example environment file:

cp .env.example .env


Generate the application key:

php artisan key:generate


Database Configuration:

Update your .env file with your database credentials (DB_DATABASE, DB_USERNAME, DB_PASSWORD).

Run migrations and seeders (if applicable):

php artisan migrate --seed


Compile Assets and Run:

npm run dev  # or npm run watch
php artisan serve

<img width="695" height="211" alt="Capture1" src="https://github.com/user-attachments/assets/3cd1f463-f2a7-41a4-826a-f70496a956bd" />

<img width="693" height="306" alt="Capture2" src="https://github.com/user-attachments/assets/77ffe8e5-826b-4d2f-acd9-330de4cf1ec5" />



The application will be accessible at http://127.0.0.1:8000 (or similar).

User Interface:

Home page:
<img width="1366" height="3592" alt="Home Page" src="https://github.com/user-attachments/assets/8cb598df-ce8a-40bc-be05-a0780c3d1796" />

Doctors:
<img width="1366" height="651" alt="doctorsPage" src="https://github.com/user-attachments/assets/e0c3579e-f481-4694-80c0-4712c09357c0" />

<img width="1366" height="694" alt="doctors Details" src="https://github.com/user-attachments/assets/4a97f155-d579-476a-b2a0-b888e98e6e66" />

Appointment Section:

<img width="1345" height="606" alt="AppointmentSection" src="https://github.com/user-attachments/assets/ce5f3082-9a82-4fbf-9083-02c550e81dcc" />

<img width="1137" height="87" alt="stored" src="https://github.com/user-attachments/assets/ae47883f-d890-4726-96e6-47e3b03fbc6c" />



Admin Interface:

Home Page:

<img width="1366" height="3909" alt="admin inter face of the page" src="https://github.com/user-attachments/assets/9c4d883c-9481-4a47-8fa0-8842dfab26aa" />

Without Admin can't access Dashboard:

<img width="1366" height="651" alt="without admin cant access dashboard" src="https://github.com/user-attachments/assets/99b60d7c-ca2e-454f-a045-261ee3836a32" />

Admin Section:

Admin Dashboard:

<img width="1366" height="812" alt="admin-dashboard" src="https://github.com/user-attachments/assets/ae97d4cc-93d9-4b87-8ad2-2e95404eac1a" />

Doctors Details section from admin side:

<img width="1366" height="691" alt="doctors detail section from admin view" src="https://github.com/user-attachments/assets/48909943-22a8-42ab-9bd4-6c6180f8e3be" />

Only admin can UPDATE ADD AND DLETE:

<img width="1366" height="651" alt="onlyadmin can add delete and edit doctors information" src="https://github.com/user-attachments/assets/1adc6c35-a60b-48e8-9311-ddd574d4ffea" />


<img width="1366" height="651" alt="update SEction" src="https://github.com/user-attachments/assets/39613713-3f28-4578-b240-f6f2ab25bbad" />


SideBars:

<img width="273" height="516" alt="sidebars" src="https://github.com/user-attachments/assets/9744629a-1a6e-49f7-a884-6b0f8b0af0c1" />

Admin appointment section:

<img width="1366" height="989" alt="appointment req notification form user" src="https://github.com/user-attachments/assets/f22064e2-d17d-454e-a7cf-151cdcfa4815" />

Approve/Cancel:
<img width="1366" height="659" alt="approvesection" src="https://github.com/user-attachments/assets/644ea5ad-4b4f-4bd3-a2fa-c2396dc61cb9" />



