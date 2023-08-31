
<html>
<head><title></title>
<script src="https://kit.fontawesome.com/7e7c44ffdf.js" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Handlee&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
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