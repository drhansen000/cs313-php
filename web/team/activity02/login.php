<DOCTYPE! html>
<html>
<head>
    <title>Fuchsia Gym</title>
    <script>
        function getLoginType(loginType)
        {
            var httpRequest = new XMLHttpRequest();
            httpRequest.onreadystatechange = function () 
            {
                if (this.readyState == 4 && this.status == 200)
                {
                    location.href = "home.php";        
                }
                else if (this.readyState == 4) 
                {
                    alert("Failure trying to open file to write. Status is: " + this.statusText);
                }
            };
                
            httpRequest.open("GET","loginType.php?loginType=" + loginType, true);
            httpRequest.send();
        }
    
    </script>
</head>    
<body>
    <?php include('nav.php'); ?>
    
    <h1>Login Page</h1>
    <button onclick="getLoginType('Administrator')">Login Administrator</button>
    <button onclick="getLoginType('Tester')">Login Guest</button>
</body>
</html>    