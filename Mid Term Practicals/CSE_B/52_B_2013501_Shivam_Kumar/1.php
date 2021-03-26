<!DOCTYPE html>

<head>
    <title>Question 1 FSWD Mid Practical - Shivam kumar</title>
    <script src="photos.js"></script>
</head>

<body>
    <script>
        photosData = {};
        for (var i = 0; i < data.length; i++) {
            url = data[i].url;
            id = data[i].id;
            albumId = data[i].albumId
            photosData[id] = [albumId, url.substring(url.lastIndexOf("/"))]
        }
    </script>
</body>

</html>