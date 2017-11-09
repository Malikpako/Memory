<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <style>
            button{
             background-color: gray;   
             width: 50px;
             height: 50px
            } 
            
        </style>
        <script>
            function checkcolour(q){           
                document.getElementById("knop"+q).style.backgroundColor = gameboard(q);
            }
           
            function gameboard(q){
                var x = (""+q).substring(0,1) -1;
                var y = (""+q).substring(1,2) -1;
                console.log(x);
                var gameboard = [
                    ["red","orange","yellow","blue"],
                    ["red","orange","yellow","blue"],
                    ["red","orange","yellow","blue"],                
                    ["red","orange","yellow","blue"]      
                ];
                return gameboard[x][y];
            
            }
        
        </script>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <table>
            <?php
                for($y=1;$y<5;$y++){
                echo "<tr>";
                   
                        for($x=1;$x<5;$x++){
                        echo "<td><button id=knop$y$x onclick=checkcolour($y$x) ></td>";
                    }
                    
               "</tr>"; 
                }
            ?> 
            
        </table> 
        
        
        
        
        
        
        
        
        <?php
        // put your code here
        ?>
    </body>
</html>
