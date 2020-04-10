function isPrimeNumber(n) {
  let n;
  let isPrime;
  let str = 'lol';
  if (typeof n == 'number') {
    for (let i = 2; i <= n; i++) {
      isPrime = true;
      for (let j = 2; j < i; j++) {
        if (i % j == 0) {
          isPrime = false;
          str = ' is not prime number';
          break;
        }
      }
    }
    if (isPrime) {
      str = ' is prime number';
    }
    console.log(n + str);
  } else if (typeof n == 'object') {
    for (val of n) {
      for (let i = 2; i <= val; i++) {
        isPrime = true;
        for (let j = 2; j < i; j++) {
          if (i % j == 0) {
            isPrime = false;
            str = ' is not prime number';
            continue;
          }
        }
      }
      if (isPrime) {
        str = ' is prime number';
      }
      console.log(val + str);
    }
  } else {
    str = 'error';
  }
  console.log(str);
}
