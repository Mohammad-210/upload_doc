<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" type="text/css" href="Css/header.css" />    
    </head>
    <body>
        <header class="header_l">
            <nav class="nav_flex">
                <div class="nav_menu">
                    <ul class="menu-bar">
                        <li>
                            <a href="#">Assignment</a>
                        </li>
                        <li>
                            <a href="#">Grades</a>
                        </li>
                        <li>
                            <a href="#">Material</a>
                        </li>
                    </ul>
                </div>
                <div class="user_info" id="user_info">
                    <img class="user_img" onclick="divFloat()" src="images/585e4bf3cb11b227491c339a.png" id="btClick">
                    <span >USERName</span>
                </div>
            </nav>
        </header>
        <div id="centerDIV" class="centerDIV">
            <div class="divFloat">
                <input type="button" id="btClose" class="btClose" value="Close (x)" />
            <p style="text-align: left; padding:20px 0;">Enter your email address: 
                
            </p>
            <p><input type="button" class="btGetPass" value="Get New Password" /></p>
            </div>
        </div>

        <script>

            let centerDIV = document.querySelector("#centerDIV");
            let ishow = true;

            function divFloat (){
               centerDIV.classList.toggle("visible");
            };

            // window.addEventListener('click', function (e) {
            // //   if (document.getElementById('btClick').contains(e.target)) {
            // //     document.getElementById('centerDIV').style.display = 'block';
            // //   }
              
            //   if (document.getElementById('centerDIV').contains(e.target)) {
            //     document.getElementById('centerDIV').style.display = 'none';
                
            //   }
            // });
             
            // window.addEventListener('click',()=>{
            //     document.getElementById('centerDIV').style.display = 'none';
            // });
          </script>
    </body>
</html>