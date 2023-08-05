<p align='right'>< TeachMeSkills /></p>
<h1 align='center'>Functions</h1>

## Complete exercise

### NORMAL level

#### Task 1 💻

Написать функцию **getSum**, которая будет высчитывать сумму чисел от нуля, до параметра, который мы в неё передаем. 

> Если передадим число 100 то, надо вычислить сумму чисел от 0 до 100 (должно получится 5050)

решение:

```javascript
const num = prompt('Enter a number:');

function getSum(num){
    let sum = 0;
    for (let i = 0; i <= num; i++) {
        sum += i;
    }
    return sum;
}

console.log(getSum(num));
```

#### Task 2 💻

Напишите функцию которая в качестве аргумента принимает в себя сумму кредита который хочет получить клиент и верните результат переплаты по кредиту:

+ процентная ставка в год — 17%,
+ количество лет — 5.

> Мы пишем функцию для хорошего банка, поэтому сумма кредита не увеличивается.

решение:

```javascript
const loanAmmount = prompt('Enter the desired loan amount:');

function loanOverpayments(loanAmmount){
    const interestRatePerYear = 17;
    const years = 5;

    // Формулу нагуглил и немного адаптировал, не ручаюсь за точность.
    const interest = (loanAmmount * (interestRatePerYear * 0.01)) / (years * 12);
    const total = ((loanAmmount / (years * 12)) + interest).toFixed(2);
    return total;
}

console.log(loanOverpayments(loanAmmount));
```

#### Task 3 💻

Написать функцию **`getSum`** которая принимает два целых числа a и b, которые могут быть положительными или отрицательными, найти сумму всех чисел между ними, включая их, и вернуть ее. Если два числа равны, верните a или b.

```javascript
    getSum(1, 0) == 1   // 1 + 0 = 1
    getSum(1, 2) == 3   // 1 + 2 = 3
    getSum(0, 1) == 1   // 0 + 1 = 1
    getSum(1, 1) == 1   // 1 Since both are same
    getSum(-1, 0) == -1 // -1 + 0 = -1
    getSum(-1, 2) == 2  // -1 + 0 + 1 + 2 = 2
```

решение:

```javascript
const a = Number(prompt('Enter first number:'));
const b = Number(prompt('Enter second number:'));

function getSum(a, b){
    let sum = 0;

    if(isNaN(a) || isNaN(b)) return console.log('Wrong input. Expected number.');
    if(a == b) return a;
    if(a > b){
        let c = a;
        a = b;
        b = c;
    }
    for (let i = a; i <= b; i++) {
        sum += i;
    }
    return sum;
}

console.log(getSum(a, b));
```

#### Task 4 💻

Напишите функцию **fooboo** которая принимает в качестве аргумента три параметра:

+ булевое значение
+ функцию **foo** которая выводит в консоль 'foo'
+ функцию **boo** которая выводит в консоль 'boo'

> Если переданное булевое значение **true** запускаем функцию **foo** иначе **boo**

решение:

```javascript
let boolean = false;

function fooboo(boolean, foo, boo){
    if(boolean) foo();
    else boo();
}

function foo(){
    console.log('foo');
}

function boo(){
    console.log('boo');
}

console.log(fooboo(boolean, foo, boo));
```

#### Task 5 💻

Напишите функцию **withNumberArgs()**, которая будет декорировать любую функцию
от двух переменных, которую вы в неё передадите.

Декорированная функция должна выводить в консоль ошибку, если тип одного из аргументов
не равен числу, и возвращать `0`:

```javascript
const mul = (a, b) => a * b;

const safeMul = withNumberArgs(mul);

safeMul(5, 5) // 25
safeMul(5, "5") // 0, ошибка в консоли - неверный тип параметра
```

решение:

```javascript
function withNumberArgs(funkcija){
    return function(a, b){
        if(typeof a !== 'number' || typeof b !== 'number'){
            console.error('Wrong input. Expected number.');
            return 0;
        }
        return funkcija(a, b);
    }
}

const mul = (a, b) => a * b;
const safeMul = withNumberArgs(mul);

console.log(safeMul(5,5));
console.log(safeMul(5,'5'));
```

### ADVANCED level

#### Task 1 👨‍🏫 

+ Реализуйте функцию, который принимает 3 целочисленных значения a, b, c. Функция должна возвращать **true**, если треугольник можно построить со сторонами заданной длины, и **false** в любом другом случае.

решение:

```javascript
const a = prompt('Enter side a:');
const b = prompt('Enter side b:');
const c = prompt('Enter side c:');

function triangleBuilder(a, b, c){
    if((a + b) > c && (a + c) > b && (b + c) > a) alert('Triangle exist');
    else alert('Triangle does not exist');
}

console.log(triangleBuilder(a, b, c));
```

#### Task 2 👨‍🏫

+ Напишите программу для вычисления общей стоимости покупки телефонов. Вы будете продолжать покупать телефоны (подсказка: циклы!), пока у вас не закончатся деньги на банковском счете. Вы также будете покупать аксессуары для каждого из телефонов.

+ После того, как вы посчитаете сумму покупки, прибавьте налог, затем выведите на экран вычисленную сумму покупки, правильно отформатировав её.

+ Наконец, сверьте сумму с балансом вашего банковского счета, чтобы понять можете вы себе это позволить или нет.

+ Вы должны настроить некоторые константы для «ставки налога», «цены телефона», «цены аксессуара», также как и переменную для вашего «баланса банковского счета».

+ Вам следует определить функции для вычисления налога и для форматирования цены со знаком валюты и округлением до двух знаков после запятой.

+ Как последний этап, попробуйте включить ввод данных в вашу программу, например с помощью функции prompt(..). Вы можете, например, запросить у пользователя баланс банковского счета. Развлекайтесь и будьте изобретательны!

решение:

```javascript

```

#### Task 3 👨‍🏫 - дополнительно

+ Ваша задача - разбить плитку шоколада заданного размера n x m на маленькие квадраты. Каждый квадрат имеет размер 1x1 и не может быть разбит. Реализуйте функцию, которая будет возвращать минимальное количество необходимых надломов.

+ Например, если вам дается плитка шоколада размером 2 x 1, вы можете разделить ее на отдельные квадраты всего за один надлом, но для размера 3 x 1 вы должны сделать два надлома.

+ Если входные данные недействительны, вы должны вернуть 0 (поскольку надломы не требуются, если у нас нет шоколада для разделения). Ввод всегда будет неотрицательным целым числом.

решение:

```javascript

```