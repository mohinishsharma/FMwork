<?php
    class DB
    {
        Private $_db;
        Private $host;
        Private $user;
        Private $password;
        Private $dbname;
        
        public function __construct()
        {
            $this->host = $GLOBALS["configs"]["database"]["host"];
            $this->user = $GLOBALS["configs"]["database"]["username"];
            $this->password = $GLOBALS["configs"]["database"]["password"];
            $this->dbname = $GLOBALS["configs"]["database"]["DBname"];
            if($this->dbname != "")
            {
                $this->_db = new mysqli($this->host, $this->user, $this->password, $this->dbname);
            }
            else
            {
                $this->_db = new mysqli($this->host,$this->user,$this->password);
            }
            if(!$this->_db)
                die("Connection unSuccesssful");
        }

        public function ChangeDB($dbname)
        {
            $this->dbname = $dbname;
            $this->_db->select_db($this->dbname);
        }

        public function query($q)
        {
            $q = $this->_db->real_escape_string($q);
            $query = $this->_db->query($q);
            if(!$query)
                echo $this->_db->sqlstate;
        }
    }
    
?>