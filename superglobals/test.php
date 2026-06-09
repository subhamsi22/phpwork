<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test super global</title>
</head>
<body>
    <fieldset> 
        <h1 >get method </h1>
        <form action="get.php" method="get"> 
<label for="">name</label>
<input type="text" placeholder="enter your name" name="name">
<button>submit</button>

        </form>
        
    </fieldset>

       <fieldset> 
        <h1 >post method </h1>
        <form action="post.php" method="post"> 
<label for="">name</label>
<input type="text" placeholder="enter your name" name="name">
<button>submit</button>

        </form>
        
    </fieldset> 
    
       <fieldset> 
        <h1 >request method </h1>
        <p>$_REQUEST method is use to take the data from post and get method is less secure </p>
         <br>
         <label for="">send data using post</label>
        <form action="request.php" method="post"> 
<label for="">name</label>
<input type="text" placeholder="enter your name" name="name">
<button>submit</button>

        </form>
        <br>
        <p>send data using get </p>
         <form action="request.php" method="get"> 
<label for="">name</label>
<input type="text" placeholder="enter your name" name="name">
<button>submit</button>

        </form>
        
        
    </fieldset> 




  <fieldset> 
        <h1 >server </h1>
        <form action="server.php" method="get"> 
<label for="">name</label>
<input type="text" placeholder="enter your name" name="name">
<button>submit</button>

        </form>
        
    </fieldset>

 <fieldset> 
        <h1 >$_FILES </h1>
        <form action="files.php" method="post" enctype="multipart/form-data"> 
<label for="">file to upload</label>
<input type="file" placeholder="enter your name" name="filesofhtml">
<button>submit</button>

        </form>
        
    </fieldset>

</body>
</html>