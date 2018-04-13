<?php 
session_start(); 
// nme : malik_cms
// author : malik kurosaki
// contact : WA +6281338929722
// opensource - maintenent live time

?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width , initial-scale=1">
        <link rel="stylesheet" href="w3.css">
    <style>
        #cntr1{
            max-width: 540px;
            left: 0;
            right: 0;
            margin: 0 auto;
            margin-bottom: 200px;
        }
        #txa{
        	max-width: 540px;
            position: fixed;
            margin: 0 auto;
            left: 0;
            right: 0;
            bottom: 0;
      		}
        #insertTo,#remove1,#save1,#tool1 , #lib1 ,#pgResult, #webInfo, #lib1{
            max-width: 540px;
            position: fixed;
            margin: 0 auto;
            left: 0;
            right: 0;
            bottom: 0;
        }
        #signin , #signup{
            width: 100%;
            min-height: 100%;
            right: 0;
            left: 0;
            position: fixed;
            margin: 0 auto;
            z-index: 1;
            top: 0;
        }
        a{
          color: dodgerblue;
          
        }
        
    </style>
        <?php echo "<script id='malik' type='text/javascript' src='https://cdn.rawgit.com/malikkurosaki/1081628857b80399ed50a9ba340cb46f/raw/23d4948dc4982fa876ea1b04327269a978dd0283/malikcms.js?".time()."'></script>";?>
    </head>
    <body>
        <div id="cntr1" class=" w3-border w3-border-blue-grey">
            <div id="c1" class="w3-blue-grey w3-row"> MALIK cms </div>
            <div id="c2" class="w3-light-grey"></div>
            <div id="c3" class="w3-padding"></div>
            <div id="c4" class="w3-padding w3-light-grey"><?php echo file_get_contents("tmp.txt"); ?></div>
        </div>
        <div id="insertTo" class="w3-border w3-border-teal w3-hide w3-animate-left">
        </div>
        <div id="remove1" class="w3-border w3-border-teal w3-hide w3-animate-left">
            <div id="closeRemove1" class="w3-tag w3-red w3-right">X</div>
        </div>
        <div id="save1" class="w3-border w3-border-teal w3-blue-grey w3-animate-left w3-hide">
            <div id="closeSave1" class="w3-tag w3-red w3-right">X</div>
            <p>title</p>
            <input id="title1" class="w3-white w3-input" >
            <p>description</p>
            <input id="desc1" class="w3-white w3-input" >
            <p>url image</p>
            <img id="tumb" >
            <input id="urlImg1" class="w3-white w3-margin-bottom w3-input" >
            <button id="finalSave1" class="w3-teal w3-right">SAVE</button>
        </div>
        <div id="tool1" class="w3-border w3-border-teal w3-blue-grey w3-animate-left w3-hide">
            <div id="closeTool1" class="w3-tag w3-red w3-right">X</div>
            <div id="rgInfo"></div>
            <br>
            <div id="rangeCon"></div>
        </div>
        <div id="lib1" class="w3-border w3-border-teal w3-animate-left w3-hide">
            <div id="closeLib1" class="w3-tag w3-red w3-right">X</div>
            <button id="uplLib" class="w3-tag w3-blue-grey ">upload</button>
            <div id="conLib" class="w3-responsive">
            <table class="w3-table-all">
                <tr>
            <?php  
                $fol = "lib/";
                $folSc = scandir($fol);
                $folAdf = array_diff($folSc,array("..","."));
                foreach($folAdf as $nImg){
                    echo "<td><img src='lib/".$nImg."' style='width:50px'></td>";
                }
            ?>
                </tr>
            </table>
            </div>
            <form id="frm" method="post">
                <input id="pilih" type="file" name="upl" class="w3-hide">
                <input id="kirim" type="submit" class="w3-hide" >
            </form>
        </div>
        <div id="pgResult" class="w3-bottom w3-hide w3-responsive w3-small w3-light-grey w3-border w3-border-yellow">
            <div id="closePage" class="w3-tag w3-red w3-right">X</div>
            <table class="w3-table-all">
        <?php
            $page = array_diff(scandir("page"),array("..","."));
            foreach($page as $pContent){
                echo "<tr>";
                echo "<td id='' class='w3-button'><a href='".basename($pContent,".html")."'>".basename($pContent,".html")."</a></td><td><button id='".basename($pContent,".html")."' class='editBtn'>edit</button></td><td><button id='".basename($pContent,".html")."' class='removeBtn'>remove</button></td>";
                echo "</tr>";
            }
            ?>
            </table>
        </div>
        <div id="webInfo" class="w3-bottom w3-blue-grey w3-padding w3-hide">
            <div id="closeInfo" class="w3-tag w3-red w3-right">X</div>
        <div class="w3-center">input the web info</div>
        <input id="infoTitle" type="text" class="w3-input" placeholder="input title web here" value="<?php echo file("detail.txt")[0]; ?> ">
        <input id="infoDesc" type="text" class="w3-input" placeholder="input description web here" value="<?php echo file("detail.txt")[1]; ?> ">
        <input id="infoImage" type="text" class="w3-input" placeholder="url image here" value="<?php echo file("detail.txt")[2]; ?> ">
            <img id="infoTomb" class="w3-round w3-border w3-margin w3-border-yellow">
            <script>document.getElementById("infoTomb").setAttribute("src",document.getElementById("infoImage").value);document.getElementById("infoTomb").style.width= "50px";</script>
        <input type="text" id="fbid" class="w3-input w3-margin-bottom" placeholder="input fb id here" value="<?php if(file_exists("fbid.txt")){echo file_get_contents("fbid.txt");}else{echo "";} ?>">
        <button id="iSave" class="w3-blue-grey w3-right">save</button>
        </div>
        <div id="signup" class="w3-container w3-blue-grey w3-padding w3-hide">
            <div id="closeSignup" class="w3-tag w3-right w3-red">X</div>
            <input id="signuptext" class="w3-input" type="text" placeholder="create first unik name here">
            <button id="signupBtn" class="w3-blue-grey w3-right">signup</button>
        </div>
        <div id="signin" class="w3-container w3-blue-grey w3-padding w3-hide">
            <div id="closeSignin" class="w3-tag w3-right w3-red ">X</div>
            <input id="signintext" class="w3-input" type="text" placeholder="input unik name here">
            <button id="signinBtn" class="w3-blue-grey w3-right">signin</button>
        </div>
        <input type="text" id="txa" class="w3-content w3-bottom w3-input w3-border w3-border-blue-grey w3-light-grey w3-hide" placeholder="text normalize">
        <script>
        var signup;
        var singin;
        
        </script>
        <?php 
        if(file_exists("malik.txt") && isset($_SESSION['name'])){
            echo "<script>signup = false;signin = false;</script>";
        }else{
           if(file_exists("malik.txt")){
              echo "<script>signup = false;signin = true;</script>";
           }else{
             echo "<script>signup = true;signin = false;</script>"; 
           }
        }
        ?>
        <script>
            var tItm = ["nLine","insert","remove","tool","lib","page","textz","info","signout","toSave"];
            var insItm = ["line","image","link","youtube"];
            var rmvItm = ["removeOne","removeAll"];
            var tlItm = ["background","textColor","padding","margin","width","height","font","fontZise","align"]
            var bgItm = ["LightSteelBlue ","LightSeaGreen","LightSkyBlue","RosyBrown","CornflowerBlue","CadetBlue","DarkCyan","DodgerBlue","AntiqueWhite","Beige","BurlyWood","Chocolate","Coral","Brown","Crimson","DarkRed","DeepPink","Fuchsia","Magenta","Orange","OrangeRed","YellowGreen","SpringGreen","SlateGrey","SeaGreen","PaleGreen","OliveDrab","white","black","green","purple","red","yellow","brown","blue"];
            var fontItm = ["Arial","Helvetica","Times New Roman","Times","Courier New","Verdana","Georgia","Palatino","Garamond","Bookman","Comic Sans MS","Trebuchet MS","Arial Black","Impact"];
            var trgEdt;
            var trgImg;
            var insertTo = document.getElementById("insertTo");
            
            if(signup == false && signin == false){
                
            }else{
                if(signup == true){
                    gi("signup").classList.remove("w3-hide");
                    gi("signupBtn").onclick = function(){
                        if(gi("signuptext").value.length < 10){
                            alert("create 10 caracter of unik name");
                        }else{
                            var xsup = new XMLHttpRequest();
                            xsup.open("GET","order.php?sup="+gi("signuptext").value,true);
                            xsup.send();
                            xsup.onreadystatechange = function(){
                                if(this.readyState == 4 && this.status == 200){
                                    alert(this.responseText);
                                    window.location.reload();
                                }
                            };
                        }
                    }
                    
                }else{
                    gi("signin").classList.remove("w3-hide");
                    gi("signinBtn").onclick = function(){
                    if(gi("signintext").value.length < 10){
                            alert("must 10 caracter of unik name");
                        }else{
                            var xsin = new XMLHttpRequest();
                            xsin.open("GET","order.php?sin="+gi("signintext").value,true);
                            xsin.send();
                            xsin.onreadystatechange = function(){
                                if(this.readyState == 4 && this.status == 200){
                                    alert(this.responseText);
                                    window.location.reload();
                                }
                            };
                        }
                     }
                }
            }
            
            
            for(var i=0;i<tItm.length;i++){
                var t1 = document.createElement("BUTTON");
                var t2 = document.createTextNode(tItm[i]);
                t1.setAttribute("id",tItm[i]);
                t1.setAttribute("class","w3-ripple w3-blue-grey");
                t1.style.cursor = "pointer";
                t1.appendChild(t2);
                gi("c2").appendChild(t1);
            }
            for(var i=0;i<insItm.length;i++){
                var ins1 = document.createElement("BUTTON");
                var ins2 = document.createTextNode(insItm[i]);
                ins1.setAttribute("class","w3-blue-grey");
                ins1.setAttribute("id",insItm[i]);
                ins1.style.cursor = "pointer";
                ins1.appendChild(ins2);
                insertTo.appendChild(ins1);
            }
            for(var i=0;i<rmvItm.length;i++){
                var rm1 = document.createElement("BUTTON");
                var rm2 = document.createTextNode(rmvItm[i]);
                rm1.setAttribute("class","w3-blue-grey");
                rm1.setAttribute("id",rmvItm[i]);
                rm1.appendChild(rm2);
                gi("remove1").appendChild(rm1);
            }
            for(var i=0;i<tlItm.length;i++){
                var rg1 = document.createElement("INPUT");
                rg1.setAttribute("type","range");
                rg1.setAttribute("class","range w3-hide");
                rg1.setAttribute("id",tlItm[i]+"a");
                rg1.style.width = "100%";
                rg1.setAttribute("step","1");
                
                var tl1 = document.createElement("BUTTON");
                var tl2 = document.createTextNode(tlItm[i]);
                tl1.appendChild(tl2);
                tl1.setAttribute("class","w3-blue-grey tool");
                tl1.setAttribute("id",tlItm[i]);
                gi("rangeCon").appendChild(rg1);
                gi("tool1").appendChild(tl1);  
            }
            
            
            document.body.onclick = function(e){
                console.log(e.target.id);
                saveTmp();
                getTrgEdt(e);
                console.log(trgEdt); 
                showRg(e);
                
                
                var edRm = new XMLHttpRequest();
                if(e.target.className.includes("editBtn")){
                    edRm.onreadystatechange = function(){
                    if(this.readyState == 4 && this.status == 200){
                    if(this.responseText.includes("<div")){
                        var editX = this.responseText;
                        gi("c4").innerHTML = this.responseText;
                    }
                    }
                    };
                   edRm.open("GET","order.php?edt="+e.target.id,true);
                   edRm.send();
                }
                if(e.target.className.includes("removeBtn")){
                    edRm.onreadystatechange = function(){
                    if(this.readyState == 4 && this.status == 200){
                    if(this.responseText.includes("deleted")){
                    window.location.reload();
                    }
                    }
                    };
                   edRm.open("GET","order.php?rmv="+e.target.id,true); 
                   edRm.send();
                }
                
                
            }
            document.body.onmouseover = function(e){
                markLine(e);
            }
            document.body.onmouseout= function(e){
                removemarkLine(e);
            }
            document.ondragover = function(e){
               e.preventDefault();
            }
            
            document.body.addEventListener('drop', drop, false);
            
            
            gi("nLine").onclick = function(){
                nLine();
            }
            gi("insert").onclick = function(){
               insertTo.classList.toggle("w3-hide");
            }
            
            gi("line").onclick = function(){
                line();
            }
            gi("image").onclick =function(){
                insertImg();
            }
            gi("link").onclick = function(){
                createLink();
            }
            gi("youtube").onclick = function(){
                ambedYoutube();
            }
            gi("remove").onclick = function(){
                gi("remove1").classList.toggle("w3-hide");
            }
            gi("closeRemove1").onclick = function(){
                gi("remove1").classList.add("w3-hide");
            }
            gi("removeOne").onclick = function(){
                rmOne();
            }
            gi("removeAll").onclick = function(){
                rmAll();
            }
            gi("toSave").onclick = function(){
                pripareSave();
            }
            gi("closeSave1").onclick = function(){
                gi("save1").classList.add("w3-hide");
            }
            gi("finalSave1").onclick = function(){
                finalSave();
            }
            gi("tool").onclick = function(){
                gi("tool1").classList.toggle("w3-hide");
            }
            gi("closeTool1").onclick = function(){
                 gi("tool1").classList.add("w3-hide");
            }
            gi("backgrounda").oninput = function(){
                if(trgEdt == undefined){
                    alert("select the line first");
                }else{
                    var backgrounda = document.getElementById("backgrounda");
                    backgrounda.setAttribute("min","0");
                    backgrounda.setAttribute("max",bgItm.length-1);
                    gi("rgInfo").innerHTML = bgItm[backgrounda.value];
                    trgEdt.style.background = bgItm[backgrounda.value];
                }
            }
            gi("textColora").oninput = function(){
                if(trgEdt == undefined){
                    alert("select the line first");
                }else{
                    var textColora = document.getElementById("textColora");
                    textColora.setAttribute("min","0");
                    textColora.setAttribute("max",bgItm.length-1);
                    gi("rgInfo").innerHTML = bgItm[textColora.value];
                    trgEdt.style.color = bgItm[textColora.value];
                }
            }
            gi("paddinga").oninput = function(){
                if(trgEdt == undefined){
                    alert("select the line first");
                }else{
                    var paddinga = document.getElementById("paddinga");
                    paddinga.setAttribute("min","0");
                    paddinga.setAttribute("max","64");
                    gi("rgInfo").innerHTML = paddinga.value;
                    trgEdt.style.padding = paddinga.value+"px";
                }
            }
            gi("margina").oninput = function(){
                if(trgEdt == undefined){
                    alert("select the line first");
                }else{
                    var margina = document.getElementById("margina");
                    margina.setAttribute("min","0");
                    margina.setAttribute("max","64");
                    gi("rgInfo").innerHTML = margina.value;
                    trgEdt.style.margin = margina.value+"px";
                }
            }
            gi("widtha").oninput = function(){
                if(trgEdt == undefined){
                    alert("select the line first");
                }else{
                    var widtha = document.getElementById("widtha");
                    widtha.setAttribute("min","0");
                    widtha.setAttribute("max","100");
                    gi("rgInfo").innerHTML = widtha.value+"%";
                    trgEdt.style.width = widtha.value+"%";
                }
            }
            gi("heighta").oninput = function(){
                if(trgEdt == undefined){
                    alert("select the line first");
                }else{
                    var heighta = document.getElementById("heighta");
                    heighta.setAttribute("min","0");
                    heighta.setAttribute("max","1000");
                    gi("rgInfo").innerHTML = heighta.value+"px";
                    trgEdt.style.height = heighta.value+"px";
                }
            }
            gi("fonta").oninput = function(){
                if(trgEdt == undefined){
                    alert("select the line first");
                }else{
                    var fonta = document.getElementById("fonta");
                    fonta.setAttribute("min","0");
                    fonta.setAttribute("max",fontItm.length-1);
                    gi("rgInfo").innerHTML = fontItm[fonta.value];
                    trgEdt.style.fontFamily = fontItm[fonta.value];
                }
            }
            gi("fontZisea").oninput = function(){
                if(trgEdt == undefined){
                    alert("select the line first");
                }else{
                    var fontZisea = document.getElementById("fontZisea");
                    fontZisea.setAttribute("min","0");
                    fontZisea.setAttribute("max","64");
                    gi("rgInfo").innerHTML = fontZisea.value+"px";
                    trgEdt.style.fontSize = fontZisea.value+"px";
                }
            }
            gi("aligna").oninput = function(){
                if(trgEdt == undefined){
                    alert("select the line first");
                }else{
                    var alignVal = ["left","center","right"];
                    var aligna = document.getElementById("aligna");
                    aligna.setAttribute("min","0");
                    aligna.setAttribute("max","3");
                    aligna.setAttribute("step","1");
                    gi("rgInfo").innerHTML = alignVal[aligna.value];
                    trgEdt.style.textAlign = alignVal[aligna.value];
                }
            }
            gi("lib").onclick = function(){
                gi("lib1").classList.toggle("w3-hide");
            }
            gi("closeLib1").onclick = function(){
                gi("lib1").classList.add("w3-hide");
            }
            gi("uplLib").onclick = function(){
                upl();
            }
            gi("page").onclick = function(){
                gi("pgResult").classList.toggle("w3-hide");
            }
            gi("closePage").onclick = function(){
                gi("pgResult").classList.add("w3-hide");
            }
            gi("info").onclick = function(){
                gi("webInfo").classList.toggle("w3-hide");
            }
            gi("closeInfo").onclick = function(){
                gi("webInfo").classList.add("w3-hide");
            }
            gi("iSave").onclick = function(){
                var xmInfo = new XMLHttpRequest();
                xmInfo.open("GET","order.php?itl="+gi("infoTitle").value+"&idc="+gi("infoDesc").value+"&iic="+gi("infoImage").value+"&fb="+gi("fbid").value,true);
                xmInfo.send();
                xmInfo.onreadystatechange = function(){
                    if(this.readyState == 4 && this.status == 200){
                        if(this.responseText.includes("detail")){
                            alert("detail update");
                        }
                    }
                };
            }
            gi("signout").onclick = function(){
                window.location.href = "signout.php";
            }
            gi("txa").onchange = function(){
                if(trgEdt == undefined){
                    alert("select line first");
                    window.location.reload();
                }else{
                    trgEdt.innerHTML = gi("txa").value;
                    gi("txa").value = "";
                    
                }
            }
            gi("textz").onclick = function(){
                gi("txa").classList.toggle("w3-hide");
            }
            // ###### function #########
            window.onscroll = function(){
                if(document.body.scrollTop > 50 || document.documentElement.scrollTop >50){
                    gi("c2").classList.add("w3-top");
                    gi("c2").style.width = "540px";
                    
                }else{
                     gi("c2").classList.remove("w3-top");
                }
            }
            function gi(...arg){
                return document.getElementById(arg[0]);
            }
            function nLine(...arg){
                var nl1 = document.createElement("div");
                var nl2 = document.createTextNode("edit me");
                nl1.setAttribute("class","edit w3-animate-left");
                nl1.contentEditable = true;
                nl1.appendChild(nl2);
                gi("c4").appendChild(nl1);
                
            }
            function saveTmp(...arg){
                var tm1 = [];
                var tm2 = document.getElementsByClassName("edit");
                for(var i=0;i<tm2.length;i++){
                    var tm3 = [];
                    var tm4 = new XMLSerializer();
                        tm3 = tm4.serializeToString(tm2[i]);
                        tm1.push(tm3);
                }
                var tm5 = tm1.join("");
                var tm6 = encodeURI(tm5);
                var tm7 = new XMLHttpRequest();
                tm7.onreadystatechange = function(){
                    if(this.readyState == 4 && this.status == 200){
                        console.log(this.responseText);
                    }
                };
                tm7.open("GET","order.php?tmp="+tm6,true);
                tm7.send();
            }
            function getTrgEdt(...arg){
                var tg1 = document.getElementsByClassName("edit");
                if(arg[0].target.className.includes("edit")){
                    trgEdt = tg1[Array.from(arg[0].target.parentElement.children).indexOf(arg[0].target)];
                }
            }
            function line(...arg){
               if(trgEdt == undefined){
                   alert("please select line to insert");
               }else{
                   var ln1 = document.createElement("DIV");
                   var ln2  = document.createTextNode("edit me");
                   ln1.setAttribute("class","edit w3-animate-left");
                   ln1.appendChild(ln2);
                   ln1.contentEditable = true;
                   trgEdt.parentElement.insertBefore(ln1,trgEdt);
               } 
            }
            function insertImg(...arg){
                if(trgEdt == undefined){
                    alert("please select line to insert image");
                }else{
                var iim1 = prompt("insert url of image");
                    console.log(iim1);
                if(iim1 == null || iim1 == " "){
                    console.log("insert image canseled");
                }else{
                    var iim2 = document.createElement("IMG");
                    iim2.setAttribute("src",iim1);
                    iim2.setAttribute("class","editImg edit w3-animate-left");
                    iim2.removeAttribute("style");
                    iim2.removeAttribute("width");
                    iim2.removeAttribute("height");
                    iim2.style.width = "100%";
                    trgEdt.parentElement.insertBefore(iim2,trgEdt);
                } 
                }  
            }
            function markLine(...arg){
                if(arg[0].target.className.includes("edit")){
                    arg[0].target.classList.add("w3-border");
                    arg[0].target.classList.add("w3-border-yellow");
                }
            }
            function removemarkLine(...arg){
                if(arg[0].target.className.includes("edit")){
                   arg[0].target.classList.remove("w3-border");
                    arg[0].target.classList.remove("w3-border-yellow");
                }
            }
            function createLink(){
                if(trgEdt == undefined){
                    alert("select the text first");
                }else{
                   var lk1 = prompt("insert url link here");
                    if(lk1 == null || lk1 == " "){
                        console.log("link canseled");
                    }else{
                        var lk2 = document.createElement("A");
                        lk2.setAttribute("href",lk1);
                        window.getSelection().getRangeAt(0).surroundContents(lk2);
                    }
                }
            }
            function ambedYoutube(){
                if(trgEdt == undefined){
                    alert("select the line first");
                }else{
                   var yt1 = prompt("insert url youtube here");
                    if(yt1 == null || yt1 == " "){
                        console.log("link canseled");
                    }else{
                        var yt2 = document.createElement("IFRAME");
                        var yt3 = "^.*(?:youtu.be\/|v\/|e\/|u\/\w+\/|embed\/|v=)([^#\&\?]*).*";
                        var yt4 = yt1.match(yt3);
                        
                        yt2.setAttribute("src","https://www.youtube.com/embed/"+yt4[1]);
                        yt2.setAttribute("class","yEdit edit w3-padding");
                        yt2.setAttribute("width","100%");
                        yt2.setAttribute("height","100%");
                        yt2.setAttribute("frameborder","0");
                        yt2.setAttribute("allowfullscreen",true);
                        yt2.contentEditable = true;
                        trgEdt.parentElement.insertBefore(yt2,trgEdt.nextElementSibling);
                    }
                }
            }
            function rmOne(){
                if(trgEdt == undefined){
                    alert("select the line that want to remove");
                }else{
                    trgEdt.remove();
                }
            }
            function rmAll(){
                gi("c4").innerHTML = " ";
            }
            function pripareSave(){
                var se1 = document.getElementsByClassName("editImg");
                var se2 = document.getElementById("urlImg1");
                var se3 = document.getElementsByClassName("edit");
                var se4 = gi("title1");
                var se5 = gi("desc1");
                if(se1[0] == undefined){
                    alert("please insert image one or more in line editor");
                }else{
                    se4.value = se3[0].innerText;
                    se5.value = se3[1].innerText;
                    se2.value = se1[0].src;
                    gi("tumb").setAttribute("src",se1[0].src);
                    gi("tumb").style.width = "30%";
                    gi("save1").classList.remove("w3-hide"); 
                    
                }
                
            }
            function finalSave(){
                var fs1 = document.getElementById("title1");
                var fs2 = document.getElementById("desc1");
                var fs3 = document.getElementById("urlImg1");
                var fs4 = document.getElementsByClassName("editImg");
                
                if(fs1.value.length == 0 || fs2.value.length == 0 || fs3.value.length == 0){
                    alert("please fill all field complately")
                }else{
                    var finalXm = new XMLHttpRequest();
                    finalXm.onreadystatechange = function(){
                       if(this.readyState == 4 && this.status == 200){
                           console.log(this.responseText);
                           if(this.responseText.includes("save success")){
                               gi("save1").classList.add("w3-hide"); 
                               window.location.reload();
                           }
                       } 
                    };
                    finalXm.open("GET","order.php?tl="+fs1.value+"&dc="+fs2.value+"&im="+fs3.value,true);
                    finalXm.send();
                }
    
            }
            function showRg(...arg){
                var getRg = document.getElementsByClassName("range");
                for(var i=0;i<getRg.length;i++){
                 getRg[i].classList.add("w3-hide");
                }
                if(arg[0].target.className.includes("tool")){
                    gi(arg[0].target.id+"a").classList.remove("w3-hide");
                }
            }
            function upl(){
                gi("pilih").click();
                gi("pilih").onchange = function(){
                    gi("kirim").click();
                }
                gi("frm").addEventListener("submit",function(e){
                    e.preventDefault();
                    var xup = new XMLHttpRequest();
                        xup.onreadystatechange = function(){
                            if(this.readyState == 4 && this.status == 200){
                               console.log(this.responseText);
                                window.location.reload();
                            }
                        }
                        xup.open("POST","order.php",true);
                        xup.send(new FormData(gi("frm")));
                });
            }
            function drop(evt) {
                if(trgEdt == undefined){
                   
                }else{
                    evt.stopPropagation();
                    evt.preventDefault(); 
                    var imageUrl = evt.dataTransfer.getData('text/html');
                    var rex = /src="?([^"\s]+)"?\s*/;
                    var url, res;
                    url = rex.exec(imageUrl);
                   if(url == null){
                       var inpt = document.createElement("DIV");
                       inpt.innerHTML = imageUrl;
                       trgEdt.innerText += inpt.innerText;
                   }else{
                       var xdimg = new XMLHttpRequest();
                       xdimg.onreadystatechange = function(){
                         if(this.readyState == 4 && this.status == 200){
                             if(this.responseText.includes("img")){
                                 var nimag = document.createElement("IMG");
                                 nimag.setAttribute("src",this.responseText);
                                 nimag.setAttribute("class","editImg edit w3-animate-left");
                                 trgEdt.parentElement.insertBefore(nimag,trgEdt);
                             }
                         }  
                       }
                       xdimg.open("GET","order.php?idl="+encodeURI(url[1]),true);
                       xdimg.send();
                   }

                }
            }
                
        </script>
    
    </body>
</html>

<?php 
if(!file_exists("tmp.txt")){
    file_put_contents("tmp.txt"," ");
}
if(!file_exists("page")){
    mkdir("page");
}
if(!file_exists("og")){
    mkdir("og");
}
if(!file_exists("lib")){
    mkdir("lib");
}
if(!file_exists("detail.txt")){
    $detail = "this title web\nini deskribsi web\nhttps://ruclip.com/chimg/23/UCVSX9CCrXbcGqwrDL8EIcWw.jpg";
    file_put_contents("detail.txt",$detail);
}
if(file_exists(".htaccess")){
    
}else{
    $err = "'<h1>Zonk</h1>'";
    file_put_contents(".htaccess","RewriteEngine on\nRewriteRule ^([a-zA-Z0-9_-]+)?$ index.php?pg=$1 [NC,L]\nErrorDocument 404 ".$err);
    
}
if(file_exists("signout.php")){
    
}else{
    $signout = '<?php session_start();if(session_destroy()){header("location:index.php");}?>';
    file_put_contents("signout.php",$signout);
}
if(file_exists("w3css.css")){
    
}else{
    $w3css = '/* W3.CSS 4.10 February 2018 by Jan Egil and Borge Refsnes */
html{box-sizing:border-box}*,*:before,*:after{box-sizing:inherit}
/* Extract from normalize.css by Nicolas Gallagher and Jonathan Neal git.io/normalize */
html{-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}body{margin:0}
article,aside,details,figcaption,figure,footer,header,main,menu,nav,section,summary{display:block}
audio,canvas,progress,video{display:inline-block}progress{vertical-align:baseline}
audio:not([controls]){display:none;height:0}[hidden],template{display:none}
a{background-color:transparent;-webkit-text-decoration-skip:objects}
a:active,a:hover{outline-width:0}abbr[title]{border-bottom:none;text-decoration:underline;text-decoration:underline dotted}
dfn{font-style:italic}mark{background:#ff0;color:#000}
small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}
sub{bottom:-0.25em}sup{top:-0.5em}figure{margin:1em 40px}img{border-style:none}svg:not(:root){overflow:hidden}
code,kbd,pre,samp{font-family:monospace,monospace;font-size:1em}hr{box-sizing:content-box;height:0;overflow:visible}
button,input,select,textarea{font:inherit;margin:0}optgroup{font-weight:bold}
button,input{overflow:visible}button,select{text-transform:none}
button,html [type=button],[type=reset],[type=submit]{-webkit-appearance:button}
button::-moz-focus-inner, [type=button]::-moz-focus-inner, [type=reset]::-moz-focus-inner, [type=submit]::-moz-focus-inner{border-style:none;padding:0}
button:-moz-focusring, [type=button]:-moz-focusring, [type=reset]:-moz-focusring, [type=submit]:-moz-focusring{outline:1px dotted ButtonText}
fieldset{border:1px solid #c0c0c0;margin:0 2px;padding:.35em .625em .75em}
legend{color:inherit;display:table;max-width:100%;padding:0;white-space:normal}textarea{overflow:auto}
[type=checkbox],[type=radio]{padding:0}
[type=number]::-webkit-inner-spin-button,[type=number]::-webkit-outer-spin-button{height:auto}
[type=search]{-webkit-appearance:textfield;outline-offset:-2px}
[type=search]::-webkit-search-cancel-button,[type=search]::-webkit-search-decoration{-webkit-appearance:none}
::-webkit-input-placeholder{color:inherit;opacity:0.54}
::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}
/* End extract */
html,body{font-family:Verdana,sans-serif;font-size:15px;line-height:1.5}html{overflow-x:hidden}
h1{font-size:36px}h2{font-size:30px}h3{font-size:24px}h4{font-size:20px}h5{font-size:18px}h6{font-size:16px}.w3-serif{font-family:serif}
h1,h2,h3,h4,h5,h6{font-family:"Segoe UI",Arial,sans-serif;font-weight:400;margin:10px 0}.w3-wide{letter-spacing:4px}
hr{border:0;border-top:1px solid #eee;margin:20px 0}
.w3-image{max-width:100%;height:auto}img{vertical-align:middle}a{color:inherit}
.w3-table,.w3-table-all{border-collapse:collapse;border-spacing:0;width:100%;display:table}.w3-table-all{border:1px solid #ccc}
.w3-bordered tr,.w3-table-all tr{border-bottom:1px solid #ddd}.w3-striped tbody tr:nth-child(even){background-color:#f1f1f1}
.w3-table-all tr:nth-child(odd){background-color:#fff}.w3-table-all tr:nth-child(even){background-color:#f1f1f1}
.w3-hoverable tbody tr:hover,.w3-ul.w3-hoverable li:hover{background-color:#ccc}.w3-centered tr th,.w3-centered tr td{text-align:center}
.w3-table td,.w3-table th,.w3-table-all td,.w3-table-all th{padding:8px 8px;display:table-cell;text-align:left;vertical-align:top}
.w3-table th:first-child,.w3-table td:first-child,.w3-table-all th:first-child,.w3-table-all td:first-child{padding-left:16px}
.w3-btn,.w3-button{border:none;display:inline-block;padding:8px 16px;vertical-align:middle;overflow:hidden;text-decoration:none;color:inherit;background-color:inherit;text-align:center;cursor:pointer;white-space:nowrap}
.w3-btn:hover{box-shadow:0 8px 16px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19)}
.w3-btn,.w3-button{-webkit-touch-callout:none;-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}   
.w3-disabled,.w3-btn:disabled,.w3-button:disabled{cursor:not-allowed;opacity:0.3}.w3-disabled *,:disabled *{pointer-events:none}
.w3-btn.w3-disabled:hover,.w3-btn:disabled:hover{box-shadow:none}
.w3-badge,.w3-tag{background-color:#000;color:#fff;display:inline-block;padding-left:8px;padding-right:8px;text-align:center}.w3-badge{border-radius:50%}
.w3-ul{list-style-type:none;padding:0;margin:0}.w3-ul li{padding:8px 16px;border-bottom:1px solid #ddd}.w3-ul li:last-child{border-bottom:none}
.w3-tooltip,.w3-display-container{position:relative}.w3-tooltip .w3-text{display:none}.w3-tooltip:hover .w3-text{display:inline-block}
.w3-ripple:active{opacity:0.5}.w3-ripple{transition:opacity 0s}
.w3-input{padding:8px;display:block;border:none;border-bottom:1px solid #ccc;width:100%}
.w3-select{padding:9px 0;width:100%;border:none;border-bottom:1px solid #ccc}
.w3-dropdown-click,.w3-dropdown-hover{position:relative;display:inline-block;cursor:pointer}
.w3-dropdown-hover:hover .w3-dropdown-content{display:block}
.w3-dropdown-hover:first-child,.w3-dropdown-click:hover{background-color:#ccc;color:#000}
.w3-dropdown-hover:hover > .w3-button:first-child,.w3-dropdown-click:hover > .w3-button:first-child{background-color:#ccc;color:#000}
.w3-dropdown-content{cursor:auto;color:#000;background-color:#fff;display:none;position:absolute;min-width:160px;margin:0;padding:0;z-index:1}
.w3-check,.w3-radio{width:24px;height:24px;position:relative;top:6px}
.w3-sidebar{height:100%;width:200px;background-color:#fff;position:fixed!important;z-index:1;overflow:auto}
.w3-bar-block .w3-dropdown-hover,.w3-bar-block .w3-dropdown-click{width:100%}
.w3-bar-block .w3-dropdown-hover .w3-dropdown-content,.w3-bar-block .w3-dropdown-click .w3-dropdown-content{min-width:100%}
.w3-bar-block .w3-dropdown-hover .w3-button,.w3-bar-block .w3-dropdown-click .w3-button{width:100%;text-align:left;padding:8px 16px}
.w3-main,#main{transition:margin-left .4s}
.w3-modal{z-index:3;display:none;padding-top:100px;position:fixed;left:0;top:0;width:100%;height:100%;overflow:auto;background-color:rgb(0,0,0);background-color:rgba(0,0,0,0.4)}
.w3-modal-content{margin:auto;background-color:#fff;position:relative;padding:0;outline:0;width:600px}
.w3-bar{width:100%;overflow:hidden}.w3-center .w3-bar{display:inline-block;width:auto}
.w3-bar .w3-bar-item{padding:8px 16px;float:left;width:auto;border:none;display:block;outline:0}
.w3-bar .w3-dropdown-hover,.w3-bar .w3-dropdown-click{position:static;float:left}
.w3-bar .w3-button{white-space:normal}
.w3-bar-block .w3-bar-item{width:100%;display:block;padding:8px 16px;text-align:left;border:none;white-space:normal;float:none;outline:0}
.w3-bar-block.w3-center .w3-bar-item{text-align:center}.w3-block{display:block;width:100%}
.w3-responsive{display:block;overflow-x:auto}
.w3-container:after,.w3-container:before,.w3-panel:after,.w3-panel:before,.w3-row:after,.w3-row:before,.w3-row-padding:after,.w3-row-padding:before,
.w3-cell-row:before,.w3-cell-row:after,.w3-clear:after,.w3-clear:before,.w3-bar:before,.w3-bar:after{content:"";display:table;clear:both}
.w3-col,.w3-half,.w3-third,.w3-twothird,.w3-threequarter,.w3-quarter{float:left;width:100%}
.w3-col.s1{width:8.33333%}.w3-col.s2{width:16.66666%}.w3-col.s3{width:24.99999%}.w3-col.s4{width:33.33333%}
.w3-col.s5{width:41.66666%}.w3-col.s6{width:49.99999%}.w3-col.s7{width:58.33333%}.w3-col.s8{width:66.66666%}
.w3-col.s9{width:74.99999%}.w3-col.s10{width:83.33333%}.w3-col.s11{width:91.66666%}.w3-col.s12{width:99.99999%}
@media (min-width:601px){.w3-col.m1{width:8.33333%}.w3-col.m2{width:16.66666%}.w3-col.m3,.w3-quarter{width:24.99999%}.w3-col.m4,.w3-third{width:33.33333%}
.w3-col.m5{width:41.66666%}.w3-col.m6,.w3-half{width:49.99999%}.w3-col.m7{width:58.33333%}.w3-col.m8,.w3-twothird{width:66.66666%}
.w3-col.m9,.w3-threequarter{width:74.99999%}.w3-col.m10{width:83.33333%}.w3-col.m11{width:91.66666%}.w3-col.m12{width:99.99999%}}
@media (min-width:993px){.w3-col.l1{width:8.33333%}.w3-col.l2{width:16.66666%}.w3-col.l3{width:24.99999%}.w3-col.l4{width:33.33333%}
.w3-col.l5{width:41.66666%}.w3-col.l6{width:49.99999%}.w3-col.l7{width:58.33333%}.w3-col.l8{width:66.66666%}
.w3-col.l9{width:74.99999%}.w3-col.l10{width:83.33333%}.w3-col.l11{width:91.66666%}.w3-col.l12{width:99.99999%}}
.w3-content{max-width:980px;margin:auto}.w3-rest{overflow:hidden}
.w3-cell-row{display:table;width:100%}.w3-cell{display:table-cell}
.w3-cell-top{vertical-align:top}.w3-cell-middle{vertical-align:middle}.w3-cell-bottom{vertical-align:bottom}
.w3-hide{display:none!important}.w3-show-block,.w3-show{display:block!important}.w3-show-inline-block{display:inline-block!important}
@media (max-width:600px){.w3-modal-content{margin:0 10px;width:auto!important}.w3-modal{padding-top:30px}
.w3-dropdown-hover.w3-mobile .w3-dropdown-content,.w3-dropdown-click.w3-mobile .w3-dropdown-content{position:relative}	
.w3-hide-small{display:none!important}.w3-mobile{display:block;width:100%!important}.w3-bar-item.w3-mobile,.w3-dropdown-hover.w3-mobile,.w3-dropdown-click.w3-mobile{text-align:center}
.w3-dropdown-hover.w3-mobile,.w3-dropdown-hover.w3-mobile .w3-btn,.w3-dropdown-hover.w3-mobile .w3-button,.w3-dropdown-click.w3-mobile,.w3-dropdown-click.w3-mobile .w3-btn,.w3-dropdown-click.w3-mobile .w3-button{width:100%}}
@media (max-width:768px){.w3-modal-content{width:500px}.w3-modal{padding-top:50px}}
@media (min-width:993px){.w3-modal-content{width:900px}.w3-hide-large{display:none!important}.w3-sidebar.w3-collapse{display:block!important}}
@media (max-width:992px) and (min-width:601px){.w3-hide-medium{display:none!important}}
@media (max-width:992px){.w3-sidebar.w3-collapse{display:none}.w3-main{margin-left:0!important;margin-right:0!important}}
.w3-top,.w3-bottom{position:fixed;width:100%;z-index:1}.w3-top{top:0}.w3-bottom{bottom:0}
.w3-overlay{position:fixed;display:none;width:100%;height:100%;top:0;left:0;right:0;bottom:0;background-color:rgba(0,0,0,0.5);z-index:2}
.w3-display-topleft{position:absolute;left:0;top:0}.w3-display-topright{position:absolute;right:0;top:0}
.w3-display-bottomleft{position:absolute;left:0;bottom:0}.w3-display-bottomright{position:absolute;right:0;bottom:0}
.w3-display-middle{position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%)}
.w3-display-left{position:absolute;top:50%;left:0%;transform:translate(0%,-50%);-ms-transform:translate(-0%,-50%)}
.w3-display-right{position:absolute;top:50%;right:0%;transform:translate(0%,-50%);-ms-transform:translate(0%,-50%)}
.w3-display-topmiddle{position:absolute;left:50%;top:0;transform:translate(-50%,0%);-ms-transform:translate(-50%,0%)}
.w3-display-bottommiddle{position:absolute;left:50%;bottom:0;transform:translate(-50%,0%);-ms-transform:translate(-50%,0%)}
.w3-display-container:hover .w3-display-hover{display:block}.w3-display-container:hover span.w3-display-hover{display:inline-block}.w3-display-hover{display:none}
.w3-display-position{position:absolute}
.w3-circle{border-radius:50%}
.w3-round-small{border-radius:2px}.w3-round,.w3-round-medium{border-radius:4px}.w3-round-large{border-radius:8px}.w3-round-xlarge{border-radius:16px}.w3-round-xxlarge{border-radius:32px}
.w3-row-padding,.w3-row-padding>.w3-half,.w3-row-padding>.w3-third,.w3-row-padding>.w3-twothird,.w3-row-padding>.w3-threequarter,.w3-row-padding>.w3-quarter,.w3-row-padding>.w3-col{padding:0 8px}
.w3-container,.w3-panel{padding:0.01em 16px}.w3-panel{margin-top:16px;margin-bottom:16px}
.w3-code,.w3-codespan{font-family:Consolas,"courier new";font-size:16px}
.w3-code{width:auto;background-color:#fff;padding:8px 12px;border-left:4px solid #4CAF50;word-wrap:break-word}
.w3-codespan{color:crimson;background-color:#f1f1f1;padding-left:4px;padding-right:4px;font-size:110%}
.w3-card,.w3-card-2{box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12)}
.w3-card-4,.w3-hover-shadow:hover{box-shadow:0 4px 10px 0 rgba(0,0,0,0.2),0 4px 20px 0 rgba(0,0,0,0.19)}
.w3-spin{animation:w3-spin 2s infinite linear}@keyframes w3-spin{0%{transform:rotate(0deg)}100%{transform:rotate(359deg)}}
.w3-animate-fading{animation:fading 10s infinite}@keyframes fading{0%{opacity:0}50%{opacity:1}100%{opacity:0}}
.w3-animate-opacity{animation:opac 0.8s}@keyframes opac{from{opacity:0} to{opacity:1}}
.w3-animate-top{position:relative;animation:animatetop 0.4s}@keyframes animatetop{from{top:-300px;opacity:0} to{top:0;opacity:1}}
.w3-animate-left{position:relative;animation:animateleft 0.4s}@keyframes animateleft{from{left:-300px;opacity:0} to{left:0;opacity:1}}
.w3-animate-right{position:relative;animation:animateright 0.4s}@keyframes animateright{from{right:-300px;opacity:0} to{right:0;opacity:1}}
.w3-animate-bottom{position:relative;animation:animatebottom 0.4s}@keyframes animatebottom{from{bottom:-300px;opacity:0} to{bottom:0;opacity:1}}
.w3-animate-zoom {animation:animatezoom 0.6s}@keyframes animatezoom{from{transform:scale(0)} to{transform:scale(1)}}
.w3-animate-input{transition:width 0.4s ease-in-out}.w3-animate-input:focus{width:100%!important}
.w3-opacity,.w3-hover-opacity:hover{opacity:0.60}.w3-opacity-off,.w3-hover-opacity-off:hover{opacity:1}
.w3-opacity-max{opacity:0.25}.w3-opacity-min{opacity:0.75}
.w3-greyscale-max,.w3-grayscale-max,.w3-hover-greyscale:hover,.w3-hover-grayscale:hover{filter:grayscale(100%)}
.w3-greyscale,.w3-grayscale{filter:grayscale(75%)}.w3-greyscale-min,.w3-grayscale-min{filter:grayscale(50%)}
.w3-sepia{filter:sepia(75%)}.w3-sepia-max,.w3-hover-sepia:hover{filter:sepia(100%)}.w3-sepia-min{filter:sepia(50%)}
.w3-tiny{font-size:10px!important}.w3-small{font-size:12px!important}.w3-medium{font-size:15px!important}.w3-large{font-size:18px!important}
.w3-xlarge{font-size:24px!important}.w3-xxlarge{font-size:36px!important}.w3-xxxlarge{font-size:48px!important}.w3-jumbo{font-size:64px!important}
.w3-left-align{text-align:left!important}.w3-right-align{text-align:right!important}.w3-justify{text-align:justify!important}.w3-center{text-align:center!important}
.w3-border-0{border:0!important}.w3-border{border:1px solid #ccc!important}
.w3-border-top{border-top:1px solid #ccc!important}.w3-border-bottom{border-bottom:1px solid #ccc!important}
.w3-border-left{border-left:1px solid #ccc!important}.w3-border-right{border-right:1px solid #ccc!important}
.w3-topbar{border-top:6px solid #ccc!important}.w3-bottombar{border-bottom:6px solid #ccc!important}
.w3-leftbar{border-left:6px solid #ccc!important}.w3-rightbar{border-right:6px solid #ccc!important}
.w3-section,.w3-code{margin-top:16px!important;margin-bottom:16px!important}
.w3-margin{margin:16px!important}.w3-margin-top{margin-top:16px!important}.w3-margin-bottom{margin-bottom:16px!important}
.w3-margin-left{margin-left:16px!important}.w3-margin-right{margin-right:16px!important}
.w3-padding-small{padding:4px 8px!important}.w3-padding{padding:8px 16px!important}.w3-padding-large{padding:12px 24px!important}
.w3-padding-16{padding-top:16px!important;padding-bottom:16px!important}.w3-padding-24{padding-top:24px!important;padding-bottom:24px!important}
.w3-padding-32{padding-top:32px!important;padding-bottom:32px!important}.w3-padding-48{padding-top:48px!important;padding-bottom:48px!important}
.w3-padding-64{padding-top:64px!important;padding-bottom:64px!important}
.w3-left{float:left!important}.w3-right{float:right!important}
.w3-button:hover{color:#000!important;background-color:#ccc!important}
.w3-transparent,.w3-hover-none:hover{background-color:transparent!important}
.w3-hover-none:hover{box-shadow:none!important}
/* Colors */
.w3-amber,.w3-hover-amber:hover{color:#000!important;background-color:#ffc107!important}
.w3-aqua,.w3-hover-aqua:hover{color:#000!important;background-color:#00ffff!important}
.w3-blue,.w3-hover-blue:hover{color:#fff!important;background-color:#2196F3!important}
.w3-light-blue,.w3-hover-light-blue:hover{color:#000!important;background-color:#87CEEB!important}
.w3-brown,.w3-hover-brown:hover{color:#fff!important;background-color:#795548!important}
.w3-cyan,.w3-hover-cyan:hover{color:#000!important;background-color:#00bcd4!important}
.w3-blue-grey,.w3-hover-blue-grey:hover,.w3-blue-gray,.w3-hover-blue-gray:hover{color:#fff!important;background-color:#607d8b!important}
.w3-green,.w3-hover-green:hover{color:#fff!important;background-color:#4CAF50!important}
.w3-light-green,.w3-hover-light-green:hover{color:#000!important;background-color:#8bc34a!important}
.w3-indigo,.w3-hover-indigo:hover{color:#fff!important;background-color:#3f51b5!important}
.w3-khaki,.w3-hover-khaki:hover{color:#000!important;background-color:#f0e68c!important}
.w3-lime,.w3-hover-lime:hover{color:#000!important;background-color:#cddc39!important}
.w3-orange,.w3-hover-orange:hover{color:#000!important;background-color:#ff9800!important}
.w3-deep-orange,.w3-hover-deep-orange:hover{color:#fff!important;background-color:#ff5722!important}
.w3-pink,.w3-hover-pink:hover{color:#fff!important;background-color:#e91e63!important}
.w3-purple,.w3-hover-purple:hover{color:#fff!important;background-color:#9c27b0!important}
.w3-deep-purple,.w3-hover-deep-purple:hover{color:#fff!important;background-color:#673ab7!important}
.w3-red,.w3-hover-red:hover{color:#fff!important;background-color:#f44336!important}
.w3-sand,.w3-hover-sand:hover{color:#000!important;background-color:#fdf5e6!important}
.w3-teal,.w3-hover-teal:hover{color:#fff!important;background-color:#009688!important}
.w3-yellow,.w3-hover-yellow:hover{color:#000!important;background-color:#ffeb3b!important}
.w3-white,.w3-hover-white:hover{color:#000!important;background-color:#fff!important}
.w3-black,.w3-hover-black:hover{color:#fff!important;background-color:#000!important}
.w3-grey,.w3-hover-grey:hover,.w3-gray,.w3-hover-gray:hover{color:#000!important;background-color:#9e9e9e!important}
.w3-light-grey,.w3-hover-light-grey:hover,.w3-light-gray,.w3-hover-light-gray:hover{color:#000!important;background-color:#f1f1f1!important}
.w3-dark-grey,.w3-hover-dark-grey:hover,.w3-dark-gray,.w3-hover-dark-gray:hover{color:#fff!important;background-color:#616161!important}
.w3-pale-red,.w3-hover-pale-red:hover{color:#000!important;background-color:#ffdddd!important}
.w3-pale-green,.w3-hover-pale-green:hover{color:#000!important;background-color:#ddffdd!important}
.w3-pale-yellow,.w3-hover-pale-yellow:hover{color:#000!important;background-color:#ffffcc!important}
.w3-pale-blue,.w3-hover-pale-blue:hover{color:#000!important;background-color:#ddffff!important}
.w3-text-amber,.w3-hover-text-amber:hover{color:#ffc107!important}
.w3-text-aqua,.w3-hover-text-aqua:hover{color:#00ffff!important}
.w3-text-blue,.w3-hover-text-blue:hover{color:#2196F3!important}
.w3-text-light-blue,.w3-hover-text-light-blue:hover{color:#87CEEB!important}
.w3-text-brown,.w3-hover-text-brown:hover{color:#795548!important}
.w3-text-cyan,.w3-hover-text-cyan:hover{color:#00bcd4!important}
.w3-text-blue-grey,.w3-hover-text-blue-grey:hover,.w3-text-blue-gray,.w3-hover-text-blue-gray:hover{color:#607d8b!important}
.w3-text-green,.w3-hover-text-green:hover{color:#4CAF50!important}
.w3-text-light-green,.w3-hover-text-light-green:hover{color:#8bc34a!important}
.w3-text-indigo,.w3-hover-text-indigo:hover{color:#3f51b5!important}
.w3-text-khaki,.w3-hover-text-khaki:hover{color:#b4aa50!important}
.w3-text-lime,.w3-hover-text-lime:hover{color:#cddc39!important}
.w3-text-orange,.w3-hover-text-orange:hover{color:#ff9800!important}
.w3-text-deep-orange,.w3-hover-text-deep-orange:hover{color:#ff5722!important}
.w3-text-pink,.w3-hover-text-pink:hover{color:#e91e63!important}
.w3-text-purple,.w3-hover-text-purple:hover{color:#9c27b0!important}
.w3-text-deep-purple,.w3-hover-text-deep-purple:hover{color:#673ab7!important}
.w3-text-red,.w3-hover-text-red:hover{color:#f44336!important}
.w3-text-sand,.w3-hover-text-sand:hover{color:#fdf5e6!important}
.w3-text-teal,.w3-hover-text-teal:hover{color:#009688!important}
.w3-text-yellow,.w3-hover-text-yellow:hover{color:#d2be0e!important}
.w3-text-white,.w3-hover-text-white:hover{color:#fff!important}
.w3-text-black,.w3-hover-text-black:hover{color:#000!important}
.w3-text-grey,.w3-hover-text-grey:hover,.w3-text-gray,.w3-hover-text-gray:hover{color:#757575!important}
.w3-text-light-grey,.w3-hover-text-light-grey:hover,.w3-text-light-gray,.w3-hover-text-light-gray:hover{color:#f1f1f1!important}
.w3-text-dark-grey,.w3-hover-text-dark-grey:hover,.w3-text-dark-gray,.w3-hover-text-dark-gray:hover{color:#3a3a3a!important}
.w3-border-amber,.w3-hover-border-amber:hover{border-color:#ffc107!important}
.w3-border-aqua,.w3-hover-border-aqua:hover{border-color:#00ffff!important}
.w3-border-blue,.w3-hover-border-blue:hover{border-color:#2196F3!important}
.w3-border-light-blue,.w3-hover-border-light-blue:hover{border-color:#87CEEB!important}
.w3-border-brown,.w3-hover-border-brown:hover{border-color:#795548!important}
.w3-border-cyan,.w3-hover-border-cyan:hover{border-color:#00bcd4!important}
.w3-border-blue-grey,.w3-hover-border-blue-grey:hover,.w3-border-blue-gray,.w3-hover-border-blue-gray:hover{border-color:#607d8b!important}
.w3-border-green,.w3-hover-border-green:hover{border-color:#4CAF50!important}
.w3-border-light-green,.w3-hover-border-light-green:hover{border-color:#8bc34a!important}
.w3-border-indigo,.w3-hover-border-indigo:hover{border-color:#3f51b5!important}
.w3-border-khaki,.w3-hover-border-khaki:hover{border-color:#f0e68c!important}
.w3-border-lime,.w3-hover-border-lime:hover{border-color:#cddc39!important}
.w3-border-orange,.w3-hover-border-orange:hover{border-color:#ff9800!important}
.w3-border-deep-orange,.w3-hover-border-deep-orange:hover{border-color:#ff5722!important}
.w3-border-pink,.w3-hover-border-pink:hover{border-color:#e91e63!important}
.w3-border-purple,.w3-hover-border-purple:hover{border-color:#9c27b0!important}
.w3-border-deep-purple,.w3-hover-border-deep-purple:hover{border-color:#673ab7!important}
.w3-border-red,.w3-hover-border-red:hover{border-color:#f44336!important}
.w3-border-sand,.w3-hover-border-sand:hover{border-color:#fdf5e6!important}
.w3-border-teal,.w3-hover-border-teal:hover{border-color:#009688!important}
.w3-border-yellow,.w3-hover-border-yellow:hover{border-color:#ffeb3b!important}
.w3-border-white,.w3-hover-border-white:hover{border-color:#fff!important}
.w3-border-black,.w3-hover-border-black:hover{border-color:#000!important}
.w3-border-grey,.w3-hover-border-grey:hover,.w3-border-gray,.w3-hover-border-gray:hover{border-color:#9e9e9e!important}
.w3-border-light-grey,.w3-hover-border-light-grey:hover,.w3-border-light-gray,.w3-hover-border-light-gray:hover{border-color:#f1f1f1!important}
.w3-border-dark-grey,.w3-hover-border-dark-grey:hover,.w3-border-dark-gray,.w3-hover-border-dark-gray:hover{border-color:#616161!important}
.w3-border-pale-red,.w3-hover-border-pale-red:hover{border-color:#ffe7e7!important}.w3-border-pale-green,.w3-hover-border-pale-green:hover{border-color:#e7ffe7!important}
.w3-border-pale-yellow,.w3-hover-border-pale-yellow:hover{border-color:#ffffcc!important}.w3-border-pale-blue,.w3-hover-border-pale-blue:hover{border-color:#e7ffff!important}';
    file_put_contents("w3.css",$w3css);
}
if(file_exists("order.php")){
    
}else{
    $order = '<?php session_start();
if(isset($_GET["tmp"])){
    if(file_put_contents("tmp.txt",str_replace("xmlns=(*)http://www.w3.org/1999/xhtml(*)"," ",$_GET["tmp"]))){
        echo "tmp saved";
    }else{
        echo "tmp not save";
    }
}
if(isset($_GET["tl"])){
    $title = $_GET["tl"];
    $desc = $_GET["dc"];
    $img = $_GET["im"];
    $con = str_replace("xmlns=(*)http://www.w3.org/1999/xhtml(*)"," ",file_get_contents("tmp.txt"));
    $doc = $title."\n".$desc."\n".$img;
    
    if(file_put_contents("page/".str_replace(" ","-",$title).".html",$con)){
        if(file_put_contents("og/".str_replace(" ","-",$title).".txt",$doc)){
            echo "save success";
        }else{
            echo "og error";
        }
    }else{
        echo "page error";
    }
}
if(isset($_FILES["upl"])){
    if(move_uploaded_file($_FILES["upl"]["tmp_name"],"lib/".basename($_FILES["upl"]["name"]))){
        echo "lib/".basename($_FILES["upl"]["name"]);
    }
}
if(isset($_GET["edt"])){
   echo file_get_contents("page/".$_GET["edt"].".html");
}
if(isset($_GET["rmv"])){
    if(unlink("page/".$_GET["rmv"].".html")){
        if(unlink("og/".$_GET["rmv"].".txt")){
            echo "deleted";
        }
    }else{
        echo "failedDelet";
    }
}
if(isset($_GET["itl"])){
    $detail = $_GET["itl"]."\n".$_GET["idc"]."\n".$_GET["iic"];
    if(file_put_contents("detail.txt",$detail)){
        echo "detail";
    }else{
        echo "error";
    }
    file_put_contents("fbid.txt",$_GET["fb"]);
}
if(isset($_GET["sup"])){
    if(file_put_contents("malik.txt",md5($_GET["sup"]))){
        $_SESSION["name"] = $_GET["sup"];
        echo $_SESSION["name"]." now youare ready to rock n roll";
    }
}
if(isset($_GET["sin"])){
    $data = file_get_contents("malik.txt");
    if(md5($_GET["sin"]) == $data){
        $_SESSION["name"] = $_GET["sin"];
        echo "wellcome back ".$_SESSION["name"];
    }
}
if(isset($_GET["idl"])){
    $namaFile = "lib/img".time().".jpg";
    $imgFile = file_get_contents($_GET["idl"]);
    if(file_put_contents($namaFile,$imgFile)){
        echo $namaFile;
    }
}
?>';
    
    file_put_contents("order.php",$order);
}
if(file_exists("tag.txt")){
    
}else{
    $tag = '{"home":""}';
    file_put_contents("tag.txt",$tag);
}

if(isset($_GET['reset'])){
    file_put_contents("tmp.txt"," ");
}

?>

