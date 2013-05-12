function add(a, b) { return a+b; }
add(3,10);



var one = document.getElementById('one');
var two = document.getElementById('two');
var cross = document.createTextNode("X");
one.onclick = function() {one.appendChild(cross)};
  two.onclick = function() {two.appendChild(cross)};