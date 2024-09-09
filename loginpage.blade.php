<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <style>
        body{
            background-image:url("images/gehu.jpeg");
            background-size:cover;
            height:auto;
        }
        *{
            margin:0px;
            padding:0px;
            box-sizing: border-box;
        }
        #main{
            height: 60vh;
            width:25vw;
            background-color:white;
            opacity:0.9;
            color:white;
            position: absolute;
            top:50%;
            left:50%;
            transform:translate(-50%,-50%);
            padding:2px;
            box-shadow:1px 1px 20px 0px red;
        }
        #logo{
            height: 20%;
            width:100%;
            background-image:url("images/logo.png");
            background-size:cover;
            margin-bottom:12%;
        }
        #form{
            height:80%;
            width:100%;
        }
        .box{
            height:12%;
            width:85%;
            margin:3%;
            padding:1%;
        }
        #pass{
            margin-top:1%;
            margin-bottom:1%;
        }
        #heading{
            color:black;
            line-height:20%;
            margin:4%;
        }
        #fp{
            text-decoration:none;
            color:red;
            position:absolute;
            left:5%;
        }
        #submit{
            height:8%;
            width:18%;
            color:red;
            position:absolute;
            right:10%;
        }
        #submit:hover{
         background-color:red;
         border-radius:20%;
         color:white;
        }
        @media (min-width:500px) and (max-width:1000px){
            body{
                background-size:auto;
                background-image:url("images/gehu.jpeg");
                background-repeat:no-repeat;
            }
            #main{
                height:55vh;
                width:65vw;
            }
        }
    </style>
</head>
<body>
    <div id="main">
        <div id="logo"></div>
        <form id="form" action="/home">
            <div id="heading">
               <h1>Enter your Details</h1>
            </div>
            <input required id="uniroll" class="box" type="text" placeholder="User ID">
           <br><br>
            <input required id="pass" class="box" type="password" placeholder="Password">
            <!-- <button id="view">see</button> -->
             <br>
                <a href="/foregtpass" id="fp">forget passward?</a>
           <br>
            <button id="submit">login</button>
         </form>
    </div>
    <!-- <script>
        const btn=document.querySelector("#view");
        const pas=document.querySelector("#pass");
        let view=true;
        btn.addEventListener("click",()=>{
            if(view){
                pas.setAttribute("type","text");
                view=false;
            }else{
                pas.setAttribute("type","password");
                view=true;
            }
        });
    </script> -->
</body>
</html>