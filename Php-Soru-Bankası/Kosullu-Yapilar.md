Soru 1) Aşağıdaki kodun çıktısı nedir?
<?php
$a = 10;
if ($a == "10") {
    echo "Eşit";
} else {
    echo "Değil";
}
?>
Çözüm 1) Eşit

Soru 2) if yerine ternary operatör kullanarak aşağıdaki kodu tekrar yazınız.
<?php
$yas = 18;
if ($yas >= 18) {
    echo "Oy kullanabilir";
} else {
    echo "Oy kullanamaz";
}
?>
Çözüm 2)
<?php
$yas = 18;
$oy = $yas >= 18 ? "Oy kullanabilir" : "Oy kullanamaz";
echo $oy;
?>

Soru 3) Kullanıcının notunu alıp harf notuna çeviren bir program yazınız.
90-100: A
80-89: B
70-79: C
60-69: D
Altı: F
Çözüm 3)


