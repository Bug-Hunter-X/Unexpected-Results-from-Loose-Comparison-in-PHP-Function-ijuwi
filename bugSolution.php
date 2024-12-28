function foo(a, b) {
  if (a === b) {
    return true; 
  }
  return false;
}

//This code uses the strict comparison operator === which checks for both value and type. 
//This ensures that the function returns the correct value even if a and b are of different types but have the same value.
//for example foo(0, '0') will return false because they are of different types.
//This is the correct behavior.