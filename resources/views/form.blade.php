<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTC0HlQ_ckX6HqCAlqroocyRDx_ZRu3x3ezoA&usqp=CAU" type="image/x-icon">
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
.myform .enter{
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
.myform .enter:hover{
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

input[type=file]::file-selector-button {
  border: 1px solid ;
  padding: .2em .4em;
  
  background-color: #ccc;
  transition: 1s;
  color:#000;
}

input[type=file]::file-selector-button:hover {
  opacity:0.7;
}

.inputfile{
    color:white;
    border: 1px solid white;
    overflow:hidden;
}

</style>
<body>

    <div id="main">
        <form method="post" class="myform" action="{{route('form')}}" enctype="multipart/form-data">
        @csrf
        <img src="https://api.freelogodesign.org/files/1176acdfe3b84fad988641bb0492d37b/thumb/logo_200x200.png?v=0" alt="" class="log">
        <label for="fname">Username:</label>
        <input type="text" name="fname" id = "fname" class="enter"><br>
        <br>
        <label for="address">Email:</label>
        <input type="email" name="address" id = "address" class="enter"><br>
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" class="enter"><br>
        <br>
        <label for="cpassword">Verify Password:</label>
        <input type="password" name="cpassword" id="vpassword" class="enter"><br>
        <br>
        <label for="file">Profile:</label>
        <input type="file" name="profilepic" id="file-upload" class="inputfile"><br>
        <br>
        <br>
        <div class="buttons">
        <button id="submit"><p>Submit</p></button>
        </div>
        </form>
    </div>
    
</body>
</html>