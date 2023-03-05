from car import Car
from account import Account
from uberX import UberX
from user import User


if __name__ == "__main__":
    print("Hola Mundo")
    car= Car("AMS234", Account("Apple","AND876"))
    print(vars(car))
    print(vars(car.driver))
    #car.license = "AMS234"
    #car.driver = "Android"
    #print(vars(car))
    
    #car2 = Car()
    #car2.license = "QWE567"
    #car2.driver = "Apple"
    #print(vars(car2))
    
    print("UberX")
    #uberX = UberX("ADF875", Account("Felipe", "GSG458"), "Chevrolet", "Spark")    
    #print(vars(uberX))
    #print(vars(uberX.driver))
    
    print("User")
    #user = User("Name user","123657","nameuser@gmail.com", "6753")
    #print(vars(user))
   
    