<?php
class ChartEntity {
	private $id;
	private $mtrHndingCode;
	private $trollyCodeStart;
	private $trollyCodeEnd;
	private $cycleNumber;
	private $treshold;
	private $timeToGo;
	private $timeToBack;
	private $duration;
	private $acptnceStat;
	
    private $tableName = "`c_data`";
    
	private  $finalId = "`ID`";
	private  $finalMtrHndingCode = "`MTR_HNDING_CODE`";
	private  $finalTrollyCodeStart = "`TROLLY_CODE_START`";
	private  $finalTrollyCodeEnd = "`TROLLY_CODE_END`";
	private  $finalCycleNumber = "`CYCLE_NUMBER`";
	private  $finalTreshold = "`TRESHOLD`";
	private  $finalTimeToGo = "`TIME_TO_GO`";
	private  $finalTimeToBack = "`TIME_TO_BACK`";
	private  $finalDuration = "`DURATION`";
	private  $finalAcptnceStat = "`ACPTNCE_STAT`";
	
	function setId($id){
		$this->id = $id;
		return $this;
	}
	
	function getId(){
		return $this->id;
	}
	
	function setMtrHndingCode($mtrHndingCode){
		$this->mtrHndingCode = $mtrHndingCode;
		return $this;
	}
	
	function getMtrHndingCode(){
		return $this->mtrHndingCode;
	}
	
	function setTrollyCodeStart($trollyCodeStart){
		$this->trollyCodeStart = $trollyCodeStart;
		return $this;
	}
	
	function getTrollyCodeStart(){
		return $this->trollyCodeStart;
	}
	
	function setTrollyCodeEnd($trollyCodeEnd){
		$this->trollyCodeEnd = $trollyCodeEnd;
		return $this;
	}
	
	function getTrollyCodeEnd(){
		return $this->trollyCodeEnd;
	}
	
	function setCycleNumber($cycleNumber){
		$this->cycleNumber = $cycleNumber;
		return $this;
	}
		
	function getCycleNumber(){
		return $this->cycleNumber;
	}
	
	function setTreshold($treshold){
		$this->treshold = $treshold;
		return $this;
	}
	
	function getTreshold(){
		return $this->treshold;
	}
	
	function setTimeToGo($timeToGo){
		$this->timeToGo = $timeToGo;
		return $this;
	}
	
	function getTimeToGo(){
		return $this->timeToGo;
	}
	
	function setTimeToBack($timeToBack){
		$this->timeToBack = $timeToBack;
		return $this;
	}
	
	function getTimeToBack(){
		return $this->timeToBack;
	}
	
	function setDuration($duration){
		$this->duration = $duration;
		return $this;
	}
	
	function getDuration(){
		return $this->$duration;
	}
	
	function setAcptnceStat($acptnceStat){
		$this->acptnceStat = $acptnceStat;
		return $this;
	}
	
	function getAcptnceStat(){
		return $this->acptnceStat;
	}
	
	function sqlInsertString(){
		return "INSERT INTO ".$this->tableName." "
		."(".$this->finalMtrHndingCode.",".$this->finalTrollyCodeStart.",".$this->finalTrollyCodeEnd.",".$this->finalCycleNumber.",".$this->finalTreshold.",".$this->finalTimeToGo.",".$this->finalTimeToBack.",".$this->finalDuration.",".$this->finalAcptnceStat.")"
		." values "
		."('".$this->mtrHndingCode."','".$this->trollyCodeStart."','".$this->trollyCodeEnd."','".$this->cycleNumber."','".$this->treshold."','".$this->timeToGo."','".$this->timeToBack."','".$this->duration."','".$this->acptnceStat."');";
	}
}
?>