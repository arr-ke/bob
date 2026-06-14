-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 
-- サーバのバージョン： 10.3.16-MariaDB
-- PHP のバージョン: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `bob`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `bob1`
--

CREATE TABLE `bob1` (
  `id` int(11) NOT NULL,
  `name1` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `name2` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `name3` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `name4` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `name5` varchar(100) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- テーブルのデータのダンプ `bob1`
--

INSERT INTO `bob1` (`id`, `name1`, `name2`, `name3`, `name4`, `name5`) VALUES
(1, 'ゴルフ', 'インターネット', 'アップル', 'ペンケース', 'イングリッシュ'),
(2, 'コーヒー', 'ヨーグルト', 'ラーメン', 'イエス・キリスト', 'ジャパン'),
(3, 'ライオン', 'アメリカ', 'ベースボール', 'ロック', 'ブイチューバー'),
(4, 'サッカー', 'パソコン', 'ウィンター', 'ムーン', 'ヒストリー'),
(5, 'ヒューマン', 'ポップ', 'ブルベリー', 'リュック', 'エレファント'),
(6, 'ゲートボール', 'インターネット', 'サッカー', 'スナイパー', 'ティーチャー'),
(7, 'スカンプー', 'ビーフ', 'ジュース', 'バレーボール', 'ウィンター'),
(8, 'ボウリング', 'バッター', 'スーツ', 'バースデー', 'ユーチューバー'),
(9, 'ドラゴン', 'ピッチャー', 'サンダー', 'スマートフォン', 'サイエンス'),
(10, 'イギリス', 'ピザ', 'アース', 'ルビー', 'ダイヤモンド');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `bob1`
--
ALTER TABLE `bob1`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルのAUTO_INCREMENT
--

--
-- テーブルのAUTO_INCREMENT `bob1`
--
ALTER TABLE `bob1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
