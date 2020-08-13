## Maze Generator

Aplikasi untuk meng-generate maze dengan menggunakan [pola pertama](https://www.evernote.com/shard/s239/client/snv?noteGuid=0c1c5afa-e8d2-4f9f-aa52-7f820e1951a9&noteKey=830fa114e6e46cd767825b78803237a0&sn=https%3A%2F%2Fwww.evernote.com%2Fshard%2Fs239%2Fsh%2F0c1c5afa-e8d2-4f9f-aa52-7f820e1951a9%2F830fa114e6e46cd767825b78803237a0&title=Tes%2BBackend%2B1) yang di kembangkan dengan menggunakan framework [Laravel](https://laravel.com/docs/).

Dengan ketentuan:
- Input: S sebuah positive integer, ukuran maze.
- Output: sebuah pola di layar, yaitu maze berukuran S x S, dengan jalan masuk di kiri atas.
- S dapat dinyatakan dalam 4n - 1, dimana n adalah positive integer.
- Semua tembok tebalnya 1 karakter ("@"), semua jalan lebarnya 1 karakter (" ").

## Instalasi

```
composer install
```

```
php artisan serve
```
