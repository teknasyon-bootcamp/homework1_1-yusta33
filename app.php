<?php

$age = 25;
if ($age >= 0 && $age <= 14) {    // Yası 0-14 aralıgında olan kisiler icin
    echo "Çocuk";
} elseif (14 < $age && $age <= 24) { // Yası 15-24 aralıgında olan kisiler icin
    echo "Genç";
} elseif (24 < $age && $age <= 64) { // Yası 15-24 aralıgında olan kisiler icin
    echo "Yetişkin";
} elseif (64 < $age) { // Yası 15-24 aralıgında olan kisiler icin
    echo "Yaşlı";
}
/**
 * Bu ödevde age değişkeni içerisinde yer alan yaş değerinin bulunduğu
 * yaş grubu tespit edilip ekrana bu yaş grubunun ismi yazılmalıdır. 
 * 
 * 0-14 = Çocuk
 * 15-24 = Genç
 * 25-64 = Yetişkin
 * 65+ = Yaşlı
 * 
 * Ekran çıktısı için `echo` yada `print` kullanabilirsiniz.
 * 
 * > **Not**: Çıktıda sadece `Çocuk`, `Genç`, `Yetişkin` veya `Yaşlı`
 * yer almalıdır.
 * 
 * İyi çalışmalar.
 */
