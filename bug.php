function foo(a, b) {
  if (a === b) {
    return true; 
  }
  return false;
}

//This code has a bug where if a and b are of different types but have the same value, it will return false
//for example foo(0, '0') will return false even though they have the same value. 
//This is because the loose comparison operator == does not check for type. 
//The strict comparison operator === checks for both value and type. 
//Hence, this code should use the strict comparison operator === to ensure correct comparison.