localStorage.setItem('array' , '["1","2","3"]');

let data = localStorage.getItem('array'); // get in web-cash

data = JSON.parse(data); // to array

console.log(data);