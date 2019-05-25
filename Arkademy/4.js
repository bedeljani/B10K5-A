function gambar(input){
  var j;
  var i;
  var output;
  //Loop baris
  for(j = 0; j < input; j++){
    output = "";
    
  	//Loop kolom
  	for(i = 0; i < input; i++){
      
      if(i == j || i == Math.abs(j - input + 1))
        output += " X ";
      else 
        output += " = ";
    }
    
    alert(output);
  }
}
//Cara Pemanggilan
gambar(7);
