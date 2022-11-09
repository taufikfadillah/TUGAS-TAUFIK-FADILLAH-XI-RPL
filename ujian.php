<html>
<head>
    <title>GA TAU</title>

<style>  
  
  input[type=submit] {
    width: 100%;
    background-color: #5f5f5f;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
 
  input[type=submit]:hover {
    background-color: #B2B2B2;
  }
  
  div.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
  }

</style>

</head>
<body>
    <div class="container">
    <form  method="POST" action="">
        <input type="submit" name="image" value="IMAGE BUTTON" >
        <input type="submit" name="shape" value="SHAPE BUTTON" >
</form>

<?php

class tombol{

    public $x;
    public $y;
    public $w;
    public $h;
}
class image extends tombol{
    public $ukuran;
    public function cekUkuran(){
        echo "Lebar Tombol Adalah : ".$this -> ukuran;
        echo "<br>";
        echo "Tinggi Tombol Adalah : ".$this -> tinggi;
    } 

}
class shape extends tombol{
    public $klik;
    public function cekKlik(){
        echo "Lebar Tombol Adalah : ".$this -> ukuran;
        echo "<br>";
        echo "Tinggi Tombol Adalah : ".$this -> tinggi;
    }

}
function satu(){
    $button = new image();
    $ukuran = $button ->ukuran=22.6;
    $tinggi = $button ->tinggi=78.9;

    echo $button->cekUkuran();
}
function dua(){
    $button = new shape();
    $ukuran = $button ->ukuran=121.7;
    $tinggi = $button ->tinggi=23.1;

    echo $button->cekKlik();
}
if (isset($_POST['image'])){
    echo satu();
}else if(isset($_POST['shape'])){
    echo dua();
}
?>
</body>
</html>