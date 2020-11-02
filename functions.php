<?php
function sum($a,$b)
{
   return $a + $b; 
}

function findUserById($id)
{
    global $db;
    $stmt = $db->prepare("SELECT * FROM register WHERE id=?");
    $stmt->execute(array($id));

    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function findUserByUsername($username)
{
    global $db;
    $stmt = $db->prepare("SELECT * FROM register WHERE username=?");
    $stmt->execute(array($username));

    return $stmt->fetch(PDO::FETCH_ASSOC);
}



function createAccount($username, $password, $fullname, $email)
{
    //ma hoa mat khau
    global $db;
    $hashPassword = password_hash($password, PASSWORD_DEFAULT);
    $stmt=$db->prepare("INSERT INTO register (username, password, fullname, email) VALUES(?,?,?,?)");
    $stmt->execute(array($username, $hashPassword, $fullname, $email));
    $insertId = $db->lastInsertId();
    return findUserById($insertId);
}

function getCurrentUser()
{
    if(isset($_SESSION['userId']))
    {
        return findUserById($_SESSION['userId']);
    }
    return null;
}