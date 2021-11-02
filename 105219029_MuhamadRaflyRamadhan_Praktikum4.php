<?php
     abstract class karyawan {
        public $no;
        public $nama;
        public $tempat_tanggal;
        public $jenis_kelamin;
        public $level;
        public $status; /// fulltime, partime
        public $gaji;
    

    abstract public function get_name();
    abstract public function set_name($nama);

    }

    class parttime extends karyawan{
        public $status = "parttime";

        public function get_name(){
            return $this->nama;
        }

        public function set_name($nama){
            $this->nama = $nama;
        }

        function __construct($no, $nama, $tempat_tanggal, $jenis_kelamin, $level){
            $this->no = $no;
            $this->nama = $nama;
            $this->tempat_tanggal = $tempat_tanggal;
            $this->jenis_kelamin = $jenis_kelamin;
            $this->level = $level;

            if($this->level == "Junior"){
                $this->gaji = 2000000/2;
            }
            elseif($this->level == "Amature"){
                $this->gaji =  3500000/2;
            }
            else{
                $this->gaji = 5000000/2;
            }
        }
    }

    class fulltime extends karyawan{
        public $status = "fulltime";

        public function get_name(){
            return $this->nama;
        }

        public function set_name($nama){
            $this->nama = $nama;
        }

        function __construct($no, $nama, $tempat_tanggal, $jenis_kelamin, $level){
            $this->no = $no;
            $this->nama = $nama;
            $this->tempat_tanggal = $tempat_tanggal;
            $this->jenis_kelamin = $jenis_kelamin;
            $this->level = $level;

            if($this->level == "Junior"){
                $this->gaji = 2000000;
            }
            elseif($this->level == "Amature"){
                $this->gaji =  3500000;
            }
            else{
                $this->gaji = 5000000;
            }
        }

        


    }

    $ar = array();

    $ar[0] = $karyawan1 = new fulltime(1, "Eric", "Jawa 20, Maret 1998", "Laki Laki", "Senior");
    $ar[1] = $karyawan2 = new fulltime(2, "Axolotl", "Mesir 19, agustus 2003", "Perempuan", "Junior");
    $ar[2] = $karyawan3 = new parttime(3, "Sendi", "Texas 8, Januari 2000", "Perempuan", "Amature");
    $ar[3] = $karyawan4 = new parttime(4, "Alucard", "Binja 15, September 2001", "Laki Laki", "Junior");
    

?>

<!DOCTYPE html>
<html style="background-color:#222222;">


<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet"> 

    <style>
        *{
            font-family: 'Quicksand', sans-serif;
            color: white;
        }
    </style>
    
</head>

<body>

<h2 style="Color:#FF0075">List Karyawan</h2>

    <table class="father" border='1' style="border-radius:10px;">
        <tr>
            <td>No</td>
            <td>Nama</td>
            <td>Tempat Tanggal Lahir</td>
            <td>Jenis Kelamin</td>
            <td>Level</td>
            <td>Status</td>
            <td>Gaji</td>
        </tr>

        <?php for ($i=0; $i < 4; $i++) { ?>
        
        <tr>
            <td> <?php echo $ar[$i]->no; ?> </td>
            <td> <?php echo $ar[$i]->nama; ?> </td>
            <td> <?php echo $ar[$i]->tempat_tanggal; ?> </td>
            <td> <?php echo $ar[$i]->jenis_kelamin; ?> </td>
            <td> <?php echo $ar[$i]->level ?> </td>
            <td> <?php echo $ar[$i]->status; ?> </td>
            <td> <?php echo $ar[$i]->gaji; ?> </td>
        </tr>

        <?php } ?>   


    </table>
</body>
</html> 
