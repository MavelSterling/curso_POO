package Java;

public class Card extends Payment{
    Long number;
    Short cvv;
    String date;

    public Card(Integer id, Long number, Short cvv, String date) {
        
        super(id);
        this.number = number;
        this.cvv = cvv;
        this.date = date;

    }

    void printCardInfo() {
        
        // Imprimir los últimos 5 dígitos del número de la tarjeta.
        char[] numberArray = Long.toString(number).toCharArray();
        String lastDigits = "";

        for (int i = numberArray.length - 1; i > 0; i--) {
            
            lastDigits += numberArray[i];

            if (lastDigits.length() == 5) {
                break;
            }

        }

        StringBuilder strInverse = new StringBuilder(lastDigits);

        System.out.println("Card Number → " + "**** **** **** " + strInverse.reverse());

    }
    
}
