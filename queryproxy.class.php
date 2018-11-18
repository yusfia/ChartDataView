<?php
include_once('db.class.php'); // call db.class.php
include_once('ChartEntity.class.php');

class QueryProxy {
    
    private $db;
    
    function __construct(){
        $this->db = new Db();
    }
    
    function selectAll(){
        $crtEntity = new ChartEntity();
        $query = "SELECT `TRESHOLD`,`DURATION` FROM ".$crtEntity->tableName." ORDER BY ".$crtEntity->finalId." ASC;";
        $result = $this->db->getAll($query);
        $arrayResult;
        $i = 0;
        foreach($result as $row) {
            $arrayResult[1][$i] = $row['DURATION'];
            $arrayResult[2][$i] = $row['TRESHOLD'];
            $i++;
        }
        return $arrayResult;
    }
    
    function selectByTreshold(){
        $crtEntity = new ChartEntity();
        $query = "SELECT `TRESHOLD`,`DURATION` FROM ".$crtEntity->tableName." ORDER BY ".$crtEntity->finalId." ASC;";
        $result = $this->db->getAll($query);
        
        $belowTreshold = 0;
        $aboveTreshold = 0;
        foreach($result as $row) {
            if ($row['DURATION'] > $row['TRESHOLD']){
                $aboveTreshold++;
            } else {
                $belowTreshold++;
            }
        }
        $arrayResult[1]=$belowTreshold;
        $arrayResult[2]=$aboveTreshold;
        return $arrayResult;
    }
    
    function insertEntityIntoDatabase($crtEntity){
        return $this->db->execute($crtEntity->sqlInsertString());
    }
}
?>