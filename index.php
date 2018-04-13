<?php if(file_exists("order.php")){
    
}else{
    header("location:malik.php");
}
?>
<!DCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            <?php 
            if(isset($_GET['pg']) && $_GET['pg'] != ""){
                    $ft = file("og/".$_GET['pg'].".txt");
                    echo $ft[0];
                }else{
                $ff = file("detail.txt");
                echo $ff[0];
            }
            ?>
        </title>
        
    <link rel="stylesheet" href="w3.css">
        <?php 
        $gfl = file("detail.txt");
        if(isset($_GET["pg"]) && $_GET["pg"] != ""){
                $nfl = "og/".$_GET["pg"].".txt";
                $fl = file($nfl);
                echo '<title id="title">'.$fl[0].'</title>';
                echo '<meta property="og:url" content="http://'.$_SERVER["SERVER_NAME"].'/'.$_GET["pg"].'"/>';
                echo '<meta property="og:type" content="website" />';
                echo '<meta property="og:title" content="'.$fl[0].'" />';
                echo '<meta property="og:description" content="'.$fl[1].'" />';
                echo '<meta property="og:image" content="'.$fl[2].'" />';
                if(file_exists("fbid.txt")){echo '<meta property="fb:app_id" content="'.file_get_contents("fbid.txt").'" />';}else{echo "' '";}
            }else{
                echo '<title id="title">'.$gfl[0].'</title>';
                echo '<meta property="og:url" content="http://'.$_SERVER["SERVER_NAME"].'"/>';
                echo '<meta property="og:type" content="website" />';
                echo '<meta property="og:title" content="'.$gfl[0].'" />';
                echo '<meta property="og:description" content="'.$gfl[1].'" />';
                echo '<meta property="og:image" content="'.$gfl[2].'" />';
                if(file_exists("fbid.txt")){echo '<meta property="fb:app_id" content="'.file_get_contents("fbid.txt").'" />';}else{echo "' '";}
            }
        ?>
    <style>
        a:link{
            text-decoration: none;
            
        }
        a{
            color: cadetblue;
        }
        body{
            max-width: 720px;
            left: 0;
            right: 0;
            margin: 0 auto;
        }
        
    </style>
     <?php echo "<script id='malik' type='text/javascript' src='https://cdn.rawgit.com/malikkurosaki/1081628857b80399ed50a9ba340cb46f/raw/23d4948dc4982fa876ea1b04327269a978dd0283/malikcms.js?".time()."'></script>";?>
    </head>
    
    
    <body>
        <div id="fb-root"></div>
            <script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '<?php if(file_exists("fbid.txt")){echo file_get_contents("fbid.txt");}else{echo "' '";}?>',
      xfbml      : true,
      version    : 'v2.12'
    });
    FB.AppEvents.logPageView();
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
        
    <div class="w3-blue-grey w3-card">
        <table class="w3-table-all">
            <tr class="w3-blue-grey">
                <td>
                    <div class="w3-cell-row">
                    <div class="w3-cell">
                    <?php 
                        echo "<img clas='w3-round w3-border w3-border-white' style='width:30px' src='".$gfl[2]."'>";
                    ?>
                    </div>
                    <div class="w3-cell">
                    <?php 
                        echo $gfl[0];
                    ?>
                    </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                <a href="/">Home | </a>
                <a href="malik.php">admin | </a>
                </td>
            </tr>
            <tr>
                <td>
                    <div class=" w3-center w3-text-blue-grey ">
                        <?php 
                            if(isset($_GET['pg']) && $_GET['pg'] != ""){
                            echo "<h3>".str_replace('-',' ',$_GET['pg'])."</h3>";
                            }else{
                               echo "<div class='w3-small'>".str_replace('-',' ',$gfl[1])."</div>"; 
                            }           
                        ?>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div id="multiP" class="w3-small w3-card w3-panel w3-padding w3-round">
                        <?php
                        $hBody = "";
                        $mP = "og";
                        $smP = scandir($mP);
                        $adf = array_diff($smP,array("..","."));
                        foreach($adf as $fcont){
                            $fex = explode(" ",$fcont);
                            for($i=0;$i<count($fex);$i++){
                                $ls = file("og/".$fex[$i]);
                                
                                $hBody .= "<div class='w3-col s3 w3-display-container' style='overflow:hidden;padding:2px;'><a href='".str_replace(' ','-',$ls[0])."'><div class='w3-teal ' style='height:150px;'><img src='".$ls[2]."' style='width:100%' class=''><div class='w3-display-bottommiddle w3-container w3-blue-grey ' style='width:95%'>".$ls[0]."</div></div></a></div>";
                            }
                        }
                        
                        echo $hBody;
                        ?>
                    </div>
                    <div id="singleP" class="w3-small">
                    <?php 
                    if(isset($_GET['pg']) && $_GET['pg'] != ""){
                        echo file_get_contents("page/".$_GET['pg'].".html");
                    }
                    
                    ?>
                    </div>
                    <?php 
                        if(file_exists("fbid.txt")){
                            $pg = $_SERVER["SERVER_NAME"];
                            if(isset($_GET["pg"])){$pg = $_SERVER["SERVER_NAME"]."/".$_GET["pg"];}
                            echo '<div class="w3-content w3-pading w3-card w3-round w3-panel w3-bar"><div class="fb-comments" data-href="'.$pg.'" data-numposts="5"></div></div>';
                        }
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    <button class="w3-right w3-btn w3-round w3-border w3-card">
                    <?php
                    if(file_exists("fbid.txt")){
                        echo '<div class="fb-share-button" data-href="http://'.$pg.'" data-layout="button_count"></div>';
                    }
                    
                    ?>
                    </button>
                </td>
            </tr>
            <tr>
                <td>
                <?php 
                  $cPage = "page/";
                  $scPage = scandir($cPage);
                  $pDiff = array_diff($scPage,array("..","."));
                    foreach($pDiff as $pageContent){
                        $bsn = basename($pageContent,".html");
                        $cont = str_replace("-"," ",$bsn);
                        echo "<a class='w3-small' href='/".basename($pageContent,".html")."'>".str_replace("-"," ",basename($pageContent,".html"))." | </a>";
                    } 
                ?>
                </td>
            </tr>
            <tr>
                <td  class="w3-small w3-blue-grey w3-panel">
                    <div>
                    <?php echo $gfl[0]; ?>
                    </div>
                </td>
            </tr>
        </table>
    </div>
        
        
        
        <script>
            var multy = document.getElementById("multiP");
            var single = document.getElementById("singleP");
            document.body.onmouseover = function(e){
                if(e.target.className.includes("edit")){
                    e.target.contentEditable = false;
                }
            }
        </script>
        <?php 
            if(isset($_GET['pg']) && $_GET['pg'] != ""){
               echo "<script>multy.classList.add('w3-hide');</script>" ;
            }else {
               echo "<script>multy.classList.remove('w3-hide');</script>"  ;
            }
        ?>
    </body>

</html>