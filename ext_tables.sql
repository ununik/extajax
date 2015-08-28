CREATE TABLE tx_SomethingwhateverLead_Domain_Model_FormData (
        uid int(11) unsigned DEFAULT '0' NOT NULL auto_increment,
        pid int(11) DEFAULT '0' NOT NULL,

        title varchar(255) DEFAULT '' NOT NULL,
        firstname varchar(255) DEFAULT '' NOT NULL,
        surname varchar(255) DEFAULT '' NOT NULL,
        company varchar(255) DEFAULT '' NOT NULL,
        email varchar(255) DEFAULT '' NOT NULL,
        reason varchar(255) DEFAULT '' NOT NULL,
        message text NOT NULL,
        telefone int(20) DEFAULT '0' NOT NULL,
        service varchar(255) DEFAULT '' NOT NULL,

        PRIMARY KEY (uid),
        KEY parent (pid),
);