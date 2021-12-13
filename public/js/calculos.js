
 //calculoas da tela para fazer automatico
  function calcular(){

  var n1 = document.getElementById('quantidade').value;
  var n2 = document.getElementById('valor').value;
  var n4 = document.getElementById('entrada').value;
  var n3 = parseFloat(n2.replace(',', '.')); 
  var tot = n1 * n3 - n4;
    document.getElementById('total').value = (tot).toFixed(2);


     }
 
 function mostra_proprio(caller)
  {
    var checks = document.querySelectorAll('input[type="checkbox"]');    
    checks.forEach(c => c.checked = (c == caller) );

  /*if(document.getElementById('exampleCheck2').checked){ //entrada
   /document.getElementById('entrada').style.display=" block";
  }else{
    document.getElementById('entrada').style.display=" none";
  }  */
      if(document.getElementById('exampleCheck1').checked){ //parcelado
        //document.getElementById('parcelado').style.display=" block";
      }else{
        document.getElementById('parcelado').style.display=" none";
    }   
    
  
}

