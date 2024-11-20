# Fayllar bilan ishlash

## Faylni o'qish

```php
$fayl = fopen("fayl_nomi.txt", "r");
```
## Rejimlar:
"r" - faqat o'qish uchun ochadi. Fayl mavjud bo'lishi kerak.
"w" - faqat yozish uchun ochadi. Agar fayl mavjud bo'lmasa, yangi fayl yaratadi. Mavjud fayl bo'lsa, uning ichini bo'shatadi.
"a" - yozish uchun ochadi, lekin fayldagi mavjud ma'lumotlarni o'chirmaydi. Yozilgan ma'lumot oxiriga qo'shiladi.
"x" - faqat yozish uchun ochadi. Fayl mavjud bo'lmasa, yangi fayl yaratadi. Fayl allaqachon mavjud bo'lsa, xatolik chiqaradi.

## Fayl mavjudligini tekshirish

```php
if (file_exists("fayl_nomi.txt")) {
    echo "Fayl mavjud";
} else {
    echo "Fayl mavjud emas";
}
```


