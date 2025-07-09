-- =============================================
-- 📦 ARIYONT GAME DONATE TIZIMI — BAZA TUZILMASI
-- =============================================

CREATE DATABASE IF NOT EXISTS `ariyont_donate` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `ariyont_donate`;

-- ========================
-- 🧑 Foydalanuvchilar jadvali
-- ========================
CREATE TABLE `users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `login` VARCHAR(100) NOT NULL UNIQUE,
  `password` VARCHAR(255) NOT NULL,
  `role` VARCHAR(20) NOT NULL DEFAULT 'user',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Admin user qo‘shish
INSERT INTO `users` (`login`, `password`, `role`) VALUES 
('admin', '$2y$10$1fAaJ7IlYNN5OIkE9.V8PeCm6YlXUclMQURVgz3Zs3r5fI7T87yYe', 'admin');

-- Parol: admin123 (bcrypt bilan hashlangan)

-- ========================
-- 🎮 O‘yinlar jadvali
-- ========================
CREATE TABLE `games` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `game_name` VARCHAR(100) NOT NULL UNIQUE,
  `link_template` TEXT NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- O‘yinlar ro‘yxatini kiritish
INSERT INTO `games` (`game_name`, `link_template`) VALUES
('Crash', 'https://donate.crash.com/?id={game_id}&amount={amount}'),
('Aviator', 'https://donate.aviator.com/?id={game_id}&amount={amount}'),
('Dice', 'https://donate.dice.com/?id={game_id}&amount={amount}'),
('Coinflip', 'https://donate.coinflip.com/?id={game_id}&amount={amount}'),
('Mines', 'https://donate.mines.com/?id={game_id}&amount={amount}'),
('Plinko', 'https://donate.plinko.com/?id={game_id}&amount={amount}'),
('Slot', 'https://donate.slot.com/?id={game_id}&amount={amount}'),
('Poker', 'https://donate.poker.com/?id={game_id}&amount={amount}'),
('Blackjack', 'https://donate.blackjack.com/?id={game_id}&amount={amount}'),
('Ruletka', 'https://donate.ruletka.com/?id={game_id}&amount={amount}'),
('Baccarat', 'https://donate.baccarat.com/?id={game_id}&amount={amount}'),
('Craps', 'https://donate.craps.com/?id={game_id}&amount={amount}'),
('G‘ildirak', 'https://donate.gildirak.com/?id={game_id}&amount={amount}'),
('Narvon', 'https://donate.narvon.com/?id={game_id}&amount={amount}'),
('Qish', 'https://donate.qish.com/?id={game_id}&amount={amount}'),
('Mafia', 'https://donate.mafia.com/?id={game_id}&amount={amount}'),
('Gacha Box', 'https://donate.gachabox.com/?id={game_id}&amount={amount}'),
('Shaxmat', 'https://donate.shaxmat.com/?id={game_id}&amount={amount}'),
('Domino', 'https://donate.domino.com/?id={game_id}&amount={amount}'),
('Durak', 'https://donate.durak.com/?id={game_id}&amount={amount}'),
('Narda', 'https://donate.narda.com/?id={game_id}&amount={amount}'),
('So‘z topish', 'https://donate.suztopish.com/?id={game_id}&amount={amount}'),
('Sport tikish', 'https://donate.sporttikish.com/?id={game_id}&amount={amount}'),
('Esport tikish', 'https://donate.esport.com/?id={game_id}&amount={amount}');

-- ========================
-- 💸 Donate tarixi
-- ========================
CREATE TABLE `donations` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `user_id` INT NOT NULL,
  `game` VARCHAR(100) NOT NULL,
  `game_id` VARCHAR(100) NOT NULL,
  `amount` INT NOT NULL,
  `date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ========================
-- 📊 Reyting uchun VIEW
-- ========================
CREATE VIEW leaderboard AS
SELECT u.login, SUM(d.amount) AS total_amount
FROM donations d
JOIN users u ON u.id = d.user_id
GROUP BY d.user_id
ORDER BY total_amount DESC;

-- TAYYOR ✅
