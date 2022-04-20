<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form onsubmit="return false" id='sp_offers_data_form'>
        <input type='file' name='image'>
        <button onclick='uploadImage()'>Upload image</button>
    </form>
    <script>
        function uploadImage() {
            fetch('special_offersData.php', {
                method: "POST",
                body: new FormData(document.getElementById('sp_offers_data_form'))
            });


        }
    </script>

</body>

</html>