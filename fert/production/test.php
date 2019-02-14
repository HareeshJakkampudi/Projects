<html>
<head>
<script>
function showHint(str) {
    if (str.length == 0) { 
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "test2.php?q=" + str, true);
        xmlhttp.send();
    }
}
function local()
{
               
               var b=document.f1.b.value;
               var url="test5.php?g="+b+"";
            var u;
            if(window.XMLHttpRequest)
            {
                u=new XMLHttpRequest();
            }
             else
             {
                 u=new ActiveXObject("Microsoft.XMLHTTP")
        
             }
                u.onreadystatechange=function ()
                {
                    if(u.readyState==4 && u.status==200)
                    {
                        document.getElementById("txtHint").innerHTML=u.responseText;
                    }

                }
                u.open("GET",url,true);
                u.send();
}
</script>
</head>
<body>

<p><b>Start typing a name in the input field below:</b></p>
<form name="f1"> 
First name: <input type="text" id="a" onkeyup="showHint(this.value)">
product    :<input type="text" id="b" onkeyup="local()">
</form>
<p>Suggestions: <span id="txtHint"></span></p>
</body>
</html>