<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edit Artikel</h1>
    <form method="POST">
        <div>
            <label>Jedul</label>
            <input type="text" name="title" value='<?php echo $blog['title']; ?>'>
        </div>
        <div>
            <label>Konten</label>
            <textarea name="content" id="" cols="30" rows="10">
                <?php echo $blog['content']; ?>
            </textarea>
        </div>
        <div>
            <label>Url</label>
            <input type="text" name = "url" value='<?php echo $blog['url']; ?>'>
        </div>    
            <button type="submit">Simpan Artikel</button> 
    </form>
</body>
</html>