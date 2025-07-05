# PHP Multi-File Image Uploader 🎯

A simple PHP project to upload **multiple image files** with validation and secure handling. This is a basic yet practical web form built with plain HTML and PHP, ideal for learning or adapting into small real-world applications.

## 🚀 Features

- Upload multiple images at once
- Allowed types: `jpg`, `jpeg`, `png`
- File size limit: 2 MB per image
- Custom filename sanitization
- Automatic uploads folder creation
- Error handling for invalid/corrupt files
- Visual image preview (after upload)

## 📂 Project Structure

multi-file-uploader-php/
│
├── uploads/ # Uploaded files saved here (auto-created)
├── index.html # The upload form
├── process.php # Server-side processing
├── functions.php # (Optional) Reusable functions
└── README.md # You're reading it!

## 📋 Requirements

- [XAMPP](https://www.apachefriends.org/) or similar local server with PHP ≥ 7.2
- A web browser!

## 📥 How to Use

1. Clone or download this repo.
2. Place it inside your `htdocs` directory in XAMPP.
3. Start Apache from XAMPP control panel.
4. Open browser and go to:  
   `http://localhost/multi-file-uploader-php/index.html`
5. Choose one or more image files and hit **Submit**.

> ⚠️ Make sure `uploads/` folder has write permission.

## 🛡️ Security Notes

- Filenames are sanitized to prevent directory traversal attacks.
- Only common image MIME types are accepted.
- Files are validated with `mime_content_type()` (not just extensions).
- Server-side checks ensure corrupted uploads are not saved.

## 🧱 Future Improvements

- Client-side image preview (with JavaScript)
- AJAX-based upload with progress bar
- Store metadata in MySQL database
- Convert to OOP (Object-Oriented PHP)
- Add user authentication

## 🤝 Author

Developed by [Your Name] — part of a hands-on learning roadmap toward freelance development and PHP mastery.

---

> _If this helped you, feel free to star the repo or fork it!_
