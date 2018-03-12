var arr = [Int]()
print ("Empty: \(arr.isEmpty)")
arr.append(5)
arr.append(3)
arr += [8, 23]
print ("Element 1: \(arr[0])")
arr[2] = 45
print ("Element 3: \(arr[2])")
arr.insert(11, at: 2)
print ("Element 3: \(arr[2])")
arr.remove (at: 2)
print ("Element 3: \(arr[2])")


var arr_2 = Array (repeating: 0, count: 7)
var arr_3 = arr + arr_2
print ("Объединенные массивы: \(arr_3)")

for i in 1...5 {
  print ("Element i is \(i)")
}
print ("")
for i in 1...10 where i % 2 == 0 {
  print ("Element i is: \(i)")
}

var arr_4 = [1, 2, 3]
for item in arr {
  print("Element is: \(item)")
}

var n = 0
while n < 10 {
  if n > 7 {
    break
  }
  if n == 4 {
    n += 1
    continue
  }
  print("Element n is \(n)")
  n += 1
}

var i = 100
repeat {
  print("Element i is \(i)")
} while (i < 10)


var dict : [Int:String] = ([1: "NoName"])//такой синтаксис позволяет убрать ошибку дебагера
//"String interpolation produces a debug description for an optional value; did you mean to make this explicit?"
dict[23] = "George"
print ("\(String (describing: (dict[23])))")

var dict_2 : [String:String] = (["first": "George", "second": "John"])
print ("\(String (describing: (dict_2["second"])))")

for (key, value) in dict_2 {
  print("\(key) : \(value)")
}


let h = 23
let w = 1
let person = (h, w)
print ("Person 1 height is \(person.0)")

let person_2 = (height: 31, weight: 56)
print ("Person 2 weight is \(person_2.weight)")


var friend : String?//при знаке ? переменная может не получать никакого значения
friend = "Alex" //если переменная получает значение
if friend != nil { //переменная не получает значения (!=), присваеваем nil
  let person = friend!// если значение есть, то знак ! после переменной (константы?) возвращает нам это значение
  print ("\(person)")
}


func say(str: String, str_2: String) {
  print("\(str + str_2)")
}

say(str: "Hello, ", str_2: "World!")

func summ (num1: Int, num2: Int = 1) -> Int{
  return num1 + num2
}
print("\(summ(num1: 23, num2: 52))")


func multiply (nums: Int...) -> Int {//nums: Int... позволяет в дальнейшем указываеть сколько угодно значений. -> Int возвращает целочисленное значение
  var mult = 1 //исходный множитель
  for num in nums {//цикл перебирает каждое значение num в заданном ниже наборе значений nums
    mult *= num //команда умножения (исходное mult = 1) * (mult = 1) * (mult = 2) * (mult = 3) * (mult = 5)
  }
  return mult //возвращает результат цикла умножения
}
print ("Mult: \(multiply(nums: 1, 2, 3, 5))")

func twoReturns (num: Float) -> (two: Float, three: Float){
  let two = num * 2
  let three = num * 3
  return (two, three)
}
let mults = twoReturns(num: 4)
print("Result: \(mults.two), \(mults.three)")



var square: (Int) -> (Int) = {//замыкание
  num in
  return num * num
}
print("5 squared = \(square(5))")

var numbers = [9, 4, 5, 8, 2, 7]
let sortedNums = numbers.sorted(by: {//.sorted позволяет отсортировать значения по какому-либо принципу
  x, y in x < y//сортируем все значения в массиве по возрастанию
})
for i in sortedNums {//цикл переменной i при каждом срабатывании принимает наименьшее значение
  print(i)
}

let squareNums = numbers.map {//.map служит для работы с массивом
  (num: Int) -> String in//преобразуем Integer в строку с помощью in
  "\(num * num)"//возводим все значения массива в квадрат
}
print ("\(squareNums)")

let nums = numbers.filter {//фильтруем значения
  (num: Int) -> Bool in//преобразуем значения в boolean
    return num % 2 == 0
}
print(nums)

enum Cars {//перечисление
  case Audi
  case BMW
  case Volvo
  case Ford
}
var car = Cars.Audi


struct Square {//создание структуры, хз зачем тут дополнительно задано length 10
  var length : Int

  func sum (num: Int) {
    print ("\(num + num)")
  }
}

var block = Square (length: 10)
block.sum (num: 2)


class Car {//создание классов для ООП
  var model : String = "No model"//= "No model" - присваивание значения по умолчанию
  var weight : Float = 0.0
  var speed : Float = 0.0
  var wheels : Int = 4

  init(model: String, weight: Float, speed: Float, wheels: Int) {//конструктор
    self.model = model//обращаемся к самой переменной model в этом классе Car и присваеваем ей значение
    self.weight = weight
    self.speed = speed
    self.wheels = wheels
  }
  func info (){
    print ("\(self.model) has weight \(self.weight) and maximum speed \(speed). Also it has \(self.wheels) wheels!")
  }
  func set (model: String) {
    self.model = model
  }
  func set (wheels: Int, weight: Float) {//перегрузка функции set
    self.wheels = wheels
    self.weight = weight
  }
  func set (speed: Float) {//еще одна перегрузка функции set
    self.speed = speed
  }
}
var audi = Car (model: "Audi", weight: 2.1, speed: 232.25, wheels: 4)
audi.info()
audi.set(model: "Audi R8")
audi.info()
audi.set(speed: 312.5)
audi.info()

var volvo = Car (model: "Volvo", weight: 1.8, speed: 182.25, wheels: 4)
volvo.set(wheels: 4, weight: 1.7)
volvo.info()
