<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : User (UserController)
 * User Class to control all user related operations.
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class User extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->isLoggedIn();   
    }
    
    /**
     * This function used to load the first screen of the user
     */
    public function index()
    {
        $this->global['pageTitle'] = '新亞書院迎新營';
        
        $this->loadViews("dashboard", $this->global, NULL , NULL);
    }
    
    /**
     * This function is used to load the user list
     */
    function userListing()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->model('user_model');
        
            $searchText = $this->input->post('searchText');
            $data['searchText'] = $searchText;
            
            $this->load->library('pagination');
            
            $count = $this->user_model->userListingCount($searchText);

			$returns = $this->paginationCompress ( "userListing/", $count, 5 );
            
            $data['userRecords'] = $this->user_model->userListing($searchText, $returns["page"], $returns["segment"]);
            
            $this->global['pageTitle'] = '新亞書院迎新營';
            
            $this->loadViews("users", $this->global, $data, NULL);
        }
    }

    /**
     * This function is used to load the add new form
     */
    function addNew()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->model('user_model');
            $data['roles'] = $this->user_model->getUserRoles();
            
            $this->global['pageTitle'] = '新亞書院迎新營';

            $this->loadViews("addNew", $this->global, $data, NULL);
        }
    }

    /**
     * This function is used to check whether email already exist or not
     */
    function checkEmailExists()
    {
        $userId = $this->input->post("userId");
        $email = $this->input->post("email");

        if(empty($userId)){
            $result = $this->user_model->checkEmailExists($email);
        } else {
            $result = $this->user_model->checkEmailExists($email, $userId);
        }

        if(empty($result)){ echo("true"); }
        else { echo("false"); }
    }
    
    /**
     * This function is used to add new user to the system
     */
    function addNewUser()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('fname','Full Name','trim|required|max_length[128]|xss_clean');
            $this->form_validation->set_rules('email','Email','trim|required|xss_clean|max_length[128]');
            $this->form_validation->set_rules('password','Password','required|max_length[20]');
            $this->form_validation->set_rules('cpassword','Confirm Password','trim|required|matches[password]|max_length[20]');
            $this->form_validation->set_rules('role','Role','trim|required|numeric');
            $this->form_validation->set_rules('mobile','Mobile Number','required|min_length[8]|xss_clean');
            
            if($this->form_validation->run() == FALSE)
            {
                $this->addNew();
            }
            else
            {
                $name = ucwords(strtolower($this->input->post('fname')));
                $email = $this->input->post('email');
                $password = $this->input->post('password');
                $roleId = $this->input->post('role');
                $mobile = $this->input->post('mobile');
                
                $userInfo = array('email'=>$email, 'password'=>getHashedPassword($password), 'roleId'=>$roleId, 'name'=> $name,
                                    'mobile'=>$mobile, 'createdBy'=>$this->vendorId, 'createdDtm'=>date('Y-m-d H:i:s'));
                
                $this->load->model('user_model');
                $result = $this->user_model->addNewUser($userInfo);
                
                if($result > 0)
                {
                    $this->session->set_flashdata('success', 'New User created successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'User creation failed');
                }
                
                redirect('addNew');
            }
        }
    }

    
    /**
     * This function is used load user edit information
     * @param number $userId : Optional : This is user id
     */
    function editOld($userId = NULL)
    {
        if($this->isAdmin() == TRUE || $userId == 1)
        {
            $this->loadThis();
        }
        else
        {
            if($userId == null)
            {
                redirect('userListing');
            }
            
            $data['roles'] = $this->user_model->getUserRoles();
            $data['userInfo'] = $this->user_model->getUserInfo($userId);
            
            $this->global['pageTitle'] = '新亞書院迎新營';
            
            $this->loadViews("editOld", $this->global, $data, NULL);
        }
    }
    
    
    /**
     * This function is used to edit the user information
     */
    function editUser()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->library('form_validation');
            
            $userId = $this->input->post('userId');
            
            $this->form_validation->set_rules('fname','Full Name','trim|required|max_length[128]|xss_clean');
            $this->form_validation->set_rules('email','Email','trim|required|xss_clean|max_length[128]');
            $this->form_validation->set_rules('password','Password','matches[cpassword]|max_length[20]');
            $this->form_validation->set_rules('cpassword','Confirm Password','matches[password]|max_length[20]');
            $this->form_validation->set_rules('role','Role','trim|required|numeric');
            $this->form_validation->set_rules('mobile','Mobile Number','required|min_length[8]|xss_clean');
            
            if($this->form_validation->run() == FALSE)
            {
                $this->editOld($userId);
            }
            else
            {
                $name = ucwords(strtolower($this->input->post('fname')));
                $email = $this->input->post('email');
                $password = $this->input->post('password');
                $roleId = $this->input->post('role');
                $mobile = $this->input->post('mobile');
                
                $userInfo = array();
                
                if(empty($password))
                {
                    $userInfo = array('email'=>$email, 'roleId'=>$roleId, 'name'=>$name,
                                    'mobile'=>$mobile, 'updatedBy'=>$this->vendorId, 'updatedDtm'=>date('Y-m-d H:i:s'));
                }
                else
                {
                    $userInfo = array('email'=>$email, 'password'=>getHashedPassword($password), 'roleId'=>$roleId,
                        'name'=>ucwords($name), 'mobile'=>$mobile, 'updatedBy'=>$this->vendorId, 
                        'updatedDtm'=>date('Y-m-d H:i:s'));
                }
                
                $result = $this->user_model->editUser($userInfo, $userId);
                
                if($result == true)
                {
                    $this->session->set_flashdata('success', 'User updated successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'User updation failed');
                }
                
                redirect('userListing');
            }
        }
    }


    /**
     * This function is used to delete the user using userId
     * @return boolean $result : TRUE / FALSE
     */
    function deleteUser()
    {
        if($this->isAdmin() == TRUE)
        {
            echo(json_encode(array('status'=>'access')));
        }
        else
        {
            $userId = $this->input->post('userId');
            $userInfo = array('isDeleted'=>1,'updatedBy'=>$this->vendorId, 'updatedDtm'=>date('Y-m-d H:i:s'));
            
            $result = $this->user_model->deleteUser($userId, $userInfo);
            
            if ($result > 0) { echo(json_encode(array('status'=>TRUE))); }
            else { echo(json_encode(array('status'=>FALSE))); }
        }
    }
    
    /**
     * This function is used to load the change password screen
     */
    function loadChangePass()
    {
        $this->global['pageTitle'] = '新亞書院迎新營';
        
        $this->loadViews("changePassword", $this->global, NULL, NULL);
    }
    
    
    /**
     * This function is used to change the password of the user
     */
    function changePassword()
    {
        $this->load->library('form_validation');
        
        //$this->form_validation->set_rules('oldPassword','Old password','required|max_length[20]');
        $this->form_validation->set_rules('newPassword','New password','required|max_length[20]');
        $this->form_validation->set_rules('cNewPassword','Confirm new password','required|matches[newPassword]|max_length[20]');
        
        if($this->form_validation->run() == FALSE)
        {
            $this->loadChangePass();
        }
        else
        {
            $oldPassword = $this->input->post('oldPassword');
            $newPassword = $this->input->post('newPassword');
            
            $resultPas = $this->user_model->matchOldPassword($this->vendorId, $oldPassword);
            
            if(empty($resultPas))
            {
               $this->session->set_flashdata('nomatch', 'Your old password not correct');
               redirect('loadChangePass');
            }
            else
            {
                $usersData = array('password'=>getHashedPassword($newPassword), 'updatedBy'=>$this->vendorId,
                                'updatedDtm'=>date('Y-m-d H:i:s'));
                
                $result = $this->user_model->changePassword($this->vendorId, $usersData);
                
                if($result > 0) { $this->session->set_flashdata('success', '更新密碼成功！'); }
                else { $this->session->set_flashdata('error', '更新密碼失敗！'); }
                
                redirect('loadChangePass');
            }
        }
    }

    function pageNotFound()
    {
        $this->global['pageTitle'] = '新亞書院迎新營';
        
        $this->loadViews("404", $this->global, NULL, NULL);
    }
    
    function blokusView()
    {
        $this->global['pageTitle'] = '新亞書院迎新營';

        $this->loadViews("blokusView", $this->global, NULL, NULL);
    }
    
    function contact()
    {
        $this->global['pageTitle'] = '新亞書院迎新營';

        $this->loadViews("contact", $this->global, NULL, NULL);
    }
    
    function obtainBlokus()
    {
        $this->load->model('user_model');
        
        $data['blokus1'] = NULL;
        $data['blokus2'] = NULL;
        $data['blokus3'] = NULL;
        $data['blokus4'] = NULL;
        $data['blokus5'] = NULL;
        $data['used'] = NULL;
        
        $this->global['pageTitle'] = '新亞書院迎新營';

        $this->loadViews("404", $this->global, $data, NULL);
    }
    
    function provideBlokus()
    {
        $this->load->model('user_model');

        $data['roles'] = $this->user_model->getRoles();
        $data['email'] = $this->user_model->getUsers();
        $data['code'] = NULL;
        $data['groupname'] = NULL;
        
        $this->global['pageTitle'] = '新亞書院迎新營';
        $this->loadViews("provideBlokus", $this->global, $data, NULL);
    }
    
    function tasksList()
    {
        $this->global['pageTitle'] = '新亞書院迎新營';

        $this->loadViews("tasksList", $this->global, NULL, NULL);
    }
    
    function SponsorUpload()
    {
        
        $this->global['pageTitle'] = '新亞書院迎新營';

        $this->loadViews("SponsorUpload", $this->global, NULL, NULL);
    }
    
    function provide()
    {
        $this->load->model('user_model');
        $data['roles'] = $this->user_model->getRoles();
        $data['email'] = $this->user_model->getUsers();
        $ec = $this->input->post("ec");
        $groupname = $this->input->post("groupname");
        $get = $this->user_model->getTaskCode($ec, $groupname);
          
        $data['code'] = str_replace('O:8:"stdClass":1:{s:4:"code";s:8:"','', str_replace('";}','',serialize($get)));
        $data['groupname'] = str_replace('s:21:"','', str_replace('";','：',serialize($groupname)));
        
        $this->global['pageTitle'] = '新亞書院迎新營';
        $this->loadViews("provideBlokus", $this->global, $data, NULL);
    }
    
    function obtain()
    {
        $this->load->model('user_model');
        $userId = $this->input->post('userId');
        $code = $this->input->post("taskcode");
        $obtain = $this->user_model->obtainBlokusCode($userId, $code);
        $this->session->set_flashdata('code', $code);
        
        if($obtain != '100'){
            if($obtain->used != '1'){
                $data['blokus1'] = $obtain->blokus1;
                $data['blokus2'] = $obtain->blokus2;
                $data['blokus3'] = $obtain->blokus3;
                $data['blokus4'] = $obtain->blokus4;
                $data['blokus5'] = $obtain->blokus5;
                $data['used'] = $obtain->used;
                
            }
            else{
                $this->session->set_flashdata('error', '你所輸入的Code已經被使用過。');
                
                redirect('/obtainBlokus');
            }
        }
        else{
            $this->session->set_flashdata('error', '你所輸入的Code錯誤。');
                
            redirect('/obtainBlokus');
        }
        
        $this->global['pageTitle'] = '新亞書院迎新營';
        $this->loadViews("obtainBlokus", $this->global, $data, NULL);
    }
    
    function blokussubmitsuccess()
    {
        $this->load->model('user_model');
        
        $taskcode = $this->session->flashdata('code');
                    
        //$this->user_model->UpdateUsed($taskcode);
        
        $this->global['pageTitle'] = '新亞書院迎新營';

        $this->loadViews("blokusView", $this->global, NULL, NULL);
    }
    
    function blokusvalidate()
    {
        $this->load->model('user_model');
        $blokuscode = $this->input->post('blokuscode2');
        $blokuslocation = $this->input->post('blokuslocation');
        
        $blokusgrid = $this->user_model->BlokusGrid($blokuslocation, $blokuscode);
        $blokuscorner = $this->user_model->BlokusCorner($blokuslocation, $blokuscode);
        $blokusside = $this->user_model->BlokusSide($blokuslocation, $blokuscode);
        
        
    }
    
    function getblokusgrid()
    {
        $this->load->model('user_model');
        
        $blokuscode = $this->input->post('blokuscode2');
        $blokuslocation = $this->input->post('blokuslocation');
        
        $blokusgrid = $this->user_model->BlokusGrid($blokuslocation, $blokuscode);
        
        list($origin_col, $origin_row) = explode('.', $blokuslocation);
        
        $data['grid_col1'] = $blokusgrid->grid_col1 + $origin_col;
        $data['grid_row1'] = $blokusgrid->grid_row1 + $origin_row;
        $data['grid_col2'] = $blokusgrid->grid_col2 + $origin_col;
        $data['grid_row2'] = $blokusgrid->grid_row2 + $origin_row;
        $data['grid_col3'] = $blokusgrid->grid_col3 + $origin_col;
        $data['grid_row3'] = $blokusgrid->grid_row3 + $origin_row;
        $data['grid_col4'] = $blokusgrid->grid_col4 + $origin_col;
        $data['grid_row4'] = $blokusgrid->grid_row4 + $origin_row;
        $data['grid_col5'] = $blokusgrid->grid_col5 + $origin_col;
        $data['grid_row5'] = $blokusgrid->grid_row5 + $origin_row;
        
        return $data;
        
        
    }
    
    function getblokuscorner($blokuslocation, $blokuscorner)
    {
        $data['cor_col1'] = $blokuscorner->cor_col1;
        $data['cor_col2'] = $blokuscorner->cor_col2;
        $data['cor_col3'] = $blokuscorner->cor_col3;
        $data['cor_col4'] = $blokuscorner->cor_col4;
        $data['cor_col5'] = $blokuscorner->cor_col5;
        $data['cor_col6'] = $blokuscorner->cor_col6;
        $data['cor_col7'] = $blokuscorner->cor_col7;
        $data['cor_col8'] = $blokuscorner->cor_col8;
        $data['cor_row1'] = $blokuscorner->cor_row1;
        $data['cor_row2'] = $blokuscorner->cor_row2;
        $data['cor_row3'] = $blokuscorner->cor_row3;
        $data['cor_row4'] = $blokuscorner->cor_row4;
        $data['cor_row5'] = $blokuscorner->cor_row5;
        $data['cor_row6'] = $blokuscorner->cor_row6;
        $data['cor_row7'] = $blokuscorner->cor_row7;
        $data['cor_row8'] = $blokuscorner->cor_row8;
        
        return $data;
    }
    
    function getblokusside($blokuslocation, $blokusside)
    {
        $data['side_col1'] = $blokuscorner->side_col1;
        $data['side_row1'] = $blokuscorner->side_row1;
        $data['side_col2'] = $blokuscorner->side_col2;
        $data['side_row2'] = $blokuscorner->side_row2;
        $data['side_col3'] = $blokuscorner->side_col3;
        $data['side_row3'] = $blokuscorner->side_row3;
        $data['side_col4'] = $blokuscorner->side_col4;
        $data['side_row4'] = $blokuscorner->side_row4;
        $data['side_col5'] = $blokuscorner->side_col5;
        $data['side_row5'] = $blokuscorner->side_row5;
        $data['side_col6'] = $blokuscorner->side_col6;
        $data['side_row6'] = $blokuscorner->side_row6;
        $data['side_col7'] = $blokuscorner->side_col7;
        $data['side_row7'] = $blokuscorner->side_row7;
        $data['side_col8'] = $blokuscorner->side_col8;
        $data['side_row8'] = $blokuscorner->side_row8;
        $data['side_col9'] = $blokuscorner->side_col9;
        $data['side_row9'] = $blokuscorner->side_row9;
        $data['side_col10'] = $blokuscorner->side_col10;
        $data['side_row10'] = $blokuscorner->side_row10;
        $data['side_col11'] = $blokuscorner->side_col11;
        $data['side_row11'] = $blokuscorner->side_row11;
        $data['side_col12'] = $blokuscorner->side_col12;
        $data['side_row12'] = $blokuscorner->side_row12;
        
        return $data;
    }
}