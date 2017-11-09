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
            function checkcolour(){
            alert();
            document.getElementById("knop").style.backgroundColor = 'red';
        }
        
        </script> 
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <table>
            <?php
                for($y=0;$y<10;$y++){
                echo "<tr>";
                   
                        for($x=0;$x<10;$x++){
                        echo "<td><button id=knop onclick=checkcolour() ></td>";
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
