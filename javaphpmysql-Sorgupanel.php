// no yazan kısımları siz kendiniz düzenlersiniz silivri ice bro
// PHP Kodu
<?php
$conn = mysqli_connect("localhost", "yourusername", "yourpassword", "yourDatabase");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['no'],$_POST['ad'],$_POST['soyad'],$_POST['tel'],$_POST['babaadi'],$_POST['anneadi'])){
    $tcno=$_POST['no'];
    $ad=$_POST['ad'];
    $soyad=$_POST['soyad'];
    $tel=$_POST['tel'];
    $babaadi=$_POST['babaadi'];
    $anneadi=$_POST['anneadi'];
    
    $sql = "SELECT * FROM bilgiler WHERE no='$no' AND ad='$ad' AND soyad='$soyad' AND tel='$tel' AND babaadi='$babaadi' AND anneadi='$anneadi'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo "NO: " . $row["no"]. " - Name: " . $row["ad"]. " " . $row["soyad"]. "<br>";
        }
    } else {
        echo "0 results";
    }
    
    mysqli_close($conn);
}
?>

// HTML Kodu
<form action="" method="post">
    TCNO: <input type="text" name="no" required><br>
    Ad: <input type="text" name="ad" required><br>
    Soyad: <input type="text" name="soyad" required><br>
    Tel: <input type="text" name="tel" required><br>
    Baba Adı: <input type="text" name="babaadi" required><br>
    Anne Adı: <input type="text" name="anneadi" required><br>
    <input type="submit" value="Gönder">
</form>
