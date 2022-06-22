# Event Driven Architecture

Tarih: 30/05/2022
Tip: KonuNotu

<aside>
🏛️ TANIM

</aside>

Dağıtık ve asenkron mimarilerde popüler olarak kullanılır.

`Event Driven` Mimari stili **avantajları**;

- Ölçeklenebilir, Dağıtık Çalışabilir, Yüksek performanslı, Çevik , Her bir parçanın ayrı ayrı yüklenebilmesi, bileşenlerin sadece kendi mantıklarını bilmesi ve buna göre test yapılması açısından oldukça güzel bir mimari stildir. Bundan dolayı zaten dağıtık yapılarda sıkça tercih edilir.

Ama bazı ***dezavantajları da bulunur***;

- `Consistency`(tutarlılık), `atomicity` (atomik), sistemin takip edilebilirliği, bir hata oluştuğunda yapılan işlemlerin geri alınması, tüm sistemin testi vb..

<aside>
🏛️ `Mediator` Topoloji

</aside>

gelen olaylar bir merkezde ele alınır ve sıraya konur

> ÖRNEK
> 

Örneğin hisse senedi almak istiyorsunuz. Gittiniz ekrandan senedi seçtiniz ve al dediniz. `Al Eventi` arka planda `Mediator` tarafından bir dizi olay adımına dönüştürülür ve çalıştırılır.

- Alışverişi doğrulamanız.
- Uyum kurallarını kontrol etmeniz
- Komisyoncuya atamanız
- Komisyonu hesaplamanız
- Alışverişi tamamlamanız

Tüm bu adımların hangi sırada olacağı bu adımların seri mi yoksa paralel mi işletileceğini `mediator` bilir.

![1_g4pwDZxHxWwf_pewuQp8ow.png](Event%20Driven%20Architecture%205aee73e41a20453abacf2ced04889609/1_g4pwDZxHxWwf_pewuQp8ow.png)

<aside>
🏛️ `Broker` Topoloji

</aside>

dağıtıcı yerine mesaj akış şeması bulunur.

![1_vjNk6krmCYTHhjnkVA3Ieg.png](Event%20Driven%20Architecture%205aee73e41a20453abacf2ced04889609/1_vjNk6krmCYTHhjnkVA3Ieg.png)