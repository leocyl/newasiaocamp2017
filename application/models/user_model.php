<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model
{
    /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @return number $count : This is row count
     */
    function userListingCount($searchText = '')
    {
        $this->db->select('BaseTbl.userId, BaseTbl.email, BaseTbl.name, BaseTbl.mobile, Role.role');
        $this->db->from('tbl_users as BaseTbl');
        $this->db->join('tbl_roles as Role', 'Role.roleId = BaseTbl.roleId','left');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.email  LIKE '%".$searchText."%'
                            OR  BaseTbl.name  LIKE '%".$searchText."%'
                            OR  BaseTbl.mobile  LIKE '%".$searchText."%'
                            OR  Role.role  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->where('BaseTbl.isDeleted', 0);
        $this->db->where('BaseTbl.roleId !=', 1);
        $query = $this->db->get();
        
        return count($query->result());
    }
    
    /**
     * This function is used to get the user listing count
     * @param string $searchText : This is optional search text
     * @param number $page : This is pagination offset
     * @param number $segment : This is pagination limit
     * @return array $result : This is result
     */
    function userListing($searchText = '', $page, $segment)
    {
        $this->db->select('BaseTbl.userId, BaseTbl.email, BaseTbl.name, BaseTbl.mobile, Role.role');
        $this->db->from('tbl_users as BaseTbl');
        $this->db->join('tbl_roles as Role', 'Role.roleId = BaseTbl.roleId','left');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.email  LIKE '%".$searchText."%'
                            OR  BaseTbl.name  LIKE '%".$searchText."%'
                            OR  BaseTbl.mobile  LIKE '%".$searchText."%'
                            OR  Role.role  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->where('BaseTbl.isDeleted', 0);
        $this->db->where('BaseTbl.roleId !=', 1);
        $this->db->limit($page, $segment);
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }
    
    /**
     * This function is used to get the user roles information
     * @return array $result : This is result of the query
     */
    function getUserRoles()
    {
        $this->db->select('roleId, role');
        $this->db->from('tbl_roles');
        $this->db->where('roleId !=', 1);
        $query = $this->db->get();
        
        return $query->result();
    }
    
    function getRoles()
    {
        $this->db->select('roleId, role');
        $this->db->from('tbl_roles');
        $this->db->where('roleId !=', 1);
        $this->db->where('roleId !=', 2);
        $query = $this->db->get();
        
        return $query->result();
    }

    function getUsers()
    {
        $this->db->select('email, roleId');
        $this->db->from('tbl_users');
        $this->db->where('isDeleted', 0);
        $query = $this->db->get();
        
        return $query->result();
    }
    
    /**
     * This function is used to check whether email id is already exist or not
     * @param {string} $email : This is email id
     * @param {number} $userId : This is user id
     * @return {mixed} $result : This is searched result
     */
    function checkEmailExists($email, $userId = 0)
    {
        $this->db->select("email");
        $this->db->from("tbl_users");
        $this->db->where("email", $email);   
        $this->db->where("isDeleted", 0);
        if($userId != 0){
            $this->db->where("userId !=", $userId);
        }
        $query = $this->db->get();

        return $query->result();
    }
    
    
    /**
     * This function is used to add new user to system
     * @return number $insert_id : This is last inserted id
     */
    function addNewUser($userInfo)
    {
        $this->db->trans_start();
        $this->db->insert('tbl_users', $userInfo);
        
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        return $insert_id;
    }
    
    /**
     * This function used to get user information by id
     * @param number $userId : This is user id
     * @return array $result : This is user information
     */
    function getUserInfo($userId)
    {
        $this->db->select('userId, name, email, mobile, roleId');
        $this->db->from('tbl_users');
        $this->db->where('isDeleted', 0);
		$this->db->where('roleId !=', 1);
        $this->db->where('userId', $userId);
        $query = $this->db->get();
        
        return $query->result();
    }
    
    
    /**
     * This function is used to update the user information
     * @param array $userInfo : This is users updated information
     * @param number $userId : This is user id
     */
    function editUser($userInfo, $userId)
    {
        $this->db->where('userId', $userId);
        $this->db->update('tbl_users', $userInfo);
        
        return TRUE;
    }
    
    
    
    /**
     * This function is used to delete the user information
     * @param number $userId : This is user id
     * @return boolean $result : TRUE / FALSE
     */
    function deleteUser($userId, $userInfo)
    {
        $this->db->where('userId', $userId);
        $this->db->update('tbl_users', $userInfo);
        
        return $this->db->affected_rows();
    }


    /**
     * This function is used to match users password for change password
     * @param number $userId : This is user id
     */
    function matchOldPassword($userId, $oldPassword)
    {
        $this->db->select('userId, password');
        $this->db->from('tbl_users');
        $this->db->where('userId', $userId);        
        $this->db->where('isDeleted', 0);
        $query = $this->db->get();
        
        $user = $query->result();

        if(!empty($user)){
            if(verifyHashedPassword($oldPassword, $user[0]->password)){
                return $user;
            } else {
                return array();
            }
        } else {
            return array();
        }
    }
    
    /**
     * This function is used to change users password
     * @param number $userId : This is user id
     * @param array $userInfo : This is user updation info
     */
    function changePassword($userId, $userInfo)
    {
        $this->db->where('userId', $userId);
        $this->db->where('isDeleted', 0);
        $this->db->update('tbl_users', $userInfo);
        
        return $this->db->affected_rows();
    }
    
    function tasksUpload($userId)
    {
        $this->db->select('userId');
        $this->db->from('tbl_users');
        $this->db->where('userId', $userId);
        $this->db->where('isDeleted', 0);
        $query = $this->db->get();
        
        return $query->result();
    }
    
    function getTaskCode($ec, $groupname)
    {
        $this->db->select('tbl_blokus.code');
        $this->db->from('tbl_blokus');
        $this->db->where('ec', $ec);
        $this->db->where('groupname', $groupname);
        $query = $this->db->get();
        
        return $query->row();
    }
    
    function obtainBlokusCode($userId, $code)
    {
        $this->db->select('tbl_blokus.blokus1, tbl_blokus.blokus2, tbl_blokus.blokus3, tbl_blokus.blokus4, tbl_blokus.blokus5, tbl_blokus.used');
        $this->db->from('tbl_blokus');
        $this->db->join('tbl_users', 'tbl_blokus.groupname = tbl_users.email');
        $this->db->where('tbl_users.userId', $userId);
        $this->db->where('tbl_blokus.code', $code);
        $query = $this->db->get();
        $row = $query->row();
        
        if(!empty($row)){
            return $row;
        }
        else {
            
            return 100;
        }
    }
    
    function BlokusGrid($blokus_key)
    {
        $this->db->select('grid_col1,grid_row1,grid_col2,grid_row2,grid_col3,grid_row3,grid_col4,grid_row4,grid_col5,grid_row5');
        $this->db->from('tbl_blokus_check');
        $this->db->where('blokus_key', $blokus_key);
        $query = $this->db->get();
        
        return $query->result();
    }
    
    function BlokusCorner($blokus_key)
    {
        $this->db->select('cor_col1,cor_row1,cor_col2,cor_row2,cor_col3,cor_row3,cor_col4,cor_row4,cor_col5,cor_row5,cor_col6,cor_row6,cor_col7,cor_row7,cor_col8,cor_row8');
        $this->db->from('tbl_blokus_check');
        $this->db->where('blokus_key', $blokus_key);
        $query = $this->db->get();
        
        return $query->result();
    }
    
    function BlokusSide($blokus_key)
    {
        $this->db->select('side_col1,side_row1,side_col2,side_row2,side_col3,side_row3,side_col4,side_row4,side_col5,side_row5,side_col6,side_row6,side_col7,side_row7,side_col8,side_row8,side_col9,side_row9,side_col10,side_row10,side_col11,side_row11,side_col12,side_row12');
        $this->db->from('tbl_blokus_check');
        $this->db->where('blokus_key', $blokus_key);
        $query = $this->db->get();
        
        return $query->result();
    }
    
    function UpdateUsed($blokuscode)
    {
        $this->db->set('used', '1');
        $this->db->where('code', $blokuscode);
        $this->db->where('code', $blokuscode);
        $this->db->update('tbl_blokus');
    }
    
}

  