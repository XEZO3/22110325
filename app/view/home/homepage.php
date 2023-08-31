<html>
<head><title><?= $title?></title></head>
<script src="https://kit.fontawesome.com/7e7c44ffdf.js" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Handlee&display=swap" rel="stylesheet">
<style>
*{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}
@import url('https://fonts.googleapis.com/css2?family=Handlee&display=swap');
body{
    background-color: #2f363e;
}
.container{
   width: 100%;
   height: 100vh;
   display: flex;
   justify-content: flex-start;
   align-items: flex-start;
   flex-wrap: wrap;
   gap: 60px;
   padding: 50px; 
}
.container .notes{
    display: flex;
    flex-wrap: wrap;
    gap: 60px;
    justify-content: center;
    align-items: center;

}

.container .notes .note{

width: 300px;
height: 300px;
background-color: #f7e98d;
box-shadow: 0 15px 35px rgba(0,0,0,0.25);
font-family: 'Handlee', cursive;
position: relative;
}


.container .notes .note:hover .note-header{
    transition: 0.5s;
    display: block;
}


.container .notes .note:hover .note-footer{
    transition: 0.5s;
    visibility: visible;
}

#create{
    transition: 1s;
   width: 300px;
   height: 300px;
   background-color:  rgba(255,255,255,0.15);
   display: flex;
   justify-content: center;
   align-items: center;
   font-size: 6em; 
}
#create:hover{
    transition: 1s;
    background-color: white;
}
#create:hover i{
    transition: 1s;
    color: black;
}
.note-header{
    width:100%;
    height:50px;
    background-color:gray;
    text-align: center;
    padding-top: 13px;
    color: white;
    font-size:22px;
    display: none;
    position: absolute;
    opacity: 0.7;
}
.note-footer{
    position: absolute;
    bottom: 0;
    width:100%;
    height:30px;
    background-color:gray;
    text-align: center;
    padding-top: 15px;
    color: white;
    font-size:22px;
    display: flex;
    visibility: hidden;
    justify-content:space-evenly;
    opacity: 0.8;
}
.fa-solid{
    display: inline-block;
}
#create i{
color: white;
}
a{
    text-decoration: none;
    color: white;
}
</style>
<body>
<div class="container">
    <div class="notes">
        <div id="create">
        <a href="<?=PATH?>/home/create"><i class="fa-solid fa-plus"></i></a>
        </div>
        <?php foreach($data as $item): ?>
        <div class="note">
            <div class="note-header" ><?=$item['title']?></div>
           <?=$item['note']?>
           <div class="note-footer">
                <a href="<?=PATH?>/home/edit/<?=$item['id']?>"><i class="fa-regular fa-pen-to-square fa-xs"></i></a>
                <a href="<?=PATH?>/home/notedelete/<?=$item['id']?>"><i class="fa-solid fa-trash fa-xs"></i></a>
                <a href="#"><i class="fa-solid fa-circle-info fa-xs"></i></a>
           </div>
        </div>
        <?php endforeach ?>
    </div>
</div>
</body>
</html>