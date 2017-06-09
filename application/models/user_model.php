<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class user_model extends CI_Model
{
	function __construct()
    {
        parent::__construct();
    }
	
	function get_user($email, $pwd)
	{
		$var="select * from user where username='".$email."' and password='".$pwd."'";
		
		$query = $this->db->query($var);
		return $query->result();
	}
	
	function add_user($fname,$lname,$email,$password,$username)
	{
		$var="Insert into user(fname,lname,email,password,username) values ('".$fname."','".$lname."','".$email."','".$password."','".$username."')";
		
		$query = $this->db->query($var);
		
		return $query;
	}
	
	function query($a,$b)
	{
		$var="select email from user where ".$a."='".$b."'";
		$query = $this->db->query($var);
		return $query;
	}
	function room($a,$b)
	{
		if($b=='') $b=date('Y/m/d');
		$var="select freeroom from roominfo where time='".$b."' and room=upper('".$a."')";
		$query = $this->db->query($var);
		return $query;
		
		
		//return $query;
	}
	function cost($a)
	{
		$var="select cost from roominfo where  room=upper('".$a."')";
		$query = $this->db->query($var);
		return $query;
	}
	
	function cost_calculation_form($room,$cost,$date1,$date2)
	{
		//echo $date2;
		$temp1=date_create($date1);
		$temp2=date_create($date2);
		$diff=date_diff($temp1,$temp2);
		$temp1=1+ $diff->y * 365.25 + $diff->m * 30 + $diff->d ;
		$temp=intval($room);
		//echo $temp;
		//echo $cost;
		//echo intval($cost);
		$final= $temp1*$temp*intval($cost);
		
		
		//echo intval($cost);
		return $final;
	}
	
	function update($date1,$date2,$room,$roomNo,$tel)
	{
		
		
		$msg=intval($roomNo);
		while (strtotime($date1) <= strtotime($date2)) {
			
			
			$var2="select freeroom as val from roominfo where  room=upper('".$room."') and time='".$date1."';";
			$temp='';
			$query=$this->db->query($var2);
			foreach ($query->result() as $row)
			{
				$temp= $row->val;
				
			}
			if($temp=='') $msg=0;
			else if ($msg>$temp) $msg=$temp;
			$date1 = date ("Y-m-d", strtotime("+1 day", strtotime($date1)));
		}
		
		
		return $msg;
			
			
			
			
	}
	function update_now($date1,$date2,$room,$roomNo,$tel,$last)
	{
		$var="update roominfo set freeroom=freeroom-".intval($roomNo).",bookedroom=bookedroom+".intval($roomNo)." where room=upper('".$room."') and time>='".$date1."' and time <= '".$date2."';";
		$this->db->query($var);
		$var="insert into booking_history values('".$last."','".$tel."','".$room."',".$roomNo.",'".$date1."','".$date2."');";
		$this->db->query($var);
	}
	function history()
	{
		$var="select username,room,roomno,sDate,eDate from booking_history";
		return $this->db->query($var);
	}
	
	function add_room($name,$cost,$no,$date1,$date2)
	{
		
		
		while (strtotime($date1) <= strtotime($date2)) {
			
			
			$var2="select freeroom as val from roominfo where  room=upper('".$name."') and time='".$date1."';";
			//echo $var2;
			$query=$this->db->query($var2);
			$temp='';
			foreach ($query->result() as $row)
			{
				$temp= $row->val;
				
			}
			$var="";
			if($temp=='')$var= "insert into roominfo values('".$date1."','".$name."',".intval($cost).",".intval($no).",0,".intval($no).");";
			else $var="update roominfo set freeroom=freeroom+ ".intval($no)." ,totalroom=totalroom+".intval($no)." where room=upper('".$name."') and time=('".$date1."');";
			$query=$this->db->query($var);
			$date1 = date ("Y-m-d", strtotime("+1 day", strtotime($date1)));
		}
		
	}
	
}?>