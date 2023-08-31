<!DOCTYPE html>
<html>
<head>
    <title><?= $title ?></title>
    <script src="https://kit.fontawesome.com/7e7c44ffdf.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Handlee&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            font-family: 'Handlee', cursive;
            background-color: #f3f3f3;
            flex-direction: column;
            gap: 20px;
        }

        .container {
            width: 60%;
            margin: auto;
            background-color: #ffffff;
            border: 1px solid #ccc;
            border-radius: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            display: grid;
            grid-template-columns: 1fr 6fr;
            grid-gap: 20px;
            padding: 20px;
        }

        .item {
            font-size: 1.5rem;
            font-weight: bold;
            color: #333;
            align-self: center;
        }

        .item-input input,
        .item-input textarea {
            width: 90%; /* Updated width */
            padding: 10px;
            border-radius: 10px;
            border: 1px solid #ccc;
            background: #e6e6e6;
            transition: border-color 0.3s ease;
            font-family: 'Handlee', cursive;
        }

        .item-input input:focus,
        .item-input textarea:focus {
            outline: none;
            border-color: #3498db;
        }

        button {
            grid-column: 2/2;
            width: 94%; /* Updated width */
            padding: 10px;
            border: none;
            border-radius: 10px;
            background-color: #3498db;
            color: #ffffff;
            font-size: 1rem;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <?php if(isset($_SESSION['error'])&& !empty($_SESSION['error'])): ?>
    <div style="background-color: #DC3545;width:60%;height:80px;border-radius:20px;padding:10px;color:white">
        <?=$_SESSION['error']?>
        <?php unset($_SESSION['error']) ?>
</div>
    <?php endif ?>
    <form style="width: 100%;" action="<?=PATH?>/home/update/<?=$note['id'] ??null ?>" method="post">
    <div class="container">
            <div class="item">Title</div>
            <div class="item item-input"><input type="text" placeholder="Note Title" name="title" value="<?=$note['title'] ?? 'error novalue'?>" ></div>
            <div class="item">Note</div>
            <div class="item item-input"><textarea rows="10" name="note" required><?=$note['note'] ?? 'error novalue'?></textarea></div>
            <button>Save</button>
        
    </div>
</form>
</body>
</html>
