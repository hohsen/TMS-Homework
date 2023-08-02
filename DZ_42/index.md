## Complete exercise

### NORMAL level

#### Task 1 💻
Создайте переменные, затем сложите их и выведите результат в консоль разработчика.

```javascript
    const x = 20
    const y = 58
    const z = 42
```

Решение:

```javascript
    const x = 20
    const y = 58
    const z = 42

    console.log(x + y + z)

    // или

    const x = 20
    const y = 58
    const z = 42

    let result = x + y + z

    console.log(result)
```

#### Task 2 💻
Создайте константы:

    - количество секунд в минуте
    - количество минут в часу
    - количество часов в сутках
    - количество суток в году

Посчитайте ваш возраст в секундах и поместите результат в переменную **myAgeInSeconds**

Решение:

```javascript
    const secInMin = 60
    const minInHohur = 60
    const hoursInDay = 24
    const daysInYear = 365

    const myAgeInYears = 26
    
    const myAgeInSeconds = myAgeInYears * daysInYear * hoursInDay * minInHohur * secInMin

    console.log(myAgeInSeconds)
```

#### Task 3 💻

```javascript
    let count = 42
    let userName = '42'
```
Создайте две переменные. Поместите в них переменную **count** и превратите в строку, а **userName** наоборот в число. Попробуйте реализовать задачу двумя разными способами.

Решение:

```javascript
    let count = 42
    let userName = '42'

    // Способ 1

    console.log(typeof String(count))
    console.log(typeof Number(userName))

    // Способ 2

    let count = '1' + 42
    let userName = 2 * '42'

    console.log(typeof count)
    console.log(typeof userName)

    // Способ 3 приведения к строке

    let count = prompt('enter a number')
```

#### Task 4 💻
Создать 3 переменные разных типов и вывести в консоль для каждой из них строку следующего вида:

`Variable value: %variable value% has type: %type variable%`

Решение:

```javascript
    const num = 1
    const string = 'string' 
    const boolean = true

    console.log(`Variable value: ${num} has type: ${typeof num}`)
    console.log(`Variable value: ${string} has type: ${typeof string}`)
    console.log(`Variable value: ${boolean} has type: ${typeof boolean}`)
```

#### Task 5 💻
Запросить у пользователя имя и возраст и вывести их в консоль.

Решение:

```javascript
    const userName = prompt('What is your name?')
    const userAge = prompt('How old are you?')

    console.log(userName)
    console.log(userAge)
```

### ADVANCED level

#### Task 1 👨‍🏫

Поменяйте значение переменных местами не создавая дополнительной переменной:

```javascript
    let a = 4
    let b = 3
```

Решение:

```javascript
    let a = 4
    let b = 3

    b = b + a
    a = b - a
    b = b - a

    console.log(a)
    console.log(b)
```
