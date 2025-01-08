ALTER TABLE hm_user_session 
ADD COLUMN hm_version INT DEFAULT 1;

ALTER TABLE hm_user_session 
ADD COLUMN lock INT DEFAULT 0;
