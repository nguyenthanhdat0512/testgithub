
  <?php
    $a=[];
    $row=['id'=>'sp1','name'=>'sanpham1','price'=>20000,'img'=>'h1.jpg'];
    $a[]=$row;
    $row=['id'=>'sp2','name'=>'sanpham2','price'=>40000,'img'=>'h2.jpg'];
    $a[]=$row;
    $row=['id'=>'sp3','name'=>'sanpham3','price'=>60000,'img'=>'h3.jpg'];
    $a[]=$row;
    $row=['id'=>'sp4','name'=>'sanpham4','price'=>80000,'img'=>'h4.jpg'];
    $a[]=$row;
    
    var_dump($a);

?>
<body>
    <table border="1" >
        <tr>
            <td>Ma sp</td>  <td>Ten</td> 
            <td>Gia</td>  <td>Hinh</td> 
        </tr>
        <?php
            foreach($a as $x=>$y)
           { ?>
        <tr>
            <td><?php echo $y['id']?></td>
            <td><?php echo $y['name']?></td>
            <td><?php echo number_format( $y['price'])?></td>
            <td><img src ="img" >/<?php echo $y['img']?></td>
            
        </tr>
        <?php
           }
        ?>
    </table>
    
</body>
</html>

