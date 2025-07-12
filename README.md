# Focused Learning Web Application for Students

This project was developed as a Community Service Project during the 5th semester. It is a web-based platform designed to manage and organize educational content, including subjects, chapters, topics, and video resources.

---

## Project Overview

A PHP and MySQL-based web application built as part of an Academic Community Service (ACS) project. The platform helps students engage in structured, chapter-wise learning by browsing subjects, accessing relevant topics, and watching educational videos. Teachers can log in to manage classes, chapters, and video content.

As part of our Community Service Project, our team visited a school in Gudlavalleru Panchayat and interacted with the students. We identified a significant issue: students faced distractions like ads and YouTube Shorts while watching educational content on YouTube. To address this, we developed a web application to provide distraction-free, curriculum-aligned educational content. This solution ensures students can access organized learning materials seamlessly, free from irrelevant recommendations and distractions.

### Students Dashboard:
The web application features a child-friendly interface that allows students to browse curriculum-based videos by subjects, chapters, and topics. The dashboard includes simple button navigation and subject-themed background images to ensure ease of use and engagement for young learners.

### Teachers Dashboard:
The platform includes a secure dashboard for teachers to manage content. Teachers can upload, organize, and categorize videos by subjects and grade levels, ensuring alignment with curriculum standards. The dashboard simplifies content management, requiring no advanced technical expertise.

---



## Live Demo

Access the application online:
**[https://cspd10.infinityfreeapp.com/?i=1](https://cspd10.infinityfreeapp.com/?i=1)**

### Sample Login (Student Access)

* **Username:** `student`
* **Password:** `student`

> Currently, full content is available only for:
>
> * **Class:** 10
> * **Subject:** English
> * **Chapter:** Personality Development



---

## Project Structure

The project consists of two main parts:

1. **Prototype** (`protype/` Directory)

   * HTML-based prototype demonstrating the UI/UX
   * Static pages for visualization

2. **Source Code** (`source code/` directory)

   * Complete implementation with PHP backend
   * Database integration
   * Dynamic content management

---

## Features

* User authentication with separate teacher and student logins
* Subject management
* Chapter organization and addition
* Topic categorization
* Video resource integration (YouTube links)
* Teacher and student dashboards
* Content addition and management for teachers
* Browsing and video viewing for students

---

## Technologies Used

* Frontend: HTML5, CSS3, JavaScript, AJAX
* Backend: PHP (procedural)
* Database: MySQL (via `mysqli`)
* No external libraries or frameworks used

## Hosting:
During development, the application was tested on the XAMPP server. Now, it is hosted on the InfinityFree live server, ensuring accessibility for schools in Gudlavalleru Panchayat and beyond. The hosting setup provides reliability, scalability, and smooth performance. 

---

## File Structure

### Prototype Files

* `index.html` – Main landing page
* `subjects.html` – Subject listing page
* `chapters.html` – Chapter management interface
* `topics.html` – Topic organization page
* `student.html` – Student interface
* `videos.html` – Video resource page
* `style.css` – Styling for prototype

### Source Code Files

* `index.html` – Main application entry point
* `validate.php` – User authentication and redirect
* `teacher.php` – Teacher dashboard and content management
* `classes.php` – Class browsing for students
* `subjects.php` – Subject listing based on class
* `chapters.php` – Chapter listing and management
* `topics.php` – Topic listing with video links
* `video.php` – Video playback page
* `addChp.php` & `addChpDb.php` – Forms and backend for adding chapters
* `addLink.php` & `addLinkDb.php` – Forms and backend for adding video links
* `chapterDetails.php` – AJAX helper for chapter validation
* `style.css` – Application styling

---

## Database Schema (Inferred)

### `loginaccounts`

| Column   | Type    | Description            |
| -------- | ------- | ---------------------- |
| uname    | VARCHAR | Username               |
| password | VARCHAR | Password               |
| Type     | VARCHAR | 'Teacher' or 'Student' |
| Name     | VARCHAR | Full name              |

### `chapters`

| Column  | Type    | Description                |
| ------- | ------- | -------------------------- |
| Cid     | VARCHAR | Chapter ID (e.g., c10en01) |
| Cname   | VARCHAR | Chapter name               |
| Subject | VARCHAR | Subject name               |
| Class   | VARCHAR | Class level (e.g., 10)     |

### `videolinks`

| Column | Type    | Description               |
| ------ | ------- | ------------------------- |
| Vid    | VARCHAR | YouTube Video ID          |
| Cid    | VARCHAR | Foreign key to chapter ID |
| Topic  | VARCHAR | Topic name                |

---

## Setup Instructions

1. Ensure you have a web server with PHP support (e.g., XAMPP, WAMP).
2. Place the source code files in your web server directory (e.g., `htdocs` for XAMPP).
3. Create a MySQL database named `csp`.
4. Create the required tables (`loginaccounts`, `chapters`, `videolinks`) and insert initial data as needed.
5. Configure database credentials in PHP files (`localhost`, `root`, password, etc.) if different from defaults.
6. Open the application by navigating to `index.html` in your web browser via the local server.

---

## Usage

* Teachers log in to add chapters and video links, and manage educational content.
* Students log in to browse classes, subjects, chapters, topics, and watch associated videos.

---

## Notes

* The project uses procedural PHP and raw SQL queries (no frameworks).
* All UI and navigation is handled server-side with PHP and basic JavaScript.
* Intended for local or intranet educational environments.
* For production use, it is recommended to implement input validation and password hashing.


