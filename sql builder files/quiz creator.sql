CREATE TABLE questionFormat(
    questionId int primary key AUTO_INCREMENT,
    question text NOT NULL,
    choice1 text,
    choice2 text,
    choice3 text,
    answer text NOT NULL,
    answerExpl text NOT NULL
);

--@block
INSERT INTO questionformat(question,choice1,choice2,choice3,answer,answerExpl)
values('What type of die is used to do skill checks?','36 sided','18 sided','10 sided','20 sided','20 sided die are used to roll for skill checks.'),
('How many different playable races currently exist in the latest edition of D&D?','17 races','25 races','39 races','81 races','There are 81 races visible on the race page of this website.'),
('What does homebrew mean in the context of D&D?','Make your own drinks for a D&D session','Modify your nintendo gaming system','Having the Dungeon Master create a building for the players to live in','Custom campaigns/additions made by the players','Homebrew refers to creating custom campaigns for your D&D roleplaying session.'),
('How many classes currently exist within 5e?','6 classes','8 classes','16 classes','13 classes','13 different classes are visible on the classes page of this website.'),
('Which of these classes is not from the original set of D&D Classes?','Warlock','Cleric','Sorcerer','Blood Hunter','The Blood Hunter is a homebrew class that was originally made by the D&D podcast Critical Role'),
('Which of the following is an innate trait to humans in D&D?','Pact of the Beast','Advanced Tool Mastery','Psionic Ability','Second Language','Humans are capable of innately knowing Common and a second language'),
('What is the main stat of a barbarian?','Agility','Charisma','Wisdom','Strength','The Barbarian class, as seen on the classes page, primarily uses strength.'),
('What differentiates artificers from other magic classes?','They play instruments','Artificers create original magic spells','Artificers use magic to buff other members of the party','Artificers create custom magic tools','As seen on the Classes page, Artificers create and unlock magical equipment.'),
('Which sourcebook contains basic information for D&D characters?','Tashas Cauldron of Everything','Dungeon Masters Guide','Explorers Guide','The Players Handbook','The Players Handbook Everything a player needs to create heroic characters for Dungeons & Dragons'),
('What attribute modifies initiative?','Strength','Constitution','Wisdom','Dexterity','Dexterity, which refers to agility or nimbleness, helps with initiative.'),
('What animal is the Grung Race based off of?','Turtles','Beavers','Cats','Frogs','Grungs, from the One Grung Above source book, are poisonous frogs.'),
('Which campaign book is based off the Netflix Series Stranger Things?','Out of the Abyss','Guide to the Upside Down','Demogorgon Hunters','Hunt for the Thessalhydra','Hunt for the Thessalhydra is a Netflix inspired campaign book which can be seen on the Campaign books page.'),
('Which class is known for shapeshifting into various animals?','Sorcerer','Warlock','Shifter','Druid','Druids are a class closely attuned with nature, including animals.'),
('What is D&D?','A popular RPG videogame set in a Fantasy World.','A Fantasy Boardgame','A Fantasy Movie Franchise','The Most Popular Tabletop RolePlaying Game in the World!','This one should be somewhat obvious, but D&D is the most popular tabletop roleplaying game in the world.'),
('What sided dice is used to roll for initiative?','12 sided die','6 sided die','36 sided die','20 sided die','20 sided die are used to roll for initiative.'),
('Whos head is in the toilet bowl?','Brandon','Dr. Kumar','Nic','Gumuchian','from music video');
--@block
Select * from questionformat;
