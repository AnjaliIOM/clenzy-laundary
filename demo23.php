<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-image: linear-gradient(90deg, #2193b0, #6dd5ed, #2193b0);
    }
         table {
      border-collapse: collapse;
      width: 100%;
    }

    th,
    td {
      text-align: left;
      padding: 10px;
      border-bottom: 1px solid #ddd;
    }

    th {
      background-color: #f2f2f2;
    }

.increment-button,
.decrement-button {
  width: 25px;
  height: 25px;
  border: none;
  background-color: #f2f2f2;
  cursor: pointer;
  font-weight: bold;
}

.increment-button:hover,
.decrement-button:hover {
  background-color: #d9d9d9;
}

.quantity-input {
    width: 10px;
}

.quantity {
  display: flex;
  align-items: center;
}

.quantity input[type="text"] {
  width: 50px;
  text-align: center;
}

.quantity button {
  width: 50px;
  height: 30px;
  background-color: #ddd;
  border: none;
  cursor: pointer;
  font-weight: bold;
  font-size: 14px;
}

.quantity button:hover {
  background-color: #ccc;
}

.section {
      display: none;
    }

    .display-none {
        display:none;
    }



    </style>
</head>
<body>
<button onclick="showSection('Women')">Women</button>
  <button onclick="showSection('Men')">Men</button>
  <button onclick="showSection('Kids')">Kids</button>
  <button onclick="showSection('Accesorries')">Accesorries</button>
<form method="POST" action="demoinsert.php">

  
  <div id="WomenSection" class="section">
    <!-- Women's section content -->
    <h1>Women's Category</h1>
  <table id="myTable">
    <!-- Dynamic rows will be added here -->
    <tr>
    <th>Products</th>
    <th>Material</th>
    <th>Price</th>
    <th>Service</th>
    <th style="min-width: 100px">Quantity</th>
    <th>Image</th>
    <th>Subtotal</th>
  </tr>

  </table>

  <button type="button" onclick="addRow()">Add Row</button>
</div>
<div id="MenSection" class="section">


<h1>Men's Category</h1>
  <table id="menTable">
    <!-- Dynamic rows will be added here -->
    <tr>
    <th>Products</th>
    <th>Material</th>
    <th>Price</th>
    <th>Service</th>
    <th style="min-width: 120px">Quantity</th>
    <th>Image</th>
    <th>Subtotal</th>
  </tr>

  </table>

  <button type="button" onclick="addRowMen()">Add Row</button>
     </div>



     <div id="KidsSection" class="section">

     <h1>Kids's Category</h1>
  <table id="kidTable">
    <!-- Dynamic rows will be added here -->
    <tr>
    <th>Products</th>
    <th>Material</th>
    <th>Price</th>
    <th>Service</th>
    <th style="min-width: 100px">Quantity</th>
    <th>Image</th>
    <th>Subtotal</th>
  </tr>

  </table>

    
  <button type="button" onclick="addRowKids()">Add Row</button>
     </div>



     <div id="AccesorriesSection" class="section">
     <h1>Accesorries Category</h1>
  <table id="accesorriesTable">
    <!-- Dynamic rows will be added here -->
    <tr>
    <th>Products</th>
    <th>Material</th>
    <th>Price</th>
    <th>Service</th>
    <th style="min-width: 100px">Quantity</th>
    <th>Image</th>
    <th>Subtotal</th>
  </tr>

  </table>
  

  <button type="button" onclick="addRowAccessories()">Add Row</button>
     </div>
     <label for="datetime">Preferred Date and Time</label>
        <input type="datetime-local" id="datetime" name="date&time" required>
        <button type="submit">Submit</button>
</form>
<script>
    var rowCount = 0; 

    function addRow() {


  var table = document.getElementById('myTable');

  //product
    var newRow = table.insertRow();
    var newCell = newRow.insertCell();
    var select1 = document.createElement('select');
    var selectOptions = ['Shirt', 'T-shirt', 'Dress-top','Kurtha','Nighty','Blouse/Liner','Kameez-normal','Kameez-heavy','Salwar-normal','Salwar-heavy','Saree','Scarf','Ghagra top-normal','Ghagra skirt-heavy','Ghagra skirt-normal','Dupatta-normal','Wedding gown-normal','Wedding gown-heavy','Pyjama','Skirt long','Skirt medium','Skirt with heavy work','Stole','Ladies-coat','Shawl','Sweater',' Dupatta work','Long gown','Ghagra-top work','Blazer/coat','Shrug','Undergarments'];
    var selectOptions1 = ['Cotton', 'Silk', 'Lenin','Polyester','Wool','Crepe','Denim','Leather','Satin','Synthetic','Velvet','Chiffon'];
    var newCell1 = newRow.insertCell();
    var select = document.createElement('select');
    var newCell2 = newRow.insertCell();
    var input1 = document.createElement('input');
    var newCell6 = newRow.insertCell();
    var input7=document.createElement('select');
    var newCell3 = newRow.insertCell();
    var input2 = document.createElement('input');
    var newCell4 = newRow.insertCell();
  var input5 = document.createElement('input');
  var newCell5 = newRow.insertCell();
    var input3 = document.createElement('input');
    var input6 = document.createElement('input');
    var para = document.createElement('p');
    var para1 = document.createElement('p');


    select1.name = 'data[' + rowCount + '][' + 0 + ']';
    for (var j = 0; j < selectOptions.length; j++) {
      var option = document.createElement('option');
      option.value = selectOptions[j];
      option.text = selectOptions[j];
      select1.appendChild(option);
    }
    newCell.appendChild(select1);


//material
    
    select.name = 'data[' + rowCount + '][' + 1 + ']';
    for (var j = 0; j < selectOptions1.length; j++) {
      var option = document.createElement('option');
      option.value = selectOptions1[j];
      option.text = selectOptions1[j];
      select.appendChild(option);
    }
    newCell1.appendChild(select);

    //price
    
    input1.type = 'text';
    select1.addEventListener('change', function(event) {
  var selectedValue = event.target.value;
 
  if(selectedValue === 'Kurta'|| selectedValue === 'Dress-top' ){
    input1.value = '80.00';
    para.innerText = '80.00';
  } else if(selectedValue === 'Shirt'){
    input1.value = '70.00';
    para.innerText = '70.00';
  } else if( selectedValue === 'Nighty'){
    input1.value = '50.00';
    para.innerText = '50.00';
} else if( selectedValue === 'T-shirt'){
    input1.value = '60.00';
    para.innerText = '60.00';
} else if( selectedValue === 'Blouse/liner'){
    input1.value = '500.00';
    para.innerText = '500.00';
} else if( selectedValue === 'Kameez-normal'){
    input1.value = '150.00';
    para.innerText = '150.00';
} else if( selectedValue === 'Kameez-heavy'){
    input1.value = '200.00';
    para.innerText = '200.00';
} else if( selectedValue === 'Salwar-normal'){
    input1.value = '100.00';
    para.innerText = '100.00';
} else if( selectedValue === 'Salwar-heavy'){
    input1.value = '200.00';
    para.innerText = '200.00';
} else if( selectedValue === 'Saree'){
    input1.value = '150.00';
    para.innerText = '150.00';
} else if( selectedValue === 'Scarf'){
    input1.value = '50.00';
    para.innerText = '50.00';
} else if( selectedValue === 'Ghagra top-normal'){
    input1.value = '120.00';
    para.innerText = '120.00';
} else if( selectedValue === 'Ghagra skirt-normal'){
    input1.value = '200.00';
    para.innerText = '200.00';
} else if( selectedValue === 'Ghagra skirt-heavy'){
    input1.value = '250.00';
    para.innerText = '250.00';
} else if( selectedValue === 'Dupatta-normal'){
    input1.value = '90.00';
    para.innerText = '90.00';
} else if( selectedValue === 'Wedding gown-normal'){
    input1.value = '1400.00';
    para.innerText = '1400.00';
} else if( selectedValue === 'Wedding gown-heavy'){
    input1.value = '2000.00';
    para.innerText = '2000.00';
} else if( selectedValue === 'Pyjama'){
    input1.value = '60.00';
    para.innerText = '60.00';
} else if( selectedValue === 'Skirt long'){
    input1.value = '90.00';
    para.innerText = '90.00';
} else if( selectedValue === 'Skirt medium'){
    input1.value = '70.00';
    para.innerText = '70.00';
} else if( selectedValue === 'Skirt with heavy work'){
    input1.value = '100.00';
    para.innerText = '100.00';
} else if( selectedValue === 'Stole'){
    input1.value = '50.00'
    para.innerText = '50.00';
} else if( selectedValue === 'Ladies coat'){
    input1.value = '70.00';
    para.innerText = '70.00';
} else if( selectedValue === 'Shawl'){
    input1.value = '60.00';
    para.innerText = '60.00';
} else if( selectedValue === 'Sweatert'){
    input1.value = '80.00';
    para.innerText = '80.00';
} else if( selectedValue === 'Dupatta-work'){
    input1.value = '90.00';
    para.innerText = '90.00';
} else if( selectedValue === 'Long gown'){
    input1.value = '100.00';
    para.innerText = '100.00';
} else if( selectedValue === 'Ghagra top work'){
    input1.value = '200.00';
    para.innerText = '200.00';
} else if( selectedValue === 'Blazer/coat'){
    input1.value = '90.00';
    para.innerText = '90.00';
} else if( selectedValue === 'Shrug'){
    input1.value = '70.00';
    para.innerText = '70.00';
    
} else if( selectedValue === 'Undergarments'){
    input1.value = '70.00';
    para.innerText = '70.00';
    }

});

    input1.name = 'data[' + rowCount + '][' + 2 + ']';
    input1.value = "70.00";
    input1.className = 'display-none';
    para.innerText = input1.value;
 
    
    newCell2.appendChild(para);
    newCell2.appendChild(input1);



    //service
    var selectOptions2 = ['dry cleaning','steam iron','wash and fold','wash and iron'];
    input7.name = 'data[' + rowCount + '][' + 7 + ']';
    for (var j = 0; j < selectOptions2.length; j++) {
      var option = document.createElement('option');
      option.value = selectOptions2[j];
      option.text = selectOptions2[j];
      input7.appendChild(option);
    }
    newCell6.appendChild(input7);



    //quantity
    
    input2.type = 'text';
    input2.name = 'data[' + rowCount + '][' + 3 + ']';
    input2.value = 0;
    input2.className = "quantity-input"
    //console.log("slkfdas", select1.value);
    

    var button1 = document.createElement('button');
  button1.type = 'button';
  button1.textContent = '+';
  button1.className = 'increment-button'
  button1.onclick = function() {
    if(input2.value >= 0){
        input2.value = parseInt(input2.value) + 1;
        input3.value= parseInt(input1.value) * parseInt(input2.value);
        para1.innerText = `${parseInt(input1.value) * parseInt(input2.value)}.00`;
    }
  };

  var button2 = document.createElement('button');
  button2.type = 'button';
  button2.textContent = '-';
  button2.className = 'decrement-button'
  button2.onclick = function() {
    if(input2.value > 0){
        input2.value = parseInt(input2.value) - 1;
        input3.value= parseInt(input1.value) * parseInt(input2.value);
        para1.innerText =`${ parseInt(input1.value) * parseInt(input2.value)}.00`;
    }
  };

  newCell3.appendChild(button2);
  newCell3.appendChild(input2);
  newCell3.appendChild(button1);

  //image
  // Create input for capturing photos as blob data
  
  input5.type = 'file';
  input5.name = 'data[' + rowCount + '][' + 5 + ']';
  input5.accept = 'image/jpeg, image/png'; 

  newCell4.appendChild(input5);


//subtotal
    
    input3.type = 'text';
    input3.name = 'data[' + rowCount + '][' + 4 + ']';
    input3.value="00.00";
    para1.innerText = '00.00'
    input3.className = 'display-none';
    newCell5.appendChild(para1);
    newCell5.appendChild(input3);


    //category 
    input6.name = 'data[' + rowCount + '][' + 6 + ']';
    input6.value = 'women'
    input6.type = 'text';
    console.log(input6.value, input6.name);
    input6.className= 'display-none';
    newCell5.appendChild(input6);
    



  rowCount++;
}

function addRowMen() {
    var table = document.getElementById('menTable');

  //product
    var newRow = table.insertRow();
    var newCell = newRow.insertCell();
    var select1 = document.createElement('select');
    var selectOptions = ['Shirt', 'T-shirt', 'Dhothi','Kurtha','Pyjama','Blazer/coat','Waist coat','Safari pant','Safari shirt','Shorts','Suit','Jubba','Corduary pant','Over coat long','Long jerkin','Bannian','Jacket','Sherwani','Undergarments','Angarastram/shalya','Rider jacket','Sherwani top','Sherwani bottom','Sherwani top heavy','Lungi','Sweater/Sweatshirt/Pullover','Jerkin'];
    var selectOptions1 = ['Cotton', 'Silk', 'Lenin','Polyester','Wool','Crepe','Denim','Leather','Satin','Synthetic','Velvet','Chiffon'];
    var newCell1 = newRow.insertCell();
    var select = document.createElement('select');
    var newCell2 = newRow.insertCell();
    var input1 = document.createElement('input');
    var newCell6 = newRow.insertCell();
    var input7=document.createElement('select');
    var newCell3 = newRow.insertCell();
    var input2 = document.createElement('input');
    var newCell4 = newRow.insertCell();
  var input5 = document.createElement('input');
  var newCell5 = newRow.insertCell();
    var input3 = document.createElement('input');
    var input6 = document.createElement('input');
    var para = document.createElement('p');
    var para1 = document.createElement('p');





    select1.name = 'data[' + rowCount + '][' + 0 + ']';
    for (var j = 0; j < selectOptions.length; j++) {
      var option = document.createElement('option');
      option.value = selectOptions[j];
      option.text = selectOptions[j];
      select1.appendChild(option);
    }
    newCell.appendChild(select1);

//material
    
    select.name = 'data[' + rowCount + '][' + 1 + ']';
    for (var j = 0; j < selectOptions1.length; j++) {
      var option = document.createElement('option');
      option.value = selectOptions1[j];
      option.text = selectOptions1[j];
      select.appendChild(option);
    }
    newCell1.appendChild(select);

    //price
    
    input1.type = 'text';
    select1.addEventListener('change', function(event) {
  var selectedValue = event.target.value;
 
  if(selectedValue === 'Kurta'|| selectedValue === 'Dhothi' ){
    input1.value = '80.00';
    para.innerText = '80.00';
  } else if(selectedValue === 'Shirt'){
    input1.value = '70.00';
    para.innerText = '70.00';
  } else if( selectedValue === 'T-shirt'){
    input1.value = '50.00';
    para.innerText = '50.00';
} else if( selectedValue === 'Pyjama'){
    input1.value = '60.00';
    para.innerText = '60.00';
} else if( selectedValue === 'Blazer/coat'){
    input1.value = '90.00';
    para.innerText = '90.00';
} else if( selectedValue === 'Waist coat'){
    input1.value = '70.00';
    para.innerText = '70.00';
} else if( selectedValue === 'Safari pant'){
    input1.value = '80.00';
    para.innerText = '80.00';
} else if( selectedValue === 'Safari shirt'){
    input1.value = '70.00';
    para.innerText = '70.00';
} else if( selectedValue === 'Shorts'){
    input1.value = '60.00';
    para.innerText = '60.00';
} else if( selectedValue === 'Suit'){
    input1.value = '100.00';
    para.innerText = '100.00';
} else if( selectedValue === 'Jubba'){
    input1.value = '70.00';
    para.innerText = '70.00';
} else if( selectedValue === 'Corduary pant'){
    input1.value = '80.00';
    para.innerText = '80.00';
} else if( selectedValue === 'Over coat long'){
    input1.value = '120.00';
    para.innerText = '120.00';
} else if( selectedValue === 'Long jerkin'){
    input1.value = '150.00';
    para.innerText = '150.00';
} else if( selectedValue === 'Bannian'){
    input1.value = '60.00';
    para.innerText = '60.00';
} else if( selectedValue === 'Jacket'){
    input1.value = '140.00';
    para.innerText = '140.00';
    
} else if( selectedValue === 'Sherwani'){
    input1.value = '90.00';
    para.innerText = '90.00';
    
} else if( selectedValue === 'Undergarments'){
    input1.value = '60.00';
    para.innerText = '60.00';
} else if( selectedValue === 'Angarastram/shalya'){
    input1.value = '60.00';
    para.innerText = '60.00';
} else if( selectedValue === 'Rider jacket'){
    input1.value = '90.00';
    para.innerText = '90.00';
} else if( selectedValue === 'Sherwani top'){
    input1.value = '90.00';
    para.innerText = '90.00';
} else if( selectedValue === 'Sherwani bottom'){
    input1.value = '70.00';
    para.innerText = '70.00';
    
} else if( selectedValue === 'Lungi'){
    input1.value = '60.00';
    para.innerText = '70.00';
    
} else if( selectedValue === 'Sweater/Sweatshirt/Pullover'){
    input1.value = '100.00';
    para.innerText = '100.00';
    
} else if( selectedValue === 'Jerkin'){
    input1.value = '90.00';
    para.innerText = '90.00';
    }
    });
    input1.name = 'data[' + rowCount + '][' + 2 + ']';
    input1.value = "70.00";
    para.innerText="70.00"
    input1.className = 'display-none';
    newCell2.appendChild(para);
    newCell2.appendChild(input1)



    //service
    var selectOptions2 = ['dry cleaning','steam iron','wash and fold','wash and iron'];
    input7.name = 'data[' + rowCount + '][' + 7 + ']';
    for (var j = 0; j < selectOptions2.length; j++) {
      var option = document.createElement('option');
      option.value = selectOptions2[j];
      option.text = selectOptions2[j];
      input7.appendChild(option);
    }
    newCell6.appendChild(input7);


    //quantity
    
    input2.type = 'text';
    input2.name = 'data[' + rowCount + '][' + 3 + ']';
    input2.value = 0;
    input2.className = "quantity-input"
    //console.log("slkfdas", select1.value);
    

    var button1 = document.createElement('button');
  button1.type = 'button';
  button1.textContent = '+';
  button1.className = 'increment-button'
  button1.onclick = function() {
    if(input2.value >= 0){
        input2.value = parseInt(input2.value) + 1;
        console.log(input2.value);
        input3.value= parseInt(input1.value) * parseInt(input2.value);
        para1.innerText = `${parseInt(input1.value) * parseInt(input2.value)}.00`;
    }
  };

  var button2 = document.createElement('button');
  button2.type = 'button';
  button2.textContent = '-';
  button2.className = 'decrement-button'
  button2.onclick = function() {
    if(input2.value > 0){
        input2.value = parseInt(input2.value) - 1;
        console.log(input2.value);
        input3.value= parseInt(input1.value) * parseInt(input2.value);
        para1.innerText = `${parseInt(input1.value) * parseInt(input2.value)}.00`;
    }
  };

  newCell3.appendChild(button2);
  newCell3.appendChild(input2);
  newCell3.appendChild(button1);

  //image
  // Create input for capturing photos as blob data
  
  input5.type = 'file';
  input5.name = 'data[' + rowCount + '][' + 5 + ']';
  input5.accept = 'image/jpeg, image/png'; 

  newCell4.appendChild(input5);


//subtotal
    
    input3.type = 'text';
    input3.name = 'data[' + rowCount + '][' + 4 + ']';
    input3.value="00.00";
    para1.innerText="00.00"
    input3.className="display-none";
    newCell5.appendChild(input3)
    newCell5.appendChild(para1);

    input6.name = 'data[' + rowCount + '][' + 6 + ']';
    input6.value = 'men'
    input6.type = 'text';
    console.log(input6.value, input6.name);
    input6.className= 'display-none';
    newCell5.appendChild(input6);



  rowCount++;
}


function addRowKids() {
    var table = document.getElementById('kidTable');

//product
  var newRow = table.insertRow();
  var newCell = newRow.insertCell();
  var select1 = document.createElement('select');
  var selectOptions = ['Kids Blazer/waist coat', 'Frock', 'Kids-lehenga','Kids pant/trousers','Kids shirt','Kids T-shirt','Kids-top','Kids-Kurtha/Pyjama','Baby bed/Quilt','Unifrom-Tie','Uniform-Shirt','Uniform-Pant','Unifrom-Skirt','Sweater','Undergarments'];
  var selectOptions1 = ['Cotton', 'Silk', 'Lenin','Polyester','Wool','Crepe','Denim','Leather','Satin','Synthetic','Velvet','Chiffon'];
  var newCell1 = newRow.insertCell();
  var select = document.createElement('select');
  var newCell2 = newRow.insertCell();
  var input1 = document.createElement('input');
  var newCell6 = newRow.insertCell();
    var input7=document.createElement('select');
  var newCell3 = newRow.insertCell();
  var input2 = document.createElement('input');
  var newCell4 = newRow.insertCell();
var input5 = document.createElement('input');
var newCell5 = newRow.insertCell();
  var input3 = document.createElement('input');
  var input6 = document.createElement('input');
  var para = document.createElement('p');
    var para1 = document.createElement('p');


  select1.name = 'data[' + rowCount + '][' + 0 + ']';
  for (var j = 0; j < selectOptions.length; j++) {
    var option = document.createElement('option');
    option.value = selectOptions[j];
    option.text = selectOptions[j];
    select1.appendChild(option);
  }
  newCell.appendChild(select1);

//material
  
  select.name = 'data[' + rowCount + '][' + 1 + ']';
  for (var j = 0; j < selectOptions1.length; j++) {
    var option = document.createElement('option');
    option.value = selectOptions1[j];
    option.text = selectOptions1[j];
    select.appendChild(option);
  }
  newCell1.appendChild(select);

  //price
  
  input1.type = 'text';
  select1.addEventListener('change', function(event) {
var selectedValue = event.target.value;

if(selectedValue === 'Kids Blazer/waist coat'|| selectedValue === 'Kids-lehenga' ){
  input1.value = '80.00';
  para.innerText = '80.00';
} else if(selectedValue === 'Kids pant/trousers'){
  input1.value = '70.00';
  para.innerText = '70.00';
} else if( selectedValue === 'Frock'){
  input1.value = '50.00';
  para.innerText = '50.00';

} else if( selectedValue === 'Kids shirt'){
    input1.value = '60.00';
    para.innerText = '60.00';
    
} else if( selectedValue === 'Kids T-shirt'){
    input1.value = '70.00';
    para.innerText = '70.00';
    
} else if( selectedValue === 'Kids-top'){
    input1.value = '60.00';
    para.innerText = '60.00';
    
} else if( selectedValue === 'Kids Kurtha/Pyjama'){
    input1.value = '80.00';
    para.innerText = '80.00';
    
} else if( selectedValue === 'Baby bed/quilt'){
    input1.value = '100.00';
    para.innerText = '100.00';
    
} else if( selectedValue === 'Uniform-Tie'){
    input1.value = '50.00';
    para.innerText = '50.00';
    
} else if( selectedValue === 'Uniform-Shirt'){
    input1.value = '70.00';
    para.innerText = '70.00';
    
} else if( selectedValue === 'Uniform-Pant'){
    input1.value = '80.00';
    para.innerText = '80.00';
    
} else if( selectedValue === 'Uniform-Skirt'){
    input1.value = '60.00';
    para.innerText = '60.00';
    
} else if( selectedValue === 'Sweater'){
    input1.value = '70.00';
    para.innerText = '70.00';
    
} else if( selectedValue === 'Undergarments'){
    input1.value = '50.00';
    para.innerText = '50.00';
}

  });

  input1.name = 'data[' + rowCount + '][' + 2 + ']';
  input1.value = "70.00";
  para.innerText = '70.00';
  input1.className="display-none";
  newCell2.appendChild(input1);
  newCell2.appendChild(para);


  //service
  var selectOptions2 = ['dry cleaning','steam iron','wash and fold','wash and iron'];
    input7.name = 'data[' + rowCount + '][' + 7 + ']';
    for (var j = 0; j < selectOptions2.length; j++) {
      var option = document.createElement('option');
      option.value = selectOptions2[j];
      option.text = selectOptions2[j];
      input7.appendChild(option);
    }
    newCell6.appendChild(input7);



  //quantity
  
  input2.type = 'text';
  input2.name = 'data[' + rowCount + '][' + 3 + ']';
  input2.value = 0;
  input2.className = "quantity-input"
  //console.log("slkfdas", select1.value);
  

  var button1 = document.createElement('button');
button1.type = 'button';
button1.textContent = '+';
button1.className = 'increment-button'
button1.onclick = function() {
  if(input2.value >= 0){
      input2.value = parseInt(input2.value) + 1;
      console.log(input2.value);
      input3.value= parseInt(input1.value) * parseInt(input2.value);
      para1.innerText = `${parseInt(input1.value) * parseInt(input2.value)}.00`;
  }
};

var button2 = document.createElement('button');
button2.type = 'button';
button2.textContent = '-';
button2.className = 'decrement-button'
button2.onclick = function() {
  if(input2.value > 0){
      input2.value = parseInt(input2.value) - 1;
      console.log(input2.value);
      input3.value= parseInt(input1.value) * parseInt(input2.value);
      para1.innerText = `${parseInt(input1.value) * parseInt(input2.value)}.00`;
  }
};

newCell3.appendChild(button2);
newCell3.appendChild(input2);
newCell3.appendChild(button1);

//image
// Create input for capturing photos as blob data

input5.type = 'file';
input5.name = 'data[' + rowCount + '][' + 5 + ']';
input5.accept = 'image/jpeg, image/png'; 

newCell4.appendChild(input5);


//subtotal
  
  input3.type = 'text';
  input3.name = 'data[' + rowCount + '][' + 4 + ']';
  input3.value="00.00";
  para1.innerText = '00.00';
  input6.className= 'display-nonee'
  newCell5.appendChild(input3);
  newCell5.appendChild(para1);

  input6.name = 'data[' + rowCount + '][' + 6 + ']';
    input6.value = 'kids'
    input6.type = 'text';
    console.log(input6.value, input6.name)
    
    newCell5.appendChild(input6);
    



rowCount++;
}
function addRowAccessories() {
    var table = document.getElementById('accesorriesTable');

//product
  var newRow = table.insertRow();
  var newCell = newRow.insertCell();
  var select1 = document.createElement('select');
  var selectOptions = ['Bath towel', 'Bedspread-single', 'Bedspread-double','Blanket-single','Blanket-double','Sofa cover','Cushion cover','Pillow-cover','Mat','Chair cover','Table cloth','Curtain','Stockings','Socks pair','Apron/lab coat','Tie'];
  var selectOptions1 = ['Cotton', 'Silk', 'Lenin','Polyester','Wool','Crepe','Denim','Leather','Satin','Synthetic','Velvet','Chiffon'];
  var newCell1 = newRow.insertCell();
  var select = document.createElement('select');
  var newCell2 = newRow.insertCell();
  var input1 = document.createElement('input');
  var newCell6 = newRow.insertCell();
    var input7=document.createElement('select');
  var newCell3 = newRow.insertCell();
  var input2 = document.createElement('input');
  var newCell4 = newRow.insertCell();
var input5 = document.createElement('input');
var newCell5 = newRow.insertCell();
  var input3 = document.createElement('input');
  var input6 = document.createElement('input');
  var para = document.createElement('p');
    var para1 = document.createElement('p');


  select1.name = 'data[' + rowCount + '][' + 0 + ']';
  for (var j = 0; j < selectOptions.length; j++) {
    var option = document.createElement('option');
    option.value = selectOptions[j];
    option.text = selectOptions[j];
    select1.appendChild(option);
  }
  newCell.appendChild(select1);

//material
  
  select.name = 'data[' + rowCount + '][' + 1 + ']';
  for (var j = 0; j < selectOptions1.length; j++) {
    var option = document.createElement('option');
    option.value = selectOptions1[j];
    option.text = selectOptions1[j];
    select.appendChild(option);
  }
  newCell1.appendChild(select);

  //price
  
  input1.type = 'text';
  select1.addEventListener('change', function(event) {
var selectedValue = event.target.value;

if(selectedValue === 'Bath towel'|| selectedValue === 'Bedspread-double' ){
  input1.value = '80.00';
  para.innerText = '80.00';
} else if(selectedValue === 'Bedspread-single'){
  input1.value = '70.00';
  para.innerText = '70.00';
} else if( selectedValue === 'Blanket-single'){
  input1.value = '60.00';
  para.innerText = '60.00';

} else if( selectedValue === 'Blanket-double'){
    input1.value = '80.00';
    para.innerText = '80.00';
    
} else if( selectedValue === 'Sofa cover'){
    input1.value = '70.00';
    para.innerText = '70.00';
    
} else if( selectedValue === 'Cushion cover'){
    input1.value = '60.00';
    para.innerText = '60.00';
    
} else if( selectedValue === 'Pillow-cover'){
    input1.value = '70.00';
    para.innerText = '70.00';
    
} else if( selectedValue === 'Mat'){
    input1.value = '100.00';
    para.innerText = '100.00';
    
} else if( selectedValue === 'Chair cover'){
    input1.value = '50.00';
    para.innerText = '50.00';
    
} else if( selectedValue === 'Table cloth'){
    input1.value = '70.00';
    para.innerText = '70.00';
    
} else if( selectedValue === 'Curtain'){
    input1.value = '80.00';
    para.innerText = '80.00';
    
} else if( selectedValue === 'Stockings'){
    input1.value = '90.00';
    para.innerText = '90.00';
    
} else if( selectedValue === 'Socks pair'){
    input1.value = '70.00';
    para.innerText = '70.00';
    
} else if( selectedValue === 'Apron/lab coat'){
    input1.value = '60.00';
} else if( selectedValue === 'Tie'){
    input1.value = '50.00';
    para.innerText = '50.00';
}
  });
  input1.name = 'data[' + rowCount + '][' + 2 + ']';
  input1.value = "70.00";
  
  newCell2.appendChild(input1);


  //service
  var selectOptions2 = ['dry cleaning','steam iron','wash and fold','wash and iron'];
    input7.name = 'data[' + rowCount + '][' + 7 + ']';
    for (var j = 0; j < selectOptions2.length; j++) {
      var option = document.createElement('option');
      option.value = selectOptions2[j];
      option.text = selectOptions2[j];
      input7.appendChild(option);
    }
    newCell6.appendChild(input7);



  //quantity
  
  input2.type = 'text';
  input2.name = 'data[' + rowCount + '][' + 3 + ']';
  input2.value = 0;
  input2.className = "quantity-input"
  //console.log("slkfdas", select1.value);
  

  var button1 = document.createElement('button');
button1.type = 'button';
button1.textContent = '+';
button1.className = 'increment-button'
button1.onclick = function() {
  if(input2.value >= 0){
      input2.value = parseInt(input2.value) + 1;
      console.log(input2.value);
      input3.value= parseInt(input1.value) * parseInt(input2.value);
      para1.innerText = `${parseInt(input1.value) * parseInt(input2.value)}.00`;
  }
};

var button2 = document.createElement('button');
button2.type = 'button';
button2.textContent = '-';
button2.className = 'decrement-button'
button2.onclick = function() {
  if(input2.value > 0){
      input2.value = parseInt(input2.value) - 1;
      console.log(input2.value);
      input3.value= parseInt(input1.value) * parseInt(input2.value);
      para1.innerText = `${parseInt(input1.value) * parseInt(input2.value)}.00`;
  }
};

newCell3.appendChild(button2);
newCell3.appendChild(input2);
newCell3.appendChild(button1);

//image
// Create input for capturing photos as blob data

input5.type = 'file';
input5.name = 'data[' + rowCount + '][' + 5 + ']';
input5.accept = 'image/jpeg, image/png'; 

newCell4.appendChild(input5);


//subtotal
  
  input3.type = 'text';
  input3.name = 'data[' + rowCount + '][' + 4 + ']';
  input3.value="00.00";
  newCell5.appendChild(input3);

  input6.name = 'data[' + rowCount + '][' + 6 + ']';
    input6.value = 'accesorries'
    input6.type = 'text';
    console.log(input6.value, input6.name)
    input6.className= 'display-nonee'
    newCell5.appendChild(input6);



rowCount++;
}

function showSection(section) {
      // Hide all sections
      var sections = document.getElementsByClassName('section');
      for (var i = 0; i < sections.length; i++) {
        sections[i].style.display = 'none';
      }

      // Show the selected section
      var selectedSection = document.getElementById(section + 'Section');
      selectedSection.style.display = 'block';
    }

  </script>
</body>
</html>