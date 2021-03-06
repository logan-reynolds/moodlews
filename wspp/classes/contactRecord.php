<?php
/**
 *
 * @package	MoodleWS
 * @copyright	(c) P.Pollet 2007 under GPL
 */
class contactRecord {
	/**
	* @var string
	*/
	public $error;
	/**
	* @var integer
	*/
	public $id;
	/**
	* @var string
	*/
	public $auth;
	/**
	* @var integer
	*/
	public $confirmed;
	/**
	* @var integer
	*/
	public $policyagreed;
	/**
	* @var integer
	*/
	public $deleted;
	/**
	* @var string
	*/
	public $username;
	/**
	* @var string
	*/
	public $idnumber;
	/**
	* @var string
	*/
	public $firstname;
	/**
	* @var string
	*/
	public $lastname;
	/**
	* @var string
	*/
	public $email;
	/**
	* @var string
	*/
	public $icq;
	/**
	* @var integer
	*/
	public $emailstop;
	/**
	* @var string
	*/
	public $skype;
	/**
	* @var string
	*/
	public $yahoo;
	/**
	* @var string
	*/
	public $aim;
	/**
	* @var string
	*/
	public $msn;
	/**
	* @var string
	*/
	public $phone1;
	/**
	* @var string
	*/
	public $phone2;
	/**
	* @var string
	*/
	public $institution;
	/**
	* @var string
	*/
	public $department;
	/**
	* @var string
	*/
	public $address;
	/**
	* @var string
	*/
	public $city;
	/**
	* @var string
	*/
	public $country;
	/**
	* @var string
	*/
	public $lang;
	/**
	* @var string
	*/
	public $timezone;
	/**
	* @var integer
	*/
	public $mnethostid;
	/**
	* @var string
	*/
	public $lastip;
	/**
	* @var string
	*/
	public $theme;
	/**
	* @var string
	*/
	public $description;
	/**
	* @var integer
	*/
	public $role;
	/**
	* @var profileitemRecord[]
	*/
	public $profile;
        /**
    * @var integer
    */
    public $messagecount;
        /**
    * @var integer
    */
    public $online;

	/**
	* default constructor for class userRecord
	* @return userRecord
	*/	 public function contactRecord() {
		 $this->error='';
		 $this->id=0;
		 $this->auth='';
		 $this->confirmed=0;
		 $this->policyagreed=0;
		 $this->deleted=0;
		 $this->username='';
		 $this->idnumber='';
		 $this->firstname='';
		 $this->lastname='';
		 $this->email='';
		 $this->icq='';
		 $this->emailstop=0;
		 $this->skype='';
		 $this->yahoo='';
		 $this->aim='';
		 $this->msn='';
		 $this->phone1='';
		 $this->phone2='';
		 $this->institution='';
		 $this->department='';
		 $this->address='';
		 $this->city='';
		 $this->country='';
		 $this->lang='';
		 $this->timezone=0;
		 $this->mnethostid=0;
		 $this->lastip='';
		 $this->theme='';
		 $this->description='';
		 $this->role=0;
		 $this->profile=array();
         $this->messagecount=0;
         $this->online=0;
	}
	/* get accessors */

	/**
	* @return string
	*/
	public function getError(){
		 return $this->error;
	}


	/**
	* @return integer
	*/
	public function getId(){
		 return $this->id;
	}


	/**
	* @return string
	*/
	public function getAuth(){
		 return $this->auth;
	}


	/**
	* @return integer
	*/
	public function getConfirmed(){
		 return $this->confirmed;
	}


	/**
	* @return integer
	*/
	public function getPolicyagreed(){
		 return $this->policyagreed;
	}


	/**
	* @return integer
	*/
	public function getDeleted(){
		 return $this->deleted;
	}


	/**
	* @return string
	*/
	public function getUsername(){
		 return $this->username;
	}


	/**
	* @return string
	*/
	public function getIdnumber(){
		 return $this->idnumber;
	}


	/**
	* @return string
	*/
	public function getFirstname(){
		 return $this->firstname;
	}


	/**
	* @return string
	*/
	public function getLastname(){
		 return $this->lastname;
	}


	/**
	* @return string
	*/
	public function getEmail(){
		 return $this->email;
	}


	/**
	* @return string
	*/
	public function getIcq(){
		 return $this->icq;
	}


	/**
	* @return integer
	*/
	public function getEmailstop(){
		 return $this->emailstop;
	}


	/**
	* @return string
	*/
	public function getSkype(){
		 return $this->skype;
	}


	/**
	* @return string
	*/
	public function getYahoo(){
		 return $this->yahoo;
	}


	/**
	* @return string
	*/
	public function getAim(){
		 return $this->aim;
	}


	/**
	* @return string
	*/
	public function getMsn(){
		 return $this->msn;
	}


	/**
	* @return string
	*/
	public function getPhone1(){
		 return $this->phone1;
	}


	/**
	* @return string
	*/
	public function getPhone2(){
		 return $this->phone2;
	}


	/**
	* @return string
	*/
	public function getInstitution(){
		 return $this->institution;
	}


	/**
	* @return string
	*/
	public function getDepartment(){
		 return $this->department;
	}


	/**
	* @return string
	*/
	public function getAddress(){
		 return $this->address;
	}


	/**
	* @return string
	*/
	public function getCity(){
		 return $this->city;
	}


	/**
	* @return string
	*/
	public function getCountry(){
		 return $this->country;
	}


	/**
	* @return string
	*/
	public function getLang(){
		 return $this->lang;
	}


	/**
	* @return integer
	*/
	public function getTimezone(){
		 return $this->timezone;
	}


	/**
	* @return integer
	*/
	public function getMnethostid(){
		 return $this->mnethostid;
	}


	/**
	* @return string
	*/
	public function getLastip(){
		 return $this->lastip;
	}


	/**
	* @return string
	*/
	public function getTheme(){
		 return $this->theme;
	}


	/**
	* @return string
	*/
	public function getDescription(){
		 return $this->description;
	}


	/**
	* @return integer
	*/
	public function getRole(){
		 return $this->role;
	}


	/**
	* @return profileitemRecord[]
	*/
	public function getProfile(){
		 return $this->profile;
	}

    /**
    * @return integer
    */
    public function getOnline(){
         return $this->online;
    }

       /**
    * @return integer
    */
    public function getMessagecount(){
         return $this->messagecount;
    }


	/*set accessors */

	/**
	* @param string $error
	* @return void
	*/
	public function setError($error){
		$this->error=$error;
	}


	/**
	* @param integer $id
	* @return void
	*/
	public function setId($id){
		$this->id=$id;
	}


	/**
	* @param string $auth
	* @return void
	*/
	public function setAuth($auth){
		$this->auth=$auth;
	}


	/**
	* @param integer $confirmed
	* @return void
	*/
	public function setConfirmed($confirmed){
		$this->confirmed=$confirmed;
	}


	/**
	* @param integer $policyagreed
	* @return void
	*/
	public function setPolicyagreed($policyagreed){
		$this->policyagreed=$policyagreed;
	}


	/**
	* @param integer $deleted
	* @return void
	*/
	public function setDeleted($deleted){
		$this->deleted=$deleted;
	}


	/**
	* @param string $username
	* @return void
	*/
	public function setUsername($username){
		$this->username=$username;
	}


	/**
	* @param string $idnumber
	* @return void
	*/
	public function setIdnumber($idnumber){
		$this->idnumber=$idnumber;
	}


	/**
	* @param string $firstname
	* @return void
	*/
	public function setFirstname($firstname){
		$this->firstname=$firstname;
	}


	/**
	* @param string $lastname
	* @return void
	*/
	public function setLastname($lastname){
		$this->lastname=$lastname;
	}


	/**
	* @param string $email
	* @return void
	*/
	public function setEmail($email){
		$this->email=$email;
	}


	/**
	* @param string $icq
	* @return void
	*/
	public function setIcq($icq){
		$this->icq=$icq;
	}


	/**
	* @param integer $emailstop
	* @return void
	*/
	public function setEmailstop($emailstop){
		$this->emailstop=$emailstop;
	}


	/**
	* @param string $skype
	* @return void
	*/
	public function setSkype($skype){
		$this->skype=$skype;
	}


	/**
	* @param string $yahoo
	* @return void
	*/
	public function setYahoo($yahoo){
		$this->yahoo=$yahoo;
	}


	/**
	* @param string $aim
	* @return void
	*/
	public function setAim($aim){
		$this->aim=$aim;
	}


	/**
	* @param string $msn
	* @return void
	*/
	public function setMsn($msn){
		$this->msn=$msn;
	}


	/**
	* @param string $phone1
	* @return void
	*/
	public function setPhone1($phone1){
		$this->phone1=$phone1;
	}


	/**
	* @param string $phone2
	* @return void
	*/
	public function setPhone2($phone2){
		$this->phone2=$phone2;
	}


	/**
	* @param string $institution
	* @return void
	*/
	public function setInstitution($institution){
		$this->institution=$institution;
	}


	/**
	* @param string $department
	* @return void
	*/
	public function setDepartment($department){
		$this->department=$department;
	}


	/**
	* @param string $address
	* @return void
	*/
	public function setAddress($address){
		$this->address=$address;
	}


	/**
	* @param string $city
	* @return void
	*/
	public function setCity($city){
		$this->city=$city;
	}


	/**
	* @param string $country
	* @return void
	*/
	public function setCountry($country){
		$this->country=$country;
	}


	/**
	* @param string $lang
	* @return void
	*/
	public function setLang($lang){
		$this->lang=$lang;
	}


	/**
	* @param integer $timezone
	* @return void
	*/
	public function setTimezone($timezone){
		$this->timezone=$timezone;
	}


	/**
	* @param integer $mnethostid
	* @return void
	*/
	public function setMnethostid($mnethostid){
		$this->mnethostid=$mnethostid;
	}


	/**
	* @param string $lastip
	* @return void
	*/
	public function setLastip($lastip){
		$this->lastip=$lastip;
	}


	/**
	* @param string $theme
	* @return void
	*/
	public function setTheme($theme){
		$this->theme=$theme;
	}


	/**
	* @param string $description
	* @return void
	*/
	public function setDescription($description){
		$this->description=$description;
	}


	/**
	* @param integer $role
	* @return void
	*/
	public function setRole($role){
		$this->role=$role;
	}


	/**
	* @param profileitemRecord[] $profile
	* @return void
	*/
	public function setProfile($profile){
		$this->profile=$profile;
	}

    /**
    * @param integer $messagecount
    * @return void
    */
    public function setMessageCount($messagecount){
        $this->timezone=$messageCount;
    }

       /**
    * @param integer $messagecount
    * @return void
    */
    public function setOnline($online){
        $this->online=$online;
    }

}

?>
