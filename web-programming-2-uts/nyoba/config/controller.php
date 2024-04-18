<?php

function select($query){
    global $db;

    $result = mysqli_query($db, $query);
    $row = [];

    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }

    return $rows;
}

// fungsi tambah game
function create_game($post)
{
    global $db;

    $nama = $post['name'];
    $platform = $post['platform'];

    // tambah data
    $query = "INSERT INTO games VALUES(null, '$nama', '$platform')";
    
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

// fungsi edit game
function update_game($post)
{
    global $db;

    $id_game = $post['id'];
    $nama = $post['name'];
    $platform = $post['platform'];

    // edit data
    $query = "UPDATE games SET name = '$nama', platform = '$platform' WHERE id = $id_game";
    
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

// fungsi hapus game
function delete_game($id_game){
    global $db;

    //hapus game
    $query = "DELETE FROM games WHERE id = $id_game";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}
// fungsi tambah game
function create_user($post)
{
    global $db;

    $username = $post['username'];
    $email = $post['email'];
    $password = $post['password'];
    $balance = $post['balance'];

    // tambah data
    $query = "INSERT INTO users VALUES(null, '$username', '$email', '$password', '$balance')";
    
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

// fungsi edit game
function update_user($post)
{
    global $db;

    $id= $post['id'];
    $username = $post['username'];
    $email = $post['email'];
    $password = $post['password'];
    $balance = $post['balance'];


    // edit data
    $query = "UPDATE users SET username = '$username', email = '$email', password= '$password', balance= 'balance'  WHERE id = $id";
    
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

// fungsi hapus game
function delete_user($id){
    global $db;

    //hapus game
    $query = "DELETE FROM users WHERE id = $id";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}
// edit topup
function create_topup($post)
{
    global $db;

    $user_id= $post['user_id'];
    $game_id = $post['game_id'];
    $amount = $post['amount'];

    // tambah data
    $query = "INSERT INTO topups VALUES(null, '$user_id', '$game_id', '$amount', CURRENT_TIMESTAMP())";
    
    function db_connection()
    {
        global $config,$data_sql;
        $data_sql = mysqli_connect($config["sql_host"], $config["sql_user"], $config["sql_pass"], $config["db_name"]); 
        // You can select the db, by passing it as 4th param if you like
        if (!$data_sql) die("Can't connect to MySql".mysqli_error($data_sql ) );
    
    }
}

// edit user
