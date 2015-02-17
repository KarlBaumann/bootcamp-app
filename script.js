/**
 * Created by Karl on 2/17/2015.
 */
var x;

for (x = 0; x < 30; x++) {
    if (x % 3 == 0 && x % 5 == 0) {
        console.error('FizzBuzz');
    } else if (x % 3 == 0) {
        console.info('Fizz');
    } else if (x % 5 == 0) {
        console.warn('Buzz');
    } else console.log(x);
}