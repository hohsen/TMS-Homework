<p align='right'>< TeachMeSkills /></p>
<h1 align='center'>Objects</h1>

## Complete exercise

### NORMAL level

#### Task 1 💻

Выполните каждый из следующих пунктов отдельной строкой:
1. Создайте пустой объект `profile` (используйте `const`);
2. Добавьте в него свойство `name` со значением `John`;
3. Добавьте в него свойство `#lib_internal_isAdmin` со значением `true`;
4. Измените значение `name` с `John` на `Фёдор`;
5. Удалите свойство `#lib_internal_isAdmin`;

решение:

```JS
const profile = {
    name: 'John',
    "#lib_internal_isAdmin": true,
};

profile.name = 'Фёдор';
console.log(profile.name);

delete profile["#lib_internal_isAdmin"];
console.log(profile["#lib_internal_isAdmin"]);
```

#### Task 2 🖥

Дан обьект:

```JS
const colors = {
    'ru pum pu ru rum': {
        red: 'красный',
        green: 'зеленый',
        blue: 'синий'
    },
};
```

Вывести в консоль слово красный

решение:

```JS
const colors = {
    'ru pum pu ru rum': {
        red: 'красный',
        green: 'зеленый',
        blue: 'синий',
    },
};

console.log(colors['ru pum pu ru rum'].red);
```

#### Task 3 🖥

Дан обьект:

```JS
    const student = {
        name: 'John',
        age: 19,
        isHappy: true
    }
```

C помощью цикла **for in** вывести в консоль сначала все пары ключ-значение в объекте.

> name - John age - 19 isHappy - true

решение:

```JS
const student = {
    name: 'John',
    age: 19,
    isHappy: true,
}

for (key in student) {
      console.log(`${key} - ${student[key]}`);
}
```

#### Task 4 🖥

Дан обьект:

```JS
    let salaries = {
        andrey: 500,
        sveta: 413,
        anton: 987,
        andrey: 664,
        alexandra: 199
    }
```
Вычислите среднюю зарплату сотрудников

решение:

```JS
let salaries = {
    andrey: 500,
    sveta: 413,
    anton: 987,
    andrey: 664,
    alexandra: 199,
}

// Решение без того, чтобы взять оба значения ключей andrey. 
// Из того что понял, не может быть два одинаковых ключа и перезаписанную запись не достать?
// Можно конечно сделать через массив попробовать, но это не точно
let count = 0;
let sumSalarie = 0;

for (key in salaries) {
    sumSalarie += salaries[key];
    ++count;
}

console.log(sumSalarie/count);
```

#### Task 5 🖥

Напишите функцию `isEmpty()`, которая вернёт `true`, если переданный в неё объект пуст (не содержит свойств).

```JS
  isEmpty({}); // true
  isEmpty({ lol: "kek" }); // false
```

решение:

```JS
const isEmpty = (objectName) => Object.keys(objectName).length === 0

console.log(isEmpty({}));
console.log(isEmpty({ lol: "kek" }));
```

#### Task 6 🖥

У нас есть обьект с животными. Наша задача узнать имя птицы и вывести его в консоль. Но произошла ошибка и в этом обьекте нету птицы. Если попробуем узнать имя мы получим **ОШИБКУ**. 
Задача придумать как обратиться к несуществующему обьекту и не получить ошибку чтобы наша программа работала дальше.

```JS
const animals = {
   cat: {
      name: 'Енчик',
      age: 3,
   },
   dog: {
      name: 'Орео',
      age: 2,
   }
}
```

решение:

```JS
const animals = {
   cat: {
      name: 'Енчик',
      age: 3,
   },
   dog: {
      name: 'Орео',
      age: 2,
   }
}

// Наверное как-то так?
try {
  console.log(animals.bird.name);
} catch (error) {
    console.log('Птычка');
} finally {
  console.log('𓅫');
}
```

#### Task 7 🖥

Опишите по пунктам, как отработает этот код?
Важно ответить на вопрос, что будет записано в `this` и почему?
```JS
function makeProfile() {
  return {
    name: "John",
    self: this
  };
}

let user = makeProfile();

alert( user.self.name ); // Каким будет результат?
```

решение:

Функция `makeProfile` возвращает объект с ключями `name` со знаением `"John"` и `self` со знаением `this`.
Далее создаём объект `user` и присваевыем ему функцию `makeProfile`.
Далее делаем `alert` объекта `user`, берём у него ключь `self` и по скольку там лежит `this` в функции, то берёт из глобальной области видемости window.self, а это домен сайта...
`name` же выводит `says`, не знаю почему

#### Task 8 🖥

Создайте объект счётчик `counter`, в котором будет записано значение изначально равное `0`.
В `counter` должен быть метод `showCurrent()`, который будет выводить в консоль текущее значение.
Также в объекте должно быть два метода для уменьшения и увеличения значения:

```JS
counter.showCurrent(); // 0 - вывод в консоль
counter.increment();
counter.increment();
counter.showCurrent(); // 2
counter.decrement();
counter.showCurrent(); // 1
```

решение:

```JS
const counter = {
    num: 0,

    showCurrent(){
        console.log(this.num);
    },

    increment(){
        this.num++;
    },

    decrement(){
        this.num--;
    },
}


counter.showCurrent();
counter.increment();
counter.increment();
counter.showCurrent();
counter.decrement();
counter.showCurrent();
```

#### Task 9 🖥

Дополните результат из задания 8 так, чтобы можно было составить цепочку вызовов:

```JS
counter.showCurrent().increment().increment().showCurrent().decrement().showCurrent();
```

решение:

```JS
const counter = {
    num: 0,

    showCurrent(){
        console.log(this.num);
        return this;
    },

    increment(){
        this.num++;
        return this;
    },

    decrement(){
        this.num--;
        return this;
    },
}

counter.showCurrent().increment().increment().showCurrent().decrement().showCurrent();
```

#### Task 10 🖥

Сделайте функцию-конструктор `Counter()`, которая сможет создавать счётчики из заданий 8-9:

```JS
const counter1 = new Counter();
const counter2 = new Counter();

counter2.increment();
counter2.showCurrent(); // 1
counter1.showCurrent(); // 0
```

решение:

```JS
function Counter(){
    this.num = 0;
    this.showCurrent = function(){
        console.log(this.num);
        return this;
    };
    this.increment = function(){
        this.num++;
        return this;
    };
}

const counter1 = new Counter();
const counter2 = new Counter();

counter2.increment();
counter2.showCurrent();
counter1.showCurrent();
```