# Salma Blog Theme

**Salma Blog Theme** is a clean, lightweight, and responsive custom WordPress theme created for blog-style websites. It includes built-in Swiper.js integration to automatically convert any Gutenberg gallery into a modern, swipeable image carousel — no page builders or plugins required.

---

## ✨ Features

- Custom theme from scratch — no base theme or builder
- Fully responsive layout
- Custom dark mode toggle with memory (localStorage)
- Sidebar support (widgets)
- Custom navigation menu
- Auto-converting Gutenberg gallery block to Swiper.js carousel
- Enqueued with clean WordPress standards (using `wp_enqueue_scripts`)

---

## 📦 Folder Structure

salma-blog-theme/
├── style.css
├── functions.php
├── header.php
├── footer.php
├── index.php
├── swiper-init.js
└── README.md

---

## ⚙️ Installation

1. Download or clone the theme.
2. Move the folder into your WordPress installation’s theme directory:
   /wp-content/themes/salma-blog-theme/
3. Go to your WordPress dashboard → Appearance → Themes → Activate **Salma Blog Theme**.
4. Create a page and insert a **Gallery Block** (add at least 2 images).
5. View the page — your gallery will now display as a swipeable slider.

---

## 🖼 Swiper.js Gallery Support

The theme includes a custom filter to override Gutenberg's default gallery output. It transforms any `[gallery]` shortcode or Gallery Block into Swiper.js markup automatically.

### ✔ Requirements:
- Add gallery using **Gutenberg block editor**
- Must contain `ids` (handled automatically by the block)

---

## 🌓 Dark Mode Toggle

- A toggle switch is added in the top-left corner of the header
- The user’s preference is saved in `localStorage`
- Works across reloads

---

## 💡 Developer Notes

- All scripts and styles are enqueued properly
- JS logic is located in `swiper-init.js`
- Carousel behavior can be customized in the Swiper config inside that file

---

## 📚 Credits

- [Swiper.js](https://swiperjs.com/) – MIT Licensed JS Carousel Library

---

## 🔧 To-Do / Future Improvements

- Add `page.php` and `single.php` templates
- Support for custom post types (e.g. Projects)
- Theme Options via WordPress Customizer

---

## 📄 License

This theme is open source and free to use under the MIT License.
   
