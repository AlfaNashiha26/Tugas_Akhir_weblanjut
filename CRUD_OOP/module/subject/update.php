<?php 
if (isset($_POST['update'])) {
    include('config.php');
    $id = $_POST['id'];
    $subject = $_POST['subject'];
    $hours = $_POST['hours'];

    $sql = "UPDATE subjects SET subject='$subject', hours='$hours' WHERE id='$id'";
    // if (mysqli_query($config, $sql)) {
    //     echo '<script>alert("Data berhasil diupdate!"); window.location.href="?m=subject&s=view"</script>';
    // } else {
    //     echo '<script>alert("Data gagal diupdate!"); window.location.href="?m=subject&s=add"</script>';
    // }
    if (mysqli_query($config, $sql)) {
        echo '<script>alert("Data berhasil diupdate!"); window.location.href="?m=subject&s=view"</script>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($config);
    }
    
} 
