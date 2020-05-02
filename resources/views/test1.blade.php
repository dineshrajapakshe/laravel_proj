<!DOCTYPE html>
<html>
 <head>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
  function populate(s1,s2){
      var s1 = document.getElementBYid(s1);
      var s2 = document.getElementBYid(s2);
      s2.innerHTML=" ";
      if (s1.value == "Hardware"){
          var optionArray=["|", "system unit|System unit"," unit| Unit"];
      }
     else if (s1.value == "Software"){
         var optionArray=["|", "system unit|System unit"," unit| Unit"];
     }
     else if (s1.value == "Network"){
         var optionArray=["|", "system unit|System unit"," unit| Unit"];
      }
      for(var option in optionArray){
          var pair = optionArray[option].split("|");
          var newOPtion = document.createElement("option");
          newOPtion.value= pair(0);
          newOption.innerHTML= pair(1);
          s2.options.add(newOption);

      }
}
</script>
</head>
<body>
<h3>Choose job category </h3>
<hr/>
category:
<select id = "slct1" name ="slct1" onchange="populate(this.id,'slct2')">
    <option value =""></option>
    <option value ="Hardware">Hardware</option>
    <option value ="Software">Software</option>
    <option value ="Network">Network</option>
</select> 
<hr/>
Subproblem
<select id = "slct2" name ="slct2"></select>
<hr/>

</body>
<html>