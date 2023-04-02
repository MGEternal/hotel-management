<?php  

function chrdate($date){
    $arrdate=explode("-",$date);
    $mth=Array("มกราคม","กุมพาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
    return $arrdate[2]." ".$mth[$arrdate[1]-1]." ".$y=$arrdate[0]+543;
}
function datediff($d1,$d2){
    $dc1=date_create("$d1");
    $dc2=date_create("$d2");
    $date=date_diff($dc1,$dc2)->format("%a days");
    return $date ;
}
?>
<script>
$(function(){
    $("#id").submit(){
        if($("$id1").value() > $("$id2").value())
        $("#id1").value('');
        alert("กรุณาใว่วันที่ให้ถูกต้อง");
    };

});
</script>