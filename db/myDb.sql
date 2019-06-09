CREATE TABLE room (
roomId int PRIMARY KEY,
roomNum int
);

CREATE TABLE student (
studentId serial PRIMARY KEY,
name text NOT NULL,
job varchar(100) NOT NULL,
pass boolean,
room int REFERENCES room(roomId)
);

INSERT INTO room
(roomId) VALUES (1101);

INSERT INTO room
(roomId) VALUES	(3103);

INSERT INTO student
(name, job, pass, room) VALUES ('Angelo Pablo', 'Kitchen', TRUE, 3103);

INSERT INTO student
(name, job, pass, room) VALUES ('Tanner Larson', 'Living Room', TRUE, 3103);

INSERT INTO student
(name, job, pass, room) VALUES ('Jeff Richards', 'Stovetop', TRUE, 3103);

INSERT INTO student
(name, job, pass, room) VALUES ('Micah Lewellen', 'Living Room', TRUE, 3103);

INSERT INTO student
(name, job, pass, room) VALUES ('Warren Smith', 'Living Room', TRUE, 3103);

INSERT INTO student
(name, job, pass, room) VALUES ('Alex Williams', 'Living Room', TRUE, 3103);

INSERT INTO room
(roomId) VALUES (1102);

INSERT INTO room
(roomId) VALUES (3104);

INSERT INTO room
(roomId) VALUES (3105);

INSERT INTO room
(roomId) VALUES (3106);