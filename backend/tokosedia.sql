-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 28 Jun 2022 pada 19.13
-- Versi server: 8.0.27
-- Versi PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tokosedia`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `product_id` int NOT NULL,
  `name_product` varchar(455) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `photo_product` varchar(250) NOT NULL,
  `price_after` varchar(15) NOT NULL,
  `price_before` varchar(60) NOT NULL,
  `brand` varchar(20) NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `note` varchar(20) NOT NULL,
  `bg_badge` varchar(50) NOT NULL,
  `rating` varchar(20) NOT NULL,
  `stock` varchar(50) NOT NULL,
  `category` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `photo_1` varchar(250) NOT NULL,
  `descr` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`product_id`, `name_product`, `photo_product`, `price_after`, `price_before`, `brand`, `description`, `note`, `bg_badge`, `rating`, `stock`, `category`, `photo_1`, `descr`) VALUES
(1, 'Macbook M1 Pro 2021', 'macbookm1pro-removebg-preview.png', '$25.00', '27.55', 'Apple', '- Layar Liquid Retina XDR 14,2 inci (diagonal);1 resolusi asli 3024 x 1964\npada 254 piksel per inci\n- Memori terintegrasi 16 GB\n\n', 'New', 'success', '4.5', '12', 'Laptop', 'ip11promax-removebg-preview.png', '• Processor : Intel® Core™ i7-10870H  • Operating System : Windows 10 Home + OHS 2019 • Graphics : NVIDIA® GeForce® RTX 3070 • Display : 15.6-inch OLED 4K UHD (3840 x 2160) 16:9 440nits glossy Pantone validated touch panel • Memory : 32GB DDR4 • Storage : 1TB M.2 NVMe™ PCIe® 3.0 SSD • Garansi Resmi ASUS Indonesia dan tambahan 1 Tahun dari Service Center Datascrip'),
(2, 'Asus Zenbook Duo Pro', 'Zenbook 14 Belakang.png', '$15.55', '$18.00', 'Asus', '• Processor : Intel® Core™ i7-10870H \n• Operating System : Windows 10 Home + OHS 2019\n• Graphics : NVIDIA® GeForce® RTX 3070\n• Display : 15.6-inch OLED 4K UHD (3840 x 2160) 16:9 440nits glossy Pantone validated touch panel\n• Memory : 32GB DDR4\n• Storage : 1TB M.2 NVMe™ PCIe® 3.0 SSD\n• Garansi Resmi ASUS Indonesia dan tambahan 1 Tahun dari Service Center Datascrip', 'Out of stock', 'danger', '4.0', '0', 'Laptop', 'Zenbook 14 Belakang.png', '• Processor : Intel® Core™ i7-10870H\n• Operating System : Windows 10 Home + OHS 2019\n• Graphics : NVIDIA® GeForce® RTX 3070\n• Display : 15.6-inch OLED 4K UHD (3840 x 2160) 16:9 440nits glossy Pantone validated touch panel\n• Memory : 32GB DDR4\n• Storage : 1TB M.2 NVMe™ PCIe® 3.0 SSD\n• Garansi Resmi ASUS Indonesia dan tambahan 1 Tahun dari Service Center Datascrip'),
(3, 'Iphone 11 Pro Max', 'ip11promax-removebg-preview.png', '$15.55', '$18.00', 'Apple', '- Layar: Super Retina XDR OLED, 6.5 inci, - 1242 x 2688 pixels (~458 ppi)\r\n- Chipset: Apple A13 Bionic (7 nm+)\r\n- CPU: Hexa-core (2x2.65 GHz Lightning + \r\n4x1.8 GHz Thunder)\r\n- GPU: Apple GPU (4-core graphics)\r\n- OS: iOS 13, upgradable to iOS 15.5\r\n- RAM: 4GB\r\n- Memori internal: 64 GB/256 GB/512 GB\r\n- Ukuran HP: 158 x 77.8 x 8.1 mm\r\n- Berat HP: 226 gram\r\n- Kamera depan: 12 MP, f/2.2, 23mm (wide) dan SL 3D, (depth/biometrics sensor)\r\n- Kamera belakang: 12 MP, f/1.8, 26mm (wide), 12 MP, f/2.0, 52mm (telephoto), 12 MP, f/2.4, 13mm (ultrawide)\r\nVideo: 4K@24/30/60 fps, 1080p@30/60/120/240fps\r\n- Baterai: Non-removable Li-Ion 3969 mAh, fast charging 20W\r\n- SIM: Single SIM (Nano-SIM and/or eSIM)\r\n- WLAN: Wi-Fi 802.11 a/b/g/n/ac/6, dual-band, hotspot\r\n', 'New', 'success', '4.5', '4', 'Phone', '', ''),
(4, 'LG UltraGear', 'monitor-Lg-ultragear.jpg', '$15.55', '$18.00', 'LG', '32\'\' UltraGear QHD Nano IPS 1ms 165Hz HDR Monitor with G-SYNC® Compatibility\r\n• 32\" QHD (2560 x 1440) Nano IPS Display\r\n• IPS 1ms (GtG) Response Time and 165Hz Refresh Rate (O/C 180 Hz)\r\n• NVIDIA G-SYNC Compatible with AMD FreeSync™ Premium\r\n• DCI-P3 98% Color Gamut with HDR10\r\n• 3-Side Virtually Borderless Display\r\n• Tilt/Height/Pivot Adjustable Stand\r\n• Wall Mount Size (mm): 100 x 100 mm\r\n• Garansi Resmi PT LG Electronics Indonesia 3 tahun (1 tahun sparepart, 2 tahun service)\r\n', 'New', 'success', '4.5', '6', 'Monitor', '', ''),
(5, 'Realme Narzo 50-5G', 'realme-narzo-50-5G.png', '$10.13', '$10.15', 'Realme', '•	Dimensity 810 5G Processor\r\n•	90Hz Ultra Smooth Display\r\n•	Screen size--6.6\'\'(16.7cm）\r\n•	Screen proportion--20.1 : 9\r\n•	Resolution--2408*1080 FHD+\r\n•	Color display--1670 million\r\n•	Color saturation--NTSC 95% (typical)\r\n•	Screen-to-body ratio 90.7%\"\r\n•	8.1mm Super Slim & Light1\r\n•	5000mAh(typ) Massive Battery\r\n•	33W Dart Charge\r\n•	Up to 11GB Dynamic RAM2\r\n•	Dual Stereo Speakers\r\n•	48MP Nightscape Camera\r\n•	Super Power Saving Mode\r\n•	Side-mounted Fingerprint Scanner\r\n•	realme UI 3.0 （Android 12）\r\n•	Type-C USB Jack\r\n', '', '', '4.0', '4', 'Phone', '', ''),
(6, 'Huawei Band 6', 'smartwatch-huawei-band6.jpg', '$10.13', '', 'Huawei', '•	SCREEN: AMOLED color screen Resolution: 194 x 368 pixels\r\nSize: 1.47 inches \r\n•	DIMENSION: 43 mm (H) x 25.4 mm (W) x 10.99 mm (D)\r\n•	MATERIAL: Wrist strap: Silicone rubber\r\nWEIGHT: Approximately 18 g (without the strap)\r\n•	BUTTON: Full-screen touch + side button\r\n•	CONNECTIVITY: Bluetooth: 2.4 GHz, BT5.0, BLE\r\n•	SYSTEM REQUIREMENTS: Android 6.0 or later\r\niOS 9.0 or later\r\n•	SENSOR: 6-axis IMU sensor (Accelerometer sensor, Gyroscope sensor)\r\nOptical heart rate sensor\r\n•	WATER RESISTANCE RATING: 5 ATM water-resistant\r\n•	CHARGING PORT: Magnetic charging thimble\r\n', 'New', 'success', '4.7', '8', 'Smartwatch', '', ''),
(7, 'MX MASTER 3S', 'mouse-logitech-mxmaster3s.png', '$05.00', '', 'Logitech', 'SCROLL 1.000 BARIS DALAM 1 DETIK\r\n\r\nKami menciptakan kembali scroll wheel. Scroll elektromagnetik MagSpeed™ yang serba baru memiliki presisi untuk berhenti pada satu piksel dan cukup cepat untuk menggulir 1.000 baris dalam satu detik. Oh, dan itu hampir sunyi.\r\n\r\nMULTI- KOMPUTER, SATU MX MASTER 3\r\nKendalikan beberapa komputer secara mulus dengan MX Master 3 yang mendukung Flow hanya dengan menggerakkan kursor ke tepi layar. MX Master 3 mengalir bersama Anda, bahkan antar sistem operasi Windows® dan macOS®.Memindahkan teks, gambar, dan file antar komputer dengan mudah', '', '', '4.0', '6', 'Mouse', '', ''),
(8, 'Mx-Mechanical', 'keyboard-logitech-mxmechanical.webp', '$05.00', '', 'Logitech', 'Terhubung via Bluetooth atau Logi Bolt 1Tidak kompatibel dengan teknologi Receiver USB Logitech Unifying\r\nEasy-Switch: hubungkan maksimum 3 perangkat dan berganti-ganti di antara ketiganya\r\nSensor kedekatan tangan mengaktifkan lampu latar\r\nSensor cahaya lingkungan sekitar yang menyesuaikan secara otomatis\r\nJangkauan wireless 10 meter 2Jangkauan wireless mungkin bervariasi tergantung lingkungan pemakaian dan pengaturan komputer.\r\nUSB-C yang dapat diisi ulang: bertahan maksimum 15 hari atau 10 bulan dengan lampu latar dinonaktifkan 3Daya tahan baterai mungkin bervariasi, berdasarkan kondisi pengguna dan komputasi\r\nSwitch daya On/Off\r\nIndikasi Caps Lock dan Baterai\r\nKompatibel dengan mouse berkemampuan Logitech Flow\r\nMX Mechanical kompatibel dengan MX Palm Rest\r\nBaterai: Baterai Li-Po (1.500 mAh) yang dapat diisi ulang\r\nSoftware opsional: Logi Options+ dan Logitech Flow', 'New', 'success', '4.5', '8', 'Keyboard', '', ''),
(9, 'VOID RGB ELITE USB Premium Gaming Headset with 7.1 Surround Sound — Carbon', 'earphone-corsair-voidrgbeliteusb.png', '$11.45', '12.00', 'Corsair', 'AUDIO QUALITY\r\nSTUNNING SOUND\r\nHear everything in 7.1 surround sound from the lightest footstep to the most thundering explosion thanks to premium, custom-tuned 50mm high-density neodymium audio drivers with an expanded frequency range of 20Hz-30,000Hz.\r\n\r\nCOMPATIBILITY\r\n\r\nPC with USB port, Windows 10, Windows 8, Windows 7, Internet connection (for CUE software download)\r\n\r\nTECHNICAL SPECIFICATIONS\r\nHeadphone Frequency Response: 20Hz - 30 kHz\r\nHeadphone Battery Life: N/A\r\n', 'Out of stock', 'danger', '4.7', '6', 'Earphone', '', ''),
(10, 'Galaxy Tab S8+5G', 'tab-samsung-galaxytabs85g.png', '$22.35', '$23.35', 'Samsung', '•	Processor : Qualcomm Snapdragon 8 Gen 1\n•	Size : 11 Inch\n•	Technology : LCD\n•	Resolution : WQXGA\n•	Rear Camera Resolution : 13.0 MP + 6 MP\n•	Main Camera Auto Focus : Yes\n•	Rear Camera - OIS : No\n•	Rear Camera - Zoom : Digital Zoom up to 10x\n•	Front Camera Resolution : 12.0 MP\n•	Front Camera Auto Focus : No\n•	Video Resolution : UHD 4K (3840 x 2160) @30fps\n•	RAM : 8GB\n•	ROM : 128GB\n•	SIM Tray : Dual-SIM\n•	Battery Capacity : 8.000mAh\n•	Special Interface : S-Pen, Samsung DeX\n', 'New', 'success', '4.6', '4', 'Ipad', '', ''),
(11, 'Epson L850 Printer', 'printer-epson-epsonl850.png', '$15.55', '', 'Epson', '•	Print Scan Copy\r\n•	37/38ppm\r\n•	5/4,8ipm\r\n•	20sheets photo\r\n•	Direct CD and DVD Printing \" YES\"\r\n•	USB\r\n•	Card Slots,\r\n•	Pitcbrige\r\n•	Direct USB Port\r\n•	Borderless up to 44\r\n•	Resolusi 5760*1440dpi\r\n•	Scan 1200*2400dpi\r\n•	Ink Model 673 series\r\n', 'Out of stock', 'danger', '4.6', '0', 'Printer', '', ''),
(12, 'MSI GL63', 'laptop-msigl63.png', '$15.55', '$18.00', 'Msi', '•	Display : 15.6\" FHD (1920*1080), wideview 94%NTSC color Anti-glare, 100%sRGB\r\n•	Processor : 8th Generation Intel\" Core\' i5-8300H Processor (Quad-Core, 8MB Cache, up to 4.0GHz w/ Turbo Boost\r\n•	Memory : DDR4 8 GB\r\n•	Storage : 256GB SSD NVMe +1TB (SATA) 7200 RPM\r\n•	Graphics : nVidia Geforce RTX™ 2060 with 6GB GDDR6\r\n•	Keyboard : Single Red Keyboard\r\n', 'New', 'success', '4.7', '6', 'Laptop', '', ''),
(13, 'MSI LED Gaming Optix 6241', 'monitor-msiledgamingoptix6241.jpg', '$11.45', '', 'Msi', '•	IPS Panel – Optimize screen colors and brightness to enhance your viewing experience.\r\n•	FHD High Resolution – Game titles will even look better, displaying more details due to the FHD resolution.\r\n•	144Hz Refresh Rate – Real smooth gaming.\r\n•	1ms Response Time – Eliminate screen tearing and choppy frame rates.\r\n•	Wide Color Gamut – Game colors and details will look more realistic and refined, pushing game immersion to its limits.\r\n•	AMD FreeSync™ Technology - Tear free\r\n•	Night Vision – Smart black tuner to brighten your day by bringing out the fine details in dark areas.\r\n•	Frameless design – Enjoy the ultimate gaming experience with super narrow bezels.\r\n•	Anti-Flicker and Less Blue Light - Game even longer and prevent eye strain and fatigue.\r\n•	178° Wide Viewing Angle – Colors and details will stay sharp at more angles with a 178° wide viewing angle.\r\n', 'Out of stock', 'danger', '4.7', '0', 'Monitor', '', ''),
(14, 'Lenovo Legion 5', 'laptop-lenovolegion5.jpg', '$22.35', '', 'Lenovo', '•	Processor AMD Ryzen 7 5800H (8C / 16T, 3.2 / 4.4GHz, 4MB L2 / 16MB L3)\r\n•	Graphics NVIDIA GeForce RTX 3060 6GB GDDR6, Boost Clock 1425 / 1702MHz, TGP 130W\r\n•	Chipset AMD SoC Platform\r\n•	Memory 2x 8GB SO-DIMM DDR4-3200\r\n•	Memory Slots Two DDR4 SO-DIMM slots, dual-channel capable\r\n•	Max Memory Up to 32GB DDR4-3200 offering\r\n•	Storage 512GB SSD M.2 2280 PCIe 3.0x4 NVMe\r\n•	Storage Support \"Up to two drives, 2x M.2 SSD\r\n', '', '', '4.6', '5', 'Laptop', '', ''),
(15, 'Vivo T1 Pro 5G', 'vivo-t1-pro-5g.png', '$05.00', '', 'Vivo', '•	Prosesor : Snapdragon 778G 5G\r\n•	RAM : 8GB + 4GB Extended\r\n•	Penyimpanan : 128GB\r\n•	Warna : Turbo Black & Turbo Cyan\r\n•	Baterai : 4700mAh (TYP)\r\n•	Sistem Operasi : Funtouch OS 12\r\n•	Dimensi : 159,7x73,6x8,49mm\r\n•	Berat : 180g\r\n•	Pengisian Daya : 66W FlashCharge\r\n•	Bahan : Plastik Kaca 3D dengan Crystalline Matte\r\n', 'Discount 30%', 'warning', '4.5', '12', 'Phone', '', ''),
(16, 'Smartwatch X6', 'x6_smart.jpg', '$13.44', '$18.00', 'X6', '•	Function is introduced\r\n•	Phone GSM/GPRS / 1800/1900 850/900 four frequency;Dial, hands-free, phone records, the phone book;Bluetooth phone;\r\n•	SMS local;Text messaging on mobile phones bluetooth synchronous push;\r\n•	Entertainment, MP3, MP4, AVI format local broadcast;Bluetooth music playback;\r\n•	Phone calls reminding and vibration remind ring;\r\n•	The clock display 3 sets of clock, free switch;Click to follow switch;\r\n•	Two-way prevent lost lost remind;Two-way looking for;\r\n•	Step pedometer exercise plan, calories calculation, movement mileage records;Sedentary remind\r\n•	Sleep sleep quality monitoring;\r\n•	Photo watch pictures;Local memory storage;Pictures showed: PNG, JPG watch remote control\r\n•	mobile phones;Storage to mobile phones;The picture shows: PNG, JPG\r\n', 'Discount 30%', 'warning', '4.5', '6', 'Smartwatch', '', ''),
(17, 'Xiaomi 12 Pro', 'phone-xiaomi 12 pro.jpg', '$15.55', '$18.00', 'Xiaomi', '•	WQHD+ DotDisplay AMOLED 6,73\r\n•	Rasio aspek: 20:9, 3200 x 1440\r\n•	Rasio kontras: 8.000.000: 1\r\n•	Kecerahan: HBM 1000 nit (standar), kecerahan puncak 1500 nit\r\n•	HDR10+\r\n•	Dolby Vision\r\n•	Penyesuaian kecerahan 16000 tingkat\r\n•	Corning Gorilla Glass Victus\r\n•	Mode Baca\r\n•	Mode Sunlight\r\n•	Sensor cahaya ambien 360\r\n•	DisplayMate A+\r\n•	Sertifikasi SGS Eye Care Display\r\n•	Performa SGS yang diuji: Seamless Pro\r\n', 'Out of stock', 'danger', '4.5', '0', 'Phone', '', ''),
(18, 'Acer Aspire 5 A514', 'laptop-aceraspire5a514.jpg', '$11.45', '12.00', 'Acer', '•	Processor : Intel Core i5-1135G4 Processor\r\n•	Memory : 4GB DDR4 (Up to 20GB)\r\n•	Storage : 256GB SSD M.2\r\n•	Graphics : Intel® integrated Graphics\r\n•	Display : 14 Full HD (1920 x 1080) resolution Acer ComfyView™\r\n•	Operating System : Windows 10 PRE INSTALLED ( NO LICENSE )\r\n•	Networking : Wireless Wi-Fi 6 AX201 + BT 5.0\r\n•	Audio : Integrated\r\n•	Camera : webcam 1280 x 720 resolution\r\n•	Weight : 1.5Kg\r\n•	colour : Silver\r\n', 'Out of stock', 'danger', '4.7', '0', 'Laptop', '', ''),
(19, 'Apple Watch Series SE', 'apple_watch_se.jpg', '$15.55', '', 'Apple', '•	40mm or 44mm case; over 30 percent larger display\r\n•	Retina LTPO OLED display, 1000 nits\r\n•	GPS Only\r\n•	S5 SiP with 64-bit dual-core processor; W3 wireless chip\r\n•	Digital Crown with haptic feedback\r\n•	Optical heart sensor\r\n•	High and low heart rate notifications and irregular heart rhythm notification\r\n•	Water resistant 50 meters\r\n•	Bluetooth 5.0 GPS, compass, and always-on altimeter\r\n•	50 percent louder speaker; built-in mic\r\n•	32GB capacity\r\n', 'Best Seller', 'info', '4.7', '2', 'Smartwatch', '', ''),
(20, 'Canon Eos 90D', 'camera-canon-canoneos5d.jpg', '$22.35', '$23.35', 'Canon', '•	High image quality with 32.5 Megapixel CMOS (APS-C) sensor\r\n•	High-speed continuous shooting of up to 10 fps with no time Lag during ovf shooting\r\n•	4K UHD 30P/ Full HD 120P video\r\n•	45-Point All Cross-type AF System* supports up to 27 points with an F/8 metering\r\n•	Equipped with an approx. 220, 000 Pixel new AE sensor and EOS iTR AF (face detection)\r\n', 'Best Seller', 'info', '4.7', '4', 'Camera', '', ''),
(21, 'Ipad Pro 4th Gen', 'tablet-ipadpro4thgen.jpg', '$15.55', '', 'Apple', '•	11\" Liquid Retina Touchscreen\r\n•	2388 x 1668 Screen Resolution (264 ppi)\r\n•	Apple M1 8-Core CPU\r\n•	Wi-Fi 6 (802.11ax) | Bluetooth 5.0\r\n•	Front 12MP Ultra Wide Camera\r\n•	Rear 12MP & 10MP Cameras\r\n•	40 Gb/s Thunderbolt Connectivity\r\n•	Supports Apple Pencil (2nd Gen)\r\n•	iPadOS\r\n', '', '', '4.5', '7', 'Ipad', '', ''),
(22, 'CORSAIR K55 RGB PRO Gaming Keyboard', 'keyboard-corsairk55rgbpro.jpg', '$11.45', '12.00', 'Corsair', '•	Keyboard Warranty 2 Year\r\n•	Weight 0.8\r\n•	Lighting RGB\r\n•	Keyboard Layout NA\r\n•	Macro Keys 6\r\n•	USB Polling Rate 1,000Hz\r\n•	Keyswitches Rubber Dome\r\n•	Matrix 110 Keys\r\n•	Connectivity Wired\r\n•	Adjustable Height Yes\r\n•	Media Controls YN Yes\r\n•	Keyboard Type Size K55\r\n•	Keyboard Product Family K55\r\n•	Keyboard Rollover 12-Key Selective with Anti-Ghosting\r\n•	Form Factor Extended with macro keys with Macro Keys\r\n•	Wired Connectivity USB 2.0 Type-A\r\n', 'Out of stock', 'danger', '4.5', '0', 'Keyboard', '', ''),
(23, 'Asus ROG Zhepyrus M16', 'laptop-asus-asusrogzephyrusm16.jpg', '$22.35', '$23.35', 'Asus', '•	GPU : NVIDIA® GeForce RTX™ 3060 Laptop GPU\r\n•	Graphics Memory : 6GB GDDR6\r\n•	Discrete/Optimus : MUX Switch + Optimus\r\n•	TGP ROG Boost : 1475MHz* at 120W (1425MHz Boost Clock+50MHz OC, 100W+20W Dynamic Boost)\r\n•	CPU : 12th Gen Intel® Core™ i7-12700H Processor 2.3 GHz (24M Cache, up to 4.7 GHz, 14 cores: 6 P-cores and 8 E-cores)\r\n•	RAM : 8GB DDR5 on board + 8GB DDR5-4800 SO-DIMM\r\n•	Storage : 1TB M.2 NVMe™ PCIe® 4.0 SSD\r\n•	Display : 16-inch WQXGA (2560 x 1600) 16:10 165Hz IPS-level 500nits DCI-P3 % 100% Pantone Validated\r\n', 'Best Seller', 'info', '4.7', '8', 'Laptop', '', ''),
(24, 'Oppo A16', 'phone-oppoa16.jpg', '$22.35', '', 'Oppo', 'OPPO A16 4/64GB Warna: Space Silver Baterai 5000mAh Tahan Lama Layar HD+ Eye Care Tiga Kamera AI Spesisfikasi : CPU: MediaTek Helio G35 Kecepatan CPU: hingga 2.3GHz GPU: IMG GE8320 @ 680 MHz Dimensi: 163.8 x 75.6 x 8.4mm Berat: 190g RAM: 64 GB ROM: 4 GB Versi USB: USB 2.0 Ukuran: 6,52\" (16,55 cm) Rasio Layar: 88,7% Resolusi: 720x1600 (HD+) Kamera Belakang : 13+2+2 MP Kamera Depan : 8MP Baterai : 5000 mAh Biometrik : Mendukung Buka Sidik Jari Sisi Samping dan Buka Kunci Wajah Video Belakang: Kamera belakang: hingga 1080P@30 fps, dan 720P@30 fps Zoom video: 1080P @ 30 fps Konektivitas : WLAN: Wi-Fi 2,4 GHz, Wi-Fi 5 GHz, Tampilan Wi-Fi Versi Bluetooth: Bluetooth 5.0 Antarmuka USB: USB Tipe C Jaringan Seluler : 2G/3G/4G', 'New', 'success', '4.5', '5', 'Phone', '', ''),
(25, 'Realme GT Neo', 'phone-realme-gtneo3.png', '$22.35', '', 'Realme', '•	80W SuperDart Charge\r\n•	5000mAh Massive Battery\r\n•	Snapdragon 870 5G Processor\r\n•	120Hz E4 AMOLED Display\r\n•	Racing Flag Design\r\n•	Stainless Steel Vapor Cooling System Plus\r\n•	64MP AI Triple Camera\r\n•	16MP wide-angle selfie\r\n•	HyperSmart Antenna Switching\r\n•	Tactile Engine 2.0\r\n•	Dolby Atmos Dual Stereo Speakers\r\n•	UFS 3.1\r\n•	realme UI 3.0\r\n', 'New', 'success', '4.7', '2', 'Phone', '', ''),
(26, 'Realme Book Prime I5', 'laptop-realmebook.png', '$25.00', '', 'Realme', '•	Prosesor: Intel Core i5-1135G7\r\n•	Ukuran Layar: 14 Inch\r\n•	RAM: 8GB\r\n•	Kapasitas Penyimpanan: 512 GB SSD\r\n•	Kartu Grafis: Intel UHD Graphics\r\n•	OS: Windows 10 Home\r\n•	Warna: Blue, Grey, Green\r\n', '', '', '4.5', '8', 'Laptop', '', ''),
(27, 'Ironclaw RGB Wireles', 'mouse-corsair-ironclawrgbeireless.png', '$11.45', '', 'Corsair', '•	Mouse Warranty : Two years\r\n•	Prog Buttons : 7\r\n•	DPI : 18,000 DPI\r\n•	Sensor : PMW3391\r\n•	Sensor Type : Optical\r\n•	Mouse Backlighting : 1 Zone RGB\r\n•	On Board Memory : Yes\r\n•	On-board Memory Profiles : 1\r\n•	Mouse button Type : Omron\r\n•	Connectivity : Wired\r\n•	Mouse Button Durability : 50M L/R Click\r\n•	Grip Type : Palm\r\n•	Weight : 105g (w/out cable and accessories)\r\n•	CUE Software : Supported in iCUE\r\n•	Cable : 1.8m Braided Fiber\r\n•	Game Type : FPS, MOBA\r\n•	Report Rate : Selectable 1000Hz/500Hz/250Hz/125Hz\r\n', 'Out of stock', 'danger', '4.5', '0', 'Mouse', '', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
