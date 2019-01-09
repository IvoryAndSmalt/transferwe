#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: images
#------------------------------------------------------------

CREATE TABLE images(
        id    Int  Auto_increment  NOT NULL ,
        titre Varchar (255) NOT NULL ,
        url   Text NOT NULL
	,CONSTRAINT images_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: meme
#------------------------------------------------------------

CREATE TABLE meme(
        id        Int  Auto_increment  NOT NULL ,
        nom       Varchar (255255) NOT NULL ,
        image     Text NOT NULL ,
        id_images Int NOT NULL
	,CONSTRAINT meme_PK PRIMARY KEY (id)

	,CONSTRAINT meme_images_FK FOREIGN KEY (id_images) REFERENCES images(id)
)ENGINE=InnoDB;

