<?php 
if (isset($_POST['update'])) {
    include('config.php');
    $id = $_POST['id'];
    $nip = $_POST['nip'];
    $name = $_POST['name'];
    $pob = $_POST['pob'];
    $dob = $_POST['dob'];
    $phone = $_POST['phone'];
    $subject_id = $_POST['subject_id'];

    $sql = "UPDATE teachers SET nip='$nip', name='$name', pob='$pob', dob='$dob', phone='$phone', subject_id='$subject_id' WHERE id='$id'";
    // if (mysqli_query($config, $sql)) {
    //     echo '<script>alert("Data berhasil diupdate!"); window.location.href="?m=teacher&s=view"</script>';
    // } else {
    //     echo '<script>alert("Data gagal diupdate!"); window.location.href="?m=teacher&s=add"</script>';
    // }
    if (mysqli_query($config, $sql)) {
        echo '<script>alert("Data berhasil diupdate!"); window.location.href="?m=teacher&s=view"</script>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($config);
    }
    
} 
