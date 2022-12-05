<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>create-item</title>
    <link rel="stylesheet" href="main.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  </head>
  <body>
 
    <header>
<!-- As a link -->
<nav class="navbar ">
    <div class="container-fluid">
        <i onclick="goBack()" class="bi3 bi-arrow-left"></i>
      <a class="navbar-brand" href="#">CREATE ITEM</a>
      <div class="save"> <a style="text-decoration: none;" href="">SAVE</a></div>
    </div>
  </nav>
    </header>

<div class="main">
    <legend>
  
        
        
    <form action="">
        <div class="name-assign">
    
        <div class="tit"><small>Name</small></div>
        <input contenteditable="true" type="text" name="" id="tit1" >
        </div>
        <div class="name-assign">
        <div class="tit"><small>Categories</small></div>
        <select class="form-select" aria-label="Default select example">
            <option selected>No Category</option>
        </select>
        </div>
        
        <div class="name-assign">
        <div class="tit"><small>Sold By</small></div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
          Each
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
            <label class="form-check-label" for="flexRadioDefault2">
        Weight
            </label>
          </div>
        </div>
          
        <div class="name-assign">
          
          <div class="tit"><small>Price</small></div>
          <input contenteditable="true" type="number" name="" id="tit1">
          <br>
          </div>
    
        <div class="name-assign">
    
          <div class="tit"><small>cost</small></div>
          <input contenteditable="true" type="number" name="" id="tit1" >
        </div>
        <div class="name-assign">
    
          <div class="tit"><small>SKU</small></div>
          <input contenteditable="true" type="number" name="" id="tit1">
    
        </div>
          
        <div class="name-assign">
    
          <div class="tit"><small>Barcode</small></div>
          <input contenteditable="true" type="number" name="Barcode" id="tit1" placeholder="">
    
        </div>
      
          
        <div class="name-assign ss">
    

            <div  style="   color: rgb(162, 162, 249);
            font-weight: bold;"  class="tit">Inventory</div>
           
            <label class="switch">
              <input type="checkbox">
              <span class="slider round"></span>
            </label>
    
        </div>
          
        <div class="name-assign">
    
          <div class="tit"><small>In stock</small></div>
          <input contenteditable="true" type="number" name="" id="tit1">
    
        </div>
        
        <div class="name-assign">
    
          <div style="   color: rgb(162, 162, 249);
          font-weight: bold;" class="tit">Representation on POS</div>
            <div class="form-checks">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
            <label class="form-check-label" for="flexRadioDefault1">
              Color
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" >
            <label class="form-check-label" for="flexRadioDefault2">
          Image
            </label>
          </div>
        </div>
        </div>
        
        <div class="colors">
          <div class="grey"></div>
          <div class="red"></div>
          <div class="pink"></div>
          <div class="orange"></div>
          <div class="lemon"></div>
          <div class="green"></div>
          <div class="blue"></div>
          <div class="violet"></div>
          <div class="sqr"></div>
          <div class="cir"></div>
          <div class="zig"></div>
          <div class="polygon"></div>
        </div>
      
        <hr>

            
    </form>
    
    
            
    
    </legend>
    
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
     <script src="main.js"></script>

  </body>
</html>