create database results;
  create table questions(
  question varchar(200),
  topic char(50),
  answer varchar(200),
  difficulty char(15),
  company varchar(20),
  numasked integer
  );
  insert into questions(question, topic, answer, difficulty, company, numasked) values ('Do you know our CEO? How do you pronounce his name?', 'General Knowledge', 'Jeff Bezos', 'Easy', 'Amazon', 13),
  ('What would you do if you found out that your closest friend at work was stealing?','Ethics', "Your loyalty - to the company and your friend - is being questioned. Say you'll consider the nature of the offence before deciding how to proceed.", 'Hard', 'Amazon', 20),
  ("How would you solve problems if you were from Mars?", 'Creative', 'The interviewer wants to see if you can think out-of-the-box. Consider sharing a personal anecdote that shows how you came up with a creative solution to a customer problem, improved an internal process or made a sale via an innovative strategy.', 'Medium', 'Amazon', 16),
  ('Why do you want to work in Google?','Creative', "It's been my dream to work in Google", 'Medium', 'Google', 34),("How would you describe yourself?", 'Creative', 'Fun person,livingtothefullest. haha!!', 'Easy', 'Google', 12),('What is an exciting product you worked on recently?', 'Creative', 'Non-profit organisation for helping the poor', 'Hard', 'Google', 34),
  ('Which language you are most proficient in', 'Creative', 'R, C++, C and Python', 'Easy', 'Microsoft', 28),('Few questions about leadership skill set', 'Ethics', 'Leadership skills means being brave and confident.', 'Medium', 'Microsoft', 57),
  ('Why should we hire you?', 'Creative', 'Because I have good leadership skills and I am very confident regarding my nature as well as my knowledge.', 'Hard', 'Microsoft', 16)
