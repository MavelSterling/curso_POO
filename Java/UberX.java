package Java;

public class UberX extends Car{

    String brand;
    String model;

    // Constructor de los parametros de la clase Car (licence, driver)
    public UberX(String license, Account driver, String brand, String model) {
        super(license, driver);
        this.brand= brand; // atributo de la clase hija
        this.model= model;
        //TODO Auto-generated constructor stub
    }
    
    
}
