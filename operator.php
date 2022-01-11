<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>operator</title>
</head>
<body>
    <h3>
    <?php
    /*    echo "<br><b>1. ตัวดำเนินการ</b><br>";
        $x=20;
        $y=3;
        echo "ผลของ $x + $y เท่ากับ ".($x + $y). "<br>";
        echo "ผลของ $x - $y เท่ากับ ".($x - $y). "<br>";
        echo "ผลของ $x * $y เท่ากับ ".($x * $y). "<br>";
        echo "ผลของ $x / $y เท่ากับ ".($x / $y). "<br>";
        echo "ผลของ $x % $y เท่ากับ ".($x % $y). "<br>";

        echo "<br><b>2. ตัวดำเนินการเพิ่มค่า ลดค่า</b><br>";
        $x = 10;
        $a = 10;
        $b = ++$a;
        $z = $x++;
        echo "ค่าของ x และ a (ก่อนประมวลผล) x=10, a=10 <br>";
        echo "ค่าของ z(จากสูตร z=x++ นำค่า x ไปเก็บใน z จะได้ค่าเต็มของ x)= $z, <br> ";
        echo "ค่าของ x และ a (หลังการประมวลผล)x= $x, a = $a <br>";
    



        echo "<br><b>ใบงานที่4 014 </b><br><br>";
        $salary = 60000;
        $tax = 7/100; 
        if($salary <= 10000)
            {
        $bonus = $salary *(80/100) ;
        echo "คุณมีเงินเดือน = ".$salary." บาท <br> ได้โบนัส = ".$bonus."  บาท";
            }elseif( $salary >10000) { 
                $bonus = $salary *(50/100) ;
        echo "คุณมีเงินเดือน = ".$salary." บาท <br> ได้โบนัส = ".$bonus."  บาท";
            }elseif( $salary >50000){
                $bonus = $salary *(30/100) ;
        echo "คุณมีเงินเดือน = ".$salary." บาท  <br> ได้โบนัส :: ".$bonus."  บาท";
            }
        echo "<br>รายรับสุทธิ=".$salary + $bonus;
        $x=$salary + $bonus;
        echo "<br>คิดภาษี 7% จากรายรับสุทธิ=".$x*$tax;
        $y=$x*$tax;
        echo "<br>รายรับหลังหักภาษี=".$x-$y;
       
           
        
        echo"array<br>";
           $name = array("a","b","c","d","e");
           $age = array("15","16","17","18","19");
           echo "นาย".($name[0]);
           echo"อายุ".($age[0])."ปี";
             echo"<br>";
           echo "นาย".($name[1]);
           echo"อายุ".($age[1])."ปี";
            echo"<br>";
           echo "นาย".($name[2]);
           echo"อายุ".($age[2])."ปี";
            echo"<br>";
           echo "นาย".($name[3]);
           echo"อายุ".($age[3])."ปี";
            echo"<br>";
           echo "นาย".($name[4]);
           echo"อายุ".($age[4])."ปี";
        
           
           /** */ 

           
           $color=array("red"=>100,"blue"=>200,"yellow"=>300,"black"=>400,"green"=>500,"pink"=>600);
           //$number=array("100","200","300","400","500","600");
           foreach($color as $keys=>$values){
            echo "$keys เก็บค่า $values <br>" ;    
                }
           
          
                
           
   
       

        
        
        
        
     
    
        
    ?>
    </h3>
    
</body>
</html>