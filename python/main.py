from car import Car

if __name__ == "__main__":
    print("Hola Mundo")
    car= Car()
    car.license = "AMS234"
    car.driver = "Android"
    print(vars(car))