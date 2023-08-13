<h1 align="center">Arrays</h1>

## Complete exercise

### NORMAL level

## Disclaimer

**Важно**: циклы `for`, `for in`, `for of` под запретом! 
Исключение составляют задачи, где использование явно требуется по условию.


#### Task 1 🖥

Дан массив:

```JS
    const colors = ['red', 'green', 'blue']
```

Выведите в консоль его длину.

решение:

```JS
const colors = ['red', 'green', 'blue'];

console.log(colors.length);
```

#### Task 2 🖥

Дан массив:

```JS
    const animals = ['monkey', 'dog', 'cat']
```

Выведите в консоль его последний элемент вне зависимости от его длинны.

решение:

```JS
const animals = ['monkey', 'dog', 'cat'];

console.log(animals[animals.length - 1]);
```

#### Task 3 🖥

Дан массив:

```JS
    const numbers = [5, 43, 63, 23, 90]
```

Удалите все элементы в массиве и выведите в консоль полученный результат.
Длина пустого массива должна быть равна 0.

> Решите двумя способами - через метод массива и через свойство

решение:

```JS
// Способ через метод массива.
const numbers = [5, 43, 63, 23, 90];

numbers.splice(0, numbers.length);

console.log(numbers.length);

// Способ через свойство.
const numbers = [5, 43, 63, 23, 90];

numbers.length = 0;

console.log(numbers.length);
```

#### Task 4 🖥

Дан массив:

```JS
    const students = ['Polina', 'Dasha', 'Masha']
```

Используя только методы массива, сделайте следующее:
+ Удалите последний элемент массива, затем вместо него добавьте в массив студента `Borya`.
+ Удалите первый элемент массива, затем вместо него добавьте в массив студента `Andrey`.
+ Полученный результат не забудьте вывести в консоль.

решение:

```JS
const students = ['Polina', 'Dasha', 'Masha']

students.splice(0, 0, 'Andrey');
students.splice(2, 2, 'Borya');
console.log(students);
```

#### Task 5 🖥

Дан массив:

```JS
    const cats = ['Gachito', 'Tom', 'Batman']
```

Выведите в консоль все элементы массива. Сначала через цикл **`for`**, затем **`for of`**, 
а затем через **`forEach()`**

решение:

```JS
const cats = ['Gachito', 'Tom', 'Batman'];

// for
for (let i = 0; i < cats.length; i++) {
  console.log(cats[i]);
}

// for of
for (const element of cats) {
  console.log(element);
}

// forEach
cats.forEach((ele) => console.log(ele));
```

#### Task 6 🖥

```JS
    const evenNumbers = [2, 4, 6, 8, 10]
    const oddNumbers = [1, 3, 5, 7, 9]
```

+ Соедините два массива чисел в один.
+ В полученном массиве попробуйте найти индекс числа **`8`**

> Соедините массив двумя способами - через метод и через spread

решение:

```JS
const evenNumbers = [2, 4, 6, 8, 10];
const oddNumbers = [1, 3, 5, 7, 9];

// Через метод
const concatNumbers = evenNumbers.concat(oddNumbers);
console.log(concatNumbers);

// Через spread
const spreadNumbers = [...evenNumbers, ...oddNumbers];
console.log(spreadNumbers);

// Найти индекс числа 8
concatNumbers.indexOf(8);
```

#### Task 7 🖥

Дан массив:

```JS
    const binary = [0, 0, 0, 0]
```
 
Превратите данный массив в строку.

> [0, 0, 0, 0] -> '0101010'

решение:

```JS
const binary = [0, 0, 0, 0];

console.log(binary.join(1));
```

#### Task 8 🖥

Есть массив профилей:
```JS
const profiles = [
  {
    name: 'John',
    data: {
      friends: {
        count: 25,
        list: []
      },
    }
  },
  {
    name: 'Mariam',
    data: {
      friends: {
        count: 1,
        list: []
      },
    }
  },
  {
    name: 'Boris',
    data: {
      friends: {
        count: 5,
        list: []
      }
      blocked: true,
    }
  },
  
  {
    name: 'Alice',
    data: null,
  },
]
```

Создайте новый массив, в котором будут только незаблокированные профили в которых есть данные (`data`), 
профили должны быть отсортированы по убыванию лайков.

решение:

```JS
const profiles = [
  {
    name: 'John',
    data: {
      friends: {
        count: 25,
        list: []
      },
    }
  },

  {
    name: 'Mariam',
    data: {
      friends: {
        count: 1,
        list: []
      },
    }
  },

  {
    name: 'Boris',
    data: {
      friends: {
        count: 5,
        list: []
      },
      blocked: true,
    }
  },
  
  {
    name: 'Alice',
    data: null,
  },
]

const legitProfiles = profiles.find(profile => profile.hasOwnProperty('data') && profile.data.blocked == true);

console.log(legitProfiles); 
```

#### Task 9 🖥

Реализуйте функцию которая будет проверять, является ли слово палиндромом.

решение:

```JS
const word = prompt('Enter any word:') ;

function isPolindrom(String){
  let arr = word.split('');
  arr.reverse();
  let reverseWord = arr.join('');

  if(String === reverseWord) return true;
  else return false;
}

console.log(isPolindrom(word));
```

#### Task 10 🖥

```JS
    const matrix = [
        [12, 98, 78, 65, 23],
        [54, 76, 98, 43, 65],
        [13, 324, 65, 312],
        [9092, 22, 45, 90000],
    ]
```

> Выведите в консоль среднее значение чисел в многомерном массиве.

решение:

```JS
const matrix = [
    [12, 98, 78, 65, 23],
    [54, 76, 98, 43, 65],
    [13, 324, 65, 312],
    [9092, 22, 45, 90000],
];

// Не совсем понял, как правильно считать надо было, в итоге есть два варианта:
// 1. Где сначало считается среднее значение каждого массивчика и потом среднее значение средних значений
matrix[0] = matrix[0].reduce((a, b) => a + b) / matrix[0].length;
matrix[1] = matrix[1].reduce((a, b) => a + b) / matrix[1].length;
matrix[2] = matrix[2].reduce((a, b) => a + b) / matrix[2].length;
matrix[3] = matrix[3].reduce((a, b) => a + b) / matrix[3].length;
const resutl = matrix.reduce((a, b) => a + b) / matrix.length;
console.log(resutl);

// 2. Где всё приводится к одному массиву и считается его сделнее значение, только тут что-то не так
const numString = matrix.join();
const numArray = numString.split(',');
const average = numArray.reduce((a, b) => a + b, 0) / numArray.length;
console.log(average);
```
  
#### Task 11 🖥

Дан массив:
```JS
   const mixedNumbers = [-14, 24, -89, 43, 0 , -1, 412, 4];
```

За один проход, создайте два массива. В один поместите все положительные числа включая 0, в другой все отрицательные. Оба массива затем выведите в консоль. Ожидается решение через `reduce()`.

```JS
   const [positive, negative] = getSplit(mixedNumbers);
   
   console.log(positive); // [24, 43, 0, 412, 4]
   console.log(negative); // [-14, -89, -1]
```

решение:

```JS
const mixedNumbers = [-14, 24, -89, 43, 0 , -1, 412, 4];

// Оно победило, не смог сделать рабочее решение 
function getSplit(array){
  array.reduce(num => (num >= 0) ? positive.push(num) : negative.push(num));
};

const [positive, negative] = getSplit(mixedNumbers);

console.log(positive);
console.log(negative);
```

#### Task 12 🖥

Создайте функцию `fromKebabToCamelCase(val)`:

```JS
fromKebabToCamelCase("kebab-case") == 'kebabCase';
fromKebabToCamelCase("-webkit-appearance") == 'WebkitAppearance';
fromKebabToCamelCase("use-style-decorator") == 'useStyleDecorator';
```

> split(), map(), join()

решение:

```JS
function fromKebabToCamelCase(val){
    val = val.split('-');

    val = val.map((word, index) => (index == 0) ? word : word.charAt(0).toUpperCase() + word.slice(1));

    val = val.join('');

    return val;
}

console.log(fromKebabToCamelCase('kebab-case'));
console.log(fromKebabToCamelCase('-webkit-appearance'));
console.log(fromKebabToCamelCase('use-style-decorator'));
```

## Bonus content

#### Решение задачи 7 из предыдущей домашки

Опишите по пунктам, как отработает этот код?
Важно ответить на вопрос, что будет записано в `this` и почему?
```JS

// (0) JS нашёл и создал функцию `makeProfile`
function makeProfile() {
  return {
    name: "John",
    self: this
  };
}
// (1) запуск функции `makeProfile()`
/**
 * return {
    name: "John",
    self: this  // Функция вызвана не из объекта, а в глобальной области видимости
                // this === undefined в строгом режиме
                // this === window в нестрогом режиме, в браузере
  }

  вернули в строгом режиме
  {
    name: "John",
    self: undefined,
  }
  
  или в нестрогом режиме
  {
    name: "John",
    self: window
  }
 **/
let user = makeProfile();

/**
 * В строгом режиме
 * user = {
    name: "John",
    self: undefined,
  }
 * 
 * В нестрогом режиме
 * user = {
    name: "John",
    self: window
  }
 * 
 **/

alert( user.self.name ); // Каким будет результат?

// user.self === window - в нестрогом режиме
// user.self === undefined - в строгом режиме

// user.self.name === '' - в нестрогом режиме
// user.self.name -> Ошибка! - в строгом режиме

```