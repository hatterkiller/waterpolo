<script type="text/javascript" src="http://ajax.googleapis.com/ajax/
libs/jquery/1.3.0/jquery.min.js">
</script>
<script type="text/javascript" >
    
   
    window.onload = function() {
        

        var numbern = localStorage.getItem(numbern);
        if (numbern !== null) $('#numbern').val(numbern);
        
        var playerN = localStorage.getItem(playerN);
        if (playerN !== null) $('#playerN').val(playerN);
        
        var numberf = localStorage.getItem(numberf);
        if (numberf !== null) $('#numberf').val(numberf);
        
        var numbers = localStorage.getItem(numbers);
        if (numbers !== null) $('#numbers').val(numbers);
        
        var numberoi = localStorage.getItem(numberoi);
        if (numberoi !== null) $('#numberoi').val(numberoi);
    
    

    // ...
    }
     window.onbeforeunload = function() {
         alert(localStorage.getItem(numbern));
    localStorage.setItem(numbern, $('#numbern').val());
    localStorage.setItem("playerN", $('#playerN').val());
    localStorage.setItem("numberf", $('#numberf').val());
    localStorage.setItem("numbers", $('#numbers').val());
    localStorage.setItem("numberoi", $('#numberoi').val());
         
    // ...
    }
    
//$(function() {
  
var necro= (function() { /*Necro is a great friend. Starts the Necro loop*/
    /*Gets the values from the input boxes below.*/
    /*Player 1*/
//    var numbern1 = $("#numbern1").val();/*Player number*/
//    var numberNa1 = $("#numberNa1").val();/*Player name*/
//    var numberf1 = $("#numberf1").val();/*Player fouls*/
//    var numbers1 = $("#numbers1").val();/*Player Score*/
//    var numberoi1 = $("#numberoi1").val();/*Player On or Off*/
    
    <?php
					for($set=1;$set<21;$set++){
                        echo "
                        
    var numbern".$set." = $('#numbern".$set."').val();/*Player number*/
    var playerN".$set." = $('#playerN".$set."').val();/*Player name*/
    var numberf".$set." = $('#numberf".$set."').val();/*Player fouls*/
    var numbers".$set." = $('#numbers".$set."').val();/*Player Score*/
    var numberoi".$set." = $('#numberoi".$set."').val();/*Player On or Off*/
                        
                        ";
						
					}

				?>
//    var playerN".$set." = $('#playerN".$set."').val();/*Player name*/
    
    /*Sets these values into a data string. Maybe better for a JSON table or something. */
    
    /*var dataString = '&numbern1='+ numbern1 +'&numberNa1='+ numberNa1 + '&numberoi1=' + numberoi1 + '&numbers1=' + numbers1 +'&numberf1=' + numberf1;*/
    
    var dataString =<?php
        for($string=1;$string<21;$string++){
            if($string<20){
                 echo "'&playerN".$string."='+ playerN".$string." +'&numbern".$string."='+ numbern".$string." + '&numberoi".$string."=' + numberoi".$string." + '&numbers".$string."=' + numbers".$string." +'&numberf".$string."=' + numberf".$string." +";
            }
            else {echo "'&playerN".$string."='+ playerN".$string." +'&numbern".$string."='+ numbern".$string." + '&numberoi".$string."=' + numberoi".$string." + '&numbers".$string."=' + numbers".$string." +'&numberf".$string."=' + numberf".$string." ";}
        }
        echo ";"
    ?>
    
    /*If there's nothing in the forms, display an error*/
    /*if(numberNa1=='' || numberoi1=='' || numbers1=='' || numbern1=='' || numberf1=='')*/
    if( 1>2) /*lol*/
//        <?php
//            for($if=1;$if<21;$if++){
//                if($if<20){
//                echo "numberNa".$if."=='' || numberoi".$if."=='' || numbers".$if."=='' || numbern".$if."=='' || numberf".$if."=='' || ";
//                }
//                else {echo "numberNa".$if."=='' || numberoi".$if."=='' || numbers".$if."=='' || numbern".$if."=='' || numberf".$if."==''";}
//            }
//        echo ")"
//        ?> 
        {
            $('.success').fadeOut(200).hide();
            $('.error').fadeOut(200).show();
        }
    /*Else, if there's shit in the forms then this thing posts to "join.php"*/
    else
        {
            $.ajax({
                type: "POST",
                url: "join.php",
                data: dataString,
                success: function(){
                    $('.success').fadeIn(200).show();
                    $('.error').fadeOut(200).hide();
                }
            });
        }
    return false;
    });/*End of Necro*/
    
    /*Loop necro every second. */
    setInterval(necro,1000);

//    });
</script>
<style>
    *{
        margin:0;
        text-align: center;
    }
    input{
        width:30px;
        display: inline-block;
    }
    .left{
        width:20vw;
        height:100%;
        background-color: aliceblue;
        display: inline-block;
        float:left;
    }
    
    .right{
        width:20vw;
        height:100%;
        background-color:aqua;
        display: inline-block;
        float:right; 
    }
    .center{
        display: inline-block;
    }
    
    .head{
        font-size: 7vh;
    }
    .head td{
        padding-left: 3vw; padding-right: 3vw;
    }
    
    .lnumber{
        font-size: 14vh;
    }
    
    tr{
        width:2090px;
    }
    .player td{
        width:40%;
    }
    .number{
        display: inline-block;
    }
    .name{
        display: inline-block;
    }
    .playeroi{
        display: inline-block;
    }
</style>


<div class="left">
    <div class="logo"></div>
    <table>
        <tr><!--Heading-->
            <td>Player</td>
            <td>Foul</td>
            <td>Score</td>
        </tr>
        <!--Start of Individual Players, ordered Player, Foul, Score-->
        
        <?php
					for($row=1;$row<21;$row++){
                        echo "<tr class='player'>\n
                           <td>
                <div class='number'>
                    <input id='numbern".$row."' name='numbern".$row."' type='text' />
                </div><!--Player Number-->
                <div class='name'>
                    <input id='playerN".$row."' name='playerN".$row."' type='text' />
                </div><!--Player Name-->
                          
            </td><!--Player Number-->
            <td><!--Start of Fouls-->
                <div class='foul'>
                    <input id='numberf".$row."' name='numberf".$row."' type='text' />
                    <!--Maybe individual images?-->
                </div><!--End Fouls-->
            </td>
            <td><!--Start Individual score-->
                <span name='indScore'>
                    <input id='numbers".$row."' name='numbers".$row."' type='text' />
                </span>
            </td><!--End Individual score-->
            <td><!--Start Individual score-->
                <div class='playeroi'>
                    <input id='numberoi".$row."' name='numberoi".$row."' type='text' />
                </div><!--Player O/I Indicator-->  
            </td><!--End Individual score-->
					   </tr>";
						
					}

				?>
        
        

    
    </table>

</div>

<div class="center">
    <table align="center"><!--Main scores-->
        <tr class="head"><!--Heading-->
            <td>Home</td>
            <td>Period</td>
            <td>Guest</td>
        </tr>
        <tr class="lnumber"><!--Scores/Numbers-->
            <td>42</td><!--Home Score-->
            <td>3</td><!--Period Number-->
            <td>23</td><!--Guest Score-->
        </tr>
    </table><!--End Main scores-->
    
    <table align="center"><!--Times -->
        <tr class="head"><!--Times/Time out-->
            <td>
                T-Out
            </td>
            
            <td class="lnumber">12:30</td><!--Times-->
            
            <td>
                T-Out
            </td>
        </tr>
        <tr><!--Stuff-->
            <td>
                <!--Time out image indicator-->
            </td>
            <td></td><!--Clock, leave empty-->
            <td>
                <!--Time out image indicator-->
            </td>
        </tr>
    </table><!--End Times-->
    
    
</div>

<div class="right">
    
    
</div>
<input type="submit" value="Submit" class="submit" style="display:none"/>
<span class="error" style="display:none"> Please Enter Valid Data</span>
<span class="success" style="display:none"> </span>
</div></form&gt;