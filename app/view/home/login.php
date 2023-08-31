<?php 
include("includes/navbar.php")
?>


<style>
        

        .container {
            width: 50%;
            
            margin: auto;
            background-color: transparent;
            border: 2px solid #26ff8f;
            border-radius: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            display: grid;
            grid-template-columns: 1fr 6fr;
            grid-template-rows: 1fr 1fr ;
            grid-auto-rows: 0.6fr;
            grid-gap: 20px;
            padding: 20px;
        }

        .item {
            font-size: 1.5rem;
            font-weight: bold;
            color: white;
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
            font-size: 0.7em;
        }

        .item-input input:focus,
        .item-input textarea:focus {
            outline: none;
            border-color: #3498db;
        }

        button {
            grid-column: 2/2;
            width: 90%; /* Updated width */
            padding: 10px;
            border: none;
            border-radius: 10px;
            background-color: #26ff8f;
            color: black;
            font-size: 1rem;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: transparent;
            color: #26ff8f;
            border: 1px solid #26ff8f;
        }
        .content{
            height: 88vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        @media (max-width:1000px){
            .container{
                width: 90%;
            }
        }
        @media (max-width:780px){
            .container{
                width: 95%;
                display: flex;
                flex-direction: column;
               
                
            }
            .item{
                width: 100%;
                padding: 0;
            }
            .item-input input , .item-input textarea{
                width: 100%;
            }
            button{
                width: 100%;
            }
            
        }

        
    </style>
<div class="content">
    <?php if(isset($_SESSION['error'])&& !empty($_SESSION['error'])): ?>
    <div style="background-color: #DC3545;width:60%;height:80px;border-radius:20px;padding:10px;color:white">
        <?=$_SESSION['error']?>
        <?php unset($_SESSION['error']) ?>
</div>
    <?php endif ?>
    <form style="width: 100%;" action="<?=PATH?>/user/login" method="post">
    <div class="container">
        
            <div class="item">Email</div>
            <div class="item item-input"><input type="text" placeholder="example@email.com" name="email" ></div>
            <div class="item">Password</div>
            <div class="item item-input"><input type="text" placeholder="XXXXXXXX" name="password" ></textarea></div>
            <button>Login</button>
            <div class="item" style="grid-column:1/3;text-align:center"><span>need an account? </span><a href="<?=PATH?>/user/register" style="color:#26ff8f">register</a></div>

    </div>
</form>
</div>
<?php
include("includes/footer.php");
?>
</body>
</html>
