<?php
    include_once('koneksi.php');

    if(!empty($_POST['id'])){
        $id = $_POST['id'];
        $query = "DELETE FROM produk WHERE id = '$id'";
        $delete = mysqli_query($connect, $query);

        if($delete){
            set_response(true, "Success delete");
        }else{
            set_response(false, "Failed delete");
        }
    }else{
        set_response(false, "Tidak boleh kosyooooooong!");
    }

    function set_response($isSuccess, $message){
        $result = array(
            'isSuccess' => $isSuccess,
            'message' => $message
        );

        echo json_encode($result);
    }

?>