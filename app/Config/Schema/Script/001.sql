SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Base de datos: `hivou`
--
CREATE DATABASE `hivou` DEFAULT CHARACTER SET latin1 COLLATE latin1_general_ci;
USE `hivou`;
--
-- Base de datos: `test_hivou`
--
CREATE DATABASE `test_hivou` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `test_hivou`;

CREATE USER 'hivou'@'%' IDENTIFIED BY  'hivou2000';

GRANT USAGE ON * . * TO  'hivou'@'%' IDENTIFIED BY  'hivou2000' WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0 ;

GRANT ALL PRIVILEGES ON  `hivou` . * TO  'hivou'@'%' WITH GRANT OPTION ;
GRANT ALL PRIVILEGES ON  `test_hivou` . * TO  'hivou'@'%' WITH GRANT OPTION ;