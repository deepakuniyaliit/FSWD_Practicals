<!DOCTYPE html>
<html>
<head>
    <script type = 'text/javascript' src = 'photos.json'></script>
    <title>Document</title>
</head>
<body>
    <script>
        sho={};
        for(var i = 0; i < data.length; ++i)
        {
            var curr = data[i];
            var id = curr['id'];
            var albumId = curr['albumId'];
            var url = curr['url'];
            var lastIdx = curr['url'].lastIndexOf('/');
            var lastPart = url.substr(lastIdx + 1);
            sho[id] = [albumId, lastPart];
        }
        console.log(sho);
    </script>
</body>
</html>
photosData = {};
for(var i = 0; i < data.length; ++i)
{
    // var curr = data[i];
    // var id = curr['id'];
    // var albumId = curr['albumId'];
    // var url = curr['url'];
    // var lastIdx = curr['url'].lastIndexOf('/');
    // var lastPart = url.substr(lastIdx + 1);
    // photosData[id] = [albumId, lastPart];
    var temp = data[i]['url'].substr(data[i]['url'].lastIndexOf('/') + 1);
    photosData[data[i]['id']] = [data[i]['albumId'], temp];
}