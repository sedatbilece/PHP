# REST API Desing Rulebook - CH5 - Representation Design



# Message Body Format

<aside>
📏 Kural : Sunum JSON olmalıdır.

</aside>

Kaynak sunumu JSON veri tipi üzerinden gerçekleştirilmelidir.

<aside>
📏 Kural : JSON düzgün formatlı olmalıdır

</aside>

{
"firstName" : "Osvaldo",
"lastName" : "Alonso",
"firstNamePronunciation" : "ahs-VAHL-doe",
"number" : 6, 1️⃣
"birthDate" : "1985-11-11" 2️⃣
}

1️⃣ Sayılar direk yazılabilir fakat diğer ifadeler çift tırnak ile  string yazılmalıdır

2️⃣ JSON date-time desteklemez tarihler string formatında verilmelidir.

    İsimlendirmelerde önceden anlatılan kurallar geçerlidir.

<aside>
📏 Kural : XML kaynak sunumu opsiyonel olabilir

</aside>

# Hypermedia Reprentation

Api link ,action veya media döndürebilir .

<aside>
📏 Kural : Link sunumu düzgün bir şemada sunulmalıdır

</aside>

{
"href" : Text <constrained by URI or URI Template syntax>,
"rel" : Text <constrained by URI syntax>,
"requestTypes" : Array <constrained to contain media type text elements>,
"responseTypes" : Array <constrained to contain media type text elements>,
"title" : Text
}

Kırmızı renkliler gerekli olanlar iken sarı renkiler opsiyonel verilebilecek yapılar.

🧲Örneğin:

{
"href" : "[http://api.soccer.restapi.org/players/2113](http://api.soccer.restapi.org/players/2113)",
"rel" : "[http://api.relations.wrml.org/common/self](http://api.relations.wrml.org/common/self)"
}

<aside>
📏 Kural : Link Relations kullanılmalıdır.

</aside>

{
"name" : Text,
"method" : Text <constrained to be choice of HTTP method>,
"requestTypes" : Array <allowed request media types>,
"responseTypes" : Array <available response media types>,
"description" : Text,
"title" : Text
}

🧲Örneğin:

GET /common/self HTTP/1.1
Host: [api.relations.wrml.org](http://api.relations.wrml.org/)

HTTP/1.1 200 OK
Content-Type: application/wrml;
format="[http://api.formats.wrml.org/application/json](http://api.formats.wrml.org/application/json)";
schema="[http://api.schemas.wrml.org/common/LinkRelation](http://api.schemas.wrml.org/common/LinkRelation)"

{
"name" : "self",
"method" : "GET",
"description" : "Signifies that the URI in the value of the href
property identifies a resource equivalent to the
containing resource."
}

<aside>
📏 Kural : Advertise link dönülmelidir.

</aside>

Bağlantılı olan veya arayüz kısmında kullanılması muhtemel linkler dönülmelidir.

🧲Örneğin:

{
"firstName" : "Osvaldo",
"lastName" : "Alonso",

"links" : {
"self" : {
"href" : "[http://api.soccer.restapi.org/players/2113](http://api.soccer.restapi.org/players/2113)",
"rel" : "[http://api.relations.wrml.org/common/self](http://api.relations.wrml.org/common/self)"
},

"parent" : {
"href" : "[http://api.soccer.restapi.org/players](http://api.soccer.restapi.org/players)",
"rel" : "[http://api.relations.wrml.org/common/parent](http://api.relations.wrml.org/common/parent)"
},

"team" : {
"href" : "[http://api.soccer.restapi.org/teams/seattle](http://api.soccer.restapi.org/teams/seattle)",
"rel" : "[http://api.relations.wrml.org/soccer/team](http://api.relations.wrml.org/soccer/team)"
},

"addToFavorites" : {
"href" : "[http://api.soccer.restapi.org/users/42/favorites/{name}](http://api.soccer.restapi.org/users/42/favorites/%7Bname%7D)",
"rel" : "[http://api.relations.wrml.org/common/addToFavorites](http://api.relations.wrml.org/common/addToFavorites)"
}

}
}

<aside>
📏 Kural : Self link body içinde sunulmalı

</aside>

<aside>
📏 Kural : Advertised url minimal tutulmalıdır

</aside>

# Media Type Representation

<aside>
📏 Kural : Media type format dönüşümü döndürmelidir

</aside>

GET /application/json HTTP/1.1
Host: [api.formats.wrml.org](http://api.formats.wrml.org/)

HTTP/1.1 200 OK
Content-Type: application/wrml;
format="[http://api.formats.wrml.org/application/json](http://api.formats.wrml.org/application/json)";
schema="[http://api.schemas.wrml.org/common/Format](http://api.schemas.wrml.org/common/Format)"

{
"mediaType" : "application/json",
"links" : {
"self" : {
"href" : "[http://api.formats.wrml.org/application/json](http://api.formats.wrml.org/application/json)",
"rel" : "[http://api.relations.wrml.org/common/self](http://api.relations.wrml.org/common/self)"
},
"home" : {
"href" : "[http://www.json.org](http://www.json.org/)",
"rel" : "[http://api.relations.wrml.org/common/home](http://api.relations.wrml.org/common/home)"
},
"rfc" : {
"href" : "[http://www.rfc-editor.org/rfc/rfc4627.txt](http://www.rfc-editor.org/rfc/rfc4627.txt)",
"rel" : "[http://api.relations.wrml.org/format/rfc](http://api.relations.wrml.org/format/rfc)"
}
},
"serialize" : {
"links" : {
"java" : {
"href" : "[http://api.formats.wrml.org/application/json/serializers/java](http://api.formats.wrml.org/application/json/serializers/java)",
"rel" : "[http://api.relations.wrml.org/format/serialize/java](http://api.relations.wrml.org/format/serialize/java)"
},
"php" : {
"href" : "[http://api.formats.wrml.org/application/json/serializers/php](http://api.formats.wrml.org/application/json/serializers/php)",
"rel" : "[http://api.relations.wrml.org/format/serialize/php](http://api.relations.wrml.org/format/serialize/php)"
}
}
},
"deserialize" : {
"links" : {
"java" : {
"href" : "[http://api.formats.wrml.org/application/json/deserializers/java](http://api.formats.wrml.org/application/json/deserializers/java)",
"rel" : "[http://api.relations.wrml.org/format/deserialize/java](http://api.relations.wrml.org/format/deserialize/java)"
},
"perl" : {
"href" : "[http://api.formats.wrml.org/application/json/deserializers/perl](http://api.formats.wrml.org/application/json/deserializers/perl)",
"rel" : "[http://api.relations.wrml.org/format/deserialize/perl](http://api.relations.wrml.org/format/deserialize/perl)"
}
}
}
}

# Container Schema Representation

Burada container bilginin parçalanarak döndürülmesi için kullanılan bir metodoloji

Genelde sayfalama için kullanılır bilginin bloklar halinde döndürülmesinde sayfalara erişim için gerekli yapı

HTTP/1.1 200 OK
Content-Type: application/wrml;
format="[http://api.formats.wrml.org/application/json](http://api.formats.wrml.org/application/json)";
schema="[http://api.schemas.wrml.org/common/Container](http://api.schemas.wrml.org/common/Container)"
{
"name" : "Container",
"version" : 1,
"extends" : ["[http://api.schemas.wrml.org/common/Document](http://api.schemas.wrml.org/common/Document)"],
"fields" : {
"elements" : {
"type" : "List",
"description" : "The paginated list of contained elements."
},
"size" : {
"type" : "Integer",
"description" : "The total number of elements currently contained."
},
"pageSize" : {
"type" : "Integer",
"description" : "The maximum number of elements returned per page."
},
"pageStartIndex" : {
"type" : "Integer",
"description" : "The zero-based index of the page's first element."
},
},
"stateFacts" : [
"Empty",
"FirstPage",
"LastPage",
"Paginated"
],
"linkFormulas" : {
"delete" : {
"rel" : "[http://api.relations.wrml.org/common/delete](http://api.relations.wrml.org/common/delete)",
"condition" : "Identifiable and not Docroot and Empty"
},
"next" : {
"rel" : "[http://api.relations.wrml.org/common/next](http://api.relations.wrml.org/common/next)",
"condition" : "(Identifiable and not Empty) and (Paginated and not LastPage)"
},
"previous" : {
"rel" : "[http://api.relations.wrml.org/common/previous](http://api.relations.wrml.org/common/previous)",
"condition" : "(Identifiable and not Empty) and (Paginated and not FirstPage)"
}
},
"description" : "A base container of elements."
}

# Error Representation

<aside>
📏 Kural : Hata dönülebilmelidir

</aside>

hata id ve açıklama yeterlidir.

{
"elements" : [
{
"id" : "Update Failed",
"description" : "Failed to update /users/1234"
}
]
}