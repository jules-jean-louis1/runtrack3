$(document).ready(function(){

   /* $.ajax({
    url:"string.json",
    method:"GET",
    success:function(data){
        return $("#result").html(data.city);
   }
   }); */

   const json = '{ "name": "La Plateforme_", "address": "8 rue dhozier", "city": "Marseille", "nb_staff": 11, "creation": 2019 }';

   function jsonValueKey(json, key) 
   {
        const obj = JSON.parse(json);
        return $("#result").html(obj[key]);
   }
   console.log(jsonValueKey(json, "city"));
});