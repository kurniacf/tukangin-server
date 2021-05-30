<?php
include_once('koneksi.php');

<<<<<<< HEAD
    if(!empty($_POST['id'])){
        $id = $_POST['id'];
        $query = "DELETE FROM Content WHERE id = '$id'";
        $delete = mysqli_query($connect, $query);
=======
if (!empty($_POST['id'])) {
    $id = $_POST['id'];
    $query = "DELETE FROM Content WHERE id = '$id'";
    $delete = mysqli_query($connect, $query);
>>>>>>> 189c1558bfc0f15ecf3a2f5ff45d31215047a4ad

    if ($delete) {
        set_response(true, "Success delete");
    } else {
        set_response(false, "Failed delete");
    }
} else {
    set_response(false, "Tidak boleh kosyooooooong!");
}

function set_response($isSuccess, $message)
{
    $result = array(
        'isSuccess' => $isSuccess,
        'message' => $message
    );

    echo json_encode($result);
}
