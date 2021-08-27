<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<style>
:root{
    --primary-color: #21c700;
    /* --secondary-color: #bbaaa7; */
}
*{
    box-sizing: border-box;
    margin: 0 auto;
    padding: 0;
    font-family:'Roboto', sans-serif;
}
h2{
    color: black;
    text-align: center;
    padding-top:10px;
}
body{
    /* font-family: cursive; */
    margin-top:100px;
    overflow: scroll;
    display: flex;
	flex-direction: column;
    background-color:#272727;

}
#main{
    margin: 0 auto;
    height: 100px;
    width: 410px;
    font-size: 20px;
    padding-top:10px;
    
    
}
.myform{
    border:1px solid black;
    border-radius: 20px;
}

form{
    background-color:#272727;;
}
.myform input{
   width:380px;
   height: 30px;
   border-radius: 3px;
   margin-left: 10px;
   border: 1px solid #ccc;
   background-color:#272727;
   color:white;
   
}

.myform label{
    margin-left: 10px;
    color: #00b56d;
    
}
.myform input:hover{
    border:2px solid var(--secondary-color)
}

.myform .buttons #submit{
    border: 1px solid var(--primary-color);
	width: 100px;
	height: 50px;
	border-radius: 5px;
	font-weight: 200;
	font-size: 18px;
	/* font-family: cursive,sans-serif; */
	margin: 0 auto 1rem;
	background-color: #21c700;
    color:#ffffff;
	/* box-shadow: 2px 2px 6px #ccc; */
    display: flex;
    align-items: center;
    
}

.myform .buttons #submit p{
    text-align: center;
}


.myform .buttons #submit:hover{
    opacity:0.7;
}

.log{
    display:flex;
    align-items:center;
}
</style>
<body>

    <div id="main">
        <form class="myform" method="post">
        <img src="https://api.freelogodesign.org/files/1176acdfe3b84fad988641bb0492d37b/thumb/logo_200x200.png?v=0" alt="" class="log">
        <label for="fname">Name:</label>
        <input type="text" name="fname" id = "fname"><br>

        <!-- <br>
        <label for="lname">Last Name:</label>
        <input type="text" name="lname" id = "lname"><br> -->

        <br>
        <label for="address">Address:</label>
        <input type="text" name="address" id = "address"><br>
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password"><br>
        <br>
        <label for="cpassword">Verify Password:</label>
        <input type="password" name="cpassword" id="vpassword"><br>
        <br>
        <br>
        <div class="buttons">
        <button id="submit"><p>Submit</p></button>
        </div>
        </form>
    </div>
    
</body>
</html>