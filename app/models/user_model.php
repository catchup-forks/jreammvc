<?php

class User_Model extends Model
{
  /**
   *
   */
  public function __construct() {
    parent::__construct();
  }

  /**
   * @return mixed
   */
  public function userList() {
    return $this->db->select('SELECT userid, login, role FROM user');
  }

  /**
   * @param $userid
   *
   * @return mixed
   */
  public function userSingleList($userid) {
    return $this->db->select('SELECT userid, login, role FROM user WHERE userid = :userid', array(':userid' => $userid));
  }

  /**
   * @param $data
   */
  public function create($data) {
    $this->db->insert('user', array(
      'login'    => $data['login'],
      'password' => Hash::create('sha256', $data['password'], HASH_PASSWORD_KEY),
      'role'     => $data['role']
    ));
  }

  /**
   * @param $data
   */
  public function editSave($data, $id) {
    $postData = array(
      'login'    => $data['login'],
      'password' => Hash::create('sha256', $data['password'], HASH_PASSWORD_KEY),
      'role'     => $data['role']
    );

    $whereuser = "`userid` = ".$id;
    $this->db->update('user', $postData, $whereuser);
  }

  /**
   * @param $userid
   *
   * @return bool
   */
  public function delete($userid) {
    $result = $this->db->select('SELECT role FROM user WHERE userid = :userid', array(':userid' => $userid));

    if ($result[0]['role'] == 'owner')
      return false;

    $this->db->delete('user', "userid = '$userid'");
  }
}