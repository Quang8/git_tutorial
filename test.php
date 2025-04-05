<?php
$n = 8;
if($n%2 == 0):
    echo"<br> Số chẵn";
endif;
?>

// ví dụ về switch case
// KIểm tra số nhập vào là nguyên âm, phụ âm, chữ số (ký tự số) hay ký tự khác


<?php
    if(isset($_POST['Kytu'])){
        $kytu = $_POST['Kytu'];
        if(($kytu >='A' && $kytu <='Z') || ($kytu >='a' && $kytu <='z')){
            switch($kytu){
                case'A':case'a':case'E':case'e':case'I':case'i':case'O':case'o':case'U':case'u':
                    echo"<br>$kytu là nguyên âm";
                    break;
                default:
                    echo "<br>$kytu không phải là nguyên phụ âm";
            }
        }elseif($kytu >= '0' && $kytu <= '9'){
            echo "<br>$kytu là chữ số";
        }else{
            echo "<br>$kytu là dạng khác";
        }
    }



?>
<form method="post">
    <section>
        <label for="">Nhập 1 ký tự bất kì</label>
        <input type="text" name= "Kytu"  maxlength= "1" required>
        <section>
            <input type="submit" value= "Check">
        </section>
    </section>
</form>

</section>

