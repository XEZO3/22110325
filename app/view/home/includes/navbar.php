
<html lang="en">
<head>
<title><?=$title ?? "savenotes"?></title>
<script src="https://kit.fontawesome.com/7e7c44ffdf.js" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Handlee&display=swap" rel="stylesheet">
<link rel="icon" href="https://simpleicon.com/wp-content/uploads/note.png" type="image/x-icon">
<meta name="description" content="Register and save your notes with SaveNotes, your go-to note-saving system. Effortlessly manage your personal notes, to-dos, and reminders. Join us for a streamlined note-taking experience today!">
<meta name="keywords" content="note system, note-taking, save notes, personal notes, to-dos, reminders, SaveNotes community">
<meta property="og:title" content="Register and Save Notes with SaveNotes">
<meta property="og:description" content="Effortlessly manage your personal notes, to-dos, and reminders with SaveNotes, your premier note-saving system. Join us for a streamlined note-taking experience today!">
<meta name="twitter:title" content="Register and Save Notes with SaveNotes">
<meta name="twitter:description" content="Effortlessly manage your personal notes, to-dos, and reminders with SaveNotes, your premier note-saving system. Join us for a streamlined note-taking experience today!">
<meta name="author" content="Ezaldeen alayed">
<meta charset="UTF-8">


<style>
  *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family:'Handlee', cursive,'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}
@import url('https://fonts.googleapis.com/css2?family=Handlee&display=swap');
body{
    background-color: #2f363e;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  width: 100%;
  background-color: #26ff8f;
  display:flex;
  justify-content: space-between;
  align-items: center;
}

/* li {
  float: left;
} */

li a {
  transition: 0.5s;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-family: 'Handlee', cursive;
  color:black;
  font-size: 22px;

}

li a:hover:not(.active) {
    transition: 0.5s;
  background-color: #04b358;
 
}

</style>
</head>
<body>

<ul>
 <li><a class="active" href="<?=(isset($_SESSION['id'])|| !empty($_SESSION['id']))? PATH.'/' :  '#'?>" style=" font-weight: bold;font-size:28px">SaveNotes</a></li>
  <?php if(isset($_SESSION['id'])|| !empty($_SESSION['id'])): ?>
  <li style="float:right"><a  href="<?=PATH?>/user/logout">Logout</a></li>
  <?php endif ?>
</ul>