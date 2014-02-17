SET NAMES 'utf8';

SET CHARACTER SET 'utf8';

CREATE DATABASE IF NOT EXISTS `boletina_boletin_axa`;

CREATE TABLE IF NOT EXISTS `bulletin_october_2013` 
( bulletin_id SMALLINT UNSIGNED AUTO_INCREMENT, 
  c VARCHAR( 140 ) DEFAULT 'Anonimo', 
  is_useful SMALLINT UNSIGNED NOT NULL, 
  information_1 SMALLINT DEFAULT '0', 
  information_2 SMALLINT DEFAULT '0', 
  information_3 SMALLINT DEFAULT '0', 
  information_4 VARCHAR( 255 ) NOT NULL DEFAULT 'N/A', 
  about_atention SMALLINT NOT NULL, 
  comments VARCHAR( 140 ) NOT NULL DEFAULT 'Sin Comentarios', 
  date_answer DATE NOT NULL, 
  CONSTRAINT pk_bulletin PRIMARY KEY ( bulletin_id ) 
) ENGINE = InnoDB DEFAULT CHARSET = 'utf8';

CREATE TABLE IF NOT EXISTS `efective_protection_information` 
( protection_id SMALLINT UNSIGNED AUTO_INCREMENT, 
  agentName VARCHAR( 140 ) DEFAULT 'Anonimo', 
  agente VARCHAR( 140) NOT NULL, 
  client VARCHAR( 140) NOT NULL, 
  clientMail VARCHAR( 140) NOT NULL, 
  message VARCHAR( 255 ) NOT NULL, 
  date_answer DATE NOT NULL, 
  CONSTRAINT pk_protection PRIMARY KEY ( protection_id ) 
) ENGINE = InnoDB DEFAULT CHARSET = 'utf8';

CREATE TABLE IF NOT EXISTS `efective_protection_refered` 
( refered_id SMALLINT UNSIGNED AUTO_INCREMENT,
  agentName VARCHAR( 140 ) DEFAULT 'Anonimo', 
  agente VARCHAR( 140) NOT NULL, 
  client VARCHAR( 140) NOT NULL, 
  clientMail VARCHAR( 140) NOT NULL, 
  referedName VARCHAR( 140) NOT NULL, 
  referedEmail VARCHAR( 140) NOT NULL, 
  referedTelephone INT UNSIGNED NOT NULL, 
  date_answer DATE NOT NULL, 
  CONSTRAINT pk_refered PRIMARY KEY ( refered_id ) 
) ENGINE = InnoDB DEFAULT CHARSET = 'utf8';

CREATE TABLE IF NOT EXISTS `efective_protection_inicialization` 
( init_id SMALLINT UNSIGNED AUTO_INCREMENT,
  agentName VARCHAR( 140 ) DEFAULT 'Anonimo', 
  agente VARCHAR( 140) NOT NULL, 
  client VARCHAR( 140) NOT NULL, 
  clientMail VARCHAR( 140) NOT NULL, 
  email VARCHAR( 140) NULL, 
  date_answer DATE NOT NULL, 
  CONSTRAINT pk_init PRIMARY KEY ( init_id ) 
) ENGINE = InnoDB DEFAULT CHARSET = 'utf8';
