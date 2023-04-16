CREATE TABLE questionFormat(
    questionId int primary key AUTO_INCREMENT,
    question text NOT NULL,
    choice1 text,
    choice2 text,
    choice3 text,
    answer text NOT NULL
);

--@block
INSERT INTO questionformat(question,choice1,choice2,choice3,answer)
values('What type of die is used to do skill checks?','36 sided','18 sided','10 sided','20 sided'),
('How many different playable races currently exist in the lastest edition of D&D?','17 races','25 races','39 races','43 races'),
('What does homebrew mean in the context of D&D?','Make your own drinks for a D&D session','Modify your nintendo gaming system','Having the Dungeon Master create a building for the players to live in','Custom campaigns/additions made by the players'),
('How many classes currently exist within 5e?','6 classes','8 classes','16 classes','13 classes'),
('At what level do wizards get access to 4th level spells?','Level 5','Level 3','Level 6','Level 7'),
('At level 3, Warlocks get the pact boons of Pact of the Blade, Pact of the Tome, and ____','Pact of the Beast','Pact of the Forest','Pact of the Arcane','Pact of the Chain'),
('At what level do Tieflings acquire the Hellish Rebuke Spell due to their infernal legacy trait?','Level 1','Level 4','Level 5','Level 3'),
('Ignoring constitution modifiers, how many hit points to level 1 Barbarians have?','10','15','16','12'),
('What is the highest level spell within Dungeons and Dragons 5th Edition?','10th','12th','8th','9th'),
('What attribute modifies initiative?','Strength','Constitution','Wisdom','Dexterity'),
('Of the following, what color Dragonborn has the acid breath attack?','Blue','Green','Gold','Black'),
('What ability does the Artificer unlock at level 2?','Magic Missile','Blink','Creation','Infuse Item'),
('What is the alignment of an Ancient White Dragon?','Lawful good','Lawful Evil','True Neutral','Chaotic Evil'),
('What is the natural armor class of an Aboleth?','13 AC','12 AC','15 AC','17 AC'),
('What sided dice is used to roll for initiative?','12 side die','6 sided die','36 sided die','20 sided die');
--@block
Select * from questionformat;