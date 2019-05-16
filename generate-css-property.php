<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CSS Özellik Oluşturucu</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>

    <style>
        .output {
            border-left: 1px solid;
            background: #333;
        }

        .output h3 {
            color: #fff;
        }

        .output pre {
            color: rgba(255, 255, 255, .7);
            line-height: 140%;
            background: rgba(255, 255, 255, .04);
            padding: 20px;
        }
    </style>

</head>
<body>

<div class="container-fluid">
    <div class="row">

        <div class="col-md-7">

            <div class="alert alert-primary">
                Bu bölümde CSS'de özellikler için JSON formatında dosya oluşturabilirsiniz. Lütfen tam olarak
                doldurduğunuzdan emin olun.
            </div>

            <form method="post" action="">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label>Yazar Adınız</label>
                            <input type="text" class="form-control" name="author_name">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Yazar E-posta Adresiniz</label>
                            <input type="text" class="form-control" name="author_email">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Makale Başlığı</label>
                    <input type="text" class="form-control" name="title" placeholder="Örn: CSS'de font-size Özelliği">
                </div>
                <div class="form-group">
                    <label>Özellik Adı</label>
                    <input type="text" class="form-control" name="name" placeholder="Örn: font-size">
                </div>
                <div class="form-group">
                    <label>Özellik Yapısı (Syntax)</label>
                    <input type="text" class="form-control" name="syntax" placeholder="Örn: &lt;a> .. &lt;/a>">
                </div>
                <div class="form-group">
                    <label>Özellik JS Yapısı (Syntax) <span class="required">*</span></label>
                    <input type="text" class="form-control" name="js_syntax"
                           placeholder='Örn: object.style.color="RENK"'>
                </div>
                <div class="form-group">
                    <label>CSS Versiyonu</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="CSS1" id="css1">
                        <label class="form-check-label" for="css1">
                            CSS1
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="CSS3" id="css3">
                        <label class="form-check-label" for="css3">
                            CSS3
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label>Animasyon Özellikleri Uygulanabilir mi?</label>
                    <select name="animatable" class="form-control">
                        <option value="1">Evet</option>
                        <option value="2">Hayır</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Varsayılan Değeri</label>
                    <input type="text" class="form-control" name="default_value" placeholder="Örn: inherit">
                </div>
                <div class="form-group">
                    <label>Özellik Açıklaması</label>
                    <textarea name="description" cols="30" rows="6" class="form-control"></textarea>
                </div>
                <h3>Değerler</h3>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label>Değer</label>
                            <input type="text" class="form-control" name="value_name[]" placeholder="Örn: cover">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Açıklama</label>
                            <input type="text" class="form-control" name="value_description[]">
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <a href="#" class="btn btn-primary">Yeni Ekle</a>
                    </div>
                </div>
                <h3>Örnekler</h3>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label>Başlık</label>
                            <input type="text" name="example_title[]" class="form-control">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Açıklama</label>
                            <input type="text" name="example_description[]" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label>Örnek Kodlar</label>
                            <textarea name="example_code[]" class="form-control" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                </div>
            </form>

        </div>

        <div class="col-md-5 output">
            <h3>JSON Çıktı</h3>
            <pre id="output"></pre>
        </div>

    </div>
</div>

<script>
    $(function () {

        $("textarea").keydown(function(e) {
            if(e.keyCode === 9) { // tab was pressed
                // get caret position/selection
                var start = this.selectionStart;
                end = this.selectionEnd;

                var $this = $(this);

                // set textarea value to: text before caret + tab + text after caret
                $this.val($this.val().substring(0, start)
                    + "\t"
                    + $this.val().substring(end));

                // put caret at right position again
                this.selectionStart = this.selectionEnd = start + 1;

                // prevent the focus lose
                return false;
            }
        });

        $('.form-control').on('change input', function () {

            var json = {};

            var author_name = $('[name=\'author_name\']').val(),
                author_email = $('[name=\'author_email\']').val(),
                title = $('[name=\'title\']').val(),
                name = $('[name=\'name\']').val(),
                syntax = $('[name=\'syntax\']').val(),
                js_syntax = $('[name=\'js_syntax\']').val(),
                description = $('[name=\'description\']').val();

            if (author_name || author_email) json.author = `${author_name} &lt;${author_email }>`;
            if (title) json.title = title.replace(/</g, '&lt;');
            if (name) json.name = name.replace(/</g, '&lt;');
            if (syntax) json.syntax = syntax.replace(/</g, '&lt;');
            if (js_syntax) json.js_syntax = js_syntax.replace(/</g, '&lt;');
            if (description) json.description = description.replace(/</g, '&lt;');

            if (Object.keys(json).length)
                $('#output').html(JSON.stringify(json, null, 2));
            else
                $('#output').html('');
        });
    })
</script>

</body>
</html>