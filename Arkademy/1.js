function biodata ()
{
  var obj = {
    			name : "Abdel Julian B", 
    			adress : "Bandung, Jawa Barat ",
    			hobbies : ["Game", "Atletik", "Coding"],
    			is_married : false,
    			school : { highSchool : "SMK NEGERI 1 SUBANG", university : "",},
    			skills : [{name : "Java", score : "70"}, {name : "PHP", score : "70",}],
    	    };
  		return JSON.stringify(obj);
}
// Pemanggilan
var x = biodata();
print(x);
