/**
 * 1. Fix the following code snippet that attempts to calculate the sum of an array.
 * 
 * Calculates the sum of all elements in an array.
 * 
 * @param {number[]} arr - The array of numbers to sum.
 * @returns {number} The sum of the elements in the array.
 */
function sumArray(arr) {
  let sum = 0;
  for (let i = 0; i <= arr.length; i++) {
    sum += arr[i];
  }
  return sum;
}

console.log(sumArray([1, 2, 3, 4])); // Expected output: 10