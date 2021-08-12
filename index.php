<!DOCTYPE html>
<html>
<head>
	<title>Kalkulator PHP</title>
	<link rel="stylesheet" type="text/css" href="tampilan.css">
</head>
<body>
	<?php 
	if(isset($_POST['hitung'])){
        function hitung_jumlah($angka1,$operasi,$angka2){
            if($operasi=="tambah"){
                $hasil  = $angka1+$angka2;
            }
            else if($operasi=="kurang"){
                $hasil  = $angka1-$angka2;
            }
            else if($operasi=="kali"){
                $hasil  = $angka1*$angka2;
            }
            else if($operasi=="bagi"){
                $hasil  = $angka1/$angka2;
            }
            else{
                $hasil  = "Operasi Salah";
            }
            
            return $hasil;
        }

		$bil1 = $_POST['bil1'];
		$bil2 = $_POST['bil2'];
		$operasi = $_POST['operasi'];
	}
	?>
	<div class="kalkulator">
		<h2 class="judul">KALKULATOR PHP</h2>
		<form method="post" action="index.php">
                <table>
                    <tr>
                        <td><label for="bil1" class="label">Bilangan Pertama: </label></td>
                        <td><label for="bil2" class="label">Bilangan Kedua: </label>	</td>
                    </tr>
                    <tr>
                        <td><input type="text" name="bil1" class="bil" autocomplete="off" placeholder="Masukkan Bilangan Pertama"></td>
                        <td><input type="text" name="bil2" class="bil" autocomplete="off" placeholder="Masukkan Bilangan Kedua"></td>
                    </tr>
                </table>
                <br>
                <select class="opt" name="operasi">
                    <option value="tambah">+</option>
                    <option value="kurang">-</option>
                    <option value="kali">x</option>
                    <option value="bagi">/</option>
			    </select>
                <?php if(isset($_POST['hitung'])){ ?>
                    <input type="text" value="<?php echo "Hasilnya ". hitung_jumlah($bil1,$operasi,$bil2); ?>" class="bil" placeholder="Hasil">
                <?php }else{ ?>
                    <input type="text" value="0" class="bil" placeholder="Hasil">
                <?php } ?>
			    <input type="submit" name="hitung" value="Hitung" class="tombol">											
		</form>
					
	</div>
</body>
</html>