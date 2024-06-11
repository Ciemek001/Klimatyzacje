-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Cze 11, 2024 at 02:04 AM
-- Wersja serwera: 10.4.32-MariaDB
-- Wersja PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sklepklimatyzacje`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `klienci`
--

CREATE TABLE `klienci` (
  `ID_Klienta` int(11) NOT NULL,
  `Imię` varchar(50) DEFAULT NULL,
  `Nazwisko` varchar(50) DEFAULT NULL,
  `Nr_telefonu` varchar(15) DEFAULT NULL,
  `PESEL` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `klienci`
--

INSERT INTO `klienci` (`ID_Klienta`, `Imię`, `Nazwisko`, `Nr_telefonu`, `PESEL`) VALUES
(3, 'Przemysław', 'Klepacz', '609848933', '1231231'),
(4, 'Przemysław', 'Klepacz', '609848933', '1231231'),
(5, 'asd', 'Klepacz', '609848933', '2'),
(6, 'asddasdasdas', 'asdasd', '2315124', '123141414'),
(7, 'Przemysław', 'Klepacz', '609848933', '2312'),
(8, 'Adolf', 'Himmler', '131313131313131', '13123131123'),
(9, 'Józef', 'Stelun', '878787878', '123123123'),
(10, 'Ukasz', 'Pomarański', '78787878', '1237819622'),
(11, 'Adolf', 'Klepacz', '609848933', '41241241424'),
(12, 'Sig', 'Sauer', '555 555 555', '1231105397'),
(13, 'Przemysław', 'Bez', '123123', '1231231'),
(14, 'Przemysław', 'Klepacz', '609848933', '12313123123'),
(15, 'Testto', 'Viron', '556093422', '3123123123'),
(16, 'Przemysław', 'Klepacz', '609848933', '12312312312'),
(17, 'Patryk', 'Burczyk', '1123123123', '13123131123'),
(18, 'Patryk', 'Burczyk', '6969696969', '31231231312');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `klimatyzatory`
--

CREATE TABLE `klimatyzatory` (
  `ID_Klimatyzatora` int(11) NOT NULL,
  `Nazwa` varchar(100) DEFAULT NULL,
  `Firma` varchar(100) DEFAULT NULL,
  `Rodzaj` int(11) DEFAULT NULL,
  `Nr_seryjny` varchar(50) DEFAULT NULL,
  `Moc` float DEFAULT NULL,
  `Cena` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `klimatyzatory`
--

INSERT INTO `klimatyzatory` (`ID_Klimatyzatora`, `Nazwa`, `Firma`, `Rodzaj`, `Nr_seryjny`, `Moc`, `Cena`) VALUES
(1, 'A', 'B', 0, '2313123', 420, 6000.00),
(2, 'B', 'C', 1, '123456789', 500, 6000.00),
(3, 'Wii3', 'Iiwwwa', 3, '645312', 500, 3000.00),
(10, 'KRUNIA', 'KRUNIA', 0, '313232123', 300, 60000.00),
(11, 'Kicikicitukocica_sadjasdjkasdhjhjasdhjasdhjashjkdhjklasdhjkasd', 'BBBBBBBBBBBBBBBBB', 0, '532123', 360, 3500.00),
(12, 'Krunia', 'ABC', 1, '532123', 360, 3500.00);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `monterzy`
--

CREATE TABLE `monterzy` (
  `id` int(11) NOT NULL,
  `imie` varchar(50) NOT NULL,
  `nazwisko` varchar(50) NOT NULL,
  `nr_telefonu` varchar(20) NOT NULL,
  `lata_pracy` int(11) NOT NULL,
  `wynagrodzenie` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `monterzy`
--

INSERT INTO `monterzy` (`id`, `imie`, `nazwisko`, `nr_telefonu`, `lata_pracy`, `wynagrodzenie`) VALUES
(6, 'Jan', 'Nowak', '13212313213', 12, 2400.00),
(7, 'Adam', 'Kowalski', '13212313213', 1, 1.73),
(8, 'Mateusz', 'Florian', '725144944', 0, 2400.00),
(9, 'Dominik', 'Mazur', '795 369 559', 0, 2500.00),
(10, 'Michał', 'Szelest', '531 264 197', 0, 1700.00);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pomieszczenie`
--

CREATE TABLE `pomieszczenie` (
  `ID_pomieszczenia` int(11) NOT NULL,
  `Adres` varchar(255) DEFAULT NULL,
  `Kubatura` float DEFAULT NULL,
  `Ilość_drzwi` int(11) DEFAULT NULL,
  `Ilość_okien` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pomieszczenie`
--

INSERT INTO `pomieszczenie` (`ID_pomieszczenia`, `Adres`, `Kubatura`, `Ilość_drzwi`, `Ilość_okien`) VALUES
(2, 'Sienna 6 Rzeszów', 300, 1, 2),
(3, 'Sienna 6 Rzeszów', 300, 3, 2),
(4, 'Sienna 6 Rzeszów', 300, 2, 3),
(5, 'sasda', 300, 2, 45),
(6, 'Sienna 6 Rzeszów', 300, 6, 6),
(7, 'Berlin', 2000, 4, 60),
(8, 'Moskwa', 6000, 60, 460),
(9, 'Warszawa', 400, 3, 1),
(10, 'Berlin', 6000, 6, 2),
(11, 'Warszawa', 60, 10, 2),
(12, 'sasda', 123123, 100, 200),
(13, 'Waszyngton', 405, 3, 15),
(14, 'sasda', 300, 2, 13),
(15, 'Sienna 6 Rzeszów', 6000, 123, 2),
(16, 'Obrońców Poczty Gdańskiej 24', 300, 1, 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `login`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zamówienia`
--

CREATE TABLE `zamówienia` (
  `ID_Zlecenia` int(11) NOT NULL,
  `ID_Klienta` int(11) DEFAULT NULL,
  `ID_pomieszczenia` int(11) DEFAULT NULL,
  `ID_Klimatyzatora` int(11) DEFAULT NULL,
  `ID_Montera` int(11) DEFAULT NULL,
  `Data_Realizacji` date DEFAULT NULL,
  `Koszt` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `zamówienia`
--

INSERT INTO `zamówienia` (`ID_Zlecenia`, `ID_Klienta`, `ID_pomieszczenia`, `ID_Klimatyzatora`, `ID_Montera`, `Data_Realizacji`, `Koszt`) VALUES
(4, 9, 8, 1, 7, '2024-06-13', 3000.00),
(5, 10, 9, 3, 7, '2024-06-27', 3500.00),
(7, 12, 11, 10, 10, '2024-07-29', 4400.00),
(8, 14, 12, 10, 10, '2024-07-01', 7000.00),
(9, 15, 13, 3, 6, '2024-07-28', 4400.00),
(10, 16, 14, 10, 7, '2024-06-28', 2000.00),
(11, 17, 15, 10, 10, '2024-06-29', 3000.00);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `klienci`
--
ALTER TABLE `klienci`
  ADD PRIMARY KEY (`ID_Klienta`);

--
-- Indeksy dla tabeli `klimatyzatory`
--
ALTER TABLE `klimatyzatory`
  ADD PRIMARY KEY (`ID_Klimatyzatora`);

--
-- Indeksy dla tabeli `monterzy`
--
ALTER TABLE `monterzy`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `pomieszczenie`
--
ALTER TABLE `pomieszczenie`
  ADD PRIMARY KEY (`ID_pomieszczenia`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `zamówienia`
--
ALTER TABLE `zamówienia`
  ADD PRIMARY KEY (`ID_Zlecenia`),
  ADD KEY `ID_Klienta` (`ID_Klienta`),
  ADD KEY `ID_pomieszczenia` (`ID_pomieszczenia`),
  ADD KEY `ID_Klimatyzatora` (`ID_Klimatyzatora`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `klienci`
--
ALTER TABLE `klienci`
  MODIFY `ID_Klienta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `klimatyzatory`
--
ALTER TABLE `klimatyzatory`
  MODIFY `ID_Klimatyzatora` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `monterzy`
--
ALTER TABLE `monterzy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pomieszczenie`
--
ALTER TABLE `pomieszczenie`
  MODIFY `ID_pomieszczenia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `zamówienia`
--
ALTER TABLE `zamówienia`
  MODIFY `ID_Zlecenia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `zamówienia`
--
ALTER TABLE `zamówienia`
  ADD CONSTRAINT `zamówienia_ibfk_1` FOREIGN KEY (`ID_Klienta`) REFERENCES `klienci` (`ID_Klienta`),
  ADD CONSTRAINT `zamówienia_ibfk_2` FOREIGN KEY (`ID_pomieszczenia`) REFERENCES `pomieszczenie` (`ID_pomieszczenia`),
  ADD CONSTRAINT `zamówienia_ibfk_3` FOREIGN KEY (`ID_Klimatyzatora`) REFERENCES `klimatyzatory` (`ID_Klimatyzatora`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
