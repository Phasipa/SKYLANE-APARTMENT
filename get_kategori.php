<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $catalogId = $_GET['id'];

    $sql = "SELECT * FROM tb_catalog WHERE id = $catalogId";
    $result = mysqli_query($koneksi, $sql);

    if ($result) {
        $data = mysqli_fetch_assoc($result);
        echo json_encode($data);
    } else {
        echo json_encode(['error' => 'Failed to retrieve catalog data.']);
    }
} else {
    echo json_encode(['error' => 'catalog ID not provided.']);
}
?>
