{
  "author": "tayfunerbilen <tayfunerbilen@gmail.com>",
  "title": "PHP'de is_numeric() Fonksiyonu",
  "name": "is_numeric",
  "syntax": "is_numeric ( mixed $var ) : bool",
  "description": "Bir değişkenin sayısal değer içerip içermediğini test eder.\nOnaltılı (hexadecimal) ve ikili (binary) sayı sistemleri hariç diğerleri kabul edilmektedir. Yani örneğin <code>+0123.45e6</code> geçerli bir sayısal değerdir.",
  "compatibilities": [
    "php 4",
    "php 5",
    "php 7"
  ],
  "params": [
    {
      "name": "$var",
      "type": "mixed",
      "description": "Test edilecek değişken",
      "required": true
    }
  ],
  "changelogs": [
    {
      "version": "7.0.0",
      "description": "Artık onaltılı sayı sistemi (hexadecimal) bu fonksiyon ile test edilmiyor."
    }
  ],
  "examples": [
    {
      "code": "<?php\n\n$tests = array(\n    \"42\",\n    1337,\n    0x539,\n    02471,\n    0b10100111001,\n    1337e0,\n    \"string değer\",\n    array(),\n    9.1,\n    null\n);\n\nforeach ($tests as $element) {\n    if (is_numeric($element)) {\n        echo var_export($element, true) . \" sayısal bir değerdir \", PHP_EOL;\n    } else {\n        echo var_export($element, true) . \" sayısal bir değer DEĞİLDİR\", PHP_EOL;\n    }\n}\n\n/* Çıktı:\n\n'42' sayısal bir değerdir \n1337 sayısal bir değerdir \n1337 sayısal bir değerdir \n1337 sayısal bir değerdir \n1337 sayısal bir değerdir \n1337.0 sayısal bir değerdir \n'string değer' sayısal bir değer DEĞİLDİR\narray (\n) sayısal bir değer DEĞİLDİR\n9.1 sayısal bir değerdir \nNULL sayısal bir değer DEĞİLDİR\n*/",
      "description": "Birden fazla değeri test ederek hangilerinin sayısal hangilerinin olmadığını kontrol edelim."
    }
  ],
  "return": {
    "type": "boolean",
    "text": "Test edilen değişken sayı ise <b>TRUE</b>, değilse <b>FALSE</b> döner."
  },
  "deprecated": false
}
