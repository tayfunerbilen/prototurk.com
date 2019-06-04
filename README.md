# prototurk.com
Prototürk'te yer alan, web dilleriyle ilgili referans JSON dosyalarının yer aldığı repodur. Siz de bu reponun gelişmesine katkı sağlayarak Türkçe kaynağın yayılmasında etkili bir rol oynayabilirsiniz.

# Nasıl Katkıda Bulunurum?
Katkı sağlamak için aşağıdaki adımları takip edebilirsiniz.

Öncelikle GitHub hesabınızla giriş yaptıktan sonra projeyi "fork" edin yani çatallandırın. Daha sonra sırasıyla;
```
mkdir prototurk.com
cd prototurk.com
git clone https://github.com/tayfunerbilen/prototurk.com.git .
git checkout -b yeni-prototurk.com
```

Bu şekilde projeyi klonlamış ve kendinize özel bir branch oluşturmuş oldunuz. Artık projeyi bir editör yardımı ile açıp ilgili JSON oluşturucularından JSON'ı oluşturduktan sonra dosyayı oluşturun ve bunu önce git'e ekleyin, sonra commit ve push edin.
```
git add html/strong.json
git commit -m 'strong etiketi eklendi'
git push origin yeni-prototurk.com
```

Artık orijinal repoya geldiğinizde "pull request" atıp katkınızı repoya ekleyebilirsiniz. Onay sürecinden sonra repoda gözükecektir.

Mevcut reponuzu güncel tutmak için ise remote ekleyin.

```
git remote add upstream git://github.com/tayfunerbilen/prototurk.com.git
git fetch upstream
```

Artık son halini çekmek istediğinizde şu şekilde kullanabilirsiniz.
```
git pull upstream master
```

Eğer repoyu klonlamak ile uğraşmak istemiyorsanız tarayıcınızdan [JSON oluşturucuları](https://prototurk.com/api/index.html) kullanarak oluşturduğunuz JSON verisini GitHub üzerinden ilgili yere yapıştırabilirsiniz.

Ya da bunların hiçbirini yapmayın, github.com üzerinden bu repoda değişiklik ve yenilikleri yapıp direk "pull request" yapın size kalmış :)

Hiçbir şey olmaz ise, o zaman JSON dosyalarını hazırlayıp tayfun@erbilen.net adresine gönderirseniz ben de ekleyebilirim. Maksat gönüller bir olsun. <3

Ayrıca nasıl yapılacağını Videolu olarak izleyip görmek isterseniz;

[Videoyu izlemek için tıklayın](https://youtu.be/6zsb8tVHiMg)

# Nerede Gözükecek?
Eklenen tüm bilgiler, belli bir kontrol işleminden sonra prototurk.com'da ilgili sayfalarda yazar isminizle birlikte görünecektir.

# Gözatın!
Şu an için neler olup bittiğine siteden gözatın!
[https://prototurk.com](https://prototurk.com)
