<p align='right'>< TeachMeSkills /></p>
<h1 align='center'>Javascript Basic</h1>

## Complete exercise

### NORMAL level

#### Task 1 💻

Написать перебор от 1 до 20, где выведутся все числа кратные трём.

> Для вычисления кратности обратите внимание на оператор %

решение:

```javascript
    let i = 1;

    while (i < 20){
        if(i % 3 == 0) console.log(i);
        ++i;
    }
```

#### Task 2 💻

Нам надо идти на работу, но нужно проверить все ли мы взяли или нет?
Нам точно нужны ключи документы и ручка, но из еды нам надо яблоко или апельсин. 
Для решения этой задачи нам помогут логические операторы **`|| &&`**.

```javascript
    let key = true
    let documents = true
    let pen = true
    let apple = false
    let orange = true
```

> Ответ поместите в переменную **shouldGoToWork**

решение:

```javascript
    let key = true
    let documents = true
    let pen = true
    let apple = false
    let orange = true
    let shouldGoToWork

    if(key && documents && pen && (apple || orange)){
        shouldGoToWork = true;
        console.log(shouldGoToWork);
    } else {
        shouldGoToWork = false
        console.log(shouldGoToWork);
    }
```

#### Task 3 (boolean operators, conditionals)

Напишите программу, которая спрашивает у пользователя номер года, а затем выводит на 
экран, високосный ли это год.

решение:

```javascript
    let year = prompt('Enter year:')

    if(year % 4 == 0) console.log('This is leap year');
    else console.log('This is not a leap year');
```

#### Task 4 💻

Запросить у пользователя число: 

    1. Если число делится без остатка на 5 выводим сообщение Fiz
    2. Если число делится без остатка на 3 выводим сообшение Buz
    3. Если число делится без остатка и на 3 и на 5 выводим сообшение FizBuz

решение:

```javascript
    let number = prompt('Enter number:')

    if(number % 5 == 0 && number % 3 ==0)console.lo('FizBuz');
    else if(number % 3 == 0)console.log('Buz');
    else if(number % 5 == 0)console.log('Fiz');
    else if(isNaN(number)) console.log('pleaseenter a number');
```

#### Task 6 💻

Используя конструкцию `switch`, напишите программу, которая спрашивает у пользователя 
номер месяца и года, а затем выводит на экран количество дней в этом месяце.

Если номер месяца введён неверно - напишите об этом в консоль (можно использовать 
`console.error()`)

> используйте метод для определения високосного года из задания 3

решение:

```javascript
let monthNumber = prompt('Enter month number:')
let year = prompt('Enter year:')

year = year % 4;
switch (year){
    case 0:
        if(monthNumber <= 12 && monthNumber == 2) console.log("29 days");
        else if(monthNumber <= 12 && monthNumber % 2 == 1) console.log("31 days");
        else if(monthNumber <= 12 && monthNumber % 2 == 0) console.log("30 days");
        break;
    case 1:
    case 2:
    case 3:
        if(monthNumber <= 12 && monthNumber == 2) console.log("28 days");
        else if(monthNumber <= 12 && monthNumber % 2 == 1) console.log("31 days");
        else if(monthNumber <= 12 && monthNumber % 2 == 0) console.log("30 days");
        break;
    default:
        console.log(console.error('wrong year'));
        break;
}
```

### ADVANCED level

#### Task 1 👨‍🏫 

Напишите программу, которая выполняет следующие операции: 

1. Запрашивает у пользователя число.
2. Последовательно задает вопрос: 
    cколько отнять / прибавить / умножить / разделить от предыдущего результата?
3. По окончании вывести пользователю **`alert`**, содержащий формулу и результат например: 
> ((((6 - 10) + 5) * 20) / 2 = 110)

#### Task 2 👨‍🏫

Написать программу, которая будет выводить в консоль лесенку.

```
    #
    ##
    ###
    ####
    #####
    ######
```

#### Task 3 👨‍🏫 

Дополните результат задания 6 так, чтобы программа спрашивала пользователя до тех пор, пока он не введёт корректное значение или напишет в окошко `prompt()` специальное стоп-слово.

> Вам понадобится бесконечный цикл