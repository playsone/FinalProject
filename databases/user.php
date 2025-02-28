<?php

    function getAllUser(){
        $conn = getConnection();
        $sql = 'SELECT * FROM users';
        $result = $conn->query($sql);
        return $result;
    }

    function getUserByUsername($username){
        $conn = getConnection();
        $sql = 'SELECT  * 
                FROM    users
                WHERE   username = ?';
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('s', $username);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result;
    }

    function isReg($username){
        $conn = getConnection();
        $sql = 'SELECT  count(username) as count
                FROM    users
                WHERE   username = ?';
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('?', $username);
        $stmt->execute();

        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        return $row['count'] > 0;
    }


    function isDuplicate(String $username, String $email){
        $users = getAllUser();
        foreach($users as $user){
            if($user['username'] == $username){
                $_SESSION['error'] = 'มีผู้ใช้ชื่อนี้แล้ว';
                return true;
            }

            if($user['email'] == $email){
                $_SESSION['error'] = 'มีผู้ใช้อีเมลนี้แล้ว';
                return true;
            }
        }
    }

    function updateUser($prefix, $fname, $lname, $email, $phone, $gender, $bod, $address, $role, $username, $pwd){
        $conn = getConnection();
        $sql = 'UPDATE  users
                SET     prefix  = ?
                        fname   = ?
                        lname   = ?
                        email   = ?
                        phone   = ?
                        gender  = ?
                        bod     = ?
                        address = ?
                        role    = ?
                        username    = ?
                        password    = ?';
        $stmt = $conn->prepare($sql);
        $hashpwd = password_hash($pwd, PASSWORD_DEFAULT);
        $stmt->bind_param("???????????", $prefix, $fname, $lname, $email, $phone, $gender, $bod, $address, $role, $username, $hashpwd);
        $stmt->execute();
    }

    function insertUser($prefix, $fname, $lname, $email, $phone, $gender, $bod, $address, $role, $username, $pwd){
        $conn = getConnection();
        $sql = 'INSERT INTO  users(prefix, fname, lname, email, phone, gender, bod, address, role, username, password)
                VALUES  prefix  = ?
                        fname   = ?
                        lname   = ?
                        email   = ?
                        phone   = ?
                        gender  = ?
                        bod     = ?
                        address = ?
                        role    = ?
                        username    = ?
                        password    = ?';
        $stmt = $conn->prepare($sql);
        $hashpwd = password_hash($pwd, PASSWORD_DEFAULT);
        $stmt->bind_param("???????????", $prefix, $fname, $lname, $email, $phone, $gender, $bod, $address, $role, $username, $hashpwd);
        $stmt->execute();
    }