// 2. What will be the output of the following, and why?

let a = 3;
let b = "3";

console.log( a+b );   // 33
console.log( b+a);    // 33

console.log( b*a );   // 9
console.log( a*b );   // 9

console.log( a/b );   // 1
console.log( b/a );   // 1

console.log( a-b );   // 0
console.log( b-a );   // 0

// The addition output is 33 because it treats the addition as concatenation.
// The multiplication, division, and subtraction converts any numeric string into a number.