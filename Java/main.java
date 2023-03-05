package Java;

class Main {
    public static void main(String[] args) {
        System.out.println("Hola Mundo");
        UberX uberX = new UberX("AMQ123", new Account("Andres Herrera", "AND123"), "Chevrolet", "Sonic");
        uberX.setPassenger(4);
        uberX.printDataCar();

        UberVan uberVan = new UberVan("FGH345", new Account("Andres Herrera", "AND123"));
        uberVan.setPassenger(6);
        uberVan.printDataCar();
        //Car car = new Car("AMQ123", new Account("Android", "AND123"));
        //car.license =   "AMQ123";
        //car.driver= "Android";
        //car.passegenger = 4;
        //System.out.println("Car License: " + car.license);
        //car.printDataCar();

        //Car car2 = new Car("QWE567", new Account("Apple", "AND876"));
        //car2.license = "QWE567";
        //car2.driver = "Apple";
        //car2.passegenger = 3;
        //System.out.println("Car License: " + car2.license);
        //car2.printDataCar();
    }
}