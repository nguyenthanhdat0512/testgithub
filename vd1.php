<?php
    $a=array(1,4,6,8);
    $b=[2,4,6,8];
    //array()=[]

    echo'<pre>';
    print_r($a);
    var_dump($b);
    //print_r == var_dump hiển thị ổ chứ, vị trí, kiểu

    $c=[
        'sp1'=='sanpham1',
        'sp2'=='sanpham2',
    ];
    print_r($c);
    //vị trí [0] vs [1] của $c

    $b[1]=10;
    $b[10]=1;
    print_r($b);
    //gán vị trí [1]=10; vị trí [10]=1 vào array $b

    $c['sp1']='iphone';
    $c['sp3']='android';
    print_r($c);
    // vị trí [2] vs [3] của $c

    $d=[];//có [] hay ko vẫn đc
    $d[]=11;
    $d[5]=20;
    $d[]=12;
    print_r($d);
    //iset dung de kiem tra phan tu co ton tai hay ko
    
    for($i=0;$i<count($a);$i++){
        echo"<br> phan tu thu $i,gia tri = ($a[$i])";
    }
    echo'<hr>';
    foreach($b as $k=>$v){
        echo"<br> phan tu thu $k,gia tri = $v)";
    }
    echo'<hr>';
    foreach($a as $h=>$g){
        echo"<br> phan tu thu $h,gia tri = $g)";
    }
    echo '<hr>';
    foreach($c as $value){
        echo"<br> gia tri = $value";
    }
?>