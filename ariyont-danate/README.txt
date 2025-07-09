============================================
  📦 ARIYONT GAME DONATE TIZIMI (PHP + MySQL)
============================================

📝 Loyihani ishga tushirish uchun to‘liq ko‘rsatma.

--------------------------------------------
📁 FAYL TUZILMASI:
--------------------------------------------

/ariyont-donate/
├── index.php               → Login sahifasi
├── register.php            → Ro‘yxatdan o‘tish sahifasi
├── donate_form.php         → Donate sahifasi
├── dashboard.php           → Bosh menyu
├── logout.php              → Chiqish
├── /php/
│   ├── db_connect.php      → Bazaga ulanish fayli
│   ├── login.php           → Login tekshiruvi
│   ├── register.php        → Ro‘yxatdan o‘tish funksiyasi
│   ├── donate_redirect.php → Donate linkga yo‘naltirish
├── /admin/
│   ├── games_links.php     → O‘yin linklarini boshqarish
│   ├── update_game_link.php→ Link yangilash
│   ├── users.php           → Foydalanuvchilar ro‘yxati
│   ├── donations.php       → Donate tarixi
│   ├── leaderboard.php     → Reyting jadvali
├── /assets/
│   ├── /css/
│   │   └── style.css       → Asosiy dizayn
│   ├── /js/
│   │   └── script.js       → Form validation va alert
│   └── /images/
│       ├── favicon.ico
│       ├── favicon-32x32.png
│       ├── favicon-16x16.png
│       ├── favicon-192.png
│       ├── favicon-512.png
│       ├── favicon.svg
│       └── site.webmanifest

--------------------------------------------
📊 BAZA TUZILMASI:
--------------------------------------------

1. users
- id (int, auto_increment)
- login (varchar)
- password (varchar)
- role (varchar)

2. games
- id (int, auto_increment)
- game_name (varchar)
- link_template (text)

3. donations
- id (int, auto_increment)
- user_id (int)
- game (varchar)
- game_id (varchar)
- amount (int)
- date (datetime)

--------------------------------------------
⚙️ ISHLATISH TARTIBI:
--------------------------------------------

1️⃣ XAMPP ni yoqing (Apache + MySQL)
2️⃣ MySQL’da 'ariyont_donate' bazasini yaratish
3️⃣ Baza tuzilmasini import qilish (Yuqoridagi formatda)
4️⃣ /php/db_connect.php faylida bazaga ulanish ma'lumotlarini sozlash
5️⃣ Browser orqali http://localhost/ariyont-donate/ ni ochish

--------------------------------------------
🎨 FAVICON VA MANIFEST:
--------------------------------------------

👉 Favicon va web manifest fayllari /assets/images/ papkasida joylashgan.
👉 Barcha HTML fayllarning <head> qismida favicon va manifest kodlari mavjud.

--------------------------------------------
👑 ADMIN KABINET:
--------------------------------------------

- Foydalanuvchi role='admin' bo‘lsa, Dashboard sahifasida admin menyular chiqadi.
- O‘yin linklarini boshqarish, donate tarixi va reyting admin panelda.

--------------------------------------------
📌 TIZIM XAVFSIZLIGI:
--------------------------------------------

✅ Session boshqaruvi
✅ Parollar hashlangan
✅ SQL injection’ga immun parametrlar
✅ Role asosli ruxsat nazorati
✅ Form validation (JavaScript)

--------------------------------------------
📄 MUALLIF: Muhammadyor Egamberdiyev (Ariyont AI)
🗓️ 2025-yil
============================================
