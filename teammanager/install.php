<?php
//Connect to the database
include_once("connection.php");
//Create TblAdmin
$stmt = $conn->prepare("DROP TABLE IF EXISTS TblAdmin;
CREATE TABLE TblAdmin
(AdminID INT(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Username VARCHAR(20) NOT NULL,
Password VARCHAR(20) NOT NULL)");
$stmt->execute();
$stmt->closeCursor();

//Connect to TblPlayers
$stmt = $conn->prepare("DROP TABLE IF EXISTS TblPlayers;
CREATE TABLE TblPlayers
(PlayerID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Username VARCHAR(20) NOT NULL,
Password VARCHAR(20) NOT NULL,
Firstname VARCHAR(30) NOT NULL, 
Lastname VARCHAR(30) NOT NULL,
Position VARCHAR(2) NOT NULL, 
Height INT(3) NOT NULL, 
Weight INT(3) NOT NULL, 
Year VARCHAR(2) NOT NULL, 
House VARCHAR(20) NOT NULL, 
Status TINYINT(1),
Selected TINYINT(1))");
$stmt->execute();
$stmt->closeCursor();

//Connect to TblTblFixtures
$stmt = $conn->prepare("DROP TABLE IF EXISTS TblFixtures;
CREATE TABLE TblFixtures
(FixtureID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Opponent VARCHAR(30) NOT NULL,
Date DATE NOT NULL,
Time TIME NOT NULL,
Location VARCHAR(50) NOT NULL,
HA TINYINT(1) NOT NULL, 
Type VARCHAR(20),
O_score INT(3),
T_score INT(3))");
$stmt->execute();
$stmt->closeCursor();

//Connect to TblTeamFixture
$stmt = $conn->prepare("DROP TABLE IF EXISTS TblTeamFixture;
CREATE TABLE TblTeamFixture
(FixtureID INT(6) NOT NULL,
PlayerID INT(6) NOT NULL,
Points INT(3) DEFAULT 0,
Rebounds INT(2) DEFAULT 0,
Assists INT(2) DEFAULT 0,
Steals INT(2) DEFAULT 0,
Blocks INT(2) DEFAULT 0,
FGA INT(2) DEFAULT 0,
FGM INT(2) DEFAULT 0,
FTA INT(2) DEFAULT 0,
FTM INT(2) DEFAULT 0,
3PA INT(2) DEFAULT 0,
3PM INT(2) DEFAULT 0,
Turnovers INT(2) DEFAULT 0,
Fouls INT(1) DEFAULT 0,
ORB INT(2) DEFAULT 0,
DRB INT(2) DEFAULT 0,
Ejection TINYINT(1) DEFAULT 0,
Gamescore INT(2),
PRIMARY KEY(FixtureID,PlayerID))");
$stmt->execute();
$stmt->closeCursor();