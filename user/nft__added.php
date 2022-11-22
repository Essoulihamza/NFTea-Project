<?php
session_start();
include "../php/db__connection.php";
if (isset($_POST['nft__name'])) {
    $artist__ID = $_SESSION['ID'];
    $nft__name = $_POST['nft__name'];
    $nft__price = $_POST['nft__price'];
    $nft__description = $_POST['nft__description'];
    $nft__collection = $_POST['collection']; 
    $filename = $_FILES["nft__img"]["name"];
    $tempname = $_FILES["nft__img"]["tmp_name"];
    $folder = "../db__img/" . $filename;
    if (empty($nft__name)) {
        header("Location: ./add-nft.php?error=NFT name is required");
        exit();
    } else if (empty($nft__price)) {
        header("Location: add-nft.php?error=NFT price is required");
        exit();
    } else if (empty($nft__description)) {
        header("Location: add-nft.php?error=NFT description is required");
        exit();
    } else if (empty($filename)) {
        header("Location: add-nft.php?error=NFT image is required");
        exit();
    } else {
        $qry = "SELECT ID, collection__name, artist__ID FROM nft__collection";
        $result = mysqli_query($connection, $qry);
        $row = $result->fetch_assoc();
        while($row = $result->fetch_assoc()) {
            if($row['collection__name'] == $nft__collection && $row['artist__ID'] == $artist__ID) {
                $collection_ID = $row['ID'];
                $sql_I = "INSERT INTO nft(`NFT__name`, `price`, `NFT__description`, `NFT__IMG`, `collection__ID`) 
                        VALUES ('$nft__name', '$nft__price', '$nft__description', '$filename', '$collection_ID')";
                if(mysqli_query($connection, $sql_I)) {
                    header("Location: add-nft.php?error=NFT img already exist!");
                    exit();
                } else {
                    $insert__nft = mysqli_query($connection, $sql_I);
                }
                header("Location: add-nft.php");
                exit();
            }
            else {
                header("Location: add-nft.php?error=This collection is not exist, or it is not yours");
                exit();
            } 
        }
    }

}
?>