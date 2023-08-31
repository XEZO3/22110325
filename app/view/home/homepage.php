<?php 
include("includes/navbar.php");
?>
<style>

.container{
   width: 90%;
   height: 90vh;
   display: flex;
   justify-content: flex-start;
   align-items: flex-start;
   flex-wrap: wrap;
   gap: 60px;
   margin: auto;
   margin-top: 1em;
   
    
    
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
background-color: #26ff8f;
box-shadow: 0 15px 35px rgba(0,0,0,0.25);
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
    transition: 0.5s;
    background-color: #26ff8f;
}
#create:hover i{
    transition: 0.5s;
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
color: #26ff8f;
}
a{
    text-decoration: none;
    color: white;
}

@media (max-width:310px){
    .container .notes .note{
        width: 250px;
        height: 250px;
    }
    
    #create{
        width: 250px;
        height: 250px;
    }
}

</style>
<div class="container">
    <div class="notes">
        <div id="create">
        <a href="<?=PATH?>/note/create"><i class="fa-solid fa-plus"></i></a>
        </div>
        <?php foreach($data as $item): ?>
        <div class="note">
            <div class="note-header" ><?=$item['title']?></div>
           <div style="margin:5px"><?=$item['note']?></div>
           <div class="note-footer">
                <a href="<?=PATH?>/note/edit/<?=$item['id']?>"><i class="fa-regular fa-pen-to-square fa-xs"></i></a>
                <a href="<?=PATH?>/note/notedelete/<?=$item['id']?>"><i class="fa-solid fa-trash fa-xs"></i></a>
           </div>
        </div>
        <?php endforeach ?>
    </div>
</div>
</body>
</html>