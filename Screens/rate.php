<html>
    <head>
        <title>Rate</title>
        <link rel="stylesheet" href="../assets/css/rate.css">
    </head>

    <body>
        <div class="greyBox">
            <br><br>

                <div class="content">       
                    <img src="../assets/img/starRating.png" class="starImg"><br>        
                    <form action="/action_page.php" method="POST">   
                        <table>
                            <tr>
                                <label for="name">Name</label><br>
                                <input type="text" id="name" name="name"><br>
                            </tr>
                            
                            <tr>
                                <label for="feedback">Anything we can improve...?</label><br>
                                <textarea id="feedback" name="feedback" cols="5" rows="10"></textarea>
                            </tr>
                            
                        </table>

                        <!--submit button-->
                        <input type="submit" value="Submit" class="button3">
                        

                    </form>
                </div>
        </div>
    </body>
</html>