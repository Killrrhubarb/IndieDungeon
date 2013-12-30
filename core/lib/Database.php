<?php

/* 
 * MySQL Database mapping for Indie Dungeon. Changes to the database require
 * that the code here is altered to reflect that. This database mapping library
 * is created to avoid mistakes and encapulate all queries to one central
 * location.
 */

class Database {
    
    private $connection,        //The actual connection
            $connection_status, //The status of the actual connection
            $connection_query;  //The query to be sent when called to be sent
    
    //Stored queries
    private $query_userInfo = '';
    
    public function __construct($host = 'localhost', $user = 'root', $pass = '', $database = 'Neuth', $port = '', $socket = '') {
        $this->connection = new mysqli($host, $user, $pass, $database, $port, $socket);
    }
    
    /*
     * Sends the query that has been stored.
     */
    private function sendQuery() {
        if($this->connection_query != null) {
            $this->connection->query($this->connection_query);
        }
    }
    
    public function getCurrentUserInfo(Session $session) {
        
    }
}