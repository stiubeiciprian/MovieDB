
CREATE TABLE users(
  u_id int(16) not null AUTO_INCREMENT PRIMARY KEY,
  u_name varchar(25) not null,
  u_pwd varchar(50) not null,
  u_email varchar(50) not null,
  u_role varchar(25) not null
)

CREATE TABLE movie(
  m_id int(16) not null AUTO_INCREMENT PRIMARY KEY,
  m_title varchar(50) not null,
  m_trailer varchar(200),
  m_length int(9) not null,
  m_date date not null,
  m_description text not null
)

CREATE TABLE genre(
  g_id int(8) not null AUTO_INCREMENT PRIMARY KEY,
  g_name varchar(25) not null
)

CREATE TABLE movie_genre(
  m_id int(16) not null, -- index
  g_id int(8) not null   -- index
)

CREATE TABLE review(
  r_id int(16) not null AUTO_INCREMENT PRIMARY KEY,
  u_id int(16) not null,  -- index
  m_id int(16) not null,  -- index
  r_title varchar(50) not null,
  r_content text not null
)

CREATE TABLE watchlist(
  u_id int(16) not null,  -- index
  m_id int(16) not null   -- index
)
