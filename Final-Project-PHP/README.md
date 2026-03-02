# PHP Final Project 
**For the course Application Development**


# **[D'Playlist - Spotify Inspired Playlist Maker](https://daprojects.infinityfree.me/diplaylist)**

This project is a **PHP-based web application** that shows simple **CRUD** functionality for managing music playlists and the songs they contain. It is built with Bootstrap for a responsive UI and uses PDO for secure database interactions.

### Features:

* Create new playlists.
* View all existing playlists.
* View the songs inside a specific playlist.
* Add, edit, and delete songs from a playlist.
* Edit and delete an entire playlist.

---

### File Descriptions

| File Name | Description |
| :--- | :--- |
| **`index.php`** | The **landing page** that queries and displays a list of all existing playlists. |
| **`selected.php`** | Displays the **detailed view of a single playlist** and lists all songs within it. |
| **`create_playlist.php`** | Handles the form and logic for **creating new playlists**. |
| **`edit_playlist.php`** | Manages the form and process for **updating a playlist's title**. |
| **`delete_playlist.php`** | Executes the logic to **permanently remove a playlist** and all its associated songs. |
| **`add_song.php`** | Handles the form and logic for **adding a new song** to a specific playlist. |
| **`edit_song.php`** | Manages the form and update logic for **editing an existing song's details**. |
| **`delete_song.php`** | Executes the logic to **remove a single song** from a playlist. |
| **`database.php`** | Contains the **PDO logic** for connecting the PHP application to the MySQL database. |
| **`diplaylists.sql`** | The **SQL script** that defines the database structure (schema) for the playlists and songs tables. |

---
This project serves as a learning exercise to grasp the core concepts of **CRUD** operations (Create, Read, Update, Delete) within a modern PHP environment. It focuses specifically on implementing secure database interactions using **PDO**, managing backend application logic, and integrating a modern frontend interface with the Bootstrap CSS framework.  

*This is a direct implementation of the material taught in the video tutorial provided by the professor.*

---
*Deployed and hosted on the platform Infinityfree*
