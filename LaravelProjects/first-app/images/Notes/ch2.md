# REST API Desing Rulebook - CH2 - Identifier Design with URLs



URL’ler genelden özele doğru kapsayıcı bir yapıda bulunmaktadır .

URL’ler kullanıcıya çok bir bilgi göstermemelidir.

<aside>
📏 URL Formatı

</aside>

 ://site.com/path?query#fragment Şeklinde tanımlanmaktadır .

<aside>
📏 KURAL : Hiyerarşi (/) ile ayrılmalıdır .

</aside>

[http://api.canvas.restapi.org/shapes/polygons/quadrilaterals/squares](http://api.canvas.restapi.org/shapes/polygons/quadrilaterals/squares) ✅

<aside>
📏 KURAL : URL sonu (/) ile bitmemelidir.

</aside>

[http://api.canvas.restapi.org/shapes/](http://api.canvas.restapi.org/shapes/) ❌

[http://api.canvas.restapi.org/shapes](http://api.canvas.restapi.org/shapes) ✅

<aside>
📏 KURAL : Okunabilirlik için uzun cümleler (-) ile ayrılmalı (_) kullanılmamalıdır.

</aside>

[http://api.example.restapi.org/blogs/mark-masse/entries/this-is-my-first-post](http://api.example.restapi.org/blogs/mark-masse/entries/this-is-my-first-post) ✅

<aside>
📏 KURAL : (Lowercase) Küçük karakterler tercih edilmelidir .

</aside>

[http://api.example.restapi.org/my-folder/my-doc](http://api.example.restapi.org/my-folder/my-doc) ✅

[HTTP://API.EXAMPLE.RESTAPI.ORG/my-folder/my-doc](http://api.example.restapi.org/my-folder/my-doc) 😑

[http://api.example.restapi.org/My-Folder/my-doc](http://api.example.restapi.org/My-Folder/my-doc) ❌

<aside>
📏 KURAL : Dosya uzantıları kullanılmamalıdır.

</aside>

[http://api.college.restapi.org/students/3248234/transcripts/2005/fall.json](http://api.college.restapi.org/students/3248234/transcripts/2005/fall.json) ❌

[http://api.college.restapi.org/students/3248234/transcripts/2005/fall](http://api.college.restapi.org/students/3248234/transcripts/2005/fall) ✅

<aside>
📏 KURAL : API uygulamaları için sub domain kullanımı

</aside>

[http://api.soccer.restapi.org](http://api.soccer.restapi.org/) ✅

veya developer.soccer…. şeklinde olabilir burada amaç parçalama ve yönetim 

<aside>
📏 KURAL : Store her oluşturulan nesne için yeni bir path oluşturmamalıdır

</aside>

PUT /users/1234/favorites/alonso 

burada id’si 1234 olan kullanıcının favorilerine alonso ekleme yapılıyor muhtemelen bir liste ve update yapılıyor put ile burada sadece mavi kısım değişiyor

<aside>
📏 KURAL : Controller CRUD işlemlerini yapabilmelidir.

</aside>

Create (HTTP Method ⇒ POST )

Read (HTTP Method ⇒ GET )

Update (HTTP Method ⇒ PUT )

Delete (HTTP Method ⇒ DELETE )

/user/1234

get param yok

post param var

put param var 

delete param yok

<aside>
📏 KURAL : Döküman isimleri tekil olmalıdır.

</aside>

[http://api.soccer.restapi.org/leagues/seattle/teams/trebuchet/players/claudio](http://api.soccer.restapi.org/leagues/seattle/teams/trebuchet/players/claudio) ✅

<aside>
📏 KURAL : Collection veya Store isimleri çoğul olmalıdır.

</aside>

[http://api.soccer.restapi.org/leagues/seattle/teams/trebuchet/players](http://api.soccer.restapi.org/leagues/seattle/teams/trebuchet/players) ✅

[http://api.music.restapi.org/artists/mikemassedotcom/playlists](http://api.music.restapi.org/artists/mikemassedotcom/playlists) ✅

<aside>
📏 KURAL : Ayrıca Controller’a non-Crud yani buradaki işlemler dışında durum değişimi gibi işlemler için gidilirken url isimlendirmelerinde fiil yada fiil cümlesi kullanılmalıdır.

</aside>

POST /alerts/245743/resend ✅

<aside>
📏 KURAL : CRUD fonksiyon isimleri urlde kullanılmamalıdır . (HTTP header içinde verilmeli )

</aside>

DELETE /users/1234  ✅

GET /deleteUser?id=1234 ❌
GET /deleteUser/1234 ❌
DELETE /deleteUser/1234 ❌
POST /users/1234/delete ❌

<aside>
📏 KURAL : Arama işlemleriinde filtreleme veya depolama desteklenmelidir.

</aside>

GET /users Tüm kullanıcıları getirmelidir.
GET /users?role=admin Rolü admin olan kullanıcıları getirebilmelidir.

<aside>
📏 KURAL : Sayfalama yapısına uygun olabilmelidir

</aside>

GET /users?pageSize=25&pageStartIndex=50 ✅

<aside>
📏 KURAL : Gelişmiş aramaya uygunluk

</aside>

POST /users/search ✅ Controller’ın search fonksiyonuna body içinden frame-data ile parametre göndererek search işlemi yapılabilir.

<aside>
📏 KURAL :

</aside>