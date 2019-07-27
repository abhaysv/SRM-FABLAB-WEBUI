<?php
class User_model extends CI_Model {

    public $status; 
    public $roles;
    
    function __construct(){
        // Call the Model constructor
        parent::__construct();        
        $this->status = $this->config->item('status');
        $this->roles = $this->config->item('roles');
    }    
    
    public function setUserPending($d)
    {  
            
 
            $string = array(
                'role'=>$this->roles[0], 
                'status'=>$this->status[0], 
                'password'=> '', 
                'last_login'=> ''
            );
            $this->db->where('email', $d['email']);
            $this->db->update('users', $string);
            $success = $this->db->affected_rows(); 
        
            if(!$success){
                error_log('Unable to updateUserInfo('.$d['email'].')');
                return false;
            }
            
            return TRUE; 
    }
 
    public function checkAcamediaEmail($email)
    {     
        $this->db->get_where('users', array('email' => $email), 1);
        return $this->db->affected_rows() > 0 ? TRUE : FALSE;         
    }
    

    
    public function insertToken($user_id)
    {   
        $token = substr(sha1(rand()), 0, 30); 
        $date = date('Y-m-d');
        
        $string = array(
                'token'=> $token,
                'user_id'=>$user_id,
                'created'=>$date
            );
        $query = $this->db->insert_string('tokens',$string);
        $this->db->query($query);
        return $token . $user_id;
        
    }
    
    public function isTokenValid($token)
    {
       $tkn = substr($token,0,30);
       $uid = substr($token,30);      
       
        $q = $this->db->get_where('tokens', array(
            'tokens.token' => $tkn, 
            'tokens.user_id' => $uid), 1);                         
               
        if($this->db->affected_rows() > 0){
            $row = $q->row();             
            
            $created = $row->created;
            $createdTS = strtotime($created);
            $today = date('Y-m-d'); 
            $todayTS = strtotime($today);
            
            if($createdTS != $todayTS){
                return false;
            }
            
            $user_info = $this->getUserInfo($row->user_id);
            return $user_info;
            
        }else{
            return false;
        }
        
    }    
    
    public function getUserInfo($id)
    {
        $q = $this->db->get_where('users', array('id' => $id), 1);  
        if($this->db->affected_rows() > 0){
            $row = $q->row();
            return $row;
        }else{
            error_log('no user found getUserInfo('.$id.')');
            return false;
        }
    }
    
    public function updateUserInfo($post)
    {
        $data = array(
               'password' => $post['password'],
               'last_login' => date('Y-m-d h:i:s A'), 
               'status' => $this->status[1]
            );
        $this->db->where('id', $post['user_id']);
        $this->db->update('users', $data); 
        $success = $this->db->affected_rows(); 
        
        if(!$success){
            error_log('Unable to updateUserInfo('.$post['user_id'].')');
            return false;
        }
        
        $user_info = $this->getUserInfo($post['user_id']); 
        return $user_info; 
    }

    public function Sync_Fabserver($userInfo)
    {
        $data = array(
               'group_id' => '1',
               'group_name' => 'customer',
               'customer_group_id' => '1',
               'customer_group_name' => 'General',
               'name' => $userInfo->Student_Name,
               'company' => $userInfo->Registration_Number,
               'address' => $userInfo->Communication_Address,
               'city' => $userInfo->Program,               
               'state' => $userInfo->Department,
               'postal_code' => $userInfo->Semester,
               'country' => $userInfo->Faculty_Advisor,
               'phone' => $userInfo->Mobile_Number,               
               'email' => $userInfo->email,
               'payment_term' => '0',
               'logo' => 'logo.png',
               'award_points' => '0',
               'deposit_amount' => '20000.0000',
               'price_group_id' => '1',
               'price_group_name' => 'Default',
            );

        $q = $this->db->insert_string('sma_companies',$data);             
        $this->db->query($q);

        $success = $this->db->insert_id(); 
        
        if(!$success){
            error_log('Unable to Sync_Fabserver('.$userInfo->Registration_Number.')');
            return false;
        }
        
        return $success; 
    }
    
    public function checkLogin($post)
    {
        $this->load->library('password');       
        $this->db->select('*');
        $this->db->where('email', $post['email']);
        $query = $this->db->get('users');
        $userInfo = $query->row();
        
        if(!$this->password->validate_password($post['password'], $userInfo->password)){
            error_log('Unsuccessful login attempt('.$post['email'].')');
            return false; 
        }
        
        $this->updateLoginTime($userInfo->id);
        
        unset($userInfo->password);
        return $userInfo; 
    }
    public function send_email_verify($userInfo,$url)
    {
     //  require '/fablab/fabui/assets/PHPMailer-master/PHPMailerAutoload.php';
    
       require '/home2/srmiicco/fablab.srmiic.com/fabui/application/third_party/PHPMailer-master/PHPMailerAutoload.php';
        $mail = new PHPMailer;
        //$mail->isSMTP();
        $mail->Host = 'smtp.zoho.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'no-reply@srmiic.com';
        $mail->Password = 'Killmedude@123';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        $link = $url; 
                           
        $message = '';
        $message .= '<strong>Hi</strong> ' . $userInfo->Student_Name;                     
        $message .= '<strong>You have signed up with our website</strong><br>';
        $message .= '<strong>Please click:</strong> ' . $link;
        
        $data = array(
             'userName'=> $userInfo->Student_Name,
             'regNo'=> $userInfo->Registration_Number,
             'link'=> $link
                 );
        $bodytemp = $this->load->view('emails/verification.php',$data,TRUE);
        //$this->load->view('emails/verification.php',$data,TRUE);


        $mail->From = 'no-reply@srmiic.com';
        $mail->FromName = 'SRM FABLAB';
        $mail->addAddress($userInfo->email);

        $mail->isHTML(true);

        $mail->Subject = 'FABLAB REGISTARTION VERIFICATION!';
        $mail->Body    = $bodytemp;


        
        if(!$mail->send()) {
           // echo 'Message could not be sent. ok';
           // echo 'Mailer Error: ' . $mail->ErrorInfo;
            return false;
        } else {
          //  echo 'Message has been sent ok';
            return true;
        }
    }
    public function updateLoginTime($id)
    {
        $this->db->where('id', $id);
        $this->db->update('users', array('last_login' => date('Y-m-d h:i:s A')));
        return;
    }
    
    public function getUserInfoByEmail($email)
    {
        $q = $this->db->get_where('users', array('email' => $email), 1);  
        if($this->db->affected_rows() > 0){
            $row = $q->row();
            return $row;
        }else{
            error_log('no user found getUserInfo('.$email.')');
            return false;
        }
    }
    
    public function updatePassword($post)
    {   
        $this->db->where('id', $post['user_id']);
        $this->db->update('users', array('password' => $post['password'])); 
        $success = $this->db->affected_rows(); 
        
        if(!$success){
            error_log('Unable to updatePassword('.$post['user_id'].')');
            return false;
        }        
        return true;
    } 
    
}
